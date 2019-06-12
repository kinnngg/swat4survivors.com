<?php
namespace Snog\Flags\Cron;

use XF\Util\File;
use Snog\Flags\CloudFlare\CloudflareMiddleware;
use GuzzleHttp\Cookie\FileCookieJar;
use GuzzleHttp\Client;

class Maxmind
{
	public static function Update()
	{
		$tempDir = FILE::getTempDir();
		$tempPath = $tempDir . DIRECTORY_SEPARATOR . 'GeoLite2-Country.mmdb.gz';
		$unzippedFile = str_ireplace('.gz','', $tempPath);
		$finalPath = 'data://countryflags/GeoLite2-Country.mmdb';
		$dataDir = FILE::canonicalizePath(\XF::app()->config('externalDataPath') . '/countryflags');

		try
		{
			// getConfig & push are not in XF 2.0
			if(\XF::options()->currentVersionId >= '2010031')
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
		}
		catch(\GuzzleHttp\Exception\RequestException $e)
		{
			// ERROR: SINCE THIS IS CRON TASK, DON'T PROCESS JUST EXIT TASK AS IF IT COMPLETED
			return true;
		}

		file_put_contents($tempPath, (string)$response->getBody());

		$buffer = 4096;
		$zip = gzopen($tempPath, 'rb');

		if($zip !== false)
		{
			$fp = fopen($unzippedFile, 'wb');

			while(!gzeof($zip))
			{
				fwrite($fp, gzread($zip, $buffer));
			}

			fclose($fp);
			gzclose($zip);
			unlink($tempPath);

			File::copyFileToAbstractedPath($unzippedFile, $finalPath);
			unlink($unzippedFile);
		}
	}
}