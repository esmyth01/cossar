<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, minimumscale=
1.0, maximum-scale=1.0" />
<title><?php echo get_my_title_tag(); ?> </title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" >
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600italic,700,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

<!--Start wp head-->

<?php wp_head()?>


<!--End wp head-->

</head>



<body <?php body_class();?>>






<header>
<div id="header-inner">
  <div id="logo">
<a href="http://52.88.123.0"><img src="<?php bloginfo('template_directory'); ?>/images/logo4.png" alt="logo" class="logo"/></a>
  </div>

</div> <!-- end header-inner -->

</header>

<div id="nav-box">
<div class="jquery-nav">
				<h4 class="jquery-title"><a href="#">Menu<div class="menu-icon"><img src="<?php bloginfo('template_url'); ?>/images/mobile-nav-cat.png"></div></a></h4>
				<?php wp_nav_menu(); ?>
			</div>

</div>
<div id="wrapper">




