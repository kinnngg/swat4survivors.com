<?php

namespace Snog\Flags\XF\Entity;

use XF\Mvc\Entity\Structure;

class UserPrivacy extends XFCP_UserPrivacy
{
	public static function getStructure(Structure $structure)
	{
		$structure = parent::getStructure($structure);
		
		$structure->columns['snog_flag_view'] = ['type' => self::STR, 'default' => 'everyone',
			'allowedValues' => ['everyone', 'members', 'none'],
			'verify' => 'verifyPrivacyChoice'
		];
		
		return $structure;
	}
}