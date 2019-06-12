<?php
// FROM HASH: 29bed4cc6af5f961cf637f2c721fb5a6
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<dl class="inputLabelPair">
	<dt>' . 'View your country flag' . ':</dt>
	<dd>
		' . $__templater->formSelect(array(
		'name' => 'privacy[snog_flag_view]',
		'value' => $__vars['xf']['visitor']['Privacy']['snog_flag_view'],
	), array(array(
		'value' => 'everyone',
		'label' => 'All visitors',
		'_type' => 'option',
	),
	array(
		'value' => 'members',
		'label' => 'Members only',
		'_type' => 'option',
	),
	array(
		'value' => 'none',
		'label' => 'Nobody',
		'_type' => 'option',
	))) . '
	</dd>
</dl>';
	return $__finalCompiled;
});