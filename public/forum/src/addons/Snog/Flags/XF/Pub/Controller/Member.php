<?php

namespace Snog\Flags\XF\Pub\Controller;

use XF\Entity\User;
use XF\Entity\UserProfile;
use XF\Mvc\FormAction;
use XF\Mvc\ParameterBag;

class Member extends XFCP_Member
{
	public function actionTooltip(ParameterBag $params)
	{
		if ($params->user_id)
		{
			$user = $this->assertViewableUser($params->user_id, [], true);

			$viewParams = [
				'user' => $user
			];
			return $this->view('XF:Member\Tooltip', 'member_tooltip', $viewParams);
		}
		else
		{
			return $this->view('XF:Member\Tooltip', 'snog_flags_testflag', $viewParams);
		}
	}
}