<?php get_header(); ?>

<div id="flexslider">

  <?php wd_slider(2); ?>

</div>

<section>
  <?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>


    <?php the_content('page_id=5'); ?>


  <?php endwhile; endif;  //end loop?>



  <div id="home-cta">


    <div class="home-cta-content">

      <img src="<?php bloginfo('template_directory'); ?>/images/objective(2).png" alt="mission" class="home-cta-image"/>
      <h4>Mission</h4>

      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

    </div>

    <div class="home-cta-content">

      <img src="<?php bloginfo('template_directory'); ?>/images/history4.png" alt="history" class="home-cta-image"/>

      <h4>History</h4>

      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </div>

    <div class="home-cta-content">

      <img src="<?php bloginfo('template_directory'); ?>/images/multiple25.png" alt="staff" class="home-cta-image"/>

      <h4>Staff/Members</h4>

      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </div>

  </div>

  <div id="home-projects">

    <h3>CoSSaR Current Projects</h3>

    <div class="home-projects-content">
      <img src="<?php bloginfo('template_directory'); ?>/images/starbird-zunkunft(sm).png" alt="starbird" class="home-projects-image"/>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

    </div>

    <div class="home-projects-content">
      <img src="<?php bloginfo('template_directory'); ?>/images/admiral-visit(sm).png" alt="admiral" class="home-projects-image"/>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

    </div>


  </div>

  <div id="home-director">

    <h3>CoSSaR Director Mark Haselkorn</h3>

    <div id="director-image"><img src="<?php bloginfo('template_directory'); ?>/images/director-thumbnail.png" alt="director" class="home-director-image"/></div>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>


  </div>

</section>


<div id="homepage-sidebar">
<div id="home-categories">

<div id="home-categories-h2"><h2>Categories</h2></div>

  <ul>
    <li><a href="#">News</a></li>
    <li><a href="#">Projects</a></li>
    <li><a href="#">Press</a></li>
  </ul>
</div>

  <div id="home-widget-item">
    <div id="home-news-h3"><h3>News</h3></div>
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
