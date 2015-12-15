<?php
/*
Theme Name: Cossar
Theme URI: http://52.88.123.0
Author: Evan Smyth, Kimberly Stewart, Nectar Shakir, Brian Baker
Author URI: http://52.88.123.0
Description: This is the theme for our itc210 wordpress course at Seattle Central College
Version: 1.0
*/


//Register my menus

  register_nav_menus(array('main-menu' => __('Main'), 'footer-menu' => __( 'Footer Menu'),
  ));





  //Enable excerpt on pages
  add_post_type_support('page', 'excerpt');

  //Enable featured images on pages

add_theme_support( 'post-thumbnails' );



  // get title tag
  function get_my_title_tag() {

	  global $post;

	  if (is_front_page()) {
		  bloginfo('description');
	  }

	  elseif (is_page() || is_single()) {

		  the_title(); //title of page or posting

	  }

	  else{

		   bloginfo('description');

	  }

	  if($post->post_parent) {

		  echo ' | ';
		  echo get_the_title($post->post_parent);



	  }

	  echo ' | ';
	  bloginfo('name');
	  echo ' | ';
  	  echo 'Seattle, WA';
  }

  //

  //Start sidebar

  register_sidebar(array(
  'before_widget' => '<div>',
  'after_widget' => '</div>',
  'before_title' => '<h2>',
  'after_title' => '</h2>'));


  //End sidebar

//add search to nav

add_filter( 'wp_nav_menu_items','add_search_box', 10, 2 );
function add_search_box( $items, $args ) {
    $items .= '<li>' . get_search_form( false ) . '</li>';
    return $items;
}

//function for excerpt displaying

function get_excerpt(){
$permalink = get_permalink($post->ID);
$excerpt = get_the_excerpt();
$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 70);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
$excerpt = $excerpt.'... <a href="'.$permalink.'">more</a>';
return $excerpt;
}

//function for content displaying
function get_content(){
$permalink = get_permalink($post->ID);
$content = get_the_content();
$content = preg_replace(" (\[.*?\])",'',$content);
$content = strip_shortcodes($content);
$content = strip_tags($content);
$content = substr($content, 0, 200);
$content = substr($content, 0, strripos($content, " "));
$content = trim(preg_replace( '/\s+/', ' ', $content));
$content = $content.'... <a href="'.$permalink.'">more</a>';
return $content;
}


  ?>
