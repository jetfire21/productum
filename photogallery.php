<?php get_header(); ?>

	<div id="main" class="grid_16">
	
	<?php
/*
Template Name: Photogallery template
*/
?>
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<h2 class="single"><?php the_title(); ?></h2>
				
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
			
	</div><!-- / #main -->
<!--
<1php get_sidebar(); 1>
<1php get_sidebar("2"); 1>-->
<div class="clear"></div>
<?php get_footer(); ?>