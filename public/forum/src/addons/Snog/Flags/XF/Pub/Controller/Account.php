<?php

namespace Snog\Flags\XF\Pub\Controller;

class Account extends XFCP_Account
{
	protected function savePrivacyProcess(\XF\Entity\User $visitor)
	{
		$form = parent::savePrivacyProcess($visitor);
		$input = $this->filter(['privacy' => ['snog_flag_view' => 'str']]);

		if(!\XF::options()->snog_countryflags_permit && !$input['privacy']['snog_flag_view'])
		{
			$input['privacy']['snog_flag_view'] = 'everyone';
		}

		$userPrivacy = $visitor->getRelationOrDefault('Privacy');
		$form->setupEntityInput($userPrivacy, $input['privacy']);
		return $form;
	}
}