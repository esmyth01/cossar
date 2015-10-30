<?php
/**
 * The template for displaying all pages.
 *
 * page.php
 */

get_header(); ?>

<!-- loop to pull content for all pages -->
<section>
<?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>


<?php endwhile; endif;  //end loop?>
</section>

<aside>
<?php get_sidebar();?>
</aside>
  <h2>This is a standard page</h2>



<?php get_footer(); ?>
