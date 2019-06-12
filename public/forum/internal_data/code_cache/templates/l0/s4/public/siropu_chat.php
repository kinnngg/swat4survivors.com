<?php
// FROM HASH: 6d39405a63713f7be31adf0a72675e17
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->includeCss('siropu_chat.less');
	$__finalCompiled .= '

';
	if ($__vars['xf']['options']['siropuChatCompactMobileMode'] AND $__vars['chat']['isMobile']) {
		$__finalCompiled .= '
	';
		$__templater->includeCss('siropu_chat_mobile.less');
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	$__templater->includeJs(array(
		'src' => 'siropu/chat/core.js',
		'min' => '1',
	));
	$__templater->inlineJs('
	' . $__templater->includeTemplate('siropu_chat_js', $__vars) . '
');
	$__finalCompiled .= '

';
	if ($__templater->method($__vars['xf']['visitor'], 'canSetMessageColorSiropuChat', array())) {
		$__finalCompiled .= '
	';
		$__templater->includeCss('public:color_picker.less');
		$__finalCompiled .= '
	';
		$__templater->includeJs(array(
			'src' => 'xf/color_picker.js',
			'min' => '1',
		));
		$__finalCompiled .= '
	<script class="js-colorPickerData" type="application/json">{}</script>
';
	}
	$__finalCompiled .= '

';
	$__vars['canJoinRooms'] = (($__vars['xf']['visitor']['user_id'] AND ($__vars['xf']['options']['siropuChatRooms'] AND $__templater->method($__vars['xf']['visitor'], 'canJoinSiropuChatRooms', array()))) ? true : false);
	$__finalCompiled .= '
';
	$__vars['canChatInPrivate'] = (($__vars['xf']['visitor']['user_id'] AND ($__vars['xf']['options']['siropuChatPrivateConversations'] AND $__templater->method($__vars['xf']['visitor'], 'canChatInPrivateSiropuChat', array()))) ? true : false);
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if (!$__vars['xf']['options']['siropuChatDynamicTitle']) {
		$__compilerTemp1 .= '
		' . 'siropu_chat_header_title' . '
	';
	} else if (($__vars['chat']['channel'] == 'room') AND $__vars['chat']['roomId']) {
		$__compilerTemp1 .= '
		' . $__templater->escape($__vars['chat']['rooms'][$__vars['chat']['roomId']]['room_name']) . '
	';
	} else if ($__vars['chat']['channel'] == 'conv') {
		$__compilerTemp1 .= '
		';
		if ($__vars['chat']['convId']) {
			$__compilerTemp1 .= '
			' . 'siropu_chat_conversation_with_x' . '
		';
		} else {
			$__compilerTemp1 .= '
			' . 'siropu_chat_private_conversations' . '
		';
		}
		$__compilerTemp1 .= '
	';
	}
	$__vars['title'] = $__templater->preEscaped('
	' . $__compilerTemp1 . '
');
	$__finalCompiled .= '

<div id="siropuChat" class="block ' . $__templater->escape($__vars['chat']['cssClass']) . '" data-active="' . ($__templater->method($__vars['xf']['visitor'], 'isActiveSiropuChat', array()) ? 'true' : 'false') . '" data-xf-init="siropu-chat">
	<div class="block-container">
		<div id="siropuChatHeader" class="block-minorHeader">
			' . $__templater->fontAwesome('fa-comments', array(
	)) . ' <span>' . $__templater->escape($__vars['title']) . '</span>
			<div id="siropuChatOptions">
				';
	if ($__vars['xf']['options']['siropuChatRules']) {
		$__finalCompiled .= '
					<a href="' . $__templater->fn('link', array('chat/rules', ), true) . '" title="' . $__templater->filter('siropu_chat_rules', array(array('for_attr', array()),), true) . '" data-xf-click="overlay" data-cache="false">' . $__templater->fontAwesome('fal fa-book', array(
		)) . ' <span>' . 'siropu_chat_rules' . '</span></a>
				';
	}
	$__finalCompiled .= '
				<a href="' . $__templater->fn('link', array('chat/help', ), true) . '" title="' . $__templater->filter('siropu_chat_help', array(array('for_attr', array()),), true) . '" data-xf-click="overlay">' . $__templater->fontAwesome('fal fa-life-ring', array(
	)) . ' <span>' . 'siropu_chat_help' . '</span></a>
				<a role="button" id="siropuChatToggleUsers" title="' . $__templater->filter('siropu_chat_users', array(array('for_attr', array()),), true) . '" data-xf-click="siropu-chat-toggle-users">' . $__templater->fontAwesome('fal fa-users', array(
	)) . ' <span>' . 'siropu_chat_users' . '</span></a>
				';
	if ($__templater->method($__vars['xf']['visitor'], 'canChangeSettingsSiropuChat', array())) {
		$__finalCompiled .= '
					<a role="button" title="' . $__templater->filter('siropu_chat_settings', array(array('for_attr', array()),), true) . '" data-xf-click="menu" aria-expanded="false" aria-haspopup="true">' . $__templater->fontAwesome('fal fa-cogs', array(
		)) . ' <span>' . 'siropu_chat_settings' . '</span></a>
				';
	}
	$__finalCompiled .= '
				<div class="menu" data-menu="menu" aria-hidden="true">
					<div class="menu-content">
						<h3 class="menu-header">' . 'siropu_chat_settings' . '</h3>
						<form id="siropuChatSettings">
							<fieldset>
								<legend data-xf-click="siropu-chat-toggle-options">' . 'siropu_chat_sound' . '</legend>
								' . $__templater->formCheckBox(array(
	), array(array(
		'name' => 'sound[normal]',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_normal_messages',
		'checked' => ($__vars['chat']['settings']['sound']['normal'] ? true : false),
		'_type' => 'option',
	),
	array(
		'name' => 'sound[private]',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_private_messages',
		'checked' => ($__vars['chat']['settings']['sound']['private'] ? true : false),
		'_type' => 'option',
	),
	array(
		'name' => 'sound[whisper]',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_whisper_messages',
		'checked' => ($__vars['chat']['settings']['sound']['whisper'] ? true : false),
		'_type' => 'option',
	),
	array(
		'name' => 'sound[mention]',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_mention_messages',
		'checked' => ($__vars['chat']['settings']['sound']['mention'] ? true : false),
		'_type' => 'option',
	),
	array(
		'name' => 'sound[bot]',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_bot_messages',
		'checked' => ($__vars['chat']['settings']['sound']['bot'] ? true : false),
		'_type' => 'option',
	))) . '
							</fieldset>
							<fieldset>
								<legend data-xf-click="siropu-chat-toggle-options">' . 'siropu_chat_desktop_notifications' . '</legend>
								' . $__templater->formCheckBox(array(
	), array(array(
		'name' => 'notification[normal]',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_normal_messages',
		'checked' => ($__vars['chat']['settings']['notification']['normal'] ? true : false),
		'_type' => 'option',
	),
	array(
		'name' => 'notification[private]',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_private_messages',
		'checked' => ($__vars['chat']['settings']['notification']['private'] ? true : false),
		'_type' => 'option',
	),
	array(
		'name' => 'notification[whisper]',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_whisper_messages',
		'checked' => ($__vars['chat']['settings']['notification']['whisper'] ? true : false),
		'_type' => 'option',
	),
	array(
		'name' => 'notification[mention]',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_mention_messages',
		'checked' => ($__vars['chat']['settings']['notification']['mention'] ? true : false),
		'_type' => 'option',
	),
	array(
		'name' => 'notification[bot]',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_bot_messages',
		'checked' => ($__vars['chat']['settings']['notification']['bot'] ? true : false),
		'_type' => 'option',
	))) . '
							</fieldset>
							<fieldset>
								<legend data-xf-click="siropu-chat-toggle-options">' . 'siropu_chat_miscellaneous' . '</legend>
								';
	$__compilerTemp2 = array(array(
		'name' => 'inverse',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_inverse_message_direction',
		'checked' => ($__vars['chat']['settings']['inverse'] ? true : false),
		'_type' => 'option',
	)
,array(
		'name' => 'editor_on_top',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_editor_on_top',
		'checked' => ($__vars['chat']['settings']['editor_on_top'] ? true : false),
		'_type' => 'option',
	)
,array(
		'name' => 'maximized',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_maximized_mode',
		'checked' => ($__vars['chat']['settings']['maximized'] ? true : false),
		'_type' => 'option',
	)
,array(
		'name' => 'image_as_link',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_images_as_links',
		'checked' => ($__vars['chat']['settings']['image_as_link'] ? true : false),
		'_type' => 'option',
	));
	if ($__vars['xf']['options']['siropuChatUserMentionAlert']) {
		$__compilerTemp2[] = array(
			'name' => 'mention_alert',
			'value' => '1',
			'label' => 'siropu_chat_setting_option_receive_mention_alerts',
			'checked' => ($__vars['chat']['settings']['mention_alert'] ? true : false),
			'_type' => 'option',
		);
	}
	$__compilerTemp2[] = array(
		'name' => 'hide_bot',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_hide_bot',
		'checked' => ($__vars['chat']['settings']['hide_bot'] ? true : false),
		'_type' => 'option',
	);
	$__compilerTemp2[] = array(
		'name' => 'hide_status',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_hide_status',
		'checked' => ($__vars['chat']['settings']['hide_status'] ? true : false),
		'_type' => 'option',
	);
	$__compilerTemp2[] = array(
		'name' => 'hide_chatters',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_hide_chatter_list',
		'checked' => ($__vars['chat']['settings']['hide_chatters'] ? true : false),
		'_type' => 'option',
	);
	$__compilerTemp2[] = array(
		'name' => 'show_ignored',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_show_ignored',
		'checked' => ($__vars['chat']['settings']['show_ignored'] ? true : false),
		'_type' => 'option',
	);
	$__compilerTemp2[] = array(
		'name' => 'disable',
		'value' => '1',
		'label' => 'siropu_chat_setting_option_disable',
		'checked' => ($__vars['chat']['settings']['disable'] ? true : false),
		'_type' => 'option',
	);
	$__finalCompiled .= $__templater->formCheckBox(array(
	), $__compilerTemp2) . '
							</fieldset>
							';
	if ($__templater->method($__vars['xf']['visitor'], 'canSetMessageColorSiropuChat', array())) {
		$__finalCompiled .= '
								<fieldset>
									<legend>' . 'siropu_chat_your_message_color' . '</legend>
									<div class="inputGroup inputGroup--joined inputGroup--color" data-xf-init="color-picker" data-allow-palette="true">
										' . $__templater->formTextBox(array(
			'name' => 'message_color',
			'value' => $__vars['chat']['settings']['message_color'],
			'readonly' => 'readonly',
		)) . '
										<div class="inputGroup-text"><span class="colorPickerBox js-colorPickerTrigger"></span></div>
									</div>
								</fieldset>
							';
	}
	$__finalCompiled .= '
							';
	if ($__templater->method($__vars['xf']['visitor'], 'canChangeDisplayModeSiropuChat', array())) {
		$__finalCompiled .= '
								<fieldset>
									<legend>' . 'siropu_chat_display_mode' . '</legend>
									';
		$__compilerTemp3 = array();
		if (($__vars['xf']['options']['siropuChatDisplayMode'] == 'custom') OR ($__vars['xf']['options']['siropuChatDisplayMode'] == 'chat_page')) {
			$__compilerTemp3[] = array(
				'value' => 'default',
				'label' => 'siropu_chat_display_mode_default',
				'_type' => 'option',
			);
		}
		$__compilerTemp3[] = array(
			'value' => 'all_pages',
			'label' => 'siropu_chat_display_mode_all_pages',
			'_type' => 'option',
		);
		$__compilerTemp3[] = array(
			'value' => 'above_forum_list',
			'label' => 'siropu_chat_display_mode_above_forum_list',
			'_type' => 'option',
		);
		$__compilerTemp3[] = array(
			'value' => 'below_forum_list',
			'label' => 'siropu_chat_display_mode_below_forum_list',
			'_type' => 'option',
		);
		$__compilerTemp3[] = array(
			'value' => 'above_content',
			'label' => 'siropu_chat_display_mode_above_content',
			'_type' => 'option',
		);
		$__compilerTemp3[] = array(
			'value' => 'below_content',
			'label' => 'siropu_chat_display_mode_below_content',
			'_type' => 'option',
		);
		$__compilerTemp3[] = array(
			'value' => 'sidebar_top',
			'label' => 'siropu_chat_display_mode_sidebar_top',
			'_type' => 'option',
		);
		$__compilerTemp3[] = array(
			'value' => 'sidebar_bottom',
			'label' => 'siropu_chat_display_mode_sidebar_bottom',
			'_type' => 'option',
		);
		$__finalCompiled .= $__templater->formSelect(array(
			'name' => 'display_mode',
			'value' => $__vars['chat']['settings']['display_mode'],
		), $__compilerTemp3) . '
								</fieldset>
							';
	}
	$__finalCompiled .= '
						</form>
					</div>
				</div>
				<a role="button" title="' . 'siropu_chat_options' . '" data-xf-click="menu" aria-expanded="false" aria-haspopup="true">' . $__templater->fontAwesome('fa-bars', array(
	)) . ' <span>' . 'siropu_chat_options' . '</span></a>
				<div class="menu" data-menu="menu" aria-hidden="true">
					<div class="menu-content">
						<h3 class="menu-header">' . 'siropu_chat_options' . '</h3>
						';
	if ($__templater->method($__vars['xf']['visitor'], 'canSetSiropuChatStatus', array())) {
		$__finalCompiled .= '
							<a href="' . $__templater->fn('link', array('chat/update-status', ), true) . '" class="blockLink" data-xf-click="overlay" data-cache="false">' . 'siropu_chat_update_status' . '</a>
						';
	}
	$__finalCompiled .= '
						';
	if ($__templater->method($__vars['xf']['visitor'], 'canCreateSiropuChatRooms', array())) {
		$__finalCompiled .= '
							<a href="' . $__templater->fn('link', array('chat/room/create', ), true) . '" class="blockLink" data-xf-click="overlay" data-cache="false">' . 'siropu_chat_create_room' . '</a>
						';
	}
	$__finalCompiled .= '
						';
	if ($__templater->method($__vars['xf']['visitor'], 'canEditSiropuChatRules', array())) {
		$__finalCompiled .= '
							<a href="' . $__templater->fn('link', array('chat/edit-rules', ), true) . '" class="blockLink" data-xf-click="overlay" data-cache="false">' . 'siropu_chat_edit_rules' . '</a>
						';
	}
	$__finalCompiled .= '
						';
	if ($__templater->method($__vars['xf']['visitor'], 'canEditSiropuChatNotice', array())) {
		$__finalCompiled .= '
							<a href="' . $__templater->fn('link', array('chat/edit-notice', ), true) . '" class="blockLink" data-xf-click="overlay" data-cache="false">' . 'siropu_chat_edit_notice' . '</a>
						';
	}
	$__finalCompiled .= '
						';
	if ($__templater->method($__vars['xf']['visitor'], 'canEditSiropuChatAds', array())) {
		$__finalCompiled .= '
							<a href="' . $__templater->fn('link', array('chat/edit-ads', ), true) . '" class="blockLink" data-xf-click="overlay" data-cache="false">' . 'siropu_chat_edit_ads' . '</a>
						';
	}
	$__finalCompiled .= '
						';
	if ($__templater->method($__vars['xf']['visitor'], 'canViewSiropuChatArchive', array())) {
		$__finalCompiled .= '
							<a href="' . $__templater->fn('link', array('chat/archive', ), true) . '" class="blockLink">' . 'siropu_chat_view_archive' . '</a>
						';
	}
	$__finalCompiled .= '
						';
	if ($__templater->method($__vars['xf']['visitor'], 'canViewSiropuChatTopChatters', array())) {
		$__finalCompiled .= '
							<a href="' . $__templater->fn('link', array('chat/top-chatters', ), true) . '" class="blockLink">' . 'siropu_chat_view_top_chatters' . '</a>
						';
	}
	$__finalCompiled .= '
						';
	if ($__templater->method($__vars['xf']['visitor'], 'canViewSiropuChatSanctions', array())) {
		$__finalCompiled .= '
							<a href="' . $__templater->fn('link', array('chat/sanctions', ), true) . '" class="blockLink">' . 'siropu_chat_view_sanctions' . '</a>
						';
	}
	$__finalCompiled .= '
						<div class="menu-footer menu-footer--split">
							';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
								<span class="menu-footer-main">
									<a href="' . $__templater->fn('link', array('chat/logout', ), true) . '" class="siropuChatLogout" data-xf-click="overlay">' . $__templater->fontAwesome('fa-sign-out-alt', array(
		)) . ' ' . 'siropu_chat_logout' . '</a>
								</span>
							';
	}
	$__finalCompiled .= '
							';
	if (!$__vars['chat']['isFullPage']) {
		$__finalCompiled .= '
								<span class="menu-footer-opposite">
									<a href="' . $__templater->fn('link', array('chat/fullpage', ), true) . '" data-xf-click="siropu-chat-popup">' . $__templater->fontAwesome('fa-external-link-alt', array(
		)) . ' ' . 'siropu_chat_open_in_popup' . '</a>
								</span>
							';
	}
	$__finalCompiled .= '
						</div>
					</div>
				</div>
			</div>
		</div>
		' . $__templater->callMacro('siropu_chat_notice_macros', 'notice', array(
		'notice' => $__vars['chat']['notice'],
	), $__vars) . '
		';
	$__compilerTemp4 = '';
	$__compilerTemp4 .= '
					';
	if ($__vars['canJoinRooms'] AND (!$__vars['chat']['hideTabs'])) {
		$__compilerTemp4 .= '
						';
		if ($__templater->isTraversable($__vars['chat']['rooms'])) {
			foreach ($__vars['chat']['rooms'] AS $__vars['room']) {
				$__compilerTemp4 .= '
							';
				if ($__templater->method($__vars['room'], 'isJoined', array())) {
					$__compilerTemp4 .= '
								' . $__templater->includeTemplate('siropu_chat_room_tab', $__vars) . '
							';
				}
				$__compilerTemp4 .= '
						';
			}
		}
		$__compilerTemp4 .= '
						<a role="button" data-target="room-list" data-title="' . $__templater->filter('siropu_chat_browse_rooms', array(array('for_attr', array()),), true) . '">' . $__templater->fontAwesome('fas fa-folder-open', array(
		)) . ' ' . 'siropu_chat_browse_rooms' . '</a>
					';
	}
	$__compilerTemp4 .= '
					';
	if ($__vars['canChatInPrivate'] AND (!$__vars['chat']['hideTabs'])) {
		$__compilerTemp4 .= '
						<span>
							<a role="button" data-target="conv-list" data-title="' . $__templater->filter('siropu_chat_private_conversations', array(array('for_attr', array()),), true) . '" ' . (($__vars['chat']['convUnread'] AND ($__vars['chat']['channel'] != 'conv')) ? ' class="siropuChatNewMessage"' : '') . (($__vars['chat']['channel'] == 'conv') ? ' class="siropuChatActiveTab"' : '') . '>' . 'siropu_chat_private_conversations' . ' <span class="siropuChatTabCount' . ($__vars['chat']['convOnline'] ? 'Active' : 'Inactive') . '">' . $__templater->escape($__vars['chat']['convOnline']) . '</span></a>
							<a role="button" data-target="conv-form" data-title="' . $__templater->filter('siropu_chat_start_private_conversation', array(array('for_attr', array()),), true) . '">' . $__templater->fontAwesome('fas fa-user-plus', array(
		)) . '</a>
						</span>
					';
	}
	$__compilerTemp4 .= '
				';
	if (strlen(trim($__compilerTemp4)) > 0) {
		$__finalCompiled .= '
			<div id="siropuChatTabs"' . ((!$__vars['canJoinRooms']) ? ' class="siropuChatNoRooms"' : '') . '>
				' . $__compilerTemp4 . '
			</div>
		';
	}
	$__finalCompiled .= '
		';
	if ($__vars['chat']['settings']['editor_on_top']) {
		$__finalCompiled .= '
			' . $__templater->includeTemplate('siropu_chat_editor', $__vars) . '
		';
	}
	$__finalCompiled .= '
		<div id="siropuChatContent">
			';
	if (!$__templater->test($__vars['chat']['rooms'], 'empty', array())) {
		$__finalCompiled .= '
				';
		if ($__templater->isTraversable($__vars['chat']['rooms'])) {
			foreach ($__vars['chat']['rooms'] AS $__vars['roomId'] => $__vars['room']) {
				$__finalCompiled .= '
					';
				if ($__templater->method($__vars['room'], 'isJoined', array())) {
					$__finalCompiled .= '
						<ul class="siropuChatRoom siropuChatUsers" data-room-id="' . $__templater->escape($__vars['roomId']) . '"' . (($__templater->method($__vars['room'], 'isActive', array()) AND (($__vars['chat']['channel'] == 'room') AND (!$__vars['chat']['isResponsive']))) ? ' style="display: block;"' : '') . '>
							' . $__templater->callMacro('siropu_chat_user_list', 'room', array(
						'room' => $__vars['room'],
						'users' => $__vars['chat']['users'][$__vars['roomId']],
					), $__vars) . '
						</ul>
						<ul class="siropuChatRoom siropuChatMessages" data-room-id="' . $__templater->escape($__vars['roomId']) . '" data-autoscroll="1"' . (($__templater->method($__vars['room'], 'isActive', array()) AND ($__vars['chat']['channel'] == 'room')) ? ' style="display: block;"' : '') . '>
							' . $__templater->callMacro('siropu_chat_message_list', 'room', array(
						'messages' => $__vars['chat']['messages'][$__vars['roomId']],
					), $__vars) . '
						</ul>
					';
				}
				$__finalCompiled .= '
				';
			}
		}
		$__finalCompiled .= '
			';
	} else if ($__vars['chat']['channel'] == 'room') {
		$__finalCompiled .= '
				<p id="siropuChatNoRoomsJoined" style="display: block;">' . 'siropu_chat_no_rooms_joined' . '</p>
			';
	}
	$__finalCompiled .= '
			<ul id="siropuChatRooms"></ul>
			';
	if ($__vars['canChatInPrivate']) {
		$__finalCompiled .= '
				<ul class="siropuChatConversation siropuChatUsers"' . (($__vars['chat']['channel'] == 'conv') ? ' style="display: block;"' : '') . '>
					';
		if (!$__templater->test($__vars['chat']['convContacts'], 'empty', array())) {
			$__finalCompiled .= '
						' . $__templater->callMacro('siropu_chat_user_list', 'conversation', array(
				'conversations' => $__vars['chat']['convContacts'],
				'unread' => $__vars['chat']['convUnread'],
			), $__vars) . '
					';
		} else {
			$__finalCompiled .= '
						' . $__templater->includeTemplate('siropu_chat_conversation_list_empty', $__vars) . '
					';
		}
		$__finalCompiled .= '
				</ul>
				';
		if (!$__templater->test($__vars['chat']['convMessages'], 'empty', array())) {
			$__finalCompiled .= '
					';
			if ($__templater->isTraversable($__vars['chat']['convMessages'])) {
				foreach ($__vars['chat']['convMessages'] AS $__vars['convId'] => $__vars['messages']) {
					$__finalCompiled .= '
						<ul class="siropuChatConversation siropuChatMessages" data-conv-id="' . $__templater->escape($__vars['convId']) . '" data-autoscroll="1"' . ((($__templater->method($__vars['xf']['visitor'], 'getLastConvIdSiropuChat', array()) == $__vars['convId']) AND (($__vars['chat']['channel'] == 'conv') AND (!$__vars['chat']['isResponsive']))) ? ' style="display: block;"' : '') . '>
							' . $__templater->callMacro('siropu_chat_message_list', 'conversation', array(
						'messages' => $__vars['messages'],
					), $__vars) . '
						</ul>
					';
				}
			}
			$__finalCompiled .= '
				';
		}
		$__finalCompiled .= '
				<div id="siropuChatStartConversation">
					' . $__templater->callMacro('siropu_chat_conversation_start', 'form', array(), $__vars) . '
				</div>
			';
	}
	$__finalCompiled .= '
		</div>
		';
	if (!$__vars['chat']['settings']['editor_on_top']) {
		$__finalCompiled .= '
			' . $__templater->includeTemplate('siropu_chat_editor', $__vars) . '
		';
	}
	$__finalCompiled .= '
	</div>
</div>

';
	if (($__vars['chat']['settings']['display_mode'] == 'all_pages') AND (!$__vars['chat']['isChatPage'])) {
		$__finalCompiled .= '
	<div id="siropuChatBar" class="block-container">
		<div id="siropuChatBarMessageContainer">
			';
		if (!$__templater->test($__vars['chat']['lastMessage'], 'empty', array())) {
			$__finalCompiled .= '
				' . $__templater->callMacro('siropu_chat_room_message_helper', 'message_content', array(
				'message' => $__vars['chat']['lastMessage'],
				'lastRow' => 'true',
				'isResponsive' => $__vars['chat']['isResponsive'],
			), $__vars) . '
				' . $__templater->fn('date_dynamic', array($__vars['chat']['lastMessage']['message_date'], array(
				'class' => 'siropuChatDateTime',
			))) . '
				';
		} else {
			$__finalCompiled .= '
				<span class="siropuChatMessageText">
					';
			if (!$__templater->test($__vars['chat']['rooms'], 'empty', array())) {
				$__finalCompiled .= '
						' . 'siropu_chat_no_messages' . '
						';
			} else {
				$__finalCompiled .= '
						' . 'siropu_chat_no_rooms_joined' . '
					';
			}
			$__finalCompiled .= '
				</span>
			';
		}
		$__finalCompiled .= '
		</div>
		<div id="siropuChatBarUserCount">
			<a role="button">' . 'siropu_chat_bar_title' . ' <span>' . $__templater->filter($__vars['chat']['userCount'], array(array('number', array()),), true) . '</span></a>
		</div>
	</div>
';
	}
	return $__finalCompiled;
});