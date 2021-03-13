<?php
/**
 * The template for displaying posts by category
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */
?>

<section class="category-section flex-container">
	 <h2><?php //printf(__('Sections', 'abedul')) ?></h2>
	<?php
		$categories= get_categories();
		foreach ($categories as $key => $value): ?>

	<div class="category-column <?php echo esc_attr($categories[$key]->slug); echo ' category-'.esc_attr($key) ?>">
		<?php
			$cat_ID = $categories[$key]->cat_ID;
			// Here starts the query work.		
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
			$args_featured = array(	'cat' => $cat_ID,
							'posts_per_page' => 1,
							'post__in' => $is_sticky,
							'tax_query' => array( array('taxonomy' => 'post_format',
														'field' => 'slug',
														'terms' => $terms,
														'operator' => 'NOT IN',
														), ), );
			$args_standard = array(	'cat' => $cat_ID,
							'posts_per_page' => 3,
							'post__not_in' => $is_sticky,
							'tax_query' => array( array('taxonomy' => 'post_format',
														'field' => 'slug',
														'terms' => $terms,
														'operator' => 'NOT IN',
														), ), );

					$query_featured = new WP_Query( $args_featured );
					$query_standard = new WP_Query( $args_standard );
					
					if ( $query_featured->have_posts() || $query_standard->have_posts() ):
						printf('<h1><a href="%1$s">%2$s</a></h1>', get_category_link($cat_ID), $categories[$key]->name);						
						while ( $query_featured -> have_posts() ) : $query_featured -> the_post();
							get_template_part( 'template-parts/content', 'featured-article-cat');
						endwhile;
						wp_reset_postdata();
					endif;?>
					

	<?php			if ($query_standard->have_posts()):
						while ( $query_standard -> have_posts() ) : $query_standard -> the_post();
							get_template_part( 'template-parts/content', 'article-3');	
						endwhile;
						wp_reset_postdata();
					endif;
				?>
	</div><!--/category-column-->
		<?php endforeach; 
	?>

</section><!--category-section-->


