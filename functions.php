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

  register_nav_menus(array('main-menu' => __('Main'),
  ));

  //Enable excerpt on pages
  add_post_type_support('page', 'excerpt');

  //End menu function

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




  ?>
