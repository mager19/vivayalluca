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

<div class="container py-5">
	<div class="row">
		<div class="col-12 col-lg-8 mx-auto">
			<h3 class="title--section text-center">
				Haz tu cita
			</h3>
		</div>
		<div class="col-lg-10 mx-auto py-5">
			<?php
			while (have_posts()) : the_post();
				$GETlogo = get_field('logo_site', 'option'); ?>
				<a href="<?php echo esc_url(get_bloginfo('url')); ?>">
					<img src="<?php echo $GETlogo['url']; ?>" height="<?php echo $GETlogo['height'] / 2; ?>" width="<?php echo $GETlogo['width'] / 2; ?>" />
				</a>
				<div class="content py-5">
					<?php
					the_content(); ?>
				</div>

			<?php

			endwhile; // End of the loop.
			?>

		</div>
	</div>
</div>

<?php

get_footer();
