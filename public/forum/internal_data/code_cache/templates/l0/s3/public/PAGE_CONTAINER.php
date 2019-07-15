<?php
// FROM HASH: 8aec68b817a80fe7581e43660b7f4111
return array('macros' => array('nav_entry' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'navId' => '!',
		'nav' => '!',
		'selected' => false,
		'shortcut' => '',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	<div class="p-navEl ' . ($__vars['selected'] ? 'is-selected' : '') . '" ' . ($__vars['nav']['children'] ? 'data-has-children="true"' : '') . '>
		';
	if ($__vars['nav']['href']) {
		$__finalCompiled .= '

			' . $__templater->callMacro(null, 'nav_link', array(
			'navId' => $__vars['navId'],
			'nav' => $__vars['nav'],
			'class' => 'p-navEl-link ' . ($__vars['nav']['children'] ? 'p-navEl-link--splitMenu' : ''),
			'shortcut' => ($__vars['nav']['children'] ? false : $__vars['shortcut']),
		), $__vars) . '

			';
		if ($__vars['nav']['children']) {
			$__finalCompiled .= '<a data-xf-key="' . $__templater->escape($__vars['shortcut']) . '"
				data-xf-click="menu"
				data-menu-pos-ref="< .p-navEl"
				class="p-navEl-splitTrigger"
				role="button"
				tabindex="0"
				aria-label="' . $__templater->filter('Toggle expanded', array(array('for_attr', array()),), true) . '"
				aria-expanded="false"
				aria-haspopup="true"></a>';
		}
		$__finalCompiled .= '

		';
	} else if ($__vars['nav']['children']) {
		$__finalCompiled .= '<a data-xf-key="' . $__templater->escape($__vars['shortcut']) . '"
			data-xf-click="menu"
			data-menu-pos-ref="< .p-navEl"
			class="p-navEl-linkHolder"
			role="button"
			tabindex="0"
			aria-expanded="false"
			aria-haspopup="true">
			' . $__templater->callMacro(null, 'nav_link', array(
			'navId' => $__vars['navId'],
			'nav' => $__vars['nav'],
			'class' => 'p-navEl-link p-navEl-link--menuTrigger',
		), $__vars) . '
		</a>

		';
	} else {
		$__finalCompiled .= '

			' . $__templater->callMacro(null, 'nav_link', array(
			'navId' => $__vars['navId'],
			'nav' => $__vars['nav'],
			'class' => 'p-navEl-link',
			'shortcut' => $__vars['shortcut'],
		), $__vars) . '

		';
	}
	$__finalCompiled .= '
		';
	if ($__vars['nav']['children']) {
		$__finalCompiled .= '
			<div class="menu menu--structural" data-menu="menu" aria-hidden="true">
				<div class="menu-content">
					';
		if ($__templater->isTraversable($__vars['nav']['children'])) {
			foreach ($__vars['nav']['children'] AS $__vars['childNavId'] => $__vars['child']) {
				$__finalCompiled .= '
						' . $__templater->callMacro(null, 'nav_menu_entry', array(
					'navId' => $__vars['childNavId'],
					'nav' => $__vars['child'],
				), $__vars) . '
					';
			}
		}
		$__finalCompiled .= '
				</div>
			</div>
		';
	}
	$__finalCompiled .= '
	</div>
';
	return $__finalCompiled;
},
'nav_link' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'navId' => '!',
		'nav' => '!',
		'class' => '',
		'titleHtml' => '',
		'shortcut' => false,
	), $__arguments, $__vars);
	$__finalCompiled .= '
	';
	$__vars['tag'] = ($__vars['nav']['href'] ? 'a' : 'span');
	$__finalCompiled .= '
	<' . $__templater->escape($__vars['tag']) . ' ' . ($__vars['nav']['href'] ? (('href="' . $__templater->escape($__vars['nav']['href'])) . '"') : '') . '
		class="' . $__templater->fn('trim', array($__vars['class'], ), true) . ' ' . $__templater->escape($__vars['nav']['attributes']['class']) . '"
		' . $__templater->fn('attributes', array($__vars['nav']['attributes'], array('class', ), ), true) . '
		' . (($__vars['shortcut'] !== false) ? (('data-xf-key="' . $__templater->escape($__vars['shortcut'])) . '"') : '') . '
		data-nav-id="' . $__templater->escape($__vars['navId']) . '">';
	if ($__vars['nav']['icon']) {
		$__finalCompiled .= $__templater->fontAwesome($__templater->escape($__vars['nav']['icon']), array(
		)) . ' ';
	}
	$__finalCompiled .= ($__vars['titleHtml'] ? $__templater->filter($__vars['titleHtml'], array(array('raw', array()),), true) : $__templater->escape($__vars['nav']['title']));
	if ($__vars['nav']['counter']) {
		$__finalCompiled .= ' <span class="badge badge--highlighted">' . $__templater->filter($__vars['nav']['counter'], array(array('number', array()),), true) . '</span>';
	}
	$__finalCompiled .= '</' . $__templater->escape($__vars['tag']) . '>
';
	return $__finalCompiled;
},
'nav_menu_entry' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'navId' => '!',
		'nav' => '!',
		'depth' => '0',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	' . $__templater->callMacro(null, 'nav_link', array(
		'navId' => $__vars['navId'],
		'nav' => $__vars['nav'],
		'class' => 'menu-linkRow u-indentDepth' . $__vars['depth'] . ' js-offCanvasCopy',
	), $__vars) . '
	';
	if ($__vars['nav']['children']) {
		$__finalCompiled .= '
		';
		if ($__templater->isTraversable($__vars['nav']['children'])) {
			foreach ($__vars['nav']['children'] AS $__vars['childNavId'] => $__vars['child']) {
				$__finalCompiled .= '
			' . $__templater->callMacro(null, 'nav_menu_entry', array(
					'navId' => $__vars['childNavId'],
					'nav' => $__vars['child'],
					'depth' => ($__vars['depth'] + 1),
				), $__vars) . '
		';
			}
		}
		$__finalCompiled .= '
		';
		if ($__vars['depth'] == 0) {
			$__finalCompiled .= '
			<hr class="menu-separator" />
		';
		}
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
},
'breadcrumbs' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'breadcrumbs' => '!',
		'navTree' => '!',
		'selectedNavEntry' => null,
		'variant' => '',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
			';
	$__vars['position'] = 0;
	$__compilerTemp1 .= '

			';
	$__vars['rootBreadcrumb'] = $__vars['navTree'][$__vars['xf']['options']['rootBreadcrumb']];
	$__compilerTemp1 .= '
			';
	if ($__vars['rootBreadcrumb'] AND ($__vars['rootBreadcrumb']['href'] != $__vars['xf']['uri'])) {
		$__compilerTemp1 .= '
				';
		$__vars['position'] = ($__vars['position'] + 1);
		$__compilerTemp1 .= '
				' . $__templater->callMacro(null, 'crumb', array(
			'position' => $__vars['position'],
			'href' => $__vars['rootBreadcrumb']['href'],
			'value' => $__vars['rootBreadcrumb']['title'],
		), $__vars) . '
			';
	}
	$__compilerTemp1 .= '
			<!--custom -->
			';
	if ($__vars['selectedNavEntry'] AND ($__vars['selectedNavEntry']['href'] AND (($__vars['selectedNavEntry']['href'] == $__vars['xf']['uri']) AND ($__vars['selectedNavEntry']['href'] != $__vars['rootBreadcrumb']['href'])))) {
		$__compilerTemp1 .= '
				';
		$__vars['position'] = ($__vars['position'] + 1);
		$__compilerTemp1 .= '
				' . $__templater->callMacro(null, 'crumb', array(
			'position' => $__vars['position'],
			'href' => $__vars['selectedNavEntry']['href'],
			'value' => $__vars['selectedNavEntry']['title'],
		), $__vars) . '
			';
	}
	$__compilerTemp1 .= '
			';
	if ($__vars['selectedNavEntry'] AND ($__vars['selectedNavEntry']['href'] AND (($__vars['selectedNavEntry']['href'] != $__vars['xf']['uri']) AND ($__vars['selectedNavEntry']['href'] != $__vars['rootBreadcrumb']['href'])))) {
		$__compilerTemp1 .= '
				';
		$__vars['position'] = ($__vars['position'] + 1);
		$__compilerTemp1 .= '
				' . $__templater->callMacro(null, 'crumb', array(
			'position' => $__vars['position'],
			'href' => $__vars['selectedNavEntry']['href'],
			'value' => $__vars['selectedNavEntry']['title'],
		), $__vars) . '
			';
	}
	$__compilerTemp1 .= '
			';
	if ($__templater->isTraversable($__vars['breadcrumbs'])) {
		foreach ($__vars['breadcrumbs'] AS $__vars['breadcrumb']) {
			if ($__vars['breadcrumb']['href'] != $__vars['xf']['uri']) {
				$__compilerTemp1 .= '
				';
				$__vars['position'] = ($__vars['position'] + 1);
				$__compilerTemp1 .= '
				' . $__templater->callMacro(null, 'crumb', array(
					'position' => $__vars['position'],
					'href' => $__vars['breadcrumb']['href'],
					'value' => $__vars['breadcrumb']['value'],
				), $__vars) . '
			';
			}
		}
	}
	$__compilerTemp1 .= '

		';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
		<ul class="p-breadcrumbs ';
		if ($__templater->fn('property', array('nlUseXF1Breadcrumb', ), false) == true) {
			$__finalCompiled .= 'xf1';
		}
		$__finalCompiled .= ' ' . ($__vars['variant'] ? ('p-breadcrumbs--' . $__templater->escape($__vars['variant'])) : '') . '"
			itemscope itemtype="https://schema.org/BreadcrumbList">
		' . $__compilerTemp1 . '
		</ul>
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
},
'crumb' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'href' => '!',
		'value' => '!',
		'position' => 0,
	), $__arguments, $__vars);
	$__finalCompiled .= '
	<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
		<a href="' . $__templater->escape($__vars['href']) . '" itemprop="item">
			<span itemprop="name">' . $__templater->escape($__vars['value']) . '</span>
		</a>
		';
	if ($__vars['position']) {
		$__finalCompiled .= '<meta itemprop="position" content="' . $__templater->escape($__vars['position']) . '" />';
	}
	$__finalCompiled .= '
		';
	if ($__templater->fn('property', array('nlUseXF1Breadcrumb', ), false) == true) {
		$__finalCompiled .= '
			<span class="arrow"><span>&gt;</span></span>
		';
	}
	$__finalCompiled .= '
	</li>
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<!DOCTYPE html>
<html id="XF" lang="' . $__templater->escape($__vars['xf']['language']['language_code']) . '" dir="' . $__templater->escape($__vars['xf']['language']['text_direction']) . '"
	data-app="public"
	data-template="' . $__templater->escape($__vars['template']) . '"
	data-container-key="' . $__templater->escape($__vars['containerKey']) . '"
	data-content-key="' . $__templater->escape($__vars['contentKey']) . '"
	data-logged-in="' . ($__vars['xf']['visitor']['user_id'] ? 'true' : 'false') . '"
	data-cookie-prefix="' . $__templater->escape($__vars['xf']['cookie']['prefix']) . '"
	data-csrf="' . $__templater->filter($__templater->fn('csrf_token', array(), false), array(array('escape', array('js', )),), true) . '"
	class="has-no-js ' . ($__vars['template'] ? ('template-' . $__templater->escape($__vars['template'])) : '') . ' page_' . $__templater->escape($__vars['pageMode']) . ' page_' . $__templater->escape($__vars['containerKey']) . ' ' . $__templater->includeTemplate('nl_body_classes', $__vars) . '"
	' . ($__vars['xf']['runJobs'] ? ' data-run-jobs=""' : '') . '>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

	';
	$__vars['siteName'] = $__vars['xf']['options']['boardTitle'];
	$__finalCompiled .= '
	';
	$__vars['h1'] = $__templater->preEscaped($__templater->fn('page_h1', array($__vars['siteName'])));
	$__finalCompiled .= '
	';
	$__vars['description'] = $__templater->preEscaped($__templater->fn('page_description'));
	$__finalCompiled .= '

	<title>' . $__templater->fn('page_title', array('%s | %s', $__vars['xf']['options']['boardTitle'], $__vars['pageNumber'])) . '</title>

	';
	if ($__templater->isTraversable($__vars['head'])) {
		foreach ($__vars['head'] AS $__vars['headTag']) {
			$__finalCompiled .= '
		' . $__templater->escape($__vars['headTag']) . '
	';
		}
	}
	$__finalCompiled .= '

	';
	if ((!$__vars['head']['meta_site_name']) AND !$__templater->test($__vars['siteName'], 'empty', array())) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'site_name', array(
			'siteName' => $__vars['siteName'],
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if (!$__vars['head']['meta_type']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'type', array(
			'type' => 'website',
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if (!$__vars['head']['meta_title']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'title', array(
			'title' => ($__templater->fn('page_title', array(), false) ?: $__vars['siteName']),
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if ((!$__vars['head']['meta_description']) AND (!$__templater->test($__vars['description'], 'empty', array()) AND $__vars['pageDescriptionMeta'])) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'description', array(
			'description' => $__vars['description'],
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if (!$__vars['head']['meta_share_url']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'share_url', array(
			'shareUrl' => $__vars['xf']['fullUri'],
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if ((!$__vars['head']['meta_image_url']) AND $__templater->fn('property', array('publicMetadataLogoUrl', ), false)) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'image_url', array(
			'imageUrl' => $__templater->fn('base_url', array($__templater->fn('property', array('publicMetadataLogoUrl', ), false), true, ), false),
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '

	';
	if ($__templater->fn('property', array('nlGoogleFonts', ), false) != null) {
		$__finalCompiled .= '
		' . $__templater->fn('property', array('nlGoogleFonts', ), true) . '
	';
	}
	$__finalCompiled .= '
	';
	if ($__vars['bgColor'] OR $__vars['bgImage']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('bodytag_macros', 'page_inline_styles', array(
			'bgColor' => $__vars['bgColor'],
			'bgImage' => $__vars['bgImage'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	
	';
	if ($__templater->fn('property', array('metaThemeColor', ), false)) {
		$__finalCompiled .= '
		<meta name="theme-color" content="' . $__templater->fn('parse_less_color', array($__templater->fn('property', array('metaThemeColor', ), false), ), true) . '" />
	';
	}
	$__finalCompiled .= '

	' . $__templater->callMacro('helper_js_global', 'head', array(
		'app' => 'public',
	), $__vars) . '

	';
	if ($__templater->fn('property', array('publicFaviconUrl', ), false)) {
		$__finalCompiled .= '
		<link rel="icon" type="image/png" href="' . $__templater->fn('base_url', array($__templater->fn('property', array('publicFaviconUrl', ), false), true, ), true) . '" sizes="32x32" />
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('publicMetadataLogoUrl', ), false)) {
		$__finalCompiled .= '
		<link rel="apple-touch-icon" href="' . $__templater->fn('base_url', array($__templater->fn('property', array('publicMetadataLogoUrl', ), false), true, ), true) . '" />
	';
	}
	$__finalCompiled .= '
	' . $__templater->includeTemplate('google_analytics', $__vars) . '
</head>
<body data-template="' . $__templater->escape($__vars['template']) . '">

<div class="p-pageWrapper" id="top">
';
	if (($__templater->fn('property', array('nlImportParticlesJs', ), false) == true) AND ($__templater->fn('property', array('nlEnableParticlesJsBg', ), false) == true)) {
		$__finalCompiled .= '
	<div id="particles-js"></div>
';
	}
	$__finalCompiled .= '
';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
				';
	if ($__vars['xf']['visitor']['is_moderator'] AND $__vars['xf']['session']['unapprovedCounts']['total']) {
		$__compilerTemp1 .= '
					<a href="' . $__templater->fn('link', array('approval-queue', ), true) . '" class="p-staffBar-link badgeContainer badgeContainer--highlighted" data-badge="' . $__templater->filter($__vars['xf']['session']['unapprovedCounts']['total'], array(array('number', array()),), true) . '">
						' . 'Approval queue' . '
					</a>
				';
	}
	$__compilerTemp1 .= '

				';
	if ($__vars['xf']['visitor']['is_moderator'] AND ((!$__vars['xf']['options']['reportIntoForumId']) AND $__vars['xf']['session']['reportCounts']['total'])) {
		$__compilerTemp1 .= '
					<a href="' . $__templater->fn('link', array('reports', ), true) . '"
						class="p-staffBar-link badgeContainer badgeContainer--visible ' . ((($__vars['xf']['session']['reportCounts']['total'] AND ($__vars['xf']['session']['reportCounts']['lastBuilt'] > $__vars['xf']['session']['reportLastRead'])) OR $__vars['xf']['session']['reportCounts']['assigned']) ? ' badgeContainer--highlighted' : '') . '"
						data-badge="' . ($__vars['xf']['session']['reportCounts']['assigned'] ? (($__templater->filter($__vars['xf']['session']['reportCounts']['assigned'], array(array('number', array()),), true) . ' / ') . $__templater->filter($__vars['xf']['session']['reportCounts']['total'], array(array('number', array()),), true)) : $__templater->filter($__vars['xf']['session']['reportCounts']['total'], array(array('number', array()),), true)) . '"
						title="' . ($__vars['xf']['session']['reportCounts']['lastBuilt'] ? (($__templater->filter('Last report update' . $__vars['xf']['language']['label_separator'], array(array('for_attr', array()),), true) . ' ') . $__templater->fn('date_time', array($__vars['xf']['session']['reportCounts']['lastBuilt'], ), true)) : '') . '">
						' . 'Reports' . '
					</a>
				';
	}
	$__compilerTemp1 .= '

				';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
							' . '
							';
	if ($__vars['xf']['visitor']['is_moderator']) {
		$__compilerTemp2 .= '
								<a href="' . $__templater->fn('link', array('approval-queue', ), true) . '" class="menu-linkRow">' . 'Approval queue' . '</a>
							';
	}
	$__compilerTemp2 .= '
							';
	if ($__vars['xf']['visitor']['is_moderator'] AND (!$__vars['xf']['options']['reportIntoForumId'])) {
		$__compilerTemp2 .= '
								<a href="' . $__templater->fn('link', array('reports', ), true) . '" class="menu-linkRow" title="' . ($__vars['xf']['session']['reportCounts']['lastBuilt'] ? (($__templater->filter('Last report update' . $__vars['xf']['language']['label_separator'], array(array('for_attr', array()),), true) . ' ') . $__templater->fn('date_time', array($__vars['xf']['session']['reportCounts']['lastBuilt'], ), true)) : '') . '">' . 'Reports' . '</a>
							';
	}
	$__compilerTemp2 .= '
							' . '
							';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__compilerTemp1 .= '
					<a class="p-staffBar-link menuTrigger" data-xf-click="menu" data-xf-key="alt+m" role="button" tabindex="0" aria-expanded="false" aria-haspopup="true">' . 'Moderator' . '</a>
					<div class="menu" data-menu="menu" aria-hidden="true">
						<div class="menu-content">
							<h4 class="menu-header">' . 'Moderator tools' . '</h4>
							' . $__compilerTemp2 . '
						</div>
					</div>
				';
	}
	$__compilerTemp1 .= '

				';
	if ($__vars['xf']['visitor']['is_admin']) {
		$__compilerTemp1 .= '
					<a href="' . $__templater->fn('base_url', array('admin.php', ), true) . '" class="p-staffBar-link" target="_blank">' . 'Admin' . '</a>
				';
	}
	$__compilerTemp1 .= '
			';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
	<div class="p-staffBar">
		<div class="p-staffBar-inner hScroller" data-xf-init="h-scroller">
			<div class="hScroller-scroll">
			' . $__compilerTemp1 . '
			</div>
		</div>
	</div>
';
	}
	$__finalCompiled .= '

<div class="headerProxy"></div>
';
	if ($__templater->fn('property', array('nlEnableTopBar', ), false) == true) {
		$__finalCompiled .= $__templater->includeTemplate('nl_topbar', $__vars);
	}
	$__finalCompiled .= '	

<header class="p-header" id="header">
	<div class="p-header-inner">
		<div class="p-header-content">

			<div class="p-header-logo p-header-logo--image ';
	if ($__templater->fn('property', array('nlLogoPosition', ), false) == 'center') {
		$__finalCompiled .= 'p-header-logo--center';
	}
	$__finalCompiled .= '">
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
					<img src="' . $__templater->fn('base_url', array($__templater->fn('property', array('publicLogoUrl', ), false), ), true) . '"
						alt="' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '"
						' . ($__templater->fn('property', array('publicLogoUrl2x', ), false) ? (('srcset="' . $__templater->fn('base_url', array($__templater->fn('property', array('publicLogoUrl2x', ), false), ), true)) . ' 2x"') : '') . ' />
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
			
			<div class="toplinks"> <!-- begin toplinks -->
				<div id="avwrap">
					<div id="avwrap_left"></div>
					<div id="avwrap_center">
						';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '	
							<a href="' . $__templater->fn('link', array('account', ), true) . '">
								' . $__templater->fn('avatar', array($__vars['xf']['visitor'], 'xxs', false, array(
			'href' => '',
		))) . '
							</a>
						';
	}
	$__finalCompiled .= '
					</div>
					<div id="avwrap_right"></div>
				</div> <!-- end av wrap -->
				
				<!-- begin paste nav-group -->
				
				<div class="p-nav-opposite">
				<div class="p-navgroup p-account ' . ($__vars['xf']['visitor']['user_id'] ? 'p-navgroup--member' : 'p-navgroup--guest') . '">
					';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
						';
		if (($__vars['xf']['visitor']['user_state'] == 'rejected') OR ($__vars['xf']['visitor']['user_state'] == 'disabled')) {
			$__finalCompiled .= '
							<a href="' . $__templater->fn('link', array('account', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--user">
								' . $__templater->fn('avatar', array($__vars['xf']['visitor'], 'xxs', false, array(
				'href' => '',
			))) . '
								<span class="p-navgroup-linkText">' . $__templater->escape($__vars['xf']['visitor']['username']) . '</span>
							</a>

							<a href="' . $__templater->fn('link', array('logout', null, array('t' => $__templater->fn('csrf_token', array(), false), ), ), true) . '" class="p-navgroup-link">
								<span class="p-navgroup-linkText">' . 'Log out' . '</span>
							</a>
						';
		} else {
			$__finalCompiled .= '
							<a href="' . $__templater->fn('link', array('account', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--user"
								data-xf-click="menu"
								data-xf-key="' . $__templater->filter('m', array(array('for_attr', array()),), true) . '"
								data-menu-pos-ref="< .p-navgroup"
								aria-expanded="false"
								aria-haspopup="true">
								' . $__templater->fn('avatar', array($__vars['xf']['visitor'], 'xxs', false, array(
				'href' => '',
			))) . '
								<span class="p-navgroup-linkText">' . $__templater->escape($__vars['xf']['visitor']['username']) . '</span>
							</a>
							<div class="menu menu--structural menu--wide menu--account" data-menu="menu" aria-hidden="true"
								data-href="' . $__templater->fn('link', array('account/visitor-menu', ), true) . '"
								data-load-target=".js-visitorMenuBody">
								<div class="menu-content js-visitorMenuBody">
									<div class="menu-row">
										' . 'Loading' . $__vars['xf']['language']['ellipsis'] . '
									</div>
								</div>
							</div>

							<a href="' . $__templater->fn('link', array('conversations', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--conversations js-badge--conversations badgeContainer' . ($__vars['xf']['visitor']['conversations_unread'] ? ' badgeContainer--highlighted' : '') . '"
								data-badge="' . $__templater->filter($__vars['xf']['visitor']['conversations_unread'], array(array('number', array()),), true) . '"
								data-xf-click="menu"
								data-xf-key="' . $__templater->filter(',', array(array('for_attr', array()),), true) . '"
								data-menu-pos-ref="< .p-navgroup"
								aria-label="' . $__templater->filter('Inbox', array(array('for_attr', array()),), true) . '"
								aria-expanded="false"
								aria-haspopup="true">
								<i aria-hidden="true"></i>
								<span class="p-navgroup-linkText">' . '' . '</span>
							</a>
							<div class="menu menu--structural menu--medium" data-menu="menu" aria-hidden="true"
								data-href="' . $__templater->fn('link', array('conversations/popup', ), true) . '"
								data-nocache="true"
								data-load-target=".js-convMenuBody">
								<div class="menu-content">
									<h3 class="menu-header">' . 'Conversations' . '</h3>
									<div class="js-convMenuBody">
										<div class="menu-row">' . 'Loading' . $__vars['xf']['language']['ellipsis'] . '</div>
									</div>
									<div class="menu-footer menu-footer--split">
										<span class="menu-footer-main">
											<a href="' . $__templater->fn('link', array('conversations', ), true) . '">' . 'Show all' . $__vars['xf']['language']['ellipsis'] . '</a>
										</span>
										';
			if ($__templater->method($__vars['xf']['visitor'], 'canStartConversation', array())) {
				$__finalCompiled .= '
											<span class="menu-footer-opposite">
												<a href="' . $__templater->fn('link', array('conversations/add', ), true) . '">' . 'Start a new conversation' . '</a>
											</span>
										';
			}
			$__finalCompiled .= '
									</div>
								</div>
							</div>

							<a href="' . $__templater->fn('link', array('account/alerts', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--alerts js-badge--alerts badgeContainer' . ($__vars['xf']['visitor']['alerts_unread'] ? ' badgeContainer--highlighted' : '') . '"
								data-badge="' . $__templater->filter($__vars['xf']['visitor']['alerts_unread'], array(array('number', array()),), true) . '"
								data-xf-click="menu"
								data-xf-key="' . $__templater->filter('.', array(array('for_attr', array()),), true) . '"
								data-menu-pos-ref="< .p-navgroup"
								aria-label="' . $__templater->filter('Alerts', array(array('for_attr', array()),), true) . '"
								aria-expanded="false"
								aria-haspopup="true">
								<i aria-hidden="true"></i>
								<span class="p-navgroup-linkText">' . '' . '</span>
							</a>
							<div class="menu menu--structural menu--medium" data-menu="menu" aria-hidden="true"
								data-href="' . $__templater->fn('link', array('account/alerts-popup', ), true) . '"
								data-nocache="true"
								data-load-target=".js-alertsMenuBody">
								<div class="menu-content">
									<h3 class="menu-header">' . 'Alerts' . '</h3>
									<div class="js-alertsMenuBody">
										<div class="menu-row">' . 'Loading' . $__vars['xf']['language']['ellipsis'] . '</div>
									</div>
									<div class="menu-footer menu-footer--split">
										<span class="menu-footer-main">
											<a href="' . $__templater->fn('link', array('account/alerts', ), true) . '">' . 'Show all' . $__vars['xf']['language']['ellipsis'] . '</a>
										</span>
										<span class="menu-footer-opposite">
											<a href="' . $__templater->fn('link', array('account/preferences', ), true) . '">' . 'Preferences' . '</a>
										</span>
									</div>
								</div>
							</div>
						';
		}
		$__finalCompiled .= '
					';
	} else {
		$__finalCompiled .= '
						<a href="' . $__templater->fn('link', array('login', ), true) . '" class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--logIn"
							data-xf-click="overlay" data-follow-redirects="on">
							<i aria-hidden="true"></i>
							<span class="p-navgroup-linkText">' . 'Log in' . '</span>
						</a>
						';
		if ($__vars['xf']['options']['registrationSetup']['enabled']) {
			$__finalCompiled .= '
							<a href="' . $__templater->fn('link', array('register', ), true) . '" class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--register"
								data-xf-click="overlay" data-follow-redirects="on">
								<i aria-hidden="true"></i>
								<span class="p-navgroup-linkText">' . 'Register' . '</span>
							</a>
						';
		}
		$__finalCompiled .= '
					';
	}
	$__finalCompiled .= '
				</div>

				<div class="p-navgroup p-discovery' . ((!$__templater->method($__vars['xf']['visitor'], 'canSearch', array())) ? ' p-discovery--noSearch' : '') . '">
					<a href="' . $__templater->fn('link', array('whats-new', ), true) . '"
						class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--whatsnew"
						aria-label="' . $__templater->filter('What\'s new', array(array('for_attr', array()),), true) . '"
						title="' . $__templater->filter('What\'s new', array(array('for_attr', array()),), true) . '">
						<i aria-hidden="true"></i>
						<span class="p-navgroup-linkText">' . 'What\'s new' . '</span>
					</a>

					';
	if ($__templater->method($__vars['xf']['visitor'], 'canSearch', array())) {
		$__finalCompiled .= '
						<a href="' . $__templater->fn('link', array('search', ), true) . '"
							class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--search"
							data-xf-click="menu"
							data-xf-key="' . $__templater->filter('/', array(array('for_attr', array()),), true) . '"
							aria-label="' . $__templater->filter('Search', array(array('for_attr', array()),), true) . '"
							aria-expanded="false"
							aria-haspopup="true"
							title="' . $__templater->filter('Search', array(array('for_attr', array()),), true) . '">
							<i aria-hidden="true"></i>
							<span class="p-navgroup-linkText">' . 'Search' . '</span>
						</a>
						<div class="menu menu--structural menu--wide" data-menu="menu" aria-hidden="true">
							<form action="' . $__templater->fn('link', array('search/search', ), true) . '" method="post"
								class="menu-content"
								data-xf-init="quick-search">

								<h3 class="menu-header">' . 'Search' . '</h3>
								' . '
								<div class="menu-row">
									';
		if ($__vars['searchConstraints']) {
			$__finalCompiled .= '
										<div class="inputGroup inputGroup--joined">
											' . $__templater->formTextBox(array(
				'name' => 'keywords',
				'placeholder' => 'Search' . $__vars['xf']['language']['ellipsis'],
				'aria-label' => 'Search',
				'data-menu-autofocus' => 'true',
			)) . '
											';
			$__compilerTemp3 = array(array(
				'value' => '',
				'label' => 'Everywhere',
				'_type' => 'option',
			));
			if ($__templater->isTraversable($__vars['searchConstraints'])) {
				foreach ($__vars['searchConstraints'] AS $__vars['constraintName'] => $__vars['constraint']) {
					$__compilerTemp3[] = array(
						'value' => $__templater->filter($__vars['constraint'], array(array('json', array()),), false),
						'label' => $__templater->escape($__vars['constraintName']),
						'_type' => 'option',
					);
				}
			}
			$__finalCompiled .= $__templater->formSelect(array(
				'name' => 'constraints',
				'class' => 'js-quickSearch-constraint',
				'aria-label' => 'Search within',
			), $__compilerTemp3) . '
										</div>
									';
		} else {
			$__finalCompiled .= '
										' . $__templater->formTextBox(array(
				'name' => 'keywords',
				'placeholder' => 'Search' . $__vars['xf']['language']['ellipsis'],
				'aria-label' => 'Search',
				'data-menu-autofocus' => 'true',
			)) . '
									';
		}
		$__finalCompiled .= '
								</div>

								' . '
								<div class="menu-row">
									' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'name' => 'c[title_only]',
			'label' => 'Search titles only',
			'_type' => 'option',
		))) . '
								</div>
								' . '
								<div class="menu-row">
									<div class="inputGroup">
										<span class="inputGroup-text" id="ctrl_search_menu_by_member">' . 'By' . $__vars['xf']['language']['label_separator'] . '</span>
										<input type="text" class="input" name="c[users]" data-xf-init="auto-complete" placeholder="' . $__templater->filter('Member', array(array('for_attr', array()),), true) . '" aria-labelledby="ctrl_search_menu_by_member" />
									</div>
								</div>
								<div class="menu-footer">
									<span class="menu-footer-controls">
										' . $__templater->button('', array(
			'type' => 'submit',
			'class' => 'button--primary',
			'icon' => 'search',
		), '', array(
		)) . '
										' . $__templater->button('Advanced search' . $__vars['xf']['language']['ellipsis'], array(
			'href' => $__templater->fn('link', array('search', ), false),
		), '', array(
		)) . '
									</span>
								</div>

								' . $__templater->fn('csrf_input') . '
							</form>
						</div>
					';
	}
	$__finalCompiled .= '
				</div>
			</div>
				
				<!-- end paste nav-group -->
				
			</div> <!-- end toplinks -->

			' . $__templater->callAdsMacro('container_header', array(), $__vars) . '
		</div>
	</div>
</header>

';
	$__compilerTemp4 = '';
	if ($__templater->fn('property', array('nlEnableTextLogo', ), false) == true) {
		$__compilerTemp4 .= '
						<div id="textLogo">
						<span class="txtLogo1">' . $__templater->fn('property', array('nlPrimaryLogoText', ), true) . '</span>
						';
		if ($__templater->fn('property', array('nlSecondaryLogoText', ), false) != null) {
			$__compilerTemp4 .= '<span class="txtLogo2">' . $__templater->fn('property', array('nlSecondaryLogoText', ), true) . '</span>';
		}
		$__compilerTemp4 .= '
						</div>
					';
	} else {
		$__compilerTemp4 .= '	
					<img src="' . $__templater->fn('base_url', array($__templater->fn('property', array('publicLogoUrl', ), false), ), true) . '"
						alt="' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '"
					' . ($__templater->fn('property', array('publicLogoUrl2x', ), false) ? (('srcset="' . $__templater->fn('base_url', array($__templater->fn('property', array('publicLogoUrl2x', ), false), ), true)) . ' 2x"') : '') . ' />
					';
	}
	$__compilerTemp5 = '';
	$__vars['i'] = 0;
	if ($__templater->isTraversable($__vars['navTree'])) {
		foreach ($__vars['navTree'] AS $__vars['navSection'] => $__vars['navEntry']) {
			if (($__vars['navSection'] != $__vars['xf']['app']['defaultNavigationId'])) {
				$__vars['i']++;
				$__compilerTemp5 .= '
						<li>
							' . $__templater->callMacro(null, 'nav_entry', array(
					'navId' => $__vars['navSection'],
					'nav' => $__vars['navEntry'],
					'selected' => ($__vars['navSection'] == $__vars['pageSection']),
					'shortcut' => $__vars['i'],
				), $__vars) . '
						</li>
					';
			}
		}
	}
	$__compilerTemp6 = '';
	if ($__vars['xf']['visitor']['user_id']) {
		$__compilerTemp6 .= '
						';
		if (($__vars['xf']['visitor']['user_state'] == 'rejected') OR ($__vars['xf']['visitor']['user_state'] == 'disabled')) {
			$__compilerTemp6 .= '
							<a href="' . $__templater->fn('link', array('account', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--user">
								' . $__templater->fn('avatar', array($__vars['xf']['visitor'], 'xxs', false, array(
				'href' => '',
			))) . '
								<span class="p-navgroup-linkText">' . $__templater->escape($__vars['xf']['visitor']['username']) . '</span>
							</a>

							<a href="' . $__templater->fn('link', array('logout', null, array('t' => $__templater->fn('csrf_token', array(), false), ), ), true) . '" class="p-navgroup-link">
								<span class="p-navgroup-linkText">' . 'Log out' . '</span>
							</a>
						';
		} else {
			$__compilerTemp6 .= '
							<a href="' . $__templater->fn('link', array('account', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--user"
								data-xf-click="menu"
								data-xf-key="' . $__templater->filter('m', array(array('for_attr', array()),), true) . '"
								data-menu-pos-ref="< .p-navgroup"
								aria-expanded="false"
								aria-haspopup="true">
								' . $__templater->fn('avatar', array($__vars['xf']['visitor'], 'xxs', false, array(
				'href' => '',
			))) . '
								<span class="p-navgroup-linkText">' . $__templater->escape($__vars['xf']['visitor']['username']) . '</span>
							</a>
							<div class="menu menu--structural menu--wide menu--account" data-menu="menu" aria-hidden="true"
								data-href="' . $__templater->fn('link', array('account/visitor-menu', ), true) . '"
								data-load-target=".js-visitorMenuBody">
								<div class="menu-content js-visitorMenuBody">
									<div class="menu-row">
										' . 'Loading' . $__vars['xf']['language']['ellipsis'] . '
									</div>
								</div>
							</div>

							<a href="' . $__templater->fn('link', array('conversations', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--conversations js-badge--conversations badgeContainer' . ($__vars['xf']['visitor']['conversations_unread'] ? ' badgeContainer--highlighted' : '') . '"
								data-badge="' . $__templater->filter($__vars['xf']['visitor']['conversations_unread'], array(array('number', array()),), true) . '"
								data-xf-click="menu"
								data-xf-key="' . $__templater->filter(',', array(array('for_attr', array()),), true) . '"
								data-menu-pos-ref="< .p-navgroup"
								aria-label="' . $__templater->filter('Inbox', array(array('for_attr', array()),), true) . '"
								aria-expanded="false"
								aria-haspopup="true">
								<i aria-hidden="true"></i>
								<span class="p-navgroup-linkText">' . '' . '</span>
							</a>
							<div class="menu menu--structural menu--medium" data-menu="menu" aria-hidden="true"
								data-href="' . $__templater->fn('link', array('conversations/popup', ), true) . '"
								data-nocache="true"
								data-load-target=".js-convMenuBody">
								<div class="menu-content">
									<h3 class="menu-header">' . 'Conversations' . '</h3>
									<div class="js-convMenuBody">
										<div class="menu-row">' . 'Loading' . $__vars['xf']['language']['ellipsis'] . '</div>
									</div>
									<div class="menu-footer menu-footer--split">
										<span class="menu-footer-main">
											<a href="' . $__templater->fn('link', array('conversations', ), true) . '">' . 'Show all' . $__vars['xf']['language']['ellipsis'] . '</a>
										</span>
										';
			if ($__templater->method($__vars['xf']['visitor'], 'canStartConversation', array())) {
				$__compilerTemp6 .= '
											<span class="menu-footer-opposite">
												<a href="' . $__templater->fn('link', array('conversations/add', ), true) . '">' . 'Start a new conversation' . '</a>
											</span>
										';
			}
			$__compilerTemp6 .= '
									</div>
								</div>
							</div>

							<a href="' . $__templater->fn('link', array('account/alerts', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--alerts js-badge--alerts badgeContainer' . ($__vars['xf']['visitor']['alerts_unread'] ? ' badgeContainer--highlighted' : '') . '"
								data-badge="' . $__templater->filter($__vars['xf']['visitor']['alerts_unread'], array(array('number', array()),), true) . '"
								data-xf-click="menu"
								data-xf-key="' . $__templater->filter('.', array(array('for_attr', array()),), true) . '"
								data-menu-pos-ref="< .p-navgroup"
								aria-label="' . $__templater->filter('Alerts', array(array('for_attr', array()),), true) . '"
								aria-expanded="false"
								aria-haspopup="true">
								<i aria-hidden="true"></i>
								<span class="p-navgroup-linkText">' . '' . '</span>
							</a>
							<div class="menu menu--structural menu--medium" data-menu="menu" aria-hidden="true"
								data-href="' . $__templater->fn('link', array('account/alerts-popup', ), true) . '"
								data-nocache="true"
								data-load-target=".js-alertsMenuBody">
								<div class="menu-content">
									<h3 class="menu-header">' . 'Alerts' . '</h3>
									<div class="js-alertsMenuBody">
										<div class="menu-row">' . 'Loading' . $__vars['xf']['language']['ellipsis'] . '</div>
									</div>
									<div class="menu-footer menu-footer--split">
										<span class="menu-footer-main">
											<a href="' . $__templater->fn('link', array('account/alerts', ), true) . '">' . 'Show all' . $__vars['xf']['language']['ellipsis'] . '</a>
										</span>
										<span class="menu-footer-opposite">
											<a href="' . $__templater->fn('link', array('account/preferences', ), true) . '">' . 'Preferences' . '</a>
										</span>
									</div>
								</div>
							</div>
						';
		}
		$__compilerTemp6 .= '
					';
	} else {
		$__compilerTemp6 .= '
						<a href="' . $__templater->fn('link', array('login', ), true) . '" class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--logIn"
							data-xf-click="overlay" data-follow-redirects="on">
							<i aria-hidden="true"></i>
							<span class="p-navgroup-linkText">' . 'Log in' . '</span>
						</a>
						';
		if ($__vars['xf']['options']['registrationSetup']['enabled']) {
			$__compilerTemp6 .= '
							<a href="' . $__templater->fn('link', array('register', ), true) . '" class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--register"
								data-xf-click="overlay" data-follow-redirects="on">
								<i aria-hidden="true"></i>
								<span class="p-navgroup-linkText">' . 'Register' . '</span>
							</a>
						';
		}
		$__compilerTemp6 .= '
					';
	}
	$__compilerTemp7 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canSearch', array())) {
		$__compilerTemp7 .= '
						<a href="' . $__templater->fn('link', array('search', ), true) . '"
							class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--search"
							data-xf-click="menu"
							data-xf-key="' . $__templater->filter('/', array(array('for_attr', array()),), true) . '"
							aria-label="' . $__templater->filter('Search', array(array('for_attr', array()),), true) . '"
							aria-expanded="false"
							aria-haspopup="true"
							title="' . $__templater->filter('Search', array(array('for_attr', array()),), true) . '">
							<i aria-hidden="true"></i>
							<span class="p-navgroup-linkText">' . 'Search' . '</span>
						</a>
						<div class="menu menu--structural menu--wide" data-menu="menu" aria-hidden="true">
							<form action="' . $__templater->fn('link', array('search/search', ), true) . '" method="post"
								class="menu-content"
								data-xf-init="quick-search">

								<h3 class="menu-header">' . 'Search' . '</h3>
								' . '
								<div class="menu-row">
									';
		if ($__vars['searchConstraints']) {
			$__compilerTemp7 .= '
										<div class="inputGroup inputGroup--joined">
											' . $__templater->formTextBox(array(
				'name' => 'keywords',
				'placeholder' => '&#xF002;',
				'aria-label' => 'Search',
				'data-menu-autofocus' => 'true',
			)) . '
											';
			$__compilerTemp8 = array(array(
				'value' => '',
				'label' => 'Everywhere',
				'_type' => 'option',
			));
			if ($__templater->isTraversable($__vars['searchConstraints'])) {
				foreach ($__vars['searchConstraints'] AS $__vars['constraintName'] => $__vars['constraint']) {
					$__compilerTemp8[] = array(
						'value' => $__templater->filter($__vars['constraint'], array(array('json', array()),), false),
						'label' => $__templater->escape($__vars['constraintName']),
						'_type' => 'option',
					);
				}
			}
			$__compilerTemp7 .= $__templater->formSelect(array(
				'name' => 'constraints',
				'class' => 'js-quickSearch-constraint',
				'aria-label' => 'Search within',
			), $__compilerTemp8) . '
										</div>
									';
		} else {
			$__compilerTemp7 .= '
										' . $__templater->formTextBox(array(
				'name' => 'keywords',
				'placeholder' => 'Search' . $__vars['xf']['language']['ellipsis'],
				'aria-label' => 'Search',
				'data-menu-autofocus' => 'true',
			)) . '
									';
		}
		$__compilerTemp7 .= '
								</div>

								' . '
								<div class="menu-row">
									' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'name' => 'c[title_only]',
			'label' => 'Search titles only',
			'_type' => 'option',
		))) . '
								</div>
								' . '
								<div class="menu-row">
									<div class="inputGroup">
										<span class="inputGroup-text" id="ctrl_search_menu_by_member">' . 'By' . $__vars['xf']['language']['label_separator'] . '</span>
										<input type="text" class="input" name="c[users]" data-xf-init="auto-complete" placeholder="' . $__templater->filter('Member', array(array('for_attr', array()),), true) . '" aria-labelledby="ctrl_search_menu_by_member" />
									</div>
								</div>
								<div class="menu-footer">
									<span class="menu-footer-controls">
										' . $__templater->button('', array(
			'type' => 'submit',
			'class' => 'button--primary',
			'icon' => 'search',
		), '', array(
		)) . '
										' . $__templater->button('Advanced search' . $__vars['xf']['language']['ellipsis'], array(
			'href' => $__templater->fn('link', array('search', ), false),
		), '', array(
		)) . '
									</span>
								</div>

								' . $__templater->fn('csrf_input') . '
							</form>
						</div>
					';
	}
	$__vars['navHtml'] = $__templater->preEscaped('
	<nav class="p-nav">
		<div class="p-nav-inner">
			<a class="p-nav-menuTrigger" data-xf-click="off-canvas" data-menu=".js-headerOffCanvasMenu" role="button" tabindex="0">
				<i aria-hidden="true"></i>
				<span class="p-nav-menuText">' . 'Menu' . '</span>
			</a>

			<div class="p-nav-smallLogo">
				<a href="' . (($__vars['xf']['options']['logoLink'] AND $__vars['xf']['homePageUrl']) ? $__templater->escape($__vars['xf']['homePageUrl']) : $__templater->fn('link', array('index', ), true)) . '">
					' . $__compilerTemp4 . '
				</a>
			</div>

			<div class="p-nav-scroller hScroller" data-xf-init="h-scroller" data-auto-scroll=".p-navEl.is-selected">
				<div class="hScroller-scroll">
					<ul class="p-nav-list js-offCanvasNavSource">
					' . $__compilerTemp5 . '
					</ul>
				</div>
			</div>

			<div class="p-nav-opposite">
				<div class="p-navgroup p-account ' . ($__vars['xf']['visitor']['user_id'] ? 'p-navgroup--member' : 'p-navgroup--guest') . '">
					' . $__compilerTemp6 . '
				</div>

				<div class="p-navgroup p-discovery' . ((!$__templater->method($__vars['xf']['visitor'], 'canSearch', array())) ? ' p-discovery--noSearch' : '') . '">
					<a href="' . $__templater->fn('link', array('whats-new', ), true) . '"
						class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--whatsnew"
						aria-label="' . $__templater->filter('What\'s new', array(array('for_attr', array()),), true) . '"
						title="' . $__templater->filter('What\'s new', array(array('for_attr', array()),), true) . '">
						<i aria-hidden="true"></i>
						<span class="p-navgroup-linkText">' . 'What\'s new' . '</span>
					</a>

					' . $__compilerTemp7 . '
				</div>
			</div>
		</div>
	</nav>
');
	$__finalCompiled .= '
';
	$__compilerTemp9 = '';
	if (!$__templater->test($__vars['selectedNavChildren'], 'empty', array())) {
		$__compilerTemp9 .= '
		<div class="p-sectionLinks">
			<div class="p-sectionLinks-inner hScroller" data-xf-init="h-scroller">
				<div class="hScroller-scroll">
					<ul class="p-sectionLinks-list">
					';
		$__vars['i'] = 0;
		if ($__templater->isTraversable($__vars['selectedNavChildren'])) {
			foreach ($__vars['selectedNavChildren'] AS $__vars['navId'] => $__vars['navEntry']) {
				$__vars['i']++;
				$__compilerTemp9 .= '
						<li>
							' . $__templater->callMacro(null, 'nav_entry', array(
					'navId' => $__vars['navId'],
					'nav' => $__vars['navEntry'],
					'shortcut' => 'alt+' . $__vars['i'],
				), $__vars) . '
						</li>
					';
			}
		}
		$__compilerTemp9 .= '
					</ul>
				</div>
			</div>
		</div>
	';
	} else if ($__vars['selectedNavEntry']) {
		$__compilerTemp9 .= '
		<div class="p-sectionLinks p-sectionLinks--empty"></div>
	';
	}
	$__vars['subNavHtml'] = $__templater->preEscaped('
	' . $__compilerTemp9 . '
');
	$__finalCompiled .= '

';
	if ($__templater->fn('property', array('publicNavSticky', ), false) == 'primary') {
		$__finalCompiled .= '
	<div class="p-navSticky p-navSticky--primary p-navController" data-xf-init="sticky-header">
		' . $__templater->filter($__vars['navHtml'], array(array('raw', array()),), true) . '
	</div>
	' . $__templater->filter($__vars['subNavHtml'], array(array('raw', array()),), true) . '
';
	} else if ($__templater->fn('property', array('publicNavSticky', ), false) == 'all') {
		$__finalCompiled .= '
	<div class="p-navSticky p-navSticky--all p-navController" data-xf-init="sticky-header">
		' . $__templater->filter($__vars['navHtml'], array(array('raw', array()),), true) . '
		' . $__templater->filter($__vars['subNavHtml'], array(array('raw', array()),), true) . '
	</div>
';
	} else {
		$__finalCompiled .= '
	<div class="p-navController">
		' . $__templater->filter($__vars['navHtml'], array(array('raw', array()),), true) . '
		' . $__templater->filter($__vars['subNavHtml'], array(array('raw', array()),), true) . '
	</div>
';
	}
	$__finalCompiled .= '

<div class="offCanvasMenu offCanvasMenu--nav js-headerOffCanvasMenu" data-menu="menu" aria-hidden="true" data-ocm-builder="navigation">
	<div class="offCanvasMenu-backdrop" data-menu-close="true"></div>
	<div class="offCanvasMenu-content">
		<div class="offCanvasMenu-header">
			' . 'Menu' . '
			<a class="offCanvasMenu-closer" data-menu-close="true" role="button" tabindex="0" aria-label="' . $__templater->filter('Close', array(array('for_attr', array()),), true) . '"></a>
		</div>
		';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
			<div class="p-offCanvasAccountLink">
				<div class="offCanvasMenu-linkHolder">
					<a href="' . $__templater->fn('link', array('account', ), true) . '" class="offCanvasMenu-link">
						' . $__templater->fn('avatar', array($__vars['xf']['visitor'], 'xxs', false, array(
			'href' => '',
		))) . '
						' . $__templater->escape($__vars['xf']['visitor']['username']) . '
					</a>
				</div>
				<hr class="offCanvasMenu-separator" />
			</div>
		';
	} else {
		$__finalCompiled .= '
			<div class="p-offCanvasRegisterLink">
				<div class="offCanvasMenu-linkHolder">
					<a href="' . $__templater->fn('link', array('login', ), true) . '" class="offCanvasMenu-link" data-xf-click="overlay" data-menu-close="true">
						' . 'Log in' . '
					</a>
				</div>
				<hr class="offCanvasMenu-separator" />
				';
		if ($__vars['xf']['options']['registrationSetup']['enabled']) {
			$__finalCompiled .= '
					<div class="offCanvasMenu-linkHolder">
						<a href="' . $__templater->fn('link', array('register', ), true) . '" class="offCanvasMenu-link" data-xf-click="overlay" data-menu-close="true">
							' . 'Register' . '
						</a>
					</div>
					<hr class="offCanvasMenu-separator" />
				';
		}
		$__finalCompiled .= '
			</div>
		';
	}
	$__finalCompiled .= '
		<div class="js-offCanvasNavTarget"></div>
	</div>
</div>
	
';
	if (($__templater->fn('property', array('nlPageTitleLayout', ), false) == 'welcome') AND (!(($__templater->fn('property', array('nlPageHeaderHideForumList', ), false) == true) AND ($__vars['template'] == 'forum_list')) OR (($__templater->fn('property', array('nlPageHeaderHideXenPorta', ), false) == true) AND ($__vars['template'] == 'EWRporta_articles_index')))) {
		$__finalCompiled .= '
';
		$__compilerTemp10 = '';
		$__compilerTemp10 .= '
		';
		$__compilerTemp11 = '';
		$__compilerTemp11 .= '
				';
		$__compilerTemp12 = '';
		$__compilerTemp12 .= '
						';
		if (!$__vars['noH1']) {
			$__compilerTemp12 .= '
							<h1 class="p-title-value">' . $__templater->escape($__vars['h1']) . '</h1>
						';
		}
		$__compilerTemp12 .= '
					';
		if (strlen(trim($__compilerTemp12)) > 0) {
			$__compilerTemp11 .= '
					<div class="p-title ' . ($__vars['noH1'] ? 'p-title--noH1' : '') . '">
					' . $__compilerTemp12 . '
					</div>
				';
		}
		$__compilerTemp11 .= '

				';
		if (!$__templater->test($__vars['description'], 'empty', array())) {
			$__compilerTemp11 .= '
					<div class="p-description">' . $__templater->escape($__vars['description']) . '</div>
				';
		}
		$__compilerTemp11 .= '
			';
		if (!$__templater->test($__vars['headerHtml'], 'empty', array())) {
			$__compilerTemp10 .= '
			<div class="p-body-header">
				' . $__templater->filter($__vars['headerHtml'], array(array('raw', array()),), true) . '
			</div>
		';
		} else if (strlen(trim($__compilerTemp11)) > 0) {
			$__compilerTemp10 .= '
			<div class="p-body-header">
			' . $__compilerTemp11 . '
			</div>
		';
		}
		$__compilerTemp10 .= '
		
		' . $__templater->callMacro(null, 'breadcrumbs', array(
			'breadcrumbs' => $__vars['breadcrumbs'],
			'navTree' => $__vars['navTree'],
			'selectedNavEntry' => $__vars['selectedNavEntry'],
		), $__vars) . '
		';
		if (strlen(trim($__compilerTemp10)) > 0) {
			$__finalCompiled .= '
	<div class="p-page-header">
	<div class="p-page-header-inner flex f-v-stretch">
		' . $__compilerTemp10 . '
	</div>
</div>
';
		}
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

<div class="p-body">
	<div class="page_top">
	<div class="page_bot">
	<div class="p-body-inner">
		<!--XF:EXTRA_OUTPUT-->
		
		' . $__templater->callMacro('nl_theme_hooks', 'above_body_below_nav', array(
		'template' => $__vars['template'],
	), $__vars) . '
		' . $__templater->callMacro('nl_helper_macros', 'above_body_wide', array(
		'template' => $__vars['template'],
	), $__vars) . '
		
		';
	if ($__vars['notices']['block']) {
		$__finalCompiled .= '
			' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'block',
			'notices' => $__vars['notices']['block'],
		), $__vars) . '
		';
	}
	$__finalCompiled .= '

		';
	if ($__vars['notices']['scrolling']) {
		$__finalCompiled .= '
			' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'scrolling',
			'notices' => $__vars['notices']['scrolling'],
		), $__vars) . '
		';
	}
	$__finalCompiled .= '

		' . $__templater->callAdsMacro('container_breadcrumb_top_above', array(), $__vars) . '
		';
	if ($__templater->fn('property', array('nlPageTitleLayout', ), false) == 'default') {
		$__finalCompiled .= '
		' . $__templater->callMacro(null, 'breadcrumbs', array(
			'breadcrumbs' => $__vars['breadcrumbs'],
			'navTree' => $__vars['navTree'],
			'selectedNavEntry' => $__vars['selectedNavEntry'],
		), $__vars) . '
		';
	}
	$__finalCompiled .= '
		' . $__templater->callAdsMacro('container_breadcrumb_top_below', array(), $__vars) . '

		' . $__templater->callMacro('browser_warning_macros', 'javascript', array(), $__vars) . '
		' . $__templater->callMacro('browser_warning_macros', 'browser', array(), $__vars) . '

		';
	if ($__templater->fn('property', array('nlPageTitleLayout', ), false) == 'default') {
		$__finalCompiled .= '
			';
		$__compilerTemp13 = '';
		$__compilerTemp13 .= '
					';
		$__compilerTemp14 = '';
		$__compilerTemp14 .= '
							';
		if (!$__vars['noH1']) {
			$__compilerTemp14 .= '
								<h1 class="p-title-value">' . $__templater->escape($__vars['h1']) . '</h1>
							';
		}
		$__compilerTemp14 .= '
							';
		$__compilerTemp15 = '';
		$__compilerTemp15 .= (isset($__templater->pageParams['pageAction']) ? $__templater->pageParams['pageAction'] : '');
		if (strlen(trim($__compilerTemp15)) > 0) {
			$__compilerTemp14 .= '
								<div class="p-title-pageAction">' . $__compilerTemp15 . '</div>
							';
		}
		$__compilerTemp14 .= '
						';
		if (strlen(trim($__compilerTemp14)) > 0) {
			$__compilerTemp13 .= '
						<div class="p-title ' . ($__vars['noH1'] ? 'p-title--noH1' : '') . '">
						' . $__compilerTemp14 . '
						</div>
					';
		}
		$__compilerTemp13 .= '

					';
		if (!$__templater->test($__vars['description'], 'empty', array())) {
			$__compilerTemp13 .= '
						<div class="p-description">' . $__templater->escape($__vars['description']) . '</div>
					';
		}
		$__compilerTemp13 .= '
				';
		if (!$__templater->test($__vars['headerHtml'], 'empty', array())) {
			$__finalCompiled .= '
				<div class="p-body-header">
					' . $__templater->filter($__vars['headerHtml'], array(array('raw', array()),), true) . '
				</div>
			';
		} else if (strlen(trim($__compilerTemp13)) > 0) {
			$__finalCompiled .= '
				<div class="p-body-header">
				' . $__compilerTemp13 . '
				</div>
			';
		}
		$__finalCompiled .= '
		';
	}
	$__finalCompiled .= '

		<div class="p-body-main ' . ($__vars['sidebar'] ? 'p-body-main--withSidebar' : '') . ' ' . ($__vars['sideNav'] ? 'p-body-main--withSideNav' : '') . '">
			';
	if ($__vars['sideNav']) {
		$__finalCompiled .= '
				<div class="p-body-sideNav">
					<div class="p-body-sideNavTrigger">
						' . $__templater->button('
							' . ($__templater->escape($__vars['sideNavTitle']) ?: 'Navigation') . '
						', array(
			'class' => 'button--link',
			'data-xf-click' => 'off-canvas',
			'data-menu' => '#js-SideNavOcm',
		), '', array(
		)) . '
					</div>
					<div class="p-body-sideNavInner" data-ocm-class="offCanvasMenu offCanvasMenu--blocks" id="js-SideNavOcm" data-ocm-builder="sideNav">
						<div data-ocm-class="offCanvasMenu-backdrop" data-menu-close="true"></div>
						<div data-ocm-class="offCanvasMenu-content">
							<div class="p-body-sideNavContent">
								' . $__templater->callAdsMacro('container_sidenav_above', array(), $__vars) . '
								';
		if ($__templater->isTraversable($__vars['sideNav'])) {
			foreach ($__vars['sideNav'] AS $__vars['sideNavHtml']) {
				$__finalCompiled .= '
									' . $__templater->escape($__vars['sideNavHtml']) . '
								';
			}
		}
		$__finalCompiled .= '
								' . $__templater->callAdsMacro('container_sidenav_below', array(), $__vars) . '
							</div>
						</div>
					</div>
				</div>
			';
	}
	$__finalCompiled .= '

			<div class="p-body-content">
				
				';
	if ($__templater->fn('property', array('nlPageTitleLayout', ), false) == 'aside') {
		$__finalCompiled .= '
					' . $__templater->callMacro(null, 'breadcrumbs', array(
			'breadcrumbs' => $__vars['breadcrumbs'],
			'navTree' => $__vars['navTree'],
			'selectedNavEntry' => $__vars['selectedNavEntry'],
		), $__vars) . '

					';
		$__compilerTemp16 = '';
		$__compilerTemp16 .= '
							';
		$__compilerTemp17 = '';
		$__compilerTemp17 .= '
									';
		if (!$__vars['noH1']) {
			$__compilerTemp17 .= '
										<h1 class="p-title-value">' . $__templater->escape($__vars['h1']) . '</h1>
									';
		}
		$__compilerTemp17 .= '
									';
		$__compilerTemp18 = '';
		$__compilerTemp18 .= (isset($__templater->pageParams['pageAction']) ? $__templater->pageParams['pageAction'] : '');
		if (strlen(trim($__compilerTemp18)) > 0) {
			$__compilerTemp17 .= '
										<div class="p-title-pageAction">' . $__compilerTemp18 . '</div>
									';
		}
		$__compilerTemp17 .= '
								';
		if (strlen(trim($__compilerTemp17)) > 0) {
			$__compilerTemp16 .= '
								<div class="p-title ' . ($__vars['noH1'] ? 'p-title--noH1' : '') . '">
								' . $__compilerTemp17 . '
								</div>
							';
		}
		$__compilerTemp16 .= '

							';
		if (!$__templater->test($__vars['description'], 'empty', array())) {
			$__compilerTemp16 .= '
								<div class="p-description">' . $__templater->escape($__vars['description']) . '</div>
							';
		}
		$__compilerTemp16 .= '
						';
		if (!$__templater->test($__vars['headerHtml'], 'empty', array())) {
			$__finalCompiled .= '
						<div class="p-body-header">
							' . $__templater->filter($__vars['headerHtml'], array(array('raw', array()),), true) . '
						</div>
					';
		} else if (strlen(trim($__compilerTemp16)) > 0) {
			$__finalCompiled .= '
						<div class="p-body-header">
						' . $__compilerTemp16 . '
						</div>
					';
		}
		$__finalCompiled .= '
				';
	} else if (($__templater->fn('property', array('nlPageTitleLayout', ), false) == 'welcome') AND (!(($__templater->fn('property', array('nlPageHeaderHideForumList', ), false) == true) AND ($__vars['template'] == 'forum_list')) OR (($__templater->fn('property', array('nlPageHeaderHideXenPorta', ), false) == true) AND ($__vars['template'] == 'EWRporta_articles_index')))) {
		$__finalCompiled .= '
					';
		$__compilerTemp19 = '';
		$__compilerTemp19 .= (isset($__templater->pageParams['pageAction']) ? $__templater->pageParams['pageAction'] : '');
		if (strlen(trim($__compilerTemp19)) > 0) {
			$__finalCompiled .= '
						<div class="p-body-header">
							<div class="p-title-pageAction">' . $__compilerTemp19 . '</div>
						</div>
					';
		}
		$__finalCompiled .= '
				';
	} else if (($__templater->fn('property', array('nlPageTitleLayout', ), false) == 'welcome') AND ((($__templater->fn('property', array('nlPageHeaderHideForumList', ), false) == true) AND ($__vars['template'] == 'forum_list')) OR (($__templater->fn('property', array('nlPageHeaderHideXenPorta', ), false) == true) AND ($__vars['template'] == 'EWRporta_articles_index')))) {
		$__finalCompiled .= '
					' . $__templater->callMacro(null, 'breadcrumbs', array(
			'breadcrumbs' => $__vars['breadcrumbs'],
			'navTree' => $__vars['navTree'],
			'selectedNavEntry' => $__vars['selectedNavEntry'],
		), $__vars) . '

					';
		$__compilerTemp20 = '';
		$__compilerTemp20 .= '
							';
		$__compilerTemp21 = '';
		$__compilerTemp21 .= '
									';
		if (!$__vars['noH1']) {
			$__compilerTemp21 .= '
										<h1 class="p-title-value">' . $__templater->escape($__vars['h1']) . '</h1>
									';
		}
		$__compilerTemp21 .= '
									';
		$__compilerTemp22 = '';
		$__compilerTemp22 .= (isset($__templater->pageParams['pageAction']) ? $__templater->pageParams['pageAction'] : '');
		if (strlen(trim($__compilerTemp22)) > 0) {
			$__compilerTemp21 .= '
										<div class="p-title-pageAction">' . $__compilerTemp22 . '</div>
									';
		}
		$__compilerTemp21 .= '
								';
		if (strlen(trim($__compilerTemp21)) > 0) {
			$__compilerTemp20 .= '
								<div class="p-title ' . ($__vars['noH1'] ? 'p-title--noH1' : '') . '">
								' . $__compilerTemp21 . '
								</div>
							';
		}
		$__compilerTemp20 .= '

							';
		if (!$__templater->test($__vars['description'], 'empty', array())) {
			$__compilerTemp20 .= '
								<div class="p-description">' . $__templater->escape($__vars['description']) . '</div>
							';
		}
		$__compilerTemp20 .= '
						';
		if (!$__templater->test($__vars['headerHtml'], 'empty', array())) {
			$__finalCompiled .= '
						<div class="p-body-header">
							' . $__templater->filter($__vars['headerHtml'], array(array('raw', array()),), true) . '
						</div>
					';
		} else if (strlen(trim($__compilerTemp20)) > 0) {
			$__finalCompiled .= '
						<div class="p-body-header">
						' . $__compilerTemp20 . '
						</div>
					';
		}
		$__finalCompiled .= '
				';
	}
	$__finalCompiled .= '
				' . $__templater->callAdsMacro('container_content_above', array(), $__vars) . '
				<div class="p-body-pageContent">
					' . $__templater->callMacro('nl_helper_macros', 'above_content_narrow', array(
		'template' => $__vars['template'],
	), $__vars) . '
					' . $__templater->filter($__vars['content'], array(array('raw', array()),), true) . '
					' . $__templater->callMacro('nl_helper_macros', 'below_content_narrow', array(
		'template' => $__vars['template'],
	), $__vars) . '
				</div>
				' . $__templater->callAdsMacro('container_content_below', array(), $__vars) . '
			</div>

			';
	if ($__vars['sidebar']) {
		$__finalCompiled .= '
				<div class="p-body-sidebar">
					' . $__templater->callAdsMacro('container_sidebar_above', array(), $__vars) . '
					';
		if ($__templater->isTraversable($__vars['sidebar'])) {
			foreach ($__vars['sidebar'] AS $__vars['sidebarHtml']) {
				$__finalCompiled .= '
						' . $__templater->escape($__vars['sidebarHtml']) . '
					';
			}
		}
		$__finalCompiled .= '
					' . $__templater->callAdsMacro('container_sidebar_below', array(), $__vars) . '
				</div>
			';
	}
	$__finalCompiled .= '
		</div>

		' . $__templater->callAdsMacro('container_breadcrumb_bottom_above', array(), $__vars) . '
		';
	if ($__templater->fn('property', array('nlHideBottomBreadcrumb', ), false) == false) {
		$__finalCompiled .= '
		' . $__templater->callMacro(null, 'breadcrumbs', array(
			'breadcrumbs' => $__vars['breadcrumbs'],
			'navTree' => $__vars['navTree'],
			'selectedNavEntry' => $__vars['selectedNavEntry'],
			'variant' => 'bottom',
		), $__vars) . '
		';
	}
	$__finalCompiled .= '
		' . $__templater->callAdsMacro('container_breadcrumb_bottom_below', array(), $__vars) . '		
		
		' . $__templater->callMacro('nl_helper_macros', 'below_body_wide', array(
		'template' => $__vars['template'],
	), $__vars) . '
		
	</div>
	</div> <!-- end page bottom -->
	</div> <!-- end page top -->
	' . $__templater->callMacro('nl_helper_macros', 'below_body', array(
		'template' => $__vars['template'],
	), $__vars) . '
</div>
' . $__templater->callMacro('nl_helper_macros', 'between_footer', array(
		'template' => $__vars['template'],
	), $__vars) . '
<footer class="p-footer" id="footer">
	<div class="p-footer-wrapper">
		
		<!-- custom -->
		<div class="p-footer-sub">
		<div class="p-footer-content">
		<div id="fbar"><a href="#top" onclick="self.scrollTo(0, 0); return false;">&nbsp;</a></div>
		<!-- end custom -->
			
		';
	if ($__templater->fn('property', array('nlFooterLinksBarPosition', ), false) == 'default') {
		$__finalCompiled .= '
		' . $__templater->callMacro('nl_helper_macros', 'above_footer_links', array(
			'template' => $__vars['template'],
		), $__vars) . '
		' . $__templater->callMacro('nl_theme_hooks', 'above_footer_links', array(
			'template' => $__vars['template'],
		), $__vars) . '
		<div class="p-footer-row linksContainer">
			<div class="p-footer-inner">
				
				';
		$__compilerTemp23 = '';
		$__compilerTemp23 .= '
							';
		if ($__templater->method($__vars['xf']['visitor'], 'canChangeStyle', array())) {
			$__compilerTemp23 .= '
								<li><a href="' . $__templater->fn('link', array('misc/style', ), true) . '" data-xf-click="overlay"
									data-xf-init="tooltip" title="' . $__templater->filter('Style chooser', array(array('for_attr', array()),), true) . '" rel="nofollow">
									' . $__templater->fontAwesome('fa-paint-brush', array(
			)) . ' ' . $__templater->escape($__vars['xf']['style']['title']) . '
								</a></li>
							';
		}
		$__compilerTemp23 .= '
							';
		if ($__templater->method($__vars['xf']['visitor'], 'canChangeLanguage', array())) {
			$__compilerTemp23 .= '
								<li><a href="' . $__templater->fn('link', array('misc/language', ), true) . '" data-xf-click="overlay"
									data-xf-init="tooltip" title="' . $__templater->filter('Language chooser', array(array('for_attr', array()),), true) . '" rel="nofollow">
									' . $__templater->fontAwesome('fa-globe', array(
			)) . ' ' . $__templater->escape($__vars['xf']['language']['title']) . '</a></li>
							';
		}
		$__compilerTemp23 .= '
						';
		if (strlen(trim($__compilerTemp23)) > 0) {
			$__finalCompiled .= '
					<div class="p-footer-row-main">
						<ul class="p-footer-linkList">
						' . $__compilerTemp23 . '
						</ul>
					</div>
				';
		}
		$__finalCompiled .= '
				<div class="p-footer-row-opposite">
					<ul class="p-footer-linkList">
						';
		if ($__templater->method($__vars['xf']['visitor'], 'canUseContactForm', array())) {
			$__finalCompiled .= '
							';
			if ($__vars['xf']['contactUrl']) {
				$__finalCompiled .= '
								<li><a href="' . $__templater->escape($__vars['xf']['contactUrl']) . '" data-xf-click="' . (($__vars['xf']['options']['contactUrl']['overlay'] OR ($__vars['xf']['options']['contactUrl']['type'] == 'default')) ? 'overlay' : '') . '">' . 'Contact us' . '</a></li>
							';
			}
			$__finalCompiled .= '
						';
		}
		$__finalCompiled .= '

						';
		if ($__vars['xf']['tosUrl']) {
			$__finalCompiled .= '
							<li><a href="' . $__templater->escape($__vars['xf']['tosUrl']) . '">' . 'Terms and rules' . '</a></li>
						';
		}
		$__finalCompiled .= '

						';
		if ($__vars['xf']['privacyPolicyUrl']) {
			$__finalCompiled .= '
							<li><a href="' . $__templater->escape($__vars['xf']['privacyPolicyUrl']) . '">' . 'Privacy policy' . '</a></li>
						';
		}
		$__finalCompiled .= '

						';
		if ($__vars['xf']['helpPageCount']) {
			$__finalCompiled .= '
							<li><a href="' . $__templater->fn('link', array('help', ), true) . '">' . 'Help' . '</a></li>
						';
		}
		$__finalCompiled .= '

						';
		if ($__vars['xf']['homePageUrl']) {
			$__finalCompiled .= '
							<li><a href="' . $__templater->escape($__vars['xf']['homePageUrl']) . '">' . 'Home' . '</a></li>
						';
		}
		$__finalCompiled .= '

						<li><a href="' . $__templater->fn('link', array('forums/index.rss', '-', ), true) . '" target="_blank" class="p-footer-rssLink" title="' . $__templater->filter('RSS', array(array('for_attr', array()),), true) . '"><span aria-hidden="true">' . $__templater->fontAwesome('fa-rss', array(
		)) . '<span class="u-srOnly">' . 'RSS' . '</span></span></a></li>
					</ul>
				</div>
			</div>
		</div>
		' . $__templater->callMacro('nl_helper_macros', 'below_footer_links', array(
			'template' => $__vars['template'],
		), $__vars) . '
		' . $__templater->callMacro('nl_theme_hooks', 'below_footer_links', array(
			'template' => $__vars['template'],
		), $__vars) . '
		';
	}
	$__finalCompiled .= '

		<!-- custom copyright -->
		';
	$__compilerTemp24 = '';
	$__compilerTemp24 .= '
						' . $__templater->fn('copyright') . '
						' . '' . '
					';
	if (strlen(trim($__compilerTemp24)) > 0) {
		$__finalCompiled .= '
			<div class="p-footer-row copyrightContainer">
				<div class="p-footer-inner">
					<div class="p-footer-copyright">
					' . $__compilerTemp24 . '
					</div>
					';
		$__compilerTemp25 = '';
		$__compilerTemp25 .= '
							' . $__templater->callMacro('debug_macros', 'debug', array(
			'controller' => $__vars['controller'],
			'action' => $__vars['actionMethod'],
			'template' => $__vars['template'],
		), $__vars) . '
						';
		if (strlen(trim($__compilerTemp25)) > 0) {
			$__finalCompiled .= '
						<div class="p-footer-debug">
						' . $__compilerTemp25 . '
						</div>
					';
		}
		$__finalCompiled .= '
				</div>
			</div>
		';
	}
	$__finalCompiled .= '
		<!-- end custom copyright -->
			
		<!-- custom -->
		</div> <!-- end footer_content -->
		</div> <!-- end footer_sub -->
		<!-- end custom -->
			
		' . $__templater->callMacro('nl_helper_macros', 'main_footer_content', array(
		'template' => $__vars['template'],
	), $__vars) . '
		' . $__templater->callMacro('nl_theme_hooks', 'main_footer_content', array(
		'template' => $__vars['template'],
	), $__vars) . '
		
		';
	if ($__templater->fn('property', array('nlFooterLinksBarPosition', ), false) == 'aboveCopyright') {
		$__finalCompiled .= '
		' . $__templater->callMacro('nl_helper_macros', 'above_footer_links', array(
			'template' => $__vars['template'],
		), $__vars) . '
		' . $__templater->callMacro('nl_theme_hooks', 'above_footer_links', array(
			'template' => $__vars['template'],
		), $__vars) . '
		<div class="p-footer-row linksContainer">
			<div class="p-footer-inner">
				
				';
		$__compilerTemp26 = '';
		$__compilerTemp26 .= '
							';
		if ($__templater->method($__vars['xf']['visitor'], 'canChangeStyle', array())) {
			$__compilerTemp26 .= '
								<li><a href="' . $__templater->fn('link', array('misc/style', ), true) . '" data-xf-click="overlay"
									data-xf-init="tooltip" title="' . $__templater->filter('Style chooser', array(array('for_attr', array()),), true) . '" rel="nofollow">
									' . $__templater->fontAwesome('fa-paint-brush', array(
			)) . ' ' . $__templater->escape($__vars['xf']['style']['title']) . '
								</a></li>
							';
		}
		$__compilerTemp26 .= '
							';
		if ($__templater->method($__vars['xf']['visitor'], 'canChangeLanguage', array())) {
			$__compilerTemp26 .= '
								<li><a href="' . $__templater->fn('link', array('misc/language', ), true) . '" data-xf-click="overlay"
									data-xf-init="tooltip" title="' . $__templater->filter('Language chooser', array(array('for_attr', array()),), true) . '" rel="nofollow">
									' . $__templater->fontAwesome('fa-globe', array(
			)) . ' ' . $__templater->escape($__vars['xf']['language']['title']) . '</a></li>
							';
		}
		$__compilerTemp26 .= '
						';
		if (strlen(trim($__compilerTemp26)) > 0) {
			$__finalCompiled .= '
					<div class="p-footer-row-main">
						<ul class="p-footer-linkList">
						' . $__compilerTemp26 . '
						</ul>
					</div>
				';
		}
		$__finalCompiled .= '
				<div class="p-footer-row-opposite">
					<ul class="p-footer-linkList">
						';
		if ($__templater->method($__vars['xf']['visitor'], 'canUseContactForm', array())) {
			$__finalCompiled .= '
							';
			if ($__vars['xf']['contactUrl']) {
				$__finalCompiled .= '
								<li><a href="' . $__templater->escape($__vars['xf']['contactUrl']) . '" data-xf-click="' . (($__vars['xf']['options']['contactUrl']['overlay'] AND ($__vars['xf']['options']['contactUrl']['type'] == 'default')) ? 'overlay' : '') . '">' . 'Contact us' . '</a></li>
							';
			}
			$__finalCompiled .= '
						';
		}
		$__finalCompiled .= '

						';
		if ($__vars['xf']['tosUrl']) {
			$__finalCompiled .= '
							<li><a href="' . $__templater->escape($__vars['xf']['tosUrl']) . '">' . 'Terms and rules' . '</a></li>
						';
		}
		$__finalCompiled .= '

						';
		if ($__vars['xf']['privacyPolicyUrl']) {
			$__finalCompiled .= '
							<li><a href="' . $__templater->escape($__vars['xf']['privacyPolicyUrl']) . '">' . 'Privacy policy' . '</a></li>
						';
		}
		$__finalCompiled .= '

						';
		if ($__vars['xf']['helpPageCount']) {
			$__finalCompiled .= '
							<li><a href="' . $__templater->fn('link', array('help', ), true) . '">' . 'Help' . '</a></li>
						';
		}
		$__finalCompiled .= '

						';
		if ($__vars['xf']['homePageUrl']) {
			$__finalCompiled .= '
							<li><a href="' . $__templater->escape($__vars['xf']['homePageUrl']) . '">' . 'Home' . '</a></li>
						';
		}
		$__finalCompiled .= '

						<li><a href="' . $__templater->fn('link', array('forums/index.rss', '-', ), true) . '" target="_blank" class="p-footer-rssLink" title="' . $__templater->filter('RSS', array(array('for_attr', array()),), true) . '"><span aria-hidden="true">' . $__templater->fontAwesome('fa-rss', array(
		)) . '<span class="u-srOnly">' . 'RSS' . '</span></span></a></li>
					</ul>
				</div>
			</div>
		</div>
		' . $__templater->callMacro('nl_helper_macros', 'below_footer_links', array(
			'template' => $__vars['template'],
		), $__vars) . '
		' . $__templater->callMacro('nl_theme_hooks', 'below_footer_links', array(
			'template' => $__vars['template'],
		), $__vars) . '
		';
	}
	$__finalCompiled .= '
		
		' . $__templater->callMacro('nl_helper_macros', 'above_footer_copyright', array(
		'template' => $__vars['template'],
	), $__vars) . '
		' . $__templater->callMacro('nl_theme_hooks', 'above_footer_copyright', array(
		'template' => $__vars['template'],
	), $__vars) . '
		' . '
		' . $__templater->callMacro('nl_helper_macros', 'below_footer_copyright', array(
		'template' => $__vars['template'],
	), $__vars) . '
		' . $__templater->callMacro('nl_theme_hooks', 'below_footer_copyright', array(
		'template' => $__vars['template'],
	), $__vars) . '
		
		';
	if ($__templater->fn('property', array('nlFooterLinksBarPosition', ), false) == 'belowCopyright') {
		$__finalCompiled .= '
		' . $__templater->callMacro('nl_helper_macros', 'above_footer_links', array(
			'template' => $__vars['template'],
		), $__vars) . '
		' . $__templater->callMacro('nl_theme_hooks', 'above_footer_links', array(
			'template' => $__vars['template'],
		), $__vars) . '
		<div class="p-footer-row linksContainer">
			<div class="p-footer-inner">
				
				';
		$__compilerTemp27 = '';
		$__compilerTemp27 .= '
							';
		if ($__templater->method($__vars['xf']['visitor'], 'canChangeStyle', array())) {
			$__compilerTemp27 .= '
								<li><a href="' . $__templater->fn('link', array('misc/style', ), true) . '" data-xf-click="overlay"
									data-xf-init="tooltip" title="' . $__templater->filter('Style chooser', array(array('for_attr', array()),), true) . '" rel="nofollow">
									' . $__templater->fontAwesome('fa-paint-brush', array(
			)) . ' ' . $__templater->escape($__vars['xf']['style']['title']) . '
								</a></li>
							';
		}
		$__compilerTemp27 .= '
							';
		if ($__templater->method($__vars['xf']['visitor'], 'canChangeLanguage', array())) {
			$__compilerTemp27 .= '
								<li><a href="' . $__templater->fn('link', array('misc/language', ), true) . '" data-xf-click="overlay"
									data-xf-init="tooltip" title="' . $__templater->filter('Language chooser', array(array('for_attr', array()),), true) . '" rel="nofollow">
									' . $__templater->fontAwesome('fa-globe', array(
			)) . ' ' . $__templater->escape($__vars['xf']['language']['title']) . '</a></li>
							';
		}
		$__compilerTemp27 .= '
						';
		if (strlen(trim($__compilerTemp27)) > 0) {
			$__finalCompiled .= '
					<div class="p-footer-row-main">
						<ul class="p-footer-linkList">
						' . $__compilerTemp27 . '
						</ul>
					</div>
				';
		}
		$__finalCompiled .= '
				<div class="p-footer-row-opposite">
					<ul class="p-footer-linkList">
						';
		if ($__templater->method($__vars['xf']['visitor'], 'canUseContactForm', array())) {
			$__finalCompiled .= '
							';
			if ($__vars['xf']['contactUrl']) {
				$__finalCompiled .= '
								<li><a href="' . $__templater->escape($__vars['xf']['contactUrl']) . '" data-xf-click="' . (($__vars['xf']['options']['contactUrl']['overlay'] AND ($__vars['xf']['options']['contactUrl']['type'] == 'default')) ? 'overlay' : '') . '">' . 'Contact us' . '</a></li>
							';
			}
			$__finalCompiled .= '
						';
		}
		$__finalCompiled .= '

						';
		if ($__vars['xf']['tosUrl']) {
			$__finalCompiled .= '
							<li><a href="' . $__templater->escape($__vars['xf']['tosUrl']) . '">' . 'Terms and rules' . '</a></li>
						';
		}
		$__finalCompiled .= '

						';
		if ($__vars['xf']['privacyPolicyUrl']) {
			$__finalCompiled .= '
							<li><a href="' . $__templater->escape($__vars['xf']['privacyPolicyUrl']) . '">' . 'Privacy policy' . '</a></li>
						';
		}
		$__finalCompiled .= '

						';
		if ($__vars['xf']['helpPageCount']) {
			$__finalCompiled .= '
							<li><a href="' . $__templater->fn('link', array('help', ), true) . '">' . 'Help' . '</a></li>
						';
		}
		$__finalCompiled .= '

						';
		if ($__vars['xf']['homePageUrl']) {
			$__finalCompiled .= '
							<li><a href="' . $__templater->escape($__vars['xf']['homePageUrl']) . '">' . 'Home' . '</a></li>
						';
		}
		$__finalCompiled .= '

						<li><a href="' . $__templater->fn('link', array('forums/index.rss', '-', ), true) . '" target="_blank" class="p-footer-rssLink" title="' . $__templater->filter('RSS', array(array('for_attr', array()),), true) . '"><span aria-hidden="true">' . $__templater->fontAwesome('fa-rss', array(
		)) . '<span class="u-srOnly">' . 'RSS' . '</span></span></a></li>
					</ul>
				</div>
			</div>
		</div>
		' . $__templater->callMacro('nl_helper_macros', 'below_footer_links', array(
			'template' => $__vars['template'],
		), $__vars) . '
		' . $__templater->callMacro('nl_theme_hooks', 'below_footer_links', array(
			'template' => $__vars['template'],
		), $__vars) . '
		';
	}
	$__finalCompiled .= '

	</div> <!-- closing p-footer-wrapper -->
</footer>

</div> <!-- closing p-pageWrapper -->

<div class="u-bottomFixer js-bottomFixTarget">
	';
	if ($__vars['notices']['floating']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'floating',
			'notices' => $__vars['notices']['floating'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if ($__vars['notices']['bottom_fixer']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'bottom_fixer',
			'notices' => $__vars['notices']['bottom_fixer'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
</div>

';
	if ($__templater->fn('property', array('scrollJumpButtons', ), false)) {
		$__finalCompiled .= '
	<div class="u-scrollButtons js-scrollButtons" data-trigger-type="' . $__templater->fn('property', array('scrollJumpButtons', ), true) . '">
		' . $__templater->button($__templater->fontAwesome('fa-arrow-up', array(
		)) . '<span class="u-srOnly">' . 'Top' . '</span>', array(
			'href' => '#top',
			'class' => 'button--scroll',
			'data-xf-click' => 'scroll-to',
		), '', array(
		)) . '
		';
		if ($__templater->fn('property', array('scrollJumpButtons', ), false) != 'up') {
			$__finalCompiled .= '
			' . $__templater->button($__templater->fontAwesome('fa-arrow-down', array(
			)) . '<span class="u-srOnly">' . 'Bottom' . '</span>', array(
				'href' => '#footer',
				'class' => 'button--scroll',
				'data-xf-click' => 'scroll-to',
			), '', array(
			)) . '
		';
		}
		$__finalCompiled .= '
	</div>
';
	}
	$__finalCompiled .= '

' . $__templater->callMacro('helper_js_global', 'body', array(
		'app' => 'public',
		'jsState' => $__vars['jsState'],
	), $__vars) . '

';
	if ($__templater->fn('count', array($__vars['xf']['reactionsActive'], ), false) > 1) {
		$__finalCompiled .= '
	<script type="text/template" id="xfReactTooltipTemplate">
		<div class="tooltip-content-inner">
			<div class="reactTooltip">
				';
		if ($__templater->isTraversable($__vars['xf']['reactionsActive'])) {
			foreach ($__vars['xf']['reactionsActive'] AS $__vars['reactionId'] => $__vars['reaction']) {
				$__finalCompiled .= '
					' . $__templater->fn('reaction', array(array(
					'id' => $__vars['reactionId'],
					'tooltip' => 'true',
				))) . '
				';
			}
		}
		$__finalCompiled .= '
			</div>
		</div>
	</script>
';
	}
	$__finalCompiled .= '

' . $__templater->filter($__vars['ldJsonHtml'], array(array('raw', array()),), true) . '

</body>
</html>

' . '

' . '

' . '

' . '

';
	return $__finalCompiled;
});