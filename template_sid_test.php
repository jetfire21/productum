<?php
/*
Template Name: Sid Test
*/
?>


<?php get_header(); ?>
			
			<div id="main" class="grid_8">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>					
			
		<div class="entry">
        
        <h1><?php the_title(); ?></h1>
				
		<?php the_content(); ?>
        
        </div>
     
  <?php endwhile; endif; ?>
				

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
			
			<div id="sidebar" class="grid_8">
<!-- СЛАЙДШОУ -->

                        <?php get_template_part('slideshow');   ?>
<!-- СЛАЙДШОУ END -->


			<div class="h_2_pale2">Новинки продукции</div>


                    <div class="grid_4 alpha home_sidebar">

                            <?php woo_get_image('image','220','100'); ?>
							<?php query_posts('cat=4&showposts=3'); ?>
							<?php while (have_posts()) : the_post(); ?>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>&w=200&h=110&zc=1&q=65" alt="<?php the_title(); ?>" class="products_img" style="margin:0" width="200px" height="110px"></a>
							<h4 style="margin:0"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
							<?php endwhile; ?>

                    </div>
					   <div class="grid_4 alpha home_sidebar">

                            <?php woo_get_image('image','220','100'); ?>
                            	<?php query_posts('cat=3&showposts=3'); ?>
							<?php while (have_posts()) : the_post(); ?>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>&w=200&h=110&zc=1&q=65" alt="<?php the_title(); ?>" class="products_img" style="margin:0" width="200px" height="110px"></a>
							<h4 style="margin:0"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
							<?php endwhile; ?>
                    </div>

                    <div class="fix"></div>



			</div><!-- / #sidebar -->
<?php get_footer(); ?>
