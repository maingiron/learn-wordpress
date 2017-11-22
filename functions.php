<?php 

	function carrega_scripts() {

		wp_enqueue_styles('template', get_template_directory_uri() . '/assets/css/template.css', array(), '1.0', 'all');
	}

	add_action('wp_enqueue_styles', 'carrega_scripts');