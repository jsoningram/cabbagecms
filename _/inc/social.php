<?php

function cabbagecms_share_bar() {

    $pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    $pin_info = get_the_title() . ' - ' . get_the_content();
    $pindetails = strip_tags($pin_info);
    
    ?>
    
<ul class="share" style="list-style:none;">
    <li class="g-share"><g:plusone size="medium" href="<?php the_permalink(); ?>?ref=googleplus"></g:plusone></li>
    <li class="fb-share"><div class="fb-like" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div></li>
    <li class="twitter-share"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-url="<?php echo wp_get_shortlink(); ?>&ref=t" data-counturl="<?php the_permalink(); ?>" data-via="<?php echo get_option('cabbagecms-twitter'); ?>">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li>
    <li><a class="pin-it-button" href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID).'?ref=pinterest'); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php echo $pindetails; ?>">Pin It</a></li><!-- end pinit -->
    <li><script src="//platform.linkedin.com/in.js" type="text/javascript"></script><script type="IN/Share" data-counter="right" data-url="<?php echo get_permalink($post-ID); ?>?ref=linkedin"></script></li>
</ul> <!-- /.share -->
    
<?php }

function cabbagecms_connect() {
    
    global $cabbagecms_facebook;
    global $cabbagecms_twitter;
    global $cabbagecms_youtube;
    global $cabbagecms_pinterest;
    global $cabbagecms_instagram;
    global $cabbagecms_googleplus;
    global $cabbagecms_linkedin;
    $cabbagecms_facebook_yes = get_option('cabbagecms-facebook');
    $cabbagecms_twitter_yes = get_option('cabbagecms-twitter');
    $cabbagecms_youtube_yes = get_option('cabbagecms-youtube');
    $cabbagecms_pinterest_yes = get_option('cabbagecms-pinterest');
    $cabbagecms_instagram_yes = get_option('cabbagecms-instagram');
    $cabbagecms_googleplus_yes = get_option('cabbagecms-googleplus');
    $cabbagecms_linkedin_yes = get_option('cabbagecms-linkedin');
    $cabbagecms_company_name_yes = get_option('blogname');
    ?>

<ul class="social-icons" style="list-style:none;">
    <?php if ($cabbagecms_facebook_yes) : ?><li class="facebook"><a href="<?php echo $cabbagecms_facebook; ?>" class="facebook-icon" target="_blank">Like <?php echo $cabbagecms_company_name; ?> on Facebook</a> </li><?php endif; ?>
    <?php if ($cabbagecms_twitter_yes) : ?><li class="twitter"><a href="<?php echo $cabbagecms_twitter; ?>" class="twitter-icon" target="_blank">Follow <?php echo $cabbagecms_company_name; ?> on Twitter</a> </li><?php endif; ?>
    <?php if ($cabbagecms_googleplus_yes) : ?><li class="googleplus"><a href="<?php echo $cabbagecms_googleplus; ?>" rel="publisher" class="googleplus-icon" target="_blank">Circle <?php echo $cabbagecms_company_name; ?> on Google+</a> </li><?php endif; ?>
    <?php if ($cabbagecms_pinterest_yes) : ?><li class="pinterest"><a href="<?php echo $cabbagecms_pinterest; ?>" class="pinterest-icon" target="_blank">Follow <?php echo $cabbagecms_company_name; ?> on Pinterest</a> </li><?php endif; ?>
    <?php if ($cabbagecms_youtube_yes) : ?><li class="youtube"><a href="<?php echo $cabbagecms_youtube; ?>" class="youtube-icon" target="_blank">Subscribe to <?php echo $cabbagecms_company_name; ?> on YouTube</a> </li><?php endif; ?>
    <?php if ($cabbagecms_instagram_yes) : ?><li class="instagram"><a href="<?php echo $cabbagecms_instagram; ?>" class="instagram-icon" target="_blank">Follow <?php echo $cabbagecms_company_name; ?> on Instagram</a> </li><?php endif; ?>
    <?php if ($cabbagecms_linkedin_yes) : ?><li class="linkedin"><a href="<?php echo $cabbagecms_linkedin; ?>" class="linkedin-icon" target="_blank">Follow <?php echo $cabbagecms_company_name; ?> on LinkedIn</a> </li><?php endif; ?>
</ul> <!-- /.social-icons -->
    

<?php }