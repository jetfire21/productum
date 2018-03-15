			<div id="sidebar" class="grid_8">
<!-- СЛАЙДШОУ -->
			
                        <?php get_template_part('slideshow');   ?>
<!-- СЛАЙДШОУ END -->

			
			<div class="h_2_pale2">Новые продукты</div>
<div style="display: none;">
				<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=11430649&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/11430649/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="11430649" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->
</div>		 
                    <div class="grid_4 alpha home_sidebar">

                            <?php woo_get_image('image','220','100'); ?>
							<?php query_posts('cat=4&showposts=3'); ?> 
							<?php while (have_posts()) : the_post(); ?>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>&w=200&h=110&zc=1&q=65" alt="<?php the_title(); ?>" class="products_img" style="margin:0" width="200px" height="110px"> -->
							<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>" alt="<?php the_title(); ?>" class="products_img" style="margin:0" width="200px" height="110px">
							</a>
							<p style="margin:0; color: #2f3032;font-size: 1.17em;font-weight: bold;line-height: 1.43em;"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></p>
							<?php endwhile; ?>
                       
                    </div>
					   <div class="grid_8 alpha home_sidebar">
<?php $sch = 0; ?>
                            <?php woo_get_image('image','220','100'); ?>

                        	<?php query_posts('cat=3&showposts=8'); ?> 
							<?php while (have_posts()) : the_post(); ?>
			                 <?php
			                     $img_200_110 = post_custom('Image1');
			                     $img_200_110 = preg_replace("/.jpg$/i", "-200x110.jpg", $img_200_110);
			                     $img_200_110 = preg_replace("/.png$/i", "-200x110.png", $img_200_110);
			                  ?>

							<div style="width: 220px; float: left;">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<!--
							<img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>&w=200&h=110&zc=1&q=65" alt="<?php the_title(); ?>" class="products_img" style="margin:0" width="200px" height="110px">
							 -->
							<img src="<?php echo get_option('home'); ?>/<?php echo $img_200_110;?>" alt="<?php the_title(); ?>" class="products_img" style="margin:0" width="200px" height="110px">
							
							</a>

							<p style="margin:0; color: #2f3032;font-size: 1.17em;font-weight: bold;line-height: 1.43em;"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></p>
</div>
<?php ++$sch; ?>
<?php if($sch==2) : ?>
                    <div class="fix"></div>
<?php $sch = 0; ?>
<?php endif; ?>

							<?php endwhile; ?>
                    </div>
                    
                    <div class="fix"></div>
                  
               

			</div><!-- / #sidebar -->
			