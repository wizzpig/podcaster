<!-- This file displays the Author page for posts -->

<?php get_header(); ?>
    <div class="row">
        <div class="col-sm-8 blog-main">
            <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));?>
                <div class="section-author">
                    <h2>Posts by <?php echo $curauth->nickname; ?>:</h2>
                </div>
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
<?php get_footer(); ?>

