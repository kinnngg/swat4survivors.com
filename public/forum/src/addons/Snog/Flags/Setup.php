<?php

namespace Snog\Flags;

use XF\AddOn\AbstractSetup;
use XF\AddOn\StepRunnerInstallTrait;
use XF\AddOn\StepRunnerUninstallTrait;
use XF\AddOn\StepRunnerUpgradeTrait;
use XF\Db\Schema\Alter;
use XF\Util\File;
use Snog\Flags\CloudFlare\CloudflareMiddleware;
use GuzzleHttp\Cookie\FileCookieJar;
use GuzzleHttp\Client;

class Setup extends AbstractSetup
{
	use StepRunnerInstallTrait;
	use StepRunnerUpgradeTrait;
	use StepRunnerUninstallTrait;

	public function checkRequirements(&$errors = [], &$warnings = [])
	{
		$versionId = $this->addOn->version_id;

		if($versionId && $versionId < '22')
		{
			$errors[] = 'Upgrades can only be done to version 1.2.2 or later';
		}

		if(!function_exists('gzopen'))
		{
			$errors[] = 'Gzip is either not installed on your server or is not configured for use with PHP.';
		}

		$datapath = FILE::canonicalizePath(\XF::app()->config('externalDataPath'));

		if (!is_writable($datapath))
		{
			$errors[] = 'The data folder is not able to be written to. Make sure it exists and/or change the permissions to world writable (777)';
		}

		if(!empty($errors))
		{
			return $errors;
		}

		// MAXMIND DATABASE DOWNLOADED HERE TO PREVENT DATABASE TABLE CHANGES UNTIL COMPLETE
		// ALSO ACTS AS A CHECK IF SERVER CAN CONNECT TO MAXMIND AND THROWS ERRORS IF NOT
		$tempDir = FILE::getTempDir();
		$tempPath = $tempDir . DIRECTORY_SEPARATOR . 'GeoLite2-Country.mmdb.gz';
		$unzippedFile = str_ireplace('.gz','', $tempPath);
		$finalPath = 'data://countryflags/GeoLite2-Country.mmdb';
		$dataDir = FILE::canonicalizePath(\XF::app()->config('externalDataPath') . '/countryflags');

		// DON'T DOWNLOAD IF DB ALREADY EXISTS (PREVENTS SPAMMING OF MAXMIND)
		if(!FILE::abstractedPathExists($finalPath))
		{
			try
			{
				// getConfig & push are not in XF 2.0
				if (\XF::options()->currentVersionId >= '2010031')
				{
					// XF 2.1
					$cookiefile = $dataDir . '/cloudflare_cookie.txt';
					$client = new Client(['cookies' => new FileCookieJar($cookiefile, true)]);
					$client->getConfig('handler')->push(CloudflareMiddleware::create());

					// Attempt to connect to MaxMind for the database
					$response = $client->request('GET', 'https://geolite.maxmind.com/download/geoip/database/GeoLite2-Country.mmdb.gz');
				}
				else
				{
					// XF 2.0
					$response = \XF::app()->http()->client()->get('https://geolite.maxmind.com/download/geoip/database/GeoLite2-Country.mmdb.gz');
				}
			} catch (\GuzzleHttp\Exception\RequestException $e)
			{
				if (null !== $e->getResponse())
				{
					$code = $e->getResponse()->getStatusCode();

					if ($code == 503)
					{
						$error = 'Maxmind Error ' . $code . ': ' . $e->getResponse()->getReasonPhrase() . ' - Unable to download Maxmind database';
					}
					else
					{
						$error = 'Maxmind Error ' . $code . ': ' . $e->getResponse()->getReasonPhrase();
					}

					$errors[] = $error;
				}
				else
				{
					$errors[] = $e->getMessage();
				}

				return $errors;
			}

			// Got good response - Save database .gz file
			file_put_contents($tempPath, (string)$response->getBody());

			$buffer = 4096;
			// Open gz file for extraction
			$zip = gzopen($tempPath, 'rb');

			if ($zip !== false)
			{
				// Extract database
				$fp = fopen($unzippedFile, 'wb');

				while (!gzeof($zip))
				{
					fwrite($fp, gzread($zip, $buffer));
				}

				fclose($fp);
				gzclose($zip);
				unlink($tempPath);

				File::copyFileToAbstractedPath($unzippedFile, $finalPath);
				unlink($unzippedFile);
			}
			else
			{
				// Not a gz file!
				$errors[] = 'Error extracting GeoLite2 database.<br />';
			}
		}

		return $errors;
	}

	public function installStep1()
	{
		$this->schemaManager()->alterTable('xf_user', function(Alter $table)
		{
			$table->addColumn('snog_flag', 'VARCHAR', 3)->setDefault('');
		});
	}

	public function installStep2()
	{
		$this->schemaManager()->alterTable('xf_user_privacy', function(Alter $table)
		{
			$table->addColumn('snog_flag_view', 'enum')->values(['everyone', 'members', 'none'])->setDefault('everyone');
		});
	}

	public function installStep3()
	{
		$src = 'src/addons/Snog/Flags/defaultdata';
		$this->copyContents($src);
	}

	public function upgrade2000370Step1()
	{
		$this->schemaManager()->alterTable('xf_user_privacy', function(Alter $table)
		{
			$table->changeColumn('snog_flag_view', 'enum')->values(['everyone', 'members', 'none'])->setDefault('everyone');
		});
	}

	public function uninstallStep1()
	{
		$this->schemaManager()->alterTable('xf_user', function(Alter $table)
		{
			$table->dropColumns(['snog_flag']);
		});
	}

	public function uninstallStep2()
	{
		$this->schemaManager()->alterTable('xf_user_privacy', function(Alter $table)
		{
			$table->dropColumns(['snog_flag_view']);
		});
	}

	public function uninstallStep3()
	{
		FILE::deleteAbstractedDirectory('data://countryflags');
	}

	public function copyContents($src, $sub = false)
	{
		if($sub) $basePath = str_ireplace('src/addons/Snog/Flags/defaultdata/', '', $src);
		$dir = opendir($src);

		while(false !== ( $file = readdir($dir)) )
		{
			if(($file != '.') && ($file != '..'))
			{
				if(is_dir($src . '/' . $file) )
				{
					$newSrc = $src . '/' . $file;
					$this->copyContents($newSrc, true);
				}else{
					$oldPath = $src . '/'. $file;

					if($sub)
					{
						$newFile = $basePath . '/' . $file;
					}else{
						$newFile = $file;
					}

					$newPath = sprintf('data://countryflags/%s', $newFile);
					File::copyFileToAbstractedPath($oldPath, $newPath);
				}
			}
		}

		closedir($dir);
	}
}