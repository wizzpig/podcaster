<?php
/**
 * Template Name: Testimonials
 * Description: A Page Template for displaying Testimonials.
 */
 
get_header(); ?>

    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="podcaster-single">
                <?php the_title( '<h1>', '</h1>' ); ?>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="testimonial-wrap">
                        <?php the_post_thumbnail('thumbnail', array('class' => 'client-photo')); ?>
                            <div class="post-excerpt">
                            <?php echo the_content(); ?>
                            </div>
                            <?php $client_name = get_post_meta(get_the_ID(), 'client_name', true);
                            if (!empty($client_name)):
                            ?>
                    <div class="client_name">
                        <?php echo $client_name; ?>
                    </div>
                        <?php endif; ?>
                        <?php $company = get_post_meta(get_the_ID(), 'company', true);
                        if (!empty($company)):
                        ?>
                    <div class="company">
                        <?php echo $company; ?>
                    </div>
                        <?php endif; ?>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
            </div><!-- /.blog-main -->
        </div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>