<?php
/**
 * Plugin Name:   FavPostLink
 * Description:   This plugin outputs the favorite post link.
 * Version:       2.1
 * Author:        Indy Bosschem
 */

class FavPostLink extends WP_Widget {
  // class constructor
  public function __construct() {
    $widget_options = array( 'classname' => 'FavPostLink', 'description' => 'This plugin outputs the favorite post link.' );
    parent::__construct( 'FavPostLink', 'FavPostLink', $widget_options );
  }

  // output the widget content on the front-end
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    if ( ! empty( $instance['title'] ) ) {
      echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
    }

    if( ! empty( $instance['selected_posts'] ) && is_array( $instance['selected_posts'] ) ){

      $selected_posts = get_posts( array( 'post__in' => $instance['selected_posts'] ) );
      foreach ( $selected_posts as $post ) {
        echo "<a href=".get_permalink( $post->ID ).">Read more</a>";
      }
    }else{
      echo esc_html__( 'No posts selected!', 'text_domain' );
    }

    echo $args['after_widget'];
  }

  // output the option form field in admin Widgets screen
  public function form( $instance ) {

    $posts = get_posts( array(
        'posts_per_page' => 20,
        'offset' => 0
      ) );
    $selected_posts = ! empty( $instance['selected_posts'] ) ? $instance['selected_posts'] : array();
    echo "<div style='max-height: 120px; overflow: auto;'><ul>";

    foreach ( $posts as $post ) {
      echo "<li><input type='checkbox' name='".esc_attr( $this->get_field_name( 'selected_posts' ) )."[]' value='".$post->ID."'".checked( ( in_array( $post->ID, $selected_posts ) ) ? $post->ID : '', $post->ID )."/>".get_the_title( $post->ID )."</li>";
    }
    echo "</ul></div>";
  }

  // save options
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

    $selected_posts = ( ! empty ( $new_instance['selected_posts'] ) ) ? (array) $new_instance['selected_posts'] : array();
    $instance['selected_posts'] = array_map( 'sanitize_text_field', $selected_posts );

    return $instance;
  }
}

  // Register the widget.
  function favpostlink_register_widget() {
    register_widget( 'FavPostLink' );
  }
  add_action( 'widgets_init', 'favpostlink_register_widget' );
  ?>
