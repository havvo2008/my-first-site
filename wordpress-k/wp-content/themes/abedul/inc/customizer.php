<?php
/**
 * Abedul customization 
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */

/**
 * Implement Customizer additions and adjustments.
 *
 * @since Abedul 1.0.4
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */

function abedul_customize_register ($wp_customize) {

    $wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
    //$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

    $wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.site-title',
        'render_callback' => 'abedul_customize_partial_blogname',
    ) );
    $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
        'selector' => '.site-description',
        'render_callback' => 'abedul_customize_partial_blogdescription',
    ) );

    $blog_navigation_array = array(
        'navigation' => __('Navigation', 'abedul'),
        'pagination' => __('Pagination', 'abedul'),
    );

    $related_posts_array = array(
        'by_tag'        => __('By tag', 'abedul'),
        'by_category'   => __('By category', 'abedul'),
        'no_show'       => __('Do not show', 'abedul'),
        );

/**
* Removes the control for displaying or not the header text and adds the posibility of displaying the site title and tagline separately. 
**/

// ===============================
$wp_customize->remove_control('display_header_text');

//===============================
$wp_customize->add_setting('abedul_theme_options[show_site_title]', array(
    'default'           => 1,
    //'transport'         => 'postMessage',
    'sanitize_callback' => 'absint',
    'capability'        => 'edit_theme_options',
    'type'           => 'option',
));

$wp_customize->add_control( 'show_site_title', array(
    'label'    => __('Display Site Title', 'abedul'),
    'section'  => 'title_tagline',
    'settings' => 'abedul_theme_options[show_site_title]',
    'type' => 'checkbox',
));
//===============================
$wp_customize->add_setting( 'abedul_theme_options[show_site_description]', array(
    'default'        => 1,
    //'transport'         => 'postMessage',
    'sanitize_callback' => 'absint',
    'capability'     => 'edit_theme_options',
    'type'           => 'option',
));

$wp_customize->add_control('show_site_description', array(
    'label'      => __('Display Tagline', 'abedul'),
    'section'    => 'title_tagline',
    'settings'   => 'abedul_theme_options[show_site_description]',
    'type' => 'checkbox',
));

//  ==============================
//  ==     Colors Section       ==
//  ==============================
$wp_customize->add_setting( 'abedul_theme_options[site_description_color]', array(
    'default'        => '#111111',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability'     => 'edit_theme_options',
    'type'           => 'option',
));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'site_description_color', array(
    'label'      => __('Site Description Color', 'abedul'),
    'section'    => 'colors',
    'settings'   => 'abedul_theme_options[site_description_color]',
)));

//  =============================
//  == Front Page Section   ==
//  =============================
$wp_customize->add_setting('abedul_theme_options[show_sidebar]', array(
    'default'           => 1,
    'sanitize_callback' => 'absint',
    'capability'        => 'edit_theme_options',
    'type'           => 'option',
));

$wp_customize->add_control( 'show_sidebar', array(
    'label'    => __('Show the Sidebar in the Front Page.', 'abedul'),
    'description' => __('(It only works is a static page is selected)', 'abedul'),
    'active_callback' => 'abedul_show_sidebar_control',
    'section'  => 'static_front_page',
    'settings' => 'abedul_theme_options[show_sidebar]',
    'type' => 'checkbox',
));

//  =============================
//  == Special Pages Section   ==
//  =============================
$wp_customize->add_section( 'special_pages', array(
    'title'          => __( 'Special Pages', 'abedul' ),
    'description' => __( 'This section saves the slug (i.e. its URL valid name) of the pages made with the special page templates, so they can be used across the theme. Put the pages slug here.', 'abedul'),
) );
//===============================
$wp_customize->add_setting( 'abedul_theme_options[contributors_slug]', array(
    'default'        => 'contributors',
    'sanitize_callback' => 'sanitize_text_field',
    'type'           => 'option',
    'capability'     => 'edit_theme_options',
) );

$wp_customize->add_control( 'contributors_slug', array(
    'label'    => __('Slug of your Contributors Page', 'abedul'),
    'section'  => 'special_pages',
    'settings' => 'abedul_theme_options[contributors_slug]',
));

//===============================
$wp_customize->add_setting( 'abedul_theme_options[featured_articles_slug]', array(
    'default'        => 'featured',
    'sanitize_callback' => 'sanitize_text_field',
    'type'           => 'option',
    'capability'     => 'edit_theme_options',
) );

$wp_customize->add_control( 'featured_articles_slug', array(
    'label'    => __('Slug of your Featured Articles Page', 'abedul'),
    'section'  => 'special_pages',
    'settings' => 'abedul_theme_options[featured_articles_slug]',
));

//  =============================
//  ==   Posts Section    ==
//  ============================= 
$wp_customize->add_section( 'post_settings', array(
    'title'          => __( 'Post Settings', 'abedul' ),
    'description' => __( 'This section adds several options to the posts in single view.', 'abedul'),
) );

//===============================
 $wp_customize->add_setting('abedul_theme_options[show_excerpt]', array(
    'default'           => 1,
    'sanitize_callback' => 'absint',
    'capability'        => 'edit_theme_options',
    'type'           => 'option',
));

$wp_customize->add_control( 'show_excerpt', array(
    'label'    => __('Show the excerpt as the article lead in standard posts.', 'abedul'),
    'section'  => 'post_settings',
    'settings' => 'abedul_theme_options[show_excerpt]',
    'type' => 'checkbox',
));

//===============================
 $wp_customize->add_setting('abedul_theme_options[show_related_posts]', array(
    'default'        => 'by_tag',
    'sanitize_callback' => 'abedul_sanitize_related_posts',
    'capability'     => 'manage_options',
    'type'           => 'option', 
));

$wp_customize->add_control( 'show_related_posts', array(
    'label'   => __('Show related posts by tag or by category','abedul'),
    'section' => 'post_settings',
    'settings' => 'abedul_theme_options[show_related_posts]',
    'type'    => 'radio',
    'choices'    => $related_posts_array,
));

//===============================
 $wp_customize->add_setting('abedul_theme_options[show_author_info]', array(
    'default'           => 1,
    'sanitize_callback' => 'absint',
    'capability'        => 'edit_theme_options',
    'type'           => 'option',
));

$wp_customize->add_control( 'show_author_info', array(
    'label'    => __('Show author information in posts.', 'abedul'),
    'section'  => 'post_settings',
    'settings' => 'abedul_theme_options[show_author_info]',
    'type' => 'checkbox',
));

//  =============================
//  ==   Navigation Section    ==
//  ============================= 
$wp_customize->add_section( 'navigation', array(
    'title'          => __( 'Navigation Settings', 'abedul' ),
    'description' => __( 'This section adds the possibility of choosing between navigation or pagination in multiple view pages.', 'abedul'),
) );

//===============================
 $wp_customize->add_setting('abedul_theme_options[blog_navigation]', array(
    'default'        => 'navigation',
    'sanitize_callback' => 'abedul_sanitize_blog_nav',
    'capability'     => 'edit_theme_options',
    'type'           => 'option', 
));

$wp_customize->add_control( 'blog_navigation', array(
    'label'   => __('Choose your preferred mode of navigating between old and new articles','abedul'),
    'section' => 'navigation',
    'settings' => 'abedul_theme_options[blog_navigation]',
    'type'    => 'radio',
    'choices'    => $blog_navigation_array,
));

}

add_action( 'customize_register', 'abedul_customize_register' );


/**
 * Sanitization for navigation choice
 */
function abedul_sanitize_blog_nav( $value ) {
    $recognized = abedul_blog_nav();
    if ( array_key_exists( $value, $recognized ) ) {
        return $value;
    }
    return apply_filters( 'abedul_blog_nav', current( $recognized ) );
}

function abedul_blog_nav() {
    $default = array(
        'navigation' => 'navigation',
        'pagination' => 'pagination',
    );
    return apply_filters( 'abedul_blog_nav', $default );
}

/**
 * Sanitization for related posts choice
 */
function abedul_sanitize_related_posts( $value ) {
    $recognized = abedul_related_posts();
    if ( array_key_exists( $value, $recognized ) ) {
        return $value;
    }
    return apply_filters( 'abedul_related_posts', current( $recognized ) );
}

function abedul_related_posts() {
    $default = array(
        'no_show' => 'no_show',
        'by_tag' => 'by_tag',
        'by_category' => 'by_category',
    );
    return apply_filters( 'abedul_related_posts', $default );
}


function abedul_get_option_defaults() {
	$defaults = array(
		'show_site_title' => 1,
		'show_site_description' => 1,
        'site_description_color' => '#111111',
        'contributors_slug' => 'contributors',
        'featured_articles_slug' => 'featured',
        'show_sidebar' => 1,
        'show_excerpt' => 1,
        'show_related_posts' => 'by_tag',
        'show_author_info' => 1,
        'blog_navigation' => 'navigation',		
	);
	return apply_filters( 'abedul_get_option_defaults', $defaults );
}

function abedul_get_options() {
    // Options API
    return wp_parse_args( 
        get_option( 'abedul_theme_options', array() ), 
        abedul_get_option_defaults() 
    );
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Abedul 1.0.7
 * @see abedul_customize_register()
 *
 * @return void
 */
function abedul_customize_partial_blogname() {
    bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Abedul 1.0.7
 * @see abedul_customize_register()
 *
 * @return void
 */
function abedul_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

/**
 * Callback function for the show sidebar control.
 */
function abedul_show_sidebar_control() {
    if ( get_option('show_on_front') == 'page') {
        return true;
    }
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function abedul_customize_preview_js() {
    wp_enqueue_script( 'abedul-customize-preview', get_template_directory_uri( '/js/customize-preview.js' ), array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'abedul_customize_preview_js' );


