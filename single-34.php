<?php include (TEMPLATEPATH . '/sm_header.php'); ?>

<div id="content">
		
			
			
			<div id="cat_title"><div class="h_1">ДЕКОРАТИВНАЯ ОТДЕЛКА</div><div class="title_desc">интерьеров dddddddddавтомобилей</div>
			</div>
			
		
			<div id="contentWrap" class="container_16">
			
			<!-- #sidebar -->
			<div id="sidebar" class="grid_4">
          	<ul>
			<li style="padding:10px 0 0 10px;">
			<div class="h_3">Каталог декоративной отделки<br><font style="font-size:12px">от нашей компании</font></div></li>
			</ul>
			<?php $focal = new FoldingCategoryList();
$args = array(
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => ''
);
 
$instance = array(
    'title' => '',
    'definition' => '3' // name of the setting definition
);

			$focal->widget($args, $instance); ?>
			<!--<1php wp_list_categories ('&title_li=&child_of=4') 1>-->
			</div><!-- / #sidebar -->
						
			<div id="main" class="grid_8">
			
			<!--<h4 class="breadcrumbs"><#php the_category(' &raquo; '); #></h4>-->
						
		
						
						<?php while (have_posts()) : the_post(); ?>
                
						<div class="entry">
						<h1 class="single"><?php the_title(); ?></h1>
						
						<a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>" rel="shadowbox[<?php the_ID(); ?>]">
						<img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>&w=455&h=250&zc=1&q=70" alt="<?php the_title(); ?>" width="455px" height="250px" class="products_img">
						</a>
							<div style="float:left; width:190px">
							<div class="h_1">Цена: <?php echo post_custom('Price');?> руб</div>
							<div class="h_2">Наличие: <?php if (post_custom('Available')) { ?><img src="<?php echo bloginfo('template_url'); ?>/images/tick_circle.png" width=16 height=16>&nbsp;<font style="color:green">Есть</font><?php } else { ?><a href="javascript:animatedcollapse.toggle('info_order')">заказать!</a><?php } ?></div>
<!-- ВИДЕО -->
<?php if ($sid_video_code = trim(get_post_meta($post->ID,'sid_video_code',true)) and $sid_video_code!='') : ?>
    <?php $sid_video_size_w = (int)trim(get_post_meta($post->ID,'sid_video_size_w',true));
          $sid_video_size_h = (int)trim(get_post_meta($post->ID,'sid_video_size_h',true));
    if ($sid_video_size_w>460) $sid_video_size_w=460;
    if ($sid_video_size_w=='') $sid_video_size_w=460;
    if ($sid_video_size_h=='') $sid_video_size_h=200;
    ?>
    <div id="sid_video_block" style="margin: 10px 0;">

        <object style="height: <?=$sid_video_size_h ?>px; width: <?=$sid_video_size_w ?>px"><param name="movie" value="http://www.youtube.com/v/<?=$sid_video_code ?>?version=3"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><embed src="http://www.youtube.com/v/<?=$sid_video_code ?>?version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" height="<?=$sid_video_size_h ?>" width="<?=$sid_video_size_w ?>"></object>

    </div>
<?php endif; ?>				
<!-- ВИДЕО END -->
							<?php if (post_custom('Weight')) { ?><strong>Вес:</strong> <?php echo post_custom('Weight');?> гр.<br><?php } ?>
							<?php if (post_custom('Cover')) { ?><strong>Покрытие:</strong> <?php echo post_custom('Cover');?><?php } ?>
						
							<?php if (post_custom('Image2')) { ?>
							<a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image2');?>" rel="shadowbox[<?php the_ID(); ?>]"><img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image2');?>&w=180&h=110&zc=1&q=65" alt="<?php the_title(); ?>" width="180px" height="110px" class="products_img" ></a>
							<?php if (post_custom('Image3')) { ?><a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image3');?>" rel="shadowbox[<?php the_ID(); ?>]"><img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image3');?>&w=180&h=110&zc=1&q=65" alt="<?php the_title(); ?>" width="180px" height="110px" class="products_img" ></a><?php } ?>
							<?php if (post_custom('Image4')) { ?><a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image4');?>" rel="shadowbox[<?php the_ID(); ?>]"><img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image4');?>&w=180&h=110&zc=1&q=65" alt="<?php the_title(); ?>" width="180px" height="110px" class="products_img" ></a><?php } ?>
							<?php if (post_custom('Image5')) { ?><a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image5');?>" rel="shadowbox[<?php the_ID(); ?>]"><img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image5');?>&w=180&h=110&zc=1&q=65" alt="<?php the_title(); ?>" width="180px" height="110px" class="products_img" ></a><?php } ?>
							<?php if (post_custom('Image6')) { ?><a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image6');?>" rel="shadowbox[<?php the_ID(); ?>]"><img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image6');?>&w=180&h=110&zc=1&q=65" alt="<?php the_title(); ?>" width="180px" height="110px" class="products_img" ></a><?php } ?>
							<?php if (post_custom('Image7')) { ?><a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image7');?>" rel="shadowbox[<?php the_ID(); ?>]"><img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image7');?>&w=180&h=110&zc=1&q=65" alt="<?php the_title(); ?>" width="180px" height="110px" class="products_img" ></a><?php } ?>
							<?php if (post_custom('Image8')) { ?><a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image8');?>" rel="shadowbox[<?php the_ID(); ?>]"><img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image8');?>&w=180&h=110&zc=1&q=65" alt="<?php the_title(); ?>" width="180px" height="110px" class="products_img" ></a><?php } ?>
							<?php } ?>
							
						</div>
							<div class="products_cat_desc" style="margin-left:200px; color:black;">
							
							<?php the_content(); ?>
							
							
							
							</div>
							
							<div style="clear:both"></div>
							
						
						</div>
				
						<?php endwhile; ?>
				
						<div class="more_entries">
						<?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>
						</div>				 
				
			
			</div><!-- / #main -->


<?php get_sidebar("2"); ?>
<?php get_footer(); ?>
