<?php
// FROM HASH: f48a19e7538b44964616c9ff6f796ff2
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Contact us');
	$__finalCompiled .= '

';
	if ($__templater->fn('property', array('nlContactUseCustomPage', ), false) == true) {
		$__finalCompiled .= '
	';
		$__templater->wrapTemplate('nl_contact_page_wrapper', $__vars);
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__templater->fn('property', array('nlContactUseInlineForm', ), false) == 'default') {
		$__finalCompiled .= '
	';
		$__compilerTemp1 = '';
		if (!$__vars['xf']['visitor']['user_id']) {
			$__compilerTemp1 .= '
					' . $__templater->formTextBoxRow(array(
				'name' => 'username',
				'autofocus' => 'autofocus',
				'maxlength' => $__templater->fn('max_length', array($__vars['xf']['visitor'], 'username', ), false),
				'required' => 'required',
			), array(
				'label' => 'Your name',
				'hint' => 'Required',
			)) . '

					' . $__templater->formTextBoxRow(array(
				'name' => 'email',
				'maxlength' => $__templater->fn('max_length', array($__vars['xf']['visitor'], 'email', ), false),
				'type' => 'email',
				'required' => 'required',
			), array(
				'label' => 'Your email address',
				'hint' => 'Required',
			)) . '
				';
		} else {
			$__compilerTemp1 .= '
					' . $__templater->formRow($__templater->escape($__vars['xf']['visitor']['username']), array(
				'label' => 'Your name',
			)) . '
					';
			if ($__vars['xf']['visitor']['email']) {
				$__compilerTemp1 .= '

						' . $__templater->formRow($__templater->escape($__vars['xf']['visitor']['email']), array(
					'label' => 'Your email address',
				)) . '

					';
			} else {
				$__compilerTemp1 .= '

						' . $__templater->formTextBoxRow(array(
					'name' => 'email',
					'type' => 'email',
					'required' => 'required',
				), array(
					'label' => 'Your email address',
					'hint' => 'Required',
				)) . '

					';
			}
			$__compilerTemp1 .= '
				';
		}
		$__finalCompiled .= $__templater->form('
		<div class="block-container">
			<div class="block-body">
				' . $__compilerTemp1 . '

				' . $__templater->formRowIfContent($__templater->fn('captcha', array(false)), array(
			'label' => 'Verification',
			'hint' => 'Required',
		)) . '

				' . $__templater->formTextBoxRow(array(
			'name' => 'subject',
			'required' => 'required',
		), array(
			'label' => 'Subject',
			'hint' => 'Required',
		)) . '

				' . $__templater->formTextAreaRow(array(
			'name' => 'message',
			'rows' => '5',
			'autosize' => 'true',
			'required' => 'required',
		), array(
			'label' => 'Message',
			'hint' => 'Required',
		)) . '
			</div>
			' . $__templater->formSubmitRow(array(
			'submit' => 'Send',
		), array(
		)) . '
		</div>
		' . $__templater->fn('redirect_input', array(null, null, true)) . '
	', array(
			'action' => $__templater->fn('link', array('misc/contact', ), false),
			'class' => 'block',
			'ajax' => 'true',
			'data-force-flash-message' => 'true',
		)) . '
';
	} else {
		$__finalCompiled .= '
	' . $__templater->includeTemplate('contact_form_inline', $__vars) . '
';
	}
	return $__finalCompiled;
});