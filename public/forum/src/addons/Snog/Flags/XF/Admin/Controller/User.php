<?php

namespace Snog\Flags\XF\Admin\Controller;

class User extends XFCP_User
{
	protected function userSaveProcess(\XF\Entity\User $user)
	{
		$form = parent::userSaveProcess($user);

		$input = $this->filter([
			'privacy' => [
				'snog_flag_view' => 'str',
			],
		]);

		$userPrivacy = $user->getRelationOrDefault('Privacy');
		$form->setupEntityInput($userPrivacy, $input['privacy']);

		return $form;
	}
}