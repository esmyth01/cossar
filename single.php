<?php
/**
 * The Template for displaying all single posts.
 *
 * single.php
 */

get_header(); ?>
<div id="header-box">
<div id="header-text">
<span class="header"><?php the_title(); ?></span>
</div>
</div><!-- end header-box -->
<div id="main-content">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>


	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>


		<?php endwhile; endif;  //end loop?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

	        <?php

	        if ( comments_open() || '0' != get_comments_number() )
	            comments_template();
	        ?>

		<?php endwhile; ?>


	</main><!-- #main -->

<?php get_footer(); ?>
