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
					<nav class="site-nav site__header col-lg-4 d-none d-lg-block">
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
						<!-- Button trigger modal -->
						<div class="mobile-nav flex items-center d-block d-lg-none">
							<button type="button" id="openMenu">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</button>
						</div>
						<div class="logoContainer">
							<?php $GETlogo = get_field('logo_site', 'option'); ?>
							<a href="<?php echo esc_url(get_bloginfo('url')); ?>">
								<img src="<?php echo $GETlogo['url']; ?>" />
							</a>
						</div>
					</div><!-- .site-branding -->
					<nav class="site-nav col-lg-4 d-none d-lg-block">
						<div class="main-nav main-nav__right">
							<div class="row">
								<div class="col-12">
									<?php
									if (has_nav_menu('menu-2')) {
										wp_nav_menu(array('theme_location' => 'menu-2'));
									}
									?>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</header><!-- #masthead -->