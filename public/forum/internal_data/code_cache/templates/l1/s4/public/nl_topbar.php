<?php
// FROM HASH: e10a3b5f622bf6b18e57175fe4583468
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="p-topBarController">
	<div id="p-topBar">
		<div class="p-topBar-inner">
			<div class="p-topBar-left">
				';
	if ($__templater->fn('property', array('nlSocialLinksLoc1', ), false) == true) {
		$__finalCompiled .= '
					' . $__templater->callMacro('nl_social_macros', 'social_icons', array(
			'location' => 'topbar',
		), $__vars) . '
				';
	}
	$__finalCompiled .= '
			</div>
			<div class="p-topBar-right">
			';
	if ($__templater->fn('property', array('nlVisitorTabsLocation', ), false) == 'topbar') {
		$__finalCompiled .= '
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
								aria-expanded="false"
								aria-haspopup="true">
								<i aria-hidden="true"></i>
								<span class="p-navgroup-linkText">' . 'Inbox' . '</span>
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
										<span class="menu-footer-opposite">
											<a href="' . $__templater->fn('link', array('conversations/add', ), true) . '">' . 'Start a new conversation' . '</a>
										</span>
									</div>
								</div>
							</div>

							<a href="' . $__templater->fn('link', array('account/alerts', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--alerts js-badge--alerts badgeContainer' . ($__vars['xf']['visitor']['alerts_unread'] ? ' badgeContainer--highlighted' : '') . '"
								data-badge="' . $__templater->filter($__vars['xf']['visitor']['alerts_unread'], array(array('number', array()),), true) . '"
								data-xf-click="menu"
								data-xf-key="' . $__templater->filter('.', array(array('for_attr', array()),), true) . '"
								data-menu-pos-ref="< .p-navgroup"
								aria-expanded="false"
								aria-haspopup="true">
								<i aria-hidden="true"></i>
								<span class="p-navgroup-linkText">' . 'Alerts' . '</span>
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
				if ($__templater->fn('property', array('nlAddonCompat_dbtech_ecommerce', ), false) == true) {
					$__finalCompiled .= '
								' . $__templater->includeTemplate('dbtech_ecommerce_navbar_checkout', $__vars) . '
							';
				}
				$__finalCompiled .= '
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
			if ($__templater->fn('property', array('nlAddonCompat_dbtech_ecommerce', ), false) == true) {
				$__finalCompiled .= '
							' . $__templater->includeTemplate('dbtech_ecommerce_navbar_checkout', $__vars) . '
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
				$__compilerTemp1 = array(array(
					'value' => '',
					'label' => 'Everywhere',
					'_type' => 'option',
				));
				if ($__templater->isTraversable($__vars['searchConstraints'])) {
					foreach ($__vars['searchConstraints'] AS $__vars['constraintName'] => $__vars['constraint']) {
						$__compilerTemp1[] = array(
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
				), $__compilerTemp1) . '
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
										<input class="input" name="c[users]" data-xf-init="auto-complete" placeholder="' . $__templater->filter('Member', array(array('for_attr', array()),), true) . '" aria-labelledby="ctrl_search_menu_by_member" />
									</div>
								</div>
								<div class="menu-footer">
									';
			if ($__vars['ads']) {
				$__finalCompiled .= '
										';
				$__compilerTemp2 = '';
				$__compilerTemp2 .= '
													' . $__templater->callMacro('siropu_ads_manager_ad_macros', 'ad_unit', array(
					'position' => 'search_menu',
				), $__vars) . '
												';
				if (strlen(trim($__compilerTemp2)) > 0) {
					$__finalCompiled .= '
											<div class="menu-row">
												' . $__compilerTemp2 . '
											</div>
										';
				}
				$__finalCompiled .= '
									';
			}
			$__finalCompiled .= '
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
			';
	}
	$__finalCompiled .= '
			</div>
			<div class="p-topBar-center">
				';
	if ($__templater->fn('property', array('nlEnableTicker', ), false) == true) {
		$__finalCompiled .= '
					' . $__templater->includeTemplate('nl_ticker', $__vars) . '
				';
	}
	$__finalCompiled .= '
			</div>
		</div>
	</div>
</div>';
	return $__finalCompiled;
});