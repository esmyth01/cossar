<?php get_header(); ?>

<section>
<?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>


<?php the_content(); ?>


<?php endwhile; endif;  //end loop?>
</section>




<small>front-page.php</small>


<?php get_footer(); ?>
