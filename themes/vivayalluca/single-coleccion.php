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
				<?php if (have_rows('imagenes')) : ?>


					<?php
					$numrows = count(get_field('imagenes'));

					?>


					<?php


					switch ($numrows) {
						case '1':
							while (have_rows('imagenes')) : the_row();
								$imagen = get_sub_field('imagen'); ?>
								<div class="col-12 text-center">
									<img src="<?php echo $imagen['url']; ?>" class="mx-auto">
								</div>
								<?php
							endwhile;
							break;

						case '2':
							$counter = 1;
							while (have_rows('imagenes')) : the_row();
								$imagen = get_sub_field('imagen');
								if ($counter == 1) { ?>
									<div class="col-md-7 col-12 mb-4 text-center">
										<img src="<?php echo $imagen['url']; ?>" class="mx-auto">
									</div>
								<?php
								} else { ?>
									<div class="col-md-5 col-12 mb-4 text-center d-flex align-items-end">
										<img src="<?php echo $imagen['url']; ?>" class="mx-auto">
									</div>
							<?php 								}
								$counter++;
							endwhile;
							break;

						case '3':
							$counter = 1;
							while (have_rows('imagenes')) : the_row();

								if ($counter == 1) {
									$imagen1 = get_sub_field('imagen');
								} elseif ($counter == 2) {
									$imagen2 = get_sub_field('imagen');
								} else {
									$imagen3 = get_sub_field('imagen');
								}

								$counter++;
							endwhile; ?>
							<div class="col-md-8 col-12 text-center mb-4 mb-lg-0">
								<img src="<?php echo $imagen1['url']; ?>" class="mx-auto">
							</div>

							<div class="col-md-4 col-12 d-flex align-items-end">

								<div class="row">
									<div class="col-12 mb-4 text-center">
										<?php echo wp_get_attachment_image($imagen2['id'], array(310, 230)); ?>
									</div>
									<div class="col-12 text-center">
										<?php echo wp_get_attachment_image($imagen3['id'], array(310, 310)); ?>
									</div>
								</div>

							</div>
					<?php
							break;

						default:
							# code...
							break;
					}
					?>

					<?php $imagen = get_sub_field('imagen'); ?>

					<!-- <img src="<?php echo $imagen['url']; ?>" class="mx-auto"> -->



				<?php endif; ?>
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
