<?php
/**
* The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */

// $abedul_theme_options = abedul_get_options( 'abedul_theme_options' );
get_header(); ?>

<div class="inner">
    <div id="main-content" class="main-content">
<?php if ( have_posts() ) : ?>     

        <header class="archive-header">
            <h1 class="archive-title"><?php printf( __( 'All articles in', 'abedul' ).' %s', single_cat_title('', false)  ); ?></h1>
            <?php
            // Show an optional term description.
            $term_description = term_description();
            if ( ! empty( $term_description ) ) :
                printf( '<div class="taxonomy-description">%s</div>', $term_description );
            endif; ?>
        </header><!-- .archive-header -->

        <div class="flex-container">
        <?php
        $category_name = $wp_query->query['category_name'];
        $is_sticky = get_option('sticky_posts');
        $terms = array('post-format-aside',
            'post-format-image',
            'post-format-video',
            'post-format-quote',
            'post-format-link',
            'post-format-gallery',
            'post-format-status',
            'post-format-audio',
            'post-format-chat',
            );         

        $args_featured = array( 'category_name' => $category_name,
                        'posts_per_page' => -1,
                        'post__in'  => $is_sticky,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'post_format',
                                'field' => 'slug',
                                'terms' => $terms,
                                'operator' => 'NOT IN',
                                ),
                            ),
                        );

        $args_standard = array( 'category_name' => $category_name ,
                        'posts_per_page' => -1 ,
                        'post__not_in'  => $is_sticky,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'post_format',
                                'field' => 'slug',
                                'terms' => $terms,
                                'operator' => 'NOT IN',
                                ),
                            ),
                        );

        $args_formatted = array(  'category_name' => $category_name ,
                                'posts_per_page' => -1 ,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'post_format',
                                        'field' => 'slug',
                                        'terms' => $terms,
                                        'operator' => 'IN',
                                        ),
                                    ),
                                );

        $query_featured = new WP_Query($args_featured);
        $query_standard = new WP_Query($args_standard);
        $query_formatted = new WP_Query($args_formatted);

        // Start the first Loop.

            if ($query_featured->have_posts()):
                while ( $query_featured->have_posts() ) : $query_featured->the_post();
                /*
                 * Include the post format-specific template for the content. If you want to
                 * use this in a child theme, then include a file called called content-___.php
                 * (where ___ is the post format) and that will be used instead.
                 */
                    get_template_part('template-parts/content', 'featured-article-tag');
                endwhile;
                 wp_reset_postdata();
            endif;?>
        </div><!--/flex-container-->

<?php       if ($query_standard->have_posts()): ?>
        <div class="flex-container">
                <?php
                while ( $query_standard->have_posts() ) : $query_standard->the_post();
                /*
                 * Include the post format-specific template for the content. If you want to
                 * use this in a child theme, then include a file called called content-___.php
                 * (where ___ is the post format) and that will be used instead.
                 */
                    get_template_part('template-parts/content', 'article-2');
                endwhile;
                 wp_reset_postdata(); ?>
        </div><!--/flex-container-->
<?php       endif;?>  

<?php       if ($query_formatted->have_posts()): ?>
        <div class="flex-container small-formatted-posts">
                <?php
                while ( $query_formatted->have_posts() ) : $query_formatted->the_post();
                /*
                 * Include the post format-specific template for the content. If you want to
                 * use this in a child theme, then include a file called called content-___.php
                 * (where ___ is the post format) and that will be used instead.
                 */
                    get_template_part('template-parts/content', get_post_format());
                endwhile;
                 wp_reset_postdata(); ?>
        </div><!--/flex-container-->
<?php       endif;?>            

<?php   else :
            // If no content, include the "No posts found" template.
            get_template_part( 'template-parts/content', 'none' ); 


endif; ?>
        
    </div><!--/main-content-->

    <?php get_sidebar('sidebar'); ?>  
   

</div><!--/inner-->

<?php get_footer(); ?>


