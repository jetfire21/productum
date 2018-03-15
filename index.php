<?php get_header(); ?>
			
			<div id="main" class="grid_8">
			
				<?php $more1 = get_option('woo_more1_ID'); ?>

    			<?php query_posts('page_id=' . $more1); ?>
	
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>					
			
		<div class="entry">
        
        <h1><?php the_title(); ?></h1>
				
		<?php the_content(); ?>
        
        </div>
     
  <?php endwhile; endif; ?>
				
                <?php
        
        		$showcarousel = get_option('woo_show_carousel');
    
        		if($showcarousel){ include(TEMPLATEPATH . '/includes/category_carousel.php'); }
                
    			?>
			
			</div><!-- / #main -->

			<ul id="showcase">
<!--				<div class="h_2_pale">Виды углеволокна</div>
				<li>
                	<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/img-product-01.jpg" width="96" height="76" alt="" /><br><b>Twill Silver</b><br>под глянцевым лаком</a>
               </li>
				<li>
                	<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/img-product-02.jpg" width="96" height="76" alt="" /><br><b>Plain Black</b><br>под глянцевым лаком</a>
               </li>
			   <li>
                	<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/img-product-03.jpg" width="96" height="76" alt="" /><br><b>Plain Black</b><br>под матовым полиуретановым лаком</a>
               </li>
			   <li>
                	<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/img-product-04.jpg" width="96" height="76" alt="" /><br><b>Twill Silver</b><br>под матовым полиуретановым лаком</a>
               </li> -->
			</ul> 
			
<?php get_sidebar("home"); ?>
<?php get_footer(); ?>