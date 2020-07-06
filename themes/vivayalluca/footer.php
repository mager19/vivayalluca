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

<section class="menu-cta d-none d-lg-block">
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
	<div class="container-fluid container-sm">
		<div class="row">
			<div class="container__footer">
				<div class="row">
					<div class="col-lg-6 col-md-7 col-12">
						<div class="footer__left">
							<div class="title">
								<h3>Suscríbete para recibir news y promos</h3>
							</div>
							<div class="form">
								<?php echo do_shortcode("[gravityform id=3 title=false description=false ajax=true tabindex=49]") ?>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-5 col-12">
						<div class="footer__right">
							<div class="row">
								<div class="col-12 items__social">
									<?php
									if (have_rows('social_icons', 'option')) : ?>

										<?php
										while (have_rows('social_icons', 'option')) : the_row();
											$social = get_sub_field('social_icon');
										?>
											<li>
												<a href="<?php the_sub_field('social_profile'); ?>" target="_blank" data-linktype="social" data-socialnetwork="<?php echo $social['value']; ?>">
													<i class="icon-<?php echo $social['value']; ?>"></i>
												</a>
											</li>
										<?php endwhile; ?>

									<?php
									endif;
									?>
								</div>

								<div class="col-12 cita__footer">
									<h3>Haz una cita</h3>
									<ul class="menu__aux">
										<li class="whatsapp_link">
											<?php $phone = get_field('telefono', 'option'); ?>
											<a href="tel:<?php echo $phone; ?>">
												<?php echo $phone; ?>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
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