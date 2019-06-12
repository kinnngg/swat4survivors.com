<?php
// FROM HASH: b41f8240e7b5183ebb63b3c6f0d48b65
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/* Footer Columns */

.p-footer-columns {
	.xf-nlFooterColumnWrapper();
}

/* Footer Columns */


/* Footer texture */
';
	if ($__templater->fn('property', array('nlEnableFooterTextureOverlay', ), false) == true) {
		$__finalCompiled .= '
@media (min-width:@xf-responsiveWide)
{
	.p-footer-columns, .p-footer-inner {
		position: relative;
	}
	.p-footer-columns:before {
		.xf-nlFooterTexturePath();
		content: " ";
		display: inline-block;
		width: 100%;
		height: 100%;
		position: absolute;
		pointer-events: none;
		left: 0;
		top: 0;
	}
}
';
	}
	$__finalCompiled .= '

/* General */

.p-footer-logo {
	.xf-nlFooterLogo();
}
';
	if ($__templater->fn('property', array('nlFooterColumnALogoHideMotto', ), false) == true) {
		$__finalCompiled .= '
footer .logoSubtitle {
	display: none;
}
';
	}
	$__finalCompiled .= '

/* Declare main elements */

.flex_columns {
	.xf-nlFooterFlexRow();
}
.flex_columns_wrapper {
	.xf-nlFooterColumnInnerWrapper();
	
	> .flex_columns:first-of-type {
		margin-top: 0;
	}
}
.flex-item {
.xf-nlFooterFlexItem();
}
.flex-item h3 {
.xf-nlFooterHeadings();
}

/* Top Rows */

.top-row.primary, .top-row.secondary {
    z-index: 1;
    -webkit-transform: translateZ(0);
}

.top-row.primary {
.xf-nlFooterTopRowStyle();
	
	&.center {
		div, p, button, input, .button {
			text-align: center;
			clear: both;
			float: none !important;
			margin-left: auto;
			margin-right: auto;
		}
	}
}
.footerStretch .top-row.wide {
	margin-left: -50vw;
	position: relative;
	left: 50%;
	width: 100vw;
}
.footerFixed .top-row.wide {
	width: auto;
	margin-left: -@xf-pageEdgeSpacer;
	margin-right: -@xf-pageEdgeSpacer;
}
.top-row.secondary {
.xf-nlFooterTopRow2Style();
	
	&.center {
		div, p, button, input, .button {
			text-align: center;
			clear: both;
			float: none !important;
			margin-left: auto;
			margin-right: auto;
		}
	}
}

';
	if ($__templater->fn('property', array('nlFooterTopRowUseParallax', ), false) == true) {
		$__finalCompiled .= '
.top-row.primary {
	.xf-nlFooterTopRowParallax();
}
';
	}
	$__finalCompiled .= '

.top-row.primary .top-row-item {
	.m-footerWidth();
	.xf-nlFooterTopRowBlock();
}
.top-row.secondary .top-row-item {
	.m-footerWidth();
	.xf-nlFooterTopRow2Block();
}
.top-row-item p {
    margin: 0 0 10px;
}
footer .top-row a.button {

}
.top-row-item:after {
clear: both;
content: " ";
display: block;
width: 100%;
height: 1px;
}
.top-row.primary .top-row-item h3 {
.xf-nlFooterTopRowBlockTitle();
}
.top-row.secondary .top-row-item h3 {
.xf-nlFooterTopRowBlock2Title();
}
.top-row-item {
	h2, h3 {
		margin: 0;
		line-height: normal;
	}
}

/* Dual Blocks */

.flex_columns.above div, .flex_columns.lower div {
.xf-nlFooterDualColumnBlockStyle();
}
/* First and last fixes */
.flex_columns.above div.flex-item:last-of-type, .flex_columns.lower div.flex-item:last-of-type {
    text-align: right;
	margin-right: 0;
}
.flex_columns.above div.flex-item:first-of-type, .flex_columns.lower div.flex-item:first-of-type {
    margin-right: ' . $__templater->fn('property', array('nlFooterBlockSpacing', ), true) . ';
}



/* Build Columns */

.flex_columns.main .flex-item {
.xf-nlFooterColumn();
}

/* First item control width */
';
	if ($__templater->fn('property', array('nlFooterColumnAWidth', ), false) != null) {
		$__finalCompiled .= '
.flex_columns.main div.flex-item:first-of-type {
	flex: 0 0 @xf-nlFooterColumnAWidth;
	max-width: none !important;
}
';
	}
	$__finalCompiled .= '

/* First and last fixes */
.flex_columns div.flex-item:first-of-type {
    margin-left: 0;
}
.flex_columns div.flex-item:last-of-type {
    margin-right: 0;
}

/* Style widgets */

.flex_columns {
	.block, .block-container, .block-body, .block-header {
		background: transparent none;
		border: none;
		box-shadow: none;
		padding: 0 !important;
		clear: both;
	}
	.block-minorHeader {
		background: transparent none;
		padding: 0;
		border: none;
	}
}
.p-footer {
	.block-minorHeader a {
		color: inherit;
	}
	.block-container {
		color: inherit !important;
	}
	.block-row {
		padding: @xf-paddingSmall 0;
	}
	.block-footer {
		display: none;
	}
	.block-body li.block-row:first-of-type {
		padding-top: 0;
	}
	.block-body li.block-row:last-of-type {
		padding-bottom: 0;
	}
	.contentRow-minor:last-child {
		display: none;
	}
}
.flex-item > *:not(:last-child) {
	margin-bottom: @xf-elementSpacer;
}

/* Lists links and images */

.flex-item a {
.xf-nlFooterColumnLink();
}
.flex-item a:hover {
.xf-nlFooterColumnLinkHover();
}
.flex_columns h1, .flex_columns h2, .flex_columns h4, .flex_columns h5, .flex_columns h6 {
color: ;
}
.flex_columns.main h3,
.flex.columns.main .block-minorHeader {
	margin: 0 0 @xf-elementSpacer;
	line-height: inherit;
	.xf-nlFooterColumnTitle();
}
.flex-item ul.footer-list li {
}
.flex-item ul.footer-list li a {
	.xf-nlFooterColumnListItem();
}
.flex-item ul.footer-list li a:hover {
.xf-nlFooterColumnListItemHover();
}
.has-footerBulletType--none {
	.flex-item ul.footer-list li {
		list-style: none;
	}
}
.has-footerBulletType--default {
	.flex-item ul.footer-list {
		padding-left: 18px;
	
		li {
			list-style: initial;
		}
	}
}
.has-footerBulletType--fa {
	.flex-item ul.footer-list li {
		list-style: none;
		
		a:before {
			.xf-nlFooterColumnListItemFa();
		}
	}
}

.flex-item a.button {
.xf-button();
margin: 10px 0;
width: 100%;
}
.flex-item a.button:hover {

}

/* Image Lists */

.flex-item img {
padding: 0;
margin: 0;
max-width: 100%;
}
.flex-item .img-list {
padding: 6px 0;
}
.flex-item .img-list a {
margin: 0 2% 2% 0;
border: 1px solid @xf-borderColor;
float: left;
display: inline-block;
max-width: 31%;
box-shadow: 0px 0px 6px rgba(0,0,0,0.2);
box-sizing: border-box;
opacity: 1;
transition: .2s opacity, .2s border;
}
.flex-item .img-list a:hover {
opacity: 0.7;
}
.flex-item .img-list a:nth-of-type(3n+3) {
	margin-right: 0;
}
.flex-item .img-list img {
    padding: 0;
    margin: 0;
    display: block;
    float: left;
    height: auto;
}


/* Mobile Styling */

@media (min-width:@xf-responsiveWide)
{
	.flex_columns.main.cols-4 > .flex-item,
	.flex_columns.main.cols-2 > .flex-item:not(first-of-) {
		max-width: 25%;
	}
	.flex_columns.main.cols-3 > .flex-item {
		max-width: 34%;
	}
}
@media (max-width:@xf-responsiveWide)
{
	.flex_columns.main.cols-4 div.flex-item, .flex_columns.main.cols-2 div.flex-item {
		flex: 0 0 50%;
		max-width: 50%;
		margin-bottom: @xf-nlFooterBlockSpacing;
	}
	/* First and last fixes */
	.flex_columns.main.cols-4 div.flex-item:nth-of-type(2) {
		padding-right: 0;
	}
}
@media (max-width:@xf-responsiveNarrow)
{
	.flex_columns.above div.flex-item:last-of-type,
	.flex_columns.lower div.flex-item:last-of-type {
		text-align: left;
	}
	.flex_columns.main.cols-3 .flex-item:first-of-type {
		flex: 0 0 100%;
		/* padding-right: 0; */
	}
	.flex-item {
		margin: 0;
		padding: 0 !important;
		flex: 1 0 100% !important;
		max-width: 100% !important;
	}
	/* Separates single column blocks */
	.flex_columns .flex-item {
		margin-bottom: @xf-nlFooterBlockSpacing;
	}
	.flex_columns .flex-item:last-of-type {
		margin-bottom: 0 !important;
	}
	.top-row h2,
	.top-row h3,
	.top-row h4,
	.top-row button,
	.top-row a.button,
	.top-row p
	.top-row div {
		clear: both;
		float: none !important;
		margin: 10px auto 0 !important;
		text-align: center;
		display: block;
	}
}';
	return $__finalCompiled;
});