<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2017, Astra
 * @link        http://wpastra.com/
 * @since       Astra 1.0.0
 */

add_action( 'wp_head', 'astra_pingback_header' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function astra_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}

/**
 * Schema for <body> tag.
 */
if ( ! function_exists( 'astra_schema_body' ) ) :

	/**
	 * Adds schema tags to the body classes.
	 *
	 * @since 1.0.0
	 */
	function astra_schema_body() {

		// Check conditions.
		$is_blog = ( is_home() || is_archive() || is_attachment() || is_tax() || is_single() ) ? true : false;

		// Set up default itemtype.
		$itemtype = 'WebPage';

		// Get itemtype for the blog.
		$itemtype = ( $is_blog ) ? 'Blog' : $itemtype;

		// Get itemtype for search results.
		$itemtype = ( is_search() ) ? 'SearchResultsPage' : $itemtype;
		// Get the result.
		$result = apply_filters( 'astra_schema_body_itemtype', $itemtype );

		// Return our HTML.
		echo apply_filters( 'astra_schema_body', "itemtype='http://schema.org/" . esc_html( $result ) . "' itemscope='itemscope'" );
	}
endif;

/**
 * Adds custom classes to the array of body classes.
 */
if ( ! function_exists( 'astra_body_classes' ) ) {

	/**
	 * Adds custom classes to the array of body classes.
	 *
	 * @since 1.0.0
	 * @param array $classes Classes for the body element.
	 * @return array
	 */
	function astra_body_classes( $classes ) {

		if ( wp_is_mobile() ) {
			$classes[] = 'ast-header-break-point';
		}

		// Apply separate container class to the body.
		$content_layout = astra_get_content_layout();
		if ( 'content-boxed-container' == $content_layout ) {
			$classes[] = 'ast-separate-container';
		} elseif ( 'boxed-container' == $content_layout ) {
			$classes[] = 'ast-separate-container ast-two-container';
		} elseif ( 'page-builder' == $content_layout ) {
			$classes[] = 'ast-page-builder-template';
		} elseif ( 'plain-container' == $content_layout ) {
			$classes[] = 'ast-plain-container';
		}
		// Sidebar location.
		$page_layout = 'ast-' . astra_page_layout();
		$classes[]   = esc_attr( $page_layout );

		// Current Astra verion.
		$classes[] = esc_attr( 'astra-' . ASTRA_THEME_VERSION );

		return $classes;
	}
}// End if().

add_filter( 'body_class', 'astra_body_classes' );


/**
 * Astra Pagination
 */
if ( ! function_exists( 'astra_number_pagination' ) ) {

	/**
	 * Astra Pagination
	 *
	 * @since 1.0.0
	 * @return void            Generate & echo pagination markup.
	 */
	function astra_number_pagination() {
		global $numpages;
		$enabled = apply_filters( 'astra_pagination_enabled', true );

		if ( isset( $numpages ) && $enabled ) {
			ob_start();
			echo "<div class='ast-pagination'>";
			the_posts_pagination(
				array(
					'prev_text' => astra_default_strings( 'string-blog-navigation-previous', false ),
					'next_text' => astra_default_strings( 'string-blog-navigation-next', false ),
				)
			);
			echo '</div>';
			$output = ob_get_clean();
			echo apply_filters( 'astra_pagination_markup', $output ); // WPCS: XSS OK.
		}
	}
}// End if().

add_action( 'astra_pagination', 'astra_number_pagination' );

/**
 * Return or echo site logo markup.
 */
if ( ! function_exists( 'astra_logo' ) ) {

	/**
	 * Return or echo site logo markup.
	 *
	 * @since 1.0.0
	 * @param  boolean $echo Echo markup.
	 * @return mixed echo or return markup.
	 */
	function astra_logo( $echo = true ) {

		$site_tagline         = astra_get_option( 'display-site-tagline' );
		$display_site_tagline = astra_get_option( 'display-site-title' );
		$html                 = '';

		$has_custom_logo = apply_filters( 'astra_has_custom_logo', has_custom_logo() );

		// Site logo.
		if ( $has_custom_logo ) {

			if ( apply_filters( 'astra_replace_logo_width', true ) ) {
				add_filter( 'wp_get_attachment_image_src', 'astra_replace_header_logo', 10, 4 );
				add_filter( 'wp_get_attachment_image_attributes', 'astra_replace_header_attr', 10, 3 );
			}

			$html .= '<span class="site-logo-img">';
			$html .= get_custom_logo();
			$html .= '</span>';

			if ( apply_filters( 'astra_replace_logo_width', true ) ) {
				remove_filter( 'wp_get_attachment_image_src', 'astra_replace_header_logo', 10 );
				remove_filter( 'wp_get_attachment_image_attributes', 'astra_replace_header_attr', 10 );
			}
		}

		if ( ! apply_filters( 'astra_disable_site_identity', false ) ) {
			// Site Title.
			if ( $display_site_tagline ) {

				$tag = 'span';
				if ( is_home() || is_front_page() ) {
					$tag = 'h1';
				}
				$html .= '<' . $tag . ' itemprop="name" class="site-title"> <a href="' . esc_url( home_url( '/' ) ) . '" itemprop="url" rel="home">' . get_bloginfo( 'name' ) . '</a> </' . $tag . '>';
			}

			// Site description.
			if ( $site_tagline ) {
				$html .= '<p class="site-description" itemprop="description">' . get_bloginfo( 'description' ) . '</p>';
			}
		}
		$html = apply_filters( 'astra_logo', $html, $display_site_tagline, $site_tagline );

		/**
		 * Echo or Return the Logo Markup
		 */
		if ( $echo ) {
			echo $html;
		} else {
			return $html;
		}
	}
}// End if().

/**
 * Return the selected sections
 */
if ( ! function_exists( 'astra_get_dynamic_header_content' ) ) {

	/**
	 * Return the selected sections
	 *
	 * @since 1.0.0
	 * @param  string $option Custom content type. E.g. search, text-html etc.
	 * @return array         Array of Custom contents.
	 */
	function astra_get_dynamic_header_content( $option ) {

		$output  = array();
		$section = astra_get_option( $option );

		switch ( $section ) {

			case 'search':
					$output[] = astra_get_search( $option );
				break;

			case 'text-html':
					$output[] = astra_get_custom_html( $option . '-html' );
				break;

			case 'widget':
					$output[] = astra_get_custom_widget( $option );
				break;
		}

		return $output;
	}
}

/**
 * Adding Wrapper for Search Form.
 */
if ( ! function_exists( 'astra_get_search' ) ) {

	/**
	 * Adding Wrapper for Search Form.
	 *
	 * @since 1.0.0
	 * @param  string $option   Search Option name.
	 * @return mixed Search HTML structure created.
	 */
	function astra_get_search( $option = '' ) {

		$search_html  = '<div class="ast-search-icon"><a class="slide-search astra-search-icon" href="#"><span class="screen-reader-text">' . esc_html__( 'Search', 'astra' ) . '</span></a></div>
						<div class="ast-search-menu-icon slide-search" id="ast-search-form" >';
		$search_html .= get_search_form( false );
		$search_html .= '</div>';

		return apply_filters( 'astra_get_search', $search_html, $option );
	}
}

/**
 * Get custom HTML added by user.
 */
if ( ! function_exists( 'astra_get_custom_html' ) ) {

	/**
	 * Get custom HTML added by user.
	 *
	 * @since 1.0.0
	 * @param  string $option_name Option name.
	 * @return String TEXT/HTML added by user in options panel.
	 */
	function astra_get_custom_html( $option_name = '' ) {

		$custom_html         = '';
		$custom_html_content = astra_get_option( $option_name );

		if ( ! empty( $custom_html_content ) ) {
			$custom_html = '<div class="ast-custom-html">' . do_shortcode( $custom_html_content ) . '</div>';
		} elseif ( current_user_can( 'edit_theme_options' ) ) {
			$custom_html = '<a href="' . esc_url( admin_url( 'customize.php?autofocus[control]=' . ASTRA_THEME_SETTINGS . '[' . $option_name . ']' ) ) . '">' . __( 'Add Custom HTML', 'astra' ) . '</a>';
		}

		return $custom_html;
	}
}

/**
 * Get Widget added by user.
 */
if ( ! function_exists( 'astra_get_custom_widget' ) ) {

	/**
	 * Get custom widget added by user.
	 *
	 * @since  1.0.1.1
	 * @param  string $option_name Option name.
	 * @return Widget added by user in options panel.
	 */
	function astra_get_custom_widget( $option_name = '' ) {

		ob_start();

		if ( 'header-main-rt-section' == $option_name ) {
			$widget_id = 'header-widget';
		}
		if ( 'footer-sml-section-1' == $option_name ) {
			$widget_id = 'footer-widget-1';
		} elseif ( 'footer-sml-section-2' == $option_name ) {
			$widget_id = 'footer-widget-2';
		}

		echo '<div class="ast-' . esc_attr( $widget_id ) . '-area">';
				astra_get_sidebar( $widget_id );
		echo '</div>';

		return ob_get_clean();
	}
}

/**
 * Function to get Small Left/Right Footer
 */
if ( ! function_exists( 'astra_get_small_footer' ) ) {

	/**
	 * Function to get Small Left/Right Footer
	 *
	 * @since 1.0.0
	 * @param string $section   Sections of Small Footer.
	 * @return mixed            Markup of sections.
	 */
	function astra_get_small_footer( $section = '' ) {

		$small_footer_type = astra_get_option( $section );
		$output            = null;

		switch ( $small_footer_type ) {
			case 'menu':
					$output = astra_get_small_footer_menu();
				break;

			case 'custom':
					$output = astra_get_small_footer_custom_text( $section . '-credit' );
				break;

			case 'widget':
					$output = astra_get_custom_widget( $section );
				break;
		}

		return $output;
	}
}// End if().

/**
 * Function to get Small Footer Custom Text
 */
if ( ! function_exists( 'astra_get_small_footer_custom_text' ) ) {

	/**
	 * Function to get Small Footer Custom Text
	 *
	 * @since 1.0.14
	 * @param string $option Custom text option name.
	 * @return mixed         Markup of custom text option.
	 */
	function astra_get_small_footer_custom_text( $option = '' ) {

		$output = $option;

		if ( '' != $option ) {
			$output = astra_get_option( $option );
			$output = str_replace( '[current_year]', date_i18n( __( 'Y', 'astra' ) ), $output );
			$output = str_replace( '[site_title]', '<span class="ast-footer-site-title">' . get_bloginfo( 'name' ) . '</span>', $output );

			$theme_author = apply_filters(
				'astra_theme_author', array(
					'theme_name'       => __( 'Astra', 'astra' ),
					'theme_author_url' => 'http://wpastra.com/',
				)
			);

			$output = str_replace( '[theme_author]', '<a href="' . esc_url( $theme_author['theme_author_url'] ) . '">' . $theme_author['theme_name'] . '</a>', $output );
		}

		return $output;
	}
}// End if().

/**
 * Function to get Footer Menu
 */
if ( ! function_exists( 'astra_get_small_footer_menu' ) ) {

	/**
	 * Function to get Footer Menu
	 *
	 * @since 1.0.0
	 * @return html
	 */
	function astra_get_small_footer_menu() {

		ob_start(); ?>

		<div class="footer-primary-navigation">
			<?php
			if ( has_nav_menu( 'footer_menu' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'footer_menu',
						'menu_class'     => 'nav-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'          => 1,
					)
				);
			} else {
				if ( is_user_logged_in() && current_user_can( 'edit_theme_options' ) ) {
					?>
						<a href="<?php echo esc_url( admin_url( '/nav-menus.php?action=locations' ) ); ?>"><?php esc_html_e( 'Assign Footer Menu', 'astra' ); ?></a>
					<?php
				}
			}
			?>
		</div> <!-- .footer-primary-navigation -->
		<?php

		return ob_get_clean();
	}
}// End if().

/**
 * Function to get site Header
 */
if ( ! function_exists( 'astra_header_markup' ) ) {

	/**
	 * Site Header - <header>
	 *
	 * @since 1.0.0
	 */
	function astra_header_markup() {
		?>

		<header itemtype="http://schema.org/WPHeader" itemscope="itemscope" id="masthead" <?php astra_header_classes(); ?> role="banner">

			<?php astra_masthead_top(); ?>

			<?php astra_masthead(); ?>

			<?php astra_masthead_bottom(); ?>

		</header><!-- #masthead -->
		<?php
	}
}

add_action( 'astra_header', 'astra_header_markup' );

/**
 * Function to get site title/logo
 */
if ( ! function_exists( 'astra_site_branding_markup' ) ) {

	/**
	 * Site Title / Logo
	 *
	 * @since 1.0.0
	 */
	function astra_site_branding_markup() {
		?>

		<div class="site-branding">
			<div class="ast-site-identity" itemscope="itemscope" itemtype="http://schema.org/Organization">
				<?php astra_logo(); ?>
			</div>
		</div>
		<!-- .site-branding -->
		<?php
	}
}

add_action( 'astra_masthead_content', 'astra_site_branding_markup', 8 );

/**
 * Function to get Toggle Button Markup
 */
if ( ! function_exists( 'astra_toggle_buttons_markup' ) ) {

	/**
	 * Toggle Button Markup
	 *
	 * @since 1.0.0
	 */
	function astra_toggle_buttons_markup() {
		$disable_primary_navigation = astra_get_option( 'disable-primary-nav' );
		$custom_header_section      = astra_get_option( 'header-main-rt-section' );
		$menu_bottons               = true;
		if ( $disable_primary_navigation && 'none' == $custom_header_section ) {
			$menu_bottons = false;
		}
		if ( apply_filters( 'astra_enable_mobile_menu_buttons', $menu_bottons ) ) {
		?>
		<div class="ast-mobile-menu-buttons">

			<?php astra_masthead_toggle_buttons_before(); ?>

			<?php astra_masthead_toggle_buttons(); ?>

			<?php astra_masthead_toggle_buttons_after(); ?>

		</div>
		<?php
		}
	}
}// End if().

add_action( 'astra_masthead_content', 'astra_toggle_buttons_markup', 9 );

/**
 * Function to get Primary navigation menu
 */
if ( ! function_exists( 'astra_primary_navigation_markup' ) ) {

	/**
	 * Site Title / Logo
	 *
	 * @since 1.0.0
	 */
	function astra_primary_navigation_markup() {

		$disable_primary_navigation = astra_get_option( 'disable-primary-nav' );
		$custom_header_section      = astra_get_option( 'header-main-rt-section' );

		if ( $disable_primary_navigation ) {
			if ( 'none' != $custom_header_section ) {
				echo '<div class="main-header-bar-navigation ast-header-custom-item ast-flex ast-justify-content-flex-end">';
				echo astra_masthead_get_menu_items();
				echo '</div>';
			}
		} else {

			$submenu_class = apply_filters( 'primary_submenu_border_class', ' submenu-with-border' );

			// Primary Menu.
			$primary_menu_args = array(
				'theme_location'  => 'primary',
				'menu_id'         => 'primary-menu',
				'menu_class'      => 'main-header-menu ast-flex ast-justify-content-flex-end' . $submenu_class,
				'container'       => 'div',
				'container_class' => 'main-navigation',
			);

			// Fallback Menu if primary menu not set.
			$fallback_menu_args = array(
				'theme_location' => 'primary',
				'menu_id'        => 'primary-menu',
				'menu_class'     => 'main-navigation',
				'container'      => 'div',

				'before'         => '<ul class="main-header-menu ast-flex ast-justify-content-flex-end' . $submenu_class . '">',
				'after'          => '</ul>',
			);
			?>

			<div class="main-header-bar-navigation" >

				<nav itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope" id="site-navigation" class="ast-flex-grow-1" role="navigation" aria-label="<?php esc_attr_e( 'Site Navigation', 'astra' ); ?>">
					<?php
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( $primary_menu_args );
					} else {
						wp_page_menu( $fallback_menu_args );
					}
					?>
				</nav><!-- #site-navigation -->

			</div>
			<?php
		}// End if().

	}
}// End if().

add_action( 'astra_masthead_content', 'astra_primary_navigation_markup', 10 );

/**
 * Function to get site Footer
 */
if ( ! function_exists( 'astra_footer_markup' ) ) {

	/**
	 * Site Footer - <footer>
	 *
	 * @since 1.0.0
	 */
	function astra_footer_markup() {
		?>

		<footer itemtype="http://schema.org/WPFooter" itemscope="itemscope" id="colophon" <?php astra_footer_classes(); ?> role="contentinfo">

			<?php astra_footer_content_top(); ?>

			<?php astra_footer_content(); ?>

			<?php astra_footer_content_bottom(); ?>

		</footer><!-- #colophon -->
		<?php
	}
}

add_action( 'astra_footer', 'astra_footer_markup' );

/**
 * Function to get Header Breakpoint
 */
if ( ! function_exists( 'astra_header_break_point' ) ) {

	/**
	 * Function to get Header Breakpoint
	 *
	 * @since 1.0.0
	 * @return number
	 */
	function astra_header_break_point() {
		$break_point = apply_filters( 'astra_header_break_point', 921 );
		return absint( $break_point );
	}
}

/**
 * Function to get Body Font Family
 */
if ( ! function_exists( 'astra_body_font_family' ) ) {

	/**
	 * Function to get Body Font Family
	 *
	 * @since 1.0.0
	 * @return string
	 */
	function astra_body_font_family() {

		$font_family = astra_get_option( 'body-font-family' );

		// Body Font Family.
		if ( 'inherit' == $font_family ) {
			$font_family = '-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif';
		}

		return $font_family;
	}
}

/**
 * Function to get Edit Post Link
 */
if ( ! function_exists( 'astra_edit_post_link' ) ) {

	/**
	 * Function to get Edit Post Link
	 *
	 * @since 1.0.0
	 * @param string $text      Anchor Text.
	 * @param string $before    Anchor Text.
	 * @param string $after     Anchor Text.
	 * @param int    $id           Anchor Text.
	 * @param string $class     Anchor Text.
	 * @return void
	 */
	function astra_edit_post_link( $text, $before = '', $after = '', $id = 0, $class = 'post-edit-link' ) {

		if ( apply_filters( 'astra_edit_post_link', false ) ) {
			edit_post_link( $text, $before, $after, $id, $class );
		}
	}
}

/**
 * Function to get Header Classes
 */
if ( ! function_exists( 'astra_header_classes' ) ) {

	/**
	 * Function to get Header Classes
	 *
	 * @since 1.0.0
	 */
	function astra_header_classes() {

		$classes                 = array( 'site-header' );
		$menu_logo_location      = astra_get_option( 'header-layouts' );
		$mobile_header_alignment = astra_get_option( 'header-main-menu-align' );
		if ( $menu_logo_location ) {
			$classes[] = $menu_logo_location;
		}

		$classes[] = 'ast-mobile-header-' . $mobile_header_alignment;

		$classes = array_unique( apply_filters( 'astra_header_class', $classes ) );

		$classes = array_map( 'sanitize_html_class', $classes );

		echo 'class="' . esc_attr( join( ' ', $classes ) ) . '"';
	}
}

/**
 * Function to get Footer Classes
 */
if ( ! function_exists( 'astra_footer_classes' ) ) {

	/**
	 * Function to get Footer Classes
	 *
	 * @since 1.0.0
	 */
	function astra_footer_classes() {

		$classes = array_unique( apply_filters( 'astra_footer_class', array( 'site-footer' ) ) );

		$classes = array_map( 'sanitize_html_class', $classes );

		echo 'class="' . esc_attr( join( ' ', $classes ) ) . '"';
	}
}

/**
 * Function to Add Header Breakpoint Style
 */
if ( ! function_exists( 'astra_header_breakpoint_style' ) ) {

	/**
	 * Function to Add Header Breakpoint Style
	 *
	 * @since 1.0.0
	 */
	function astra_header_breakpoint_style() {

		// Header Break Point.
		$header_break_point = astra_header_break_point();

		ob_start();
		?>
		.main-header-bar-wrap {
			content: "<?php echo esc_html( $header_break_point ); ?>";
		}

		@media all and ( min-width: <?php echo esc_html( $header_break_point ); ?>px ) {
			.main-header-bar-wrap {
				content: "";
			}
		}
		<?php

		$astra_header_width = astra_get_option( 'header-main-layout-width' );

		/* Width for Header */
		if ( 'content' != $astra_header_width ) {
			$genral_global_responsive = array(
				'#masthead .ast-container' => array(
					'max-width'     => '100%',
					'padding-left'  => '35px',
					'padding-right' => '35px',
				),
			);

			/* Parse CSS from array()*/
			echo astra_parse_css( $genral_global_responsive, $header_break_point );
		}

		$dynamic_css = ob_get_clean();

		// trim white space for faster page loading.
		$dynamic_css = Astra_Enqueue_Scripts::trim_css( $dynamic_css );

		wp_add_inline_style( 'astra-theme-css', $dynamic_css );
	}
}// End if().
add_action( 'wp_enqueue_scripts', 'astra_header_breakpoint_style' );

/**
 * Function to filter comment form's default fields
 */
if ( ! function_exists( 'astra_comment_form_default_fields_markup' ) ) {

	/**
	 * Function filter comment form's default fields
	 *
	 * @since 1.0.0
	 * @param array $fields Array of comment form's default fields.
	 * @return array        Comment form fields.
	 */
	function astra_comment_form_default_fields_markup( $fields ) {

		$commenter = wp_get_current_commenter();
		$req       = get_option( 'require_name_email' );
		$aria_req  = ( $req ? " aria-required='true'" : '' );

		$fields['author'] = '<div class="ast-comment-formwrap ast-row"><p class="comment-form-author ast-col-xs-12 ast-col-sm-12 ast-col-md-4 ast-col-lg-4">' .
					'<label for="author" class="screen-reader-text">' . esc_html( astra_default_strings( 'string-comment-label-name', false ) ) . '</label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
					'" placeholder="' . esc_attr( astra_default_strings( 'string-comment-label-name', false ) ) . '" size="30"' . $aria_req . ' /></p>';
		$fields['email']  = '<p class="comment-form-email ast-col-xs-12 ast-col-sm-12 ast-col-md-4 ast-col-lg-4">' .
					'<label for="email" class="screen-reader-text">' . esc_html( astra_default_strings( 'string-comment-label-email', false ) ) . '</label><input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) .
					'" placeholder="' . esc_attr( astra_default_strings( 'string-comment-label-email', false ) ) . '" size="30"' . $aria_req . ' /></p>';
		$fields['url']    = '<p class="comment-form-url ast-col-xs-12 ast-col-sm-12 ast-col-md-4 ast-col-lg-4"><label for="url">' .
					'<label for="url" class="screen-reader-text">' . esc_html( astra_default_strings( 'string-comment-label-website', false ) ) . '</label><input id="url" name="url" type="text" value="' . esc_url( $commenter['comment_author_url'] ) .
					'" placeholder="' . esc_attr( astra_default_strings( 'string-comment-label-website', false ) ) . '" size="30" /></label></p></div>';
		return $fields;
	}
}
add_filter( 'comment_form_default_fields', 'astra_comment_form_default_fields_markup' );

/**
 * Function to filter comment form arguments
 */
if ( ! function_exists( 'astra_comment_form_default_markup' ) ) {

	/**
	 * Function filter comment form arguments
	 *
	 * @since 1.0.0
	 * @param array $args   Comment form arguments.
	 * @return array
	 */
	function astra_comment_form_default_markup( $args ) {

		$args['id_form']           = 'ast-commentform';
		$args['title_reply']       = astra_default_strings( 'string-comment-title-reply', false );
		$args['cancel_reply_link'] = astra_default_strings( 'string-comment-cancel-reply-link', false );
		$args['label_submit']      = astra_default_strings( 'string-comment-label-submit', false );
		$args['comment_field']     = '<div class="ast-row comment-textarea"><fieldset class="comment-form-comment"><div class="comment-form-textarea ast-col-lg-12"><label for="comment" class="screen-reader-text">' . esc_html( astra_default_strings( 'string-comment-label-message', false ) ) . '</label><textarea id="comment" name="comment" placeholder="' . esc_attr( astra_default_strings( 'string-comment-label-message', false ) ) . '" cols="45" rows="8" aria-required="true"></textarea></div></fieldset></div>';
		return $args;
	}
}
add_filter( 'comment_form_defaults', 'astra_comment_form_default_markup' );


/**
 * Function to filter comment form arguments
 */
if ( ! function_exists( 'astra_404_page_layout' ) ) {

	/**
	 * Function filter comment form arguments
	 *
	 * @since 1.0.0
	 * @param array $layout     Comment form arguments.
	 * @return array
	 */
	function astra_404_page_layout( $layout ) {

		if ( is_404() ) {
			$layout = 'no-sidebar';
		}
		return $layout;
	}
}
add_filter( 'astra_page_layout', 'astra_404_page_layout', 10, 1 );

/**
 * Return current content layout
 */
if ( ! function_exists( 'astra_get_content_layout' ) ) {

	/**
	 * Return current content layout
	 *
	 * @since 1.0.0
	 * @return boolean  content layout.
	 */
	function astra_get_content_layout() {

		$value = false;

		if ( is_singular() ) {

			// If post meta value is empty,
			// Then get the POST_TYPE content layout.
			$content_layout = astra_get_option_meta( 'site-content-layout', '', true );

			if ( empty( $content_layout ) ) {

				$content_layout = astra_get_option( 'single-' . get_post_type() . '-content-layout' );

				if ( 'default' == $content_layout || empty( $content_layout ) ) {

					// Get the GLOBAL content layout value.
					// NOTE: Here not used `true` in the below function call.
					$content_layout = astra_get_option( 'site-content-layout', 'full-width' );
				}
			}
		} else {

			$content_layout = astra_get_option( 'archive-' . get_post_type() . '-content-layout' );
			if ( is_search() ) {
				$content_layout = astra_get_option( 'archive-post-content-layout' );
			}

			if ( 'default' == $content_layout || empty( $content_layout ) ) {

				// Get the GLOBAL content layout value.
				// NOTE: Here not used `true` in the below function call.
				$content_layout = astra_get_option( 'site-content-layout', 'full-width' );
			}
		}

		return apply_filters( 'astra_get_content_layout', $content_layout );
	}
}// End if().

/**
 * Display Blog Post Excerpt
 */
if ( ! function_exists( 'astra_the_excerpt' ) ) {

	/**
	 * Display Blog Post Excerpt
	 *
	 * @since 1.0.0
	 */
	function astra_the_excerpt() {

		$excerpt_type = astra_get_option( 'blog-post-content' );

		if ( 'full-content' == $excerpt_type ) {
			the_content();
		} else {
			the_excerpt();
		}
	}
}

/**
 * Display Sidebars
 */
if ( ! function_exists( 'astra_get_sidebar' ) ) {
	/**
	 * Get Sidebar
	 *
	 * @since 1.0.1.1
	 * @param  string $sidebar_id   Sidebar Id.
	 * @return void
	 */
	function astra_get_sidebar( $sidebar_id ) {
		if ( is_active_sidebar( $sidebar_id ) ) {
			dynamic_sidebar( $sidebar_id );
		} elseif ( current_user_can( 'edit_theme_options' ) ) {
		?>
			<div class="widget ast-no-widget-row">
				<p class='no-widget-text'>
					<a href='<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>'>
						<?php esc_html_e( 'Add Widget', 'astra' ); ?>
					</a>
				</p>
			</div>
			<?php
		}
	}
}

/**
 * Filter google fonts
 */
if ( ! function_exists( 'astra_google_fonts_callback' ) ) {
	/**
	 * Google Fonts
	 *
	 * @since 1.0.12
	 * @param array $fonts   List of fonts.
	 * @return array
	 */
	function astra_google_fonts_callback( $fonts ) {

		foreach ( $fonts as $font_name => $font_weight ) {

			$is_true         = false;
			$new_font_weight = '';

			switch ( $font_name ) {
				case 'Buda':
				case 'Open Sans Condensed':
						$is_true         = true;
						$new_font_weight = 300;
					break;
				case 'Coda Caption':
						$is_true         = true;
						$new_font_weight = 800;
					break;
				case 'UnifrakturCook':
						$is_true         = true;
						$new_font_weight = 700;
					break;
			}

			if ( $is_true ) {
				if ( in_array( 'normal', $font_weight ) ) {
					$key                         = array_search( 'normal', $font_weight );
					$fonts[ $font_name ][ $key ] = $new_font_weight;
				}
			}
		}
		return $fonts;
	}
}// End if().
add_filter( 'astra_google_fonts', 'astra_google_fonts_callback' );

/**
 * Get Footer widgets
 */
if ( ! function_exists( 'astra_get_footer_widget' ) ) {

	/**
	 * Get Footer Default Sidebar
	 *
	 * @param  string $sidebar_id   Sidebar Id..
	 * @return void
	 */
	function astra_get_footer_widget( $sidebar_id ) {

		if ( is_active_sidebar( $sidebar_id ) ) {
			dynamic_sidebar( $sidebar_id );
		} elseif ( current_user_can( 'edit_theme_options' ) ) {

			global $wp_registered_sidebars;
			$sidebar_name = '';
			if ( isset( $wp_registered_sidebars[ $sidebar_id ] ) ) {
				$sidebar_name = $wp_registered_sidebars[ $sidebar_id ]['name'];
			}
			?>
			<div class="widget ast-no-widget-row">
				<h2 class='widget-title'><?php echo esc_html( $sidebar_name ); ?></h2>

				<p class='no-widget-text'>
					<a href='<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>'>
						<?php esc_html_e( 'Click here to assign a widget for this area.', 'astra' ); ?>
					</a>
				</p>
			</div>
			<?php
		}
	}
}// End if().

/**
 * Astra entry header class.
 */
if ( ! function_exists( 'astra_entry_header_class' ) ) {

	/**
	 * Astra entry header class
	 *
	 * @since 1.0.15
	 */
	function astra_entry_header_class() {

		$post_id          = astra_get_post_id();
		$classes          = array();
		$title_markup     = astra_the_title( '', '', $post_id, false );
		$thumb_markup     = astra_get_post_thumbnail( '', '', false );
		$post_meta_markup = astra_single_get_post_meta( '', '', false );

		if ( empty( $title_markup ) && empty( $thumb_markup ) && ( is_page() || empty( $post_meta_markup ) ) ) {
			$classes[] = 'ast-header-without-markup';
		} else {

			if ( empty( $title_markup ) ) {
				$classes[] = 'ast-no-title';
			}

			if ( empty( $thumb_markup ) ) {
				$classes[] = 'ast-no-thumbnail';
			}

			if ( is_page() || empty( $post_meta_markup ) ) {
				$classes[] = 'ast-no-meta';
			}
		}

		$classes = array_unique( apply_filters( 'astra_entry_header_class', $classes ) );
		$classes = array_map( 'sanitize_html_class', $classes );

		echo esc_attr( join( ' ', $classes ) );
	}
}// End if().

/**
 * Astra get post thumbnail image.
 */
if ( ! function_exists( 'astra_get_post_thumbnail' ) ) {

	/**
	 * Astra get post thumbnail image
	 *
	 * @since 1.0.15
	 * @param string  $before Markup before thumbnail image.
	 * @param string  $after  Markup after thumbnail image.
	 * @param boolean $echo   Output print or return.
	 * @return string|void
	 */
	function astra_get_post_thumbnail( $before = '', $after = '', $echo = true ) {

		$output = '';

		$featured_image    = true;
		$is_featured_image = astra_get_option_meta( 'ast-featured-img' );

		if ( 'disabled' === $is_featured_image ) {
			$featured_image = false;
		}

		$featured_image = apply_filters( 'astra_featured_image_enabled', $featured_image );

		$blog_post_thumb   = astra_get_option( 'blog-post-structure' );
		$single_post_thumb = astra_get_option( 'blog-single-post-structure' );

		if ( ( ( ! is_singular() && in_array( 'image', $blog_post_thumb ) ) || ( is_single() && in_array( 'single-image', $single_post_thumb ) ) || is_page() ) && has_post_thumbnail() ) {

			if ( $featured_image && ( ! ( is_singular() ) || ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) ) ) {

				$post_thumb = get_the_post_thumbnail();

				if ( '' != $post_thumb ) {
					$output .= '<div class="post-thumb">';
					if ( ! is_singular() ) {
						$output .= '<a href="' . esc_url( get_permalink() ) . '" >';
					}
					$output .= $post_thumb;
					if ( ! is_singular() ) {
						$output .= '</a>';
					}
					$output .= '</div>';
				}
			}
		}

		if ( ! is_singular() ) {
			$output = apply_filters( 'astra_blog_post_featured_image_after', $output );
		}

		if ( $echo ) {
			echo $before . $output . $after; // WPCS: XSS OK.
		} else {
			return $before . $output . $after;
		}
	}
}// End if().

/**
 * Function to check if it is Internet Explorer
 */
if ( ! function_exists( 'astra_check_is_ie' ) ) :

	/**
	 * Function to check if it is Internet Explorer.
	 *
	 * @return true | false boolean
	 */
	function astra_check_is_ie() {

		$is_ie = false;

		$ua = htmlentities( $_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8' );
		if ( strpos( $ua, 'Trident/7.0' ) !== false ) {
			$is_ie = true;
		}

		return $is_ie;
	}
endif; // End if().


/**
 * Replace heade logo.
 */
if ( ! function_exists( 'astra_replace_header_logo' ) ) :

	/**
	 * Replace header logo.
	 *
	 * @param array  $image Size.
	 * @param int    $attachment_id Image id.
	 * @param sting  $size Size name.
	 * @param string $icon Icon.
	 *
	 * @return array Size of image
	 */
	function astra_replace_header_logo( $image, $attachment_id, $size, $icon ) {

		$custom_logo_id = get_theme_mod( 'custom_logo' );

		if ( ! is_customize_preview() && $custom_logo_id == $attachment_id && 'full' == $size ) {

			$data = wp_get_attachment_image_src( $attachment_id, 'ast-logo-size' );

			if ( false != $data ) {
				$image = $data;
			}
		}

		return $image;
	}
endif; // End if().

/**
 * Function to check if it is Internet Explorer
 */
if ( ! function_exists( 'astra_replace_header_attr' ) ) :

	/**
	 * Replace header logo.
	 *
	 * @param array  $attr Image.
	 * @param object $attachment Image obj.
	 * @param sting  $size Size name.
	 *
	 * @return array Image attr.
	 */
	function astra_replace_header_attr( $attr, $attachment, $size ) {

		$custom_logo_id = get_theme_mod( 'custom_logo' );
		if ( $custom_logo_id == $attachment->ID ) {

			if ( ! is_customize_preview() ) {
				$attach_data = wp_get_attachment_image_src( $attachment->ID, 'ast-logo-size' );
				if ( isset( $attach_data[0] ) ) {
					$attr['src'] = $attach_data[0];
				}
			}

			$retina_logo = astra_get_option( 'ast-header-retina-logo' );

			$attr['srcset'] = '';

			if ( apply_filters( 'astra_main_header_retina', true ) && '' !== $retina_logo ) {
				$cutom_logo     = wp_get_attachment_image_src( $custom_logo_id, 'full' );
				$cutom_logo_url = $cutom_logo[0];

				if ( astra_check_is_ie() ) {
					// Replace header logo url to retina logo url.
					$attr['src'] = $retina_logo;
				}

				$attr['srcset'] = $cutom_logo_url . ' 1x, ' . $retina_logo . ' 2x';

			}
		}

		return $attr;
	}
endif; // End if().

/**
 * Astra Color Palletes.
 */
if ( ! function_exists( 'astra_color_palette' ) ) :

	/**
	 * Astra Color Palletes.
	 *
	 * @return array Color Palletes.
	 */
	function astra_color_palette() {

		$color_palette = array(
			'#000000',
			'#ffffff',
			'#dd3333',
			'#dd9933',
			'#eeee22',
			'#81d742',
			'#1e73be',
			'#8224e3',
		);

		return apply_filters( 'astra_color_palettes', $color_palette );
	}
endif; // End if().
