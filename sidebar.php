<div id="sub-navigation" class="widget">

<?php if(get_post_meta($post->ID, 'Quote', true)) : ?>
<blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote>

<?php endif; ?>
<!--begin sub nav-->

<h3 class="sub-navigation-title"><?php echo get_the_title($post->post_parent); ?></h3>

<ul class="sub-navigation-items"><?php

if ($post->post_parent) {
  wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __('')));

} else {

  wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));

}
?></ul>

<?php dynamic_sidebar();?>
</div>
