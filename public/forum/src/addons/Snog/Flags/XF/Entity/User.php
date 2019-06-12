<?php

namespace Snog\Flags\XF\Entity;

use XF\Mvc\Entity\Entity;
use XF\Mvc\Entity\Structure;

class User extends XFCP_User
{
	public static function getStructure(Structure $structure)
	{
		$structure = parent::getStructure($structure);

		$structure->columns['snog_flag'] = ['type' => Entity::STR, 'default' => ''];

		$structure->defaultWith[] = 'Privacy';

		return $structure;
	}
}