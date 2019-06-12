<?php
// FROM HASH: a1576c4c5c760720125e58a4a7862ecb
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// STICKY NAV SETUP

.p-navSticky
{
	z-index: @zIndex-1;

	&.is-sticky
	{
		z-index: @zIndex-4;
		.m-dropShadow(0, 0, 8px, 3px, 0.3);

		.xf-nlPublicNavSticky();
	}

	@supports (position: sticky) or (position: -webkit-sticky)
	{
		&
		{
			position: -webkit-sticky;
			position: sticky;
			top: 0;

			&.is-sticky-broken,
			&.is-sticky-disabled
			{
				position: static;
				top: auto;
			}
		}
	}
}';
	return $__finalCompiled;
});