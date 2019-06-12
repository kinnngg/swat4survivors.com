<?php
// FROM HASH: 0c75c62c52eec036be2e6038f8eaa234
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/* Temp */

.categoryStrip .collapseTrigger {
	display: none;
}

/* Header */

.headerProxy {
	min-height: @xf-nlHeaderProxyMinAdjuster;
}

/* navigation */

.p-header-content .p-navgroup.p-discovery {
    margin-left: 0;
}

/* Misc */

.nodeList .forumbits_right .block-desc {
	.xf-nlCategoryDescSeparate();
}

.tableft {
    background: url(@xf-themePath/xenforo/skin/tableft.png) no-repeat scroll left bottom transparent;
    display: block;
    height: @xf-nlCategoryStripHeight;
}
.tabright {
    background: url(@xf-themePath/xenforo/skin/tabright.png) no-repeat scroll right bottom transparent;
    display: block;
    height: @xf-nlCategoryStripHeight;
}
.collapsible-nodes .block-header {
    width: 100%;
}
.collapsible-nodes .block-header--left {
    margin: auto;
    width: 100%;
}
.nodeList .block-header {
    background: transparent none;
    line-height: normal;
    height: auto;
    padding: 0;
    margin: 0;
    border: none;
    box-shadow: none;
}

.forumbits_left { background: url(@xf-themePath/xenforo/skin/fbit_left.png) repeat-y top left; clear: both; }
.forumbits_right {
    background: url(@xf-themePath/xenforo/skin/fbit_right.png) repeat-y scroll right top transparent;
    padding: 0 20px;
}
.fbit_bwrap {
    background: url(@xf-themePath/xenforo/skin/fbit_bot.png) repeat-x scroll center top transparent;
    clear: both;
    display: block;
    width: 100%;
}
.fbit_bleft {
    background: url(@xf-themePath/xenforo/skin/fbit_bleft.png) no-repeat scroll left top transparent;
    display: block;
    float: left;
    width: 50%;
}
.fbit_bright {
    background: url(@xf-themePath/xenforo/skin/fbit_bright.png) no-repeat scroll right top transparent;
    display: block;
    float: right;
    width: 50%;
}

/* Node list */

.nodeList {
	.categoryStrip {
		.xf-nlCategoryStrip();
	}
}

/* Thread list */

.block-container--threadList {
	border: none;
}

/* Nodes */

/* Node grid */

.nodeList.gridNodes:not(.hideIcon) {
	.node-main,
	.node-stats,
	.node-extra {
		margin-left: @xf-nlNodeIconBlockWidth;
		flex: 1 0 ~"calc(100% - @xf-nlNodeIconBlockWidth)" !important;
	}
}

/* Mobile style */

@media (max-width:800px)
{   

}
@media (max-width:480px)
{

}

@media (max-width:340px)
{

}';
	return $__finalCompiled;
});