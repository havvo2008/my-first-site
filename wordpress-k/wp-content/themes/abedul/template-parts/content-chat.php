<?php
/**
 * The default template for displaying content
 *
 * Used for index/archive/search.
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<header class="entry-header">
	
	<?php
		if ( is_single() && ! is_dynamic_sidebar() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		endif;
	?>

	<?php if ( is_sticky() && is_home() && ! is_paged() ) {
			echo '<span class="featured-post"><span class="genericon genericon-pinned"></span>' . __( 'Featured', 'abedul' ) . '</span>';
		}
	?>
	<div class="entry-meta">
		<?php
			// This is used for the styling of post formats.
			$format = get_post_format(); 
			$format_link = get_post_format_link($format);
			if ($format):
				printf('<a href="%1$s" class="post-format"><span class="genericon genericon-%2$s" aria-hidden="true"></span>%2$s</a>', esc_url( $format_link ) , $format );
			endif;
		?>

		<span class="byline">
			<?php
				if ( 'post' == get_post_type() ) {
				// Translators: there is a space after "By".
				print(__('By ', 'abedul'));
				printf( '<a href="%1$s" rel="author"><span class="genericon genericon-user" aria-hidden="true"></span>%2$s</a>',
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author() );
				}
			?>
		</span><!--.byline -->
		<?php edit_post_link('<span class="genericon genericon-edit" aria-hidden="true"></span>'. __('Edit', 'abedul') ) ?>
	</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) : ?>
	<div class="post-thumbnail">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
    	<?php the_post_thumbnail(); ?>
		</a>
	</div><!-- post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php

		if ( is_home() || is_search() || is_archive() || is_dynamic_sidebar() ) {
			the_excerpt();
		} 

		else {
		the_content( sprintf( __( 'Continue reading', 'abedul' ).' %s',
			the_title( '<span class="screen-reader-text">', '</span>', false )
		) );
		}	

		?>
	</div><!-- .entry-content -->

	<?php abedul_entry_footer(); ?>

</article><!-- #post-## -->

