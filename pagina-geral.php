<?php 
/**
 * Template Name: Páginas Gerais
 */
get_header(); ?>
<div class="conteudo-wrapper">
	<main>
		<div class="conteudo container">
			<?php 
				// Se houver algum post
				if(have_posts()) : 
					// Enquanto houver algum post, chame o post...
					while (have_posts()) : the_post();
			?>
				<h1><?php the_title(); ?></h1>
				<p>Autor <?php the_author(); ?></p>
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
	</main>
</div>
<?php get_footer(); ?>