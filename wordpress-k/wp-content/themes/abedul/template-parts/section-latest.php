<?php
/**
 * The template for displaying the latest posts section.
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */


    $is_sticky = get_option('sticky_posts');
    $terms = array(
        'post-format-aside',
        'post-format-image',
        'post-format-video',
        'post-format-quote',
        'post-format-link',
        'post-format-gallery',
        'post-format-status',
        'post-format-audio',
        'post-format-chat',
        ); 

    $args = array(  'posts_per_page' => 3,
                    'post__not_in'  => $is_sticky,
                    'tax_query' => array( array('taxonomy' => 'post_format',
                                                'field' => 'slug',
                                                'terms' => $terms,
                                                'operator' => 'NOT IN',
                                                ),),);

    $query = new WP_Query($args);

        if ( $query->have_posts() ) :?>
            <h2><?php printf(__('Latest News', 'abedul')) ?></h2>
            <section class="latest-section">
            <div class="flex-container standard-posts">
            <?php
            // Start the Loop.
            while ($query->have_posts() ) : $query->the_post();

                if ( ! get_post_format()): 
                    /*
                    * Include the post format-specific template for the content. If you want to
                    * use this in a child theme, then include a file called called content-___.php
                    * (where ___ is the post format) and that will be used instead.
                    */
                    get_template_part( 'template-parts/content', 'article-2' );
                    else:
                    get_template_part( 'template-parts/content', get_post_format() );
                        
                endif;  

            endwhile;
            wp_reset_postdata(); ?>
            </div>

            <?php 
            else :
            // If no content, include the "No posts found" template.
                get_template_part( 'template-parts/content', 'none' );

            endif;
    ?>
    
</section><!--/latest-posts-section-->

