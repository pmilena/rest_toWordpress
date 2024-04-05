<?php
//Template Name: Contato
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="container contato">
		<h2 class="subtitulo"><?php the_title(); ?></h2>

		<div class="grid-16">
			<a href=<?php the_field('link_mapa');?> target="_blank"> <img src= <?php the_field('mapa_da_empresa'); ?> alt='mapa da empresa'></a>
		</div>

		<?php if(have_rows('dados_contato')): while(have_rows('dados_contato')) : the_row(); ?>
		<div class="grid-1-3 contato-item">
			<h2><?php the_sub_field('titulo_dados'); ?></h2>
			<?php the_sub_field('informacoes_dados'); ?>
		</div>
		<?php endwhile; else : endif; ?>
	</section>
	<?php endwhile; else: endif; ?>
	<?php get_footer(); ?>