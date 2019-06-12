<?php
// FROM HASH: 847a331938972127fb898832495c4268
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="menu-row menu-row--separated">
	' . 'Country' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['filters']['snog_country']) . '
	<div class="u-inputSpacer">
		';
	$__compilerTemp1 = array();
	if ($__templater->isTraversable($__vars['optionValues'])) {
		foreach ($__vars['optionValues'] AS $__vars['optionValue']) {
			$__compilerTemp1[] = array(
				'value' => $__vars['optionValue']['value'],
				'label' => $__templater->escape($__vars['optionValue']['text']),
				'_type' => 'option',
			);
		}
	}
	$__finalCompiled .= $__templater->formSelect(array(
		'name' => 'snog_country',
		'value' => $__vars['filters']['snog_country'],
	), $__compilerTemp1) . '
	</div>
</div>';
	return $__finalCompiled;
});