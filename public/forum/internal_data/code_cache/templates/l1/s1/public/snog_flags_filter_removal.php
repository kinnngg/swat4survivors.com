<?php
// FROM HASH: dfee053fd9d65201f514f85f56bca258
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__vars['filters']['snog_country']) {
		$__finalCompiled .= '
	<li><a href="' . $__templater->fn('link', array('forums', $__vars['forum'], $__templater->filter($__vars['filters'], array(array('replace', array('snog_country', null, )),), false), ), true) . '"
		class="filterBar-filterToggle" data-xf-init="tooltip" title="' . 'Remove this filter' . '">
		<span class="filterBar-filterToggle-label">' . 'Country' . ':</span>
		' . $__templater->callback('Snog\\Flags\\Callback\\Country', 'getCountryName', '', array($__vars['filters']['snog_country'], )) . '
		</a></li>
';
	}
	return $__finalCompiled;
});