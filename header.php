<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Learn WordPress</title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header>
		<div class="barra-topo">
			<div class="container">
				<div class="row">
					<div class="redes-socias col-md-4">Redes Socias</div>
					<div class="pesquisa col-md-8 text-right">Pesquisa</div>
				</div>
			</div>
		</div>

		<div class="area-menu">
			<div class="container">
				<div class="row">
					<div class="logo col-md-3">Logo</div>
					<div class="menu-principal col-md-9 text-right">
						<?php wp_nav_menu(array('theme_location' => 'menu_principal')); ?>
					</div>
				</div>
			</div>
		</div>
	</header>