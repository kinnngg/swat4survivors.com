<?php

namespace Snog\Flags\XF\Pub\Controller;

class Forum extends XFCP_Forum
{
	protected function getForumFilterInput(\XF\Entity\Forum $forum)
	{
		$filters = parent::getForumFilterInput($forum);
		$country = $this->filter('snog_country', 'str');
		if(strlen($country) > 2) $country = '';
		if ($country) $filters['snog_country'] = $country;
		return $filters;
	}

	protected function applyForumFilters(\XF\Entity\Forum $forum, \XF\Finder\Thread $threadFinder, array $filters)
	{
		if (!empty($filters['snog_country']))
		{
			$visitor = \XF::visitor();

			if($visitor->is_admin || ($visitor->is_moderator && \XF::options()->snog_countryflags_moderator))
			{
				$threadFinder
					->where('User.snog_flag', '=', $filters['snog_country']);
			}
			elseif ($visitor->user_id > 0 && $visitor->user_state == 'valid')
			{
				$threadFinder
					->where('User.snog_flag', '=', $filters['snog_country'])
					->whereOr([
						['User.Privacy.snog_flag_view', 'members'],
						['User.Privacy.snog_flag_view', 'everyone']
					]);
			}
			else
			{
				$threadFinder
					->where('User.snog_flag', '=', $filters['snog_country'])
					->where('User.Privacy.snog_flag_view', '=', 'everyone');
			}
		}

		parent::applyForumFilters($forum, $threadFinder, $filters);
	}
}