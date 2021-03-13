<?php
/**
 * The template for displaying featured articles with a link to two posts of the same category.
 *
 * Used for index/archive/search.
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('featured-article-cat'); ?> >
	<section class="main-post">
	<?php 	if ( is_sticky() && is_home() && ! is_paged() || is_archive()) :
				echo '<span class="featured-post"><span class="genericon genericon-pinned"></span>' . __( 'Featured', 'abedul' ) . '</span>';
			endif;
	?>		
		<header class="entry-header">			
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

				<?php
				if ( 'post' == get_post_type() ) :
					printf( '<a href="%1$s" rel="bookmark"><span class="screen-reader-text"> %2$s</span><time class="entry-date" datetime="%3$s"><span class="genericon genericon-time" aria-hidden="true"></span>%4$s</time></a>',
						esc_url( get_permalink() ),
						esc_html( get_the_title() ),
						esc_attr( get_the_date( 'c' ) ),
						esc_html( get_the_date() )
					);	
				endif;
				
				edit_post_link('<span class="genericon genericon-edit" aria-hidden="true"></span>'. __('Edit', 'abedul') ) ?>
			</div><!--entry-meta-->

		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		</header><!--entry-header -->
			<div class="entry-all">
			<?php if ( has_post_thumbnail() ) : ?>

		<figure class="post-thumbnail">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</figure><!-- post-thumbnail -->
			<?php endif; ?>


			<div class="entry-content">
				<?php

				if ( has_post_format('audio') || has_post_format('link') || has_post_format('quote') || has_post_format('aside') || has_post_format('status')) {
					the_content();
				}

				elseif ( is_home() || is_front_page() || is_search() || is_archive() || is_dynamic_sidebar() ) {
					the_excerpt();
				} 

				else {
				the_content( sprintf( __( 'Continue reading', 'abedul' ).' %s',
					the_title( '<span class="screen-reader-text">', '</span>', false ) ) );
				}

				?>
			</div><!-- .entry-content -->
		</div><!-- .entry-all -->
	</section>

	<footer class="entry-footer">
		<div class="entry-meta">
			<?php
			// This is used for the styling of post formats.
			$format = get_post_format(); 
			$format_link = get_post_format_link($format);
			if ($format):
				printf('<a href="%1$s" class="post-format"><span class="genericon genericon-%2$s" aria-hidden="true"></span>%2$s</a>', esc_url( $format_link ) , $format );
			endif;

			if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
				<span class="comments-link"><span class="genericon genericon-comment" aria-hidden="true"></span><?php comments_popup_link( '0', '1', '%' ); ?></span>
			<?php endif;

		// Translators: used between list items, there is a space after the comma.
			$tag_list = get_the_tag_list( '', __( ', ', 'abedul' ) );
			if ( $tag_list ) {
				echo '<span class="tags-links"><span class="genericon genericon-tag" aria-hidden="true"></span>' . $tag_list . '</span>';
			}
		?>	
		</div><!-- .entry-meta -->	
	</footer><!-- .entry-footer -->

	<?php abedul_related_posts_by_category( $post ); ?>

</article><!-- #post-## -->

