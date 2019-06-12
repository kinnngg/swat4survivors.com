<?php
// FROM HASH: ede86128414e5e761a234071ecda3f32
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<section class="slider">
      <div id="flexslider" class="flexslider flexslider--primary">
        <ul class="slides">
			
			<!-- slide 1 -->
			';
	if ((($__templater->fn('property', array('nlSlide1Mode', ), false) == 'img') AND ($__templater->fn('property', array('nlSlide1Img', ), false) != null)) OR (($__templater->fn('property', array('nlSlide1Mode', ), false) == 'video') AND ($__templater->fn('property', array('nlSlide1Video', ), false) != null))) {
		$__finalCompiled .= '
	    		<li>
					<!-- img mode -->
					';
		if ($__templater->fn('property', array('nlSlide1Mode', ), false) == 'img') {
			$__finalCompiled .= '
						<a href="' . $__templater->fn('property', array('nlSlide1Link', ), true) . '"><img id="slide1" src="" alt="' . $__templater->fn('property', array('nlSlide1Title', ), true) . '" title="' . $__templater->fn('property', array('nlSlide1Title', ), true) . '"/>
							';
			if (($__templater->fn('property', array('nlSlide1Title', ), false) != null) OR ($__templater->fn('property', array('nlSlide1Desc', ), false) != null)) {
				$__finalCompiled .= '
								<div class="flex-caption">
									';
				if ($__templater->fn('property', array('nlSliderAddReadMoreButton', ), false)) {
					$__finalCompiled .= '<span class="button">' . 'Continue reading...' . '</span>';
				}
				$__finalCompiled .= '	
									';
				if ($__templater->fn('property', array('nlSlide1Title', ), false)) {
					$__finalCompiled .= '<h2>' . $__templater->fn('property', array('nlSlide1Title', ), true) . '</h2>';
				}
				$__finalCompiled .= '
									';
				if ($__templater->fn('property', array('nlSlide1Desc', ), false)) {
					$__finalCompiled .= $__templater->fn('property', array('nlSlide1Desc', ), true);
				}
				$__finalCompiled .= '
								</div>
							';
			}
			$__finalCompiled .= '
						</a>
					';
		} else if ($__templater->fn('property', array('nlSlide1Mode', ), false) == 'video') {
			$__finalCompiled .= '
						<!-- video mode -->
						' . $__templater->fn('property', array('nlSlide1Video', ), true) . '
					';
		}
		$__finalCompiled .= '
				</li>
	    	';
	}
	$__finalCompiled .= '
			
			<!-- slide 2 -->
			';
	if ((($__templater->fn('property', array('nlSlide2Mode', ), false) == 'img') AND ($__templater->fn('property', array('nlSlide2Img', ), false) != null)) OR (($__templater->fn('property', array('nlSlide2Mode', ), false) == 'video') AND ($__templater->fn('property', array('nlSlide2Video', ), false) != null))) {
		$__finalCompiled .= '
	    		<li>
					<!-- img mode -->
					';
		if ($__templater->fn('property', array('nlSlide2Mode', ), false) == 'img') {
			$__finalCompiled .= '
						<a href="' . $__templater->fn('property', array('nlSlide2Link', ), true) . '"><img id="slide2" src="" alt="' . $__templater->fn('property', array('nlSlide2Title', ), true) . '" title="' . $__templater->fn('property', array('nlSlide2Title', ), true) . '"/>
							';
			if (($__templater->fn('property', array('nlSlide2Title', ), false) != null) OR ($__templater->fn('property', array('nlSlide2Desc', ), false) != null)) {
				$__finalCompiled .= '
								<div class="flex-caption">
									';
				if ($__templater->fn('property', array('nlSliderAddReadMoreButton', ), false)) {
					$__finalCompiled .= '<span class="button">' . 'Continue reading...' . '</span>';
				}
				$__finalCompiled .= '	
									';
				if ($__templater->fn('property', array('nlSlide2Title', ), false)) {
					$__finalCompiled .= '<h2>' . $__templater->fn('property', array('nlSlide2Title', ), true) . '</h2>';
				}
				$__finalCompiled .= '
									';
				if ($__templater->fn('property', array('nlSlide2Desc', ), false)) {
					$__finalCompiled .= $__templater->fn('property', array('nlSlide2Desc', ), true);
				}
				$__finalCompiled .= '
								</div>
							';
			}
			$__finalCompiled .= '
						</a>
					';
		} else if ($__templater->fn('property', array('nlSlide2Mode', ), false) == 'video') {
			$__finalCompiled .= '
						<!-- video mode -->
						' . $__templater->fn('property', array('nlSlide2Video', ), true) . '
					';
		}
		$__finalCompiled .= '
				</li>
	    	';
	}
	$__finalCompiled .= '
			
			<!-- slide 3 -->
			';
	if ((($__templater->fn('property', array('nlSlide3Mode', ), false) == 'img') AND ($__templater->fn('property', array('nlSlide3Img', ), false) != null)) OR (($__templater->fn('property', array('nlSlide3Mode', ), false) == 'video') AND ($__templater->fn('property', array('nlSlide3Video', ), false) != null))) {
		$__finalCompiled .= '
	    		<li>
					<!-- img mode -->
					';
		if ($__templater->fn('property', array('nlSlide3Mode', ), false) == 'img') {
			$__finalCompiled .= '
						<a href="' . $__templater->fn('property', array('nlSlide3Link', ), true) . '"><img id="slide3" src="" alt="' . $__templater->fn('property', array('nlSlide3Title', ), true) . '" title="' . $__templater->fn('property', array('nlSlide3Title', ), true) . '"/>
							';
			if (($__templater->fn('property', array('nlSlide3Title', ), false) != null) OR ($__templater->fn('property', array('nlSlide3Desc', ), false) != null)) {
				$__finalCompiled .= '
								<div class="flex-caption">
									';
				if ($__templater->fn('property', array('nlSliderAddReadMoreButton', ), false)) {
					$__finalCompiled .= '<span class="button">' . 'Continue reading...' . '</span>';
				}
				$__finalCompiled .= '	
									';
				if ($__templater->fn('property', array('nlSlide3Title', ), false)) {
					$__finalCompiled .= '<h2>' . $__templater->fn('property', array('nlSlide3Title', ), true) . '</h2>';
				}
				$__finalCompiled .= '
									';
				if ($__templater->fn('property', array('nlSlide3Desc', ), false)) {
					$__finalCompiled .= $__templater->fn('property', array('nlSlide3Desc', ), true);
				}
				$__finalCompiled .= '
								</div>
							';
			}
			$__finalCompiled .= '
						</a>
					';
		} else if ($__templater->fn('property', array('nlSlide3Mode', ), false) == 'video') {
			$__finalCompiled .= '
						<!-- video mode -->
						' . $__templater->fn('property', array('nlSlide3Video', ), true) . '
					';
		}
		$__finalCompiled .= '
				</li>
	    	';
	}
	$__finalCompiled .= '
			
			<!-- slide 4 -->
			';
	if ((($__templater->fn('property', array('nlSlide4Mode', ), false) == 'img') AND ($__templater->fn('property', array('nlSlide4Img', ), false) != null)) OR (($__templater->fn('property', array('nlSlide4Mode', ), false) == 'video') AND ($__templater->fn('property', array('nlSlide4Video', ), false) != null))) {
		$__finalCompiled .= '
	    		<li>
					<!-- img mode -->
					';
		if ($__templater->fn('property', array('nlSlide4Mode', ), false) == 'img') {
			$__finalCompiled .= '
						<a href="' . $__templater->fn('property', array('nlSlide4Link', ), true) . '"><img id="slide4" src="" alt="' . $__templater->fn('property', array('nlSlide4Title', ), true) . '" title="' . $__templater->fn('property', array('nlSlide4Title', ), true) . '"/>
							';
			if (($__templater->fn('property', array('nlSlide4Title', ), false) != null) OR ($__templater->fn('property', array('nlSlide4Desc', ), false) != null)) {
				$__finalCompiled .= '
								<div class="flex-caption">
									';
				if ($__templater->fn('property', array('nlSliderAddReadMoreButton', ), false)) {
					$__finalCompiled .= '<span class="button">' . 'Continue reading...' . '</span>';
				}
				$__finalCompiled .= '	
									';
				if ($__templater->fn('property', array('nlSlide4Title', ), false)) {
					$__finalCompiled .= '<h2>' . $__templater->fn('property', array('nlSlide4Title', ), true) . '</h2>';
				}
				$__finalCompiled .= '
									';
				if ($__templater->fn('property', array('nlSlide4Desc', ), false)) {
					$__finalCompiled .= $__templater->fn('property', array('nlSlide4Desc', ), true);
				}
				$__finalCompiled .= '
								</div>
							';
			}
			$__finalCompiled .= '
						</a>
					';
		} else if ($__templater->fn('property', array('nlSlide4Mode', ), false) == 'video') {
			$__finalCompiled .= '
						<!-- video mode -->
						' . $__templater->fn('property', array('nlSlide4Video', ), true) . '
					';
		}
		$__finalCompiled .= '
				</li>
	    	';
	}
	$__finalCompiled .= '
			
			<!-- slide 5 -->
			';
	if ((($__templater->fn('property', array('nlSlide5Mode', ), false) == 'img') AND ($__templater->fn('property', array('nlSlide5Img', ), false) != null)) OR (($__templater->fn('property', array('nlSlide5Mode', ), false) == 'video') AND ($__templater->fn('property', array('nlSlide5Video', ), false) != null))) {
		$__finalCompiled .= '
	    		<li>
					<!-- img mode -->
					';
		if ($__templater->fn('property', array('nlSlide5Mode', ), false) == 'img') {
			$__finalCompiled .= '
						<a href="' . $__templater->fn('property', array('nlSlide5Link', ), true) . '"><img id="slide5" src="" alt="' . $__templater->fn('property', array('nlSlide5Title', ), true) . '" title="' . $__templater->fn('property', array('nlSlide5Title', ), true) . '"/>
							';
			if (($__templater->fn('property', array('nlSlide5Title', ), false) != null) OR ($__templater->fn('property', array('nlSlide5Desc', ), false) != null)) {
				$__finalCompiled .= '
								<div class="flex-caption">
									';
				if ($__templater->fn('property', array('nlSliderAddReadMoreButton', ), false)) {
					$__finalCompiled .= '<span class="button">' . 'Continue reading...' . '</span>';
				}
				$__finalCompiled .= '	
									';
				if ($__templater->fn('property', array('nlSlide5Title', ), false)) {
					$__finalCompiled .= '<h2>' . $__templater->fn('property', array('nlSlide5Title', ), true) . '</h2>';
				}
				$__finalCompiled .= '
									';
				if ($__templater->fn('property', array('nlSlide5Desc', ), false)) {
					$__finalCompiled .= $__templater->fn('property', array('nlSlide5Desc', ), true);
				}
				$__finalCompiled .= '
								</div>
							';
			}
			$__finalCompiled .= '
						</a>
					';
		} else if ($__templater->fn('property', array('nlSlide5Mode', ), false) == 'video') {
			$__finalCompiled .= '
						<!-- video mode -->
						' . $__templater->fn('property', array('nlSlide5Video', ), true) . '
					';
		}
		$__finalCompiled .= '
				</li>
	    	';
	}
	$__finalCompiled .= '
			
			<!-- slide 6 -->
			';
	if ((($__templater->fn('property', array('nlSlide6Mode', ), false) == 'img') AND ($__templater->fn('property', array('nlSlide6Img', ), false) != null)) OR (($__templater->fn('property', array('nlSlide6Mode', ), false) == 'video') AND ($__templater->fn('property', array('nlSlide6Video', ), false) != null))) {
		$__finalCompiled .= '
	    		<li>
					<!-- img mode -->
					';
		if ($__templater->fn('property', array('nlSlide6Mode', ), false) == 'img') {
			$__finalCompiled .= '
						<a href="' . $__templater->fn('property', array('nlSlide6Link', ), true) . '"><img id="slide6" src="" alt="' . $__templater->fn('property', array('nlSlide6Title', ), true) . '" title="' . $__templater->fn('property', array('nlSlide6Title', ), true) . '"/>
							';
			if (($__templater->fn('property', array('nlSlide6Title', ), false) != null) OR ($__templater->fn('property', array('nlSlide6Desc', ), false) != null)) {
				$__finalCompiled .= '
								<div class="flex-caption">
									';
				if ($__templater->fn('property', array('nlSliderAddReadMoreButton', ), false)) {
					$__finalCompiled .= '<span class="button">' . 'Continue reading...' . '</span>';
				}
				$__finalCompiled .= '	
									';
				if ($__templater->fn('property', array('nlSlide6Title', ), false)) {
					$__finalCompiled .= '<h2>' . $__templater->fn('property', array('nlSlide6Title', ), true) . '</h2>';
				}
				$__finalCompiled .= '
									';
				if ($__templater->fn('property', array('nlSlide6Desc', ), false)) {
					$__finalCompiled .= $__templater->fn('property', array('nlSlide6Desc', ), true);
				}
				$__finalCompiled .= '
								</div>
							';
			}
			$__finalCompiled .= '
						</a>
					';
		} else if ($__templater->fn('property', array('nlSlide6Mode', ), false) == 'video') {
			$__finalCompiled .= '
						<!-- video mode -->
						' . $__templater->fn('property', array('nlSlide6Video', ), true) . '
					';
		}
		$__finalCompiled .= '
				</li>
	    	';
	}
	$__finalCompiled .= '
			
			<!-- slide 7 -->
			';
	if ((($__templater->fn('property', array('nlSlide7Mode', ), false) == 'img') AND ($__templater->fn('property', array('nlSlide7Img', ), false) != null)) OR (($__templater->fn('property', array('nlSlide7Mode', ), false) == 'video') AND ($__templater->fn('property', array('nlSlide7Video', ), false) != null))) {
		$__finalCompiled .= '
	    		<li>
					<!-- img mode -->
					';
		if ($__templater->fn('property', array('nlSlide7Mode', ), false) == 'img') {
			$__finalCompiled .= '
						<a href="' . $__templater->fn('property', array('nlSlide7Link', ), true) . '"><img id="slide7" src="" alt="' . $__templater->fn('property', array('nlSlide7Title', ), true) . '" title="' . $__templater->fn('property', array('nlSlide7Title', ), true) . '"/>
							';
			if (($__templater->fn('property', array('nlSlide7Title', ), false) != null) OR ($__templater->fn('property', array('nlSlide7Desc', ), false) != null)) {
				$__finalCompiled .= '
								<div class="flex-caption">
									';
				if ($__templater->fn('property', array('nlSliderAddReadMoreButton', ), false)) {
					$__finalCompiled .= '<span class="button">' . 'Continue reading...' . '</span>';
				}
				$__finalCompiled .= '	
									';
				if ($__templater->fn('property', array('nlSlide7Title', ), false)) {
					$__finalCompiled .= '<h2>' . $__templater->fn('property', array('nlSlide7Title', ), true) . '</h2>';
				}
				$__finalCompiled .= '
									';
				if ($__templater->fn('property', array('nlSlide7Desc', ), false)) {
					$__finalCompiled .= $__templater->fn('property', array('nlSlide7Desc', ), true);
				}
				$__finalCompiled .= '
								</div>
							';
			}
			$__finalCompiled .= '
						</a>
					';
		} else if ($__templater->fn('property', array('nlSlide7Mode', ), false) == 'video') {
			$__finalCompiled .= '
						<!-- video mode -->
						' . $__templater->fn('property', array('nlSlide7Video', ), true) . '
					';
		}
		$__finalCompiled .= '
				</li>
	    	';
	}
	$__finalCompiled .= '
			
			<!-- slide 8 -->
			';
	if ((($__templater->fn('property', array('nlSlide8Mode', ), false) == 'img') AND ($__templater->fn('property', array('nlSlide8Img', ), false) != null)) OR (($__templater->fn('property', array('nlSlide8Mode', ), false) == 'video') AND ($__templater->fn('property', array('nlSlide8Video', ), false) != null))) {
		$__finalCompiled .= '
	    		<li>
					<!-- img mode -->
					';
		if ($__templater->fn('property', array('nlSlide8Mode', ), false) == 'img') {
			$__finalCompiled .= '
						<a href="' . $__templater->fn('property', array('nlSlide8Link', ), true) . '"><img id="slide8" src="" alt="' . $__templater->fn('property', array('nlSlide8Title', ), true) . '" title="' . $__templater->fn('property', array('nlSlide8Title', ), true) . '"/>
							';
			if (($__templater->fn('property', array('nlSlide8Title', ), false) != null) OR ($__templater->fn('property', array('nlSlide8Desc', ), false) != null)) {
				$__finalCompiled .= '
								<div class="flex-caption">
									';
				if ($__templater->fn('property', array('nlSliderAddReadMoreButton', ), false)) {
					$__finalCompiled .= '<span class="button">' . 'Continue reading...' . '</span>';
				}
				$__finalCompiled .= '	
									';
				if ($__templater->fn('property', array('nlSlide8Title', ), false)) {
					$__finalCompiled .= '<h2>' . $__templater->fn('property', array('nlSlide8Title', ), true) . '</h2>';
				}
				$__finalCompiled .= '
									';
				if ($__templater->fn('property', array('nlSlide8Desc', ), false)) {
					$__finalCompiled .= $__templater->fn('property', array('nlSlide8Desc', ), true);
				}
				$__finalCompiled .= '
								</div>
							';
			}
			$__finalCompiled .= '
						</a>
					';
		} else if ($__templater->fn('property', array('nlSlide8Mode', ), false) == 'video') {
			$__finalCompiled .= '
						<!-- video mode -->
						' . $__templater->fn('property', array('nlSlide8Video', ), true) . '
					';
		}
		$__finalCompiled .= '
				</li>
	    	';
	}
	$__finalCompiled .= '
			
			<!-- slide 9 -->
			';
	if ((($__templater->fn('property', array('nlSlide9Mode', ), false) == 'img') AND ($__templater->fn('property', array('nlSlide9Img', ), false) != null)) OR (($__templater->fn('property', array('nlSlide9Mode', ), false) == 'video') AND ($__templater->fn('property', array('nlSlide9Video', ), false) != null))) {
		$__finalCompiled .= '
	    		<li>
					<!-- img mode -->
					';
		if ($__templater->fn('property', array('nlSlide9Mode', ), false) == 'img') {
			$__finalCompiled .= '
						<a href="' . $__templater->fn('property', array('nlSlide9Link', ), true) . '"><img id="slide9" src="" alt="' . $__templater->fn('property', array('nlSlide9Title', ), true) . '" title="' . $__templater->fn('property', array('nlSlide9Title', ), true) . '"/>
							';
			if (($__templater->fn('property', array('nlSlide9Title', ), false) != null) OR ($__templater->fn('property', array('nlSlide9Desc', ), false) != null)) {
				$__finalCompiled .= '
								<div class="flex-caption">
									';
				if ($__templater->fn('property', array('nlSliderAddReadMoreButton', ), false)) {
					$__finalCompiled .= '<span class="button">' . 'Continue reading...' . '</span>';
				}
				$__finalCompiled .= '	
									';
				if ($__templater->fn('property', array('nlSlide9Title', ), false)) {
					$__finalCompiled .= '<h2>' . $__templater->fn('property', array('nlSlide9Title', ), true) . '</h2>';
				}
				$__finalCompiled .= '
									';
				if ($__templater->fn('property', array('nlSlide9Desc', ), false)) {
					$__finalCompiled .= $__templater->fn('property', array('nlSlide9Desc', ), true);
				}
				$__finalCompiled .= '
								</div>
							';
			}
			$__finalCompiled .= '
						</a>
					';
		} else if ($__templater->fn('property', array('nlSlide9Mode', ), false) == 'video') {
			$__finalCompiled .= '
						<!-- video mode -->
						' . $__templater->fn('property', array('nlSlide9Video', ), true) . '
					';
		}
		$__finalCompiled .= '
				</li>
	    	';
	}
	$__finalCompiled .= '
			
			<!-- slide 10 -->
			';
	if ((($__templater->fn('property', array('nlSlide10Mode', ), false) == 'img') AND ($__templater->fn('property', array('nlSlide10Img', ), false) != null)) OR (($__templater->fn('property', array('nlSlide10Mode', ), false) == 'video') AND ($__templater->fn('property', array('nlSlide10Video', ), false) != null))) {
		$__finalCompiled .= '
	    		<li>
					<!-- img mode -->
					';
		if ($__templater->fn('property', array('nlSlide10Mode', ), false) == 'img') {
			$__finalCompiled .= '
						<a href="' . $__templater->fn('property', array('nlSlide10Link', ), true) . '"><img id="slide10" src="" alt="' . $__templater->fn('property', array('nlSlide10Title', ), true) . '" title="' . $__templater->fn('property', array('nlSlide10Title', ), true) . '"/>
							';
			if (($__templater->fn('property', array('nlSlide10Title', ), false) != null) OR ($__templater->fn('property', array('nlSlide10Desc', ), false) != null)) {
				$__finalCompiled .= '
								<div class="flex-caption">
									';
				if ($__templater->fn('property', array('nlSliderAddReadMoreButton', ), false)) {
					$__finalCompiled .= '<span class="button">' . 'Continue reading...' . '</span>';
				}
				$__finalCompiled .= '	
									';
				if ($__templater->fn('property', array('nlSlide10Title', ), false)) {
					$__finalCompiled .= '<h2>' . $__templater->fn('property', array('nlSlide10Title', ), true) . '</h2>';
				}
				$__finalCompiled .= '
									';
				if ($__templater->fn('property', array('nlSlide10Desc', ), false)) {
					$__finalCompiled .= $__templater->fn('property', array('nlSlide10Desc', ), true);
				}
				$__finalCompiled .= '
								</div>
							';
			}
			$__finalCompiled .= '
						</a>
					';
		} else if ($__templater->fn('property', array('nlSlide10Mode', ), false) == 'video') {
			$__finalCompiled .= '
						<!-- video mode -->
						' . $__templater->fn('property', array('nlSlide10Video', ), true) . '
					';
		}
		$__finalCompiled .= '
				</li>
	    	';
	}
	$__finalCompiled .= '
			
        </ul>
      </div>
    </section>

' . $__templater->callMacro('nl_flexslider_macros', 'default', array(
		'element' => '#flexslider',
		'animation' => 'fade',
		'dots' => 'true',
		'arrows' => 'true',
		'autoplay' => 'true',
		'wait' => '6000',
	), $__vars) . '

';
	$__compilerTemp1 = '';
	if ($__templater->fn('property', array('nlSliderEnableOnMobile', ), false) == 'false') {
		$__compilerTemp1 .= '
		$hideOnMobile = true;
	';
	}
	$__templater->inlineJs('
jQuery(document).ready(function() {
	
	var $slide1src = "' . $__templater->fn('property', array('nlSlide1Img', ), false) . '";
	var $slide2src = "' . $__templater->fn('property', array('nlSlide2Img', ), false) . '";
	var $slide3src = "' . $__templater->fn('property', array('nlSlide3Img', ), false) . '";
	var $slide4src = "' . $__templater->fn('property', array('nlSlide4Img', ), false) . '";
	var $slide5src = "' . $__templater->fn('property', array('nlSlide5Img', ), false) . '";
	var $slide6src = "' . $__templater->fn('property', array('nlSlide6Img', ), false) . '";
	var $slide7src = "' . $__templater->fn('property', array('nlSlide7Img', ), false) . '";
	var $slide8src = "' . $__templater->fn('property', array('nlSlide8Img', ), false) . '";
	var $slide9src = "' . $__templater->fn('property', array('nlSlide9Img', ), false) . '";
	var $slide10src = "' . $__templater->fn('property', array('nlSlide10Img', ), false) . '";
	var $isMobile = false;
	var $hideOnMobile = false;

	if (/Mobi|Android|webOS|iPhone|iPad|iPod|pocket|psp|kindle|avantgo|blazer|midori|Tablet|Palm|maemo|plucker|phone|BlackBerry|symbian|IEMobile|mobile|ZuneWP7|Windows Phone|Opera Mini/i.test(navigator.userAgent)) {
		$isMobile = true;
	}
	' . $__compilerTemp1 . '
	
	if ($isMobile == true && $hideOnMobile == true) {
		// Remove slider
		if ($(\'#flexslider\').length) {
			$( "#flexslider" ).remove();
		}
	} else if ($isMobile == false || ($isMobile == true && $hideOnMobile == false)) {
		if ($(\'#flexslider #slide1\').length) {
			$(\'#flexslider #slide1\').attr(\'src\', $slide1src);
		}
		if ($(\'#flexslider #slide2\').length) {
			$(\'#flexslider #slide2\').attr(\'src\', $slide2src);
		}
		if ($(\'#flexslider #slide3\').length) {
			$(\'#flexslider #slide3\').attr(\'src\', $slide3src);
		}
		if ($(\'#flexslider #slide4\').length) {
			$(\'#flexslider #slide4\').attr(\'src\', $slide4src);
		}
		if ($(\'#flexslider #slide5\').length) {
			$(\'#flexslider #slide5\').attr(\'src\', $slide5src);
		}
		if ($(\'#flexslider #slide6\').length) {
			$(\'#flexslider #slide6\').attr(\'src\', $slide6src);
		}
		if ($(\'#flexslider #slide7\').length) {
			$(\'#flexslider #slide7\').attr(\'src\', $slide7src);
		}
		if ($(\'#flexslider #slide8\').length) {
			$(\'#flexslider #slide8\').attr(\'src\', $slide8src);
		}
		if ($(\'#flexslider #slide9\').length) {
			$(\'#flexslider #slide9\').attr(\'src\', $slide9src);
		}
		if ($(\'#flexslider #slide10\').length) {
			$(\'#flexslider #slide10\').attr(\'src\', $slide10src);
		}
	}
})
');
	return $__finalCompiled;
});