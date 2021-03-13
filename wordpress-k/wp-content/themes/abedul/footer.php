<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #container div elements.
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */
?>

</main><!-- #main -->

<?php get_sidebar('footer'); ?>

<footer id="page-footer" role="contentinfo">
    <div class="inner">
        <div id="site-info">
        <span class="footer-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
        <a href="<?php echo esc_url('https://wordpress.org/' ); ?>"><?php printf( __( 'Proudly powered by', 'abedul' ).' %s', 'WordPress' ); ?></a>
        </div><!--/site-info-->
        
        <?php if (has_nav_menu('social')): ?>
            <nav id="social" class="site-navigation social-navigation" role="navigation" aria-label='<?php _e( 'Social Menu ', 'abedul' ); ?>' >
                <?php wp_nav_menu( array(
                                'theme_location' => 'social',
                                'container' => 'false',
                                'menu_id' => 'social-menu',
                                'link_before'    => '<span class="screen-reader-text">',
                                'link_after'     => '</span>', )); ?>
            </nav> <!--/social--> 
        <?php endif ?>
        
    </div> <!--/inner-->
</footer> <!--/footer-->

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>

