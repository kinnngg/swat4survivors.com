<?php
// FROM HASH: dab0994dfbe3b237ea6bc442861aaa5d
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '@_nodeList-statsCellBreakpoint: 1000px;

.node
{
	& + .node
	{
		/* border-top: @xf-borderSize solid @xf-borderColorFaint; */
	}
}

.node-body
{
	display: table;
	table-layout: fixed;
	width: 100%;
	min-height: 70px;
	.xf-nlNodeRow();
}
.alternateNodes .nodeList-body > .node:nth-of-type(even) .node-body {
	.xf-nlNodeRowAlternate();
}
.hoverNodes:not(.nodeImgBehind) {
	.node-body:hover,
	.nodeList-body > .node:nth-of-type(even) .node-body:hover
		{
			.xf-nlNodeRowHover();
		}
}
.node-body > div, .node-body > span {
	.xf-nlNodeCell();
}

.node-icon
{
	display: table-cell;
	vertical-align: middle;
	text-align: center;
	padding: @xf-nlNodePaddingV 0 @xf-nlNodePaddingV @xf-nlNodePaddingH;
	width: @xf-nlNodeIconBlockWidth;
	.xf-nlNodeIconBlock();

	i
	{
		display: block;
		line-height: 1;
		font-size: 32px;
		// .xf-nlNodeIconReadWrapper();

		&:before
		{
			/* .m-faBase(); */
			display: inline-block;
			font-weight: @xf-nlNodeIconStyle;
			color: @xf-nodeIconReadColor;
			text-shadow: 1px 1px 0.5px fade(@xf-nlBoxShadowColor, (@xf-nlBoxShadowAlpha * 100));
			.xf-nlNodeIcon();
			
			.node--unread & {
				opacity: 1;
				color: @xf-nodeIconUnreadColor;
				text-shadow: 1px 1px 0.5px fade(@xf-nlBoxShadowColor, (@xf-nlBoxShadowAlpha * 100));
				.xf-nlNodeIconUnread();
			}
		}
		
		/*
		.node--forum &:before,
		.node--category &:before
		{
			.m-faContent(@fa-var-comments);
		}

		.node--page &:before
		{
			.m-faContent(@fa-var-file-alt);
		}

		.node--link &:before
		{
			.m-faContent(@fa-var-link);
		}
		*/
	}
}

.node-main
{
	display: table-cell;
	vertical-align: middle;
	padding: @xf-nlNodePaddingV @xf-nlNodePaddingH;
	width: 100%;
	.xf-nlNodeMainBlock(); 
}

.node-stats
{
	display: table-cell;
	width: 140px;
	vertical-align: middle;
	text-align: center;
	padding: @xf-nlNodePaddingV 0;
	.xf-nlNodeStatsBlock();

	> dl.pairs.pairs--rows
	{
		width: 50%;
		float: left;
		margin: 0;
		padding: 0 @xf-paddingMedium/2;

		&:first-child
		{
			padding-left: 0;
		}

		&:last-child
		{
			padding-right: 0;
		}
	}
	
	&.node-stats--iconify > dl.pairs dt {
		display: inline-block;
		.m-faBase();
		width: 1em;
		padding-right: .3em;
		text-decoration: none;

		color: @xf-nodeIconReadColor;
		text-shadow: 1px 1px 0 fade(@xf-nlBoxShadowColor, (@xf-nlBoxShadowAlpha * 100));
	}

	&.node-stats--single
	{
		width: 100px;

		> dl.pairs.pairs--rows
		{
			width: 100%;
			float: none;
		}
	}

	&.node-stats--triple
	{
		width: 240px;

		> dl.pairs.pairs--rows
		{
			width: 33.333%;
		}
	}

	@media (max-width: @_nodeList-statsCellBreakpoint)
	{
		display: none;
	}
}

@_nodeExtra-avatarSize: 36px;

.node-extra
{
	display: table-cell;
	vertical-align: middle;
	width: 280px;
	padding: @xf-nlNodePaddingV @xf-nlNodePaddingH;

	.xf-nlNodeLastPost();
	.m-clearFix();
}

.node-extra-date {
    font-size: @xf-fontSizeSmall;
}

.node-extra-row
{
	.m-overflowEllipsis();
	color: @xf-textColorMuted;
}

a.node-extra-title {
	.xf-nlNodeLastPostTitle();
}

.node-extra-user a.username {
	.xf-nlNodeLastPostAuthor();
}

.node-extra-icon
{
	padding-right: @xf-paddingLarge;
	float: left;

	.avatar
	{
		.m-avatarSize(@_nodeExtra-avatarSize);
	}
}

.node-extra-placeholder
{
	font-style: italic;
}

h3.node-title
{
	margin: 0;
	padding: 0;
	';
	if ($__templater->fn('property', array('nlNodeTitleOverflow', ), false) == 'ellipsis') {
		$__finalCompiled .= '
	.m-overflowEllipsis();
	';
	}
	$__finalCompiled .= '
	.xf-nlNodeTitle();
	
	a {
		color: inherit;
	}
	a:hover {
		.xf-nlNodeTitleHover();
	}

	.node--unread &
	{
		/* font-weight: @xf-fontWeightHeavy; */
	}
}

.node-description
{
	font-size: @xf-fontSizeSmall;
	color: @xf-textColorDimmed;

	&.node-description--tooltip
	{
		.has-js:not(.has-touchevents) &
		{
			display: none;
		}
	}
}

.node-meta
{
	font-size: @xf-fontSizeSmall;
}

.node-statsMeta
{
	display: none;

	@media (max-width: @_nodeList-statsCellBreakpoint)
	{
		display: inline;
	}
}

.node-bonus
{
	font-size: @xf-fontSizeSmall;
	color: @xf-textColorMuted;
	text-align: right;
}

.node-subNodesFlat
{
	font-size: @xf-fontSizeSmall;
	margin-top: .3em;

	.node-subNodesLabel
	{
		display: none;
	}
}

.node-subNodeMenu
{
	display: inline;

	.menuTrigger
	{
		color: @xf-textColorMuted;
	}
}

@media (max-width: @xf-responsiveMedium)
{
	.node-main
	{
		display: block;
		width: auto;
	}

	.node-extra
	{
		display: block;
		width: auto;
		// this gives an equivalent of medium padding between main and extra, with main still having large
		margin-top: (@xf-paddingMedium - @xf-paddingLarge);
		/* padding-top: 0; */
		.xf-nlNodeLastPostResponsive();
	}

	.node-extra-row
	{
		display: inline-block;
		vertical-align: top;
		max-width: 100%;
	}

	.node-extra-icon
	{
		display: none;
	}

	.node-description,
	.node-stats,
	.node-subNodesFlat
	{
		display: none;
	}
}

@media (max-width: @xf-responsiveNarrow)
{
	.node-subNodeMenu
	{
		display: none;
	}
}

.subNodeLink
{
	&:before
	{
		display: inline-block;
		.m-faBase();
		width: 1em;
		padding-right: .3em;
		text-decoration: none;

		color: @xf-nodeIconReadColor;
		text-shadow: 1px 1px 0 @xf-nlBoxShadowColor;
	}

	&:hover:before
	{
		text-decoration: none;
	}

	&.subNodeLink--unread
	{
		font-weight: @xf-fontWeightHeavy;

		&:before
		{
			color: @xf-nodeIconUnreadColor;
			text-shadow: 1px 1px 0 @xf-nlBoxShadowColor;
		}
	}

	&.subNodeLink--forum:before,
	&.subNodeLink--category:before
	{
		.m-faContent(@fa-var-folder);
	}

	&.subNodeLink--page:before
	{
		.m-faContent(@fa-var-file-alt);
	}

	&.subNodeLink--link:before
	{
		.m-faContent(@fa-var-link);
	}
}

.node-subNodeFlatList
{
	.m-listPlain();
	.m-clearFix();

	> li
	{
		display: inline-block;
		margin-right: 1em;

		&:last-child
		{
			margin-right: 0;
		}
	}

	ol,
	ul,
	.node-subNodes
	{
		display: none;
	}
}

.subNodeMenu
{
	.m-listPlain();

	ol,
	ul
	{
		.m-listPlain();
	}

	.subNodeLink
	{
		display: block;
		padding: @xf-blockPaddingV @xf-blockPaddingH;
		text-decoration: none;
		cursor: pointer;

		&:hover
		{
			text-decoration: none;
			background: @xf-contentHighlightBg;
		}
	}

	li li .subNodeLink { padding-left: 1.5em; }
	li li li .subNodeLink { padding-left: 3em; }
	li li li li .subNodeLink { padding-left: 4.5em; }
	li li li li li .subNodeLink { padding-left: 6em; }
	li li li li li li .subNodeLink { padding-left: 7.5em; }
}';
	return $__finalCompiled;
});