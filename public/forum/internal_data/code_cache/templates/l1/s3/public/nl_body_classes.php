<?php
// FROM HASH: f465c1e227d15f3254f42206c01e4370
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__templater->fn('property', array('nlThemeClass', ), false) != null) {
		$__finalCompiled .= ' ' . $__templater->fn('property', array('nlThemeClass', ), true);
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlEnableFullWidth', ), false) == true) {
		$__finalCompiled .= ' fullWidth';
	} else {
		$__finalCompiled .= ' fixedWidth';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlEnableFullBackgroundMode', ), false) != 'default') {
		$__finalCompiled .= ' has-customBg';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlEnableFullBackgroundMode', ), false) == 'default') {
		$__finalCompiled .= ' has-defaultBg';
	} else if ($__templater->fn('property', array('nlEnableFullBackgroundMode', ), false) == 'custom') {
		$__finalCompiled .= ' has-single-customBg';
	} else if ($__templater->fn('property', array('nlEnableFullBackgroundMode', ), false) == 'slideshow') {
		$__finalCompiled .= ' has-slideshowBg';
	} else if ($__templater->fn('property', array('nlEnableFullBackgroundMode', ), false) == 'video') {
		$__finalCompiled .= ' has-videoBg';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlUseContentBoxShadows', ), false) == true) {
		$__finalCompiled .= ' contentShadows';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlFloatingTextDarkFix', ), false) == true) {
		$__finalCompiled .= ' floatingTextAdjust';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlUseHoverTransitions', ), false) == true) {
		$__finalCompiled .= ' hoverTransitions';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlUseCompactHeader', ), false) == true) {
		$__finalCompiled .= ' compactHeader';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlSectionLinksMode', ), false) == 'default') {
		$__finalCompiled .= ' has-sectionLinks';
	} else {
		$__finalCompiled .= ' hide-sectionLinks';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlVisitorTabsLocation', ), false) == 'logoblock') {
		$__finalCompiled .= ' vtabsMoved';
	}
	$__finalCompiled .= '
 vtabs--' . $__templater->fn('property', array('nlVisitorTabsLocation', ), true) . '
';
	if ($__templater->fn('property', array('nlUseBlockTitle', ), false) == true) {
		$__finalCompiled .= ' has-blockTitle';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlPageTitleLayout', ), false) == 'welcome') {
		$__finalCompiled .= '
';
		if ($__templater->fn('property', array('nlPageHeaderHideMeta', ), false) == true) {
			$__finalCompiled .= ' hide-pageMeta';
		}
		$__finalCompiled .= '
';
		if ($__templater->fn('property', array('nlPageHeaderHideDescription', ), false) == true) {
			$__finalCompiled .= ' hide-pageDescription';
		}
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlEnableTextLogo', ), false) == true) {
		$__finalCompiled .= ' textLogo';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlLoggedInVtabLabels', ), false) == 'show') {
		$__finalCompiled .= ' has-loggedVtabLabels';
	} else {
		$__finalCompiled .= ' hide-loggedVtabLabels';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlLoggedOutVtabLabels', ), false) == 'show') {
		$__finalCompiled .= ' has-loggedOutVtabLabels';
	} else {
		$__finalCompiled .= ' hide-loggedOutVtabLabels';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlHeaderLayout', ), false) == true) {
		$__finalCompiled .= ' headerStretch';
	} else {
		$__finalCompiled .= ' headerFixed';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlStretchHeaderInnerContents', ), false) == true) {
		$__finalCompiled .= ' headerStretchInner';
	} else {
		$__finalCompiled .= ' headerFixedInner';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlFooterLayout', ), false) == 'stretch') {
		$__finalCompiled .= ' footerStretch';
	} else if ($__templater->fn('property', array('nlFooterLayout', ), false) == 'fixed') {
		$__finalCompiled .= ' footerFixed';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlContentLayout', ), false) == 'floating') {
		$__finalCompiled .= ' floatingContent';
	} else if ($__templater->fn('property', array('nlContentLayout', ), false) == 'boxed') {
		$__finalCompiled .= ' boxedContent';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlHideSidebar', ), false) == true) {
		$__finalCompiled .= ' hideSidebar';
	} else {
		$__finalCompiled .= ' showSidebar';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlSidebarUseTabbedHeadings', ), false) == true) {
		$__finalCompiled .= ' has-sidebarBlockHeadings';
	} else {
		$__finalCompiled .= ' has-regularBlockHeadings';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlSidebarPosition', ), false) == 'left') {
		$__finalCompiled .= ' sidebarLeft';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlSidebarUseAltRows', ), false) == true) {
		$__finalCompiled .= ' sidebarAltRows';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlTickerHideOptions', ), false) == 'all') {
		$__finalCompiled .= ' tickerShowAll';
	} else if ($__templater->fn('property', array('nlTickerHideOptions', ), false) == 'tablet') {
		$__finalCompiled .= ' tickerHideTablet';
	} else if ($__templater->fn('property', array('nlTickerHideOptions', ), false) == 'mobile') {
		$__finalCompiled .= ' tickerHideMobile';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlIconSliderHideOptions', ), false) == 'all') {
		$__finalCompiled .= ' iconSliderShowAll';
	} else if ($__templater->fn('property', array('nlIconSliderHideOptions', ), false) == 'tablet') {
		$__finalCompiled .= ' iconSliderHideTablet';
	} else if ($__templater->fn('property', array('nlIconSliderHideOptions', ), false) == 'mobile') {
		$__finalCompiled .= ' iconSliderHideMobile';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlEnableThemeEffects', ), false) == true) {
		$__finalCompiled .= ' enableThemeEffects';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlMobileFooterCenterContent', ), false) == true) {
		$__finalCompiled .= ' centerFooterMobile';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlStretchNavigation', ), false) == true) {
		$__finalCompiled .= ' stretchNavigation';
	}
	$__finalCompiled .= '
 has-footerBulletType--' . $__templater->fn('property', array('nlFooterColumnBulletType', ), true) . '
';
	if ($__templater->fn('property', array('nlShowMenuHeaders', ), false) == true) {
		$__finalCompiled .= ' has-menuHeaders';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlMessageButtonLinks', ), false) == true) {
		$__finalCompiled .= ' messageButtonLinks';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlMenuLinkFollowIcons', ), false) == true) {
		$__finalCompiled .= ' has-menuFollowIcons';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlFooterHideStyleChooser', ), false) == true) {
		$__finalCompiled .= ' hide-styleChooser';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlFooterHideChooserLinks', ), false) == true) {
		$__finalCompiled .= ' hide-footerChooserLinks';
	}
	$__finalCompiled .= '
';
	if ($__vars['page']['advanced_mode']) {
		$__finalCompiled .= ' pageAdvanced';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlDataListUseAlternatingRows', ), false) == true) {
		$__finalCompiled .= ' dataListAltRows';
	}
	$__finalCompiled .= '
 media-gridItems-' . $__templater->fn('property', array('nlXFMGItemPerRow', ), true) . '
 media-itemDesc-' . $__templater->fn('property', array('nlXFMGDescDisplayMode', ), true) . '
 tab-markers-' . $__templater->fn('property', array('nlTabMarkerStyle', ), true) . '
' . $__templater->callMacro('bodytag_macros', 'page_class_output', array(
		'pageMode' => $__vars['pageMode'],
		'showTitle' => $__vars['showTitle'],
		'showBreadcrumb' => $__vars['showBreadcrumb'],
		'showSidebar' => $__vars['showSidebar'],
		'showSidenav' => $__vars['showSidenav'],
		'showShare' => $__vars['showShare'],
		'pagePadding' => $__vars['pagePadding'],
	), $__vars) . '
';
	if ($__templater->fn('property', array('nlUseAftermathWidgets', ), false) == true) {
		$__finalCompiled .= ' afBlocks';
	}
	return $__finalCompiled;
});