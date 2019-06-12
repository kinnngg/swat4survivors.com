<?php
// FROM HASH: 261441e27059c3acba3aea9d6ca116d4
return array('macros' => array('depth1' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'node' => '!',
		'extras' => '!',
		'children' => '!',
		'childExtras' => '!',
		'depth' => '1',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	<div class="block block--category block--category' . $__templater->escape($__vars['node']['node_id']) . '">
		<span class="u-anchorTarget" id="' . $__templater->escape($__templater->method($__vars['node']['Data'], 'getCategoryAnchor', array())) . '"></span>
		<div class="block-container">
			
			<!-- adding complex bit -->
				<div class="categoryStrip">
				<div class="tableft">
				<div class="tabright">
			<!-- end complex bit -->
			
			<h2 class="block-header">
				<a href="' . $__templater->fn('link', array('categories', $__vars['node'], ), true) . '">' . $__templater->escape($__vars['node']['title']) . '</a>
				' . '
			</h2>
			
			<!-- adding complex bit -->
			</div>
			</div>
			</div>
			<!-- Adding fbit wrapper -->
			<div class="forumbits_left">
			<div class="forumbits_right">
			<!-- end complex bit -->
			';
	if ($__vars['node']['description']) {
		$__finalCompiled .= '<span class="block-desc">' . $__templater->filter($__vars['node']['description'], array(array('raw', array()),), true) . '</span>';
	}
	$__finalCompiled .= '
			<div class="block-body">
				' . $__templater->callMacro('forum_list', 'node_list', array(
		'children' => $__vars['children'],
		'extras' => $__vars['childExtras'],
		'depth' => ($__vars['depth'] + 1),
	), $__vars) . '
			</div>
				
			<!-- end fbit wrapper -->
			</div>
			</div>
			<!-- Adding fbit -->
			<div class="fbit_bwrap">
			<div class="fbit_bleft">&nbsp;</div>
			<div class="fbit_bright">&nbsp;</div>
			</div>
			<!-- end fbit -->
			
		</div>
	</div>
';
	return $__finalCompiled;
},
'depth2' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'node' => '!',
		'extras' => '!',
		'children' => '!',
		'childExtras' => '!',
		'depth' => '1',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	<div class="node node--id' . $__templater->escape($__vars['node']['node_id']) . ' node--depth' . $__templater->escape($__vars['depth']) . ' node--category ' . ($__vars['extras']['hasNew'] ? 'node--unread' : 'node--read') . '">
		<div class="node-wrapper">
		';
	if (($__templater->fn('property', array('nlUseImgNodes', ), false) == true) AND ($__templater->fn('property', array('nlImgNodeLayout', ), false) == 'above')) {
		$__finalCompiled .= '
			<a href="' . $__templater->fn('link', array('categories', $__vars['node'], ), true) . '" class="nodeImgPreview ';
		if ($__templater->fn('property', array('nlImgNodeUseOverlay', ), false) == true) {
			$__finalCompiled .= ' has-overlay';
		}
		$__finalCompiled .= '" data-xf-init="' . (($__vars['descriptionDisplay'] == 'tooltip') ? 'element-tooltip' : '') . '" data-shortcut="node-description">&nbsp;</a>
		';
	}
	$__finalCompiled .= '
		<div class="node-body ';
	if (($__templater->fn('property', array('nlUseImgNodes', ), false) == true) AND ($__templater->fn('property', array('nlImgNodeLayout', ), false) == 'behind')) {
		$__finalCompiled .= 'nodeImgPreview';
	}
	$__finalCompiled .= ' ';
	if ($__templater->fn('property', array('nlImgNodeUseOverlay', ), false) == true) {
		$__finalCompiled .= ' has-overlay';
	}
	$__finalCompiled .= '">
			<span class="node-icon" aria-hidden="true">' . $__templater->fn('property', array('nlNodeIconForum', ), true) . '</span>
			<div class="node-main js-nodeMain">
				';
	$__vars['descriptionDisplay'] = $__templater->fn('property', array('nodeListDescriptionDisplay', ), false);
	$__finalCompiled .= '
				<h3 class="node-title">
					<a href="' . $__templater->fn('link', array('categories', $__vars['node'], ), true) . '" data-xf-init="' . (($__vars['descriptionDisplay'] == 'tooltip') ? 'element-tooltip' : '') . '" data-shortcut="node-description">' . $__templater->escape($__vars['node']['title']) . '</a>
				</h3>
				';
	if (($__vars['descriptionDisplay'] != 'none') AND $__vars['node']['description']) {
		$__finalCompiled .= '
					<div class="node-description ' . (($__vars['descriptionDisplay'] == 'tooltip') ? 'node-description--tooltip js-nodeDescTooltip' : '') . '">' . $__templater->filter($__vars['node']['description'], array(array('raw', array()),), true) . '</div>
				';
	}
	$__finalCompiled .= '

				<div class="node-meta">
					';
	if (!$__vars['extras']['privateInfo']) {
		$__finalCompiled .= '
						<div class="node-statsMeta">
							<dl class="pairs pairs--inline">
								<dt>';
		if ($__templater->fn('property', array('nlNodeStatsIcons', ), false) == true) {
			$__finalCompiled .= '<i class="fas fa-comment"></i>';
		} else {
			$__finalCompiled .= 'Threads';
		}
		$__finalCompiled .= '</dt>
								<dd>' . $__templater->filter($__vars['extras']['discussion_count'], array(array('number_short', array(1, )),), true) . '</dd>
							</dl>
							<dl class="pairs pairs--inline">
								<dt>';
		if ($__templater->fn('property', array('nlNodeStatsIcons', ), false) == true) {
			$__finalCompiled .= '<i class="fas fa-comments"></i>';
		} else {
			$__finalCompiled .= 'Messages';
		}
		$__finalCompiled .= '</dt>
								<dd>' . $__templater->filter($__vars['extras']['message_count'], array(array('number_short', array(1, )),), true) . '</dd>
							</dl>
						</div>
					';
	}
	$__finalCompiled .= '

					';
	if (($__vars['depth'] == 2) AND ($__templater->fn('property', array('nodeListSubDisplay', ), false) == 'menu')) {
		$__finalCompiled .= '
						' . $__templater->callMacro('forum_list', 'sub_nodes_menu', array(
			'children' => $__vars['children'],
			'childExtras' => $__vars['childExtras'],
			'depth' => ($__vars['depth'] + 1),
		), $__vars) . '
					';
	}
	$__finalCompiled .= '
				</div>

				';
	if (($__vars['depth'] == 2) AND ($__templater->fn('property', array('nodeListSubDisplay', ), false) == 'flat')) {
		$__finalCompiled .= '
					' . $__templater->callMacro('forum_list', 'sub_nodes_flat', array(
			'children' => $__vars['children'],
			'childExtras' => $__vars['childExtras'],
			'depth' => ($__vars['depth'] + 1),
		), $__vars) . '
				';
	}
	$__finalCompiled .= '
			</div>

			';
	if ((!$__vars['extras']['privateInfo']) AND ($__templater->fn('property', array('nlNodeStatsLocation', ), false) == 'default')) {
		$__finalCompiled .= '
				<div class="node-stats ';
		if ($__templater->fn('property', array('nlNodeStatsIcons', ), false) == true) {
			$__finalCompiled .= 'node-stats--iconify';
		}
		$__finalCompiled .= '">
					<dl class="pairs pairs--rows">
						<dt>';
		if ($__templater->fn('property', array('nlNodeStatsIcons', ), false) == true) {
			$__finalCompiled .= '<i class="fas fa-comment"></i>';
		} else {
			$__finalCompiled .= 'Threads';
		}
		$__finalCompiled .= '</dt>
						<dd>' . $__templater->filter($__vars['extras']['discussion_count'], array(array('number_short', array(1, )),), true) . '</dd>
					</dl>
					<dl class="pairs pairs--rows">
						<dt>';
		if ($__templater->fn('property', array('nlNodeStatsIcons', ), false) == true) {
			$__finalCompiled .= '<i class="fas fa-comments"></i>';
		} else {
			$__finalCompiled .= 'Messages';
		}
		$__finalCompiled .= '</dt>
						<dd>' . $__templater->filter($__vars['extras']['message_count'], array(array('number_short', array(1, )),), true) . '</dd>
					</dl>
				</div>
			';
	}
	$__finalCompiled .= '

			<div class="node-extra">
				';
	if ($__vars['extras']['privateInfo']) {
		$__finalCompiled .= '
					<span class="node-extra-placeholder">' . 'Private' . '</span>
				';
	} else if ($__vars['extras']['LastThread']) {
		$__finalCompiled .= '
					<div class="node-extra-icon">
						';
		if ($__templater->method($__vars['xf']['visitor'], 'isIgnoring', array($__vars['extras']['last_post_user_id'], ))) {
			$__finalCompiled .= '
							' . $__templater->fn('avatar', array(null, 'xs', false, array(
			))) . '
						';
		} else {
			$__finalCompiled .= '
							' . $__templater->fn('avatar', array($__vars['extras']['LastPostUser'], 'xs', false, array(
				'defaultname' => $__vars['extras']['last_post_username'],
			))) . '
						';
		}
		$__finalCompiled .= '
					</div>
					<div class="node-extra-row">
						';
		if ($__templater->method($__vars['extras']['LastThread'], 'isUnread', array())) {
			$__finalCompiled .= '
							<a href="' . $__templater->fn('link', array('threads/unread', $__vars['extras']['LastThread'], ), true) . '" class="node-extra-title" title="' . $__templater->escape($__vars['extras']['LastThread']['title']) . '">' . $__templater->fn('prefix', array('thread', $__vars['extras']['LastThread'], ), true) . $__templater->escape($__vars['extras']['LastThread']['title']) . '</a>
						';
		} else {
			$__finalCompiled .= '
							<a href="' . $__templater->fn('link', array('threads/post', $__vars['extras']['LastThread'], array('post_id' => $__vars['extras']['last_post_id'], ), ), true) . '" class="node-extra-title" title="' . $__templater->escape($__vars['extras']['LastThread']['title']) . '">' . $__templater->fn('prefix', array('thread', $__vars['extras']['LastThread'], ), true) . $__templater->escape($__vars['extras']['LastThread']['title']) . '</a>
						';
		}
		$__finalCompiled .= '
					</div>
					<div class="node-extra-row">
						<ul class="listInline listInline--bullet">
							<li class="node-extra-date">' . $__templater->fn('date_dynamic', array($__vars['extras']['last_post_date'], array(
		))) . '</li>
							';
		if ($__templater->method($__vars['xf']['visitor'], 'isIgnoring', array($__vars['extras']['last_post_user_id'], ))) {
			$__finalCompiled .= '
								<li class="node-extra-user">' . 'Ignored member' . '</li>
							';
		} else {
			$__finalCompiled .= '
								<li class="node-extra-user">' . $__templater->fn('username_link', array($__vars['extras']['LastPostUser'], false, array(
				'defaultname' => $__vars['extras']['last_post_username'],
			))) . '</li>
							';
		}
		$__finalCompiled .= '
						</ul>
					</div>
				';
	} else {
		$__finalCompiled .= '
					<span class="node-extra-placeholder">' . 'None' . '</span>
				';
	}
	$__finalCompiled .= '
			</div>
			</div><!-- end node-body -->
		</div><!-- end node-wrapper -->
	</div>
';
	return $__finalCompiled;
},
'depthN' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'node' => '!',
		'extras' => '!',
		'children' => '!',
		'childExtras' => '!',
		'depth' => '1',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	<li>
		<a href="' . $__templater->fn('link', array('categories', $__vars['node'], ), true) . '" class="subNodeLink subNodeLink--category ' . ($__vars['extras']['hasNew'] ? 'subNodeLink--unread' : '') . '">' . $__templater->escape($__vars['node']['title']) . '</a>
		' . $__templater->callMacro('forum_list', 'sub_node_list', array(
		'children' => $__vars['children'],
		'childExtras' => $__vars['childExtras'],
		'depth' => ($__vars['depth'] + 1),
	), $__vars) . '
	</li>
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