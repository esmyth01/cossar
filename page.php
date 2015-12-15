<?php
/**
* The template for displaying all pages.
*
* page.php
*/

get_header(); ?>

<!-- loop to pull content for all pages -->
<div id="header-box">
<div id="header-text">
<span class="header"><?php $parent = array_reverse(get_post_ancestors($post->ID));
$first_parent = get_page($parent[0]);
$heading = ucfirst($first_parent->post_name);
echo $heading; ?></span>
</div>
</div><!-- end header-box -->
<div id="main-content">

<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
  <?php if(function_exists('bcn_display'))
  {
    bcn_display();
  }?>
</div>
 <h2><?php the_title(); ?></h2>

<section>



  <?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>

    <?php the_post_thumbnail( 'large' ); ?>
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
  <div id="homepage-sidebar">

    <div class="search">
      <?php get_search_form();?>
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



  </div><!--end homepage-sidebar-->


</aside>




<?php get_footer(); ?>
