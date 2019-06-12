<?php
// FROM HASH: a08590b58577167ca9697428caca9d74
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/* Complex Bit Sizes ONLY */

.forumbits_right {
    padding: 0 12px; /* width of image */
}
.fbit_bwrap {
    height: 36px;
}
.fbit_bleft {
    height: 36px;
}
.fbit_bright {
    height: 36px;
}

/* Main */

.p-body {
    background: url(@xf-themePath/xenforo/skin/page_bg.jpg) repeat-y center top;
}
.page_top {
    background-image: url("@xf-themePath/xenforo/skin/page_top.jpg");
    background-repeat: no-repeat;
    background-position: center top;
    width: 100%;
}
.page_bot {
    background-image: url("@xf-themePath/xenforo/skin/page_bot.jpg");
    background-repeat: no-repeat;
    background-position: center bottom;
    margin: auto;
    width: 100%;
}
.headerProxy:before {
    background: transparent url(@xf-themePath/xenforo/skin/header_display.jpg) no-repeat center bottom;
    height: 100%;
    width: 100%;
    content: " ";
    display: inline-block;
}
#header_sub {
    margin: auto;
    max-width: 930px;
    position: relative;
}
#header_left {
    background: url("@xf-themePath/xenforo/skin/header_left.jpg") no-repeat scroll 0 0 transparent;
    display: block;
    float: left;
    height: 220px;
    width: 126px;
    margin-left: -35px;
}
#header_center {
    display: block;
    float: left;
    height: 220px;
}
.p-header-content {
    padding: 42px 0 0 92px;
}
.p-header-inner {
    padding: 0;
    max-width: 930px;
    position: relative;
}
.p-header-logo {
    background-image: url(@xf-themePath/xenforo/skin/header_banner.jpg);
    width: 100%;
    height: 145px;
    line-height: 145px;
    padding-right: 210px;
}
.p-header-logo a {
    color: inherit;
    text-decoration: none;
    vertical-align: middle;
}
.p-header-logo.p-header-logo--image img {
    vertical-align: middle;
	display: inline-block;
}

/* Top links */

.toplinks {
    background: url("@xf-themePath/xenforo/skin/tpanel.png") no-repeat top left;
    display: block;
    float: right;
    height: 220px;
    margin: 0;
    padding: 0;
    position: absolute;
    right: -35px;
    text-align: right;
    width: 255px;
	top: 0;
}
#avwrap {
    height: 54px;
    width: 216px;
    margin: 0px 0px 0px 39px;
}
#avwrap_left, #avwrap_right {
    width: 70px;
    height: 54px;
    float: left;
    display: block;
	position: relative;
}
#avwrap_center {
    width: 50px;
    height: 54px;
    float: left;
    display: block;
    z-index: 999;
}
#avwrap_center .avatar.avatar--xxs {
    height: auto;
    width: auto;
    cursor: pointer;
}
#avwrap_center a img {
    width: 50px;
    height: 50px;
}
.toplinks .p-navgroup > a, .toplinks .p-navgroup > div {
    flex: 1 0 auto;
    margin: 0;
}

.toplinks .p-navgroup {
    display: flex;
    width: 100%;
    flex-wrap: wrap;
}

.toplinks .p-navgroup {
    display: flex;
    width: 100%;
    flex-wrap: wrap;
    justify-content: space-between;
}

.p-header-content .p-nav-opposite {
    color: #8d8a80;
    padding: 0;
    margin-right: 0;
    position: relative;
    display: block;
    clear: both;
    width: 190px;
    margin: 10px auto auto 42px;
    text-align: center;
}

/* Navigation */

.offCanvasMenu--nav .offCanvasMenu-content {
	background: @xf-contentBg;
	padding: 10px;
}

/* Breadcrumb */

/* Notices */

/* Sidebar */

.afBlocks .p-body-sidebar .block:not([data-widget-definition="visitor_panel"]) {
	background: #2a2a2c url(@xf-themePath/xenforo/skin/block_top_resp.jpg) repeat-x scroll center top;
	border-radius: 8px;
	border-left: 1px solid #353535;
	box-shadow: 0px 0px 5px #000;
	border-right: 1px solid #353535;
	box-sizing: border-box;

	.block-container {
		border-radius: 0;
		background: transparent url(@xf-themePath/xenforo/skin/block_bot_resp.jpg) repeat-x center bottom;
		padding: 10px 6px 26px 6px;
		border: none;
	}
	h3.block-minorHeader {
		background: url(@xf-themePath/xenforo/skin/block_top_pat.jpg) repeat top center;
		margin: 0;
		border: none;
		text-indent: 6px;
		box-shadow: inset 0px 0px 12px #000;
		padding: 5px 5px;
		border-radius: 6px;
		margin: 3px 0 10px 0;
	}
	ul.block-body, h3.block-minorHeader + div, .block-footer {
		background: #1f1f1f;
		border-radius: 10px !important;
		box-shadow: inset 0px 0px 5px #000;
		border: 1px solid rgba(150,150,150, 0.15);
	}
	.block-footer {
		margin-top: 2px;
	}
}

/* Thread View */

.message-cell.message-cell--main {
    background: url(@xf-themePath/xenforo/skin/camo-pattern1.png) no-repeat;
}

/* Footer */

.p-footer-wrapper {
    background: url(@xf-themePath/xenforo/skin/footer_display.jpg) no-repeat scroll center top;
    margin: auto;
    min-height: 410px;
    width: 100%;
}
.p-footer-sub {
    margin: 0 auto;
	
	.p-footer-row.linksContainer {
		background: transparent none;
		padding: 0;
	}
}
.p-footer-content {
    display: block;
    height: 150px;
    margin: 0 auto;
    max-width: 860px;
    padding: 16px 0 0 0;
    box-sizing: border-box;
    min-height: 200px;
}
#fbar {
    width: 100%;
    height: 50px;
    display: block;
}
#fbar a {
    height: 50px;
    width: 30px;
    display: block;
    margin: 0 auto;
}
#fwrap_left {
    height: 150px;
    width: 60px;
    display: block;
    float: left;
}
#fwrap_right {
    height: 150px;
    width: 60px;
    display: block;
    float: right;
}

/* Fluid theme */

@media (min-width: @xf-nlFullWidthTrigger)
{
	.fullWidth {
		
		@_fluidOffset: 112px;
		
		.p-staffBar-inner,
		.p-topBar-inner,
		.p-header-inner,
		.p-nav-inner,
		.p-sectionLinks-inner,
		.p-body-inner,
		.p-footer-inner,
		.top-row .top-row-item {
			margin: 0 @_fluidOffset !important;
			/* max-width: none !important;
			width: auto !important; */
		}
		
		.headerProxy {
			background: transparent url(@xf-themePath/xenforo/skin/resp_header-tile.jpg) repeat-x scroll left bottom;
			width: 100%;
			margin: auto;
		}
		.headerProxy:before {
			background: transparent url(@xf-themePath/xenforo/skin/resp_header_left.jpg) no-repeat scroll left bottom;
			height: 100%;
			width: 100%;
			content: " ";
			display: inline-block;
		}
		.headerProxy:after {
			background: transparent url(@xf-themePath/xenforo/skin/resp_header-right.jpg) no-repeat scroll right bottom;
			content: " ";
			display: inline-block;
			height: 100%;
			width: 100%;
			position:  absolute;
			top: 0;
			right: 0;
		}
		.page_top {
			background-image: url(@xf-themePath/xenforo/skin/resp_page-left.jpg);
			background-repeat: repeat-y;
			background-position: left top;
			width: 100%;
			background-color: #0d0908;
		}
		.page_bot {
			background-image: url(@xf-themePath/xenforo/skin/resp_page-right.jpg);
			background-repeat: repeat-y;
			background-position: right top;
			margin: auto;
			width: 100%;
		}
		/*
		.pageWidth, #navigation.pageWidth,
		.p-navController,
		.p-sectionLinks {
			max-width: none;
		}
		.p-header-inner {
			max-width: none;
		}
		*/
		.p-header-content {
			max-width: 100%;
			padding-left: 0;
		}
		.p-header-logo {
			background-repeat: no-repeat;
			background-position: center;
		}
		.toplinks {
			right: -40px;
			top: 0;
		}
		#searchBar {
			margin: 16px auto;
		}
		.navTabs .navTab.selected .tabLinks {
		padding-left: 18px;
			margin: 0;
		}
		footer.p-footer {
			background: url(@xf-themePath/xenforo/skin/resp_footer-tile.jpg) repeat-x scroll left top #010101;
		}
		.p-footer-columns {
			margin-top: 0;
		}
		.p-footer-wrapper {
			background: url(@xf-themePath/xenforo/skin/resp_footer-left.jpg) no-repeat scroll left top;
		}
		.p-footer-sub {
			max-width: none;
			background: url(@xf-themePath/xenforo/skin/resp_footer-right.jpg) no-repeat scroll right top;
		}
		.p-footer-content {
			min-height: 380px;
			max-width: none;
			background: url(@xf-themePath/xenforo/skin/resp_footer_display.jpg) no-repeat scroll center top;
		}
		.footer_columns {
			margin: -120px auto 0;
		}
		#navigation.stickyNavAdjuster {
			margin: 0 112px;
			box-sizing: border-box;
			left: 0;
			right: 0;
			width: auto;
			background: #111 url(@xf-themePath/xenforo/skin/resp_header-tile.jpg) repeat-x center -220px;
			padding: 0;
			max-width: none;
		}
	}
}

/* Mobile styling */

.p-nav .p-nav-opposite {
	display: none;
}
@media (min-width: @xf-publicNavCollapseWidth)
{
.p-navController {
    /* height: 90px; */
}
}

@media (max-width:1000px)
{

.toplinks {
    right: 0px;
}

}
@media (max-width:920px)
{
.p-header-logo {
    margin-left: 0;
    padding-right: 250px;
}
}
@media (max-width:775px)
{
.Responsive #logo {
    margin-right: 220px;
}
}
@media (max-width: @xf-publicNavCollapseWidth)
{
	.p-nav .p-nav-opposite {
		display: block !important;
	}
}
@media (max-width: @xf-responsiveMedium)
{
	.headerProxy {
		display: none;
	}
	header ul.social_icons {
		display: none;
	}
	.toplinks {
position: absolute;
top: 0px;
left: 0px;
background: none;
height: 40px;
width: 100%;
}
#avwrap {
display: none;
}
.Responsive #logo {
    margin-right: 0;
}

}';
	return $__finalCompiled;
});