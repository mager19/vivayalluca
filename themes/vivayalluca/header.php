<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vivayalluca
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<div class="container">
				<div class="row header__container">
					<nav class="site-nav col-lg-4">
						<div class="main-nav main-nav__left">
							<?php
							if (has_nav_menu('menu-1')) {
								wp_nav_menu(array('theme_location' => 'menu-1'));
							}
							?>
						</div>
					</nav>
					<!--/Menu-->
					<div class="site-branding col-lg-4 text-center">
						<?php $GETlogo = get_field('logo_site', 'option'); ?>
						<a href="<?php echo esc_url(get_bloginfo('url')); ?>">
							<img src="<?php echo $GETlogo['url']; ?>" height="<?php echo $GETlogo['height'] / 2; ?>" width="<?php echo $GETlogo['width'] / 2; ?>" />
						</a>
					</div><!-- .site-branding -->
					<nav class="site-nav col-lg-4">
						<div class="main-nav main-nav__right">
							<?php
							if (has_nav_menu('menu-2')) {
								wp_nav_menu(array('theme_location' => 'menu-2'));
							}
							?>
						</div>
					</nav>
				</div>
			</div>
		</header><!-- #masthead -->