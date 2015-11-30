<?php
/**
* The template for displaying all pages.
*
* page.php
*/

get_header(); ?>

<!-- loop to pull content for all pages -->
<section>

  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <img src="<?php bloginfo('template_directory'); ?>/images/placeholder-page.png" alt="pageholder" class="placeholder-page"/>
  <?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>


    <?php the_content(); ?>


  <?php endwhile; endif;  //end loop?>


  <div id="mobile-nav-div">

    <ul class="sub-navigation-mobile">

      <?php $children = get_pages(array('child_of' => $post->ID));

      foreach ($children as $child) { ?>

        <li><a href="<?php echo get_permalink($child->ID); ?>"><?php echo $child->post_title; ?></a></li>

          <p><?php echo $child->post_excerpt; ?></p>

          <?php } ?>

        </ul>

      </div>


    </section>

    <aside>
      <?php get_sidebar();?>
    </aside>
    <h2>This is a standard page</h2>



    <?php get_footer(); ?>
