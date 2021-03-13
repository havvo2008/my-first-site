<?php
/**
 * Custom template tags for Abedul
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */

if ( ! function_exists( 'abedul_custom_logo' ) ) :
/**
 * Prints Abedul's custom logo markup.
 *
 * @since Abedul 1.0.4
 *
 */
function abedul_custom_logo() {
	$html = sprintf( '<a href="%1$s" class="custom-logo-link home-link" rel="home" itemprop="url"><img class="custom-logo" src="%2$s" alt="logo"><div class="title-description"><h1 class="site-title">%3$s</h1><h2 class="site-description">%4$s</h2></div></a>',
		esc_url( home_url( '/' ) ),
		esc_attr(wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full') ),
		esc_html( get_bloginfo( 'name') ) ,
		esc_html( get_bloginfo( 'description') ) );

    return $html;
}
endif;
add_filter('get_custom_logo', 'abedul_custom_logo');

if ( ! function_exists( 'abedul_entry_footer' ) ) :
/**
 * Prints the entry footer markup in index/archive pages.
 *
 * @since Abedul 1.0.5
 */
function abedul_entry_footer() { ?>
	<footer class="entry-footer">
		<div class="entry-meta">
		<?php
		
			printf( '<a href="%1$s" rel="bookmark"><span class="screen-reader-text"> %2$s</span><time class="entry-date" datetime="%3$s"><span class="genericon genericon-time" aria-hidden="true"></span>%4$s</time></a>',
			esc_url( get_permalink() ),
			esc_html( get_the_title() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
			);	

			// Translators: used between list items, there is a space after the comma.
			$tag_list = get_the_tag_list( '', __( ', ', 'abedul' ) );
			if ( $tag_list ) {
				echo '<span class="tags-links"><span class="genericon genericon-tag" aria-hidden="true"></span>' . $tag_list . '</span>';
			}

			if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
				<span class="comments-link"><span class="genericon genericon-comment" aria-hidden="true"></span><?php comments_popup_link( '0', '1', '%' ); ?></span>
			<?php endif; ?>
			
		</div><!-- .entry-meta -->
	</footer><!-- .entry-footer -->
<?php }
endif;


if ( ! function_exists( 'abedul_blog_navigation' ) ) :
/**
 * Applies the user's choice for navigation/pagination and changes the default strings in the_posts_navigation() and the_posts_pagination().
 *
 * @since Abedul 1.0.4
 */
function abedul_blog_navigation() {
	$abedul_theme_options = abedul_get_options( 'abedul_theme_options' );
	if ( $abedul_theme_options['blog_navigation'] == 'navigation' ) :
		the_posts_navigation( array(
			'prev_text' => __( 'Older articles', 'abedul' ),
			'next_text' => __( 'Newer articles', 'abedul' ),
			) );
	else:
		the_posts_pagination( array(
			'prev_text'			 => '<span class="screen-reader-text">' . __( 'Previous page', 'abedul' ) . '</span>',
			'next_text'			 => '<span class="screen-reader-text">' . __( 'Next page', 'abedul' ) . '</span>',
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'abedul' ) . ' </span>',
		) );
	endif;
}
endif;


if ( ! function_exists( 'abedul_related_posts_by_tag' ) ) :
/**
 * Retrieves the related posts to an individual post by tag.
 *
 * @since Abedul 1.0.4
 */
function abedul_related_posts_by_tag($post) {
	$orig_post = $post;
    global $post;
    $tags = wp_get_post_tags($post->ID);
     
    if ($tags):
    	$tag_ids = array();
    	foreach ($tags as $tag):
    		$tag_ids[] = $tag->term_id;
    	endforeach;

	    $args = array(
	    	'tag__in' => $tag_ids,
			'post__not_in' => array($post->ID),
			'posts_per_page' => 4, // Number of related posts to display.
			'ignore_sticky_posts' => 1,
			'tax_query' => array(
				array(
					'taxonomy' =>  'post_format',
					'field' => 'slug',
					'terms' => array(
						'post-format-quote',
						'post-format-aside',
						'post-format-status',
						'post-format-chat',
						'post-format-link',
						'post-format-audio',
						),
					'operator' => 'NOT IN',
					),),);

	    $query = new WP_Query( $args );
	    if($query->have_posts()):?>
			<section class="related-posts">
				<h3><?php printf(__('Related articles', 'abedul')); ?></h3>
				<div class="related-thumbs flex-container">
	    <?php
	    	while( $query->have_posts() ): $query->the_post();
				if (has_post_thumbnail() ):
					printf('<div class="related-thumb"><a href="%1$s">%2$s <h4>%3$s</h4></a></div>',
						esc_url( get_permalink() ), get_the_post_thumbnail(), get_the_title() );
				else:
					printf('<div class="related-thumb"><a href="%1$s"><h4>%2$s</h4></a></div>',
						esc_url( get_permalink() ), get_the_title() );
				endif;
	    	endwhile;
	    	 wp_reset_postdata();
	    	 ?>

	    	</div><!-- .related-thumbs .flex-container -->
			</section><!-- .related-posts -->
<?php 	endif; 
    			
	endif; //$tags
    	$post = $orig_post;
}
endif;

if ( ! function_exists( 'abedul_related_posts_by_category' ) ) :
/**
 * Retrieves the related posts to an individual post by category.
 *
 * @since Abedul 1.0.4
 */
function abedul_related_posts_by_category($post) {
	$orig_post = $post;
	global $post;
	$categories = get_the_category($post->ID);

	if ($categories):
		$cat_ids = array();
    	foreach ($categories as $category):
    		$cat_ids[] = $category->term_id;
    	endforeach;

	    $args = array(
	    	'category__in' => $cat_ids,
			'post__not_in' => array($post->ID),
			'posts_per_page' => 2, // Number of related posts to display.
			'ignore_sticky_posts' => 1,
			'tax_query' => array(
				array(
					'taxonomy' =>  'post_format',
					'field' => 'slug',
					'terms' => array(
						'post-format-quote',
						'post-format-aside',
						'post-format-status',
						'post-format-chat',
						'post-format-link',
						'post-format-audio',
						),
					'operator' => 'NOT IN',
					),),);

	    $query = new WP_Query( $args );
	    if($query->have_posts()):?>
			<section class="related-posts">
				<h3><?php printf(__('Related articles', 'abedul')); ?></h3>
<?php 		is_single() ? printf('<div class="related-thumbs flex-container">'): printf('<div class="related-thumbs">');

	    	while( $query->have_posts() ): $query->the_post();
	    		if ( is_single() ):
	    			if (has_post_thumbnail() ):
					printf('<div class="related-thumb"><a href="%1$s">%2$s <h4>%3$s</h4></a></div>',
						esc_url( get_permalink() ), get_the_post_thumbnail(), get_the_title() );
				else:
					printf('<div class="related-thumb"><a href="%1$s"><h4>%2$s</h4></a></div>',
						esc_url( get_permalink() ), get_the_title() );
				endif;
				else:
				if ( get_the_title() ) : printf('<h4><a href= "%1$s"> %2$s</a></h4>', esc_url( get_permalink() ), get_the_title() ); endif;
			endif;
	    	endwhile;
	    	 wp_reset_postdata();
	    	 ?>

	    	</div><!-- .related-thumbs .flex-container -->
			</section><!-- .related-posts -->
<?php 	endif; 
    			
	endif; //$categories
    	$post = $orig_post;
}
endif;


if ( ! function_exists( 'abedul_excerpt_more' ) && ! is_admin() ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ...
 * and a Continue reading link.
 *
 * @since Abedul 1.0.4
 *
 * @param string $more Default Read More excerpt link.
 * @return string Filtered Read More excerpt link.
 */
function abedul_excerpt_more( $more ) {
	if ( ! is_single() ) {
		$link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
			/* Translators: %s: Name of current post */
			sprintf( __( 'More', 'abedul' ).' %s <span class="meta-nav">&rarr;</span>', '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
		);
	return ' &hellip; ' . $link;
	}

	else{
		return '. ';
	}
}
add_filter( 'excerpt_more', 'abedul_excerpt_more' );
endif;

/**
 * Filters the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function abedul_excerpt_length( $length ) {
   return 20;
}
add_filter( 'excerpt_length', 'abedul_excerpt_length', 999 );

/**
 * Filters the edit comment link.
 */
function abedul_edit_comment_link() {
	printf( '<span class="edit-link"><a href="%1$s" class="comment-edit-link"><span class="genericon genericon-edit" aria-hidden="true"></span>%2$s</a></span>',
    	esc_url( get_edit_comment_link() ),
    	esc_html( __('Edit', 'abedul') )
    	);
}
add_filter( 'edit_comment_link', 'abedul_edit_comment_link'  );



