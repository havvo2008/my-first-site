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

<article id="post-<?php the_ID(); ?>" <?php post_class('article-1'); ?> >

	<?php if ( has_post_thumbnail() ) : ?>
		<figure class="post-thumbnail">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        	<?php the_post_thumbnail(); ?>
    		</a>
    	</figure><!-- post-thumbnail -->
	<?php endif; ?>

	<section>
		<header class="entry-header">

			<div class="entry-meta">
				<?php
				if ( 'post' == get_post_type() ) :
					printf( '<a href="%1$s" rel="bookmark"><span class="screen-reader-text"> %2$s</span><time class="entry-date" datetime="%3$s"><span class="genericon genericon-time" aria-hidden="true"></span>%4$s</time></a>',
					esc_url( get_permalink() ),
					esc_html( get_the_title() ),
					esc_attr( get_the_date( 'c' ) ),
					esc_html( get_the_date() )
					);

				endif;
				?>
				<?php if ( is_sticky() && ( is_home() || is_archive() ) && ! is_paged() ) :
						echo '<span class="featured-post"><span class="genericon genericon-pinned"></span>' . __( 'Featured', 'abedul' ) . '</span>';
					endif;
				?>
			</div>

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

			elseif ( is_home() || is_search() || is_archive() || is_page() || is_dynamic_sidebar() ) {
				the_excerpt();
			} 

			else {
			the_content( sprintf( __( 'Continue reading', 'abedul' ).' %s',
					the_title( '<span class="screen-reader-text">', '</span>', false ) ) );
			}

			?>
		</div><!-- .entry-content -->
	</section>

	<footer class="entry-footer">
		<div class="entry-meta">
			<?php
			// Translators: used between list items, there is a space after the comma.
			$tag_list = get_the_tag_list( '', __( ', ', 'abedul' ) );
			if ( $tag_list ):
				echo '<span class="tags-links"><span class="genericon genericon-tag" aria-hidden="true"></span>' . $tag_list . '</span>';
			endif; ?>
			<?php
			if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
				<span class="comments-link"><span class="genericon genericon-comment" aria-hidden="true"></span><?php comments_popup_link( '0', '1', '%' ); ?></span>
			<?php endif; ?>

			
		</div><!-- .entry-meta -->		
	</footer><!-- .entry-footer -->


</article><!-- #post-## -->

