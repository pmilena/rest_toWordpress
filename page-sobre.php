<?php
//Template Name: Sobre
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-8">
				<img src= <?php the_field('imagem_da_empresa') ?> alt=<?php the_field('texto_alternativo')?>>
			</div>

			<div class="grid-8">
				<h2><?php the_field('titulo_da_historia'); ?></h2>
				<p><?php the_field('texto_da_historia');?>p>
				<h2>Visão</h2>
				<p>Não obstante, a expansão dos mercados mundiais faz parte de um processo de gerenciamento de alternativas às soluções ortodoxas.</p>
				<h2>Valores</h2>
				<p>O empenho em analisar a consolidação das estruturas apresenta tendências no sentido de aprovar a manutenção dos índices pretendidos.</p>
			</div>
		</section>
		<?php endwhile; else: endif; ?>
		<?php get_footer(); ?>