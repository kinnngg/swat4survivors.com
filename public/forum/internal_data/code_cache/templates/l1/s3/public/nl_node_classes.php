<?php
// FROM HASH: bad4761468cb99665b464eaac1821406
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__templater->fn('property', array('nlUseImgNodeIcons', ), false) == 'img') {
		$__finalCompiled .= ' imgNodeIcons';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlAlternatingRows', ), false) == true) {
		$__finalCompiled .= ' alternateNodes';
	}
	$__finalCompiled .= ' 
';
	if ($__templater->fn('property', array('nlUseHoverNodes', ), false) == true) {
		$__finalCompiled .= ' hoverNodes';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlSeparateNodeDesc', ), false) == true) {
		$__finalCompiled .= ' nodeSeparateTitleDesc';
	}
	$__finalCompiled .= '
 nodeStats-' . $__templater->fn('property', array('nlNodeStatsLocation', ), true) . '
';
	if ($__templater->fn('property', array('nlNodeStatsIcons', ), false) == true) {
		$__finalCompiled .= ' node-iconStats';
	} else {
		$__finalCompiled .= ' node-textStats';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlUseGridNodes', ), false) == true) {
		$__finalCompiled .= ' gridNodes gridNodes-' . $__templater->fn('property', array('nlNodeGridNodePerRow', ), true);
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlUseGridSubForums', ), false) == true) {
		$__finalCompiled .= ' gridSubForums';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlGridNodeStretchToFit', ), false) == 'stretch') {
		$__finalCompiled .= ' stretchNodes';
	} else {
		$__finalCompiled .= ' fixedNodes';
	}
	$__finalCompiled .= '
';
	if (($__templater->fn('property', array('nlGridNodeSpacing', ), false) == '0') OR ($__templater->fn('property', array('nlGridNodeSpacing', ), false) == '0px')) {
		$__finalCompiled .= ' collapseNodes';
	} else {
		$__finalCompiled .= ' separateNodes';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlUseImgNodes', ), false) == true) {
		$__finalCompiled .= ' imgNodes';
		if ($__templater->fn('property', array('nlImgNodeLayout', ), false) == 'behind') {
			$__finalCompiled .= ' nodeImgBehind';
		} else if ($__templater->fn('property', array('nlImgNodeLayout', ), false) == 'above') {
			$__finalCompiled .= ' nodeImgAbove';
		}
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlHideReadIcon', ), false) == true) {
		$__finalCompiled .= ' hideIcon';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlHideStatsBlock', ), false) == true) {
		$__finalCompiled .= ' hideStatsBlock';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlHideLastPost', ), false) == true) {
		$__finalCompiled .= ' hideLastPost';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlImgNodeBgMode', ), false) == 'img') {
		$__finalCompiled .= ' nodeImgBg';
	} else if ($__templater->fn('property', array('nlImgNodeBgMode', ), false) == 'solid') {
		$__finalCompiled .= ' nodeColorBg';
	}
	return $__finalCompiled;
});