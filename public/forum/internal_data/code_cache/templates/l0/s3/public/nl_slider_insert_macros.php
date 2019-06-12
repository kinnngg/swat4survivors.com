<?php
// FROM HASH: 90695f91cc0a59c97cc1b82b1f04aee1
return array('macros' => array('feature-insert' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'template' => '!',
		'position' => '!',
		'location' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	';
	$__vars['templateName'] = $__vars['template'];
	$__finalCompiled .= '
	';
	$__vars['position'] = $__vars['position'];
	$__finalCompiled .= '
	';
	$__vars['location'] = $__vars['location'];
	$__finalCompiled .= '
	
	';
	if ($__templater->fn('property', array('nlFeaturedContentWidgetsDisplayOrder', ), false) == 'top') {
		$__finalCompiled .= '
		' . $__templater->callMacro(null, 'nl_featured_slider', array(
			'template' => $__vars['templateName'],
			'position' => $__vars['position'],
			'location' => $__vars['location'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSliderDisplayOrder', ), false) == 'top') {
		$__finalCompiled .= '
		' . $__templater->callMacro(null, 'nl_slider', array(
			'template' => $__vars['templateName'],
			'position' => $__vars['position'],
			'location' => $__vars['location'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlLogoIconSliderDisplayOrder', ), false) == 'top') {
		$__finalCompiled .= '
		' . $__templater->callMacro(null, 'nl_icon_slider', array(
			'template' => $__vars['templateName'],
			'position' => $__vars['position'],
			'location' => $__vars['location'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	
	';
	if ($__templater->fn('property', array('nlFeaturedContentWidgetsDisplayOrder', ), false) == 'middle') {
		$__finalCompiled .= '
		' . $__templater->callMacro(null, 'nl_featured_slider', array(
			'template' => $__vars['templateName'],
			'position' => $__vars['position'],
			'location' => $__vars['location'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSliderDisplayOrder', ), false) == 'middle') {
		$__finalCompiled .= '
		' . $__templater->callMacro(null, 'nl_slider', array(
			'template' => $__vars['templateName'],
			'position' => $__vars['position'],
			'location' => $__vars['location'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlLogoIconSliderDisplayOrder', ), false) == 'middle') {
		$__finalCompiled .= '
		' . $__templater->callMacro(null, 'nl_icon_slider', array(
			'template' => $__vars['templateName'],
			'position' => $__vars['position'],
			'location' => $__vars['location'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	
	';
	if ($__templater->fn('property', array('nlFeaturedContentWidgetsDisplayOrder', ), false) == 'bottom') {
		$__finalCompiled .= '
		' . $__templater->callMacro(null, 'nl_featured_slider', array(
			'template' => $__vars['templateName'],
			'position' => $__vars['position'],
			'location' => $__vars['location'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSliderDisplayOrder', ), false) == 'bottom') {
		$__finalCompiled .= '
		' . $__templater->callMacro(null, 'nl_slider', array(
			'template' => $__vars['templateName'],
			'position' => $__vars['position'],
			'location' => $__vars['location'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlLogoIconSliderDisplayOrder', ), false) == 'bottom') {
		$__finalCompiled .= '
		' . $__templater->callMacro(null, 'nl_icon_slider', array(
			'template' => $__vars['templateName'],
			'position' => $__vars['position'],
			'location' => $__vars['location'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	
';
	return $__finalCompiled;
},
'nl_featured_slider' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'template' => '!',
		'position' => '!',
		'location' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
		<!-- nl featured content insert -->
		';
	if ($__templater->fn('property', array('nlEnableFeaturedContentSlider', ), false) == true) {
		$__finalCompiled .= '
			';
		if (((((($__templater->fn('property', array('nlFeaturedSliderForumList', ), false) == true) AND ($__vars['template'] == 'forum_list')) OR (($__templater->fn('property', array('nlFeaturedSliderResourceList', ), false) == true) AND ($__vars['template'] == 'xfrm_overview'))) OR (($__templater->fn('property', array('nlFeaturedSliderDiscussionList', ), false) == true) AND ($__vars['template'] == 'forum_view'))) OR ($__templater->fn('property', array('nlFeaturedSliderCustomPages', ), false) AND ($__vars['template'] == 'page_view'))) AND (($__vars['location'] == 'belowNav') AND ($__vars['position'] == 'wide'))) {
			$__finalCompiled .= '
				<div class="nlFeature_anchor anchor_' . $__templater->escape($__vars['position']) . '_' . $__templater->escape($__vars['location']) . '"></div>	
				' . $__templater->includeTemplate('nl_feature_rotator', $__vars) . '
			';
		}
		$__finalCompiled .= '
		';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
},
'nl_slider' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'template' => '!',
		'position' => '!',
		'location' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
		<!-- nl  slider insert -->
		';
	if (($__templater->fn('property', array('nlEnableSlider', ), false) == true) AND ($__vars['location'] == 'belowNav')) {
		$__finalCompiled .= '
			';
		if (((((($__templater->fn('property', array('nlSliderLocationForumList', ), false) == true) AND ($__vars['template'] == 'forum_list')) OR (($__templater->fn('property', array('nlSliderLocationResourceList', ), false) == true) AND ($__vars['template'] == 'xfrm_overview'))) OR (($__templater->fn('property', array('nlSliderLocationDiscussionList', ), false) == true) AND ($__vars['template'] == 'forum_view'))) OR ($__templater->fn('property', array('nlSliderLocationCustomPages', ), false) AND ($__vars['template'] == 'page_view'))) AND ($__templater->fn('property', array('nlSliderSidebarPageLayout', ), false) == $__vars['position'])) {
			$__finalCompiled .= '
				<div class="nlFeature_anchor anchor_' . $__templater->escape($__vars['position']) . '_' . $__templater->escape($__vars['location']) . '"></div>
				' . $__templater->includeTemplate('nl_flexslider', $__vars) . '
			';
		}
		$__finalCompiled .= '
		';
	}
	$__finalCompiled .= '	
';
	return $__finalCompiled;
},
'nl_icon_slider' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'template' => '!',
		'position' => '!',
		'location' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
		<!-- nl icon slider insert -->
		';
	if ($__templater->fn('property', array('nlEnableIconSlider', ), false) == true) {
		$__finalCompiled .= '
			';
		if (((($__templater->fn('property', array('nlLogoIconSliderAllPages', ), false) == 'forum') AND ($__vars['template'] == 'forum_list')) OR ($__templater->fn('property', array('nlLogoIconSliderAllPages', ), false) == 'all')) AND (($__templater->fn('property', array('nlLogoIconSliderLocation', ), false) == $__vars['location']) AND ($__templater->fn('property', array('nlIconSliderSidebarPageLayout', ), false) == $__vars['position']))) {
			$__finalCompiled .= '
				<div class="nlFeature_anchor anchor_' . $__templater->escape($__vars['position']) . '_' . $__templater->escape($__vars['location']) . '"></div>
				' . $__templater->includeTemplate('nl_slick_rotator', $__vars) . '
			';
		}
		$__finalCompiled .= '
		';
	}
	$__finalCompiled .= '	
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

' . '
	
' . '

';
	return $__finalCompiled;
});