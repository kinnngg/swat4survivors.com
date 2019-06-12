<?php
// FROM HASH: 0d314de7f41aa6178a47dcd715214e3f
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="p-footer-columns">
	<div class="p-footer-inner">

		<!-- primary top row -->
		';
	if ($__templater->fn('property', array('nlEnableFooterTopRow', ), false) == true) {
		$__finalCompiled .= '
			<div class="top-row primary';
		if ($__templater->fn('property', array('nlFooterTopRowUseFullWidth', ), false) == 'wide') {
			$__finalCompiled .= ' wide';
		}
		if ($__templater->fn('property', array('nlTopRowPrimaryCenterContent', ), false) == true) {
			$__finalCompiled .= ' center';
		}
		$__finalCompiled .= '">
					<div class="top-row-item ">' . $__templater->fn('property', array('nlFooterTopRowContent', ), true) . '</div>
			</div>
		';
	}
	$__finalCompiled .= '

		<!-- secondary top row -->
		';
	if ($__templater->fn('property', array('nlEnableFooterTopRow2', ), false) == true) {
		$__finalCompiled .= '
			<div class="top-row secondary';
		if ($__templater->fn('property', array('nlFooterTopRow2UseFullWidth', ), false) == 'wide') {
			$__finalCompiled .= ' wide';
		}
		if ($__templater->fn('property', array('nlTopRowSecondaryCenterContent', ), false) == true) {
			$__finalCompiled .= ' center';
		}
		$__finalCompiled .= '">
					<div class="top-row-item">' . $__templater->fn('property', array('nlFooterTopRow2Content', ), true) . '</div>
			</div>
		';
	}
	$__finalCompiled .= '
		
		<div class="flex_columns_wrapper">
		
			<!-- Upper rows -->
			';
	if ($__templater->fn('property', array('nlEnableFooterUpperRows', ), false) == true) {
		$__finalCompiled .= '
			<div class="flex_columns above">
					<div class="flex-item">' . $__templater->fn('property', array('nlFooterUpperRowsBlockLeft', ), true) . '</div>
					<div class="flex-item">' . $__templater->fn('property', array('nlFooterUpperRowsBlockRight', ), true) . '</div>
			</div>
			';
	}
	$__finalCompiled .= '

			<!-- columns -->
			<div class="flex_columns main">

				';
	if ($__templater->fn('property', array('nlEnableFooterColumnA', ), false) == true) {
		$__finalCompiled .= '
					<div class="flex-item">
					';
		if ($__templater->fn('property', array('nlFooterColumnAAddLogo', ), false) == true) {
			$__finalCompiled .= '
						<div class="p-footer-logo">
							<a href="' . (($__vars['xf']['options']['logoLink'] AND $__vars['xf']['homePageUrl']) ? $__templater->escape($__vars['xf']['homePageUrl']) : $__templater->fn('link', array('index', ), true)) . '">
								';
			if ($__templater->fn('property', array('nlEnableTextLogo', ), false) == true) {
				$__finalCompiled .= '
									<div id="textLogo">
									<span class="txtLogo1">' . $__templater->fn('property', array('nlPrimaryLogoText', ), true) . '</span>
									';
				if ($__templater->fn('property', array('nlSecondaryLogoText', ), false) != null) {
					$__finalCompiled .= '<span class="txtLogo2">' . $__templater->fn('property', array('nlSecondaryLogoText', ), true) . '</span>';
				}
				$__finalCompiled .= '
									</div>
								';
			} else {
				$__finalCompiled .= '	
									';
				if ($__templater->fn('property', array('nlFooterColumnLogoAltLink', ), false) == null) {
					$__finalCompiled .= '
										<img src="' . $__templater->fn('base_url', array($__templater->fn('property', array('publicLogoUrl', ), false), ), true) . '"
											alt="' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '"
											' . ($__templater->fn('property', array('publicLogoUrl2x', ), false) ? (('srcset="' . $__templater->fn('base_url', array($__templater->fn('property', array('publicLogoUrl2x', ), false), ), true)) . ' 2x"') : '') . ' />
									';
				} else {
					$__finalCompiled .= '
										<img src="' . $__templater->fn('base_url', array($__templater->fn('property', array('nlFooterColumnLogoAltLink', ), false), ), true) . '"
											alt="' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '" />
									';
				}
				$__finalCompiled .= '
								';
			}
			$__finalCompiled .= '
								';
			if ($__templater->fn('property', array('nlEnableLogoSubtitle', ), false) == true) {
				$__finalCompiled .= '
									<span class="logoSubtitle">' . $__templater->fn('property', array('nlLogoSubtitle', ), true) . '</span>
								';
			}
			$__finalCompiled .= '
							</a>
						</div>
					';
		}
		$__finalCompiled .= '
						' . $__templater->fn('property', array('nlFooterColumnA', ), true) . '
						' . $__templater->widgetPosition('nl_footer_column_A', array()) . '
					';
		if ($__templater->fn('property', array('nlFooterColumnAAddSocial', ), false) == true) {
			$__finalCompiled .= '
						' . $__templater->callMacro('nl_social_macros', 'social_icons', array(
				'location' => 'footer',
			), $__vars) . '
					';
		}
		$__finalCompiled .= '
					</div>
				';
	}
	$__finalCompiled .= '
				';
	if ($__templater->fn('property', array('nlEnableFooterColumnB', ), false) == true) {
		$__finalCompiled .= '
					<div class="flex-item">
						' . $__templater->fn('property', array('nlFooterColumnB', ), true) . '
						' . $__templater->widgetPosition('nl_footer_column_B', array()) . '
					</div>
				';
	}
	$__finalCompiled .= '
				';
	if ($__templater->fn('property', array('nlEnableFooterColumnC', ), false) == true) {
		$__finalCompiled .= '
					<div class="flex-item">
						' . $__templater->fn('property', array('nlFooterColumnC', ), true) . '
						' . $__templater->widgetPosition('nl_footer_column_C', array()) . '
					</div>
				';
	}
	$__finalCompiled .= '
				';
	if ($__templater->fn('property', array('nlEnableFooterColumnD', ), false) == true) {
		$__finalCompiled .= '
					<div class="flex-item">
						' . $__templater->fn('property', array('nlFooterColumnD', ), true) . '
						' . $__templater->widgetPosition('nl_footer_column_D', array()) . '
					</div>
				';
	}
	$__finalCompiled .= '

			</div><!-- end columns -->

			<!-- Lower rows -->
			';
	if ($__templater->fn('property', array('nlEnableFooterLowerRows', ), false) == true) {
		$__finalCompiled .= '
				<div class="flex_columns lower">
						<div class="flex-item">' . $__templater->fn('property', array('nlFooterLowerRowsBlockLeft', ), true) . '</div>
						<div class="flex-item">' . $__templater->fn('property', array('nlFooterLowerRowsBlockRight', ), true) . '</div>
				</div>
			';
	}
	$__finalCompiled .= '
			
		</div>
	
	</div>
</div><!-- end p-footer-columns -->';
	return $__finalCompiled;
});