<?php
// FROM HASH: 41f5dfab81b174dbfbdb41b50361431b
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/* Place */

/* Temp */

.structItem.is-private {
	background: @xf-contentHighlightBg !important;
}

/* Copy from app.less for mixins */

.m-pageWidth(@min-width: @xf-pageEdgeSpacer)
{
	max-width: @xf-pageWidthMax;
	width: 100%;
	padding: 0 @xf-pageEdgeSpacer;
	margin: 0 auto;
}

.m-pageInset(@defaultPadding: @xf-pageEdgeSpacer)
{
	padding-left: @defaultPadding;
	padding-right: @defaultPadding;

	// iPhone X/Xr/Xs support
	@supports(padding: max(0px))
	{
		&
		{
			padding-left: ~"max(@{defaultPadding}, env(safe-area-inset-left))";
			padding-right: ~"max(@{defaultPadding}, env(safe-area-inset-right))";
		}
	}
}

.m-footerWidth(@min-width: @xf-pageEdgeSpacer)
{
	max-width: @xf-nlFooterContentMax;
	width: 100%;
	padding: 0 @xf-pageEdgeSpacer;
	margin: 0 auto;
}

.m-buttonReset()
{
    .m-stripElement();
    color: inherit;
    text-transform: capitalize;
    font-weight: normal;
    padding: 0;
    display: inline;
}

.m-stripElement()
{
	background: transparent none;
	padding: 0;
	border: none;
	box-shadow: none !important;
}

.m-flexSetup()
{
	
}

/* Webkit Browser Scrollbars */

::-webkit-scrollbar              { width: 12px;}
::-webkit-scrollbar-button       { display: none;}
::-webkit-scrollbar-track        { background: @xf-nlScrollbarTrack--background-color; }
::-webkit-scrollbar-track-piece  { background: @xf-nlScrollbarTrack--background-color; }
::-webkit-scrollbar-thumb        { background: @xf-nlScrollbarThumb--background-color; } 
::-webkit-scrollbar-thumb:hover  { background: @xf-nlScrollbarThumbHover--background-color; }
::-webkit-scrollbar-corner       { background: @xf-nlScrollbarTrack--background-color; }
::-webkit-resizer                { background: @xf-nlScrollbarTrack--background-color; }

/* Global */

.p-pageWrapper {
  z-index: 1;
}
h1, h2, h3, h4, h5 {
	line-height: 1.4;
	.xf-nlHeadings();
	
	&.inline {
		margin: 0 !important;
		line-height: normal;
	}
	> i:not(.hScroller-action) {
		margin-right: 8px;
	}
}
b, strong {
	/* color: @xf-nlStrongFontColor; */
}

.page_top, .page_bot {
    width: 100%;
}
.p-body {
	.p-body-header.block-container {
		.xf-nlPageTitleBoxed();
	}
	.block-container .p-title {
		margin-bottom: 0;
	}
	.p-body-header.block-container .p-title-value {
		margin: 0 auto 0 0;
	}
	.p-body-header.block-container .p-title-pageAction {
		margin-bottom: 0;
	}
}
.p-title-pageAction {
    text-align: right;
}
/* General */

#p-topBar,
.p-footer-columns {
	ul, ol {
		margin: 0;
		padding: 0;
	}
	li {
		list-style: none;
	}
}

.p-title-value {
	line-height: normal;
}
.p-title-pageAction {
    text-align: right;
}
.p-description {
	.xf-nlPageDescription();
	
	i {
		.xf-nlPageDescriptionIcon();
	}
}
/*
.p-body-main p {

}
*/
.p-topBar-left {
float: left;
}
.p-topBar-right {
float: right;
}
#p-topBar:after {
    clear: both;
    display: block;
    width: 100%;
    content: " ";
}
.nlFeature_anchor {
	display: none;
}
.anchorOffset {
    display: block;
    margin-top: -60px;
    z-index: 99;
    height: 60px;
    clear: both;
}
label:not(.iconic--hiddenLabel) > i {
	margin-right: @xf-paddingSmall;
}

/* Buttons */

@fa-var-cart: "\\f07a";

.button,
a.button // needed for specificity over a:link
{
	&.button--icon {
		&--cart         { .m-buttonIcon(@fa-var-cart, 1em); }
		&--comment      { .m-buttonIcon(@fa-var-comment, 1em); }
		&--email	    { .m-buttonIcon(@fa-var-envelope, 1em); }
		&--heart	    { .m-buttonIcon(@fa-var-heart, 1em); }
		&--support	    { .m-buttonIcon(@fa-var-life-ring, 1em); }
		&--help	        { .m-buttonIcon(@fa-var-life-ring, 1em); }
	}
}
a.button.button--icon--rotateHover:hover i {
    animation: fa-spin 2s infinite linear;
}
.p-body-sideNav .block a.button.button--fullWidth + a.button--fullWidth {
    margin-top: 10px;
}

/* Header */
@media (min-width: @xf-publicNavCollapseWidth)
{
	.headerFixed {

		.p-topBarController,
		.p-header,
		.p-navController,
		.p-sectionLinks,
		.p-staffBar,
		.p-page-header {
			.m-pageWidth();
			.m-pageInset(0px);
		}
		&.compactHeader .p-nav-inner {
			.m-pageInset();
		}
	}

	.headerStretch.headerFixedInner {
		.p-staffBar-inner, .p-topBar-inner {
			.m-pageWidth();
		}
		&.stretchNavigation .p-nav-inner,
		{
			.m-pageWidth();
		}
	}
	.headerStretch:not(.stretchNavigation) {
		.p-navController,
		.p-sectionLinks {
			.m-pageWidth();
			.m-pageInset(0px);
			width: 100%;
		}
	}
	.headerStretch:not(.stretchNavigation) {
		.p-page-header {
			width: 100%;
			max-width: @xf-pageWidthMax;
		}
	}
}

/* Compact header */

@media (min-width: @xf-publicNavCollapseWidth)
{
	.compactHeader {
		.p-header {
			display: none;
		}
		.p-nav {
			.xf-nlCompactHeaderNavStrip();
		}
		.p-nav-inner {
			display: flex;
			flex-wrap: wrap;
			flex-direction: row;
			align-items: center;

			> * {
				flex: 0 0 auto;
			}
			.p-nav-scroller {
				flex: 1;
				text-align: right;
			}
		}
		.p-nav-list .p-navEl,
		.p-navgroup-link {
			.xf-nlCompactHeaderNavTab();

			&:hover,
			&.is-selected,
			&.is-menuOpen {
				color: @xf-publicNavTabHover--color;
				.xf-nlCompactHeaderNavTabHover();
			}
		}
		.p-nav-smallLogo {
			display: block;
			.xf-nlCompactLogo();
		}
		.p-nav #textLogo {
			line-height: normal;
			.xf-nlCompactTextLogo();

			span.txtLogo1 {
				.xf-nlCompactPrimaryLogoSpan();
			}
			span.txtLogo2 {
				.xf-nlCompactSecondaryLogoSpan();
			}
		}
	}
}
.p-topBar-inner {
	.m-clearFix();
}

/* Navigation */

.p-nav-smallLogo {
	margin-right: @xf-paddingMedium;
}
a.p-navEl-link[data-nav-id="home"] {
	font-size: 0;
}
a.p-navEl-link[data-nav-id="home"]:before {
	content: "\\f015";
	.m-faBase();
	font-size: @xf-fontSizeNormal;
}
a.p-navEl-link:before,
.p-navgroup-link.p-navgroup-link--iconic i:after {
	font-size: @xf-nlNavigationIconSize;
}
.p-navgroup.p-discovery {
	margin: 0;
	
	a:last-of-type {
		margin-right: 0;
	}
}

/* Off canvas menu */

.offCanvasMenu--nav
{
	.offCanvasMenu-content
	{
		padding: 0;
		height: auto;
		.xf-nlSlideNavMenu();
	}
	.offCanvasMenu-header
	{
		.xf-nlSlideMenuHeader();
	}
	.offCanvasMenu-linkHolder.is-selected {
		.xf-nlSlideMenuItemSelected();
	} 
}

/* Visitor tabs */

.p-navgroup-link--search .p-navgroup-linkText {
	display: none;
}
[data-logged-in="true"].hide-loggedVtabLabels {
	.p-navgroup-linkText {
		display: none;
	}
}
[data-logged-in="false"].hide-loggedOutVtabLabels {
	.p-navgroup-linkText {
		display: none;
	}
}

/* Page navigation */

.pageNav-main {
	.xf-nlPageNavContainer();
}

/* Images */

img.img--center {
    display: block;
    margin: auto;
}

img.img--fullWidth {
    max-width: 100%;
    width: 100%;
}
.img-grow img {
    max-width: 100%;
    width: 100%;
}
.img--strip img, .img--strip br {
    margin: 0;
    padding: 0;
    white-space: pre-line;
    display: inline-block;
    vertical-align: top;
}

/* Advertising */

.ad-wrapper {
    margin: auto;
    text-align: center;
}

/* Headings */

h1 {
	font-size: @xf-nlH1FontSize;
}
h2 {
	font-size: @xf-nlH2FontSize;
}
h3 {
	font-size: @xf-nlH3FontSize;
}
h4 {
	font-size: @xf-nlH4FontSize;
}
h5 {
	font-size: @xf-nlH5FontSize;
}

/* Floating content mode */

.boxedContent .p-body-inner {
	.xf-nlPageBodyInner();
}
.floatingContent {
	.p-body-inner {
		.xf-nlPageBodyInnerFloating();
	}
	
	/* Resets */
	
}


/* Content Shadows */

.contentShadows {
	.block-container,
	.blockMessage,
	.noticeScrollContainer .lSSlideWrapper,
	.p-breadcrumbs,
	.gridNodes.separateNodes:not(.imgNodes) .node-body,	
	.gridNodes.separateNodes.imgNodes.nodeImgBehind .node-body,
	.gridNodes.separateNodes.imgNodes.nodeImgAbove .node-wrapper,
	.gridNodes.separateNodes .node-category-header,
	.thNodes__nodeList .block-container .node-body,
	.block--messages article.message,
	.p-body-content .block-container--grid .productList-product-grid.node,
	.p-body-content .block-container--full-grid .productList-product-grid.node
	{
		.m-dropShadow();
	}
}
.block-container .blockMessage {
    box-shadow: none;
}

/* Blocks */

/* Check and consider. Inlines h tags to use padding only */
.block-header, .block-minorHeader {
    line-height: normal;
	
	a {
		color: inherit;
	}
}

.inline-blocks {
	.block-container, .block {
		background: transparent;
		border: none;
		padding: 0;
		box-shadow: none !important;
	}
	.block-row {
		padding: 0;
	}
	h2.block-minorHeader, h3.block-minorHeader,
	h2.block-header, h3.block-header {
		display: none;
	}
}
.block-footer {
	line-height: normal;
}

/* Sidebar */

.p-body-sidebar, .p-body-sideNav {
	
	/* Normalize line height */
	line-height: 1.4;
	
	iframe {
		max-width: 100%;
		width: auto;
		height: auto;
	}
	
	/* Enforce link types */
	.listInline a:not(.u-concealed):first-of-type, .contentRow a:not(.u-concealed):first-of-type {
		font-size: inherit;
		.xf-nlSidebarLink();
	}
	.contentRow h3 {
		font-family: inherit;
	}
	.sidebarAltRows & .block-body > *:nth-child(even) {
		background: @xf-nlSidebarAltRowColor;
	}
}
.p-body-sidebar, .p-body-sideNav, .flex_columns {
	
	.block-minorHeader i {
		text-indent: 0;
	}
	
	/* Deprecate
	.label {
		padding: 0;
	}
	*/
	
	/* Truncate single line links */
	.truncateSidebarLinks & {
		.contentRow-main--close a:first-of-type {
			.m-overflowEllipsis();
		}
	}
	.block .contentRow-lesser {
		.m-overflowEllipsis();
	}
}

/* Left sidebar */

.default';
	if ($__templater->fn('property', array('nlSidebarPosForums', ), false) == 'left') {
		$__finalCompiled .= ', .template-forum_list,
.template-forum_view,
.template-thread_view';
	}
	if ($__templater->fn('property', array('nlSidebarPosXenPorta', ), false) == 'left') {
		$__finalCompiled .= ', .template-EWRporta_articles_index,
.template-EWRporta_articles_category';
	}
	if ($__templater->fn('property', array('nlSidebarPosCustomPages', ), false) == 'left') {
		$__finalCompiled .= ', .template-page_view';
	}
	if ($__templater->fn('property', array('nlSidebarPosDBTechEcommProduct', ), false) == 'left') {
		$__finalCompiled .= ', .template-dbtech_ecommerce_product_view';
	}
	$__finalCompiled .= ' {
	.p-body-main--withSidebar {
		direction: rtl;
	}
	.p-body-main--withSidebar > div {
		direction: ltr;
		> div {
			direction: ' . $__templater->escape($__vars['xf']['language']['text_direction']) . ';
		}
	}
	&[dir="LTR"] .p-body-main--withSidebar:not(.p-body-main--withSideNav) .p-body-content {
		padding-right: 0;
		padding-left: @xf-sidebarSpacer;
	}
}

/* Right sidebar - for non-right sidebar pages */

.default';
	if ($__templater->fn('property', array('nlSidebarPosRM', ), false) == 'right') {
		$__finalCompiled .= ', .template-xfrm_overview,
.template-xfrm_category_view';
	}
	if ($__templater->fn('property', array('nlSidebarPosMG', ), false) == 'right') {
		$__finalCompiled .= ', .template-xfmg_media_index,
.template-xfmg_category_view';
	}
	if ($__templater->fn('property', array('nlSidebarPosDBTechEcomm', ), false) == 'right') {
		$__finalCompiled .= ', .template-dbtech_ecommerce_overview,
.template-dbtech_ecommerce_category_view';
	}
	$__finalCompiled .= ' {
	.p-body-main--withSideNav {
		direction: rtl;
	}
	.p-body-main--withSideNav > div {
		direction: ltr;
	}
	&[dir="LTR"] .p-body-main--withSideNav:not(.p-body-main--withSidebar) .p-body-content {
		padding-left: 0;
		padding-right: @xf-sidebarSpacer;
	}
}


.pageWidth()
{
	.xf-nlPageWidth();
}
.headerProxy {
	position: absolute;
	width: 100%;
	z-index: -1;
	.xf-nlHeaderWrapper();
}

/* Hide sidebar */

.hideSidebar .p-body-main--withSidebar .p-body-content {
	padding: 0 !important;
}

/* Breadcrumb */

.p-breadcrumbs {
	
	> li:first-of-type a {
		font-size: 0;
	}
	> li:first-of-type a:before {
		content: "\\f015";
		.m-faBase();
		font-size: @xf-fontSizeNormal;
	}
}

.p-body .p-breadcrumbs.xf1 {
	> li:after {
		display: none;
	}
	> li {
		padding-left: ((@xf-nlXF1BreadcrumbArrowWidth) * 2);
		margin-right: 0;
	}
	> li:first-child {
		margin-left: 0;
		padding-left: @xf-nlBreadcrumbItemPaddingH;
		padding-right: 4px;
	}
	.arrow {
		.xf-nlBreadcrumbItemArrowOuter();
	}
	.arrow span {
		.xf-nlBreadcrumbItemArrowInner();
	}
	> li:hover {
		.arrow span {
			border-left-color: @xf-nlBreadcrumbItemHover--background-color;
		}
	}
}

.p-description {
	.m-clearFix();
}

/* Navigation */

.p-sectionLinks-list .p-navEl.is-menuOpen .p-navEl-link {
	color: @xf-publicSubNavElMenuOpen--color;
}

/* Notices */

.noticeScrollContainer {
	.lSSlideWrapper {
		border: none;
		background: @xf-contentBg;
	}
}
.lSSlideOuter .lSPager.lSpg {
    margin: 10px 0 0 !important;
}
.notice {
	.xf-nlNoticeContent();
	
	&.notice--primary {
		.xf-nlNoticePrimary();
	}
	&.notice--accent {
		.xf-nlNoticePrimary();
		
		a {
			.xf-nlNoticeAccentLink();
		}
		a:hover {
			.xf-nlNoticeAccentLinkHover();
		}
	}
	&.notice--dark {
		.xf-nlNoticeDark();
		
		a {
			.xf-nlNoticeDarkLink();
		}
		a:hover {
			.xf-nlNoticeDarkLinkHover();
		}
	}
	&.notice--light {
		.xf-nlNoticeLight();
		
		a {
			.xf-nlNoticeLightLink();
		}
		a:hover {
			.xf-nlNoticeLightLinkHover();
		}
	}
}
.notices {
	h1, h2, h3, h4, h5 {
		margin: 0;
		padding: 0;
	}
}
' . $__templater->fn('property', array('nlInlineNoticeCSS', ), true) . '

/* Sidebar */

.p-body-sideNav .block-container,
.p-body-sidebar .block-container {
	.xf-nlSidebarBlock();
}

/* Menus */

.menu-separator {
	display: none;
}
.menu--structural .menu-content .menu-row {
	line-height: normal;
	
	a {
		font-weight: bold;
	}
}

/* Styles account menu elements */
.menu--account {
	.menu-content > .menu-row {
		.xf-nlAccountMenuHeader();
	}
	.menu-linkRow {
		.xf-nlAccountMenuLink();
		
		&:hover {
			.xf-nlAccountMenuLinkHover();
		}
	}
}

/* Overlays */

.overlay {
	.xf-nlOverlayPanel();
}
.overlay .block-container {
	box-shadow: none !important;
}
.overlay-title {
	line-height: normal;
}
.overlay-titleCloser {
	.xf-nlOverlayCloser();
}

/* Temp patches */

/* Node list */

.nodeList .block-body > .node:last-of-type .node-body {
    margin-bottom: 0;
}
.nodeList {
	.xf-nlNodeListWrapper();
	
	.block.block--category {
		.xf-nlNodeGroupContainer();
	}
	
	.block.block--category .block-container {
		.xf-nlNodeCategoryContainer();
	}

	.block-header {
		margin: 0;
		padding: 0;
		.xf-nlCategoryStrip();

		a {
			.xf-nlCategoryStripTitle();
		}
		a:hover {
			.xf-nlCategoryStripTitleHover();
		}
		.block-desc {
			.xf-nlCategoryStripDescription();
		}
		+ .block-desc {
			.xf-nlCategoryDescSeparate();
		}
	}
	.block-body {
		.xf-nlNodeCategoryListContainer();
		
		& > .node:last-of-type .node-body {
			margin-bottom: 0;
		}
	}
}
/* Hard set line height, gives tighter appearance. Reconsider for later */
.node-description, .node-extra-row, .node-title, .structItem-cell {
    line-height: 1.4;
}

.has-menuFollowIcons .menu-linkRow:after {
	.xf-nlMenuLinkRowAfterIcon();
}
.has-blockTitle .p-body .p-title {
	.xf-contentBase();
	.xf-blockBorder();
	border-radius: @xf-blockBorderRadius;
}
.p-title-value {
	.xf-nlPageTitle();
}

/* Structured lists */

.structItem-title {
	.m-clearFix();
	
	.label.label--primary:last-child {
		/* float: right; */
	}
}

/* Forum view */

.filterBar-menuTrigger {
	.xf-nlBlockMenuTrigger();
}
form.structItem:hover {
    background: inherit !important;
}

/* Message view */

.message-content a {
	.xf-nlMessageLink();
}
.message-content a:hover {
	.xf-nlMessageLinkHover();
}
.messageButtonLinks .actionBar-set--external .actionBar-action {
	.xf-buttonBase();
	.xf-buttonDefault();
	.xf-buttonPrimary();
	.xf-nlButtonSmall();
	
	&.has-reaction .reaction-text {
		color: inherit !important;
	}
}
.message-userDetails .userTitle {
	.xf-nlUserTitle();
}
.actionBar-action {
	.xf-nlMessageActionLinks();
}

/* Message banners and buttons */

.message-cell--user {
	a.cxf-button.button--link,
	.offline, .online,
	.userBanner {
		display: block;
		width: 100%;
		margin-top: 4px;
	}
}

/* Forms */

label {
.xf-nlFormLabel();
}
.form-inline label {
    margin: @xf-paddingSmall 0;
    display: inline-block;
}
.form-inline .formSubmitRow-bar {
    background: none;
    border: none;
}
.form-inline .formSubmitRow-controls {
    padding: 0;
    margin: @xf-elementSpacer 0 0;
}
input[type="search"] {
    color: @xf-inputTextColor;
}
select.input.hide {
    display: none !important;
}

/* Footer */

.p-footer-row-main {
	.p-footer-linkList {
		
		/* Set chooser links */
		& > li a {
			.xf-nlFooterLinksBarChooserLink();
		}
		& > li a:hover {
			.xf-nlFooterLinksBarChooserLinkHover();
		}
	}
}

.p-footer {
	
	/* Bold widget links within columns */
	.contentRow-main a {
		font-weight: bold;
		display: block;
		.m-overflowEllipsis();
	}
	.label.label--primary {
		
	}
	/* Inherits main footer text color */
	.contentRow-muted,
	.contentRow-lesser,
	.contentRow-minor,
	.pairs > dt {
		color: inherit;
	}
	
	textarea, .input {
		.xf-nlFooterInput();
	}
}
.p-footer-row {
	position: relative;
}
.p-footer-row.copyrightContainer {
	a {
		.xf-nlFooterCopyrightLink();
	}
	a:hover {
		.xf-nlFooterCopyrightLinkHover();
	}
}

/* Social Links */

/* Tabs */

.tabs-tab {
	position: relative;
}
.tab-markers-default {
	
}
.tab-markers-arrow {
	.tabs-tab {
		border-bottom: none !important;
	}
	@_tabs-arrowSize: 8px;
	
	.tabs-tab:after {
		content: "";
		position: absolute;
		bottom: 0;
		left: 50%;
		margin-left: -(@_tabs-arrowSize / 2);
		.m-triangleUp(transparent, @_tabs-arrowSize);
	}
	.block-tabHeader {
		.tabs-tab:after {
			bottom: -@xf-blockTabHeader--border-bottom-width;
		}
		.tabs-tab.is-active:after {
			border-bottom-color: @xf-blockTabHeaderSelected--border-color;
		}
	}
	.block-minorTabHeader {
		.tabs-tab.is-active:after {
			border-bottom-color: @xf-blockMinorTabHeaderSelected--border-color;
		}
	}
	.tabs--standalone {
		.tabs-tab.is-active:after {
			border-bottom-color: @xf-standaloneTabSelected--border-color;
		}
	}
	.menu-tabHeader {
		.tabs-tab.is-active:after {
			border-bottom-color: @xf-menuTabHeaderSelected--border-color;
		}
	}
}

/* Misc */

.button.button--scroll,
a.button.button--scroll {
	.xf-nlPageScrollButton();
}
.u-scrollButtons {
	bottom: @xf-nlScrollToTopMarginV;
}
.lSAction > a:after {
	font-weight: 900;
}
.actionBar-action.actionBar-action--inlineMod label.iconic,
label.iconic i {
    font-weight: normal;
}

';
	if ($__templater->fn('property', array('nlEnableFullWidth', ), false) == true) {
		$__finalCompiled .= '
/* nl_pro fluid width setup */

@media (min-width: @xf-nlFullWidthTrigger)
{
	.fullWidth {
		.p-staffBar,
		.p-topBarController,
		.p-navController,
		.p-sectionLinks,
		.p-page-header,
		.p-header,
		.p-page-header-inner,
		.p-body-inner,
		.p-row-inner,
		.p-footer-wrapper,
		.p-footer-inner {
			.xf-nlPageWidthFluid();
		}
		.p-staffBar-inner,
		.p-topBar-inner,
		.p-nav-inner,
		.p-header-inner,
		.top-row .top-row-item {
			width: auto !important;
			max-width: none !important;
		}
		&.headerStretch #header .p-topBar-inner,
		&.headerStretch .p-sectionLinks-inner {
			max-width: none;
			padding: 0;
		}
		.p-body-inner {
			padding-left: @xf-pageEdgeSpacer !important;
			padding-right: @xf-pageEdgeSpacer !important;
		}
	}
}
';
	}
	$__finalCompiled .= '

/* Mobile styling */

@media (max-width: @xf-publicNavCollapseWidth)
{
	.has-js .p-nav {
		.xf-nlPublicNavResponsive();
	}
	.has-js .p-nav-inner {
		.m-pageInset(@xf-edgeSpacer)
	}
	.p-nav .p-nav-menuTrigger {
		margin: 0 @xf-paddingMedium 0 0;
	}
	.has-js .p-nav-opposite {
		margin-right: 0;
	}
	.has-js .p-nav-opposite .p-navgroup-link {
		.xf-nlPublicNavResponsiveVtabs();
	}
}
@media (max-width: @xf-responsiveWide)
{
	.p-header-inner,
	.p-nav-inner,
	.p-sectionLinks-inner,
	.p-staffBar-inner,
	.p-navController,
	.p-sectionLinks,
	.p-staffBar,
	.p-body-inner,
	.footerFixed footer .p-footer-wrapper,
	.p-footer-inner,
	.footerStretch .p-footer-inner {
		.xf-nlPageWidthWide();
	}
}
@media (max-width: @xf-responsiveMedium)
{
	.p-body-inner {
		.xf-nlPageBodyInnerResponsiveMedium();
	}
	.p-header-inner,
	.p-nav-inner,
	.p-sectionLinks-inner,
	.p-staffBar-inner,
	.p-navController,
	.p-sectionLinks,
	.p-staffBar,
	.p-body-inner,
	.footerFixed footer .p-footer-wrapper,
	.p-footer-inner,
	.footerStretch .p-footer-inner {
		.xf-nlPageWidthMedium();
	}
}
@media (max-width: @xf-responsiveNarrow)
{
	.p-body-inner {
		.xf-nlPageBodyInnerResponsiveNarrow();
	}
	.p-header-inner,
	.p-nav-inner,
	.p-sectionLinks-inner,
	.p-staffBar-inner,
	.p-navController,
	.p-sectionLinks,
	.p-staffBar,
	.p-body-inner,
	.footerFixed footer .p-footer-wrapper,
	.p-footer-inner,
	.footerStretch .p-footer-inner {
		.xf-nlPageWidthNarrow();
	}
	.p-body .p-breadcrumbs.xf1 > li {
		padding-left: @xf-nlBreadcrumbItemPaddingH;
	}
	.p-page-header {
		.p-breadcrumbs > li:after, .p-breadcrumbs > li:before {
			color: inherit;
		}
	}
}

/* Internet Explorer 10+, Microsoft Edge Browser */

_:-ms-lang(x), .p-navSticky.is-sticky { left:0; right:0; }

' . $__templater->includeTemplate('nl_social_setup.less', $__vars);
	return $__finalCompiled;
});