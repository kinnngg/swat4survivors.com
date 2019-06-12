<?php
// FROM HASH: a59ec4d064276e9f813c6b9bccdc6a63
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/* XFMG */

[data-type="xfmg_media"] {
	
	.block-container {
		.m-stripElement();
	}
	.itemList {
		margin: 0 -(@xf-nlXFMGItemSpacing / 2);
	}
	.itemList-item {
		flex: 1 0 25%;
		max-width: none;
		margin: (@xf-nlXFMGItemSpacing / 2);
	}
	.media-gridItems-2 & .itemList-item {
		flex: 0 0 ~"calc(50% - @xf-nlXFMGItemSpacing)";
	}
	.media-gridItems-3 & .itemList-item {
		flex: 0 0 ~"calc(33.3% - @xf-nlXFMGItemSpacing)";
	}
	.media-gridItems-4 & .itemList-item {
		flex: 0 0 ~"calc(25% - @xf-nlXFMGItemSpacing)";
	}
	.media-gridItems-5 & .itemList-item {
		flex: 0 0 ~"calc(20% - @xf-nlXFMGItemSpacing)";
	}
	.media-gridItems-6 & .itemList-item {
		flex: 0 0 ~"calc(16.667% - @xf-nlXFMGItemSpacing)";
	}
	.media-itemDesc-below & {
		.itemList-item {
			.xf-contentBase();
			.xf-blockBorder();
			border-radius: @xf-blockBorderRadius;
		}
		.itemList-itemOverlay {
			position: relative;
			background: transparent;
			color: @xf-textColorMuted;
			top: auto;
			bottom: auto;
			height: auto;
			.xf-nlXFMGItemDescBelowContent();
		}
		.itemList-itemOverlay * {
			color: inherit;
			font-size: inherit;
			text-shadow: none;
		}
		.itemInfoRow-title {
			margin-bottom: @xf-paddingSmall;
			.xf-nlXFMGItemDescBelowTitle();
		}
	}
	.media-itemDesc-fade & {
		.itemList-itemOverlay {
			color: @xf-textColorMuted;
		  top: 0;
		  bottom: auto;
		  height: 100%;
		  width: 100%;
		  display: flex;
		  text-align: center;
		  align-items: center;
			opacity: 0;
			transition: .2s opacity;
			pointer-events: none;
		}
		.itemList-item:hover .itemList-itemOverlay {
			opacity: 1;
		}
		';
	if ($__templater->fn('property', array('nlXFMGZoomThumbHover', ), false) == true) {
		$__finalCompiled .= '			
		.itemInfoRow-main {
			transition: .2s transform;
			backface-visibility: hidden;
			transform: scale(0.8);
		}
		.itemList-item:hover .itemInfoRow-main {
			transform: scale(1);
		}
		';
	}
	$__finalCompiled .= '
		.itemList-itemOverlay * {
			color: inherit;
			font-size: inherit;
			text-shadow: none;
			margin: auto;
		}
		.itemInfoRow-title {
		  margin-bottom: 6px;
		  color: #fff;
		  font-size: @xf-fontSizeLarge;
		}
	}
}
@media (max-width: @xf-responsiveMedium)
{
	.itemList-item {
		width: auto;
		flex: 1 1 ~"calc(50% - @xf-nlXFMGItemSpacing)" !important;
	}
}
@media (max-width: @xf-responsiveNarrow)
{
	.itemList-item {
		flex: 1 1 ~"calc(100% - @xf-nlXFMGItemSpacing)" !important;
	}
}
';
	if ($__templater->fn('property', array('nlXFMGZoomThumbHover', ), false) == true) {
		$__finalCompiled .= '
[data-type="xfmg_media"] {
	
	.xfmgThumbnail {
		overflow: hidden;
	
		img {
			transition: .2s transform;
		}
	}
	.itemList-item:hover .xfmgThumbnail img {
		transform: scale(@xf-nlXFMGZoomThumbAmount);
	}
}
';
	}
	$__finalCompiled .= '

.itemList-itemOverlay
{
	height: 35%;
	bottom: -35%;

	.has-touchevents &,
	.itemList-item:hover &
	{
		height: auto;
	}
}

a.media-button {
	background: transparent;
    border: none;
    opacity: 1;
    width: auto;
	
	.media-button-icon {
		-webkit-text-stroke: unset;
	}
	&.media-button--prev .media-button-icon:before,
	&.media-button--next .media-button-icon:before {
		font-size: 26px;
		vertical-align: middle;
		text-align: center;
		.xf-nlSlickDirectionalControls();
	}
}
.js-mediaContainerImage:before {
    content: "\\f00e";
    .m-faBase();
    color: #bfbfbf;
    display: block;
    position: absolute;
    width: 40px;
    height: 40px;
    top: 0;
    right: 0;
    background: rgba(0,0,0,0.5);
    text-align: center;
    font-weight: 900;
    font-size: 20px;
    line-height: 40px;
    opacity: 0;
    transition: .2s opacity;
}
.js-mediaContainerImage:hover:before {
    opacity: 1;
}
.js-mediaContainerImage.full-size:before {
    content: "\\f010";
}
.media-container .media-container-image.full-size img {
    max-height: none;
}
.template-xfmg_media_view .itemList--strip .itemList-item {
	max-width: 100px;
}


/* Siropu chat */

#siropuChatOptions {
	margin-top: 0;
}

/* [XD] Featured Threads Sliders */

.FTSlider_BlockBody {
	padding: @xf-blockPaddingV @xf-blockPaddingH;
}

/* DBTech Ecommerce */

@_dbtech_ecomm_itemWidth: (100 / @xf-nlDBTech_ecommGridItemsPerRow);

.p-body-content .block-container--grid,
.p-body-content .block-container--full-grid {
	.m-stripElement();
	
	.productList-grid {
		display: flex;
		flex-flow: row wrap;
		justify-content: flex-start;
		margin: 0 -(@xf-elementSpacer / 2);
	}
	.productList-product-grid.node {
		padding: 0;
		margin: (@xf-elementSpacer / 2);
		flex: 0 0 ~"calc(33.33% - @xf-elementSpacer)";
		width: auto;
		max-width: none;
		min-width: 0;
		
		.productList-product-grid--updateInfo {
			.xf-blockFooter();
		}
	}
	.price .label.label--primary {
		background: transparent none;
		border: none;
		font-size: 1.3em;
		font-weight: bold;
		color: @xf-textColor;
	}
	
	.grid-2 {
		.productList-product-grid.node {
			flex: 0 0 ~"calc(50% - @xf-elementSpacer)";
		}
	}
	.grid-3 {
		.productList-product-grid.node {
			flex: 0 0 ~"calc(33.33% - @xf-elementSpacer)";
		}
	}
	.grid-4 {
		.productList-product-grid.node {
			flex: 0 0 ~"calc(25% - @xf-elementSpacer)";
		}
	}
	.grid-5 {
		.productList-product-grid.node {
			flex: 0 0 ~"calc(20% - @xf-elementSpacer)";
		}
	}
	.block-footer {
		.m-stripElement();
	}
	@media (max-width: 800px)
	{
		.productList-product-grid.node {
			flex: 0 0 ~"calc(33.33% - @xf-elementSpacer)" !important;
		}
	}
	@media (max-width: @xf-responsiveMedium)
	{
		.productList-product-grid.node {
			flex: 0 0 ~"calc(50% - @xf-elementSpacer)" !important;
		}
	}
	@media (max-width: @xf-responsiveNarrow)
	{
		.productList-product-grid.node {
			flex: 1 1 100% !important;
		}
	}
}

/* Product icons */

.productList-product-grid.node .productList-product-grid--icon {
	.xf-nlDBTechEcommThumbWrapper();
}

.productList-product-grid--icon a.avatar {
    width: auto;
    height: auto;
}

/* Custom responsive product icons - deprecate if added by author */

';
	if ($__vars['xf']['options']['dbtechEcommerceProductIconMaxDimensions']['width'] OR $__vars['xf']['options']['dbtechEcommerceProductIconMaxDimensions']['height']) {
		$__finalCompiled .= '
.flex-box .avatar
{
    &.avatar--productIconDefault,
    &.avatar--productIcon
    {
		width: auto;
		height: auto;
		
		&.avatar--xxs
		{
			';
		if ($__vars['xf']['options']['dbtechEcommerceProductIconMaxDimensions']['width']) {
			$__finalCompiled .= '
				max-width: ' . ($__vars['xf']['options']['dbtechEcommerceProductIconMaxDimensions']['width'] * 0.125) . 'px;
			';
		}
		$__finalCompiled .= '
		}

		&.avatar--xs
		{
			';
		if ($__vars['xf']['options']['dbtechEcommerceProductIconMaxDimensions']['width']) {
			$__finalCompiled .= '
				max-width: ' . ($__vars['xf']['options']['dbtechEcommerceProductIconMaxDimensions']['width'] * 0.17) . 'px;
			';
		}
		$__finalCompiled .= '
		}
		
		&.avatar--s
		{
			';
		if ($__vars['xf']['options']['dbtechEcommerceProductIconMaxDimensions']['width']) {
			$__finalCompiled .= '
				max-width: ' . ($__vars['xf']['options']['dbtechEcommerceProductIconMaxDimensions']['width'] * 0.25) . 'px;
			';
		}
		$__finalCompiled .= '
		}
		
		&.avatar--m
		{
			';
		if ($__vars['xf']['options']['dbtechEcommerceProductIconMaxDimensions']['width']) {
			$__finalCompiled .= '
				max-width: ' . ($__vars['xf']['options']['dbtechEcommerceProductIconMaxDimensions']['width'] * 0.5) . 'px;
			';
		}
		$__finalCompiled .= '
		}

		&.avatar--l
		{
			';
		if ($__vars['xf']['options']['dbtechEcommerceProductIconMaxDimensions']['width']) {
			$__finalCompiled .= '
				max-width: ' . $__templater->escape($__vars['xf']['options']['dbtechEcommerceProductIconMaxDimensions']['width']) . 'px;
			';
		}
		$__finalCompiled .= '
		}
    }
}
';
	}
	$__finalCompiled .= '

/* Product pages */

.productBody .productBody--attachments {
	margin: 0;
}
@media (min-width: @xf-responsiveWide)
{
	.template-dbtech_ecommerce_product_view .p-body-sidebar {
		width: @xf-nlDBTechEcommSidebarWidth;
	}
}
.productContainer {
	.product-feature-img {

	}
	.product-feature-img img {
		width: 100%;
		display: block;
	}
	.productBody .productBody--main {
		padding: 0 !important;
	}
	.attachment.slick-slide img {
		max-height: 100px;
	}
}
.productContainer--attachments-side {
	.productAttachments-aside {
		max-width: 180px;
		float: left;
	}
	.slick-container {
		margin: 0;
	}
	.product-feature-img {
		margin-left: 200px;
	}
}
.productContainer--attachments-below {
	
	> .block-body > .block-row:nth-of-type(2) {
		padding-top: 0;
	}
	.slick-container {
		margin: 0;
		
		.slick-prev {
			left: 0;
		}
		.slick-next {
			right: 0;
		}
		.productBody--attachments {
			margin: 0;
		}
		.slick-list {
			padding: 0;
		}
		.slick-slide.attachment {
			background: rgba(0,0,0,0.05);
		}
	}
}
.block-row--pricingInfo .pairs--price > dd {
    .xf-nlDBTechEcommPrice();
}

/* XenPorta 2 */

.porta-masonry .porta-article-item .message-main > a:first-of-type {
    .xf-nlFormLabel();
}
.porta-article-item .porta-article-header .porta-header-text {
	line-height: normal;
}
';
	if ($__templater->fn('property', array('nlXenportaArticleGridItemButtonStyles', ), false) == 'inline') {
		$__finalCompiled .= '
.porta-article-item .block-footer {
	.m-hiddenLinks();
	
	a.button {
		.m-buttonReset();
		
		i:before {
			margin: 0;
		}
		span.button-text {
			display: inline-block;
		}
		&:hover {
			color: @xf-linkHoverColor;
		}
	}
	.block-footer-counter > a:first-of-type:before {
		content: "\\f660";
		.m-faBase();
		margin-right: 6px;
	}
}
';
	}
	$__finalCompiled .= '
.message-main h3.porta-header-text {
    margin: 0 0 @xf-paddingMedium;
	.xf-nlXenportaArticleItemInlineTitle();
}
';
	if ($__templater->fn('property', array('EWRporta_dateblock_margin', ), false)) {
		$__finalCompiled .= '
.porta-date-block {
	position: relative;
	
	&:after {
		content: "";
		width: 0;
		height: 0;
		border-top: (@xf-EWRporta_dateblock_margin * -1) solid @xf-nlDateBlockCorner--border-color;
		border-left: (@xf-EWRporta_dateblock_margin * -1) solid transparent;
		position: absolute;
		left: 0;
		bottom: @xf-EWRporta_dateblock_margin;
	}
}
.porta-article-item .porta-article-date .porta-date-block {
    width: auto;
	.xf-nlDateBlock();
}
';
	}
	$__finalCompiled .= '
@media (max-width: @xf-responsiveNarrow)
{
	.porta-masonry {
		margin: 0;
	}
}

/* ITD Page scroll progress bar */

.scrollindicator {
	background: @xf-nlITDScrollbarTrack;
}

.scrollprogress {
	background: @xf-nlITDScrollbarActive;
}

/* TH Holidays */

.node--category .node-icon i, .node--forum .node-icon i {
    background-position: center center;
}

/* Collapsable categories */

.collapsible-nodes .block-header--left {
    line-height: normal;
	
	a {
    	display: block;
	}
}
.block--category .collapseTrigger {
    line-height: normal;
}

/* TH Node grid */

.nodeSeparateTitleDesc .thNodes__nodeList .block-container {
	.block-header {
		margin-bottom: 0;
	}
	.block-body {
		margin-top: @xf-th_nodeGutter;
	}
}
.thNodes__nodeList {
    background: none;
    border: none;
    box-shadow: none;
	
	.siropuChatAboveForumList .block-container {
		.xf-contentBase();
		.xf-blockBorder();
		border-radius: @xf-blockBorderRadius;
	} 
	
	> .block {
        padding: @xf-th_nodeGutter !important;
    }
	.node .node-wrapper {
		display: flex;
		flex-grow: 1;
	}
	.node-icon i {
		.xf-nlImgNodeIconWrapper();
	}
}

.thNodes__nodeList > .block.block--category:last-of-type {
    margin-bottom: 0;
}';
	return $__finalCompiled;
});