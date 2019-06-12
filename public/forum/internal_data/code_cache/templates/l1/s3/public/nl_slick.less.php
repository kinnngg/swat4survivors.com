<?php
// FROM HASH: 90e7a63a1d5167d4bf55556630316c47
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/* Slick no-conflict less */

.slick-container {
	position: relative;
	margin-bottom: @xf-elementSpacer;
}
.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-slide, .icon-slide {
	display: none;
}

.slick-container {
	.slick-list
	{
		position: relative;
		display: block;
		overflow: hidden;
		margin: 0 @xf-nlDirectionalControlsWidth;
		padding: @xf-paddingMedium 0;
	}
	.slick-container button {
		box-shadow: none;
	}
	.slick-slide {
		margin: 0px (@xf-elementSpacer / 2);
		text-align: center;
	}
	.slick-slide img {
		width: 100%;
	}
	.slick-slide img {
		height: auto;
		width: auto;
		margin: auto;
		vertical-align: middle;
		max-width: 100%;
		display: inline-block;
	}
	.slick-prev,
	.slick-next
	{
		width: auto;
		font-size: 0;
		background: transparent;
		border: none;
		line-height: 0;
		position: absolute;
		z-index: 100;
		top: 0;
		display: block;
		cursor: pointer;
		outline: none;
		height: 100%;
		padding: 0;
	}
	.slick-prev:before,
	.slick-next:before
	{
		.m-faBase(\'Pro\', 900);
		font-size: 26px;
		display: inline-block;
		vertical-align: middle;
		text-align: center;
		.xf-nlSlickDirectionalControls();
	}
	.slick-prev:hover:before,
	.slick-next:hover:before
	{
		opacity: 1;
		.xf-nlSlickDirectionalControlsHover();
	}
	.slick-prev.slick-disabled:before,
	.slick-next.slick-disabled:before
	{
		/* opacity: .25; */
	}

	.slick-prev
	{
		left: 0;
	}
	[dir=\'rtl\'] .slick-prev
	{
		right: 0;
		left: auto;
	}
	.slick-next
	{
		right: 0;
	}
	[dir=\'rtl\'] .slick-next
	{
		right: auto;
		left: 0;
	}
	.slick-prev:before
	{
		content: "\\f053";
	}
	.slick-next:before
	{
		content: "\\f054";
	}
	
}

.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            -webkit-transform: translate3d(0, 0, 0); -ms-transform: translate3d(0, 0, 0);-webkit-transform: translate3d(0, 0, 0); -ms-transform: translate3d(0, 0, 0);-webkit-transform: translate3d(0, 0, 0); -ms-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
}
.slick-track:before,
.slick-track:after
{
    .m-clearFix();
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    min-height: 1px;
    border: none;
    vertical-align: middle;
}
[dir=\'rtl\'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}

/* Append class with js to align iframe */

.videowrapper {
    float: none;
    clear: both;
    width: 100%;
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 25px;
    height: 0;
}
.videowrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

/* Auto align */

.slick-container.autoAlign-true {
	.slick-track {
		display: flex;
	}
	.slick-slide.featuredWidget {
		flex: 1;
	}
	.featuredInner {
		position:relative;
		height: 100%;
	}
	.featuredWidget .featuredInner > div:first-of-type:only-child:not(.videowrapper) {
		height: 100%;
		box-sizing: border-box;
	}
	.slick-slide.featuredWidget .featuredInner iframe {
		left:0;
		top:0;
		height:100%;
		width:100%;
		position:absolute;
	}
}
    
.slick-loading .slick-list
{
    /* background: url(@xf-themePath/xenforo/ajax-loader.gif) center center no-repeat; */
}

/* Dots */

.slick-dots
{
	margin: @xf-paddingMedium auto 0;
	padding: 0;
	width: auto;
	position: relative;
	display: block;
	list-style: none;
	text-align: center;
	box-sizing: border-box;
	
	li {
		position: relative;
		display: inline-block;
		width: 20px;
		height: 20px;
		margin: 0 5px;
		padding: 0;
		cursor: pointer;
	}
	
	li button {
		font-size: 0;
		line-height: 0;
		display: block;
		width: 20px;
		height: 20px;
		padding: 5px;
		cursor: pointer;
		color: transparent;
		border: 0;
		outline: none;
		background: transparent;
	}
	li button:hover,
	li button:focus {
		outline: none;
	}
}

/* Set initial controls */

.slick-dots li button:before {
	.xf-nlDotControl();
}
.slick-dots li.slick-active button:before,
.slick-dots li button:hover:before,
.slick-dots li button:focus:before {
	.xf-nlDotControlHover();
}

/* Feature setup */

.slick-container.slick-container--icons h3,
.top-row .slick-container.slick-container--icons h3 {
	.xf-nlIconSliderTitle();
}
.slick-container.slick-container--icons .block-container {
	.xf-nlIconSliderContainer();
}
.slick-container.slick-container--featured h3 {
	margin: 0;
    line-height: normal;
	.xf-nlFeaturedSliderTitle();
}
.slick-container.slick-container--featured .block-container  {
	.xf-nlFeaturedSliderContainer();
}

.top-row .slick-container .block-container  {
    background: transparent none;
    border: none;
    box-shadow: none;
    padding: 0;
    margin: auto;
}

.slick-slide.featuredWidget {
	margin: 0 ((@xf-nlFeaturedWidgetSpacing) / 2);
    -webkit-font-smoothing: subpixel-antialiased;
	.xf-nlFeaturedWidget();
	
	a {
		color: @xf-nlFeaturedWidget--color;
	}
	h2, h3, h4, h5 {
		margin: 0;
		.xf-nlFeaturedWidgetHeading();
	}
	p {
		margin: 10px 0;
	}
	iframe, img {
		width: 100% !important;
	}
}
.slick-container--icons {
	.slick-list {
		.xf-nlIconSliderTrackList();
	}
	.slick-slide {
		height: @xf-nlIconSliderImgHeight;
		line-height: @xf-nlIconSliderImgHeight;
	}
	.slick-dots li button:before
	{
		.xf-nlIconSliderDotControl();
	}
	.slick-dots li.slick-active button:before
	{
		.xf-nlIconSliderDotControlActive();
	}
	.slick-slide img {
		max-height: @xf-nlIconSliderImgHeight;
	}
	.slick-dots
	{
		.xf-nlIconSliderDotContainer();
	}
}
.slick-container--featured {
	.slick-list {
		.xf-nlFeaturedSliderTrackList();
	}
	.slick-dots li button:before
	{
		.xf-nlFeaturedSliderDotControl();
	}
	.slick-dots li.slick-active button:before
	{
		.xf-nlFeaturedSliderDotControlActive();
	}
}

/* Misc */

.breadBoxBottom + .slick-container {
    margin-bottom: 0;
}

/* Edge fit spacing */

.boxedContent .slick-container.toEdge {
	margin: -@xf-nlPageBodyInner--padding -@xf-nlPageBodyInner--padding @xf-elementSpacer -@xf-nlPageBodyInner--padding;
	margin: -@xf-nlPageBodyInner--padding-top -@xf-nlPageBodyInner--padding-right @xf-elementSpacer -@xf-nlPageBodyInner--padding-left;
}

.anchor_wide_aboveFooter + .slick-container--icons {
    margin-top: @xf-elementSpacer;
	margin-bottom: 0;
}

/* Featured inline CSS */

';
	if ($__templater->fn('property', array('nlEnableFeaturedContentSlider', ), false) == true) {
		$__finalCompiled .= '
' . $__templater->fn('property', array('nlFeaturedWidgetsCustomCSS', ), true) . '
';
	}
	$__finalCompiled .= '

/* Mobile Styling */

@media (max-width:@xf-responsiveWide)
{
	.iconSliderShowAll {
		
	}
}
@media (max-width:@xf-responsiveMedium)
{
	.iconSliderHideTablet .slick-container.slick-container--icons {
		display: none;
	}
	.slick-container.toEdge {
		margin: 0 0 @xf-elementSpacer 0;
	}
}
@media (max-width:@xf-responsiveNarrow)
{
	.iconSliderHideMobile .slick-container.slick-container--icons {
		display: none;
	}
}

.slick-container .slick-vertical .slick-prev, .slick-container .slick-vertical .slick-next {
    width: 100%;
    /* height: 20px; */
    position: relative;
    line-height: normal;
    left: auto;
	right: auto;
}

.slick-container .slick-vertical .slick-list {
    margin: 0 auto;
}

.slick-container .slick-vertical {
	.slick-prev:before {
		content: "\\f106";
	}
	.slick-next:before {
		content: "\\f107";
	}
}';
	return $__finalCompiled;
});