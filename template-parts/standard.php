<?php
/* =======================================================================================
 
	 Theme sub-page for archives being "Standard Layout with Sidebar"
	 Loaded and used in index.php.
	 
	 Shows the episodes as a list.
	 
 ===================================================================================== */
?>

      <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="podcaster-archive">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part('content', get_post_format()); ?>
            <?php endwhile; ?>
          </div><!-- /.podcaster-archive -->
          <div class="podcaster-pagination">
            <?php pagination_bar(); ?>
          </div  >
            <?php else : ?>
            <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
        </div><!-- /.blog-main -->
          
    <?php get_sidebar(); ?>