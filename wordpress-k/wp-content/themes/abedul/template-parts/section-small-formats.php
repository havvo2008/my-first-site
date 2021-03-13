<?php
/**
 * The template for displaying the posts with small formats (aside, link, quote and status).
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */
?>

<section class="small-formats-section">

    <?php

    $is_sticky = get_option('sticky_posts');

    $args = array(  'posts_per_page' => 6 ,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'post_format',
                            'field' => 'slug',
                            'terms' => array(
                                'post-format-aside',
                                'post-format-quote',
                                'post-format-link',
                                'post-format-status',
                                ),
                            'operator' => 'IN',
                            ),
                        ),
                    );
    $query = new WP_Query($args);

        if ( $query->have_posts() ) :?>
            <h2><?php printf( __('Formatted things', 'abedul') ) ?></h2>
            
            <div class="flex-container small-formatted-posts">
            <?php
                // Start the Loop again.
                while ( $query->have_posts() ) : $query->the_post();
                    /*
                    * Include the post format-specific template for the content. If you want to
                    * use this in a child theme, then include a file called called content-___.php
                    * (where ___ is the post format) and that will be used instead.
                    */
                    get_template_part( 'template-parts/content', get_post_format() );

                endwhile;
                wp_reset_postdata();
            ?>
            </div> 
            <?php
            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'abedul' ),
                'next_text'          => __( 'Next page', 'abedul' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'abedul' ) . ' </span>',
            ) );

        else :
        // If no content, include the "No posts found" template.
            get_template_part( 'template-parts/content', 'none' );

        endif;
    ?>

</section><!--/latest-posts-section-->

