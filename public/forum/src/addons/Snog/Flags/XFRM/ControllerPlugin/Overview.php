<?php

namespace Snog\Flags\XFRM\ControllerPlugin;

class Overview extends XFCP_Overview
{
	public function applyResourceFilters(\XFRM\Finder\ResourceItem $resourceFinder, array $filters)
	{
		parent::applyResourceFilters($resourceFinder, $filters);

		if (!empty($filters['snog_country']))
		{
			$resourceFinder->where('User.snog_flag', $filters['snog_country']);
		}
	}

	public function getResourceFilterInput()
	{
		$filters = parent::getResourceFilterInput();

		$country = $this->filter('snog_country', 'str');
		if ($country) $filters['snog_country'] = $country;

		return $filters;
	}
}