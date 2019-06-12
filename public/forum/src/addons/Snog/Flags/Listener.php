<?php

namespace Snog\Flags;

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use Snog\Flags\Maxmind\Reader;
use XF\Util\File;

class Listener
{
	public static function Visitor(&$visitor)
	{
		if ($visitor->user_id > 0)
		{
			$somecontent = '';
			$xfOptions = \XF::options();
			$ipaddress = 'UNKNOWN';
			$user_flag = 'A1';
			$app = \XF::app();

			if ($xfOptions->snog_countryflags_log)
			{
				if ($xfOptions->snog_countryflags_sitelock) $somecontent .= 'SITELOCK ENABLED - ';
				$somecontent .= 'User ID: ' . $visitor->user_id;
			}

			$testMode = false;
			$HTTP_CLIENT_IP = '';
			$xenforoIP = '';
			$REMOTE_ADDR = '';
			$HTTP_FORWARDED_FOR = '';
			$HTTP_FORWARDED = '';
			$HTTP_X_FORWARDED_FOR = '';

			if(!$testMode)
			{
				if (!empty($_SERVER['HTTP_CLIENT_IP']))
				{
					$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
					if ($xfOptions->snog_countryflags_log) $somecontent .= ' ::- CLIENT IP: ' . $_SERVER['HTTP_CLIENT_IP'];
				}
				else
				{
					if ($xfOptions->snog_countryflags_log) $somecontent .= ' ::- CLIENT IP: Empty';
				}

				if (!self::isvalid_ip($ipaddress) && !empty($_SERVER['REMOTE_ADDR']))
				{
					$ipaddress = $app->request()->getIp();
				}

				if (!empty($_SERVER['HTTP_FORWARDED_FOR']))
				{
					$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
					if ($xfOptions->snog_countryflags_log) $somecontent .= ' ::- FORWARDED FOR IP: ' . $_SERVER['HTTP_FORWARDED_FOR'];
				}
				else
				{
					if ($xfOptions->snog_countryflags_log) $somecontent .= ' ::- FORWARDED FOR IP: Empty';
				}

				if (!empty($_SERVER['HTTP_FORWARDED']))
				{
					$ipaddress = $_SERVER['HTTP_FORWARDED'];
					if ($xfOptions->snog_countryflags_log) $somecontent .= ' ::- FORWARDED IP: ' . $_SERVER['HTTP_FORWARDED'];
				}
				else
				{
					if ($xfOptions->snog_countryflags_log) $somecontent .= ' ::- FORWARDED IP: Empty';
				}

				// FIX FOR OLD STYLE OPERA MINI PROXIES
				if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) && strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ','))
				{
					if ($xfOptions->snog_countryflags_log) $somecontent .= ' ::- OLD STYLE OPERA CHECK: ' . $_SERVER['HTTP_X_FORWARDED_FOR'];
					$tempaddress = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
					foreach ($tempaddress as $checkip)
					{
						if (self::isvalid_ip(trim($checkip)))
						{
							$ipaddress = trim($checkip);
							break;
						}
					}
				}
				else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
				{
					if ($xfOptions->snog_countryflags_log) $somecontent .= ' ::- OTHER PROXY X CHECK: ' . $_SERVER['HTTP_X_FORWARDED_FOR'];

					if (self::isvalid_ip($_SERVER['HTTP_X_FORWARDED_FOR']))
					{
						if ($xfOptions->snog_countryflags_log) $somecontent .= ' ::- VALID CHECK: ' . $_SERVER['HTTP_X_FORWARDED_FOR'];
						$iplong = ip2long($_SERVER['HTTP_X_FORWARDED_FOR']);
						if ($xfOptions->snog_countryflags_log) $somecontent .= ' ::- IP LONG: ' . $iplong;

						if ((($iplong >= 167772160 && $iplong <= 184549375) && ($iplong >= 2886729728 && $iplong <= 2887778303)) || ($iplong < 167772160 || $iplong > 2887778303) && (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], '192.168') !== 0))
						{
							if ($xfOptions->snog_countryflags_log) $somecontent .= ' ::- FINAL PROXY CHECK: ' . $_SERVER['HTTP_X_FORWARDED_FOR'];
							$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
						}
					}
				}

				if ($xfOptions->snog_countryflags_log)
				{
					$somecontent .= ' ::- Raw HTTP REMOTE ADDR: ' . $_SERVER['REMOTE_ADDR'];

					if (!empty($_SERVER['HTTP_CLIENT_IP']))
					{
						$somecontent .= ' ::- CLIENT IP: ' . $_SERVER['HTTP_CLIENT_IP'];
					}

					$somecontent .= ' ::- XenForo IP: ' . $app->request()->getIp();

					if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
					{
						$somecontent .= ' ::- Raw X_FORWARDED: ' . $_SERVER['HTTP_X_FORWARDED_FOR'];
					}

					$somecontent .= ' ::- Result IP address: ' . $ipaddress . "\r\n";

					$dataDir = FILE::canonicalizePath($app->config('externalDataPath'));
					$adapter = new Local($dataDir . '/countryflags/', FILE_APPEND);
					$fs = new Filesystem($adapter);
					$filename = 'ipaddress.log';

					if($fs->has($filename))
					{
						$fs->update($filename, $somecontent);
					}
					else
					{
						$fs->write($filename, $somecontent);
					}
				}

				if ($xfOptions->snog_countryflags_sitelock && isset($_SERVER['HTTP_X_FORWARDED_FOR']))
				{
					$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
				}
			}
			else
			{
				if (!empty($HTTP_CLIENT_IP))
				{
					$ipaddress = $HTTP_CLIENT_IP;
				}

				if (!self::isvalid_ip($ipaddress) && !empty($REMOTE_ADDR))
				{
					$ipaddress = $xenforoIP;
				}

				if (!empty($HTTP_FORWARDED_FOR))
				{
					$ipaddress = $HTTP_FORWARDED_FOR;
				}

				if (!empty($HTTP_FORWARDED))
				{
					$ipaddress = $HTTP_FORWARDED;
				}

				// FIX FOR OLD STYLE OPERA MINI PROXIES
				if (!empty($HTTP_X_FORWARDED_FOR) && strpos($HTTP_X_FORWARDED_FOR, ','))
				{
					$tempaddress = explode(',', $HTTP_X_FORWARDED_FOR);
					foreach ($tempaddress as $checkip)
					{
						if (self::isvalid_ip(trim($checkip)))
						{
							$ipaddress = trim($checkip);
							break;
						}
					}
				}
				else if (!empty($HTTP_X_FORWARDED_FOR))
				{
					if (self::isvalid_ip($HTTP_X_FORWARDED_FOR))
					{
						$iplong = ip2long($HTTP_X_FORWARDED_FOR);

						if ((($iplong >= 167772160 && $iplong <= 184549375) && ($iplong >= 2886729728 && $iplong <= 2887778303)) || ($iplong < 167772160 || $iplong > 2887778303) && (strpos($HTTP_X_FORWARDED_FOR, '192.168') !== 0))
						{
							$ipaddress = $HTTP_X_FORWARDED_FOR;
						}
					}
				}

				if ($xfOptions->snog_countryflags_sitelock && isset($HTTP_X_FORWARDED_FOR))
				{
					$ipaddress = $HTTP_X_FORWARDED_FOR;
				}
			}

			// FOR TESTING PURPOSES ONLY
			//$ipaddress = '197.89.228.42';
			//$ipaddress = '2003:00d9:6bcc:9000:5979:1e75:27cb:28d5';

			if (self::isvalid_ip($ipaddress))
			{
				$temppatha = \XF::config('externalDataPath') . '/countryflags/GeoLite2-Country.mmdb';
				$requestor = \XF::app()->request();
				$request = $requestor->getServer('REQUEST_URI', '');

				if (!stristr($request, 'admin.php'))
				{
					if (!file_exists($temppatha)) return;

					$reader = new Reader($temppatha);
					$record = $reader->get($ipaddress);

					if ($record)
					{
						if (isset($record['country']))
						{
							$user_flag = $record['country']['iso_code'];
						}
						else if (isset($record['registered_country']))
						{
							$user_flag = $record['registered_country']['iso_code'];
						}

						if (!isset($record['country']) && !isset($record['registered_country']) && isset($record['continent']))
						{
							if ($record['continent']['code'] == 'EU') $user_flag = $record['continent']['code'];
						}
					}
				}
				else
				{
					return;
				}
			}
			else
			{
				if ($ipaddress !== 'UNKNOWN')
				{
					if (strpos($ipaddress, '10.') !== false && strpos($ipaddress, '10.') == 0)
					{
						$iplong = ip2long($ipaddress);
						if ($iplong >= 167772160 && $iplong <= 184549375)
						{
							$user_flag = 'LO';
						}
					}

					if (strpos($ipaddress, '172.') !== false && strpos($ipaddress, '172.') == 0)
					{
						$iplong = ip2long($ipaddress);
						if ($iplong >= 2886729728 && $iplong <= 2887778303)
						{
							$user_flag = 'LO';
						}
					}

					if (strpos($ipaddress, '192.168') !== false && strpos($ipaddress, '192.168') == 0)
					{
						$user_flag = 'LO';
					}

					if ($user_flag !== 'LO')
					{
						$user_flag = 'ZZ';
					}
				}
			}

			if ($visitor->snog_flag <> $user_flag)
			{
				$db = \XF::db();

				$update = ['snog_flag' => $user_flag];
				$db->update('xf_user', $update, 'user_id = ?', $visitor->user_id);
			}
		}
		return;
	}

	public static function isvalid_ip($ip, $include_priv_res = false)
	{
		return $include_priv_res ?
			filter_var($ip, FILTER_VALIDATE_IP) !== false :
			filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false;
	}
}
