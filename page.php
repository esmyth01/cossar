<?php
/**
* The template for displaying all pages.
*
* page.php
*/

get_header(); ?>

<!-- loop to pull content for all pages -->
<div id="main-content">
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


      <?php
      $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );

      foreach( $mypages as $page ) {
        $excerpt = $page->post_excerpt;
        if ( ! $excerpt ) // Check for empty page
        continue;

        $excerpt = apply_filters( 'the_excerpt', $excerpt );
        ?>
        <h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
        <div class="entry"><?php echo $excerpt; ?></div>
        <?php
      }
      ?>
      
    </ul>



  </div>


</section>

<aside>
  <?php get_sidebar();?>
</aside>




<?php get_footer(); ?>
