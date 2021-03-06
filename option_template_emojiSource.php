<?php
// FROM HASH: 9cc401a8212a4ff400effa751f59762e
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formRadioRow(array(
		'name' => $__vars['inputName'] . '[source]',
		'value' => $__vars['option']['option_value']['source'],
	), array(array(
		'value' => 'cdn',
		'label' => 'Serve from preferred CDN',
		'_type' => 'option',
	),
	array(
		'value' => 'local',
		'label' => 'Host from following location',
		'_dependent' => array('
			' . $__templater->formTextBox(array(
		'name' => $__vars['inputName'] . '[path]',
		'value' => $__vars['option']['option_value']['path'],
		'size' => '30',
	)) . '
			<dfn class="inputChoices-explain">' . 'The value above should be a relative or absolute URL path to the directory where the relevant PNG files are stored.' . '</dfn>
		'),
		'_type' => 'option',
	)), array(
		'label' => $__templater->escape($__vars['option']['title']),
		'hint' => $__templater->escape($__vars['hintHtml']),
		'explain' => $__templater->escape($__vars['explainHtml']),
		'html' => $__templater->escape($__vars['listedHtml']),
		'rowclass' => $__vars['rowClass'],
	));
	return $__finalCompiled;
}
);