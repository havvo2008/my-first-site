<?php

function abedul_header_style() {
	if (is_customize_preview()) : ?>

		<style type="text/css" id="abedul-preview-css">
			.logged-in #masthead {
				top: 0;
			}
		</style>
<?php
	endif;
	$header_image = get_header_image();
	$text_color   = get_header_textcolor();
	$abedul_theme_options = abedul_get_options();

	// If no custom options for header are set, let's bail.
	if (  ! abedul_get_options()  )
		return;

	// If we get this far, we have custom styles.
	?>
	<style type="text/css" id="abedul-header-css">
<?php

		if ( ! has_custom_logo() ) : ?>
			.home-link {
				display: block;
			}


<?php 	endif;

		if ( ! empty( $header_image ) ) : ?>
		#site-identity {
			background: url(<?php header_image(); ?>) no-repeat scroll top;
			background-size: 1920px auto;
		}
		@media (max-width: 767px) {
			.site-header {
				background-size: 768px auto;
			}
		}
		@media (max-width: 359px) {
			.site-header {
				background-size: 360px auto;
			}
		}
	
		<?php endif;

		// Has the title been hidden?
		if ( ! $abedul_theme_options['show_site_title'] ) : ?>
		
		.site-title {
			position: absolute;
			width: 0;
			height: 0;
			clip: rect(1px, 1px, 1px, 1px);
		}

<?php 	endif;

		if ( ! $abedul_theme_options['show_site_description'] ) : ?>
		
		.site-description {
			position: absolute;
			width: 0;
			height: 0;
			clip: rect(1px, 1px, 1px, 1px);
		}
<?php endif;
			if ( empty( $header_image ) ) :
		?>
			.site-header .home-link {
				min-height: 0;
			}
<?php
			endif;


		// If the user has set a custom color for the text, use that.
		if ( $text_color != get_theme_support( 'custom-header', 'default-text-color' ) ) : ?>

		.site-title {
			color: #<?php echo esc_attr( $text_color ); ?>;
		}	

<?php 	endif;

		if ( $abedul_theme_options['site_description_color'] ): ?>

			.site-description {
				color: <?php echo esc_attr($abedul_theme_options['site_description_color']) ?>;
			}
		
<?php 	endif;

?>
	</style>
<?php
}




