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

<main id="primary" class="site-main">
	<div class="container">
		<div class="row">
			<div class="col-12 pt-5">
				<h2 class="title--page text-center"><?php the_title(); ?></h2>
			</div>
			<div class="col-12 pb-5">
				<?php
				while (have_posts()) :
					the_post(); ?>

					<div class="thumbnail py-4">
						<?php the_post_thumbnail($size = "full"); ?>
					</div>
				<?php
					the_content();



				// If comments are open or we have at least one comment, load up the comment template.
				// if (comments_open() || get_comments_number()) :
				// 	comments_template();
				// endif;

				endwhile; // End of the loop.
				?>

			</div>
		</div>
	</div>
</main><!-- #main -->

<?php

get_footer();
