<?php

namespace Snog\Flags\XF\ChangeLog;

class User extends XFCP_User
{
	protected function getLabelMap()
	{
		$labelMap = parent::getLabelMap();
		$labelMap['snog_flag_view'] = 'snog_countryflags_view';
		return $labelMap;
	}

	protected function getFormatterMap()
	{
		$formatterMap = parent::getFormatterMap();
		$formatterMap['snog_flag_view'] = 'formatPrivacyValue';
		return $formatterMap;
	}
}