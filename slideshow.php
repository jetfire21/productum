<?php
    $args = array(
        'meta_key' => 'sid_slider',
        'meta_value' => '1',
        'numberposts' => -1,
        );
    $slides = get_posts($args);

    if ( !empty($slides) ) :  ?>
        <div class="h_2_pale2">Наши работы</div>
        <div id="slide_sid">

        <?php foreach( $slides as $post ) :
            setup_postdata($post);
        ?>
        <?php if (get_post_meta($post->ID,'sid_slider_img',true) and get_post_meta($post->ID,'sid_slider_img',true)!=''): ?>
         <?php
             $img_455_250 = post_custom('sid_slider_img');
             $img_455_250 = preg_replace("/.jpg$/i", "-455x250.jpg", $img_455_250);
             $img_455_250 = preg_replace("/.png$/i", "-455x250.png", $img_455_250);
          ?>

            <div class="post_slider">
                <h3><a href="<?php the_permalink(); ?>" style="color: #FF0000;"><?php the_title(); ?></a></h3>
                <a href="<?php the_permalink(); ?>">
                <!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('sid_slider_img');?>&w=455&h=250&zc=1&q=65" alt="<?php the_title(); ?>" width="455" height="250"> -->
                <!--<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('sid_slider_img');?>" alt="<?php the_title(); ?>" width="455" height="250">-->
                <img src="<?php echo get_option('home'); ?>/<?php echo $img_455_250;?>" alt="<?php the_title(); ?>" width="455" height="250">
                </a>
            </div>
        <?php endif; ?>
        <?php endforeach; ?>
        </div><!-- #slideshow-->
    <?php endif; ?>


