<?php get_header(); ?>
	<header>
		<h1><a href="index.php">DIAR</a></h1>
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
		<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="post">
			<h2><?php the_title(); ?></h2>
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail ( 'list_articles_thumbs' ); } ?>
			<?php the_content(); ?>
		</article>
		<?php endwhile; else: ?>
			<p>No se han encontrado articulos</p>
		<?php endif;?>
	</section>

<?php get_footer(); ?>