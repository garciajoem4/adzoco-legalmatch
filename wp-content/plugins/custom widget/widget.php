<?php

/*
Plugin Name: Custom Widget
Plugin URI: https://legalmatch.com
Description: List of reviews for lawyers
Author: Test
Version: 1
Author URI: https://legalmatch.com
*/

class custom_widget extends WP_Widget {

function __construct() {
  parent::__construct('custom_widget', __('Lawyers List', 'widget_domain'),
  array( 'description' => __( 'List of lawyers', 'widget_domain' ), )
  );
}

public function widget( $args, $instance ) {
  $title = apply_filters( 'widget_title', $instance['title'] );
  echo $args['before_widget'];

  if ( ! empty( $title ) )
  echo $args['before_title'] . $title . $args['after_title'];
  echo __( '', 'widget_domain' );
  echo $args['after_widget'];
}

public function form( $instance ) {
  if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
  }
  else {
    $title = __( 'Title', 'widget_domain' );
  }
?>
  <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
  </p>
<?php
}

  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
  }
}

function custom_load_widget() {
	register_widget( 'custom_widget' );
}
add_action( 'widgets_init', 'custom_load_widget' );

?>
