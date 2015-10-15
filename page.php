<?php
/**
 * The template for displaying all pages.
 *
 * page.php
 */

get_header(); ?>

<main id="main" class="site-main" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

	<?php endwhile; ?>
  
  <h2>This is a standard page</h2>

</main><!-- #main -->

<?php get_footer(); ?>
