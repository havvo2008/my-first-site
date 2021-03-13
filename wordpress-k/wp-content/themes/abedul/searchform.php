<?php
/**
 * Template for displaying search forms in Abedul
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'abedul' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'abedul' ).' &hellip;'; ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'abedul' ); ?>" />
	</label>
	<button type="submit" class="search-submit"><span class="genericon genericon-search" aria-hidden="true"></span><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'abedul' ); ?></span></button>
</form>
