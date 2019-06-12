<?php
// FROM HASH: 01eda89afeb63e99d96a4dbb362cdac4
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/* Introduce */

#particles-js canvas {
    display: block;
    vertical-align: bottom;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    -webkit-transition: opacity .8s ease, -webkit-transform 1.4s ease;
    transition: opacity .8s ease, transform 1.4s ease
}

#particles-js {
    width: 100%;
    height: 100%;
    position: fixed;
    z-index: -10;
    top: 0;
    left: 0
}
';
	if ($__templater->fn('property', array('nlParticlesBgSiteBgMode', ), false) == 'transparent') {
		$__finalCompiled .= '
.p-pageWrapper,
.headerProxy {
	background: transparent none !important;
}
';
	}
	$__finalCompiled .= '

.contact-info-blocks .flex-col {
    text-align: center;
}
.contact-info-blocks ul.social_icons li {
    float: none;
}
.icon-circle i {
    font-size: 60px;
    display: inline-block;
    text-align: center;
    background: @xf-nlIconCircleBgColor;
    border-radius: 100px;
    padding: 20px;
    margin-bottom: 14px;
    color: @xf-nlIconCircleIconColor;
}

.googleMap {
    width: 100%;
    min-height: 200px;
}

.googleMap iframe {
    width: 100%;
}

.p-page-header, .headerFixed .p-page-header {
	width: 100%;
	margin: auto;
	.xf-nlPageHeader();
}
.p-page-header {
	.p-page-header-inner {
		.m-pageWidth();
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
	}
	.p-title {
		flex-direction: column;
		align-items: flex-start;
	}
	.p-title-value {
		.xf-nlPageHeaderTitle();
	}
	.p-description {
		.xf-nlPageHeaderDescription();
		
		.p-description {
			margin: 0;
		}
	}
	.p-description a {
		.xf-nlPageHeaderLink();
		
		&.tagItem {
			color: inherit;
			background: transparent;
			border-color: @xf-nlPageHeader--color;
			border-color: @xf-nlPageHeaderDescription--color;
		}
	}
	.p-body-header.block-container {
		background: transparent none !important;
	}
	.p-page-header-inner > * {
		flex: 1;
		margin-bottom: 0;
	}
	.p-breadcrumbs, .p-breadcrumbs li {
		text-align: right;
		background: transparent none;
		border: none;
		box-shadow: none;
	}
	.p-breadcrumbs {
		flex: 1;
		display: block;
		color: inherit;
		
		> li, > li a {
			color: inherit;
			padding: 0;
		}
		> li {
			float: none;
			display: inline-block;
			vertical-align: top;
			
			a {
				position: relative;
				overflow: visible;
			}
			&:after {
				color: inherit;
			}
		}
		
		> li a {
			.xf-nlPageHeaderBcrumbItem();
			
			&:hover {
				.xf-nlPageHeaderBcrumbItemHover();
			}
		}
		span.arrow {
			display: none;
		}
	}
	.porta-listInline-right {
		float: left;
		margin-left: @xf-paddingSmall;
	}
	.hide-pageMeta & .p-description ul {
		display: none;
	}
	.hide-pageDescription & .p-description .p-description {
		display: none;
	}
}

/* Header */

#p-topBar {
	position: relative;
	z-index: 200;
	.xf-nlTopBar();

	.p-topBar-inner {
		.m-pageInset();
		.m-clearFix();
		
		> * {
			.m-clearFix();
		}
	}
	.p-topBar-right {
		margin-left: @xf-paddingSmall;
	}
	.p-topBar-left a, .p-topBar-right a { // .p-navgroup-link 
		height: @xf-nlTopBarElementHeight;
		line-height: @xf-nlTopBarElementHeight;
		color: inherit;
		font-weight: inherit;
		.xf-nlTopBarLinks();
		
		&:hover {
			.xf-nlTopBarLinksHover();
		}
	}
	.p-navgroup-link.badgeContainer:after {
		top: -4px;
		left: 18px;
	}
}
.p-header-content .p-nav-opposite {
	.xf-nlVisitorTabsHeaderBlock();
}

/* Text based logo */

.textLogo .p-nav-smallLogo {
	max-width: none;
}
#textLogo {
	line-height: normal;
	.xf-nlTextLogo();

	span.txtLogo1 {
		.xf-nlPrimaryLogoSpan();
	}
	span.txtLogo2 {
		.xf-nlSecondaryLogoSpan();
	}
}
.logoSubtitle {
	clear: both;
	display: inline-block;
	.xf-nlLogoSubtitleStyle();
}

/* Visitor Tabs */

.vtabs--topbar .p-nav .p-nav-opposite {
    display: none;
}

/* Main */



/* Custom Background Mode */

.has-single-customBg .p-pageWrapper {
	.xf-nlCustomBackgroundDesktop();
}
.has-customBg .headerProxy {
	display: none !important;
}
.has-slideshowBg .p-pageWrapper, .has-videoBg .p-pageWrapper {
	background: transparent none !important;
}

/* Dark background text adjust */

.floatingTextAdjust {
	.carousel-footer a,
	.p-body-content .p-body-header:not(.box-container) .p-title-value,
	.p-body-content .p-body-header:not(.box-container) .p-description
	';
	if ($__templater->fn('property', array('nlFloatingTextDarkClasses', ), false) != null) {
		$__finalCompiled .= ',
	' . $__templater->fn('property', array('nlFloatingTextDarkClasses', ), true);
	}
	$__finalCompiled .= ' {
		color: @xf-nlFloatingTextColor;
	}
}

/* Category & list items */

ul.nav-horizontal {
    margin: 0;
    padding: 0;
    list-style: none;
    text-align: center;
	
	li.navEl-horizItem {
		display: inline-block;
		margin-bottom: 2px;
	}
}
';
	if ($__templater->fn('property', array('nlXFMGHorizontalNavHideSidebar', ), false) == true) {
		$__finalCompiled .= '
.template-xfmg_media_index {
	.p-body-main--withSideNav .p-body-content {
		padding: 0;
	}
	.p-body-sideNav {
		display: none;
	}
}
';
	}
	$__finalCompiled .= '

/* Transitions */

.hoverTransitions {
	
	a {
		transition: ' . $__templater->fn('property', array('nlHoverTransitionSpeed', ), true) . 's color;
	}
	
	button,
	.button,
	input[type="submit"],
	#p-topBar a,
	.hoverNodes .node-body,
	.structItem,
	a.menu-linkRow,
	.tabs-tab,
	ul.social_icons li a,
	.slick-prev:before, .slick-next:before,
	{
		transition: ' . $__templater->fn('property', array('nlHoverTransitionSpeed', ), true) . 's all;
	}
	
	input[type="search"],
	input[type="email"],
	input[type="password"]
	{
		transition: ' . $__templater->fn('property', array('nlHoverTransitionSpeed', ), true) . 's background, ' . $__templater->fn('property', array('nlHoverTransitionSpeed', ), true) . 's color, ' . $__templater->fn('property', array('nlHoverTransitionSpeed', ), true) . 's box-shadow;
	}

	.hover-fx {
		position: relative;
		overflow: hidden;
		
		&.h-float-down, &.h-float-up {
			transition: ' . $__templater->fn('property', array('nlHoverTransitionSpeed', ), true) . 's margin;
		}
		&.h-float-up:hover {
			margin-top: -10px;
		}
		&.h-float-down:hover {
			margin-bottom: -10px;
		}
		a& {
			display: block;
		}
		> img {
			display: block;
		}
	}
	
}

/* Circle */

.h-circle {
	position: relative;
}
.h-circle:before {
	position: absolute;
	top: 50%;
	left: 50%;
	z-index: 2;
	display: block;
	content: \'\';
	width: 0;
	height: 0;
	background: rgba(255,255,255,.2);
	border-radius: 100%;
	-webkit-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	opacity: 0;
}
.h-circle:hover:before {
	-webkit-animation: circle .75s;
	animation: circle .75s;
}
@-webkit-keyframes circle {
	0% {
		opacity: 1;
	}
	40% {
		opacity: 1;
	}
	100% {
		width: 200%;
		height: 200%;
		opacity: 0;
	}
}
@keyframes circle {
	0% {
		opacity: 1;
	}
	40% {
		opacity: 1;
	}
	100% {
		width: 200%;
		height: 200%;
		opacity: 0;
	}
}

/* Image zoom */

.hover-fx.h-img-zoom {
    position: relative;
    overflow: hidden;
}

.hover-fx.h-img-zoom > img {
    transition: .2s all;
    display: block;
}

.hover-fx.h-img-zoom:hover > img {
    transform: scale(1.1) rotate(1deg);
}

/* Notices */

.notice.has-icon .icon-column {
    display: block;
    width: @xf-nlNoticeIconWidth;
    height: 100%;
	float: left;
    text-align: center;
	.xf-nlNoticeIconColumn();
}
@media (min-width: @xf-responsiveNarrow)
{
	.notice.has-icon .notice-content {
		margin-left: @xf-nlNoticeIconWidth;
		min-height: 100px;
	}
}

/* Menus */

html:not(.has-menuHeaders) {
	.menu-header {
		display: none;
	}
}

/* Forum View */

.structItemContainer .block-desc {
	.xf-nlStickySeparator();
}

.node-avatar {
    float: left;
    margin: 0 8px 0 auto;
}

/* Node Icons */

.imgNodeIcons .node--category .node-icon i:before,
.imgNodeIcons .node--forum .node-icon i:before,
.imgNodeIcons .node--page .node-icon i:before,
.imgNodeIcons .node--link .node-icon i:before {
	content: "";
	display: block;
	.xf-nlNodeImgIcon();
}
/*
.imgNodeIcons .node-icon i:before {
	display: none !important;
	content: "";
}
*/
.imgNodeIcons .node--forum.node--unread .node-icon i:before {
	.xf-nlNodeIconImgForumUnread();
	 /* background-image: @xf-nlNodeImgIcon--background-image; */
}
.imgNodeIcons .node--page .node-icon i:before {
	.xf-nlNodeIconImgPage();
}
.imgNodeIcons .node--link .node-icon i:before {
	.xf-nlNodeIconImgLink();
}

.nodeStats-belowDesc .node-statsMeta {
    display: inline-block;
}

/* Footer */

.footer-columns-wrapper li {
    line-height: 1.8;
}
footer p {
    margin: 10px 0;
}
.hide-styleChooser .p-footer-row-main .p-footer-linkList li:first-of-type {
	display: none;
}
.hide-footerChooserLinks .p-footer-row-opposite {
	display: none;
}
.p-footer a.button {
	color: @xf-buttonDefault--color !important;
}
footer h2, footer h3, footer h4 {
	margin-bottom: 10px;
}
/*
.floatingContent.footerFixed footer .p-footer-inner {
	.m-pageWidth();
}
*/
.footerFixed footer .p-footer-wrapper {
	.m-pageWidth();
	padding: 0;
}
/*
.fixedWidth.boxedContent.footerFixed footer {
	.m-pageWidth();
}
*/

/* Mobile styling */

@media (max-width: @xf-pageWidthMax) 
{
	// Adds padding to floating content areas when reaching edge of page

	.floatingContent .p-body-inner {
		padding-left: @xf-pageEdgeSpacer;
		padding-right: @xf-pageEdgeSpacer;
	}
	
}
@media (max-width: @xf-nlPageWidthMin) 
{

}

@media (max-width: @xf-responsiveMedium)
{
	.flex-caption h2 {
		font-size: 16px !important;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}
	.flex-caption p {
		font-size: @xf-fontSizeSmallest !important;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}
	.node-avatar {
		width: 24px;
		height: 24px;
		margin-top: -2px;
	}
}

/* Includes */

/* Mobile styling */

@media (max-width: @xf-publicNavCollapseWidth)
{
	.headerProxy {
		height: auto !important;
	}
	.p-nav-smallLogo #textLogo {
		font-size: inherit;
		color: @xf-nlPublicNavResponsiveLink--color;
		.xf-nlResponsiveNavTextLogoSize();
	}
	.p-nav .p-nav-menuTrigger {
		color: @xf-nlPublicNavResponsiveLink--color;
	}
	.p-breadcrumbs.xf1 > li {
		padding-left: 10px;
	}
	.template-forum_list .p-breadcrumbs > li:first-of-type:before {
		display: none;
	}
}

@media (max-width: @xf-responsiveWide)
{
	.p-topBar-inner,
	.p-topBarController,
	.top-row.primary .top-row-item,
	.top-row.secondary .top-row-item {
		.xf-nlPageWidthWide();
	}
}
@media (max-width: @xf-responsiveMedium)
{

}
@media (max-width: @xf-responsiveNarrow)
{
	.p-topBar-inner,
	.p-topBarController,
	.top-row.primary .top-row-item,
	.top-row.secondary .top-row-item {
		.xf-nlPageWidthNarrow();
	}
	.p-topBar-center {
		clear: both;
	}
	.p-topBar-right {
		margin-left: 0;
	}
	#p-topBar ul.social_icons li a,
	#p-topBar .p-navgroup-link {
		width: auto;
		padding: 0 4px;
	}
	.p-page-header-inner {
		> div {
			width: 100%;
			flex: 1 0 100% !important;
			text-align: left;
		}
		.p-breadcrumbs {
			text-align: left;
			float: none;
			> li {
				display: none;
				text-align: left;
				padding: 0;
			}
			> li:last-child {
				display: block;
			}
		}
	}
	.notice.has-icon .icon-column {
		float: none;
		width: 100%;
		height: auto;
	}
	.centerFooterMobile footer {
		text-align: center;

		ul.social_icons li {
			float: none;
		}
		.flex-item .block[data-widget-definition="members_online"] .block-body {
			display: inline-block;
		}
		.flex-item .contentRow {
			text-align: left;
		}
	}
	.centerFooterMobile .p-footer-copyright {
		text-align: center;
	}
}

.endTest {
	color: #fff;
}';
	return $__finalCompiled;
});