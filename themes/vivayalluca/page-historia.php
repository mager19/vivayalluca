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
					<div class="col-6 mx-auto">
						<?php the_content(); ?>
					</div>

					<?php $image = get_field("imagen_historia");
					if ($image) { ?>
						<div class="col-lg-10 mx-auto">
							<div class="content__image__historia" style="background-image:url(<?php echo $image['url'] ?>);">
							</div>
						</div>
					<?php
					}
					?>

					<?php $extra = get_Field("contenido_extra") ?>
					<?php if ($extra) { ?>
						<div class="col-6 mx-auto py-5">
							<?php echo $extra ?>
						</div>
					<?php
					} ?>
				</div>
			<?php
			endwhile; // End of the loop.
			?>

		</div>
	</div>
</div>

<?php

get_footer();
