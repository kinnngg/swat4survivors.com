<?php
// FROM HASH: 595b09c2c936c80fbb8ad548d213c2ab
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if (($__templater->fn('property', array('nlCopyrightOff', ), false) == true) AND ($__templater->fn('property', array('nlCopyrightKey', ), false) != null)) {
		$__finalCompiled .= '<!-- ' . $__templater->fn('property', array('nlCopyrightKey', ), true) . ' -->';
	} else {
		$__finalCompiled .= ' | <a href="https://www.nulumia.com" rel="nofollow" title="Free and premium Xenforo Styles" target="_blank" class="u-concealed">Style by Nulumia &copy;2016-' . $__templater->fn('date', array($__vars['xf']['time'], 'Y', ), true) . '</a>';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlLicenseKey', ), false) != null) {
		$__finalCompiled .= '<!-- ' . $__templater->fn('property', array('nlLicenseKey', ), true) . ' -->';
	}
	$__finalCompiled .= '
<!-- Style version: ' . $__templater->fn('property', array('nlStyleVersion', ), true) . ' -->';
	return $__finalCompiled;
});