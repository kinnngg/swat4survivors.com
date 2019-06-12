<?php
// FROM HASH: 55f7cde078fdc1ceb93441e678822f2e
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// @_structItem-avatarSize: 36px;
// @_structItem-avatarSizeExpanded: 48px;
@_structItem-avatarSizeEnd: @avatar-xxs;
@_structItem-cellPaddingH: @xf-nlStructItemPaddingH;
@_structItem-cellPaddingV: @xf-nlStructItemPaddingV;



.structItemContainer
{
	.xf-nlStructItemListContainer();
	
	.structItem:hover, .structItem:nth-of-type(even):hover {
		.xf-nlStructItemHover();
	}
}
.alternateNodes .structItemContainer
{
	.structItem:nth-of-type(even) {
		.xf-nlStructItemAlternate();
	}
}

.structItemContainer-group
{

}

.structItemContainer > .structItem:first-child,
.structItemContainer > .structItemContainer-group:first-child > .structItem:first-child
{
	border-top: none;
}

.structItem
{
	.xf-nlStructItem();

	&.is-highlighted,
	&.is-moderated
	{
		background: @xf-contentHighlightBg;
	}

	&.is-deleted
	{
		opacity: .7;

		.structItem-title
		{
			text-decoration: line-through;
		}
	}

	&.is-mod-selected
	{
		background: @xf-inlineModHighlightColor;
		opacity: 1;
	}
}

.structItem-cell
{
	display: table-cell;
	vertical-align: top;
	.xf-nlStructItemCell();
	
	.structItem--middle &
	{
		vertical-align: middle;
	}

	&.structItem-cell--icon
	{
		position: relative;
		width: ((@xf-nlStructItemAvatarSize) + (@xf-nlStructItemPaddingH) * 2);
		.xf-nlStructItemCellIcon();

		&.structItem-cell--iconExpanded
		{
			width: ((@xf-nlStructItemAvatarSizeExpanded) + (@xf-nlStructItemPaddingH) * 2);
		}

		&.structItem-cell--iconEnd
		{
			width: ((@_structItem-avatarSizeEnd) + (@_structItem-cellPaddingH) * 2);
			padding-left: @_structItem-cellPaddingH / 2;

			.structItem-iconContainer
			{
				padding-top: @xf-paddingMedium;
			}
		}

		&.structItem-cell--iconFixedSmall
		{
			width: (60px + (@xf-nlStructItemPaddingH) * 2);
		}
	}
	&.structItem-cell--main
	{
		.xf-nlStructItemCellMain();
	}
	&.structItem-cell--meta
	{
		width: 120px;
		.xf-nlStructItemCellMeta();
	}

	&.structItem-cell--latest
	{
		.xf-nlStructItemCellLatest();
	}
}

.structItem-iconContainer
{
	position: relative;

	img
	{
		display: block;
		width: 100%;
	}

	.avatar
	{
		.m-avatarSize(@xf-nlStructItemAvatarSize);

		&.avatar--xxs
		{
			.m-avatarSize(@_structItem-avatarSizeEnd);
		}
	}

	.structItem-secondaryIcon
	{
		position: absolute;
		right: -5px;
		bottom: -5px;

		.m-avatarSize(@xf-nlStructItemAvatarSize / 2  + 2px);
	}

	.structItem-cell--iconExpanded &
	{
		.avatar
		{
			.m-avatarSize(@xf-nlStructItemAvatarSizeExpanded);
		}

		.structItem-secondaryIcon
		{
			.m-avatarSize(@xf-nlStructItemAvatarSizeExpanded / 2 - 2px);
		}
	}
}

.structItem-title
{
	font-size: @xf-fontSizeLarge;
	font-weight: @xf-fontWeightNormal;
	margin: 0;
	padding: 0;
	.xf-nlStructItemTitle();
	
	a {
		color: @xf-nlStructItemTitle--color;
	}

	.label
	{
		font-weight: @xf-fontWeightNormal;
	}

	.is-unread &
	{
		font-weight: @xf-fontWeightHeavy;
	}
}

.structItem-minor
{
	font-size: @xf-fontSizeSmaller;
	color: @xf-textColorMuted;

	.m-hiddenLinks();
}

.structItem-parts
{
	.m-listPlain();
	display: inline;

	> li
	{
		display: inline;
		margin: 0;
		padding: 0;

		&:nth-child(even)
		{
			color: @xf-textColorDimmed;
		}

		&:before
		{
			content: "\\00B7\\20";
		}

		&:first-child:before
		{
			content: "";
			display: none;
		}
	}
}

.structItem-pageJump
{
	margin-left: 8px;
	font-size: @xf-fontSizeSmallest;

	a
	{
		.xf-chip();
		text-decoration: none;
		border-radius: @xf-borderRadiusSmall;
		padding: 0 3px;
		opacity: .5;
		.m-transition();

		.structItem:hover &,
		.has-touchevents &
		{
			opacity: 1;
		}

		&:hover
		{
			text-decoration: none;
			.xf-chipHover();
		}
	}
}

.structItem-statuses,
.structItem-extraInfo
{
	.m-listPlain();
	float: right;

	> li
	{
		float: left;
		margin-left: 8px;
	}

	input[type=checkbox]
	{
		.m-checkboxAligner();
	}
}

.structItem-statuses .reactionSummary
{
	vertical-align: -2px;
}

.structItem-extraInfo .reactionSummary
{
	vertical-align: middle;
}

.structItem-status
{
	&::before
	{
		.m-faBase();
		display: inline-block;
		font-size: 90%;
		color: @xf-textColorMuted;
	}

	&--deleted::before { .m-faContent(@fa-var-trash-alt); }
	&--locked::before { .m-faContent(@fa-var-lock); }
	&--moderated::before { .m-faContent(@fa-var-shield); color: @xf-textColorAttention; }
	&--redirect::before { .m-faContent(@fa-var-external-link); }
	&--starred::before { .m-faContent(@fa-var-star); color: @xf-starFullColor; }
	&--sticky::before { .m-faContent(@fa-var-thumbtack); }
	&--watched::before { .m-faContent(@fa-var-eye); color: @xf-textColorFeature; }
	&--poll::before { .m-faContent(@fa-var-chart-bar); }
	&--attention::before { .m-faContent(@fa-var-bullhorn); color: @xf-textColorAttention; }
}

.structItem.structItem--note
{
	.xf-contentBase();

	.structItem-cell
	{
		padding-top: @xf-nlStructItemPaddingV / 2;
		padding-bottom: @xf-nlStructItemPaddingV / 2;
		font-size: @xf-fontSizeSmaller;
		text-align: center;
	}
}

@media (max-width: @xf-responsiveWide)
{
	.structItem-cell
	{
		vertical-align: top;

		&.structItem-cell--meta
		{
			width: 115px;
			font-size: @xf-fontSizeSmaller;
		}

		&.structItem-cell--latest
		{
			width: 140px;
			font-size: @xf-fontSizeSmaller;
		}
	}
}

@media (max-width: @xf-responsiveMedium)
{
	.structItem-cell
	{
		padding: (@xf-nlStructItemPaddingV) / 2 @xf-nlStructItemPaddingH;

		&.structItem-cell--main
		{
			display: block;
			padding-bottom: .2em;
			padding-left: 0;
		}

		&.structItem-cell--meta
		{
			display: block;
			width: auto;
			float: left;
			padding-top: 0;
			padding-left: 0;
			padding-right: 0;
			color: @xf-textColorMuted;

			.structItem-minor
			{
				display: none;
			}

			.pairs
			{
				> dt,
				> dd
				{
					display: inline;
					float: none;
					margin: 0;
				}
			}
		}

		&.structItem-cell--latest
		{
			display: block;
			width: auto;
			float: left;
			padding-top: 0;
			padding-left: 0;

			&:before
			{
				content: "\\00A0\\00B7\\20";
				color: @xf-textColorMuted;
			}

			a
			{
				color: @xf-textColorMuted;
			}

			.structItem-minor
			{
				display: none;
			}
		}

		&.structItem-cell--iconEnd
		{
			display: none;
		}
	}

	.structItem-pageJump,
	.structItem-extraInfoMinor
	{
		display: none;
	}

	.is-unread .structItem-latestDate
	{
		font-weight: @xf-fontWeightNormal;
	}
}

@media (max-width: @xf-responsiveNarrow)
{
	.structItem-parts
	{
		.structItem-startDate
		{
			display: none;
		}
	}
}';
	return $__finalCompiled;
});