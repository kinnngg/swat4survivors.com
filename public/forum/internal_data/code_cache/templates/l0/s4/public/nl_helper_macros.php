<?php
// FROM HASH: 12db37adfc9b0f8c456f7ef84d1e62b1
return array('macros' => array('above_body_wide' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'template' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	
	' . $__templater->callMacro('nl_slider_insert_macros', 'feature-insert', array(
		'template' => $__vars['template'],
		'location' => 'belowNav',
		'position' => 'wide',
	), $__vars) . '
	
';
	return $__finalCompiled;
},
'below_body_wide' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'template' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	
	' . $__templater->callMacro('nl_slider_insert_macros', 'feature-insert', array(
		'template' => $__vars['template'],
		'location' => 'aboveFooter',
		'position' => 'wide',
	), $__vars) . '
	
';
	return $__finalCompiled;
},
'below_body' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'template' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	
';
	return $__finalCompiled;
},
'above_content_narrow' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'template' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	
	' . $__templater->callMacro('nl_slider_insert_macros', 'feature-insert', array(
		'template' => $__vars['template'],
		'location' => 'belowNav',
		'position' => 'narrow',
	), $__vars) . '
	
';
	return $__finalCompiled;
},
'below_content_narrow' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'template' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	
	' . $__templater->callMacro('nl_slider_insert_macros', 'feature-insert', array(
		'template' => $__vars['template'],
		'location' => 'aboveFooter',
		'position' => 'narrow',
	), $__vars) . '
	
';
	return $__finalCompiled;
},
'between_footer' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'template' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	
';
	return $__finalCompiled;
},
'above_footer_links' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'template' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	
';
	return $__finalCompiled;
},
'below_footer_links' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'template' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	
';
	return $__finalCompiled;
},
'main_footer_content' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'template' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	
	';
	if ($__templater->fn('property', array('nlEnableFooterColumns', ), false) == true) {
		$__finalCompiled .= '
		' . $__templater->includeTemplate('nl_flexcolumns', $__vars) . '
	';
	}
	$__finalCompiled .= '
	
';
	return $__finalCompiled;
},
'above_footer_copyright' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'template' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	
';
	return $__finalCompiled;
},
'below_footer_copyright' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'template' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

' . '

' . '

' . '

' . '

' . '

' . '

' . '

' . '

' . '

';
	return $__finalCompiled;
});