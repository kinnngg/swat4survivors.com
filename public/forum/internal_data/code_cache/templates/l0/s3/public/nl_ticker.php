<?php
// FROM HASH: c83108e2393b36991367f419b5f50d71
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="ticker_container">
	<div class="ticker_wrap">
		<div id="ticker">
			';
	if ($__templater->fn('property', array('nlTickerLine1', ), false) != null) {
		$__finalCompiled .= '<div class="ticker_item">' . $__templater->fn('property', array('nlTickerLine1', ), true) . '</div>';
	}
	$__finalCompiled .= '
			';
	if ($__templater->fn('property', array('nlTickerLine2', ), false) != null) {
		$__finalCompiled .= '<div class="ticker_item">' . $__templater->fn('property', array('nlTickerLine2', ), true) . '</div>';
	}
	$__finalCompiled .= '
			';
	if ($__templater->fn('property', array('nlTickerLine3', ), false) != null) {
		$__finalCompiled .= '<div class="ticker_item">' . $__templater->fn('property', array('nlTickerLine3', ), true) . '</div>';
	}
	$__finalCompiled .= '
		</div>
	</div>
</div>';
	return $__finalCompiled;
});