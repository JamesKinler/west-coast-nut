<?php
/*
* Plugin Name: WCN Events
* Plugin URI: jcsmarketinginc.com
* Displays The West Coast Nut Calander Event JPG
* Version: 1.0
* Author: James Kinler
*/


// the start of the custom post type
add_action('init', 'jk_wcn_event');

function jk_wcn_event(){
  register_post_type('wcn_event', [
    'labels' => [
      'name' => 'Events',
      'singular_name' => 'Event',
      'add_new' => 'Add A New Event',
      'add_new_item' => 'Add A New Event',
      'edit_item' => 'Edit Event',
      'new_item' => 'Add A New Event',
      'view_item' => 'View Event',
      'not_found' => 'No Event Found',
      'not_found_in_trash' => 'No Event Found In Trash',
      'parent_item_colon' => 'Parent Event'
    ],
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-tickets-alt',
    'publicly_queryable' => true,
    'query_var' => true,
    'supports' => [
      'title', 'editor', 'thumbnail'
    ],
  ]);
}


// the Events shortcode
function wcn_event_shortcode($atts){
  $custom_loop_atts = shortcode_atts([
    'number_of_posts' => 1,
    'type' => 'wcn_event',
  ],$atts);

  $post_type = $custom_loop_atts['type'];
  $number_of_posts = $custom_loop_atts['number_of_posts'];

  $args = [
    'post_type' => $post_type,
    'post_status' => 'publish',
    'order' => 'date',
    'posts_per_page' => $number_of_posts,
  ];

  $wcn_event_query = new WP_Query($args);
  ob_start();
  while($wcn_event_query->have_posts()) : $wcn_event_query->the_post();
  $post_id = get_the_ID();
  the_post_thumbnail('full', ['class' => 'img-fluid save_the_date']);
  endwhile;
  return ob_get_clean();
  wp_reset_postdata();
}

add_shortcode('wcn_event', 'wcn_event_shortcode');

?>
