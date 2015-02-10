<?php get_header(); ?>
<header>
		<div id="menu-normal">
			<div id="fondologo">
				<figure>
					<h1><a href="index.php">DIAR</a></h1>
					<figcaption>
						<p>Renta y Venta de Inmuebles</p>
						<p><span>Tel. 64 2 63 31</span></p>
						<p><span>diarone15@hotmail.com</span></p>
					</figcaption>
				</figure>	
			</div>
			<div id="no-slide">
				<?php include (TEMPLATEPATH. '/slideshow.php'); ?>
			</div>
		</div>
		<div id="menu-mobil">
			<h1><a href="index.php">DIAR</a></h1>
		</div>
	</header>
	<nav>
		<?php 
		wp_nav_menu(
			array(
				'container' => false,
				'items_wrap' => '<ul id="menu-top">%3$s</ul>',
				'theme_location' => 'menu'
			)
		);

		?>
	</nav>
	<section id="main">
	<?php wp_reset_query(); ?>
	<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article>
			<figure>
				
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'list_articles_thumbs' ); } ?>

				<figcaption>
					<h3><a href="<?php the_permalink();?>">Ver más información</a></h3>
				</figcaption>
			</figure>
		</article>
	<?php endwhile; else: ?>
		<p>No se han encontrado articulos</p>
	<?php endif;?>
	</section>
	<section id="paginacion">
		<?php next_posts_link('Siguiente página'); ?>
		<?php previous_posts_link('Página anterior'); ?>
	</section>

<?php get_footer(); ?>
