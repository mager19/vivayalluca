<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vivayalluca
 */

get_header();
?>

<?php

while (have_posts()) : the_post();
	$obj = get_post_type_object('coleccion'); ?>

	<section class="intro__coleccion">
		<div class="container content-area">
			<div class="row">
				<div class="col-4 mx-auto">
					<div class="title__post__type">
						<h3 class="text-center"><?php echo $obj->label; ?></h3>
					</div>
				</div>

				<div class="w-100"></div>

				<div class="col-lg-8 mx-auto title__section">
					<h3 class="title--page">
						<?php the_title(); ?>
					</h3>
				</div>

				<div class="col-lg-8 mx-auto">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>

	<!-- imagenes -->
	<section class="imagenes__coleccion pb-5">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<?php if (have_rows('imagenes')) : ?>

						<?php while (have_rows('imagenes')) : the_row(); ?>

							<?php $imagen = get_sub_field('imagen'); ?>

							<img src="<?php echo $imagen['url']; ?>" class="mx-auto">

						<?php endwhile; ?>

					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>

	<section class="extra__content pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<?php the_field('extra_content'); ?>
				</div>
			</div>
		</div>
	</section>

<?php endwhile; ?>
<!-- post navigation -->


<?php

get_footer();
