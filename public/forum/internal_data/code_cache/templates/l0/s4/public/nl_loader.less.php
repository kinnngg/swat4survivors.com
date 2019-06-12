<?php
// FROM HASH: 889bd2fa795851335b31961a8187de3a
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->includeTemplate('nl_base.less', $__vars) . '
' . $__templater->includeTemplate('nl_pro.less', $__vars) . '
' . $__templater->includeTemplate('nl_complexbit.less', $__vars) . '
' . $__templater->includeTemplate('nl_mod.less', $__vars) . '
' . $__templater->includeTemplate('nl_slick.less', $__vars) . '
' . $__templater->includeTemplate('nl_flexslider.less', $__vars) . '
' . $__templater->includeTemplate('nl_flexcolumns.less', $__vars) . '
' . $__templater->includeTemplate('nl_ticker.less', $__vars) . '
' . $__templater->includeTemplate('nl_nodes.less', $__vars) . '
' . $__templater->includeTemplate('nl_page_layouts.less', $__vars) . '
' . $__templater->includeTemplate('nl_theme_effects.less', $__vars) . '
' . $__templater->includeTemplate('nl_style.less', $__vars);
	return $__finalCompiled;
});