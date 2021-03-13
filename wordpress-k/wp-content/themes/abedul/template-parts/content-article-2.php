<?php
/**
 * The template for displaying small pieces of the content.
 *
 * Used for index/archive/search.
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article-2'); ?> >
	<figure class="post-thumbnail">		
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        	<?php the_post_thumbnail(); ?>
    		</a>
		<?php endif; ?>
	</figure><!-- post-thumbnail -->
	<section>
		<header class="entry-header">
			<div class="entry-meta">
			<?php
			// Translators: used between list items, there is a space after the comma.
				$categories_list = get_the_category_list( __( ', ', 'abedul' ) );
				if ( $categories_list ) {
					echo '<span class="cat-links"><span class="genericon genericon-category" aria-hidden="true"></span>' . $categories_list . '</span>';
				}
			?>			
			</div><!-- .entry-meta -->
			<?php 	if ( is_sticky() ) {
						echo '<span class="featured-post"><span class="genericon genericon-pinned"></span>' . __( 'Featured', 'abedul' ) . '</span>';
					} ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<div class="entry-meta">
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
	

		<div class="entry-content">
			<?php

			if ( has_post_format('audio') || has_post_format('link') || has_post_format('quote') || has_post_format('aside') || has_post_format('status')) {
				the_content();
			}

			elseif ( is_home() || is_front_page() || is_search() || is_archive() || is_dynamic_sidebar()  ) {
				the_excerpt();
			} 

			else {
			the_content( sprintf( __( 'Continue reading', 'abedul' ).' %s',
					the_title( '<span class="screen-reader-text">', '</span>', false ) ) );
			}

			?>
		</div><!-- .entry-content -->
	</section>

	<?php abedul_entry_footer(); ?>

</article><!-- #post-## -->

