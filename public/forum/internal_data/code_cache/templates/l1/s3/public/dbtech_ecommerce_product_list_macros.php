<?php
// FROM HASH: 9bbcaaefc5313380161aa15baf6954a0
return array('macros' => array('product' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'product' => '!',
		'filters' => array(),
		'baseLinkPath' => '',
		'category' => null,
		'showWatched' => true,
		'showOwner' => true,
		'allowInlineMod' => true,
		'chooseName' => '',
		'extraInfo' => '',
	), $__arguments, $__vars);
	$__finalCompiled .= '

	';
	$__templater->includeCss('structured_list.less');
	$__finalCompiled .= '
	';
	$__templater->includeCss('dbtech_ecommerce.less');
	$__finalCompiled .= '

	<div class="productList-product structItem structItem--product ' . ($__vars['product']['prefix_id'] ? ('is-prefix' . $__templater->escape($__vars['product']['prefix_id'])) : '') . ' ' . ($__templater->method($__vars['product'], 'isIgnored', array()) ? 'is-ignored' : '') . ' ' . (($__vars['product']['product_state'] == 'moderated') ? 'is-moderated' : '') . ' ' . (($__vars['product']['product_state'] == 'deleted') ? 'is-deleted' : '') . ' js-inlineModContainer js-productListItem-' . $__templater->escape($__vars['product']['product_id']) . '" data-author="' . ($__templater->escape($__vars['product']['User']['username']) ?: $__templater->escape($__vars['product']['username'])) . '">
		<div class="structItem-cell structItem-cell--icon structItem-cell--iconExpanded">
			';
	if ($__vars['product']['Sale']) {
		$__finalCompiled .= '
				<a href="' . $__templater->fn('link', array('dbtech-ecommerce', $__vars['product'], ), true) . '"><div class="ribbon"><span>' . 'dbtech_ecommerce_sale' . '</span></div></a>
			';
	}
	$__finalCompiled .= '
			<div class="structItem-iconContainer">
				' . $__templater->fn('dbtech_ecommerce_product_icon', array($__vars['product'], 's', $__templater->fn('link', array('dbtech-ecommerce', $__vars['product'], ), false), ), true) . '
				';
	if ($__vars['showOwner']) {
		$__finalCompiled .= '
				' . $__templater->fn('avatar', array($__vars['product']['User'], 's', false, array(
			'href' => '',
			'class' => 'avatar--separated structItem-secondaryIcon',
		))) . '
				';
	}
	$__finalCompiled .= '
			</div>
		</div>
		<div class="structItem-cell structItem-cell--main" data-xf-init="touch-proxy">
			';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
					';
	if ($__vars['product']['product_state'] == 'moderated') {
		$__compilerTemp1 .= '
						<li>
							<i class="structItem-status structItem-status--moderated" aria-hidden="true" title="' . $__templater->filter('Awaiting approval', array(array('for_attr', array()),), true) . '"></i>
							<span class="u-srOnly">' . 'Awaiting approval' . '</span>
						</li>
					';
	}
	$__compilerTemp1 .= '
					';
	if ($__vars['product']['product_state'] == 'deleted') {
		$__compilerTemp1 .= '
						<li>
							<i class="structItem-status structItem-status--deleted" aria-hidden="true" title="' . $__templater->filter('Deleted', array(array('for_attr', array()),), true) . '"></i>
							<span class="u-srOnly">' . 'Deleted' . '</span>
						</li>
					';
	}
	$__compilerTemp1 .= '
					';
	if ($__vars['showWatched'] AND $__vars['xf']['visitor']['user_id']) {
		$__compilerTemp1 .= '
						';
		if ($__vars['product']['Watch'][$__vars['xf']['visitor']['user_id']]) {
			$__compilerTemp1 .= '
							<li>
								<i class="structItem-status structItem-status--watched" aria-hidden="true" title="' . $__templater->filter('dbtech_ecommerce_product_watched', array(array('for_attr', array()),), true) . '"></i>
								<span class="u-srOnly">' . 'dbtech_ecommerce_product_watched' . '</span>
							</li>
						';
		} else if ((!$__vars['category']) AND $__vars['product']['Category']['Watch'][$__vars['xf']['visitor']['user_id']]) {
			$__compilerTemp1 .= '
							<li>
								<i class="structItem-status structItem-status--watched" aria-hidden="true" title="' . $__templater->filter('dbtech_ecommerce_category_watched', array(array('for_attr', array()),), true) . '"></i>
								<span class="u-srOnly">' . 'dbtech_ecommerce_category_watched' . '</span>
							</li>
						';
		}
		$__compilerTemp1 .= '
					';
	}
	$__compilerTemp1 .= '
				';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
				<ul class="structItem-statuses">
				' . $__compilerTemp1 . '
				</ul>
			';
	}
	$__finalCompiled .= '

			<div class="structItem-title">
				';
	if ($__vars['product']['prefix_id']) {
		$__finalCompiled .= '
					';
		if ($__vars['category']) {
			$__finalCompiled .= '
						<a href="' . $__templater->fn('link', array('dbtech-ecommerce/categories', $__vars['category'], array('prefix_id' => $__vars['product']['prefix_id'], ), ), true) . '" class="labelLink">' . $__templater->fn('prefix', array('dbtechEcommerceProduct', $__vars['product'], 'html', '', ), true) . '</a>
					';
		} else {
			$__finalCompiled .= '
						' . $__templater->fn('prefix', array('dbtechEcommerceProduct', $__vars['product'], 'html', '', ), true) . '
					';
		}
		$__finalCompiled .= '
				';
	}
	$__finalCompiled .= '
				<a href="' . $__templater->fn('link', array('dbtech-ecommerce', $__vars['product'], ), true) . '" data-tp-primary="on">' . $__templater->escape($__vars['product']['title']) . '</a>
				';
	if (!$__templater->test($__vars['product']['Costs'], 'empty', array())) {
		$__finalCompiled .= '
					';
		if ($__vars['product']['Sale']) {
			$__finalCompiled .= '
						<span class="label label--lightGreen label--smallest">
							' . (($__templater->method($__vars['product']['Costs'], 'count', array()) > 1) ? 'dbtech_ecommerce_cost_from:' : '') . '
							' . (($__vars['product']['starting_price'] == 0) ? 'dbtech_ecommerce_free' : 'dbtech_ecommerce_sale_price') . '
						</span>
					';
		} else {
			$__finalCompiled .= '
						<span class="label label--primary label--smallest">
							' . (($__templater->method($__vars['product']['Costs'], 'count', array()) > 1) ? 'dbtech_ecommerce_cost_from:' : '') . '
							' . (($__vars['product']['starting_price'] == 0) ? 'dbtech_ecommerce_free' : $__templater->filter($__vars['product']['starting_price'], array(array('currency', array($__vars['xf']['options']['dbtechEcommerceCurrency'], )),), true)) . '
						</span>
					';
		}
		$__finalCompiled .= '
				';
	}
	$__finalCompiled .= '
			</div>

			<div class="structItem-minor">
				';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
						';
	if ($__vars['extraInfo']) {
		$__compilerTemp2 .= '
							<li>' . $__templater->escape($__vars['extraInfo']) . '</li>
						';
	}
	$__compilerTemp2 .= '
						';
	if ($__vars['chooseName']) {
		$__compilerTemp2 .= '
							<li>' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'name' => $__vars['chooseName'] . '[]',
			'value' => $__vars['product']['product_id'],
			'class' => 'js-chooseItem',
			'_type' => 'option',
		))) . '</li>
						';
	} else if ($__vars['allowInlineMod'] AND $__templater->method($__vars['product'], 'canUseInlineModeration', array())) {
		$__compilerTemp2 .= '
							<li>' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'value' => $__vars['product']['product_id'],
			'class' => 'js-inlineModToggle',
			'data-xf-init' => 'tooltip',
			'title' => $__templater->filter('Select for moderation', array(array('for_attr', array()),), false),
			'_type' => 'option',
		))) . '</li>
						';
	}
	$__compilerTemp2 .= '
					';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__finalCompiled .= '
					<ul class="structItem-extraInfo">
					' . $__compilerTemp2 . '
					</ul>
				';
	}
	$__finalCompiled .= '

				';
	if ($__vars['product']['product_state'] == 'deleted') {
		$__finalCompiled .= '
					';
		if ($__vars['extraInfo']) {
			$__finalCompiled .= '<span class="structItem-extraInfo">' . $__templater->escape($__vars['extraInfo']) . '</span>';
		}
		$__finalCompiled .= '

					' . $__templater->callMacro('deletion_macros', 'notice', array(
			'log' => $__vars['product']['DeletionLog'],
		), $__vars) . '
				';
	} else {
		$__finalCompiled .= '
					<ul class="structItem-parts structItem-parts--product">
						';
		if ($__vars['showOwner']) {
			$__finalCompiled .= '
							<li>' . $__templater->fn('username_link', array($__vars['product']['User'], false, array(
				'defaultname' => $__vars['product']['username'],
			))) . '</li>
						';
		}
		$__finalCompiled .= '
						';
		if (!$__templater->test($__vars['product']['product_filters'], 'empty', array())) {
			$__finalCompiled .= '
							';
			if ($__templater->isTraversable($__vars['product']['product_filters'])) {
				foreach ($__vars['product']['product_filters'] AS $__vars['filter']) {
					$__finalCompiled .= '
								<li>
									';
					if (!$__templater->test($__vars['baseLinkPath'], 'empty', array())) {
						$__finalCompiled .= '
										<a href="' . $__templater->fn('link', array($__vars['baseLinkPath'], $__vars['category'], $__templater->filter($__vars['filters'], array(array('replace', array('platform', $__vars['filter'], )),), false), ), true) . '" class="u-concealed">' . $__templater->escape($__vars['product']['Category']['product_filters'][$__vars['filter']]) . '</a>
									';
					} else {
						$__finalCompiled .= '
										' . $__templater->escape($__vars['product']['Category']['product_filters'][$__vars['filter']]) . '
									';
					}
					$__finalCompiled .= '
								</li>
							';
				}
			}
			$__finalCompiled .= '
						';
		}
		$__finalCompiled .= '
					</ul>
				';
	}
	$__finalCompiled .= '
			</div>

			';
	if ($__vars['product']['product_state'] != 'deleted') {
		$__finalCompiled .= '
				<div class="structItem-productTagLine">' . $__templater->escape($__vars['product']['tagline']) . '</div>
			';
	}
	$__finalCompiled .= '
		</div>
		<div class="structItem-cell structItem-cell--productMeta">
			';
	if ($__vars['xf']['options']['dbtechEcommerceEnableRate']) {
		$__finalCompiled .= '
				<div class="structItem-metaItem structItem-metaItem--rating">
					' . $__templater->callMacro('rating_macros', 'stars', array(
			'rating' => $__vars['product']['rating_avg'],
			'count' => $__vars['product']['rating_count'],
			'rowClass' => 'ratingStarsRow--justified',
			'starsClass' => 'ratingStars--smaller',
		), $__vars) . '
				</div>
			';
	}
	$__finalCompiled .= '

			';
	if ($__templater->method($__vars['product'], 'isDigital', array())) {
		$__finalCompiled .= '
				';
		if ($__vars['product']['LatestVersion']) {
			$__finalCompiled .= '
					<dl class="pairs pairs--justified structItem-minor structItem-metaItem structItem-metaItem--latestVersion">
						<dt>' . 'dbtech_ecommerce_latest_version' . '</dt>
						<dd><a href="' . $__templater->fn('link', array('dbtech-ecommerce/release', $__vars['product']['LatestVersion'], ), true) . '" class="u-concealed">' . $__templater->escape($__vars['product']['LatestVersion']['version_string']) . '</a></dd>
					</dl>

					<dl class="pairs pairs--justified structItem-minor structItem-metaItem structItem-metaItem--lastUpdate">
						<dt>' . 'Updated' . '</dt>
						<dd><a href="' . $__templater->fn('link', array('dbtech-ecommerce/releases', $__vars['product'], ), true) . '" class="u-concealed">' . $__templater->fn('date_dynamic', array($__vars['product']['LatestVersion']['release_date'], array(
			))) . '</a></dd>
					</dl>
				';
		} else {
			$__finalCompiled .= '
					<dl class="pairs pairs--justified structItem-minor structItem-metaItem structItem-metaItem--lastUpdate">
						<dt>' . 'dbtech_ecommerce_released' . '</dt>
						<dd><a href="' . $__templater->fn('link', array('dbtech-ecommerce', $__vars['product'], ), true) . '" class="u-concealed">' . $__templater->fn('date_dynamic', array($__vars['product']['creation_date'], array(
			))) . '</a></dd>
					</dl>
				';
		}
		$__finalCompiled .= '
			';
	} else {
		$__finalCompiled .= '
				<dl class="pairs pairs--justified structItem-minor structItem-metaItem structItem-metaItem--lastUpdate">
					<dt>' . 'dbtech_ecommerce_released' . '</dt>
					<dd><a href="' . $__templater->fn('link', array('dbtech-ecommerce', $__vars['product'], ), true) . '" class="u-concealed">' . $__templater->fn('date_dynamic', array($__vars['product']['creation_date'], array(
		))) . '</a></dd>
				</dl>
			';
	}
	$__finalCompiled .= '
		</div>
	</div>
';
	return $__finalCompiled;
},
'product_grid' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'product' => '!',
		'filters' => array(),
		'baseLinkPath' => '',
		'category' => null,
		'showWatched' => true,
		'allowInlineMod' => true,
		'chooseName' => '',
		'extraInfo' => '',
	), $__arguments, $__vars);
	$__finalCompiled .= '

	';
	$__templater->includeCss('node_list.less');
	$__finalCompiled .= '
	';
	$__templater->includeCss('structured_list.less');
	$__finalCompiled .= '
	';
	$__templater->includeCss('dbtech_ecommerce.less');
	$__finalCompiled .= '

	<div class="productList-product-grid node ' . ($__vars['product']['prefix_id'] ? ('is-prefix' . $__templater->escape($__vars['product']['prefix_id'])) : '') . ' ' . ($__templater->method($__vars['product'], 'isIgnored', array()) ? 'is-ignored' : '') . ' ' . (($__vars['product']['product_state'] == 'moderated') ? 'is-moderated' : '') . ' ' . (($__vars['product']['product_state'] == 'deleted') ? 'is-deleted' : '') . ' js-inlineModContainer js-productListItem-' . $__templater->escape($__vars['product']['product_id']) . '" data-author="' . ($__templater->escape($__vars['product']['User']['username']) ?: $__templater->escape($__vars['product']['username'])) . '">
		';
	if ($__vars['product']['Sale']) {
		$__finalCompiled .= '
			<div class="ribbon"><span>' . 'dbtech_ecommerce_sale' . '</span></div>
		';
	}
	$__finalCompiled .= '

		';
	if ($__vars['allowInlineMod']) {
		$__finalCompiled .= '
			' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'value' => $__vars['product']['product_id'],
			'labelclass' => 'productList-product-gridOverlayTop',
			'class' => 'js-inlineModToggle',
			'data-xf-init' => 'tooltip',
			'title' => $__templater->filter('Select for moderation', array(array('for_attr', array()),), false),
			'_type' => 'option',
		))) . '
		';
	}
	$__finalCompiled .= '

		<div class="productList-product-grid--icon flex-box">
			' . $__templater->fn('dbtech_ecommerce_product_icon', array($__vars['product'], 'l', $__templater->fn('link', array('dbtech-ecommerce', $__vars['product'], ), false), ), true) . '
		</div>

		<div class="node-main js-nodeMain">
			';
	$__vars['descriptionDisplay'] = $__templater->fn('property', array('nodeListDescriptionDisplay', ), false);
	$__finalCompiled .= '
			<h3 class="node-title">
				';
	if ($__vars['product']['prefix_id']) {
		$__finalCompiled .= '
					';
		if ($__vars['category']) {
			$__finalCompiled .= '
						<a href="' . $__templater->fn('link', array('dbtech-ecommerce/categories', $__vars['category'], array('prefix_id' => $__vars['product']['prefix_id'], ), ), true) . '" class="labelLink">' . $__templater->fn('prefix', array('dbtechEcommerceProduct', $__vars['product'], 'html', '', ), true) . '</a>
					';
		} else {
			$__finalCompiled .= '
						' . $__templater->fn('prefix', array('dbtechEcommerceProduct', $__vars['product'], 'html', '', ), true) . '
					';
		}
		$__finalCompiled .= '
				';
	}
	$__finalCompiled .= '
				<a href="' . $__templater->fn('link', array('dbtech-ecommerce', $__vars['product'], ), true) . '" data-xf-init="' . (($__vars['descriptionDisplay'] == 'tooltip') ? 'element-tooltip' : '') . '" data-shortcut="node-description">' . $__templater->escape($__vars['product']['title']) . '</a>
			</h3>
			';
	if ($__templater->fn('property', array('nlDBTechEcommWidgetShowDesc', ), false) == 'default') {
		$__finalCompiled .= '
				';
		if (($__vars['descriptionDisplay'] != 'none') AND !$__templater->test($__vars['product']['tagline'], 'empty', array())) {
			$__finalCompiled .= '
					<div class="node-description ' . (($__vars['descriptionDisplay'] == 'tooltip') ? 'node-description--tooltip js-nodeDescTooltip' : '') . '">' . $__templater->escape($__vars['product']['tagline']) . '</div>
				';
		}
		$__finalCompiled .= '
			';
	} else if ($__templater->fn('property', array('nlDBTechEcommWidgetShowDesc', ), false) == 'show') {
		$__finalCompiled .= '
				<div class="node-description">' . $__templater->escape($__vars['product']['tagline']) . '</div>	
			';
	}
	$__finalCompiled .= '

			<div class="contentRow-minor contentRow-minor--smaller">
				';
	if ($__vars['product']['product_state'] == 'deleted') {
		$__finalCompiled .= '
					';
		if ($__vars['extraInfo']) {
			$__finalCompiled .= '<span class="structItem-extraInfo">' . $__templater->escape($__vars['extraInfo']) . '</span>';
		}
		$__finalCompiled .= '

					' . $__templater->callMacro('deletion_macros', 'notice', array(
			'log' => $__vars['product']['DeletionLog'],
		), $__vars) . '
				';
	} else {
		$__finalCompiled .= '
					<ul class="listInline listInline--bullet">
						';
		if (!$__templater->test($__vars['product']['product_filters'], 'empty', array())) {
			$__finalCompiled .= '
							';
			if ($__templater->isTraversable($__vars['product']['product_filters'])) {
				foreach ($__vars['product']['product_filters'] AS $__vars['filter']) {
					$__finalCompiled .= '
								<li>
									';
					if (!$__templater->test($__vars['baseLinkPath'], 'empty', array())) {
						$__finalCompiled .= '
										<a href="' . $__templater->fn('link', array($__vars['baseLinkPath'], $__vars['category'], $__templater->filter($__vars['filters'], array(array('replace', array('platform', $__vars['filter'], )),), false), ), true) . '" class="u-concealed">' . $__templater->escape($__vars['product']['Category']['product_filters'][$__vars['filter']]) . '</a>
									';
					} else {
						$__finalCompiled .= '
										' . $__templater->escape($__vars['product']['Category']['product_filters'][$__vars['filter']]) . '
									';
					}
					$__finalCompiled .= '
								</li>
							';
				}
			}
			$__finalCompiled .= '
						';
		}
		$__finalCompiled .= '

						';
		if ($__vars['showWatched'] AND $__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
							';
			if ($__vars['product']['Watch'][$__vars['xf']['visitor']['user_id']]) {
				$__finalCompiled .= '
								<li>
									<i class="structItem-status structItem-status--watched" aria-hidden="true" title="' . $__templater->filter('dbtech_ecommerce_product_watched', array(array('for_attr', array()),), true) . '"></i>
									<span class="u-srOnly">' . 'dbtech_ecommerce_product_watched' . '</span>
								</li>
								';
			} else if ((!$__vars['category']) AND $__vars['product']['Category']['Watch'][$__vars['xf']['visitor']['user_id']]) {
				$__finalCompiled .= '
								<li>
									<i class="structItem-status structItem-status--watched" aria-hidden="true" title="' . $__templater->filter('dbtech_ecommerce_category_watched', array(array('for_attr', array()),), true) . '"></i>
									<span class="u-srOnly">' . 'dbtech_ecommerce_category_watched' . '</span>
								</li>
							';
			}
			$__finalCompiled .= '
						';
		}
		$__finalCompiled .= '
					</ul>
				';
	}
	$__finalCompiled .= '
			</div>
		</div>

		<div class="productList-product-grid--clearfix">
			';
	if ($__vars['xf']['options']['dbtechEcommerceEnableRate']) {
		$__finalCompiled .= '
				<div class="rating">
					<a href="' . $__templater->fn('link', array('dbtech-ecommerce/reviews', $__vars['product'], ($__vars['license'] ? array('license_key' => $__vars['license']['license_key'], ) : array()), ), true) . '" class="reviewLink">
					' . $__templater->callMacro('rating_macros', 'stars', array(
			'rating' => $__vars['product']['rating_avg'],
			'rowClass' => 'ratingStarsRow--justified',
			'starsClass' => 'ratingStars--smaller',
		), $__vars) . '
					</a>
				</div>
			';
	}
	$__finalCompiled .= '

			<div class="price">
				';
	if (!$__templater->test($__vars['product']['Costs'], 'empty', array())) {
		$__finalCompiled .= '
					';
		if ($__vars['product']['Sale']) {
			$__finalCompiled .= '
						<span class="label label--lightGreen label--smallest">
							' . (($__templater->method($__vars['product']['Costs'], 'count', array()) > 1) ? 'dbtech_ecommerce_cost_from:' : '') . '
							' . (($__vars['product']['starting_price'] == 0) ? 'dbtech_ecommerce_free' : 'dbtech_ecommerce_sale_price') . '
						</span>
					';
		} else {
			$__finalCompiled .= '
						<span class="label label--primary label--smallest">
							' . (($__templater->method($__vars['product']['Costs'], 'count', array()) > 1) ? 'dbtech_ecommerce_cost_from:' : '') . '
							' . (($__vars['product']['starting_price'] == 0) ? 'dbtech_ecommerce_free' : $__templater->filter($__vars['product']['starting_price'], array(array('currency', array($__vars['xf']['options']['dbtechEcommerceCurrency'], )),), true)) . '
						</span>
					';
		}
		$__finalCompiled .= '
				';
	}
	$__finalCompiled .= '
			</div>
		</div>
		
		';
	if ($__templater->fn('property', array('nlDBTechEcommWidgetShowMeta', ), false) == true) {
		$__finalCompiled .= '
		<div class="productList-product-grid--updateInfo">
			<ul class="listInline">
				';
		if ($__templater->method($__vars['product'], 'isDigital', array())) {
			$__finalCompiled .= '
					';
			if ($__vars['product']['LatestVersion']) {
				$__finalCompiled .= '
						<li>' . 'Updated' . $__vars['xf']['language']['label_separator'] . ' <a href="' . $__templater->fn('link', array('dbtech-ecommerce/releases', $__vars['product'], ), true) . '" class="u-concealed">' . $__templater->fn('date_dynamic', array($__vars['product']['LatestVersion']['release_date'], array(
				))) . '</a></li>
					';
			} else {
				$__finalCompiled .= '
						<li>' . 'dbtech_ecommerce_released:' . ' <a href="' . $__templater->fn('link', array('dbtech-ecommerce', $__vars['product'], ), true) . '" class="u-concealed">' . $__templater->fn('date_dynamic', array($__vars['product']['creation_date'], array(
				))) . '</a></li>
					';
			}
			$__finalCompiled .= '
				';
		} else {
			$__finalCompiled .= '
					<li>' . 'dbtech_ecommerce_released:' . ' <a href="' . $__templater->fn('link', array('dbtech-ecommerce', $__vars['product'], ), true) . '" class="u-concealed">' . $__templater->fn('date_dynamic', array($__vars['product']['creation_date'], array(
			))) . '</a></li>
				';
		}
		$__finalCompiled .= '
			</ul>
		</div>
		';
	}
	$__finalCompiled .= '
	</div>
';
	return $__finalCompiled;
},
'product_simple' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'product' => '!',
		'showOwner' => true,
		'withMeta' => true,
		'withRating' => false,
	), $__arguments, $__vars);
	$__finalCompiled .= '
	<div class="contentRow">
		<div class="contentRow-figure">
			' . $__templater->fn('dbtech_ecommerce_product_icon', array($__vars['product'], $__templater->fn('property', array('nlDBTechEcommWidgetAvatarSize', ), false), $__templater->fn('link', array('dbtech-ecommerce', $__vars['product'], ), false), ), true) . '
		</div>
		<div class="contentRow-main contentRow-main--close">
			<a href="' . $__templater->fn('link', array('dbtech-ecommerce', $__vars['product'], ), true) . '">' . $__templater->fn('prefix', array('dbtechEcommerceProduct', $__vars['product'], ), true) . $__templater->escape($__vars['product']['title']) . '</a>
			<div class="contentRow-lesser">' . $__templater->escape($__vars['product']['tagline']) . '</div>
			';
	if (!$__templater->test($__vars['product']['Costs'], 'empty', array()) AND ($__templater->fn('property', array('nlDBTechEcommWidgetShowPrice', ), false) == true)) {
		$__finalCompiled .= '
				<div class="contentRow-lesser price">
					<span class="label label--primary label--smallest">
						' . (($__templater->method($__vars['product']['Costs'], 'count', array()) > 1) ? 'dbtech_ecommerce_cost_from:' : '') . '
						' . (($__vars['product']['starting_price'] == 0) ? 'dbtech_ecommerce_free' : $__templater->filter($__vars['product']['starting_price'], array(array('currency', array($__vars['xf']['options']['dbtechEcommerceCurrency'], )),), true)) . '
					</span>
				</div>
			';
	}
	$__finalCompiled .= '
			';
	if ($__vars['withRating'] AND $__vars['xf']['options']['dbtechEcommerceEnableRate']) {
		$__finalCompiled .= '
				<div class="contentRow-lesser">
					<a href="' . $__templater->fn('link', array('dbtech-ecommerce/reviews', $__vars['product'], ($__vars['license'] ? array('license_key' => $__vars['license']['license_key'], ) : array()), ), true) . '" class="reviewLink">
					' . $__templater->callMacro('rating_macros', 'stars', array(
			'rating' => $__vars['product']['rating_avg'],
			'count' => $__vars['product']['rating_count'],
			'rowClass' => 'ratingStarsRow--justified',
			'starsClass' => 'ratingStars--smaller',
		), $__vars) . '
					</a>
				</div>
			';
	}
	$__finalCompiled .= '
			';
	if ($__vars['withMeta'] AND ($__templater->fn('property', array('nlDBTechEcommWidgetShowMeta', ), false) == true)) {
		$__finalCompiled .= '
				<div class="contentRow-minor contentRow-minor--smaller">
					<ul class="listInline listInline--bullet">
						';
		if ($__vars['showOwner']) {
			$__finalCompiled .= '
							<li>' . ($__templater->escape($__vars['product']['User']['username']) ?: $__templater->escape($__vars['product']['username'])) . '</li>
						';
		}
		$__finalCompiled .= '

						';
		if ($__templater->method($__vars['product'], 'isDigital', array())) {
			$__finalCompiled .= '
							';
			if ($__vars['product']['LatestVersion']) {
				$__finalCompiled .= '
								<li>' . 'Updated' . $__vars['xf']['language']['label_separator'] . ' <a href="' . $__templater->fn('link', array('dbtech-ecommerce/releases', $__vars['product'], ), true) . '" class="u-concealed">' . $__templater->fn('date_dynamic', array($__vars['product']['LatestVersion']['release_date'], array(
				))) . '</a></li>
							';
			} else {
				$__finalCompiled .= '
								<li>' . 'dbtech_ecommerce_released:' . ' <a href="' . $__templater->fn('link', array('dbtech-ecommerce', $__vars['product'], ), true) . '" class="u-concealed">' . $__templater->fn('date_dynamic', array($__vars['product']['creation_date'], array(
				))) . '</a></li>
							';
			}
			$__finalCompiled .= '
						';
		} else {
			$__finalCompiled .= '
							<li>' . 'dbtech_ecommerce_released:' . ' <a href="' . $__templater->fn('link', array('dbtech-ecommerce', $__vars['product'], ), true) . '" class="u-concealed">' . $__templater->fn('date_dynamic', array($__vars['product']['creation_date'], array(
			))) . '</a></li>
						';
		}
		$__finalCompiled .= '
					</ul>
				</div>
			';
	}
	$__finalCompiled .= '
		</div>
	</div>
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

' . '

';
	return $__finalCompiled;
});