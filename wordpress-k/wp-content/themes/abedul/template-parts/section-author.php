<?php
/**
 * The template for displaying all the authors.
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */

$abedul_theme_options = abedul_get_options( 'abedul_theme_options' );
$contributors_slug = $abedul_theme_options['contributors_slug'];

$contributors_query = new WP_Query( array( 'pagename' => $contributors_slug) );

if ( $contributors_query->post ):
	printf( '<h2><a href="%1$s">%2$s</a></h2>', esc_url(get_permalink($contributors_query->post->ID) ), $contributors_query->post->post_title);
endif;
?>

<section class="author-section">
	<?php		
		$authors = get_users();

		foreach ($authors as $key => $value):
			$author_ID = $authors[$key]->ID;
			$author_data = get_userdata($author_ID);
			$author_post_count = count_user_posts($author_ID); 

			// Here starts the query work.		
			$is_sticky = get_option('sticky_posts');
			$args = array(	'author' => $author_ID,
							'posts_per_page' => 2,
							'ignore_sticky_posts' => false,
							'post__not_in' => $is_sticky,
							'tax_query' => array(
								array(	'taxonomy' => 'post_format',
										'field' => 'slug',
										'terms' => array(	'post-format-quote',
															'post-format-aside',
															'post-format-status',
															'post-format-chat',
															'post-format-link',),
										'operator' => 'NOT IN',
								), ), );

			$query = new WP_Query($args);

			if ($query->have_posts()):?>

	<div class="contributor">
		<div class="avatar-container">

		<?php
			if  (get_avatar($author_data->user_email)):
				echo get_avatar($author_data->user_email, 60);
			endif;
		?>
		</div><!--/avatar-container--> 
		<div class="contributor-content">

	<?php 	printf( '<span class="entry-author"><a href="%1$s" rel="author">%2$s</a></span>', //esto deberia ser un h2
					esc_url( get_author_posts_url( $author_ID  ) ),
					$author_data->display_name); 			

				while ($query -> have_posts()) : $query -> the_post();					
					the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); //y esto un h3.				
				endwhile;
				wp_reset_postdata();			

			printf( '<div class="link_btn"><a href="%1$s" rel="author">%2$s</a></div>',
					esc_url( get_author_posts_url( $author_ID  ) ),
					__('All articles', 'abedul'));
		?>
		
		</div><!--/contributor-content--> 
	</div><!--/contributor-->   
	<?php 
			endif;
		endforeach; ?>

</section><!--/author-section-->   
	
