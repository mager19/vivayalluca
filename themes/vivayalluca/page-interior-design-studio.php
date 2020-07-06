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

<div class="container content-area">
	<div class="row">
		<div class="col-12">
			<?php
			while (have_posts()) : the_post(); ?>
				<h2 class="title--page text-center"><?php the_title(); ?></h2>

				<div class="row">
					<div class="col-lg-6 col-10 mx-auto">
						<?php the_content(); ?>
					</div>
				</div>
			<?php
			endwhile; // End of the loop.
			?>
		</div>
	</div>
</div>

<!-- Proyectos -->
<div class="container-fluid left__column" id="interiores">
	<div class="row">
		<div class="col-lg-7">
			<?php
			$image = get_field('item_1_imagen');
			?>
			<div class="content__image" style="background-image:url(<?php echo $image['url']; ?>);">

			</div>
		</div>
		<div class="col-lg-5 right__column pt-4">
			<div class="content">
				<h3 class="text-center text-lg-left pb-4 pb-lg-0"><?php the_field('item_1_title'); ?></h3>
				<?php the_field('item_1_content'); ?>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid left__column" id="medidas">
	<div class="row">
		<div class="col-lg-5 right__column">
			<div class="content">
				<h3 class="text-center text-lg-left pb-4 pb-lg-0"><?php the_field('item_2_title'); ?></h3>
				<?php the_field('item_2_content'); ?>
			</div>
		</div>

		<div class="col-lg-7">
			<?php
			$image = get_field('item_2_imagen');
			?>
			<div class="content__image" style="background-image:url(<?php echo $image['url']; ?>);">

			</div>
		</div>
	</div>
</div>

<div class="container-fluid left__column" id="comerciales">
	<div class="row">
		<div class="col-lg-6 mx-auto">
			<div class="content">
				<h3 class="text-center pb-4"><?php the_field('item_3_title'); ?></h3>
				<?php the_field('item_3_content'); ?>
			</div>
		</div>
		<div class="col-lg-10 mx-auto pt-5">
			<?php
			$image = get_field('item_3');
			?>
			<div class="content__image" style="background-image:url(<?php echo $image['url']; ?>);">

			</div>
		</div>

	</div>
</div>

<?php get_template_part('inc/pide', 'cita') ?>

<?php

get_footer();
