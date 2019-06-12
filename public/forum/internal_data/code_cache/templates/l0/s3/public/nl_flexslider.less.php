<?php
// FROM HASH: d890d715b8e70fb2415ab420fcb12931
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.toggle {
	margin: 2px 0 0 14px;
	float: left;
	border-radius: 6px;
}
.toggle li {
	float: left;
}
.toggle li a {
	width: 50px;
	padding: 6px 0;
	text-align: center;
	display: block;
	text-shadow: 1px 1px 0 #fff;
	font-size: 12px;
	font-weight: 600;
	color: #666;
	border-radius: 0 4px 4px 0;
	background: #ffffff; /* Old browsers */
	background: linear-gradient(top, #ffffff 0%, #ededed 100%); /* W3C */
	box-shadow: inset 1px 1px 0 #fff, inset -1px -1px 0 #fff;
}
.toggle li:first-child a {
	border-radius: 4px 0 0 4px;
}
.toggle li a:hover {
	background: #ededed;
	color: #222;
}
.toggle li a.active {
	background: #c8e0f3;
	color: #325874;
	cursor: default;
	box-shadow: inset 0 0 3px rgba(0,0,0,0.4);
}
.slider {

}
.flexslider p {
	
}
.flexslider .slides iframe {
    width: 100% !important;
    height: auto !important;
    min-height: 300px;
}
#carousel li {
	margin-right: 5px;
}
#carousel img {
	display: block;
	opacity: .5;
	cursor: pointer;
}
#carousel img:hover {
	opacity: 1;
}
#carousel .flex-active-slide img {
	opacity: 1;
	cursor: default;
}

/*
 * jQuery FlexSlider v2.6.2
 * http://www.woothemes.com/flexslider/
 *
 * Copyright 2012 WooThemes
 * Free to use under the GPLv2 and later license.
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Contributing author: Tyler Smith (@mbmufffin)
 *
 */

/* ====================================================================================================================
 * RESETS
 * ====================================================================================================================*/
.flex-container a:hover, .flex-slider a:hover {
	outline: none;
}
.slides, .slides > li, .flex-control-nav, .flex-direction-nav {
	margin: 0;
	padding: 0;
	list-style: none;
}
.flex-pauseplay span {
	text-transform: capitalize;
}
/* ====================================================================================================================
 * BASE STYLES
 * ====================================================================================================================*/
.flexslider {
	margin: 0;
	padding: 0;
}
.flexslider .slides > li {
	display: none;
	-webkit-backface-visibility: hidden;
}
.flexslider .slides img {
	width: 100%;
	display: block;
}
.flexslider .slides:after {
	content: "\\0020";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
html[xmlns] .flexslider .slides {
	display: block;
}
* html .flexslider .slides {
	height: 1%;
}
.no-js .flexslider .slides > li:first-child {
	display: block;
}
/* ====================================================================================================================
 * DEFAULT THEME
 * ====================================================================================================================*/
.flexslider.flexslider--primary {
	.xf-nlSliderContainer();
}
.flexslider .slides {
	.xf-nlSliderSlidesContainer();
}
.flexslider .slides,
.flexslider .slides > li {
	overflow:hidden;
}
.flexslider--primary .slides,
.flexslider--primary .slides > li {
	max-height: @xf-nlSliderMaxHeight;
}
.flexslider .slides img {
	height: auto;
	-moz-user-select: none;
}
.flex-viewport {
	max-height: 2000px;
	transition: all 1s ease;
}
.loading .flex-viewport {
	max-height: 300px;
}
.carousel li {
	margin-right: 5px;
}
.flex-caption {
	position: absolute;
	.xf-nlSiderDescPanel();
	.m-clearFix();
	
	span.button {
		float: right;
		margin-top: 6px;
	}
}
.flex-caption h2 {
	line-height: normal;
	.xf-nlSliderDescTitle();
}
.flex-caption ul {
	padding: inherit;
    list-style: initial;
	.m-clearFix();
}
.flex-caption > * {
    margin: 0 auto @xf-nlSliderCaptionElementSpacer;
}
.flex-caption > *:last-child {
    margin-bottom: 0 !important;
}
.flex-direction-nav {
 *height: 0;
}
.flex-direction-nav a {
	.xf-nlSliderDirectionalCtrl();
}
.flex-direction-nav a:before {
	font-family: fontawesome;
	font-size: 40px;
	display: inline-block;
	content: \'\\f104\';
	color: rgba(0, 0, 0, 0.8);
	text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
	display: none;
}
.flex-direction-nav a.flex-next {
	background-position: -36px center;
}
.flex-direction-nav a.flex-next:before {
	content: \'\\f105\';
}
.flex-direction-nav {
	.flex-prev {
		left: 0;
	}
	.flex-next {
		right: 0;
		text-align: right;
	}
	[dir="RTL"] & {
		.flex-prev {
			right: 0;
		}
		.flex-next {
			left: 0;
			text-align: left;
		}
	}
}
.flexslider:hover .flex-direction-nav .flex-prev {
	opacity: 1;
	// left: 10px;
}
.flexslider:hover .flex-direction-nav .flex-prev:hover {
	opacity: 1;
}
.flexslider:hover .flex-direction-nav .flex-next {
	opacity: 1;
	// right: 10px;
}
.flexslider:hover .flex-direction-nav .flex-next:hover {
	opacity: 1;
}
.flex-direction-nav .flex-disabled {
	opacity: 0!important;
	filter: alpha(opacity=0);
	cursor: default;
	z-index: -1;
}
.flex-pauseplay a {
	display: block;
	width: 20px;
	height: 20px;
	position: absolute;
	bottom: 5px;
	left: 10px;
	opacity: 0.8;
	z-index: 10;
	overflow: hidden;
	cursor: pointer;
	color: #000;
}
.flex-pauseplay a:before {
	font-family: fontawesome;
	font-size: 20px;
	display: inline-block;
	content: \'\\f004\';
}
.flex-pauseplay a:hover {
	opacity: 1;
}
.flex-pauseplay a.flex-play:before {
	content: \'\\f003\';
}
.flex-control-wrapper {
	line-height: normal;
	.xf-nlSliderBottomCtrlContainer();
}
.flex-control-nav {
	.xf-nlSliderBottomCtrlInner();
}
.flex-control-nav li {
	display: inline-block;
	zoom: 1;
	vertical-align: middle;
	*display: inline;
}
.flex-control-paging li a {
	display: block;
	cursor: pointer;
	text-indent: -9999px;
	.xf-nlSliderBottomCtrlButton();
}
.flex-control-paging li a:hover, .flex-control-paging li a.flex-active {
	.xf-nlSliderBottomCtrlButtonHover();
}
.flex-control-thumbs {
	margin: 5px 0 0;
	position: static;
	overflow: hidden;
}
.flex-control-thumbs li {
	width: 25%;
	float: left;
	margin: 0;
}
.flex-control-thumbs img {
	width: 100%;
	height: auto;
	display: block;
	opacity: .7;
	cursor: pointer;
	transition: all 1s ease;
}
.flex-control-thumbs img:hover {
	opacity: 1;
}
.flex-control-thumbs .flex-active {
	opacity: 1;
	cursor: default;
}

/* Mobile styling */

@media (max-width: @xf-responsiveMedium)
{
	';
	if ($__templater->fn('property', array('nlSliderMobileCaptionLoc', ), false) == 'below') {
		$__finalCompiled .= '
	.flex-caption {
		position: initial;
		width: auto;
		transform: none;
	}
	';
	}
	$__finalCompiled .= '
}
@media (max-width: @xf-responsiveNarrow)
{
	.flex-caption {
		
		ul {
			padding: 0;
		}
		li {
			width: auto !important;
		}
	}
}

/* Featured inline CSS */

' . $__templater->fn('property', array('nlSliderCustomCSS', ), true);
	return $__finalCompiled;
});