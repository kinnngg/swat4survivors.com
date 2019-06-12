<?php
// FROM HASH: bdc74d2c61966c70c50db0b2be9ae408
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped($__templater->escape($__vars['category']['title']));
	$__templater->pageParams['pageNumber'] = $__vars['page'];
	$__finalCompiled .= '
';
	$__templater->pageParams['pageDescription'] = $__templater->preEscaped($__templater->filter($__vars['category']['description'], array(array('raw', array()),), true));
	$__templater->pageParams['pageDescriptionMeta'] = true;
	$__finalCompiled .= '

' . $__templater->callMacro('metadata_macros', 'canonical_url', array(
		'canonicalUrl' => $__templater->fn('link', array('canonical:dbtech-ecommerce/categories', $__vars['category'], array('page' => $__vars['page'], ), ), false),
	), $__vars) . '

';
	$__templater->breadcrumbs($__templater->method($__vars['category'], 'getBreadcrumbs', array(false, )));
	$__finalCompiled .= '

' . $__templater->callMacro('dbtech_ecommerce_product_page_macros', 'product_page_options', array(
		'category' => $__vars['category'],
	), $__vars) . '

';
	if ($__templater->method($__vars['category'], 'canAddProduct', array())) {
		$__templater->pageParams['pageAction'] = $__templater->preEscaped('
	' . $__templater->button('dbtech_ecommerce_add_digital_product...', array(
			'href' => $__templater->fn('link', array('dbtech-ecommerce/add', null, array('category_id' => $__vars['category']['category_id'], 'product_type' => 'digital', ), ), false),
			'class' => 'button--cta',
			'icon' => 'add',
		), '', array(
		)) . '
	' . $__templater->button('dbtech_ecommerce_add_physical_product...', array(
			'href' => $__templater->fn('link', array('dbtech-ecommerce/add', null, array('category_id' => $__vars['category']['category_id'], 'product_type' => 'physical', ), ), false),
			'class' => 'button--cta',
			'icon' => 'add',
		), '', array(
		)) . '
');
	}
	$__finalCompiled .= '

';
	if ($__vars['pendingApproval']) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--important">' . 'Your content has been submitted and will be displayed pending approval by a moderator.' . '</div>
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

';
	if ($__templater->fn('property', array('dbtechEcommerceEnableInfiniteScroll', ), false) AND (($__vars['page'] == 1) AND ($__vars['total'] > $__vars['perPage']))) {
		$__finalCompiled .= '
	';
		$__vars['infiniteScroll'] = true;
		$__finalCompiled .= '

	';
		$__templater->includeJs(array(
			'src' => 'DBTech/eCommerce/metafizzy/infinite-scroll/infinite-scroll.pkgd.js',
			'min' => '1',
			'addon' => 'DBTech/eCommerce',
		));
		$__finalCompiled .= '
	';
		$__templater->includeJs(array(
			'src' => 'DBTech/eCommerce/product_list.js',
			'min' => '1',
			'addon' => 'DBTech/eCommerce',
		));
		$__finalCompiled .= '

	';
		$__templater->includeCss('dbtech_ecommerce_infinite_scroll.less');
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

<div class="block" data-xf-init="' . ($__vars['canInlineMod'] ? 'inline-mod' : '') . '" data-type="dbtech_ecommerce_product" data-href="' . $__templater->fn('link', array('inline-mod', ), true) . '">
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
	if ($__templater->method($__vars['category'], 'canWatch', array())) {
		$__compilerTemp2 .= '
							';
		$__compilerTemp3 = '';
		if ($__vars['category']['Watch'][$__vars['xf']['visitor']['user_id']]) {
			$__compilerTemp3 .= 'Unwatch';
		} else {
			$__compilerTemp3 .= 'Watch';
		}
		$__compilerTemp2 .= $__templater->button('
								' . $__compilerTemp3 . '
							', array(
			'href' => $__templater->fn('link', array('dbtech-ecommerce/categories/watch', $__vars['category'], ), false),
			'class' => 'button--link',
			'data-xf-click' => 'switch-overlay',
			'data-sk-watch' => 'Watch',
			'data-sk-unwatch' => 'Unwatch',
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

		' . $__compilerTemp1 . '

	') . '</div>

	<div class="block-container ';
	if ($__templater->fn('property', array('dbtechEcommerceProductListStyle', ), false) == 'grid') {
		$__finalCompiled .= 'block-container--grid';
	} else {
		$__finalCompiled .= 'block-container--list';
	}
	$__finalCompiled .= '">
		' . $__templater->callMacro('dbtech_ecommerce_overview_macros', 'list_filter_bar', array(
		'filters' => $__vars['filters'],
		'baseLinkPath' => 'dbtech-ecommerce/categories',
		'category' => $__vars['category'],
		'ownerFilter' => $__vars['ownerFilter'],
		'platformFilter' => $__vars['platformFilter'],
		'productFieldFilter' => $__vars['productFieldFilter'],
	), $__vars) . '

		<div class="block-body">
			';
	if (!$__templater->test($__vars['products'], 'empty', array())) {
		$__finalCompiled .= '
				';
		if ($__templater->fn('property', array('dbtechEcommerceProductListStyle', ), false) == 'grid') {
			$__finalCompiled .= '
					';
			$__templater->includeCss('dbtech_ecommerce_product_grid.less');
			$__finalCompiled .= '

					<div class="productList-grid grid-' . $__templater->fn('property', array('nlDBTech_ecommGridItemsPerRow', ), true) . '"
						 data-xf-init="' . ($__vars['infiniteScroll'] ? 'dbtech-ecommerce-infinite-scroll' : '') . '"
						 data-infinite-scroll-click="' . $__templater->fn('property', array('dbtechEcommerceInfiniteScrollClick', ), true) . '"
						 data-infinite-scroll-after="' . $__templater->fn('property', array('dbtechEcommerceInfiniteScrollAfter', ), true) . '"
						 data-infinite-scroll-history="' . $__templater->fn('property', array('dbtechEcommerceInfiniteScrollHistory', ), true) . '"
					>
						';
			if ($__templater->isTraversable($__vars['products'])) {
				foreach ($__vars['products'] AS $__vars['product']) {
					$__finalCompiled .= '
							' . $__templater->callMacro('dbtech_ecommerce_product_list_macros', 'product_grid', array(
						'filters' => $__vars['filters'],
						'baseLinkPath' => 'dbtech-ecommerce/categories',
						'product' => $__vars['product'],
						'showOwner' => ($__templater->fn('property', array('dbtechEcommerceShowOwnerOverview', ), false) ? true : false),
						'category' => $__vars['category'],
						'allowInlineMod' => $__vars['canInlineMod'],
					), $__vars) . '
						';
				}
			}
			$__finalCompiled .= '
					</div>
				';
		} else {
			$__finalCompiled .= '
					<div class="structItemContainer"
						 data-xf-init="' . ($__vars['infiniteScroll'] ? 'dbtech-ecommerce-infinite-scroll' : '') . '"
						 data-infinite-scroll-click="' . $__templater->fn('property', array('dbtechEcommerceInfiniteScrollClick', ), true) . '"
						 data-infinite-scroll-after="' . $__templater->fn('property', array('dbtechEcommerceInfiniteScrollAfter', ), true) . '"
						 data-infinite-scroll-history="' . $__templater->fn('property', array('dbtechEcommerceInfiniteScrollHistory', ), true) . '"
					>
						';
			if ($__templater->isTraversable($__vars['products'])) {
				foreach ($__vars['products'] AS $__vars['product']) {
					$__finalCompiled .= '
							' . $__templater->callMacro('dbtech_ecommerce_product_list_macros', 'product', array(
						'filters' => $__vars['filters'],
						'baseLinkPath' => 'dbtech-ecommerce/categories',
						'product' => $__vars['product'],
						'showOwner' => ($__templater->fn('property', array('dbtechEcommerceShowOwnerOverview', ), false) ? true : false),
						'category' => $__vars['category'],
						'allowInlineMod' => $__vars['canInlineMod'],
					), $__vars) . '
						';
				}
			}
			$__finalCompiled .= '
					</div>
				';
		}
		$__finalCompiled .= '
			';
	} else if ($__vars['filters']) {
		$__finalCompiled .= '
				<div class="block-row">' . 'dbtech_ecommerce_there_no_products_matching_your_filters' . '</div>
			';
	} else {
		$__finalCompiled .= '
				<div class="block-row">' . 'dbtech_ecommerce_no_products_have_been_created_yet' . '</div>
			';
	}
	$__finalCompiled .= '
		</div>
	</div>

	';
	if ($__vars['infiniteScroll']) {
		$__finalCompiled .= '
		<div class="block-row product-status">
			<div class="product-ellipsis infinite-scroll-request">
				<span class="product-ellipsis--dot"></span>
				<span class="product-ellipsis--dot"></span>
				<span class="product-ellipsis--dot"></span>
				<span class="product-ellipsis--dot"></span>
			</div>
		</div>

		<div class="block-row product-loader">
			' . $__templater->button('dbtech_ecommerce_load_more...', array(
			'class' => 'product-button button--cta',
		), '', array(
		)) . '
		</div>
	';
	}
	$__finalCompiled .= '

	<div class="block-outer block-outer--after block-outer--pagination">
		' . $__templater->fn('page_nav', array(array(
		'page' => $__vars['page'],
		'total' => $__vars['total'],
		'link' => 'dbtech-ecommerce/categories',
		'data' => $__vars['category'],
		'params' => $__vars['filters'],
		'wrapperclass' => 'block-outer-main',
		'perPage' => $__vars['perPage'],
	))) . '
		' . $__templater->fn('show_ignored', array(array(
		'wrapperclass' => 'block-outer-opposite',
	))) . '
	</div>
</div>

';
	$__templater->setPageParam('sideNavTitle', 'Categories');
	$__finalCompiled .= '
';
	$__templater->modifySideNavHtml(null, '
	' . $__templater->callMacro('dbtech_ecommerce_category_list_macros', 'simple_list_block', array(
		'categoryTree' => $__vars['categoryTree'],
		'categoryExtras' => $__vars['categoryExtras'],
		'selected' => $__vars['category']['category_id'],
	), $__vars) . '
', 'replace');
	$__finalCompiled .= '

';
	$__templater->modifySideNavHtml('_xfWidgetPositionSideNavDbtechEcommerceCategorySidenav', $__templater->widgetPosition('dbtech_ecommerce_category_sidenav', array(
		'category' => $__vars['category'],
	)), 'replace');
	return $__finalCompiled;
});