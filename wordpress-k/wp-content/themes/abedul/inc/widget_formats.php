<?php

/**
 * Custom Widget for displaying a block with small posts with special formats.
 *
 * Displays posts with Aside, Quote, Link and Status formats.
 *
 * @link https://codex.wordpress.org/Widgets_API#Developing_Widgets
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */

class Abedul_Formats extends WP_Widget {

	/**
	 * The supported templates.
	 *
	 * @access private
	 * @since Abedul 1.0.4
	 *
	 * @var array
	 */
	private $formats = array( 'aside', 'audio', 'quote', 'link', 'status' ); 

	/**
	 * Constructor.
	 *
	 * @since Abedul 1.0.4
	 *
	 * @return Abedul_Formats
	 */

	public function __construct() {
		$widget_ops = array( 
			'classname' => 'abedul_formats',
			'description' => __('Use this widget to show one or more of your formatted posts','abedul'),
		);
		parent::__construct( 'abedul_formats', __('Abedul Formats', 'abedul'), $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
		$title  = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		// Puts the selected post formats in an array that can be used in the query.
		$terms = array();
		foreach ($this->formats as $key => $value) {
			if (!empty($instance['formats'][$value])) {
				$value = $instance['formats'][$value];
				$terms[]= 'post-format-'.$value;
			}
		}

		// Starts the query work.
		$is_sticky = get_option('sticky_posts');
		$args_query = array(  'posts_per_page' => 30,
                    	'post__not_in'  => $is_sticky,
                    	'ignore_sticky_posts' => 1,
                    	'tax_query' => array(
                    		array(	'taxonomy' => 'post_format',
                    				'field' => 'slug',
                    				'terms' => $terms,
                    				'operator' => 'IN',
                    				),),);
		$query = new WP_Query($args_query);
		
		if ( $query->have_posts() ):
			echo $args['before_widget'];
			echo '<h2>'.esc_html($title).'</h2>'; ?>
			<div class="widget-posts">
			<?php
			while ( $query->have_posts() ):
				$query->the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;
			wp_reset_postdata(); ?>
			</div>
			<?php
			echo $args['after_widget'];
		endif;
	}

	/**
	 * Deal with the settings when they are saved by the admin.
	 *
	 * Here is where any validation should happen.
	 *
	 * @since Abedul 1.0.4
	 *
	 * @param array $new_instance New widget instance.
	 * @param array $instance     Original widget instance.
	 * @return array Updated widget instance.
	 */
	public function update( $new_instance, $instance ) {
		$instance['title']  = strip_tags( $new_instance['title'] );		

		foreach ($this->formats as $key => $value) {
			$instance['formats'][$value] = !empty($new_instance['formats'][$value]) ? $new_instance['formats'][$value] : 0;
		}

		return $instance;
	}	

	/**
	 * Display the form for this widget on the Widgets page of the Admin area.
	 *
	 * @since Abedul 1.0.4
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {

		foreach ($this->formats as $slug) {			
			$formats[$slug] = false;
		}

		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'formats' => $formats ));		
		$title  = empty($instance['title'])? '' : esc_attr( $instance['title']);
		
		foreach ($this->formats as $key => $slug) {
			$slug = isset($instance['formats'][$slug]) ? $instance['formats'][$slug] : 0;
		} ?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'abedul' ); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>

		<p><label for="<?php echo esc_attr( $this->get_field_id( 'formats' ) ); ?>"><?php _e( 'Choose the post formats you would like to show in your widget:', 'abedul' ); ?></label></p>
		<p> 
  		<?php 
		foreach( $this->formats as $key => $slug ):?>
			<input 
				id="<?php echo esc_attr($this->get_field_id('formats').'-'.$slug); ?>" 
				name="<?php echo esc_attr($this->get_field_name('formats')); echo '['.$slug.']' ?>" 
				type="checkbox" 
				value="<?php echo esc_attr($slug); ?>" 
				<?php checked($slug, $instance['formats'][$slug], true);?>
			/>
			
			<label for="<?php echo esc_attr($this->get_field_id('formats').'-'.$slug); ?>"><?php echo esc_html(ucfirst(strtr($slug, '-', ' '))) ?></label><br>
<?php 	endforeach;

		 ?>
		</p> 
		<?php
	}

}

