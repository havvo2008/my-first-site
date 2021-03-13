<?php
/**
 * Abedul functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package Abedul
 * @since Abedul 1.0.4
*
 * @uses abedul_header_style() to style front-end.
 */


/**
 * Abedul only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}


if ( ! function_exists( 'abedul_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Abedul 1.0.4
 */
function abedul_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Abedul, use a find and replace
	 * to change 'abedul' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'abedul', get_template_directory() . '/languages' );

	// Add theme support for Custom Header
	add_theme_support( 'custom-header', array (
		'default-image' => '',
		'default-text-color' => '206474',
		'width' => 1920,
		'height' => 300,
		'wp-head-callback' => 'abedul_header_style',
		) );


	// Add theme support for Custom Background
	add_theme_support( 'custom-background', array(
		'default-color' => 'fdffff',
		) );

	// Add theme support for Custom Logo
	add_theme_support( 'custom-logo', array(
		'width'       => 300,
		'height'      => 100,
		'flex-width'  => true,
		'flex-height' => false,
		) );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 832, 468);

	// This theme uses wp_nav_menu() in three locations.
	register_nav_menus( array(
		'primary' 	=> __( 'Primary Menu',      'abedul' ),
		'secondary' => __( 'Secondary Menu',   'abedul' ),
		'social' 	=> __( 'Social Links Menu', 'abedul' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	/*
	 * Add support for selective refresh of widget sidebars in the Customizer.
	 */
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', abedul_fonts_url() ) );
}
endif; // abedul_setup
add_action( 'after_setup_theme', 'abedul_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Abedul 1.0.4
 */
function abedul_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'abedul_content_width', 832 );
}
add_action( 'after_setup_theme', 'abedul_content_width', 0 );


/**
 * Register widget area.
 *
 * @since Abedul 1.0.4
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function abedul_widgets_init() {
	require get_template_directory() . '/inc/widget_templates.php';
	register_widget( 'Abedul_Templates' );
	require get_template_directory() . '/inc/widget_formats.php';
	register_widget( 'Abedul_Formats' );

	register_sidebar( array(
		'name'          => __( 'First Sidebar Area', 'abedul' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your first sidebar.', 'abedul' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Second Sidebar Area', 'abedul' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your second sidebar.', 'abedul' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'First Footer Area', 'abedul' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your first footer.', 'abedul' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Second Footer Area', 'abedul' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your second footer.', 'abedul' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'abedul_widgets_init' );

if ( ! function_exists( 'abedul_fonts_url' ) ) :
/**
 * Register Google fonts for Abedul.
 *
 * @since Abedul 1.0.4
 *
 * @return string Google fonts URL for the theme.
 */
function abedul_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Lato, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Lato font: on or off', 'abedul' ) ) {
		$fonts[] = 'Lato:300italic,400italic,700italic,900italic,300,400,700,900';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Bitter, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Bitter font: on or off', 'abedul' ) ) {
		$fonts[] = 'Bitter:400italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'abedul' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Rochester, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Rochester font: on or off', 'abedul' ) ) {
		$fonts[] = 'Rochester:400';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Delius, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Delius font: on or off', 'abedul' ) ) {
		$fonts[] = 'Delius:400';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Delius Swash Caps, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Delius Swash Caps font: on or off', 'abedul' ) ) {
		$fonts[] = 'Delius Swash Caps:400';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Lobster Two, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Lobster Two font: on or off', 'abedul' ) ) {
		$fonts[] = 'Lobster Two:400';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Source Sans Pro, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Source Sans Pro font: on or off', 'abedul' ) ) {
		$fonts[] = 'Source Sans Pro:400italic,600italic,400,600';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'abedul' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Abedul 1.0.4
 */
function abedul_scripts_and_styles() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'abedul-fonts', abedul_fonts_url(), array(), null );

	// Add Genericons font, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	// Load our main stylesheet.
	wp_enqueue_style( 'abedul-style', get_stylesheet_uri() );

	// Load the JavaScript functions.
	wp_enqueue_script( 'abedul-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150315', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Translate accesibility menues.
	wp_localize_script( 'abedul-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'abedul' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'abedul' ) . '</span>',
	) );
}
add_action( 'wp_enqueue_scripts', 'abedul_scripts_and_styles' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Abedul 1.0.4
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function abedul_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' )  && ! is_active_sidebar( 'sidebar-2') ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'abedul_body_classes' );

/**
 * Adds custom classes to the array of post classes.
 *
 * @since Abedul 1.0.4
 *
 * @param array $classes Classes for the post element.
 * @return array (Maybe) filtered post classes.
 */
function abedul_post_classes( $classes ) {
	// Adds a class of post-format to post with special formats (chat, aside, etc).
	if ( get_post_format() ) {
		$classes[] = 'post-format';
	}

	return $classes;
}
add_filter( 'post_class', 'abedul_post_classes' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/custom-header.php';

