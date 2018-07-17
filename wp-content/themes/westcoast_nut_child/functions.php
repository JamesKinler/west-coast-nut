<?php

//this enqueues my extra styles and my fonts
function jk_styles(){
	wp_enqueue_style('bootstrap_css',get_stylesheet_directory_uri().'/css/bootstrap.css');
	// wp_enqueue_style('social media fonts','https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"');
	// wp_enqueue_style('fonts', "http://fonts.googleapis.com/icon?family=Material+Icons");


}
// this adds to wordpress
add_action('wp_enqueue_scripts','jk_styles');



// this regiesters and enqueues the javascript
function jk_scripts(){
	wp_register_script('bootstrap-js',get_stylesheet_directory_uri().'/js/bootstrap.js',array('jquery'),true);
	wp_enqueue_script('bootstrap-js');
	wp_register_script('myjs',get_stylesheet_directory_uri().'/js/myjs.js',array('jquery'),true);
	wp_enqueue_script('myjs');
}
// this adds to wordpress
add_action('wp_enqueue_scripts', 'jk_scripts');

//excerpt length
function jk_excerpt_length($length){
	return 25;
}
add_filter('excerpt_length', 'jk_excerpt_length', 999);


function jk_excerpt_more($more){
		return '....';
}
add_filter('excerpt_more', 'jk_excerpt_more');

// this is registers the nav bar to the menus section
register_nav_menus([
	'primary' =>__('primary menu', 'westcoast_nut_child'),
	'mobile' =>__('mobile nav', 'westcoast_nut_pcc_child'),
	'footer' => __('footer nav', 'westcoast_nut_child'),

]);




add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

require_once('class-wp-bootstrap-navwalker.php');

// start of paganation

function custom_pagination($numpages = '', $pagerange = '', $page= ''){
	if(empty($pagerange)){
		$pagerange = 2;
	}
	global $paged;
	if(empty($paged)){
		$paged = 1;
	}
	if($numpages == ''){
		global $wp_query;
		$numpages = $wp_query->max_num_pages;
		if(!$numpages){
			$numpages = 1;
		}
	}


	$pagination_args = [
		'base' => get_pagenum_link(1) . '%_%',
		'format' => 'page/%#%',
		'total' => $numpages,
		'current' => $paged,
		'show_all' => False,
		'end_size' => 1,
		'mid_size' => $pagerange,
		'prev_next' => True,
		'prev_text' => __('&laquo;'),
		'next_text' => __('&raquo;'),
		'type' => 'plain',
		'add_args' => false,
		'add_fragment' => ''
	];

	$paginate_links = paginate_links($pagination_args);

	if($paginate_links){
		echo '<nav class="pagination">';
			echo '<span class="page page-num"> Page'. ' ' . $paged . ' ' . "of" . ' ' . $numpages . ' ' .'</span>';
			echo $paginate_links;
		echo '</nav>';
	}

}

// end of paganation

function my_post_queries( $query ) {
  // do not alter the query on wp-admin pages and only alter it if it's the main query
  if (!is_admin() && $query->is_main_query()){

    // alter the query for the home and category pages

    if(is_category()){
      $query->set('posts_per_page', 5);
    }

  }
}
add_action( 'pre_get_posts', 'my_post_queries' );


?>
