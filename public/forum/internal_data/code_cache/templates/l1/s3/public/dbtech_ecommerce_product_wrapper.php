<?php
// FROM HASH: 191f5847dfda857ee9820e33a1a005bb
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->breadcrumbs($__templater->method($__vars['product']['Category'], 'getBreadcrumbs', array()));
	$__finalCompiled .= '
';
	if ($__templater->method($__vars['product'], 'isAddOn', array())) {
		$__finalCompiled .= '
	';
		$__templater->breadcrumb($__templater->preEscaped($__templater->escape($__vars['product']['Parent']['title'])), $__templater->fn('link', array('dbtech-ecommerce', $__vars['product']['Parent'], ($__vars['license'] ? array('license_key' => $__vars['license']['license_key'], ) : array()), ), false), array(
		));
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	$__templater->includeCss('dbtech_ecommerce.less');
	$__finalCompiled .= '

' . $__templater->callMacro('dbtech_ecommerce_product_page_macros', 'product_page_options', array(
		'category' => $__vars['product']['Category'],
		'product' => $__vars['product'],
	), $__vars) . '

' . $__templater->callMacro('lightbox_macros', 'setup', array(
		'canViewAttachments' => $__templater->method($__vars['product'], 'canViewProductImages', array()),
	), $__vars) . '

';
	$__compilerTemp1 = '';
	if ($__vars['xf']['options']['enableTagging'] AND ($__templater->method($__vars['product'], 'canEditTags', array()) OR $__vars['product']['tags'])) {
		$__compilerTemp1 .= '
			<li>
				<i class="fa fa-tags" aria-hidden="true" title="' . $__templater->filter('Tags', array(array('for_attr', array()),), true) . '"></i>
				<span class="u-srOnly">' . 'Tags' . '</span>

				';
		if ($__vars['product']['tags']) {
			$__compilerTemp1 .= '
					';
			if ($__templater->isTraversable($__vars['product']['tags'])) {
				foreach ($__vars['product']['tags'] AS $__vars['tag']) {
					$__compilerTemp1 .= '
						<a href="' . $__templater->fn('link', array('tags', $__vars['tag'], ), true) . '" class="tagItem" dir="auto">' . $__templater->escape($__vars['tag']['tag']) . '</a>
					';
				}
			}
			$__compilerTemp1 .= '
					';
		} else {
			$__compilerTemp1 .= '
					' . 'None' . '
				';
		}
		$__compilerTemp1 .= '
				';
		if ($__templater->method($__vars['product'], 'canEditTags', array())) {
			$__compilerTemp1 .= '
					<a href="' . $__templater->fn('link', array('dbtech-ecommerce/tags', $__vars['product'], ), true) . '" class="u-concealed" data-xf-click="overlay"
					   data-xf-init="tooltip" title="' . $__templater->filter('Edit tags', array(array('for_attr', array()),), true) . '">
						<i class="fa fa-pencil" aria-hidden="true"></i>
						<span class="u-srOnly">' . 'Edit' . '</span>
					</a>
				';
		}
		$__compilerTemp1 .= '
			</li>
		';
	}
	$__templater->pageParams['pageDescription'] = $__templater->preEscaped('
	<ul class="listInline listInline--bullet">
		<li>
			<i class="fa fa-user" aria-hidden="true" title="' . $__templater->filter('dbtech_ecommerce_seller', array(array('for_attr', array()),), true) . '"></i>
			<span class="u-srOnly">' . 'dbtech_ecommerce_seller' . '</span>

			' . $__templater->fn('username_link', array($__vars['product']['User'], false, array(
		'defaultname' => $__vars['product']['username'],
		'class' => 'u-concealed',
	))) . '
		</li>
		<li>
			<i class="fa fa-clock-o" aria-hidden="true" title="' . $__templater->filter('dbtech_ecommerce_creation_date', array(array('for_attr', array()),), true) . '"></i>
			<span class="u-srOnly">' . 'dbtech_ecommerce_creation_date' . '</span>

			<a href="' . $__templater->fn('link', array('dbtech-ecommerce', $__vars['product'], ), true) . '" class="u-concealed">' . $__templater->fn('date_dynamic', array($__vars['product']['creation_date'], array(
	))) . '</a>
		</li>
		' . $__compilerTemp1 . '
	</ul>
	<div class="p-description">' . $__templater->escape($__vars['product']['tagline']) . '</div>
');
	$__templater->pageParams['pageDescriptionMeta'] = false;
	$__finalCompiled .= '

';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
			';
	if ($__vars['product']['product_state'] == 'deleted') {
		$__compilerTemp2 .= '
				<dd class="blockStatus-message blockStatus-message--deleted">
					' . $__templater->callMacro('deletion_macros', 'notice', array(
			'log' => $__vars['product']['DeletionLog'],
		), $__vars) . '
				</dd>
				';
	} else if ($__vars['product']['product_state'] == 'moderated') {
		$__compilerTemp2 .= '
				<dd class="blockStatus-message blockStatus-message--moderated">
					' . 'Awaiting approval before being displayed publicly.' . '
				</dd>
			';
	}
	$__compilerTemp2 .= '
		';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__finalCompiled .= '
	<dl class="blockStatus blockStatus--standalone">
		<dt>' . 'Status' . '</dt>
		' . $__compilerTemp2 . '
	</dl>
';
	}
	$__finalCompiled .= '

<div class="block">
	';
	$__compilerTemp3 = '';
	$__compilerTemp3 .= '
					';
	if ($__templater->method($__vars['product'], 'canRate', array(false, )) AND $__vars['xf']['options']['dbtechEcommerceEnableRate']) {
		$__compilerTemp3 .= '
						' . $__templater->button('
							' . 'Leave a rating' . '
						', array(
			'href' => $__templater->fn('link', array('dbtech-ecommerce/rate', $__vars['product'], ), false),
			'overlay' => 'true',
		), '', array(
		)) . '
					';
	}
	$__compilerTemp3 .= '
					';
	if ($__templater->method($__vars['product'], 'canReleaseUpdate', array())) {
		$__compilerTemp3 .= '
						' . $__templater->button('dbtech_ecommerce_release_update', array(
			'href' => $__templater->fn('link', array('dbtech-ecommerce/release/add', $__vars['product'], ), false),
			'overlay' => 'true',
		), '', array(
		)) . '
					';
	}
	$__compilerTemp3 .= '

					';
	$__compilerTemp4 = '';
	$__compilerTemp4 .= '
								';
	if ($__templater->method($__vars['product'], 'canUndelete', array()) AND ($__vars['product']['product_state'] == 'deleted')) {
		$__compilerTemp4 .= '
									' . $__templater->button('
										' . 'Undelete' . '
									', array(
			'href' => $__templater->fn('link', array('dbtech-ecommerce/undelete', $__vars['product'], ), false),
			'class' => 'button--link',
			'overlay' => 'true',
		), '', array(
		)) . '
								';
	}
	$__compilerTemp4 .= '
								';
	if ($__templater->method($__vars['product'], 'canApproveUnapprove', array()) AND ($__vars['product']['product_state'] == 'moderated')) {
		$__compilerTemp4 .= '
									' . $__templater->button('
										' . 'Approve' . '
									', array(
			'href' => $__templater->fn('link', array('dbtech-ecommerce/approve', $__vars['product'], ), false),
			'class' => 'button--link',
			'overlay' => 'true',
		), '', array(
		)) . '
								';
	}
	$__compilerTemp4 .= '
								';
	if ($__templater->method($__vars['product'], 'canWatch', array())) {
		$__compilerTemp4 .= '
									';
		$__compilerTemp5 = '';
		if ($__vars['product']['Watch'][$__vars['xf']['visitor']['user_id']]) {
			$__compilerTemp5 .= '
											' . 'Unwatch' . '
											';
		} else {
			$__compilerTemp5 .= '
											' . 'Watch' . '
										';
		}
		$__compilerTemp4 .= $__templater->button('

										' . $__compilerTemp5 . '
									', array(
			'href' => $__templater->fn('link', array('dbtech-ecommerce/watch', $__vars['product'], ), false),
			'class' => 'button--link',
			'data-xf-click' => 'switch-overlay',
			'data-sk-watch' => 'Watch',
			'data-sk-unwatch' => 'Unwatch',
		), '', array(
		)) . '
								';
	}
	$__compilerTemp4 .= '

								';
	if ($__templater->method($__vars['product'], 'canBookmarkContent', array())) {
		$__compilerTemp4 .= '
									' . $__templater->callMacro('bookmark_macros', 'button', array(
			'content' => $__vars['product'],
			'confirmUrl' => $__templater->fn('link', array('dbtech-ecommerce/bookmark', $__vars['product'], ), false),
		), $__vars) . '
								';
	}
	$__compilerTemp4 .= '

								';
	$__compilerTemp6 = '';
	$__compilerTemp6 .= '
													' . '
													';
	if ($__templater->method($__vars['product'], 'canEdit', array())) {
		$__compilerTemp6 .= '
														<a href="' . $__templater->fn('link', array('dbtech-ecommerce/edit', $__vars['product'], ), true) . '" class="menu-linkRow">' . 'dbtech_ecommerce_edit_product' . '</a>
													';
	}
	$__compilerTemp6 .= '
													';
	if ($__templater->method($__vars['product'], 'canEditIcon', array())) {
		$__compilerTemp6 .= '
														<a href="' . $__templater->fn('link', array('dbtech-ecommerce/edit-icon', $__vars['product'], ), true) . '" class="menu-linkRow" data-xf-click="overlay">' . 'dbtech_ecommerce_edit_product_icon' . '</a>
													';
	}
	$__compilerTemp6 .= '
													';
	if ($__templater->method($__vars['product'], 'canAddAddOn', array())) {
		$__compilerTemp6 .= '
														<a href="' . $__templater->fn('link', array('dbtech-ecommerce/add-on/add', $__vars['product'], ), true) . '" class="menu-linkRow">' . 'dbtech_ecommerce_add_addon_product' . '</a>
													';
	}
	$__compilerTemp6 .= '
													';
	if ($__templater->method($__vars['product'], 'canMove', array())) {
		$__compilerTemp6 .= '
														<a href="' . $__templater->fn('link', array('dbtech-ecommerce/move', $__vars['product'], ), true) . '" data-xf-click="overlay" class="menu-linkRow">' . 'dbtech_ecommerce_move_product' . '</a>
													';
	}
	$__compilerTemp6 .= '
													';
	if ($__templater->method($__vars['product'], 'canChangeParent', array())) {
		$__compilerTemp6 .= '
														<a href="' . $__templater->fn('link', array('dbtech-ecommerce/add-on/move', $__vars['product'], ), true) . '" data-xf-click="overlay" class="menu-linkRow">' . 'dbtech_ecommerce_change_parent_product' . '</a>
													';
	}
	$__compilerTemp6 .= '
													';
	if ($__templater->method($__vars['product'], 'canReassign', array())) {
		$__compilerTemp6 .= '
														<a href="' . $__templater->fn('link', array('dbtech-ecommerce/reassign', $__vars['product'], ), true) . '" data-xf-click="overlay" class="menu-linkRow">' . 'dbtech_ecommerce_reassign_product' . '</a>
													';
	}
	$__compilerTemp6 .= '
													';
	if ($__templater->method($__vars['product'], 'canDelete', array('soft', ))) {
		$__compilerTemp6 .= '
														<a href="' . $__templater->fn('link', array('dbtech-ecommerce/delete', $__vars['product'], ), true) . '" data-xf-click="overlay" class="menu-linkRow">' . 'dbtech_ecommerce_delete_product' . '</a>
													';
	}
	$__compilerTemp6 .= '
													' . '
													';
	if ($__templater->method($__vars['product'], 'canUseInlineModeration', array())) {
		$__compilerTemp6 .= '
														<div class="menu-footer"
															 data-xf-init="inline-mod"
															 data-type="dbtech_ecommerce_product"
															 data-href="' . $__templater->fn('link', array('inline-mod', ), true) . '"
															 data-toggle=".js-productInlineModToggle">
															' . $__templater->formCheckBox(array(
		), array(array(
			'class' => 'js-productInlineModToggle',
			'label' => 'Select for moderation',
			'_type' => 'option',
		))) . '
														</div>
														';
		$__templater->includeJs(array(
			'src' => 'xf/inline_mod.js',
			'min' => '1',
		));
		$__compilerTemp6 .= '
													';
	}
	$__compilerTemp6 .= '
													' . '
												';
	if (strlen(trim($__compilerTemp6)) > 0) {
		$__compilerTemp4 .= '
									<div class="buttonGroup-buttonWrapper">
										' . $__templater->button('&#8226;&#8226;&#8226;', array(
			'class' => 'button--link menuTrigger',
			'data-xf-click' => 'menu',
			'aria-expanded' => 'false',
			'aria-haspopup' => 'true',
			'title' => $__templater->filter('More options', array(array('for_attr', array()),), false),
		), '', array(
		)) . '
										<div class="menu" data-menu="menu" aria-hidden="true">
											<div class="menu-content">
												<h4 class="menu-header">' . 'More options' . '</h4>
												' . $__compilerTemp6 . '
											</div>
										</div>
									</div>
								';
	}
	$__compilerTemp4 .= '
							';
	if (strlen(trim($__compilerTemp4)) > 0) {
		$__compilerTemp3 .= '
						<div class="buttonGroup">
							' . $__compilerTemp4 . '
						</div>
					';
	}
	$__compilerTemp3 .= '
				';
	if (strlen(trim($__compilerTemp3)) > 0) {
		$__finalCompiled .= '
		<div class="block-outer">
			<div class="block-outer-opposite">
				' . $__compilerTemp3 . '
			</div>
		</div>
	';
	}
	$__finalCompiled .= '

	<div class="block-outer js-productStatusField">';
	$__compilerTemp7 = '';
	$__compilerTemp8 = '';
	$__compilerTemp8 .= '
					' . $__templater->callMacro('custom_fields_macros', 'custom_fields_view', array(
		'type' => 'dbtechEcommerceProducts',
		'group' => 'above_main',
		'onlyInclude' => $__vars['category']['field_cache'],
		'set' => $__vars['product']['product_fields'],
		'wrapperClass' => 'blockStatus-message',
	), $__vars) . '
				';
	if (strlen(trim($__compilerTemp8)) > 0) {
		$__compilerTemp7 .= '
			<div class="blockStatus blockStatus--info">
				' . $__compilerTemp8 . '
			</div>
		';
	}
	$__finalCompiled .= trim('
		' . $__compilerTemp7 . '
	') . '</div>

	<div class="block-container productContainer productContainer--attachments-' . $__templater->fn('property', array('nlDBTechEcommSlickAttachPos', ), true) . '">
		<div class="block-body">
			';
	if ($__templater->fn('property', array('nlDBTechEcommUseNlLayout', ), false) == false) {
		$__finalCompiled .= '
				<div class="block-row">
					<div class="block-row--productIcon">' . $__templater->fn('dbtech_ecommerce_product_icon', array($__vars['product'], 'l', ), true) . '</div>
					' . $__templater->fn('bb_code', array($__vars['product']['description'], 'dbtech_ecommerce_description', $__vars['product'], ), true) . '
				</div>
				';
		$__compilerTemp9 = '';
		$__compilerTemp9 .= '
												';
		if ($__templater->isTraversable($__vars['product']['Attachments'])) {
			foreach ($__vars['product']['Attachments'] AS $__vars['attachment']) {
				$__compilerTemp9 .= '
													' . $__templater->callMacro('attachment_macros', 'attachment_list_item', array(
					'attachment' => $__vars['attachment'],
					'canView' => $__templater->method($__vars['product'], 'canViewProductImages', array()),
				), $__vars) . '
												';
			}
		}
		$__compilerTemp9 .= '
											';
		if (strlen(trim($__compilerTemp9)) > 0) {
			$__finalCompiled .= '
					<div class="block-row">
						<div class="lbContainer js-productBody"
							 data-xf-init="lightbox">

							<div class="productBody">
								<div class="productBody--main js-lbContainer"
									 data-lb-id="dbtech_ecommerce_product-' . $__templater->escape($__vars['product']['product_id']) . '"
									 data-lb-caption-title="' . $__templater->escape($__vars['product']['title']) . '"
									 data-lb-caption-desc="' . ($__vars['product']['User'] ? $__templater->escape($__vars['product']['User']['username']) : $__templater->escape($__vars['product']['username'])) . ' &middot; ' . $__templater->fn('date_time', array($__vars['product']['creation_date'], ), true) . '">

										';
			$__templater->includeCss('attachments.less');
			$__finalCompiled .= '
										<ul class="attachmentList productBody--attachments">
											' . $__compilerTemp9 . '
										</ul>
								</div>
							</div>
						</div>
					</div>
				';
		}
		$__finalCompiled .= '
			';
	} else {
		$__finalCompiled .= '
				<div class="block-row">
					';
		if ($__templater->fn('property', array('nlDBTechEcommSlickAttachPos', ), false) == 'side') {
			$__finalCompiled .= '
						';
			$__compilerTemp10 = '';
			$__compilerTemp10 .= '
													';
			if ($__templater->isTraversable($__vars['product']['Attachments'])) {
				foreach ($__vars['product']['Attachments'] AS $__vars['attachment']) {
					$__compilerTemp10 .= '
														' . $__templater->callMacro('attachment_macros', 'attachment_list_item', array(
						'attachment' => $__vars['attachment'],
						'canView' => $__templater->method($__vars['product'], 'canViewProductImages', array()),
					), $__vars) . '
													';
				}
			}
			$__compilerTemp10 .= '
												';
			if (strlen(trim($__compilerTemp10)) > 0) {
				$__finalCompiled .= '
							<div class="lbContainer js-productBody productAttachments-aside"
							 data-xf-init="lightbox">

								<div class="productBody">
									<div class="productBody--main js-lbContainer"
										 data-lb-id="dbtech_ecommerce_product-' . $__templater->escape($__vars['product']['product_id']) . '"
										 data-lb-caption-title="' . $__templater->escape($__vars['product']['title']) . '"
										 data-lb-caption-desc="' . ($__vars['product']['User'] ? $__templater->escape($__vars['product']['User']['username']) : $__templater->escape($__vars['product']['username'])) . ' &middot; ' . $__templater->fn('date_time', array($__vars['product']['creation_date'], ), true) . '">

										';
				$__templater->includeCss('attachments.less');
				$__finalCompiled .= '
										<div class="slick-container">
											' . $__templater->callMacro('nl_slick_macros', 'custom', array(
					'element' => '.productBody--attachments',
					'animation' => 'slide',
					'dots' => 'false',
					'arrows' => 'true',
					'autoplay' => 'false',
					'show' => '4',
					'scroll' => '1',
					'vertical' => 'true',
				), $__vars) . '
											<ul class="attachmentList productBody--attachments">
												' . $__compilerTemp10 . '
											</ul>
										</div>
									</div>
								</div>
							</div>
						';
			}
			$__finalCompiled .= '
					';
		}
		$__finalCompiled .= '
					<div class="product-feature-img">
						<img src="' . $__templater->fn('link', array('attachments', $__templater->method($__vars['product']['Attachments'], 'first', array()), ), true) . '" title="' . $__templater->escape($__vars['attachment']['filename']) . '" />
					</div>
				</div>
				';
		if ($__templater->fn('property', array('nlDBTechEcommSlickAttachPos', ), false) == 'below') {
			$__finalCompiled .= '
				';
			$__compilerTemp11 = '';
			$__compilerTemp11 .= '
												';
			if ($__templater->isTraversable($__vars['product']['Attachments'])) {
				foreach ($__vars['product']['Attachments'] AS $__vars['attachment']) {
					$__compilerTemp11 .= '
													' . $__templater->callMacro('attachment_macros', 'attachment_list_item', array(
						'attachment' => $__vars['attachment'],
						'canView' => $__templater->method($__vars['product'], 'canViewProductImages', array()),
					), $__vars) . '
												';
				}
			}
			$__compilerTemp11 .= '
											';
			if (strlen(trim($__compilerTemp11)) > 0) {
				$__finalCompiled .= '
					<div class="block-row">
						<div class="lbContainer js-productBody"
							 data-xf-init="lightbox">

							<div class="productBody">
								<div class="productBody--main js-lbContainer"
									 data-lb-id="dbtech_ecommerce_product-' . $__templater->escape($__vars['product']['product_id']) . '"
									 data-lb-caption-title="' . $__templater->escape($__vars['product']['title']) . '"
									 data-lb-caption-desc="' . ($__vars['product']['User'] ? $__templater->escape($__vars['product']['User']['username']) : $__templater->escape($__vars['product']['username'])) . ' &middot; ' . $__templater->fn('date_time', array($__vars['product']['creation_date'], ), true) . '">

									';
				$__templater->includeCss('attachments.less');
				$__finalCompiled .= '
									<div class="slick-container">
										' . $__templater->callMacro('nl_slick_macros', 'default', array(
					'element' => '.productBody--attachments',
					'animation' => 'slide',
					'dots' => 'false',
					'arrows' => 'true',
					'autoplay' => 'false',
					'show' => '4',
					'scroll' => '1',
					'vertical' => 'false',
				), $__vars) . '
										<ul class="attachmentList productBody--attachments">
											' . $__compilerTemp11 . '
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				';
			}
			$__finalCompiled .= '
				';
		}
		$__finalCompiled .= '
				
				';
		$__compilerTemp12 = '';
		$__compilerTemp12 .= '
								' . $__templater->fn('bb_code', array($__vars['product']['description'], 'dbtech_ecommerce_description', $__vars['product'], ), true) . '
							';
		if (strlen(trim($__compilerTemp12)) > 0) {
			$__finalCompiled .= '
					<div class="block-row">
						<div class="short-description">
							' . $__compilerTemp12 . '
						</div>
					</div>
				';
		}
		$__finalCompiled .= '
				
			';
	}
	$__finalCompiled .= '
		</div>
	</div>
</div>

<div class="block">
	<div class="block-container">
		';
	$__compilerTemp13 = '';
	$__compilerTemp13 .= '
						';
	if (!$__templater->test($__vars['product']['product_specification'], 'empty', array())) {
		$__compilerTemp13 .= '
							<a class="tabs-tab ' . (($__vars['pageSelected'] == 'specifications') ? 'is-active' : '') . '" href="' . $__templater->fn('link', array('dbtech-ecommerce/specifications', $__vars['product'], ($__vars['license'] ? array('license_key' => $__vars['license']['license_key'], ) : array()), ), true) . '">' . ($__templater->method($__vars['product'], 'isDigital', array()) ? 'dbtech_ecommerce_feature_list' : 'dbtech_ecommerce_product_specifications') . '</a>
						';
	}
	$__compilerTemp13 .= '
						';
	if (!$__templater->test($__vars['product']['copyright_info'], 'empty', array())) {
		$__compilerTemp13 .= '
							<a class="tabs-tab ' . (($__vars['pageSelected'] == 'copyright') ? 'is-active' : '') . '" href="' . $__templater->fn('link', array('dbtech-ecommerce/copyright', $__vars['product'], ($__vars['license'] ? array('license_key' => $__vars['license']['license_key'], ) : array()), ), true) . '">' . 'dbtech_ecommerce_copyright_info' . '</a>
						';
	}
	$__compilerTemp13 .= '
						';
	$__compilerTemp14 = $__templater->method($__vars['product'], 'getExtraFieldTabs', array());
	if ($__templater->isTraversable($__compilerTemp14)) {
		foreach ($__compilerTemp14 AS $__vars['fieldId'] => $__vars['fieldValue']) {
			$__compilerTemp13 .= '
							<a class="tabs-tab ' . (($__vars['pageSelected'] == ('field_' . $__vars['fieldId'])) ? 'is-active' : '') . '" href="' . $__templater->fn('link', array('dbtech-ecommerce/field', $__vars['product'], array('field' => $__vars['fieldId'], ), ), true) . '">' . $__templater->escape($__vars['fieldValue']) . '</a>
						';
		}
	}
	$__compilerTemp13 .= '
						';
	if ($__templater->method($__vars['product'], 'isDigital', array()) AND $__vars['product']['release_count']) {
		$__compilerTemp13 .= '
							<a class="tabs-tab ' . (($__vars['pageSelected'] == 'releases') ? 'is-active' : '') . '" href="' . $__templater->fn('link', array('dbtech-ecommerce/releases', $__vars['product'], ($__vars['license'] ? array('license_key' => $__vars['license']['license_key'], ) : array()), ), true) . '">' . 'dbtech_ecommerce_releases' . ' ' . $__templater->filter($__vars['product']['real_release_count'], array(array('parens', array()),), true) . '</a>
						';
	}
	$__compilerTemp13 .= '
						';
	if ($__templater->method($__vars['product'], 'isDigital', array()) AND !$__templater->test($__vars['product']['UserLicenses'], 'empty', array())) {
		$__compilerTemp13 .= '
							<a class="tabs-tab ' . (($__vars['pageSelected'] == 'user_licenses') ? 'is-active' : '') . '" href="' . $__templater->fn('link', array('dbtech-ecommerce/product-licenses', $__vars['product'], ($__vars['license'] ? array('license_key' => $__vars['license']['license_key'], ) : array()), ), true) . '">' . 'dbtech_ecommerce_licenses' . '</a>
						';
	}
	$__compilerTemp13 .= '
						';
	if ($__vars['product']['real_review_count']) {
		$__compilerTemp13 .= '
							<a class="tabs-tab ' . (($__vars['pageSelected'] == 'reviews') ? 'is-active' : '') . '" href="' . $__templater->fn('link', array('dbtech-ecommerce/reviews', $__vars['product'], ($__vars['license'] ? array('license_key' => $__vars['license']['license_key'], ) : array()), ), true) . '">' . 'dbtech_ecommerce_reviews' . ' ' . $__templater->filter($__vars['product']['real_review_count'], array(array('parens', array()),), true) . '</a>
						';
	}
	$__compilerTemp13 .= '
						';
	if ($__templater->method($__vars['product'], 'hasViewableDiscussion', array())) {
		$__compilerTemp13 .= '
							<a class="tabs-tab ' . (($__vars['pageSelected'] == 'discussion') ? 'is-active' : '') . '" href="' . $__templater->fn('link', array('threads', $__vars['product']['Discussion'], ), true) . '">' . 'dbtech_ecommerce_discussion' . '</a>
						';
	}
	$__compilerTemp13 .= '
					';
	if (strlen(trim($__compilerTemp13)) > 0) {
		$__finalCompiled .= '
			<h2 class="block-tabHeader tabs hScroller" data-xf-init="h-scroller">
				<span class="hScroller-scroll">
					<!--[DBTecheCommerce:tabs:start]-->
					<a class="tabs-tab ' . (($__vars['pageSelected'] == 'overview') ? 'is-active' : '') . '" href="' . $__templater->fn('link', array('dbtech-ecommerce', $__vars['product'], ($__vars['license'] ? array('license_key' => $__vars['license']['license_key'], ) : array()), ), true) . '">' . 'Overview' . '</a>

					' . $__compilerTemp13 . '
					<!--[DBTecheCommerce:tabs:end]-->
				</span>
			</h2>
		';
	}
	$__finalCompiled .= '
		' . $__templater->filter($__vars['innerContent'], array(array('raw', array()),), true) . '
	</div>

	';
	$__compilerTemp15 = '';
	$__compilerTemp15 .= '
				' . $__templater->fn('page_nav', array(array(
		'page' => $__vars['page'],
		'total' => $__vars['total'],
		'link' => 'dbtech-ecommerce/' . $__vars['pageSelected'],
		'data' => $__vars['product'],
		'params' => $__vars['licenseParams'],
		'wrapperclass' => 'block-outer-main',
		'perPage' => $__vars['perPage'],
	))) . '
			';
	if (strlen(trim($__compilerTemp15)) > 0) {
		$__finalCompiled .= '
		<div class="block-outer block-outer--after">
			' . $__compilerTemp15 . '
		</div>
	';
	}
	$__finalCompiled .= '
</div>


';
	$__compilerTemp16 = '';
	$__compilerTemp17 = '';
	$__compilerTemp17 .= '
					';
	if ((!$__vars['license']) OR $__templater->method($__vars['product'], 'canPurchase', array($__vars['license'], ))) {
		$__compilerTemp17 .= '
						<div class="block-body block-row block-row--minor block-row--pricingInfo">
							';
		if (!$__templater->test($__vars['product']['Costs'], 'empty', array())) {
			$__compilerTemp17 .= '
								';
			if ($__templater->isTraversable($__vars['product']['Costs'])) {
				foreach ($__vars['product']['Costs'] AS $__vars['cost']) {
					$__compilerTemp17 .= '
									';
					if ($__templater->method($__vars['cost'], 'isDigital', array())) {
						$__compilerTemp17 .= '
										<dl class="pairs pairs--justified pairs--price">
											<dt>' . $__templater->escape($__vars['cost']['length']) . '</dt>
											<dd>' . (($__templater->method($__vars['cost'], 'getPrice', array($__vars['license'], )) == 0) ? 'dbtech_ecommerce_free' : $__templater->filter($__templater->method($__vars['cost'], 'getPrice', array($__vars['license'], )), array(array('currency', array($__vars['xf']['options']['dbtechEcommerceCurrency'], )),), true)) . '</dd>
										</dl>
									';
					} else {
						$__compilerTemp17 .= '
										<dl class="pairs pairs--justified pairs--stock">
											<dt>' . $__templater->escape($__vars['cost']['title']) . '</dt>
											';
						if ($__vars['cost']['stock']) {
							$__compilerTemp17 .= '
												<dd>' . (($__templater->method($__vars['cost'], 'getPrice', array()) == 0) ? 'dbtech_ecommerce_free' : $__templater->filter($__templater->method($__vars['cost'], 'getPrice', array()), array(array('currency', array($__vars['xf']['options']['dbtechEcommerceCurrency'], )),), true)) . '</dd>
											';
						} else {
							$__compilerTemp17 .= '
												<dd>' . 'dbtech_ecommerce_out_of_stock' . ' - <span class="u-muted" style="text-decoration:line-through">' . (($__templater->method($__vars['cost'], 'getPrice', array()) == 0) ? 'dbtech_ecommerce_free' : $__templater->filter($__templater->method($__vars['cost'], 'getPrice', array()), array(array('currency', array($__vars['xf']['options']['dbtechEcommerceCurrency'], )),), true)) . '</span></dd>
											';
						}
						$__compilerTemp17 .= '
										</dl>
									';
					}
					$__compilerTemp17 .= '
								';
				}
			}
			$__compilerTemp17 .= '
							';
		}
		$__compilerTemp17 .= '
						</div>
					';
	}
	$__compilerTemp17 .= '

					';
	if (!$__templater->test($__vars['product']['Children'], 'empty', array())) {
		$__compilerTemp17 .= '
						';
		if ($__templater->isTraversable($__vars['product']['Children'])) {
			foreach ($__vars['product']['Children'] AS $__vars['childProduct']) {
				if ($__templater->method($__vars['childProduct'], 'canView', array())) {
					$__compilerTemp17 .= '
							<h3 class="block-minorHeader">' . $__templater->escape($__vars['childProduct']['title']) . '</h3>

							<div class="block-body block-row block-row--minor block-row--childProducts">
								';
					if (!$__templater->test($__vars['childProduct']['Costs'], 'empty', array())) {
						$__compilerTemp17 .= '
									';
						if ($__templater->isTraversable($__vars['childProduct']['Costs'])) {
							foreach ($__vars['childProduct']['Costs'] AS $__vars['cost']) {
								$__compilerTemp17 .= '
										';
								if ($__templater->method($__vars['cost'], 'isDigital', array())) {
									$__compilerTemp17 .= '
											<dl class="pairs pairs--justified pairs--price">
												<dt>' . $__templater->escape($__vars['cost']['length']) . '</dt>
												<dd>' . (($__templater->method($__vars['cost'], 'getPrice', array()) == 0) ? 'dbtech_ecommerce_free' : $__templater->filter($__templater->method($__vars['cost'], 'getPrice', array()), array(array('currency', array($__vars['xf']['options']['dbtechEcommerceCurrency'], )),), true)) . '</dd>
											</dl>
										';
								} else {
									$__compilerTemp17 .= '
											<dl class="pairs pairs--justified pairs--price">
												<dt>' . $__templater->escape($__vars['cost']['title']) . '</dt>
												<dd>' . (($__templater->method($__vars['cost'], 'getPrice', array()) == 0) ? 'dbtech_ecommerce_free' : $__templater->filter($__templater->method($__vars['cost'], 'getPrice', array()), array(array('currency', array($__vars['xf']['options']['dbtechEcommerceCurrency'], )),), true)) . '</dd>
											</dl>
										';
								}
								$__compilerTemp17 .= '
									';
							}
						}
						$__compilerTemp17 .= '
								';
					}
					$__compilerTemp17 .= '
							</div>
						';
				}
			}
		}
		$__compilerTemp17 .= '

					';
	}
	$__compilerTemp17 .= '

					';
	if ($__templater->method($__vars['product'], 'canPurchase', array($__vars['license'], ))) {
		$__compilerTemp17 .= '
						<div class="block-body block-row block-row--minor block-row--purchaseParent">
							';
		$__compilerTemp18 = '';
		if ($__vars['license']) {
			$__compilerTemp18 .= '
									' . 'dbtech_ecommerce_renew' . '
								';
		} else if (($__templater->method($__vars['product']['Costs'], 'count', array()) == 1) AND ($__templater->method($__templater->method($__vars['product']['Costs'], 'first', array()), 'getPrice', array()) == 0)) {
			$__compilerTemp18 .= '
									';
			if ($__templater->method($__vars['product'], 'canPurchaseAddOns', array())) {
				$__compilerTemp18 .= '
										' . 'dbtech_ecommerce_get_free_purchase_add_ons' . '
									';
			} else {
				$__compilerTemp18 .= '
										' . 'dbtech_ecommerce_get_free' . '
									';
			}
			$__compilerTemp18 .= '
								';
		} else {
			$__compilerTemp18 .= '
									' . 'dbtech_ecommerce_purchase' . '
								';
		}
		$__compilerTemp17 .= $__templater->button('
								' . $__compilerTemp18 . '
							', array(
			'href' => $__templater->fn('link', array('dbtech-ecommerce/purchase', $__vars['product'], ($__vars['license'] ? array('license_key' => $__vars['license']['license_key'], ) : array()), ), false),
			'class' => 'button--fullWidth button--cta',
			'icon' => 'purchase',
			'overlay' => 'true',
			'data-cache' => 'false',
		), '', array(
		)) . '
						</div>
					';
	} else if ($__templater->method($__vars['product'], 'canPurchaseAddOns', array($__vars['license'], ))) {
		$__compilerTemp17 .= '
						<div class="block-body block-row block-row--minor block-row--purchaseAddOns">
							' . $__templater->button('
								' . 'dbtech_ecommerce_buy_add_ons' . '
							', array(
			'href' => $__templater->fn('link', array('dbtech-ecommerce/purchase/add-ons', $__vars['product'], ($__vars['license'] ? array('license_key' => $__vars['license']['license_key'], ) : array()), ), false),
			'icon' => 'purchase',
			'overlay' => 'true',
			'data-cache' => 'false',
		), '', array(
		)) . '
						</div>
					';
	}
	$__compilerTemp17 .= '
				';
	if (strlen(trim($__compilerTemp17)) > 0) {
		$__compilerTemp16 .= '
		<div class="block">
			<div class="block-container">
				<h3 class="block-minorHeader">' . 'dbtech_ecommerce_pricing_information' . '</h3>

				' . $__compilerTemp17 . '
			</div>
		</div>
	';
	}
	$__templater->modifySidebarHtml('pricingInfo', '
	' . $__compilerTemp16 . '
', 'replace');
	$__finalCompiled .= '

';
	$__compilerTemp19 = '';
	$__compilerTemp20 = '';
	$__compilerTemp20 .= '
						';
	if ($__templater->isTraversable($__vars['product']['requirements'])) {
		foreach ($__vars['product']['requirements'] AS $__vars['requirement']) {
			$__compilerTemp20 .= '
							<span class="label label--accent label--fullSize">' . $__templater->escape($__vars['requirement']) . '</span>
						';
		}
	}
	$__compilerTemp20 .= '
					';
	if (strlen(trim($__compilerTemp20)) > 0) {
		$__compilerTemp19 .= '
				<div class="block-body block-row block-row--minor">
					' . $__compilerTemp20 . '
				</div>
			';
	}
	$__compilerTemp21 = '';
	if ($__templater->method($__vars['product'], 'isDigital', array())) {
		$__compilerTemp21 .= '
					<dl class="pairs pairs--justified"><dt>' . 'dbtech_ecommerce_last_update' . '</dt> <dd>' . $__templater->fn('date_dynamic', array($__vars['product']['last_update'], array(
		))) . '</dd></dl>
					';
		if ($__templater->method($__vars['xf']['visitor'], 'hasPermission', array('dbtechEcommerceAdmin', 'viewDownloadLog', ))) {
			$__compilerTemp21 .= '
						<dl class="pairs pairs--justified"><dt>' . 'dbtech_ecommerce_total_downloads' . '</dt> <dd>' . $__templater->filter($__vars['product']['full_download_count'], array(array('number', array()),), true) . '</dd></dl>
					';
		}
		$__compilerTemp21 .= '
				';
	}
	$__compilerTemp22 = '';
	if ($__vars['xf']['options']['dbtechEcommerceEnableRate'] AND ($__templater->fn('property', array('dbtechEcommerceProductRatingStyle', ), false) == 'stars')) {
		$__compilerTemp22 .= '
					<dl class="pairs pairs--justified"><dt>' . 'dbtech_ecommerce_customer_rating' . '</dt> <dd>
						<a href="' . $__templater->fn('link', array('dbtech-ecommerce/reviews', $__vars['product'], ($__vars['license'] ? array('license_key' => $__vars['license']['license_key'], ) : array()), ), true) . '" class="reviewLink">
						' . $__templater->callMacro('rating_macros', 'stars_text', array(
			'rating' => $__vars['product']['rating_avg'],
			'count' => $__vars['product']['rating_count'],
			'rowClass' => 'ratingStarsRow--textBlock',
			'starsClass' => 'ratingStars--smaller',
		), $__vars) . '
						</a>
					</dd></dl>
				';
	}
	$__compilerTemp23 = '';
	if ($__vars['xf']['options']['dbtechEcommerceEnableRate'] AND ($__templater->fn('property', array('dbtechEcommerceProductRatingStyle', ), false) == 'circle')) {
		$__compilerTemp23 .= '
					' . $__templater->callMacro('dbtech_ecommerce_rating_macros', 'stars_circle', array(
			'rating' => $__vars['product']['rating_avg'],
			'count' => $__vars['product']['rating_count'],
			'rowClass' => 'ratingStarsRow--textBlock',
			'starsClass' => 'ratingStars--smaller',
		), $__vars) . '
				';
	}
	$__templater->modifySidebarHtml('productInfo', '
	<div class="block">
		<div class="block-container">
			<h3 class="block-minorHeader">' . 'dbtech_ecommerce_product_information' . '</h3>

			' . $__compilerTemp19 . '

			<div class="block-body block-row block-row--minor">
				' . $__templater->callMacro('custom_fields_macros', 'custom_fields_view', array(
		'type' => 'dbtechEcommerceProducts',
		'group' => 'above_info',
		'onlyInclude' => $__vars['category']['field_cache'],
		'set' => $__vars['product']['product_fields'],
	), $__vars) . '

				<dl class="pairs pairs--justified"><dt>' . 'dbtech_ecommerce_seller' . '</dt> <dd>' . $__templater->fn('username_link', array($__vars['product']['User'], true, array(
	))) . '</dd></dl>
				<dl class="pairs pairs--justified"><dt>' . 'dbtech_ecommerce_release_date' . '</dt> <dd>' . $__templater->fn('date_dynamic', array($__vars['product']['creation_date'], array(
	))) . '</dd></dl>
				' . $__compilerTemp21 . '
				' . $__compilerTemp22 . '

				' . $__templater->callMacro('custom_fields_macros', 'custom_fields_view', array(
		'type' => 'dbtechEcommerceProducts',
		'group' => 'below_info',
		'onlyInclude' => $__vars['category']['field_cache'],
		'set' => $__vars['product']['product_fields'],
	), $__vars) . '

				' . $__compilerTemp23 . '
			</div>
		</div>
	</div>
', 'replace');
	$__finalCompiled .= '

' . '

';
	$__compilerTemp24 = '';
	$__compilerTemp25 = '';
	$__compilerTemp25 .= '
					' . $__templater->callMacro('share_page_macros', 'buttons', array(
		'iconic' => true,
	), $__vars) . '
				';
	if (strlen(trim($__compilerTemp25)) > 0) {
		$__compilerTemp24 .= '
		<div class="block">
			<div class="block-container">
				<h3 class="block-minorHeader">' . 'dbtech_ecommerce_share_this_product' . '</h3>
				<div class="block-body block-row">
				' . $__compilerTemp25 . '
				</div>
			</div>
		</div>
	';
	}
	$__templater->modifySidebarHtml('shareProduct', '
	' . $__compilerTemp24 . '
', 'replace');
	$__finalCompiled .= '
' . $__templater->widgetPosition('dbtech_ecommerce_product_below', array()) . '
';
	$__templater->modifySidebarHtml('_xfWidgetPositionSidebarDbtechEcommerceProductSidebar', $__templater->widgetPosition('dbtech_ecommerce_product_sidebar', array(
		'product' => $__vars['product'],
	)), 'replace');
	return $__finalCompiled;
});