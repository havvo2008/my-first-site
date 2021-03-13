<?php
/**
 * The Template for displaying all single posts
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */
 
 $abedul_theme_options = abedul_get_options();
 $show_excerpt = $abedul_theme_options['show_excerpt'];
 $show_related_posts = $abedul_theme_options['show_related_posts'];
 $show_author_info = $abedul_theme_options['show_author_info'];
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php
		// Translators: used between list items, there is a space after the comma.
		$categories_list = get_the_category_list( __( ', ', 'abedul' ) );
		
		if ( $categories_list ) {
			echo '<div class="cat-links"><span class="genericon genericon-category" aria-hidden="true"></span>' . $categories_list . '</div>';
		}
		?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<span class="byline">
			<?php
			// Translators: there is a space after "By".
			print( __('By ', 'abedul') );
			printf('<span class="entry-author"><a href="%1$s" rel="author">%2$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author());
			
			printf( '<span class="entry-date"><a href="%1$s" rel="bookmark"><time datetime="%2$s">%3$s</time></a></span>',
				esc_url( get_day_link(get_the_date('Y', $post->ID),get_the_date('m', $post->ID),get_the_date('d', $post->ID)) ),
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date() ));
			?>
		</span><!-- .byline -->

		<div class="entry-meta">
			<?php
				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<span class="comments-link">
				<span class="genericon genericon-comment" aria-hidden="true"></span>
				<?php comments_popup_link( __( 'Leave a comment', 'abedul' ), __( '1 Comment', 'abedul' ), __( '% Comments', 'abedul' ) ); ?>
			</span>

			<?php
				endif;

				edit_post_link('<span class="genericon genericon-edit" aria-hidden="true"></span>'. __('Edit', 'abedul') )
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-excerpt">
		<?php 	if ( ! get_post_format() && $show_excerpt ):
					the_excerpt();
				endif ?>
	</div>

	<?php if ( has_post_thumbnail() && ! has_post_format('image') && ! has_post_format('audio') && ! has_post_format('video') && ! has_post_format('gallery') ) :?>

	<div class="featured-image">
		<?php the_post_thumbnail(); ?>
	</div>

	<?php endif; ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'abedul' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'abedul' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

<?php 	if ( $show_related_posts == 'by_tag' ):
			abedul_related_posts_by_tag($post);
			elseif ( $show_related_posts == 'by_category' ):
				abedul_related_posts_by_category($post);
		endif;

 ?>

	<footer class="entry-footer">		
		<?php
			// Translators: used between list items, there is a space after the comma.
			$tag_list = get_the_tag_list( '', __( ', ', 'abedul' ) );
			if ( $tag_list ) {
				echo '<div class="tag-links">' . $tag_list . '</div>';
			}
		// Translators: There is a space after "by".
			printf( '<p class="written-by">' . __('This article was written by ', 'abedul'). '<a href="%1$s">%2$s</a></p>',
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author() );

			if ( '' != get_the_author_meta( 'description' ) && $show_author_info == 1 ) {
				get_template_part( 'template-parts/author-bio' );
			}
		?>
	</footer><!-- .entry-footer -->
	
</article><!-- #post-## -->

