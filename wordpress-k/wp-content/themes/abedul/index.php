<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */

$abedul_theme_options = abedul_get_options( 'abedul_theme_options' );

get_header(); ?>

<div class="inner">
	<div id="main-content" class="main-content">
	<?php
		if ( have_posts() ) :
		// Start the Loop.
			while ( have_posts() ) : the_post();
				/*
				* Include the post format-specific template for the content. If you want to
				* use this in a child theme, then include a file called called content-___.php
				* (where ___ is the post format) and that will be used instead.
				*/
				if (is_sticky()) {
					if (get_post_format()) {
						get_template_part( 'template-parts/content', get_post_format() );
					} else {
						get_template_part('template-parts/content', 'featured-article-tag');
					}
				} else {
					get_template_part( 'template-parts/content', get_post_format() );
				}                   

			endwhile;
			// Previous/next page navigation.
			abedul_blog_navigation();

		else :
			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content', 'none' );

		endif;
	?>

	</div><!--/main-content-->

    <?php get_sidebar('sidebar'); ?>    

</div><!--/inner-->
<?php get_footer(); ?>

