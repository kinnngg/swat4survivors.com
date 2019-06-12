<?php
// FROM HASH: 9d644ed40794fcdca0f9a212357f8687
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<!-- You can customize this template for your contact page. -->

<h2 class="h-large h-600 inline t-align-center">
	How can we help?
</h2>
<h4 class="t-align-center">
	Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats untras.
</h4>

<section class="p-row contact-info-blocks">
	<div class="p-row-inner">
		<div class="flex col-has-gutter gutter-s">
			<div class="flex-col col-3">
				<div class="flex-col-inner block-container">
					<div class="block-row block-body">
						<div class="icon-circle">
							<i class="far fa-life-ring"></i>
						</div>
						<h2>Address</h2>
						<p>1234 New Hampshire Avenue,<br>New York, NY 11223</p>
					</div>
				</div>
			</div>
			<div class="flex-col col-3">
				<div class="flex-col-inner block-container">
					<div class="block-row block-body">
						<div class="icon-circle">
							<i class="far fa-life-ring"></i>
						</div>
						<h2>Support</h2>
						<p>Have a question or need help?<br><a href="#">Visit our support forum!</a></p>
					</div>
				</div>
			</div>
			<div class="flex-col col-3">
				<div class="flex-col-inner block-container">
					<div class="block-row block-body">
						<div class="icon-circle">
							<i class="far fa-life-ring"></i>
						</div>
						<h2>Get in contact</h2>
						<p>
							' . $__templater->callMacro('nl_social_macros', 'social_icons', array(
		'location' => 'body',
	), $__vars) . '
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

' . $__templater->filter($__vars['innerContent'], array(array('raw', array()),), true) . '

<div class="googleMap">
	' . $__templater->fn('property', array('nlGoogleMaps', ), true) . '
</div>';
	return $__finalCompiled;
});