<?php
/**
 * Template Name: Featured Articles
 *
 * Description: This template shows a list with 4 featured articles.
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */

get_header(); ?>

<div class="inner">
    <div id="main-content" class="main-content">
    	<div class="small-section">
	<?php
		$is_sticky = get_option('sticky_posts');
		$args = array(	'posts_per_page' => 4,
						'post__in'  => $is_sticky,
						'ignore_sticky_posts' => 1,
						);

		$query = new WP_Query($args);

		if ( $query->have_posts()) :
			while ( $query->have_posts() ):
				$query->the_post();
				if (get_post_format()):
					get_template_part( 'template-parts/content', get_post_format() );
				else:
					get_template_part ('template-parts/content', 'featured-article-tag');
				endif;
			endwhile;
			wp_reset_postdata();
		endif;
		?>


		</div><!--/small-section-->   
	</div><!--/main-content-->    
<?php get_sidebar('sidebar'); ?>
</div><!--/inner-->

<?php get_footer(); ?>

