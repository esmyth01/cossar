<?php
/**
 * This the basic file for displaying pages.
 *
 * index.php
 */

get_header(); ?>

<section>

  <!-- loop to pull blog content -->


<?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>

<article class="post-excerpt">

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

</article>
<?php endwhile; endif;  //end loop?>

</section>

<aside>
<?php get_sidebar();?>
</aside>



  <h2>This is an index page</h2>



<?php get_footer(); ?>
