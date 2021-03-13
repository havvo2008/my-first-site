<?php
/**
 * Template Name: Full Width, No Sidebar
 *
 * Description: A page without sidebars, full width.
 *
 * @package Abedul
 * @since Abedul 1.0.7
 */

get_header(); ?>

<div class="inner">
    <div id="main-content-full" class="main-content-full">
    <?php
        while ( have_posts() ) : the_post(); 
            get_template_part( 'template-parts/content', 'page' ); 
        endwhile; // end of the loop. ?>

    </div><!--/main-content-->        
</div><!--/inner-->

<?php get_footer();