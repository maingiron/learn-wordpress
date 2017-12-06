<?php get_header(); ?>
<div class="conteudo">
	<main>
		<section class="meio container">
			<div class="noticias">
				<?php 
					// Se houver algum post
					if(have_posts()) : 
						// Enquanto houver algum post, chame o post...
						while (have_posts()) : the_post();
				?>
					<h1><?php the_title(); ?></h1>
					<p>Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
					<p>Categorias: <?php the_category(' '); ?></p>
					<p><?php the_tags('Tags: ', ', ') ?></p>
					<p><?php the_content(); ?></p>
				<?php 
						endwhile;
					else:
				?>
					<p>Não existe post...</p>
				<?php 
					endif;
				?>
			</div>
		</section>
	</main>
</div>
<?php get_footer(); ?>