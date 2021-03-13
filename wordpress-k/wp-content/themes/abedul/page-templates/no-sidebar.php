<?php
/**
 * Template Name: No Sidebar, Left
 *
 * Description: A page template without sidebar, left aligned.
 *
 * @package Abedul
 * @since Abedul 1.0.7
 */

get_header(); ?>

<div class="inner">
	<div id="main-content" class="main-content">
	<?php
		while ( have_posts() ) : the_post(); 
			get_template_part( 'template-parts/content', 'page' ); 
		endwhile; // end of the loop. ?>

	</div><!--/main-content-->        
</div><!--/inner-->

<?php get_footer();