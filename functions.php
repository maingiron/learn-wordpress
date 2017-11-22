<?php 

	function carrega_scripts() {

		wp_enqueue_styles('template', get_template_directory_uri() . '/assets/css/template.css');
	}