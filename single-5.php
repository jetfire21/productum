<?php include (TEMPLATEPATH . '/sm_header.php'); ?>

<div id="content">
		
			
			
			<div id="cat_title"><div class="h_1">ДЕКОРАТИВНАЯ ОТДЕЛКА</div><div class="title_desc">интерьеров автомобилей</div>
			</div>
			
		
			<div id="contentWrap" class="container_16">
				
			<div id="main" class="grid_12">
			
			<!--<h4 class="breadcrumbs"><#php the_category(' &raquo; '); #></h4>-->
						
		
						
						<?php while (have_posts()) : the_post(); ?>
                
						<div class="entry">
						<h1 class="single"><?php the_title(); ?></h1>
						
						<a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>" rel="shadowbox[<?php the_ID(); ?>]">
						<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>&w=455&h=250&zc=1&q=70" alt="<?php the_title(); ?>" width="455px" height="250px" class="products_img"> -->
						<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>" alt="<?php the_title(); ?>" width="455px" height="250px" class="products_img">
						</a>
							<div style="float:left; width:190px">
							
							
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
