<?php get_header(); ?>
<div class="conteudo">
	<main>
		<section class="slide">Slide</section>
		<section class="servicos">Serviços</section>
		<section class="meio container">
			<div class="row">
				<aside class="barra-lateral col-md-3">
					<?php get_sidebar('sidebar-home'); ?>
				</aside>
				<div class="noticias col-md-9">
					<div class="row">
						<?php 
							$destaque = new WP_Query('post_type=post&posts_per_page=1&cat=11,3');

							if ($destaque->have_posts()):
								while ($destaque->have_posts()):
									$destaque->the_post();
						?>
									<div class="col-md-12">
										<?php get_template_part('content', 'destaque'); ?>
									</div>
									
						<?php
								endwhile;
							endif;

						 ?>
					</div>
				</div>
			</div>
		</section>
		<section class="mapa">Mapa</section>
	</main>
</div>
<?php get_footer(); ?>