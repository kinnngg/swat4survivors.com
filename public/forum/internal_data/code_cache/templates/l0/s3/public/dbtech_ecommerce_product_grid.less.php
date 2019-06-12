<?php
// FROM HASH: 52987daed871c67c9444fdf833c2b7ab
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.productList-grid
{
	display: flex;
	flex-flow: row wrap;
	justify-content: flex-start;

	margin: @xf-paddingSmall;
}

.productList-product-grid
{
	display: flex;
	flex-flow: column nowrap;

	width: 262px;
	max-width: 262px;
	margin: @xf-paddingLargest;

	position: relative;
	/*overflow: hidden;*/

	.xf-blockBorder();
	background: @xf-contentBg;
	border-radius: @block-borderRadius-inner;

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

	&.node
	{
		.avatar
		{
			margin-left: auto;
			margin-right: auto;
			display: block;
		}

		.productList-product-grid
		{
			&--icon {
				padding: @xf-paddingMedium @xf-paddingMedium 0;
			}

			&--clearfix
			{
				padding: 0 @xf-paddingLarge @xf-paddingLarge;
				margin-top: auto;

				&:after
				{
					content: "";
					display: table;
					clear: both;
					margin: @xf-paddingSmall;
				}

				.rating
				{
					float:left;
				}

				.price
				{
					float:right;
				}
			}

			&--updateInfo
			{
				padding: @xf-blockPaddingV @xf-paddingLarge;
				.xf-menuFooter();
				width:100%;
			}
		}
	}
}

@media (max-width: @xf-responsiveMedium)
{
	.productList-product-grid
	{
		&.node
		{
			> .node-body
			{
				.node-description
				{
					display: block;
				}
			}
		}
	}
}

.productList-product-gridOverlayTop
{
	cursor: pointer;

	position: absolute;
	top: 3px;
	left: 3px;
	z-index: @zIndex-2;

	width: 25px;
	height: 25px;
	border-radius: @xf-borderRadiusMedium;

	background: @xf-overlayMaskColor;

	display: flex;
	align-items: center;
	justify-content: center;

	opacity: 0;

	.has-touchevents &,
	.productList-product-grid:hover &
	{
		opacity: 1;
	}

	.productList-product-grid.is-mod-selected &
	{
		opacity: 1;
		background: @xf-inlineModHighlightColor;

		&.iconic
		{
			> input
			{
				+ i:before
				{
					color: @xf-textColorDimmed;
				}

				&:hover
				{
					+ i:before
					{
						color: @xf-textColorDimmed;
					}
				}
			}
		}
	}

	&&.iconic
	{
		display: flex;
		position: absolute;

		> input
		{
			+ i
			{
				&:before
				{
					color: @xf-contentBg;
				}

				position: absolute;
				top: 2px;
				left: 6px;
			}

			&:hover
			{
				+ i:before
				{
					color: xf-intensify(@xf-contentBg, 15%);
				}
			}
		}
	}
}';
	return $__finalCompiled;
});