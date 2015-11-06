<?php get_header(); ?>

<div id="flexslider">

  <?php wd_slider(2); ?>

</div>

<section>
  <?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>


    <?php the_content(); ?>


  <?php endwhile; endif;  //end loop?>

  <div id="home-cta">

    <div class="home-cta-content">

      <img src="<?php bloginfo('template_directory'); ?>/images/homepage-cta.png" alt="cat placeholder" class="home-cta-image"/>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

    </div>

    <div class="home-cta-content">

      <img src="<?php bloginfo('template_directory'); ?>/images/homepage-cta.png" alt="cat placeholder" class="home-cta-image"/>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </div>

    <div class="home-cta-content">

      <img src="<?php bloginfo('template_directory'); ?>/images/homepage-cta.png" alt="cat placeholder" class="home-cta-image"/>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </div>

  </div>

  <div id="home-projects">

    <div class="home-projects-content">
      <img src="<?php bloginfo('template_directory'); ?>/images/home-projects.png" alt="cat placeholder" class="home-projects-image"/>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

    </div>

    <div class="home-projects-content">
      <img src="<?php bloginfo('template_directory'); ?>/images/home-projects.png" alt="cat placeholder" class="home-projects-image"/>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

    </div>


  </div>

  <div id="home-director">
    <img src="<?php bloginfo('template_directory'); ?>/images/home-director.png" alt="cat placeholder" class="home-director-image"/>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

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

        <?php if (has_post_thumbnail($page_id)){
          echo get_the_post_thumbnail(
          $page_id,
          array(280,140),
          array('class' => 'post_thumbnail')
        );
      }
      ?>

      <?php the_excerpt(); ?>

    <?php endwhile; ?>
  </ul>


</div>

<div id="home-social">
  <h3>Social Media</h3>


</div>


</div>










<small>front-page.php</small>


<?php get_footer(); ?>
