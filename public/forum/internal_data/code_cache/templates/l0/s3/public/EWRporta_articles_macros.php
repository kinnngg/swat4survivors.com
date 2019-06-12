<?php
// FROM HASH: 5db4c35d26a945b16f09df164084b34a
return array('macros' => array('articles_block' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'link' => '!',
		'articles' => '!',
		'catlinks' => '!',
		'attachments' => '!',
		'page' => '!',
		'perPage' => '!',
		'total' => '!',
		'data' => '',
	), $__arguments, $__vars);
	$__finalCompiled .= '

	';
	$__templater->includeCss('message.less');
	$__finalCompiled .= '
	';
	$__templater->includeCss('EWRporta.less');
	$__finalCompiled .= '
	';
	$__templater->includeCss('EWRporta_articles.less');
	$__finalCompiled .= '
	
	';
	if ($__templater->fn('property', array('EWRporta_infinite', ), false) AND (($__vars['page'] == 1) AND ($__vars['total'] > $__vars['perPage']))) {
		$__finalCompiled .= '
		';
		$__vars['infnt'] = $__templater->preEscaped('1');
		$__finalCompiled .= '
		';
		$__templater->includeJs(array(
			'src' => '8wayrun/porta/infinite.js',
		));
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '

	';
	if ($__templater->fn('property', array('EWRporta_masonry', ), false)) {
		$__finalCompiled .= '
		';
		$__vars['msnry'] = $__templater->preEscaped('1');
		$__finalCompiled .= '
		';
		$__templater->includeJs(array(
			'src' => '8wayrun/porta/images.js',
		));
		$__finalCompiled .= '
		';
		$__templater->includeJs(array(
			'src' => '8wayrun/porta/masonry.js',
		));
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '
	
	';
	$__templater->includeJs(array(
		'src' => '8wayrun/porta/portal.js',
	));
	$__finalCompiled .= '
	
	<div class="block ' . ($__vars['infnt'] ? 'porta-infinite' : '') . ' ' . ($__vars['msnry'] ? 'porta-masonry' : '') . '"
			data-xf-init="' . ($__vars['infnt'] ? 'porta-infinite' : '') . ' ' . ($__vars['msnry'] ? 'porta-masonry' : '') . '"
			data-masonry="' . $__templater->escape($__vars['msnry']) . '"
		 	data-click="' . $__templater->fn('property', array('EWRporta_infinite_click', ), true) . '"
		 	data-after="' . $__templater->fn('property', array('EWRporta_infinite_after', ), true) . '"
		 	data-history="' . $__templater->fn('property', array('EWRporta_infinite_history', ), true) . '">
		';
	$__vars['i'] = 0;
	if ($__templater->isTraversable($__vars['articles'])) {
		foreach ($__vars['articles'] AS $__vars['article']) {
			$__vars['i']++;
			$__finalCompiled .= trim('
			' . $__templater->callMacro(null, 'article_block', array(
				'article' => $__vars['article'],
				'catlinks' => $__vars['catlinks'][$__vars['article']['thread_id']],
				'attachments' => $__vars['attachments'],
			), $__vars) . '
		') . $__templater->widgetPosition('ewr_porta_articles_after_article', array(
				'i' => $__vars['i'],
			));
		}
	}
	$__finalCompiled .= '
	</div>
	
	';
	if ($__vars['infnt']) {
		$__finalCompiled .= '
		<div class="block porta-article-status">
			<div class="porta-article-ellipse infinite-scroll-request">
				<span class="loader-ellipse-dot"></span>
				<span class="loader-ellipse-dot"></span>
				<span class="loader-ellipse-dot"></span>
				<span class="loader-ellipse-dot"></span>
			</div>
		</div>

		<div class="block porta-article-loader">
			' . $__templater->button('EWRporta_load_more...', array(
			'class' => 'porta-article-button button--cta',
		), '', array(
		)) . '
		</div>
	';
	}
	$__finalCompiled .= '
	
	<div class="block porta-article-pager">
		<div class="block-outer block-outer--after">
			' . $__templater->fn('page_nav', array(array(
		'page' => $__vars['page'],
		'total' => $__vars['total'],
		'link' => $__vars['link'],
		'data' => $__vars['data'],
		'wrapperclass' => 'block-outer-main',
		'perPage' => $__vars['perPage'],
	))) . '
		</div>
	</div>
';
	return $__finalCompiled;
},
'article_block_simple' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'article' => '!',
		'catlinks' => '!',
		'attachments' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	<div class="porta-article-item">
		<div class="block-container porta-article-container">

			';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
						' . $__templater->callMacro(null, 'article_header', array(
		'article' => $__vars['article'],
		'attachments' => $__vars['attachments'],
	), $__vars) . '
					';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
				<a class="porta-article-header" data-cache="false"
					data-xf-click="' . (((!$__templater->fn('property', array('EWRporta_header_linked', ), false)) AND ($__vars['article']['article_icon']['type'] == 'medio')) ? 'overlay' : '') . '"
					href="' . (((!$__templater->fn('property', array('EWRporta_header_linked', ), false)) AND $__vars['article']['article_icon']['link']) ? $__templater->escape($__vars['article']['article_icon']['link']) : $__templater->fn('link', array('threads', $__vars['article']['Thread'], ), true)) . '">
					
					' . $__compilerTemp1 . '
				</a>
			';
	} else {
		$__finalCompiled .= '
				<h2 class="block-header">
					<a href="' . $__templater->fn('link', array('threads', $__vars['article']['Thread'], ), true) . '">
						';
		if ($__vars['article']['Thread']['prefix_id']) {
			$__finalCompiled .= $__templater->fn('prefix', array('thread', $__vars['article']['Thread'], 'html', '', ), true);
		}
		$__finalCompiled .= '
						' . ($__templater->escape($__vars['article']['article_title']) ?: $__templater->escape($__vars['article']['Thread']['title'])) . '
					</a>
				</h2>
			';
	}
	$__finalCompiled .= '

			<div class="block-body message-inner">
				<div class="message-cell message-main">
					<a href="' . $__templater->fn('link', array('threads', $__vars['article']['Thread'], ), true) . '">
					<span>
							';
	if ($__vars['article']['Thread']['prefix_id']) {
		$__finalCompiled .= $__templater->fn('prefix', array('thread', $__vars['article']['Thread'], 'html', '', ), true);
	}
	$__finalCompiled .= '
							' . ($__templater->escape($__vars['article']['article_title']) ?: $__templater->escape($__vars['article']['Thread']['title'])) . '
						</span>
					</a>
					<div class="message-body">
						';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
									' . $__templater->callMacro(null, 'article_icon', array(
		'article' => $__vars['article'],
		'attachments' => $__vars['attachments'],
	), $__vars) . '
								';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__finalCompiled .= '
							<div class="porta-block-icon">
								' . $__compilerTemp2 . '
							</div>
						';
	}
	$__finalCompiled .= '

						' . $__templater->fn('bb_code', array($__vars['article']['article_excerpt'], 'ewr_porta_article', $__vars['article']['Thread']['FirstPost'], ), true) . '

						';
	if ($__vars['article']['article_break']) {
		$__finalCompiled .= '
							<a href="' . $__templater->fn('link', array('threads', $__vars['article']['Thread'], ), true) . '">' . $__templater->escape($__vars['article']['article_break']) . '</a>.
						';
	}
	$__finalCompiled .= '
					</div>
				</div>
			</div>

		</div>
	</div>
';
	return $__finalCompiled;
},
'article_block' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'article' => '!',
		'catlinks' => '!',
		'attachments' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	<div class="porta-article-item">
		<div class="block-container porta-article-container">

			';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
						' . $__templater->callMacro(null, 'article_header', array(
		'article' => $__vars['article'],
		'attachments' => $__vars['attachments'],
	), $__vars) . '
					';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
				<a class="porta-article-header" data-cache="false"
					data-xf-click="' . (((!$__templater->fn('property', array('EWRporta_header_linked', ), false)) AND ($__vars['article']['article_icon']['type'] == 'medio')) ? 'overlay' : '') . '"
					href="' . (((!$__templater->fn('property', array('EWRporta_header_linked', ), false)) AND $__vars['article']['article_icon']['link']) ? $__templater->escape($__vars['article']['article_icon']['link']) : $__templater->fn('link', array('threads', $__vars['article']['Thread'], ), true)) . '">
					
					' . $__compilerTemp1 . '

					';
		if ($__templater->fn('property', array('nlXenportaArticleGridTitleLayout', ), false) == 'default') {
			$__finalCompiled .= '
					<div class="porta-header-text">
						<span>
							';
			if ($__vars['article']['Thread']['prefix_id']) {
				$__finalCompiled .= $__templater->fn('prefix', array('thread', $__vars['article']['Thread'], 'html', '', ), true);
			}
			$__finalCompiled .= '
							' . ($__templater->escape($__vars['article']['article_title']) ?: $__templater->escape($__vars['article']['Thread']['title'])) . '
						</span>
					</div>
					';
		}
		$__finalCompiled .= '
				</a>
			';
	} else {
		$__finalCompiled .= '
				<h2 class="block-header">
					<a href="' . $__templater->fn('link', array('threads', $__vars['article']['Thread'], ), true) . '">
						';
		if ($__vars['article']['Thread']['prefix_id']) {
			$__finalCompiled .= $__templater->fn('prefix', array('thread', $__vars['article']['Thread'], 'html', '', ), true);
		}
		$__finalCompiled .= '
						' . ($__templater->escape($__vars['article']['article_title']) ?: $__templater->escape($__vars['article']['Thread']['title'])) . '
					</a>
				</h2>
			';
	}
	$__finalCompiled .= '

			<div class="block-body message-inner">
				';
	if ($__templater->fn('property', array('EWRporta_dateblock', ), false)) {
		$__finalCompiled .= '
					<div class="message-cell porta-article-date">
						<div class="porta-date-block">
							' . $__templater->fn('time', array($__vars['article']['article_date'], 'M', ), true) . '
							<b>' . $__templater->fn('time', array($__vars['article']['article_date'], 'd', ), true) . '</b>
						</div>
					</div>
				';
	}
	$__finalCompiled .= '
				<div class="message-cell message-main">
					';
	if ($__templater->fn('property', array('nlXenportaArticleGridTitleLayout', ), false) == 'belowImg') {
		$__finalCompiled .= '
						<h3 class="porta-header-text">
							<a href="' . $__templater->fn('link', array('threads', $__vars['article']['Thread'], ), true) . '">
								<span>
									';
		if ($__vars['article']['Thread']['prefix_id']) {
			$__finalCompiled .= $__templater->fn('prefix', array('thread', $__vars['article']['Thread'], 'html', '', ), true);
		}
		$__finalCompiled .= '
									' . ($__templater->escape($__vars['article']['article_title']) ?: $__templater->escape($__vars['article']['Thread']['title'])) . '
								</span>
							</a>
						</h3>
					';
	}
	$__finalCompiled .= '
					<header class="message-attribution">
						<div class="message-attribution-main">
							<ul class="listInline listInline--bullet">
								<li>
									' . $__templater->fontAwesome('fa-user', array(
	)) . '
									<a href="' . $__templater->fn('link', array('ewr-porta/authors', $__vars['article']['Thread']['User'], ), true) . '" class="u-concealed">
										' . ($__vars['article']['Thread']['User'] ? $__templater->escape($__vars['article']['Thread']['User']['username']) : $__templater->escape($__vars['article']['Thread']['username'])) . '</a>
								</li>
								<li>
									' . $__templater->fontAwesome('fa-clock', array(
	)) . '
									<a href="' . $__templater->fn('link', array('threads', $__vars['article']['Thread'], ), true) . '" class="u-concealed">
										' . $__templater->fn('date_dynamic', array($__vars['article']['article_date'], array(
		'data-full-old-date' => 'true',
	))) . '</a>
								</li>
							</ul>
						</div>

						<div class="message-attribution-opposite">
							<ul class="listInline listInline--bullet">
								<li>
									' . $__templater->fontAwesome('fa-eye', array(
	)) . '
									' . $__templater->filter($__vars['article']['Thread']['view_count'], array(array('NUMBER', array()),), true) . '
								</li>
								<li>
									' . $__templater->fontAwesome('fa-comments', array(
	)) . '
									' . $__templater->filter($__vars['article']['Thread']['reply_count'], array(array('NUMBER', array()),), true) . '
								</li>
							</ul>
						</div>
					</header>

					<div class="message-body">
						';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
									' . $__templater->callMacro(null, 'article_icon', array(
		'article' => $__vars['article'],
		'attachments' => $__vars['attachments'],
	), $__vars) . '
								';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__finalCompiled .= '
							<div class="porta-block-icon">
								' . $__compilerTemp2 . '
							</div>
						';
	}
	$__finalCompiled .= '

						' . $__templater->fn('bb_code', array($__vars['article']['article_excerpt'], 'ewr_porta_article', $__vars['article']['Thread']['FirstPost'], ), true) . '

						';
	if ($__vars['article']['article_break']) {
		$__finalCompiled .= '
							<a href="' . $__templater->fn('link', array('threads', $__vars['article']['Thread'], ), true) . '">' . $__templater->escape($__vars['article']['article_break']) . '</a>.
						';
	}
	$__finalCompiled .= '
					</div>
				</div>
			</div>

			<div class="block-footer">
				<div class="block-footer-counter">
					';
	if ($__templater->isTraversable($__vars['catlinks'])) {
		foreach ($__vars['catlinks'] AS $__vars['catlink']) {
			$__finalCompiled .= '
						' . $__templater->button('
							' . $__templater->escape($__vars['catlink']['Category']['category_name']) . '
						', array(
				'href' => $__templater->fn('link', array('ewr-porta/categories', $__vars['catlink']['Category'], ), false),
			), '', array(
			)) . '		
					';
		}
	}
	$__finalCompiled .= '
				</div>
				<div class="block-footer-controls">
					' . $__templater->button('
						' . 'Continue' . $__vars['xf']['language']['ellipsis'] . '
					', array(
		'href' => $__templater->fn('link', array('threads', $__vars['article']['Thread'], ), false),
		'fa' => 'fa-sign-in',
	), '', array(
	)) . '
				</div>
			</div>
		</div>
	</div>
';
	return $__finalCompiled;
},
'article_header' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'article' => '!',
		'attachments' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	';
	if ($__templater->fn('property', array('EWRporta_header', ), false)) {
		$__finalCompiled .= '
		';
		if (($__vars['article']['article_icon']['type'] == 'medio') AND $__vars['article']['article_icon']['data']) {
			$__finalCompiled .= '
			<div class="porta-header-medio"
				style="background-image: url(\'' . $__templater->fn('base_url', array($__vars['article']['article_icon']['data']['image'], ), true) . '\');">
			</div>
			<div class="porta-header-play">' . $__templater->fontAwesome('fa-play-circle', array(
			)) . '</div>
		';
		} else if (($__vars['article']['article_icon']['type'] == 'attach') AND $__vars['attachments'][$__vars['article']['article_icon']['data']]) {
			$__finalCompiled .= '
			<div class="porta-header-image"
				style="background-image: url(\'' . $__templater->fn('link', array('full:ewr-porta/attachments', $__vars['attachments'][$__vars['article']['article_icon']['data']], ), true) . '\');">
			</div>
		';
		} else if (($__vars['article']['article_icon']['type'] == 'image') AND $__vars['xf']['options']['EWRporta_icon_external']) {
			$__finalCompiled .= '
			<div class="porta-header-image"
				style="background-image: url(\'' . $__templater->escape($__vars['article']['article_icon']['data']) . '\');">
			</div>
		';
		}
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
},
'article_icon' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'article' => '!',
		'attachments' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	';
	if ((!$__templater->fn('property', array('EWRporta_header', ), false)) AND (($__vars['article']['article_icon']['type'] == 'attach') AND $__vars['attachments'][$__vars['article']['article_icon']['data']])) {
		$__finalCompiled .= '
		<a href="' . $__templater->fn('link', array('threads', $__vars['article']['Thread'], ), true) . '">
			<img border="0"
				alt="' . $__templater->escape($__vars['attachments'][$__vars['article']['article_icon']['data']]['filename']) . '"
				src="' . $__templater->escape($__vars['attachments'][$__vars['article']['article_icon']['data']]['thumbnail_url']) . '" />
		</a>
	';
	} else if ((!$__templater->fn('property', array('EWRporta_header', ), false)) AND (($__vars['article']['article_icon']['type'] == 'image') AND $__vars['xf']['options']['EWRporta_icon_external'])) {
		$__finalCompiled .= '
		<a href="' . $__templater->fn('link', array('threads', $__vars['article']['Thread'], ), true) . '">
			<img border="0"
				alt="' . $__templater->escape($__vars['article']['article_icon']['data']) . '"
				src="' . $__templater->escape($__vars['article']['article_icon']['data']) . '" />
		</a>
	';
	} else if ($__vars['article']['article_icon']['type'] == 'avatar') {
		$__finalCompiled .= '
		' . $__templater->fn('avatar', array($__vars['article']['Thread']['User'], 's', false, array(
			'defaultname' => $__vars['article']['Thread']['username'],
			'itemprop' => 'image',
		))) . '
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '


' . '


' . '





' . '

';
	return $__finalCompiled;
});