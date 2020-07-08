<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vivayalluca
 */

get_header();
?>

<main id="primary" class="site-main blog">
	<div class="container content-area">
		<div class="row">
			<div class="col-12">
				<h2 class="title--page text-center">Blog</h2>
			</div>
			<?php
			if (have_posts()) :

				if (is_home() && !is_front_page()) :
			?>
					<div class="col-lg-9">
						<?php
						/* Start the Loop */
						while (have_posts()) :
							the_post(); ?>

							<div class="col-12 item__blog">
								<?php the_post_thumbnail(); ?>
								<div class="categories my-4">
									<?php $categories = get_categories();
									foreach ($categories as $category) {
										echo '<div class="item__categories"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
									} ?>
								</div>

								<h3><?php the_title(); ?></h3>
								<?php the_excerpt(); ?>
								<a class="leermas" href="<?php the_permalink(); ?>">Leer Más</a>
							</div>

						<?php
						endwhile;

						the_posts_navigation(); ?>



					<?php
				else : ?>

						<div class="container row">
							<div class="col-12">
								<h3 class="text-center">
									Lo sentimos no hay posts disponibles.
								</h3>
							</div>
						</div>

					</div>
				<?php
				endif; ?>

		</div>

	<?php
			endif;
	?>

	</div>
	</div>
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
