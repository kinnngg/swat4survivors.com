<?php
// FROM HASH: 9ab7c1a813556aa17e07f2866d1d2b9b
return array('macros' => array('default' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'element' => '!',
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
	jQuery(document).ready(function(){
		$("' . $__vars['element'] . '").slick({
			' . $__compilerTemp1 . '
			autoplay: true,
			autoplaySpeed: 7000,
			infinite: true,
			slidesToShow: 3,
			responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			]
		});
		$("' . $__vars['element'] . ' iframe").wrap("<div class=\'videowrapper\'/>");
	});
	');
	$__finalCompiled .= '
';
	return $__finalCompiled;
},
'custom' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'element' => '!',
		'dots' => '!',
		'arrows' => '!',
		'autoplay' => '!',
		'show' => '!',
		'scroll' => '!',
		'vertical' => '!',
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
	jQuery(document).ready(function(){
		$("' . $__vars['element'] . '").slick({
			' . $__compilerTemp1 . '
			dots: ' . $__vars['dots'] . ',
			arrows: ' . $__vars['arrows'] . ',
			autoplay: ' . $__vars['autoplay'] . ',
			autoplaySpeed: 4000,
			infinite: true,
			slidesToShow: ' . $__vars['show'] . ',
			slidesToScroll: ' . $__vars['scroll'] . ',
			vertical: ' . $__vars['vertical'] . ',
			responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}
			]
		});
		$("' . $__vars['element'] . ' iframe").wrap("<div class=\'videowrapper\'/>");
	});
	');
	$__finalCompiled .= '
';
	return $__finalCompiled;
},
'icons' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(), $__arguments, $__vars);
	$__finalCompiled .= '
	
	';
	if ($__templater->fn('property', array('nlIconSliderAppendDots', ), false) == 'block') {
		$__finalCompiled .= '
		';
		$__vars['appendDots'] = '.slick-container--icons .block-body';
		$__finalCompiled .= '
	';
	} else {
		$__finalCompiled .= '
		';
		$__vars['appendDots'] = '.slick-container--icons';
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '
	
	';
	$__compilerTemp1 = '';
	if ($__vars['xf']['language']['text_direction'] == 'RTL') {
		$__compilerTemp1 .= '
			rtl: true,
			';
	}
	$__compilerTemp2 = '';
	if ($__templater->fn('property', array('nlIconSliderUseDotControls', ), false) == true) {
		$__compilerTemp2 .= 'true';
	} else {
		$__compilerTemp2 .= 'false';
	}
	$__compilerTemp3 = '';
	if ($__templater->fn('property', array('nlIconSliderAutoPlay', ), false) == true) {
		$__compilerTemp3 .= 'true';
	} else {
		$__compilerTemp3 .= 'false';
	}
	$__compilerTemp4 = '';
	if ($__templater->fn('property', array('nlIconSliderInfiniteScroll', ), false) == true) {
		$__compilerTemp4 .= 'true';
	} else {
		$__compilerTemp4 .= 'false';
	}
	$__templater->inlineJs('
	jQuery(document).ready(function(){
		$("#slick-icons").slick({
			' . $__compilerTemp1 . '
			dots: ' . $__compilerTemp2 . ',
			appendDots: $("' . $__vars['appendDots'] . '"),
			arrows: true,
			autoplay: ' . $__compilerTemp3 . ',
			autoplaySpeed: ' . $__templater->fn('property', array('nlIconSliderAutoPlayTime', ), false) . ',
			infinite: ' . $__compilerTemp4 . ',
			slidesToShow: ' . $__templater->fn('property', array('nlIconSliderMaxSlides', ), false) . ',
			slidesToScroll: ' . $__templater->fn('property', array('nlIconSliderSlidesToScroll', ), false) . ',
			responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: ' . $__templater->fn('property', array('nlIconSliderTabletMaxSlides', ), false) . ',
					slidesToScroll: ' . $__templater->fn('property', array('nlIconSliderTabletMaxSlides', ), false) . '
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: ' . $__templater->fn('property', array('nlIconSliderMobileMaxSlides', ), false) . ',
					slidesToScroll: ' . $__templater->fn('property', array('nlIconSliderMobileMaxSlides', ), false) . '
				}
			}
			]
		});
		$("#slick-icons iframe").wrap("<div class=\'videowrapper\'/>");
	});
	');
	$__finalCompiled .= '
';
	return $__finalCompiled;
},
'featured' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(), $__arguments, $__vars);
	$__finalCompiled .= '
	
	';
	if ($__templater->fn('property', array('nlFeaturedSliderAppendDots', ), false) == 'block') {
		$__finalCompiled .= '
		';
		$__vars['appendDots2'] = '.slick-container--featured .block-body';
		$__finalCompiled .= '
	';
	} else {
		$__finalCompiled .= '
		';
		$__vars['appendDots2'] = '.slick-container--featured';
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '
	
	';
	$__compilerTemp1 = '';
	if ($__vars['xf']['language']['text_direction'] == 'RTL') {
		$__compilerTemp1 .= '
			rtl: true,
			';
	}
	$__templater->inlineJs('
	jQuery(document).ready(function(){
		$("#slick-featured").slick({
			' . $__compilerTemp1 . '
			dots: true,
			appendDots: $("' . $__vars['appendDots2'] . '"),
			arrows: true,
			autoplay: ' . $__templater->fn('property', array('nlFeaturedSliderAutoPlay', ), false) . ',
			autoplaySpeed: ' . $__templater->fn('property', array('nlFeaturedSliderAutoPlayTime', ), false) . ',
			infinite: true,
			slidesToShow: ' . $__templater->fn('property', array('nlFeaturedSliderMaxWidgets', ), false) . ',
			slidesToScroll: 1,
			responsive: [
			{
			  breakpoint: 768,
			  settings: {
				slidesToShow: 2
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1
			  }
			}
			]
		});
		$("#slick-featured iframe").wrap("<div class=\'videowrapper\'/>");
	});
	');
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