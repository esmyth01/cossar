<?php
/**
 * This the basic file for displaying pages.
 *
 * index.php
 */

get_header(); ?>
<div id="header-box">
<div id="header-text">
<span class="header">CoSSaR Blog</span>
</div>
</div><!-- end header-box -->
<div id="main-content">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

 <h2>Blog</h2>
<section>

  <!-- loop to pull blog content -->


<?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>

<article class="post-excerpt">

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<small>

Posted on <?php the_time('F j, Y'); ?>
by <?php the_author(); ?>
in <?php the_category(', '); ?>

</small>
<?php the_post_thumbnail( 'medium' ); ?>
<p><?php echo get_content(); ?></p>


</article>
<?php endwhile; endif;  //end loop?>



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




  </div><!--end homepage-sidebar--></aside>






<?php get_footer(); ?>
