<?php

/**
 * vivayalluca functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vivayalluca
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('vivayalluca_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vivayalluca_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on vivayalluca, use a find and replace
		 * to change 'vivayalluca' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('vivayalluca', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		add_image_size('slidehome', 1280, 534, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Header-left', 'vivayalluca'),
				'menu-2' => esc_html__('Header-right', 'vivayalluca'),
				'menu-footer' => esc_html__('Menu-footer', 'vivayalluca'),
				'menu-aux' => esc_html__('Header-right-aux', 'vivayalluca'),
				'menu-mobile' => esc_html__('Menu-Mobile', 'vivayalluca'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'vivayalluca_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'vivayalluca_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vivayalluca_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('vivayalluca_content_width', 640);
}
add_action('after_setup_theme', 'vivayalluca_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vivayalluca_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'vivayalluca'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'vivayalluca'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'vivayalluca_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function vivayalluca_scripts()
{
	// wp_enqueue_style( 'vivayalluca-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'vivayalluca-style', 'rtl', 'replace' );

	wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', null, '1.0.1', false);

	wp_enqueue_style('fontAwesome', get_template_directory_uri() . '/css/font-awesome.css', null, '1.0.1', false);

	wp_enqueue_style('google-font-icon', 'https://fonts.googleapis.com/icon?family=Material+Icons');

	wp_enqueue_script('vivayallucajs', get_template_directory_uri() . '/js/vivayalluca.js', array(), _S_VERSION, true);
	wp_enqueue_script('vivayalluca-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'vivayalluca_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}


if (function_exists('acf_add_options_page')) {

	acf_add_options_page();
}

add_filter('gform_validation_message', 'change_message', 10, 2);
function change_message($message, $form)
{
	return "<div class='validation_error'>Por Favor llena los campos requeridos para poder enviar el formulario - " . $form['title'] . '</div>';
}
