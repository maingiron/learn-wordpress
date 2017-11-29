<?php 

//-----------------------------------------------------------------------------

	/**
	 * Função para carregamento dos scripts.
	 */
	function carrega_scripts() {

		wp_enqueue_style('template', get_template_directory_uri() . '/assets/css/template.css', array(), '1.0', 'all');
		wp_enqueue_script('template', get_template_directory_uri() . '/assets/js/template.js', array(), '1.0', true);
		
		wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css', array(), '4.0.0-beta-2', 'all');
		wp_enqueue_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array('jquery'), '1.12.3', true);
		wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array('jquery'), '4.0.0-beta.2', true);
	}

	add_action('wp_enqueue_scripts', 'carrega_scripts');

//-----------------------------------------------------------------------------