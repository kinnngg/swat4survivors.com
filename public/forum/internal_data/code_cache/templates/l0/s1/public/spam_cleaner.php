<?php
// FROM HASH: d1cef95996a75ae591eed7f557b92408
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__compilerTemp1 = '';
	if ($__vars['xf']['options']['snog_countryflags_list'] AND (($__templater->method($__vars['xf']['visitor'], 'haspermission', array('general', 'snog_flags_view', )) AND ((!$__vars['xf']['options']['snog_countryflags_permit']) OR (($__vars['user']['Privacy']['snog_flag_view'] == 'everyone') OR (($__vars['user']['Privacy']['snog_flag_view'] == 'members') AND ($__vars['xf']['visitor']['user_id'] > 0))))) OR ($__vars['xf']['visitor']['is_admin'] OR ($__vars['xf']['options']['snog_countryflags_moderator'] AND $__vars['xf']['visitor']['is_moderator'])))) {
		$__compilerTemp1 .= '
	' . $__templater->callback('Snog\\Flags\\Callback\\Country', 'getCountry', '', array($__vars['user']['snog_flag'], )) . '
';
	}
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Spam cleaner' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['user']['username']) . ' ' . $__compilerTemp1 . '
');
	$__finalCompiled .= '

';
	$__compilerTemp2 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'hasAdminPermission', array('user', ))) {
		$__compilerTemp2 .= '
							<dl class="pairs pairs--columns">
								<dt>' . 'Email' . '</dt>
								<dd>' . $__templater->escape($__vars['user']['email']) . '</dd>
							</dl>
						';
	}
	$__compilerTemp3 = '';
	if ($__vars['canViewIps']) {
		$__compilerTemp3 .= '
							';
		$__vars['registerIp'] = $__templater->method($__vars['user'], 'getIp', array('register', ));
		$__compilerTemp3 .= '

							';
		if ($__vars['registerIp']) {
			$__compilerTemp3 .= '
								<dl class="pairs pairs--columns">
									<dt>' . 'Registration IP' . '</dt>
									<dd><a class="ip concealed" href="' . $__templater->fn('link', array('misc/ip-info', null, array('ip' => $__templater->filter($__vars['registerIp'], array(array('ip', array()),), false), ), ), true) . '" target="_blank">' . $__templater->filter($__vars['registerIp'], array(array('ip', array()),), true) . '</a></dd>
								</dl>
							';
		}
		$__compilerTemp3 .= '

							';
		if ($__vars['contentIp']) {
			$__compilerTemp3 .= '
								<dl class="pairs pairs--columns">
									<dt>' . 'Content IP' . '</dt>
									<dd><a class="ip concealed" href="' . $__templater->fn('link', array('misc/ip-info', null, array('ip' => $__templater->filter($__vars['contentIp'], array(array('ip', array()),), false), ), ), true) . '" target="_blank">' . $__templater->filter($__vars['contentIp'], array(array('ip', array()),), true) . '</a></dd>
								</dl>
							';
		}
		$__compilerTemp3 .= '
						';
	}
	$__compilerTemp4 = '';
	if ($__vars['xf']['options']['spamThreadAction']['action'] == 'move') {
		$__compilerTemp4 .= '
							' . 'Move spammer\'s threads' . '
						';
	} else {
		$__compilerTemp4 .= '
							' . 'Delete spammer\'s threads' . '
						';
	}
	$__compilerTemp5 = array(array(
		'name' => 'action_threads',
		'checked' => $__vars['xf']['options']['spamDefaultOptions']['action_threads'],
		'label' => '
						' . $__compilerTemp4 . '
					',
		'_type' => 'option',
	)
,array(
		'name' => 'delete_messages',
		'checked' => $__vars['xf']['options']['spamDefaultOptions']['delete_messages'],
		'label' => 'Delete spammer\'s messages',
		'_type' => 'option',
	)
,array(
		'name' => 'delete_conversations',
		'checked' => $__vars['xf']['options']['spamDefaultOptions']['delete_conversations'],
		'label' => 'Delete conversations by spammer',
		'_type' => 'option',
	)
,array(
		'name' => 'ban_user',
		'checked' => $__vars['xf']['options']['spamDefaultOptions']['ban_user'],
		'label' => 'Ban spammer',
		'_type' => 'option',
	));
	if ($__vars['canViewIps']) {
		$__compilerTemp5[] = array(
			'name' => 'check_ips',
			'checked' => $__vars['xf']['options']['spamDefaultOptions']['check_ips'],
			'label' => 'Check spammer\'s IPs',
			'_type' => 'option',
		);
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formRow('
				<div class="contentRow">
					<div class="contentRow-figure">
						' . $__templater->fn('avatar', array($__vars['user'], 'm', false, array(
	))) . '
					</div>
					<div class="contentRow-main">
						<dl class="pairs pairs--columns">
							<dt>' . 'Last activity' . '</dt>
							<dd>' . $__templater->fn('date_dynamic', array($__vars['user']['last_activity'], array(
	))) . '</dd>
						</dl>

						' . $__compilerTemp2 . '

						' . $__compilerTemp3 . '
					</div>
				</div>
			', array(
		'rowtype' => 'fullWidth noLabel',
	)) . '

			' . $__templater->formInfoRow('
				<div class="pairJustifier">
					' . $__templater->callMacro('member_macros', 'member_stat_pairs', array(
		'user' => $__vars['user'],
		'context' => 'spam-cleaner',
	), $__vars) . '
				</div>
			', array(
	)) . '

			' . $__templater->formCheckBoxRow(array(
	), $__compilerTemp5, array(
		'label' => 'Spam cleaner actions',
	)) . '
		</div>

		' . $__templater->formSubmitRow(array(
		'submit' => 'Clean',
	), array(
	)) . '
	</div>

	' . $__templater->formHiddenVal('no_redirect', $__vars['noRedirect'], array(
	)) . '
', array(
		'action' => $__templater->fn('link', array('spam-cleaner', $__vars['user'], ), false),
		'ajax' => 'true',
		'class' => 'block',
	));
	return $__finalCompiled;
});