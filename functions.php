<?php

/**
 * truongtuan functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package truongtuan
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

//Thêm đoạn code sau vào functions.php
function wpshare247_theme_support()
{
	remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'wpshare247_theme_support');

//tạo 2 widget mới
function wpshare247_widgets_init()
{
	// Thêm widget 1
	register_sidebar(array(
		'name'          => __('widget_1', 'text_domain'), // Tên sidebar hiển thị trong admin
		'id'            => 'sidebar-widget-1', // ID của sidebar không được trùng, dùng để hiển thị SB
		'description'   => __('Thêm các widget *[widget_1] vào đây', 'text_domain'), // Mô tả cho SB nảy
		'before_widget' => '<section id="%1$s" class="widget %2$s">', // Bạn có thể thêm Class cho SB vào đây
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">', // Thẻ mở để tạo tiêu đề chung cho tất cả các Widget nẳm trong Sidebar này
		'after_title'   => '</h2>', // Đóng thẻ tiêu đề
	));

	// Thêm widget 2
	register_sidebar(array(
		'name'          => __('widget_2', 'text_domain'),
		'id'            => 'sidebar-widget-2',
		'description'   => __('Thêm các widget *[widget_2] vào đây', 'text_domain'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	// Thêm widget liên kết mạng xã hội
	register_sidebar(array(
		'name'          => __('widget_fb', 'text_domain'),
		'id'            => 'sidebar-widget-fb',
		'description'   => __('Thêm các widget *[widget_2] vào đây', 'text_domain'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	// Thêm widget map
	register_sidebar(array(
		'name'          => __('widget_map', 'text_domain'),
		'id'            => 'sidebar-widget-map',
		'description'   => __('Thêm các widget *[widget_2] vào đây', 'text_domain'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	// Thêm Footer
	register_sidebar(array(
		'name'          => __('Footer', 'text_domain'),
		'id'            => 'sidebar-footer',
		'description'   => __('Thêm các widget *[Footer] vào đây', 'text_domain'),
		'before_widget' => '<section id="%1$s" class="widget sb-right %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'wpshare247_widgets_init');

//đăng ký widget mới
function wpshare247_register_widgets(){
    //Khai báo widget mới
    $file = realpath(dirname(__FILE__)).'/widgets/wpshare247_simple.php';
    require_once($file);
    register_widget('wpshare247_simple');
    
    //Hãy tiếp tục khai báo thêm các WG khác như bên dưới
    /*$file = realpath(dirname(__FILE__)).'/widgets/wpshare247_simple_2.php';
    require_once($file);
    register_widget('wpshare247_simple_2');*/
    
}
add_action('widgets_init', 'wpshare247_register_widgets');

function tuanpho_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on truongtuan, use a find and replace
		* to change 'tuanpho' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('tuanpho', get_template_directory() . '/languages');

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'tuanpho'),
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
			'tuanpho_custom_background_args',
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
add_action('after_setup_theme', 'tuanpho_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tuanpho_content_width()
{
	$GLOBALS['content_width'] = apply_filters('tuanpho_content_width', 640);
}
add_action('after_setup_theme', 'tuanpho_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tuanpho_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'tuanpho'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'tuanpho'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'tuanpho_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function tuanpho_scripts()
{
	wp_enqueue_style('tuanpho-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('tuanpho-style', 'rtl', 'replace');

	wp_enqueue_script('tuanpho-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	wp_enqueue_style('tailwindstyle', get_template_directory_uri() . '/assets/css/output.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'tuanpho_scripts');


require get_template_directory() . '/inc/dev.php';
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
