<?php
/**
 * The Footer widget areas
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */
?>

<?php
	/*
	 * The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'footer-1' )
		&& ! is_active_sidebar( 'footer-2' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>
<div id="footer-widget-area" role="complementary">
	<div class="inner">		
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			
				<div id="first-footer-widget" class="widget-area footer-widget">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div><!--#first-footer-widget-->
			
		<?php endif; ?>		
		
		<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
			
				<div id="second-footer-widget" class="widget-area footer-widget">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div><!--#second-footer-widget-->
			
		<?php endif; ?>
	</div><!-- .inner -->	
</div><!-- #footer-widget-area -->
