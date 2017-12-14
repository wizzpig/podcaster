<section id="testimonials-posts" class="container"><!-- Testimonials Posts -->
    <div id="pod" class="col-md-12">
        <h2>What People are Saying...</h2>

            <?php
            $args = array(
            'post_type' => 'testimonials',
            'posts_per_page' => 1,
            'orderby' => 'rand'
            );
            $testimonials = new WP_Query( $args );
            // The Loop
            if ( $testimonials->have_posts() ) {
            while ( $testimonials->have_posts() ) {
            $testimonials->the_post(); ?>
            <?php the_post_thumbnail('thumbnail', array('class' => 'client-photo')); ?>
            <?php the_content(); ?>
            <?php $client_name = get_post_meta(get_the_ID(), 'client_name', true);
            if (!empty($client_name)):
            ?>
        
        <p class="client_name">
            <?php echo $client_name; ?>
        </p>
        <?php endif; ?>
        <?php $company = get_post_meta(get_the_ID(), 'company', true);
        if (!empty($company)):
        ?>
        <p class="company">
            <?php echo $company; ?>
        </p>
    <?php endif; ?>
    <?php }
    } else { ?>
    <h3>No testimonials found</h3>
    <?php } ?>
    <?php wp_reset_postdata();?>


</section><!-- Testimonials Posts -->



