<?php
// FROM HASH: 4c816e4ebe6757dc8ab3e47b78f44345
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<script src="' . $__templater->fn('js_url', array('nulumia/theme-functions.js', ), true) . '"></script>
<script src="' . $__templater->fn('js_url', array('nulumia/jquery.flexslider.js', ), true) . '"></script>
<script src="' . $__templater->fn('js_url', array('nulumia/slick.min.js', ), true) . '"></script>
';
	if ($__templater->fn('property', array('nlEnableFullBackgroundMode', ), false) == 'slideshow') {
		$__finalCompiled .= '
	<script src="' . $__templater->fn('js_url', array('nulumia/jquery.backstretch.min.js', ), true) . '"></script>
	<script>
		jQuery.backstretch([
			';
		if ($__templater->fn('property', array('nlBackgroundSwitcher1', ), false) != null) {
			$__finalCompiled .= '"' . $__templater->fn('property', array('nlBackgroundSwitcher1', ), true) . '"';
		}
		$__finalCompiled .= '
			';
		if ($__templater->fn('property', array('nlBackgroundSwitcher2', ), false) != null) {
			$__finalCompiled .= ', "' . $__templater->fn('property', array('nlBackgroundSwitcher2', ), true) . '"';
		}
		$__finalCompiled .= '
			';
		if ($__templater->fn('property', array('nlBackgroundSwitcher3', ), false) != null) {
			$__finalCompiled .= ', "' . $__templater->fn('property', array('nlBackgroundSwitcher3', ), true) . '"';
		}
		$__finalCompiled .= '
			';
		if ($__templater->fn('property', array('nlBackgroundSwitcher4', ), false) != null) {
			$__finalCompiled .= ', "' . $__templater->fn('property', array('nlBackgroundSwitcher4', ), true) . '"';
		}
		$__finalCompiled .= '
			';
		if ($__templater->fn('property', array('nlBackgroundSwitcher5', ), false) != null) {
			$__finalCompiled .= ', "' . $__templater->fn('property', array('nlBackgroundSwitcher5', ), true) . '"';
		}
		$__finalCompiled .= '
		], {duration: 7000, fade: 500});
	</script>
';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlImportParticlesJs', ), false) == true) {
		$__finalCompiled .= '
	<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlImportParallaxJs', ), false) == true) {
		$__finalCompiled .= '
	<script src="' . $__templater->fn('js_url', array('nulumia/parallax.min.js', ), true) . '"></script>
';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlImportCSSAnimateIt', ), false) == true) {
		$__finalCompiled .= '
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/css3-animate-it/1.0.3/css/animations.min.css" />
	<script src="' . $__templater->fn('js_url', array('nulumia/css3-animate-it.min.js', ), true) . '"></script>
';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlEnableParticlesJsBg', ), false) == true) {
		$__finalCompiled .= '
	';
		$__compilerTemp1 = '';
		if ($__templater->fn('property', array('nlParticlesJsUseCustomPath', ), false) == false) {
			$__compilerTemp1 .= '
			particlesJS.load(\'particles-js\', \'' . $__vars['xf']['homePageUrl'] . '/' . $__templater->fn('property', array('themePath', ), false) . '/xenforo/assets/particlesjs-config.json\', function() {
		';
		} else {
			$__compilerTemp1 .= '	
			';
			if ($__templater->fn('property', array('nlParticlesJsCustomConfigSource', ), false) == 'themePath') {
				$__compilerTemp1 .= '
				particlesJS.load(\'particles-js\', \'' . $__vars['xf']['homePageUrl'] . '/' . $__templater->fn('property', array('themePath', ), false) . '/' . $__templater->fn('property', array('nlParticlesJsBgConfigPath', ), false) . '\', function() {
			';
			} else {
				$__compilerTemp1 .= '
				particlesJS.load(\'particles-js\', \'' . $__templater->fn('property', array('nlParticlesJsBgConfigPath', ), false) . '\', function() {
			';
			}
			$__compilerTemp1 .= '
		';
		}
		$__templater->inlineJs('
	$( document ).ready(function() {
		/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
		' . $__compilerTemp1 . '
		console.log(\'callback - particles.js config loaded\');
		});
	});
	');
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '
';
	$__compilerTemp2 = '';
	if ($__templater->fn('property', array('nlSeparateNodeDesc', ), false) == true) {
		$__compilerTemp2 .= '
	$(".block-desc").each(function() {
		$(this).closest( "h2.block-header" ).after(this);
    });
	';
	}
	$__compilerTemp3 = '';
	if ($__templater->fn('property', array('nlSidebarCategoryMode', ), false) == 'open') {
		$__compilerTemp3 .= '
	$(".categoryList-toggler, .toggleTarget").each(function() {
		$(this).addClass("is-active");
    });
	';
	}
	$__templater->inlineJs('
    ' . $__compilerTemp2 . '
	' . $__compilerTemp3 . '
');
	return $__finalCompiled;
});