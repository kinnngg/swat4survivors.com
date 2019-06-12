<?php
// FROM HASH: a04248987d39622c37118cf6e2362810
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('xfmg_media');
	$__templater->pageParams['pageNumber'] = $__vars['page'];
	$__finalCompiled .= '

' . $__templater->callMacro('xfmg_media_list_macros', 'media_create_message', array(
		'transcoding' => $__vars['transcoding'],
		'pendingApproval' => $__vars['pendingApproval'],
	), $__vars) . '

' . $__templater->callMacro('xfmg_page_macros', 'xfmg_page_options', array(), $__vars) . '

';
	$__templater->wrapTemplate('xfmg_gallery_wrapper', $__vars);
	$__finalCompiled .= '

';
	if ($__templater->method($__vars['xf']['visitor'], 'canAddMedia', array())) {
		$__finalCompiled .= '
	';
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
		' . $__templater->button('
			' . 'xfmg_add_media...' . '
		', array(
			'href' => $__templater->fn('link', array('media/add', ), false),
			'class' => 'button--cta',
			'icon' => 'add',
			'data-xf-click' => 'overlay',
		), '', array(
		)) . '
	');
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__vars['categoryTree'] AND (($__templater->method($__vars['categoryTree'], 'count', array()) > 1) AND ($__templater->fn('property', array('xfmgCategoryList', ), false) == 'always'))) {
		$__finalCompiled .= '
';
		if ($__templater->fn('property', array('nlXFMGUseHorizontalNav', ), false) == false) {
			$__finalCompiled .= '
	<div class="block">
		<div class="block-container">
			<div class="block-body">
				' . $__templater->callMacro('xfmg_category_list_macros', 'category_list', array(
				'children' => $__vars['categoryTree'],
				'extras' => $__vars['categoryExtras'],
			), $__vars) . '
			</div>
		</div>
	</div>
';
		} else {
			$__finalCompiled .= '
	<div class="p-body-horizNav ">
		<div class="p-body-navGroup">
			' . $__templater->callMacro('xfmg_category_list_macros', 'simple_horizontal_list_block', array(
				'categoryTree' => $__vars['categoryTree'],
				'categoryExtras' => $__vars['categoryExtras'],
				'selected' => $__vars['category']['resource_category_id'],
			), $__vars) . '
		</div>
	</div>
';
		}
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__vars['canInlineMod']) {
		$__finalCompiled .= '
	';
		$__templater->includeJs(array(
			'src' => 'xf/inline_mod.js',
			'min' => '1',
		));
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

<div class="block" data-xf-init="' . ($__vars['canInlineMod'] ? 'inline-mod' : '') . '" data-type="xfmg_media" data-href="' . $__templater->fn('link', array('inline-mod', ), true) . '">
	<div class="block-outer">';
	$__compilerTemp1 = '';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
						';
	if ($__vars['canInlineMod']) {
		$__compilerTemp2 .= '
							' . $__templater->callMacro('inline_mod_macros', 'button', array(), $__vars) . '
						';
	}
	$__compilerTemp2 .= '
						';
	if ($__vars['xf']['visitor']['user_id']) {
		$__compilerTemp2 .= '
							' . $__templater->button('
								' . 'xfmg_mark_media_viewed' . '
							', array(
			'href' => $__templater->fn('link', array('media/mark-viewed', null, array('date' => $__vars['xf']['time'], ), ), false),
			'class' => 'button--link',
			'overlay' => 'true',
		), '', array(
		)) . '
						';
	}
	$__compilerTemp2 .= '
					';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__compilerTemp1 .= '
			<div class="block-outer-opposite">
				<div class="buttonGroup">
					' . $__compilerTemp2 . '
				</div>
			</div>
		';
	}
	$__finalCompiled .= trim('

		' . $__templater->fn('page_nav', array(array(
		'page' => $__vars['page'],
		'total' => $__vars['totalItems'],
		'link' => 'media',
		'params' => $__vars['filters'],
		'wrapperclass' => 'block-outer-main',
		'perPage' => $__vars['perPage'],
	))) . '

		' . $__compilerTemp1 . '

	') . '</div>

	<div class="block-container">
		' . $__templater->callMacro('xfmg_media_list_macros', 'list_filter_bar', array(
		'filters' => $__vars['filters'],
		'baseLinkPath' => 'media',
		'ownerFilter' => $__vars['ownerFilter'],
	), $__vars) . '

		<div class="block-body">
			';
	if (!$__templater->test($__vars['mediaItems'], 'empty', array())) {
		$__finalCompiled .= '
				' . $__templater->callMacro('xfmg_media_list_macros', 'media_list', array(
			'mediaItems' => $__vars['mediaItems'],
		), $__vars) . '
				';
		if ($__vars['showDateLimitDisabler']) {
			$__finalCompiled .= '
					<div class="blockMessage blockMessage--highlight blockMessage--small blockMessage--center">
						<a href="' . $__templater->fn('link', array('media', null, $__vars['filters'] + array('page' => $__vars['page'], 'no_date_limit' => 1, ), ), true) . '">
							' . 'Show older items' . '
						</a>
					</div>
				';
		}
		$__finalCompiled .= '
			';
	} else if ($__vars['filters']) {
		$__finalCompiled .= '
				<div class="block-row">' . 'xfmg_there_is_no_media_matching_your_filters' . '</div>
			';
	} else {
		$__finalCompiled .= '
				<div class="block-row">' . 'xfmg_no_media_has_been_added_yet' . '</div>
			';
	}
	$__finalCompiled .= '
		</div>
	</div>

	<div class="block-outer block-outer--after">
		' . $__templater->fn('page_nav', array(array(
		'page' => $__vars['page'],
		'total' => $__vars['totalItems'],
		'link' => 'media',
		'params' => $__vars['filters'],
		'wrapperclass' => 'block-outer-main',
		'perPage' => $__vars['perPage'],
	))) . '

		' . $__templater->fn('show_ignored', array(array(
		'wrapperclass' => 'block-outer-opposite',
	))) . '
	</div>
</div>';
	return $__finalCompiled;
});