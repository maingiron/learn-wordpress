<?php 


	/**
	 * Função para carregamento dos scripts.
	 */
	function carrega_scripts() {

		
		wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css', array(), '4.0.0-beta-2', 'all');
		wp_enqueue_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array('jquery'), '1.12.3', true);
		wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array('jquery'), '4.0.0-beta.2', true);
		
		wp_enqueue_style('template', get_template_directory_uri() . '/assets/css/template.css', array(), '1.0', 'all');
		wp_enqueue_script('template', get_template_directory_uri() . '/assets/js/template.js', array(), '1.0', true);
	}

	add_action('wp_enqueue_scripts', 'carrega_scripts');

//-----------------------------------------------------------------------------

	/**
	 * Função para menus.
	 */
	register_nav_menus(

		array(
			'menu_principal' => 'Menu Principal',
			'menu_rodape'	 => 'Menu Rodapé'
		)
	);

//-----------------------------------------------------------------------------

	/**
	 * Função para dá suporte ao tema.
	 */
	add_theme_support('custom-background');		// Adiciona um background na página
	add_theme_support('custom-header');			// Adiciona uma imagem no header
	add_theme_support('post-thumbnails');		// Adiciona uma miniatura

	// Adiciona um formato para o post
	add_theme_support('post-formats', array('video', 'image'));			

//-----------------------------------------------------------------------------

	/**
	 * Adicionado sidebars.
	 */
	register_sidebar(

		array(
			'name' 			=> 'Barra Lateral 1',
			'id'			=> 'sidebar-home',
			'description' 	=> 'Barra lateral da página home',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h2 class="widget-titulo">',
			'after_title' 	=> '</h2>'
		)
	);

//-----------------------------------------------------------------------------

	/**
	 * Adicionado sidebars.
	 */
	register_sidebar(

		array(
			'name' 			=> 'Barra Lateral 2',
			'id'			=> 'sidebar-blog',
			'description' 	=> 'Barra lateral da página blog',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h2 class="widget-titulo">',
			'after_title' 	=> '</h2>'
		)
	);

//-----------------------------------------------------------------------------

//-----------------------------------------------------------------------------