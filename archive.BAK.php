<?php get_header(); ?>
Is the backup being used?
      <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="podcaster-archive">
                 <?php if(have_posts()) : ?>
                 <?php while(have_posts()) : the_post(); ?>
                 <?php get_template_part('content',get_post_format()); ?>
                 <?php endwhile; ?>
                 <?php else : ?>
                 <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
            </div><!-- /.blog-main -->
        </div>
          
        
          
<?php get_sidebar(); ?>
<?php get_footer(); ?>
