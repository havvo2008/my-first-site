<?php
/**
 * The template used for displaying page content
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-meta">
		<?php edit_post_link('<span class="genericon genericon-edit" aria-hidden="true"></span>'. __('Edit', 'abedul') ) ?>
		</div><!--.entry-meta-->
	</header><!-- .entry-header -->

<?php if ( has_post_thumbnail() ) : ?>
	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div><!-- .page-thumbnail -->
<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'abedul' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'abedul' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
