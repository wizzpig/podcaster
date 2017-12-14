<?php
/**
 * Archive template for client testimonials
 */
 
get_header(); ?>

<div class="row">
    <div class="col-sm-8">
        <div class="testimonial-title">
            <h1>What People are Saying...</h1>
        </div>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="testimonial-wrap">
                <a href="<?php the_permalink(); ?>">
                <?php the_title( '<h3>', '</h3>' ); ?>
                <?php the_post_thumbnail(); ?>
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
    </div>
        
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>