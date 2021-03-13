<?php
/**
 * The template for displaying all pages, single posts and attachments
 *
 * This is a new template file that WordPress introduced in
 * version 4.3. Note that it uses conditional logic to display
 * different content based on the post type.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */

get_header(); ?>

<div class="inner" >
	<div id="main-content" class="main-content">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			if ( is_singular( 'page' ) ) {
				get_template_part( 'template-parts/content', 'page' );
			} else {
				get_template_part( 'template-parts/content', 'single' );
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation
				the_post_navigation( array(
					'prev_text' => '<span class="meta-nav">'._x( 'Published in', 'Parent post link', 'abedul' ).'</span><span class="post-title"> %title</span>',
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => 	'<span class="screen-reader-text">' . __( 'Next post:', 'abedul' ) . '</span> ' .
									'<span class="post-title">%title</span>' .
									'<span class="meta-nav" aria-hidden="true">&rarr;</span> ',
					'prev_text' =>  '<span class="meta-nav" aria-hidden="true">&larr;</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous post:', 'abedul' ) . '</span> ' .
									'<span class="post-title">%title</span>',
				) );
			}

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</div><!--/main-content-->
<?php get_sidebar('sidebar'); ?>  
</div><!--/inner-->
<?php get_footer(); ?>
