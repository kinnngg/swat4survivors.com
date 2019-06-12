<?php
// FROM HASH: 6fc85b4803df0ed509424b2cf5867720
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// ################################ CATEGORY LIST #######################

@_categoryListTogglerWidth: 1em;
@_categoryListTogglerPaddingH: @xf-paddingMedium;

.categoryList
{
	display: none;
	.m-listPlain();

	&.is-active
	{
		display: block;
	}
}

.categoryList-item
{
	padding: 0;
	text-decoration: none;
	font-size: @xf-fontSizeNormal;

	&.categoryList-item--small
	{
		font-size: @xf-fontSizeSmall;
	}

	.categoryList
	{
		/* padding-left: @xf-paddingLarge; */
	}
}

.categoryList-itemDesc
{
	display: block;
	font-size: @xf-fontSizeSmaller;
	font-weight: @xf-fontWeightNormal;
	color: @xf-textColorMuted;
	margin-top: -@xf-blockPaddingV;

	.m-overflowEllipsis();
}

.categoryList-header
{
	padding: @xf-blockPaddingV 0;
	margin: 0;
	color: @xf-textColorFeature;
	text-decoration: none;
	font-weight: @xf-fontWeightHeavy;

	&.categoryList-header--muted
	{
		color: @xf-textColorMuted;
	}

	.m-clearFix();
	.m-hiddenLinks();
}

.categoryList-itemRow
{
	display: flex;
	min-width: 0;
	flex-grow: 1;
	.xf-blockLink();

	&:hover
	{
		.xf-blockLinkSelected();
	}
}

.categoryList-link
{
	display: block;
	flex-grow: 1;
	/* padding: @xf-blockPaddingV @_categoryListTogglerPaddingH; */
	text-decoration: none;

	.m-overflowEllipsis();

	&:hover
	{
		text-decoration: none;
	}

	&.is-selected
	{
		font-weight: @xf-fontWeightHeavy;
	}

	.categoryList-toggler + &,
	.categoryList-togglerSpacer + &
	{
		padding-left: 0;
	}
}

.categoryList-label
{
	margin-left: auto;
	align-self: center;
	padding-right: @_categoryListTogglerPaddingH;
}

.categoryList-toggler
{
	display: inline-block;
	padding: 0 @_categoryListTogglerPaddingH 0 0 ;
	text-decoration: none;
	flex-grow: 0;
    height: @xf-nlBlockLinkHeight;
    line-height: (@xf-nlBlockLinkHeight - 6);

	&:hover
	{
		text-decoration: none;
	}

	&:after
	{
		.m-faBase();
		font-size: 80%;
		.m-faContent(@fa-var-chevron-down, @_categoryListTogglerWidth);
	}

	&.is-active:after
	{
		.m-faContent(@fa-var-chevron-up, @_categoryListTogglerWidth);
	}
}

.categoryList-togglerSpacer
{
	display: inline-block;
	visibility: hidden;
	padding: @xf-blockPaddingV @_categoryListTogglerPaddingH 0 0;

	&:after
	{
		.m-faBase();
		font-size: 80%;
		.m-faContent(@fa-var-chevron-down, @_categoryListTogglerWidth);
	}
	
	.toggleTarget .toggleTarget & {
		padding-left: @_categoryListTogglerPaddingH;
	}
}';
	return $__finalCompiled;
});