<?php
/**
 * The Template for displaying all single posts.
 *
 * single.php
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

	        <?php

	        if ( comments_open() || '0' != get_comments_number() )
	            comments_template();
	        ?>

		<?php endwhile; ?>

    <h2>This is a single post page</h2>

	</main><!-- #main -->

<?php get_footer(); ?>
