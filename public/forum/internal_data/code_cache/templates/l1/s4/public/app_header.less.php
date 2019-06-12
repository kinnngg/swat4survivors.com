<?php
// FROM HASH: 92603a09d5accc96b807b7834f38ad98
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// MAIN HEADER ROW

.p-header
{
	.xf-publicHeader();
	position: relative;

	a
	{
		color: inherit;
	}
}

.p-header-inner
{
	.m-pageWidth();
	// .m-pageInset();
}

.p-header-content
{
	padding: @xf-paddingMedium 0;

	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: center;
	max-width: 100%;
	.xf-nlPublicHeaderContent();
}

.p-header-logo
{
	vertical-align: middle;
	margin-right: auto;

	a
	{
		color: inherit;
		text-decoration: none;
	}

	&.p-header-logo--center
	{
		margin: 0 auto;
		text-align: center;
	}

	&.p-header-logo--text
	{
		font-size: @xf-fontSizeLargest;
	}

	&.p-header-logo--image
	{
		img
		{
			vertical-align: bottom;
			max-width: 100%;
			max-height: 200px;
			display: block;
		}
	}
}

@media (max-width: @xf-publicNavCollapseWidth)
{
	.has-js .p-header
	{
		display: none;
	}
	.vtabsMoved.has-js {
		 .p-header {
			display: block;
			height: 0;
			position: relative;
		}
		.p-header-logo {
    		display: none;
		}
		.p-nav-opposite {
			position: absolute;
			z-index: 9999;
			top: 0;
			right: 0;
		}
	}
}

@media (max-width: @xf-responsiveNarrow)
{
	.p-header-logo
	{
		max-width: 100px;

		&.p-header-logo--text
		{
			font-size: @xf-fontSizeLarge;
			font-weight: @xf-fontWeightNormal;
			.m-overflowEllipsis();
		}
	}
}';
	return $__finalCompiled;
});