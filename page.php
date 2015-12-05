<?php
/**
* The template for displaying all pages.
*
* page.php
*/

get_header(); ?>

<!-- loop to pull content for all pages -->

<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

<h2 id="page-title"><?php the_title(); ?></h2>

<section>



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




    <?php get_footer(); ?>
