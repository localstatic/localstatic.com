<?php

/**
 *
 */
function get_para_html($str, $class)
{
	$html = '<p';

	if ($class != '')
		$html .= ' class="' . $class . '"';
	
	$html .= '>' . $str . "</p>\n";

	return $html;
}

?>
