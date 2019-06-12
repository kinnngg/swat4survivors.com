<?php

namespace Snog\Flags\Callback;

class Country
{
	public static function getCountry($contents, $params)
	{
		$countryCode = $params[0];
		$size = '';
		$value = '';

		if (isset($params[1])) $size = $params[1];

		if($countryCode)
		{
			if(isset($params[2]) && $params[2] == 'name') $value = '<div class="userflag-name">';
			if(isset($params[2]) && $params[2] == 'info') $value = '<div class="userflag-info">';
			if(isset($params[2]) && $params[2] == 'tool')
			{
				if(\XF::options()->currentVersionId >= '2010031')
				{
					$value = '<div class="userflag-tooltip-m">';
				}else{
					$value = '<div class="userflag-tooltip">';
				}
			}

			$phrase = \XF::phrase('snog_countryflags_' . $countryCode);

			if (!$size)
			{
				// CHANGED THIS FOR iPAD PROBLEM WHERE COULDN'T TOUCH OUT OF MEMBER CARD TOOLTIP
				if(isset($params[2]))
				{
					$value .= '<span class="userflag-tool flags flag-' . $countryCode . '" data-xf-init="tooltip" title="' . $phrase . '"></span>';
				}
				else
				{
					$value .= '<span class="userflag-view flags flag-' . $countryCode . '" data-xf-init="tooltip" title="' . $phrase . '"></span>';
				}
			}
			elseif ($size == 's')
			{
				$value .= '<span class="userflag-s flags flag-' . $countryCode . '" data-xf-init="tooltip" title="' . $phrase . '"></span>';
			}
			else
			{
				$value .= '<span class="userflag-m flags flag-' . $countryCode . '" data-xf-init="tooltip" title="' . $phrase . '" ></span>';
			}

			if(isset($params[2]) && ($params[2] == 'name' || $params[2] == 'info' || $params[2] == 'tool')) $value .= '</div>';
		}

		return $value;
	}

	public static function getCountries($contents, $params)
	{
		$countryCodes = array(
			"A1", "A2", "AD", "AE", "AF", "AG", "AI", "AL", "AM", "AO", "AP", "AQ", "AR", "AS", "AT", "AU", "AW", "AX", "AZ",
			"BA", "BB", "BD", "BE", "BF", "BG", "BH", "BI", "BJ", "BL", "BM", "BN", "BO", "BQ", "BR", "BS", "BT", "BV", "BW", "BY", "BZ",
			"CA", "CC", "CD", "CF", "CG", "CH", "CI", "CK", "CL", "CM", "CN", "CO", "CR", "CU", "CV", "CW", "CX", "CY", "CZ",
			"DE", "DJ", "DK", "DM", "DO", "DZ",
			"EC", "EE", "EG", "EH", "ER", "ES", "ET", "EU",
			"FI", "FJ", "FK", "FM", "FO", "FR",
			"GA", "GB", "GD", "GE", "GF", "GG", "GH", "GI", "GL", "GM", "GN", "GP", "GQ", "GR", "GS", "GT", "GU", "GW", "GY",
			"HK", "HM", "HN", "HR", "HT", "HU",
			"ID", "IE", "IL", "IM", "IN", "IO", "IQ", "IR", "IS", "IT",
			"JE", "JM", "JO", "JP",
			"KE", "KG", "KH", "KI", "KM", "KN", "KP", "KR", "KW", "KY", "KZ",
			"LA", "LB", "LC", "LI", "LK", "LO", "LR", "LS", "LT", "LU", "LV", "LY",
			"MA", "MC", "MD", "ME", "MF", "MG", "MH", "MK", "ML", "MM", "MN", "MO", "MP", "MQ", "MR", "MS", "MT", "MU", "MV", "MW", "MX", "MY", "MZ",
			"NA", "NC", "NE", "NF", "NG", "NI", "NL", "NO", "NP", "NR", "NU", "NZ",
			"OM",
			"PA", "PE", "PF", "PG", "PH", "PK", "PL", "PM", "PN", "PR", "PS", "PT", "PW","PY",
			"QA",
			"RE", "RO", "RS", "RU", "RW",
			"SA", "SB", "SC", "SD", "SE", "SG", "SH", "SI", "SJ", "SK", "SL", "SM", "SN", "SO", "SR", "SS", "ST", "SV", "SX", "SY", "SZ",
			"TC", "TD", "TF", "TG", "TH", "TJ", "TK", "TL", "TM", "TN", "TO", "TR", "TT", "TV", "TW", "TZ",
			"UA", "UG", "UM", "US", "UY", "UZ",
			"VA", "VC", "VE", "VG", "VI", "VN", "VU",
			"WF", "WS",
			"YE", "YT",
			"ZA", "ZM", "ZW", "ZZ"
		);

		$usedPhrases = [];

		// BUILD LIST OF PHRASES TO RETRIEVE
		foreach($countryCodes as $countryCode)
		{
			$usedPhrases[] = 'snog_countryflags_' . $countryCode;
		}

		// GET THE PHRASES IN THE VISITOR'S LANGUAGE
		$countryPhrases = \XF::app()->finder('XF:PhraseMap')
			->where('language_id', \XF::visitor()->language_id)
			->where('title', $usedPhrases)
			->pluckFrom('Phrase', 'title')
			->order('Phrase.phrase_text', 'ASC')
			->fetch();

		// BUILD FILTER OPTIONS
		$optionValues[] = ['value' => '', 'text' => \XF::phrase('all')];

		foreach($countryPhrases as $key => $countryPhrase)
		{
			$key = substr($countryPhrase->title, -2);
			$optionValues[] = ['value' => $key, 'text' => $countryPhrase->phrase_text];
		}

		$viewParams = ['optionValues' => $optionValues, 'filters' => $params[0]];
		$view = \XF::app()->templater()->renderTemplate('public:snog_flags_select', $viewParams);
		return $view;
	}

	public static function getCountryName($contents, $params)
	{
		$country = '';

		if($params[0])
		{
			$countryPhrase = \XF::app()->finder('XF:PhraseMap')
				->where('language_id', \XF::visitor()->language_id)
				->where('title', 'snog_countryflags_' . $params[0])
				->pluckFrom('Phrase', 'title')
				->fetchOne();

			$country = $countryPhrase->phrase_text;
		}

		return $country;
	}
}