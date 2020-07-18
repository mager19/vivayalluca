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

<div class="container pt-5 cita__container">
	<div class="row">
		<div class="col-12 col-lg-8 mx-auto">
			<h2 class="title--page text-center">
				Haz tu cita
			</h2>
		</div>
		<div class="col-lg-9 mx-auto pt-3 pb-5">
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
				if (get_field('form_shortcode')) {
					the_field('form_shortcode');
				}

				?>

			<?php

			endwhile; // End of the loop.
			?>

		</div>
	</div>
</div>

<?php

get_footer();
