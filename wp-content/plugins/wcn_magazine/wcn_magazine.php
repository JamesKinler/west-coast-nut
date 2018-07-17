<?php
/*
* Plugin Name: WCN Magazine
* Plugin URI: jcsmarketinginc.com
* Displays The Most Current Issue Of West Coast Nut
* Version: 1.0
* Author: James Kinler
*/


// the start of the custom post type
add_action('init', 'jk_wcn_magazine');

function jk_wcn_magazine(){
  register_post_type('wcn_magazine', [
    'labels' => [
      'name' => 'Magazines',
      'singular_name' => 'Magazine',
      'add_new' => 'Add A New Magazine',
      'add_new_item' => 'Add A New Magazine',
      'edit_item' => 'Edit Magazine',
      'new_item' => 'Add A New Magazine',
      'view_item' => 'View Magazine',
      'not_found' => 'No Magazine Found',
      'not_found_in_trash' => 'No Magazine Found In Trash',
      'parent_item_colon' => 'Parent Magazine'
    ],
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-book-alt',
    'publicly_queryable' => true,
    'query_var' => true,
    'supports' => [
      'title', 'editor', 'thumbnail'
    ],
  ]);
}

function wcn_magazine_shortcode($atts){
  $custom_loop_atts = shortcode_atts([
    'number_of_posts' => 1,
    'type' => 'wcn_magazine',
  ],$atts);

  $post_type = $custom_loop_atts['type'];
  $number_of_posts = $custom_loop_atts['number_of_posts'];

  $args = [
    'post_type' => $post_type,
    'post_status' => 'publish',
    'order' => 'date',
    'posts_per_page' => $number_of_posts,
  ];

  $wcn_magazine_query = new WP_Query($args);
  ob_start();
  while($wcn_magazine_query->have_posts()) : $wcn_magazine_query->the_post();
  the_content();
  endwhile;
  return ob_get_clean();
  wp_reset_postdata();
}

add_shortcode('wcn_magazine', 'wcn_magazine_shortcode');


add_filter('template_include', 'include_archive_template_function',1);

function include_archive_template_function($template_path){
  if(get_post_type() == 'wcn_magazine'){
    if(is_archive()){
      if($theme_file = locate_template(['archive-wcn_magazine.php'])){
        $template_path = $theme_file;
      }else{
        $template_path = plugin_dir_path(__FILE__) . '/archive-wcn_magazine.php';
      }
    }
  }
  return $template_path;
}


//changes the number of how many magazines are showen on the archive page
function wpsites_query( $query ) {
if ( $query->is_archive() && $query->is_main_query() && !is_admin() ) {
        $query->set( 'posts_per_page', 16 );
    }
}
add_action( 'pre_get_posts', 'wpsites_query' );



//paganation numbers for archive page
function jk_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    // Stop execution if there's only 1 page
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    // Add current page to the array
    if ( $paged >= 1 )
        $links[] = $paged;

    // Add the pages around the current page to the array
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";

    // Previous Post Link
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    // Link to first page, plus ellipses if necessary
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    // Link to current page, plus 2 pages in either direction if necessary
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    // Link to last page, plus ellipses if necessary
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    // Next Post Link
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></div>' . "\n";

}
?>
