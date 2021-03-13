<?php
/**
 * The template for displaying posts by category
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */

	$categories = get_categories();


	foreach ($categories as $key => $value) {
		$all_IDs[] = $categories[$key]->cat_ID;
		$post_count[]= $categories[$key]->count;
		}

	array_multisort($post_count, SORT_DESC, $categories);

	if ( $categories ):
		printf( '<h2>%1$s</h2>', __('Sections', 'abedul') );
	endif; ?>

	<section class="category-small-section">

	<?php

	foreach ($categories as $key => $value): ?>
	
	<div class="small-section">
	<?php
		$cat_ID = $categories[$key]->cat_ID;
		$post_count = $categories[$key]->count;
		$args = array('cat' => $cat_ID, 'posts_per_page' => 3,'ignore_sticky_posts' => false, );
		$query = new WP_Query($args);
		if ($query->have_posts()): 
			printf('<h3><a href="%1$s">%2$s</a></h3>', esc_url( get_category_link($cat_ID) ), $categories[$key]->name);
			while ($query->have_posts()): $query->the_post();
				if (get_the_title()):							
					the_title(sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' );							
				endif;
			endwhile;
			wp_reset_postdata();
		endif;?>
	
	</div><!-- -->

	<?php endforeach ?>

</section><!--category-small-section-->


