<?php
// FROM HASH: b5b3db7171f56e74b3b87e61a792e9d5
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// SUB SECTION LINKS

.p-sectionLinks
{
	overflow: hidden;
	.xf-publicSubNav();

	.hScroller-action
	{
		.m-hScrollerActionColorVariation(
			xf-default(@xf-publicSubNav--background-color, transparent),
			xf-default(@xf-publicSubNav--color, ~""),
			xf-default(@xf-publicSubNavElHover--color, ~"")
		);
	}

	&.p-sectionLinks--empty
	{
		height: 10px;
		display: none;
	}
	.hide-sectionLinks & {
		display: none;
	}
}

.p-sectionLinks-inner
{
	.m-clearFix();

	@defaultPadding:  max(0px, @xf-pageEdgeSpacer - @xf-publicSubNavPaddingH);
	.m-pageInset(@defaultPadding);
	
	.headerStretch & {
		.m-pageWidth();
	}
}

.p-sectionLinks-list
{
	.m-listPlain();

	font-size: 0;

	a
	{
		color: inherit;
	}

	> li
	{
		display: inline-block;
	}

	.m-navElHPadding(@xf-publicSubNavPaddingH);

	.p-navEl
	{
		font-size: @xf-publicSubNav--font-size;

		&:hover
		{
			.xf-publicSubNavElHover();

			a
			{
				text-decoration: @xf-publicSubNavElHover--text-decoration;
				color: @xf-publicSubNavElHover--color;
			}
		}

		&.is-menuOpen
		{
			.xf-publicSubNavElMenuOpen();
			.m-borderBottomRadius(0);
			.m-dropShadow(0, 5px, 10px, 0, .35);
		}
	}
	.p-navEl-link
	{
		.xf-nlSubNavigationLink();
	}
	.p-navEl-splitTrigger
	{
		height: @xf-nlSubNavLinkHeight;
		line-height: @xf-nlSubNavLinkHeight;
		// padding-top: @xf-publicSubNavPaddingV;
		// padding-bottom: @xf-publicSubNavPaddingV;
	}
}

@media (max-width: @xf-publicNavCollapseWidth)
{
	.has-js .p-sectionLinks
	{
		display: none;
	}
}';
	return $__finalCompiled;
});