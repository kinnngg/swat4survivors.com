<?php
// FROM HASH: 25aad06e76405c7d84f9bf956984e1bc
return array('macros' => array('social_icons' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'location' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '

	';
	if ((($__vars['location'] == 'topbar') OR ($__vars['location'] == 'header')) OR ($__vars['location'] == 'navigation')) {
		$__finalCompiled .= '
		';
		$__vars['styling'] = $__templater->fn('property', array('nlTopbarSocialIconStyling', ), false);
		$__finalCompiled .= '
	';
	} else if ($__vars['location'] == 'body') {
		$__finalCompiled .= '
		';
		$__vars['styling'] = $__templater->fn('property', array('nlBodySocialIconStyling', ), false);
		$__finalCompiled .= '
	';
	} else if ($__vars['location'] == 'footer') {
		$__finalCompiled .= '
		';
		$__vars['styling'] = $__templater->fn('property', array('nlFooterSocialIconStyling', ), false);
		$__finalCompiled .= '
	';
	} else {
		$__finalCompiled .= '
		';
		$__vars['styling'] = 'default';
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '
	
<ul class="social_icons style-' . $__templater->escape($__vars['styling']) . '">
	';
	if ($__templater->fn('property', array('nlSocialSite1', ), false) != 'blank') {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlSocialIcon1Link', ), true) . '" class="follow-' . $__templater->fn('property', array('nlSocialSite1', ), true) . '"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				<i class="fab ' . $__templater->fn('property', array('nlSocialSite1', ), true) . '"></i>
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSocialSite2', ), false) != 'blank') {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlSocialIcon2Link', ), true) . '" class="follow-' . $__templater->fn('property', array('nlSocialSite2', ), true) . '"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				<i class="fab ' . $__templater->fn('property', array('nlSocialSite2', ), true) . '"></i>
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSocialSite3', ), false) != 'blank') {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlSocialIcon3Link', ), true) . '" class="follow-' . $__templater->fn('property', array('nlSocialSite3', ), true) . '"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				<i class="fab ' . $__templater->fn('property', array('nlSocialSite3', ), true) . '"></i>
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSocialSite4', ), false) != 'blank') {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlSocialIcon4Link', ), true) . '" class="follow-' . $__templater->fn('property', array('nlSocialSite4', ), true) . '"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				<i class="fab ' . $__templater->fn('property', array('nlSocialSite4', ), true) . '"></i>
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSocialSite5', ), false) != 'blank') {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlSocialIcon5Link', ), true) . '" class="follow-' . $__templater->fn('property', array('nlSocialSite5', ), true) . '"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				<i class="fab ' . $__templater->fn('property', array('nlSocialSite5', ), true) . '"></i>
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSocialSite6', ), false) != 'blank') {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlSocialIcon6Link', ), true) . '" class="follow-' . $__templater->fn('property', array('nlSocialSite6', ), true) . '"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				<i class="fab ' . $__templater->fn('property', array('nlSocialSite6', ), true) . '"></i>
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSocialSite7', ), false) != 'blank') {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlSocialIcon7Link', ), true) . '" class="follow-' . $__templater->fn('property', array('nlSocialSite7', ), true) . '"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				<i class="fab ' . $__templater->fn('property', array('nlSocialSite7', ), true) . '"></i>
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSocialSite8', ), false) != 'blank') {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlSocialIcon8Link', ), true) . '" class="follow-' . $__templater->fn('property', array('nlSocialSite8', ), true) . '"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				<i class="fab ' . $__templater->fn('property', array('nlSocialSite8', ), true) . '"></i>
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSocialSite9', ), false) != 'blank') {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlSocialIcon9Link', ), true) . '" class="follow-' . $__templater->fn('property', array('nlSocialSite9', ), true) . '"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				<i class="fab ' . $__templater->fn('property', array('nlSocialSite9', ), true) . '"></i>
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSocialSite10', ), false) != 'blank') {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlSocialIcon10Link', ), true) . '" class="follow-' . $__templater->fn('property', array('nlSocialSite10', ), true) . '"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				<i class="fab ' . $__templater->fn('property', array('nlSocialSite10', ), true) . '"></i>
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSocialSite11', ), false) != 'blank') {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlSocialIcon11Link', ), true) . '" class="follow-' . $__templater->fn('property', array('nlSocialSite11', ), true) . '"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				<i class="fab ' . $__templater->fn('property', array('nlSocialSite11', ), true) . '"></i>
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSocialSite12', ), false) != 'blank') {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlSocialIcon12Link', ), true) . '" class="follow-' . $__templater->fn('property', array('nlSocialSite12', ), true) . '"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				<i class="fab ' . $__templater->fn('property', array('nlSocialSite12', ), true) . '"></i>
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSocialSite13', ), false) != 'blank') {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlSocialIcon13Link', ), true) . '" class="follow-' . $__templater->fn('property', array('nlSocialSite13', ), true) . '"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				<i class="fab ' . $__templater->fn('property', array('nlSocialSite13', ), true) . '"></i>
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSocialCustomIcon1', ), false) != null) {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlIconSliderCustomLink1', ), true) . '" class="follow-fa follow-fa--custom1"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				' . $__templater->fn('property', array('nlSocialCustomIcon1', ), true) . '
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSocialCustomIcon2', ), false) != null) {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlIconSliderCustomLink2', ), true) . '" class="follow-fa follow-fa--custom1"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				' . $__templater->fn('property', array('nlSocialCustomIcon2', ), true) . '
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
';
	if ($__templater->fn('property', array('nlSocialCustomImgIcon1', ), false) != null) {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlSocialCustomImgIconLink1', ), true) . '" class="follow-img follow-img--custom1"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				<img src="' . $__templater->fn('property', array('nlSocialCustomImgIcon1', ), true) . '">
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('nlSocialCustomImgIcon2', ), false) != null) {
		$__finalCompiled .= '
		<li>
			<a href="' . $__templater->fn('property', array('nlSocialCustomImgIconLink2', ), true) . '" class="follow-img follow-img--custom2"
				';
		if ($__templater->fn('property', array('nlSocialUseTooltips', ), false) == true) {
			$__finalCompiled .= '
					data-xf-init="tooltip"
					title="' . $__templater->fn('property', array('nlSocialTooltipText', ), true) . '"
				';
		}
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('nlSocialUseRelNofollow', ), false) == true) {
			$__finalCompiled .= '
					rel="nofollow"
				';
		} else if ($__templater->fn('property', array('nlSocialUseRelMe', ), false) == true) {
			$__finalCompiled .= '
					rel="me"
				';
		}
		$__finalCompiled .= '
				target="_blank">
				<img src="' . $__templater->fn('property', array('nlSocialCustomImgIcon2', ), true) . '">
			</a>
		</li>
	';
	}
	$__finalCompiled .= '
</ul>
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';

	return $__finalCompiled;
});