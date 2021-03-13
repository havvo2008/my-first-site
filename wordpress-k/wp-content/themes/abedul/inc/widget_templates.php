<?php

/**
 * Custom Widget for displaying specific templates
 *
 * Displays blocks from Author, Category_small and Latest templates.
 *
 * @link https://codex.wordpress.org/Widgets_API#Developing_Widgets
 *
 * @package Abedul
 * @since Abedul 1.0.4
 */

class Abedul_Templates extends WP_Widget {

	/**
	 * The supported templates.
	 *
	 * @access private
	 * @since Abedul 1.0.4
	 *
	 * @var array
	 */
	private $templates = array( 'author', 'category_small', 'latest' ); 

	/**
	 * Constructor.
	 *
	 * @since Abedul 1.0.4
	 *
	 * @return Abedul_Templates
	 */

	public function __construct() {
		$widget_ops = array( 
			'classname' => 'abedul_templates',
			'description' => __('Use this widget to show one or more of your templates','abedul'),
		);
		parent::__construct( 'abedul_templates', __('Abedul Templates', 'abedul'), $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget

		echo $args['before_widget'];

		if (!empty($instance['templates']['author'])){
			get_template_part('template-parts/section', 'author');
		}
		if (!empty($instance['templates']['category_small'])){
			get_template_part('template-parts/section', 'category-small');
		}
		if (!empty($instance['templates']['latest'])){
			get_template_part('template-parts/section', 'latest');
		}

		echo $args['after_widget'];		
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

		foreach ($this->templates as $key => $value) {
			$instance['templates'][$value] = !empty($new_instance['templates'][$value]) ? 1 : 0;
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

		foreach ($this->templates as $slug) {			
			$templates[$slug] = false;
		}

		$instance = wp_parse_args( (array) $instance, array( 'templates' => $templates ));

		foreach ($this->templates as $key => $value) {
			$value = isset($instance['templates'][$value]) ? (bool) $instance['templates'][$value] :false;
		} ?>

		<p><label for="<?php echo esc_attr( $this->get_field_id( 'templates' ) ); ?>"><?php _e( 'Choose the templates you would like to show:', 'abedul' ); ?></label></p>
		<p> 
  		<?php 
		foreach( $this->templates as $key => $slug ):?>
			<input 
				id="<?php echo esc_attr($this->get_field_id('templates').'-'.$slug); ?>" 
				name="<?php echo esc_attr($this->get_field_name('templates')); echo '['.$slug.']' ?>" 
				type="checkbox" 
				value="<?php echo esc_attr($slug); ?>" 
				<?php checked(1, $instance['templates'][$slug], true); ?>
			/>
			
			<label for="<?php echo esc_attr($this->get_field_id('templates').'-'.$slug); ?>"><?php echo esc_html( ucfirst(strtr($slug, '-', ' '))) ?></label><br>
<?php 	endforeach; ?>
		</p> 
		<?php
	}
}

