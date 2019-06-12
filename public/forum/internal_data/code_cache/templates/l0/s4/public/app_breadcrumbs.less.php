<?php
// FROM HASH: 4b223d753a46dd48d5877076e413ca68
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.p-breadcrumbs
{
	.m-listPlain();
	.m-clearFix();

	.xf-nlBreadcrumbWrapper();

	&.p-breadcrumbs--bottom
	{
		margin-top: @xf-elementSpacer;
		margin-bottom: 0;
	}

	> li
	{
		.xf-nlBreadcrumbItem();

		a
		{
			display: inline-block;
			vertical-align: top;
			max-width: 300px;
			.m-overflowEllipsis();
			color: @xf-nlBreadcrumbItem--color;
		}

		&:after,
		&:before
		{
			.m-faBase();
			font-size: 90%;
			color: @xf-textColorMuted;
		}

		&:after
		{
			';
	if ($__templater->fn('property', array('nlBreadcrumbItemSeparator', ), false) == 'arrow') {
		$__finalCompiled .= '
			.m-faContent(@fa-var-angle-right, false ltr);
			.m-faContent(@fa-var-angle-left, false, rtl);
			margin-left: .5em;
			';
	} else if ($__templater->fn('property', array('nlBreadcrumbItemSeparator', ), false) == 'divide') {
		$__finalCompiled .= '
			content: "/";
			margin-left: .5em;
			';
	}
	$__finalCompiled .= '
			color: @xf-nlBreadcrumbItemSeparatorColor;
		}

		&:last-child
		{
			margin-right: 0;

			a
			{
				/* font-weight: @xf-fontWeightHeavy; */
			}
			&:after {
				display: none;
			}
		}
	}
	> li:hover {
		.xf-nlBreadcrumbItemHover();
	}
	> li:hover a {
		color: @xf-nlBreadcrumbItemHover--color;
	}
}

@media (max-width: @xf-responsiveMedium)
{
	.p-breadcrumbs > li a
	{
		max-width: 200px;
	}
}

@media (max-width: @xf-responsiveNarrow)
{
	.p-breadcrumbs
	{
		> li
		{
			display: none;
			font-size: @xf-fontSizeSmallest;

			&:last-child
			{
				display: block;
			}

			a
			{
				max-width: 90vw;
			}

			&:after
			{
				display: none;
			}

			&:before
			{
				.m-faContent(@fa-var-chevron-left, false, ltr);
				.m-faContent(@fa-var-chevron-right, false, rtl);
				margin-right: .5em;
			}
		}
	}
}';
	return $__finalCompiled;
});