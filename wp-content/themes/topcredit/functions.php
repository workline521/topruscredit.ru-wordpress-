<?php
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');

//noindex для toc+
add_filter( 'the_content', 'morkovin_noindex_toc', 1000);
function morkovin_noindex_toc($content){
     return preg_replace('/(<div id="toc_container"[^>]+>[^\n]+)/', '<!--noindex-->$1<!--/noindex-->', $content);
}

// удаляем ссылку с активного пункта меню
function no_link_current_page($menu) {
	return preg_replace('%((current_page_item|current-menu-item)[^<]+)[^>]+>([^<]+)</a>%', '$1<span>$3</span>', $menu);
}
add_filter('wp_nav_menu', 'no_link_current_page');



add_theme_support('post-thumbnails');
add_theme_support('menus');

function get_post_views($post_id){
	$count_key = 'post_views_count';
	$count = get_post_meta($post_id, $count_key, true);
	if ($count == '') {
		delete_post_meta($post_id, $count_key);
		add_post_meta($post_id, $count_key, '0');
		return '0';
	}
	return $count;
}

function add_post_views($post_id) {
	if ($_COOKIE['post_id'] == $post_id) return 0;
	$count_key = 'post_views_count';
	$count = get_post_meta($post_id, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($post_id, $count_key);
		add_post_meta($post_id, $count_key, '0');
	} else {
		$count++;
		update_post_meta($post_id, $count_key, $count);
	}
}

add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views', 5, 2);

function posts_column_views($defaults){
	$defaults['post_views'] = __('Просмотры');
	return $defaults;
}

function posts_custom_column_views($column_name, $id){
		if ($column_name === 'post_views') {
		echo get_post_views(get_the_ID());
	}
}

add_filter('excerpt_more', function($more) {
	return '...';
});


add_filter( 'pre_get_posts', 'tgm_io_cpt_search' );

function tgm_io_cpt_search( $query ) {
	
    if ( $query->is_search ) {
	$query->set('cat','1,2,3');
    }
    
    return $query;
    
}


function showRating($id, $css_class = 'post-ratings') {
 global $wpdb;
 $path = plugins_url('wp-postratings/images/'.get_option('postratings_image'));
 $rating = $wpdb->get_var("SELECT AVG(rating_rating) AS rating FROM $wpdb->ratings WHERE rating_postid = $id");
 $i = 0;
 $html = '
 <span class="'.$css_class.'">';
 if (!empty($rating)) {
 while ($i < floor($rating)) {
 $html .= '
 <img src="'.$path.'/rating_on.gif" alt="" />';
 $i++;
 }
 if (round($rating, 1) == ($i+0.5)) {
 $html .= '
 <img src="'.$path.'/rating_half.gif" alt="" />';
 $i++;
 }
 }
 while ($i < 5) {
 $html .= '
 <img src="'.$path.'/rating_off.gif" alt="" />';
 $i++;
 }
 $html .= '
 </span>';
 return $html; 
}
function custom_rating_image_extension() {
return 'png';
}
add_filter( 'wp_postratings_image_extension', 'custom_rating_image_extension' );



function sortIt($sortType)
{
    global $wp_query;
    $cat_ID = get_query_var('cat');


    if (strcmp($sortType, 'minpercent') == 0 )
    {
        $query = new WP_Query( array( 'meta_key' => 'minpercent', 'orderby' => 'meta_value_num', 'order'=> 'ASC', 'cat' => $cat_ID, 'posts_per_page' => '100') );
    }
    if (strcmp($sortType, 'maxsum') == 0 )
    {
        $query = new WP_Query( array( 'meta_key' => 'maxsum', 'orderby' => 'meta_value_num', 'order'=> 'DESC', 'cat' => $cat_ID, 'posts_per_page' => '100') );
    }
    if (strcmp($sortType, 'maxday') == 0 )
    {
        $query = new WP_Query( array( 'meta_key' => 'maxday', 'orderby' => 'meta_value_num', 'order'=> 'DESC', 'cat' => $cat_ID, 'posts_per_page' => '100') );
    }
    if (strcmp($sortType, 'rating') == 0 )
    {
        $query = new WP_Query( array( 'meta_key' => 'rating', 'orderby' => 'meta_value_num', 'order'=> 'DESC', 'cat' => $cat_ID, 'posts_per_page' => '100') );
    }
    return $query;
}


remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );







?>