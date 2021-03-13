<?php
/**
 * The Header of the theme.
 *
 * Displays all of the <head> section and everything up till <main id="main"> (i.e. until the end of the header, opens the #container and the #main div elements)
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
     <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
        <div id="container">
            <header id="masthead" class="site-header" role="banner">
                <a class="screen-reader-text skip-link" href="#main"><?php _e( 'Skip to content', 'abedul' ); ?></a>
                               
                    <div id="site-identity">
                        <?php //$abedul_theme_options = abedul_get_options( 'abedul_theme_options' );?>
                       
                            <?php if ( has_custom_logo() ) { 
                                the_custom_logo();                              
                             } else { ?>
                                <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                    <h1 class="site-title"><?php esc_html( bloginfo( 'name' ) ); ?></h1>
                                    <h2 class="site-description"><?php esc_html( bloginfo( 'description' ) ); ?></h2>
                                </a>
                            <?php } ?>
                                       
                    </div><!--/site-identity-->

                    <?php if (has_nav_menu('primary') || has_nav_menu('secondary') || has_nav_menu('social')): ?>
                        <button id="nav-button" class="menu-toggle"><span class="screen-reader-text"><?php _e( 'Menus', 'abedul' ); ?></span><span id="nav-icon" class="genericon genericon-menu" aria-hidden="true"></span></button>
                    <?php endif ?>

                    <div id="navigation">

                    <?php if (has_nav_menu('secondary')): ?>                
                        <nav id="categories-menu" class="site-navigation secondary-navigation" role="navigation" aria-label='<?php _e( 'Secondary Menu ', 'abedul' ); ?>'>
                            <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container' => 'ul', 'menu_id' => 'secondary-menu', 'depth' => 1 ) ); ?>
                        </nav><!--categories-menu-->                
                    <?php endif ?>

                    <?php if (has_nav_menu('primary')): ?>
                        <nav id="main-menu" class="site-navigation primary-navigation" role="navigation" aria-label='<?php _e( 'Primary Menu ', 'abedul' ); ?>'>
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'ul', 'menu_id' => 'primary-menu'  ) ); ?>
                        </nav><!--main-menu-->
                    <?php endif ?>

                    <?php if (has_nav_menu('social')): ?>                
                        <nav id="social" class="site-navigation social-navigation" role="navigation" aria-label='<?php _e( 'Social Menu ', 'abedul' ); ?>' >
                           <?php wp_nav_menu( array(
                                'theme_location' => 'social',
                                'container' => 'ul',
                                'menu_id' => 'social-menu',
                                'link_before'    => '<span class="screen-reader-text">',
                                'link_after'     => '</span>', )); ?>
                        </nav><!--social-menu-->                
                    <?php endif ?>

                    </div><!--/navigation--> 

                    
               
            </header><!--/header-->
            <main id="main" role="main">

