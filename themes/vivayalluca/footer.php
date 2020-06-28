<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vivayalluca
 */

?>

<section class="menu-cta">
	<div class="container">
		<div class="row">
			<div class="main-nav menu__bottom">
				<?php
				if (has_nav_menu('menu-footer')) {
					wp_nav_menu(array('theme_location' => 'menu-footer'));
				}
				?>
			</div>
		</div>
	</div>
</section>

<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="container__footer">
				<div class="row">
					<div class="footer__left">
						<h3>Suscríbete para recibir news y promos</h3>
						<?php echo do_shortcode("[gravityform id=2 title=false description=false ajax=true tabindex=49]") ?>
					</div>

					<div class="footer__right">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla deserunt odio pariatur dolor, deleniti officiis modi nam minima incidunt dicta perferendis natus! Ipsam nemo sint, dignissimos porro beatae a perspiciatis?
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>