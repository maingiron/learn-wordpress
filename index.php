<?php get_header(); ?>
<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<div class="conteudo">
	<main>
		<section class="slide">Slide</section>
		<section class="servicos">Serviços</section>
		<section class="meio container">
			<div class="row">
				<aside class="barra-lateral col-md-3">
					<?php get_sidebar('blog'); ?>
				</aside>
				<div class="noticias col-md-9">
					<?php 
						// Se houver algum post
						if(have_posts()) : 
							// Enquanto houver algum post, chame o post...
							while (have_posts()) : the_post();
						
								// Obtém parte do template com o nome passado por parâmetro
								get_template_part('content', get_post_format());

							endwhile;
						else:
					?>
						<p>Não existe post...</p>
					<?php 
						endif;
					?>
				</div>
			</div>
		</section>
		<section class="mapa">Mapa</section>
	</main>
</div>
<?php get_footer(); ?>