<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, minimumscale=
1.0, maximum-scale=1.0" />
<title><?php echo get_my_title_tag(); ?> </title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" >


<!--Start wp head-->

<?php wp_head()?>


<!--End wp head-->

</head>



<body <?php body_class();?>>

<div id="wrapper">




<header>
  <div id="logo">
<a href="http://52.88.123.0"><img src="<?php bloginfo('template_directory'); ?>/images/cossar-logo.png" alt="logo" class="logo"/></a>
  </div>



</header>




<?php wp_nav_menu(); ?>

<div id="main-content">
