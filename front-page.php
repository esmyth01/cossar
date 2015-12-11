<?php get_header(); ?>

<div id="flexslider">

  <?php wd_slider(2); ?>

</div>

<div id="main-content">

<section>
  <?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>


    <?php the_content(); ?>


  <?php endwhile; endif;  //end loop?>



  <div id="home-cta">


    <div class="home-cta-content">

      <img src="<?php bloginfo('template_directory'); ?>/images/objective(purple).png" alt="mission" class="home-cta-image"/>
      <h4><a href="<?php echo get_permalink( get_page_by_path( 'about/mission' ) ) ?>">Mission</a></h4>

      <p><?php $page_id = 26;

      $page_object = get_page( $page_id );

      echo $page_object->post_excerpt;?></p>


    </div>

    <div class="home-cta-content">

      <img src="<?php bloginfo('template_directory'); ?>/images/history(purple).png" alt="history" class="home-cta-image"/>

      <h4><a href="<?php echo get_permalink( get_page_by_path( 'about/history' ) ) ?>">History</a></h4>

      <p><?php $page_id = 24;

      $page_object = get_page( $page_id );

      echo $page_object->post_excerpt;?></p>

    </div>

    <div class="home-cta-content">

      <img src="<?php bloginfo('template_directory'); ?>/images/staff(purple).png" alt="staff" class="home-cta-image"/>

      <h4><a href="<?php echo get_permalink( get_page_by_path( 'about/staff' ) ) ?>">Staff</a></h4>

      <p><?php $page_id = 28;

      $page_object = get_page( $page_id );

      echo $page_object->post_excerpt;?></p>

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
    <div id="director-p">
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </div>


  </div>

</section>


<div id="homepage-sidebar">
  <div id="home-categories">

    <div id="home-categories-h2"><h2>Categories</h2></div>

    <ul>
      <?php wp_list_categories(); ?>
    </ul>
  </div>

  <div id="home-widget-item">
    <div id="home-news-h3"><h3>Latest News</h3></div>
    <ul>

      <?php rewind_posts(); ?>
      <?php query_posts('showposts=4'); ?>
      <?php while (have_posts()) : the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

        <?php the_post_thumbnail('medium'); ?>

        <?php the_excerpt(); ?>

      <?php endwhile; ?>
    </ul>


  </div>

  <div id="home-social">
    <div id="home-social-h3">

      <h3>Social Media</h3>

    </div>

    <div class="social-media-content">
      <img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="staff" class="social-media-image"/>
    </div>

    <div class="social-media-content">
      <img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="staff" class="social-media-image"/>
    </div>

    <div class="social-media-content">
      <img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="staff" class="social-media-image"/>
    </div>

  </div>


</div><!--end homepage-sidebar-->











<?php get_footer(); ?>
