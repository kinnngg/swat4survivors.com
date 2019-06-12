<?php
// FROM HASH: 5f47dda5c59e359752e3b9d263e3cd6b
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="block"' . $__templater->fn('widget_data', array($__vars['widget'], ), true) . '>
	<div class="block-container">
		<h3 class="block-minorHeader">' . $__templater->escape($__vars['title']) . '</h3>
		<div class="block-body">
			<ol class="categoryList is-active">
			';
	if ($__templater->isTraversable($__vars['categories'])) {
		foreach ($__vars['categories'] AS $__vars['category']) {
			$__finalCompiled .= '
				<li class="categoryList-item">
					<div class="categoryList-itemRow">
						<a href="' . $__templater->fn('link', array('ewr-porta/categories', $__vars['category'], ), true) . '">' . $__templater->escape($__vars['category']['category_name']) . '</a>
						<span class="categoryList-label">
							<span class="label label--subtle label--smallest">
								<a href="' . $__templater->fn('link', array('ewr-porta/categories', $__vars['category'], ), true) . '">' . $__templater->filter($__vars['category']['count'], array(array('NUMBER', array()),), true) . '</a>
							</span>
						</span>
					</div>
				</li>
			';
		}
	}
	$__finalCompiled .= '
			</ol>
		</div>
	</div>
</div>';
	return $__finalCompiled;
});