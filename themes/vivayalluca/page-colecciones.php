<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vivayalluca
 */

get_header();
?>

<!-- Colecciones -->
<section class="colecciones content-area">
	<div class="container">
		<div class="row">
			<div class="text-center mx-auto">
				<h2 class="title--page text-center">
					Colecciones
				</h2>
			</div>
		</div>

		<div class="row">
			<?php
			$args = array('post_type' => 'coleccion', 'posts_per_page' => -1, 'order' => 'ASC');
			$loop = new WP_Query($args);
			if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
					<div class="col-lg-4 col-md-6 colecciones__item">
						<div class="colecciones__item__content">
							<a href="<?php the_permalink(); ?>">
								<?php $url = get_the_post_thumbnail_url(); ?>
								<div class="item__header" style="background-image:url(<?php echo $url; ?>);">

								</div>
								<h3 class="item__title">
									<?php the_title(); ?>
								</h3>
							</a>
						</div>
					</div>
				<?php endwhile; ?>
				<!-- post navigation -->
			<?php else : ?>
				<!-- no posts found -->
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
</section>

<?php

get_footer();
