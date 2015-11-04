<?php get_header(); ?>

<div id="flexslider">

  <?php wd_slider(2); ?>

</div>

<section>
  <?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>


    <?php the_content(); ?>


  <?php endwhile; endif;  //end loop?>

  <div id="home-cta">

    <div class="home-cta-images">

    </div>

    <div class="home-cta-images">

    </div>

    <div class="home-cta-images">

    </div>



  </div>

  <div id="home-projects">


  </div>

  <div id="home-director">


  </div>

</section>


<div id="homepage-sidebar">

  <ul>
    <li><a href="#"><h2>Categories</h2></a></li>
    <li><a href="#">News</a></li>
    <li><a href="#">Projects</a></li>
    <li><a href="#">Press</a></li>
  </ul>


    <div id="home-widget-item">
    <h3>News</h3>
    <ul>

    <?php rewind_posts(); ?>
    <?php query_posts('showposts=4'); ?>
    <?php while (have_posts()) : the_post(); ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endwhile; ?>
    </ul>


  </div>

  <div id="home-social">
  <h3>Social Media</h3>


</div>


</div>





</div>




<small>front-page.php</small>


<?php get_footer(); ?>
