    <footer>
      <div id="widget-area" class="container">
        <div class="row">  
          <div class="col-md-3 col-sm-6 paddingtop-bottom ">
            <div>
                <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
            </div>
         </div>

         <div class="col-md-3 col-sm-6 paddingtop-bottom">
            <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
         </div>

         <div class="col-md-3 col-sm-6 paddingtop-bottom">
            <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
         </div> 

         <div class="col-md-3 col-sm-6 paddingtop-bottom">
            <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
         </div>
        </div>
      </div>
  </footer>

    <div class="blog-footer">
        <div class="social-footer">
            <ul class="social-network social-circle">

                <?php 
                	$fb_link = get_theme_mod('pc_facebook_link'); 
					if (!empty($fb_link) ) {
					?>
                <li><a href="<?php echo $fb_link; ?>" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <?php } ?>

                <?php 
                	$twitter_link = get_theme_mod('pc_twitter_link'); 
					if (!empty($twitter_link) ) {
					?>
                <li><a href="<?php echo $twitter_link; ?>" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <?php } ?>
                <?php 
                	$google_link = get_theme_mod('pc_google_link'); 
					if (!empty($google_link) ) {
					?>
                <li><a href="
                	<?php echo "$google_link"; ?>
                " class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <?php } ?>

                <?php 
                	$linkedin_link = get_theme_mod('pc_linkedin_link'); 
					if (!empty($linkedin_link) ) {
					?>
                <li><a href="<?php echo $linkedin_link; ?>" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <?php } ?>
                <?php 
                	$youtube_link = get_theme_mod('pc_youtube_link'); 
					if (!empty($youtube_link) ) {
					?>
                <li><a href="<?php echo $youtube_link; ?>" class="icoYouTube" title="YouTube"><i class="fa fa-youtube"></i></a></li>
                <?php } ?>
 
                <li><a href="<?php echo bloginfo('rss2_url'); ?>" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
    
            </ul>
        </div>
            <p class="footer-copyright">&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
            <a href="#">Back to top</a>
          </p>
    </div>
        <?php wp_footer(); ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    </body>
</html>
