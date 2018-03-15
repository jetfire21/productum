<?php get_header(); ?>

	<div id="main" class="grid_16">
			
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		
				
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
			
	</div><!-- / #main -->
<!--
<1php get_sidebar(); 1>
<1php get_sidebar("2"); 1>-->
<div class="clear"></div>
<?php get_footer(); ?>