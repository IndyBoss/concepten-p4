<?php
/**
 * Plugin Name:   Greet
 * Description:   This plugin gives greetings depending on the time of day.
 * Version:       1.5
 * Author:        Indy Bosschem
 */

 function greetings() {
    $blogtime = current_time('mysql');
    list( $today_year, $today_month, $today_day, $hour, $minute, $second ) = preg_split( '([^0-9])', $blogtime );

    if ( is_user_logged_in() ) {
      //$time = date("G");
      if($hour < 6) {
          return "Welcome back, Good night.";
      } elseif($hour < 12) {
          return "Welcome back, Good morning.";
      } elseif($hour < 16){
          return "Welcome back, Good afternoon.";
      } else {
          return "Welcome back, Good evening.";
      }
    } else {
      //$time = date("G");
      if($hour < 6) {
          return "Good night";
      } elseif($hour < 12) {
          return "Good morning";
      } elseif($hour < 16){
          return "Good afternoon";
      } else {
          return "Good evening";
      }
    }
 }

 add_shortcode( 'greeting', 'greetings' );

?>
