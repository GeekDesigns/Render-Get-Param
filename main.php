<?php

function render_get_params($atts) {
	if($atts['tag'] && $atts['key']) {
		$tag = $atts['tag'];
		$value = $_GET[$atts['key']];
		$prefix = $atts['prefix'];
		$suffix = $atts['suffix'];
		if($atts['align']) {
			$align = 'style="text-align: '.$atts['align'].'"';
		} else {
			$align = '';
		}
		return("<$tag $align>$prefix$value$suffix</$tag>");
	}
	return false;
}

add_shortcode('render-get-param', 'render_get_params');
