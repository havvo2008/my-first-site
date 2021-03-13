<?php
/**
 * The front page template file.
 * This template file is used to render the site’s front page when the
 * front page is choosen to display a static page. If there is not a condition, like here,
 * it takes precedence over the blog posts index (home.php or index.php) templates. 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */

$abedul_theme_options = abedul_get_options();
$show_sidebar = $abedul_theme_options['show_sidebar'];

if ( 'page' == get_option( 'show_on_front' ) ):
	get_header(); ?>

	<div class="inner">
<?php if ( $show_sidebar == 1 ) : ?>
		<div id="main-content" class="main-content">
<?php else: ?>
		<div id="main-content-full" class="main-content-full">
<?php endif;
			get_template_part('template-parts/section', 'featured-content');
			get_template_part('template-parts/section', 'latest');
			get_template_part('template-parts/section', 'category');
			?>      
		</div><!--/main-content-->


<?php 	if ($show_sidebar == 1 ):
			get_sidebar('sidebar');
		endif ?>
	</div><!--/inner-->

<?php get_footer(); 

else:
	get_template_part( 'index' );

endif;

