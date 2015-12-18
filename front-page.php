<?php get_header(); ?>

<div id="flexslider">
<?php echo do_shortcode('[recent_post_slider design="design-2" limit="4"]'); ?>
  <!-- ?php wd_slider(2); ?> -->

</div>

<div id="main-content">

  <section>
    <?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>


      <?php the_content(); ?>


    <?php endwhile; endif;  //end loop?>


    <div id="home-cta">


      <div class="home-cta-content">

        <img src="<?php bloginfo('template_directory'); ?>/images/objective(purple).png" alt="mission" class="home-cta-image"/>

        <?php $query = new WP_Query( array( "name" => "mission", "post_type" => "page" ));  ?>

        <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>


          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <?php echo get_excerpt(); ?>


        <?php endwhile; endif;  //end loop?>
        <?php wp_reset_postdata() ?>

      </div>

      <div class="home-cta-content">

        <img src="<?php bloginfo('template_directory'); ?>/images/history(purple).png" alt="history" class="home-cta-image"/>

        <?php $query = new WP_Query( array( "name" => "history", "post_type" => "page" ));  ?>

        <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>


          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <?php echo get_excerpt(); ?>


        <?php endwhile; endif;  //end loop?>
        <?php wp_reset_postdata() ?>

      </div>

      <div class="home-cta-content">

        <img src="<?php bloginfo('template_directory'); ?>/images/staff(purple).png" alt="staff" class="home-cta-image"/>

        <?php $query = new WP_Query( array( "name" => "staff", "post_type" => "page" ));  ?>

        <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>


          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

          <?php echo get_excerpt(); ?>



        <?php endwhile; endif;  //end loop?>
        <?php wp_reset_postdata() ?>

      </div>

    </div>

    <div id="home-projects">

      <h3>CoSSaR Current Projects</h3>

      <div class="home-projects-content">
        <?php $query = new WP_Query( array( "category_name" => "projects", "post_type" => "post", "posts_per_page" => 1));  ?>

        <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>

          <?php the_post_thumbnail( 'large' ); ?>
          <?php echo get_excerpt(); ?>




        <?php endwhile; endif;  //end loop?>
        <?php wp_reset_postdata() ?>
      </div>

      <div class="home-projects-content">
        <?php $query = new WP_Query( array( "category_name" => "projects", "post_type" => "post", "posts_per_page" => 1, "offset" => 1));  ?>

        <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>

          <?php the_post_thumbnail( 'large' ); ?>
          <?php echo get_excerpt(); ?>




        <?php endwhile; endif;  //end loop?>
        <?php wp_reset_postdata() ?>

      </div>


    </div>

    <div id="home-director">

      <h3><a href="<?php echo get_permalink( get_page_by_path( 'about/staff' ) ) ?>">CoSSaR Director Mark Haselkorn</a></h3>


      <?php $query = new WP_Query( array( "name" => "director", "post_type" => "page" ));  ?>

      <?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); //start loop ?>

        <div id="director-image"><?php the_post_thumbnail( 'large' ); ?></div>
        <div id="director-p"><?php the_content(); ?></div>



      <?php endwhile; endif;  //end loop?>
      <?php wp_reset_postdata() ?>


    </div>

  </section>


  <div id="homepage-sidebar">
	<div class="search"><?php get_search_form();?>
	</div>
    <div id="home-categories">

      <div id="home-categories-h3"><h3>Categories</h3></div>

      <ul>
        <?php wp_list_categories( 'title_li' ); ?>
      </ul>
    </div>

    <div id="home-widget-item">
      <div id="home-news-h3"><h3>Latest News</h3></div>
      <ul>

        <?php rewind_posts(); ?>
        <?php query_posts('showposts=3'); ?>
        <?php while (have_posts()) : the_post(); ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

          <?php the_post_thumbnail('medium'); ?>

          <?php echo get_excerpt(); ?>

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
