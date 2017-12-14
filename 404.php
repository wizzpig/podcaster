<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

    <div class="clear"></div>
    <h1 class="title"><?php _e( '404 Not Found', 'podcaster' ); ?></h1>

        <div class="col-md-4">
            <div class="clear"></div>
                <div class="error-image">
                    <img src="<?php echo get_bloginfo('template_url').'/img/404-homer.jpg'; ?>">
                </div>
        </div>

        <div id="error-message" class="col-md-8">
            <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'twentythirteen' ); ?></h2>
            <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'podcaster' ); ?></p>
            <div class="clear"></div>
            <?php get_search_form(); ?>
            <div class="clear"></div>
        </div>
    </div>


<?php get_footer(); ?>


