<?php
/**
 * The template for displaying search results pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */

get_header(); ?>
<div class="inner">
    <div id="main-content" class="main-content">
        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <h2 class="page-title"><?php printf( __( 'Search Results for:', 'abedul' ).' %s', '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h2>
            </header><!-- .page-header -->

            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();

                /**
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */
                get_template_part( 'template-parts/content', 'search' );

            // End the loop.
            endwhile;
            // Previous/next page navigation.
            abedul_blog_navigation();

        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>
    </div><!--/main-content-->
<?php get_sidebar('sidebar'); ?>
</div><!--/inner-->
<?php get_footer(); ?>

