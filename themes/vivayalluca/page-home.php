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

<!-- Slide Home -->
<section class="slide__home content-area">
	<div class="container">
		<?php if (have_rows('slide_home')) : ?>
			<?php /*$count = count(get_field('slide_home'));
			if ($count > 1) {
				$slide = 'slider__home';
			} else {
				$slide = 'row';
			}*/
			?>

			<div class="row">
				<?php while (have_rows('slide_home')) : the_row(); ?>
					<div class="col-12 item__slider">
						<?php $image = get_sub_field('imagen_slide');

						echo wp_get_attachment_image($image['id'], $size = 'slidehome'); ?>

					</div>

				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<!-- Introduction -->
<section class="introduction content-area">
	<div class="container">
		<div class="row">
			<?php
			while (have_posts()) : the_post(); ?>
				<div class="col-lg-8 mx-auto">
					<div class="introduction__content">
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<!-- Colecciones -->
<section class="colecciones content-area">
	<div class="container">
		<div class="row">
			<div class="section__title text-center mx-auto">
				<h3>
					COLECCIONES
				</h3>
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

<!-- Interior Design -->
<section class="colecciones interior-design content-area ">
	<div class="container">
		<div class="row">
			<div class="section__title text-center mx-auto">
				<h3>
					INTERIOR DESIGN STUDIO
				</h3>
			</div>
		</div>

		<div class="row">
			<?php if (have_rows('interior_design_items')) : ?>

				<?php while (have_rows('interior_design_items')) : the_row(); ?>

					<div class="col-lg-4 col-md-6 colecciones__item">
						<div class="colecciones__item__content">
							<a href="/interior-design-studio/<?php the_sub_field('interior_item_link'); ?>">
								<?php $url = get_sub_field('interior_item_image'); ?>
								<div class="item__header" style="background-image:url(<?php echo $url; ?>);">

								</div>
								<h3 class="item__title">
									<?php the_sub_field('interior_item_title'); ?>
								</h3>
							</a>
						</div>
					</div>

				<?php endwhile; ?>

			<?php endif; ?>
		</div>
	</div>
</section>


<?php
get_footer();
