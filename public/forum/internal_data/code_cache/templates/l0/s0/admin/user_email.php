<?php
// FROM HASH: 07afa7dccd2c1b9fe3a49db59ec81a43
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Email users');
	$__finalCompiled .= '
';
	$__templater->pageParams['pageDescription'] = $__templater->preEscaped('You can use this form to send a mass email to the users which match the criteria specified below.');
	$__templater->pageParams['pageDescriptionMeta'] = true;
	$__finalCompiled .= '

';
	if ($__vars['sent']) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--success blockMessage--iconic">
		' . 'Your email was sent to ' . $__templater->filter($__vars['sent'], array(array('number', array()),), true) . ' users.' . '
	</div>
';
	}
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'list_only',
		'label' => 'Only generate a list of email addresses',
		'_type' => 'option',
	)), array(
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'from_name',
		'value' => ($__vars['xf']['options']['emailSenderName'] ? $__vars['xf']['options']['emailSenderName'] : $__vars['xf']['options']['boardTitle']),
	), array(
		'label' => 'From name',
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'from_email',
		'value' => $__vars['xf']['options']['defaultEmailAddress'],
		'type' => 'email',
	), array(
		'label' => 'From email',
	)) . '

			<hr class="formRowSep" />

			' . $__templater->formTextBoxRow(array(
		'name' => 'email_title',
	), array(
		'label' => 'Email title',
	)) . '

			' . $__templater->formRadioRow(array(
		'name' => 'email_format',
	), array(array(
		'value' => '',
		'selected' => true,
		'label' => 'Plain text',
		'_type' => 'option',
	),
	array(
		'value' => 'html',
		'label' => 'HTML',
		'hint' => 'Note that email clients handle HTML in widely varying ways. Be sure to test before sending HTML emails. A text version of your email will be generated by removing all HTML tags.',
		'_type' => 'option',
	)), array(
		'label' => 'Email format',
	)) . '

			' . $__templater->formCodeEditorRow(array(
		'name' => 'email_body',
		'mode' => 'html',
		'data-line-wrapping' => 'true',
		'class' => 'codeEditor--autoSize codeEditor--proportional',
	), array(
		'label' => 'Email body',
		'explain' => ' ' . 'The following placeholders will be replaced in the message: {name}, {email}, {id}, {unsub}.' . ' ' . 'You may also use {phrase:phrase_title} which will be replaced with the phrase text in the recipient\'s language.',
	)) . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'email_wrapped',
		'selected' => true,
		'label' => 'Include default email wrapper',
		'hint' => 'If selected, your email content will be wrapped in the standard header and footer used in emails sent elsewhere in XenForo.',
		'_type' => 'option',
	),
	array(
		'name' => 'email_unsub',
		'selected' => true,
		'label' => 'Automatically include an unsubscribe link',
		'hint' => 'If selected, this email will automatically have an unsubscribe line added at the bottom. If you use the \'unsub\' token in the body, this option will be ignored.',
		'_type' => 'option',
	)), array(
	)) . '
		</div>

		<h2 class="block-formSectionHeader"><span class="block-formSectionHeader-aligner">' . 'User criteria' . '</span></h2>
		<div class="block-body">
			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'criteria[Option][receive_admin_email]',
		'selected' => true,
		'label' => '
					' . 'Only send to users opting to receive news and update emails' . '
				',
		'_type' => 'option',
	)), array(
	)) . '

			' . $__templater->includeTemplate('helper_user_search_criteria', $__vars) . '
		</div>

		' . $__templater->formSubmitRow(array(
		'submit' => 'Proceed' . $__vars['xf']['language']['ellipsis'],
		'sticky' => 'true',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->fn('link', array('users/email/confirm', ), false),
		'class' => 'block',
	));
	return $__finalCompiled;
});