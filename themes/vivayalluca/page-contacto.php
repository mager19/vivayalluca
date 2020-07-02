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

<div class="container">
	<div class="row">
		<div class="col-12">
			<?php
			while (have_posts()) : the_post(); ?>
				<div class="col-12">
					<h2 class="title--page text-center"><?php the_title(); ?></h2>
				</div>


				<div class="col-lg-10 mx-auto form__contact">
					<?php the_content(); ?>
				</div>
			<?php
			endwhile; // End of the loop.
			?>
		</div>
	</div>
</div>

<?php if (have_rows('showroomrepetear', 'option')) : ?>
	<div class="container-fluid showrooms">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center">Showrooms</h3>
			</div>
			<?php while (have_rows('showroomrepetear', 'option')) : the_row(); ?>
				<div class="col-lg-3 col-md-6 col-12 mx-auto">
					<div class="showrooms__item">
						<?php $image = get_sub_field('imagen_showroom'); ?>
						<div class="image__item" style="background-image:url(<?php echo $image['url']; ?>);">

						</div>
						<div class="informacion__item">
							<h3><?php the_sub_field('nombre_showroom', 'option'); ?></h3>
							<p><?php the_sub_field('direccion_showroom', 'option'); ?></p>
							<ul class="links__showroom">
								<li><a class="telefono__showroom" href="tel:<?php the_sub_field('telefono_showroom', 'option'); ?>"><?php the_sub_field('telefono_showroom', 'option'); ?></a></li>
								<li><a class="whatsapp__showroom" href="<?php the_sub_field('whatsapp_showroom', 'option'); ?>">
										<?php the_sub_field('whatsapp_showroom', 'option'); ?></a></li>
							</ul>

							<a href="mailto:<?php the_sub_field('email'); ?>" class="email__showroom">
								<?php the_sub_field('email'); ?>
							</a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>

<?php endif; ?>

<?php
get_footer();
