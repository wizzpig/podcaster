      <div id="social-bar-container">
        <div class="container">
                <div id="top-bar-box" class="col-md-12">
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
        </div>
      </div>
      