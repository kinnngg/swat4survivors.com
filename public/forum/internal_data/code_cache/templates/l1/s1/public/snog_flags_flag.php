<?php
// FROM HASH: 7b44879587b8875eac6606b9c2f49d2b
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->callback('Snog\\Flags\\Callback\\Country', 'getCountry', '', array($__vars['user']->{'snog_flag'}, '', 'tool', )) . '

<script>
	$(".userflag-tool").on(\'touchstart click\', function (){
		if(event.handled === false) return
		event.stopPropagation();
		event.preventDefault();
		event.handled = true;
		
		var $title = $(this).find(".data-original-title");
		if (!$title.length) {
			$(this).append(\'<span class="data-original-title">\' + $(this).attr("data-original-title") + \'</span>\');
		}
		
		if ($title.is(\':visible\')) {
			$title.hide();
		} else {
			$title.show();
		}
	});
</script>';
	return $__finalCompiled;
});