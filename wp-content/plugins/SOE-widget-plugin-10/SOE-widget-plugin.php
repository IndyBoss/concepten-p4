<?php
/**
 * Plugin Name:   SOE
 * Description:   This Widget changes the state of employment.
 * Version:       1.7
 * Author:        Indy Bosschem
 */

class jpen_Example_Widget extends WP_Widget {


  // Set up the widget name and description.
  public function __construct() {
    $widget_options = array( 'classname' => 'SOE', 'description' => 'This Widget changes the state of employment.' );
    parent::__construct( 'SOE', 'State of employment', $widget_options );
  }


  // Create the widget output.
  public function widget( $args, $instance ) {
    extract( $args );
    $title  = apply_filters('widget_title', $instance['title']);
    $state 	= $instance['employmenttype'];

    echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title']; ?>

    <p><strong>State of employment:</strong> <?php echo $state ?></p>

    <?php echo $args['after_widget'];
  }


  // Create the admin area widget settings form.
  public function form( $instance ) {
    $employmenttype = ! empty( $instance['employmenttype'] ) ? $instance['employmenttype'] : ''; ?>
    <p>
      <select id="<?php echo $this->get_field_id('employmenttype'); ?>" name="<?php echo $this->get_field_name('employmenttype'); ?>" class="widefat" style="width:100%;">
        <option <?php selected( $instance['employmenttype'], 'Employed'); ?> value="Employed">Employed</option>
        <option <?php selected( $instance['employmenttype'], 'Unemployed'); ?> value="Unemployed">Unemployed</option>
      </select>
    </p><?php
  }


  // Apply settings to the widget instance.
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance[ 'employmenttype' ] = strip_tags( $new_instance[ 'employmenttype' ] );
    return $instance;
  }

}

// Register the widget.
function jpen_register_example_widget() {
  register_widget( 'jpen_Example_Widget' );
}
add_action( 'widgets_init', 'jpen_register_example_widget' );

?>
