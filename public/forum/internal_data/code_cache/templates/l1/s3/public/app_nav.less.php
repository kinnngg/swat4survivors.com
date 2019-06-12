<?php
// FROM HASH: 77645fa62c667b4da880ad4ff47074d3
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// navEl / Navigation Elements for header navigation

.m-navElHPadding(@padding)
{
	.p-navEl-link
	{
		padding: 0 @padding;

		&.p-navEl-link--splitMenu
		{
			padding-right: ((@padding) / 4);
		}

		&.p-navEl-link--menuTrigger
		{
			padding-right: ((@padding) / 3); // equal to splitTrigger padding-right

			&:after
			{
				padding-left: ((@padding) / 4 + (@padding) / 3); // equal to splitMenu padding-right + splitTrigger padding-left
			}
		}
	}

	.p-navEl-splitTrigger
	{
		padding: 0 ((@padding) / 3);
	}
}

.p-navEl
{
	.m-clearFix();
}

.p-navEl-linkHolder
{
	float: left;
}

.p-navEl-link
{
	float: left;
	.m-transition(opacity, background; @_nav-elTransitionSpeed);

	&.p-navEl-link--menuTrigger
	{
		cursor: pointer;

		&:after
		{
			.m-menuGadget(); // .58em
			opacity: .5;
			.m-transition(opacity; @_nav-elTransitionSpeed);
		}

		&:hover:after
		{
			opacity: 1;
		}
	}
}

.p-navEl-splitTrigger
{
	float: left;
	opacity: .5;
	cursor: pointer;
	text-decoration: none;
	.m-transition(all; @_nav-elTransitionSpeed);

	&:after
	{
		.m-menuGadget(); // .58em
		line-height: 1;
	}

	&:hover
	{
		opacity: 1;
		text-decoration: none;
	}
}

// HEADER NAV ROW

.p-nav
{
	.xf-publicNav();

	a
	{
		color: inherit;
	}

	.p-navSticky.is-sticky &
	{
		.p-nav-list .p-navEl.is-selected,
		.p-account
		{
			/* border-radius: 0; */
		}
	}
}
@media (min-width: @xf-publicNavCollapseWidth) 
{
	.headerStretch {
		&.stretchNavigation.headerFixedInner .p-nav-inner {
			.m-pageWidth();
		}
		&:not(.stretchNavigation) {
			.p-navController,
			.p-sectionLinks {
				.m-pageWidth();
				padding: 0;
				width: 100%;
			}
		}
	}
}
.p-nav-inner
{
	.m-pageInset(0px);
	.m-clearFix();
	display: flex;
	align-items: flex-end;
}



.p-nav .p-nav-menuTrigger
{
	display: none;
	vertical-align: middle;
	align-self: center;
	/* margin-left: max(0px, @xf-pageEdgeSpacer - 6px); */
	margin-right: 5px;
	/* padding: @xf-publicNavPaddingV 8px; */

	&:hover
	{
		text-decoration: none;
	}

	i:after
	{
		.m-faBase();
		font-size: @xf-fontSizeLargest;
		.m-faContent(@fa-var-bars, .88em);
		vertical-align: bottom;
	}

	.p-nav-menuText
	{
		display: none;
	}
}

.p-nav-smallLogo
{
	display: none;
	max-width: @xf-nlNavigationSmallLogoMaxWidth;
	align-self: center;

	img
	{
		display: block;
		/* max-height: @header-navHeight; */
	}
}

.p-nav-scroller
{
	margin-right: auto;
	max-width: 100%;

	.hScroller-scroll:not(.is-calculated)
	{
		// IE11 seems to want to flash a vertical scrollbar without this here
		overflow: hidden;
	}

	.hScroller-action
	{
		.m-hScrollerActionColorVariation(
			xf-default(@xf-publicNav--background-color, transparent),
			xf-default(@xf-publicNav--color, ~""),
			xf-intensify(@xf-publicNav--color, 10%)
		);
	}
}

.p-nav-list
{
	.m-listPlain();
	.m-clearFix();

	font-size: 0;

	// this applies padding that will be contained within the scroller.
	// it needs font-size 0 to not create extra space though
	&:before,
	&:after
	{
		display: inline-block;
		width: @xf-pageEdgeSpacer;
		content: \'\';
		width: 0;
	}

	> li
	{
		display: inline-block;
		vertical-align: bottom;
		font-size: @xf-fontSizeNormal;

		&:first-child
		{
			margin-left: 0;
		}
	}

	.m-navElHPadding(@xf-publicNavPaddingH);

	.p-navEl
	{
		.xf-publicNavTab();
		/* .m-transition(all, @_nav-elTransitionSpeed); */

		&.is-selected
		{
			.xf-publicNavSelected();

			.has-sectionLinks & .p-navEl-link
			{
				padding-right: @xf-publicNavPaddingH; // since the split trigger is hidden

				&:hover
				{
					background: none;
					text-decoration: none;
				}
			}

			.has-sectionLinks & .p-navEl-splitTrigger
			{
				display: none;
			}
		}

		&:not(.is-selected):not(.is-menuOpen)
		{
			&:hover
			// .p-navEl-link:hover,
			// .p-navEl-splitTrigger:hover
			{
				.xf-publicNavTabHover();
			}
		}

		&.is-menuOpen
		{
			.xf-publicNavTabHover();
			
			/*
			border-top-left-radius: xf-default(@xf-publicNavSelected--border-top-left-radius, 0);
			border-top-right-radius: xf-default(@xf-publicNavSelected--border-top-right-radius, 0);
			*/

			.m-dropShadow(0, 5px, 10px, 0, .35);

			a
			{
				text-decoration: none;
				opacity: 1;
			}
		}
	}

	.p-navEl-link,
	.p-navEl-splitTrigger
	{
		height: @xf-nlNavTabHeight;
		line-height: @xf-nlNavTabHeight;
		// padding-top: @xf-publicNavPaddingV;
		// padding-bottom: @xf-publicNavPaddingV;
	}
}

.p-navSticky--primary.is-sticky
{
	.p-nav-list
	{
		.p-navEl-link.p-navEl-link--splitMenu
		{
			padding-right: ((@xf-publicNavPaddingH) / 4);
		}

		.p-navEl.is-selected .p-navEl-splitTrigger
		{
			display: inline;
			position: relative;

			&:before
			{
				content: \'\';
				position: absolute;
				left: 0;
				top: 5px;
				bottom: 5px;
				width: 0;
				border-left: @xf-borderSize solid fade(xf-default(@xf-publicNavSelected--color, transparent), 35%);
			}
		}
	}
}

@media (max-width: @xf-publicNavCollapseWidth)
{
	.has-js
	{
		.p-nav {
			.xf-nlPublicNavResponsive();
		}
		.p-nav-inner
		{
			min-height: 45px;
		}

		.p-nav .p-nav-menuTrigger
		{
			display: inline-block;
			.xf-nlPublicNavResponsiveMenuTrigger();
		}

		.p-nav-smallLogo
		{
			display: inline-block;
			
			&.enhance img {
				image-rendering: pixelated;
			}
		}

		.p-nav-scroller
		{
			display: none;
		}
		.p-nav-opposite .p-navgroup-link {
			color: @xf-nlPublicNavResponsiveMenuTrigger--color;
		}
	}
}

// ACCOUNT/VISITOR/SEARCH SECTION

.p-nav-opposite
{
	margin-left: auto;
	// margin-right: @xf-pageEdgeSpacer;
	text-align: right;
	flex-shrink: 0;
}

.p-navgroup
{
	float: left;
	.m-clearFix();

	&.p-discovery
	{
		margin-left: .5em;

		&.p-discovery--noSearch
		{
			margin-left: 0;
		}
	}
}

.p-navgroup-link
{
	float: left;
	.xf-publicNavTab();
	height: @xf-nlNavTabHeight;
	line-height: @xf-nlNavTabHeight;
	padding: 0 ((@xf-publicNavPaddingH) / 2);
	
	&:first-of-type
	{
		border-top-left-radius: @xf-borderRadiusMedium;
		border-left: none;
	}

	&:last-of-type
	{
		border-top-right-radius: @xf-borderRadiusMedium;
	}

	&:hover
	{
		.xf-publicNavTabHover();
	}

	&.p-navgroup-link--user
	{
		.m-overflowEllipsis();
		max-width: 150px;

		.avatar
		{
			.m-avatarSize((@xf-fontSizeNormal) * (@xf-lineHeightDefault));
			vertical-align: middle;
		}
	}

	&.badgeContainer
	{
		opacity: .6;
		position: relative;

		&:after
		{
			position: absolute;
			margin: 0;
			padding: 0;
			.xf-nlAlertBalloon();
		}

		&:hover,
		&.badgeContainer--highlighted
		{
			opacity: 1;
		}
	}

	&.is-menuOpen
	{
		.xf-publicNavTabMenuOpen();
		.m-dropShadow(0, 5px, 10px, 0, .35);
		opacity: 1;
	}

	&.p-navgroup-link--iconic
	{
		i:after
		{
			.m-faBase();
			display: inline-block;
			min-width: 1.2em;
			text-align: center;
		}
	}

	&.p-navgroup-link--logIn i:after
	{
		.m-faContent(@fa-var-login, 1em);
	}
	
	&.p-navgroup-link--register i:after
	{
		.m-faContent(@fa-var-register, 1em);
	}
	
	&.p-navgroup-link--conversations i:after
	{
		.m-faContent(@fa-var-envelope, 1em);
	}

	&.p-navgroup-link--alerts i:after
	{
		.m-faContent(@fa-var-bell, .88em);
	}

	&.p-navgroup-link--bookmarks i:after
	{
		.m-faContent(@fa-var-bookmark, .75em);
	}

	&.p-navgroup-link--whatsnew i:after
	{
		.m-faContent(@fa-var-bolt, .63em);
	}

	&.p-navgroup-link--search i:after
	{
		.m-faContent(@fa-var-search, 1em);
	}
}

.p-navgroup--guest .p-navgroup-link--iconic i:after {
    margin-right: 4px;
}

.p-navgroup-link--whatsnew
{
	display: none;

	.p-navgroup-link:first-of-type& + .p-navgroup-link
	{
		border-top-left-radius: @xf-borderRadiusMedium;
		border-left: none;
	}
}

@media (max-width: @xf-responsiveWide)
{
	.p-navgroup-link
	{
		&.p-navgroup-link--iconic .p-navgroup-linkText,
		&.p-navgroup-link--textual i
		{
			display: none;
		}

		&.p-navgroup-link--textual
		{
			.m-overflowEllipsis();
			max-width: 110px;
		}

		&.p-navgroup-link--iconic i:after
		{
			text-align: center;
		}
	}
}

@media (max-width: @xf-publicNavCollapseWidth)
{
	.p-navgroup-link--whatsnew
	{
		display: block;
	}

	.has-js
	{
		.p-nav-opposite
		{
			align-self: center;
			margin-right: max(0px, @xf-pageEdgeSpacer - 6px);

			.p-navgroup
			{
				background: none;
				margin-left: 0;
			}

			.p-navgroup-link
			{
				border: none;
				border-radius: @xf-borderRadiusMedium;

				&.is-menuOpen
				{
					.m-borderBottomRadius(0);
				}

				&.badgeContainer
				{
					opacity: 1;
				}
			}
		}
	}
}

@media (max-width: 359px)
{
	.p-navgroup-link&.p-navgroup-link--user
	{
		display: none;
	}
}

@media (max-width: 374px)
{
	.p-navgroup-link.p-navgroup-link--register
	{
		display: none;
	}
}';
	return $__finalCompiled;
});