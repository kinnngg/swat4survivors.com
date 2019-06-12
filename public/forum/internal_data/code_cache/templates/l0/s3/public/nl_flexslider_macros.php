<?php
// FROM HASH: df07e65c16cec1859154b71f207b9cb5
return array('macros' => array('default' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'element' => '!',
		'animation' => '!',
		'dots' => '!',
		'arrows' => '!',
		'wait' => '!',
		'autoplay' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	';
	$__compilerTemp1 = '';
	if ($__vars['xf']['language']['text_direction'] == 'RTL') {
		$__compilerTemp1 .= '
				rtl: true,
				';
	}
	$__templater->inlineJs('
		$(window).on("load", function() {
			$(\'' . $__vars['element'] . '\').flexslider({
				' . $__compilerTemp1 . '
				animation: "' . $__vars['animation'] . '",
				easing: "swing",
				slideshowSpeed: ' . $__vars['wait'] . ',
				animationSpeed: 900,
				pauseOnHover: true,
				pauseOnAction: true,
				touch: true,
				video: true,
				controlNav: ' . $__vars['dots'] . ',
				directionNav: ' . $__vars['arrows'] . ',
				animationLoop: true,
				slideshow: ' . $__vars['autoplay'] . ',
				useCSS: false,
				before: function() {
					if (!canSlide)
						slider.flexslider("stop");
				}
			});

		});
	');
	$__finalCompiled .= '
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';

	return $__finalCompiled;
});