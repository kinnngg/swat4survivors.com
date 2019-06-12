<?php
// FROM HASH: 09ea27ad0bf0f7b1a27841336dffc10a
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="p-row wide p-forum-welcome padding-m">
	<div class="p-row-inner flex">
		<div class="user-welcome">
			<div class="contentRow">
				<div class="contentRow-figure">
					<span class="avatarWrapper">
						' . $__templater->fn('avatar', array($__vars['xf']['visitor'], 'm', false, array(
		'href' => '',
		'notooltip' => 'true',
	))) . '
						';
	if ($__templater->method($__vars['xf']['visitor'], 'canUploadAvatar', array())) {
		$__finalCompiled .= '
							<a class="avatarWrapper-update" href="' . $__templater->fn('link', array('account/avatar', ), true) . '" data-xf-click="overlay"><span>' . 'Edit' . '</span></a>
						';
	}
	$__finalCompiled .= '
					</span>
				</div>
				<div class="contentRow-main flex f-v-stretch">
					<h2 class="contentRow-header">
						' . 'forum_welcome_row_welcome' . '<br>
						' . $__templater->fn('username_link', array($__vars['xf']['visitor'], false, array(
		'notooltip' => 'true',
	))) . '!
					</h2>
				</div>
			</div>
		</div>
		<div class="user-quickLinks flex f-v-stretch">
			<a href="' . $__templater->fn('link', array('find-threads/contributed', ), true) . '" class="button button--icon button--m icon--large">
			<i class="fas fa-comment-alt"></i>My Posts</a>
			<a href="' . $__templater->fn('link', array('conversations', ), true) . '" class="button button--icon button--slate button--m icon--large">
			<i class="fas fa-envelope"></i>My Conversations</a>
			<a href="#" class="button button--icon button--periwinkle button--m icon--large">
			<i class="fas fa-life-ring"></i>My Support Topics</a>
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
	</div>
</div>
<style>
.template-forum_list .p-body-inner {
    padding-top: 0;
}
</style>';
	return $__finalCompiled;
});