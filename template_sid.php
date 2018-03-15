<?php
/*
Template Name: Sid
*/
?>
<?php get_header(); ?>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script type="text/javascript">// <![CDATA[
 $(document).ready(function() {		
 	    $("a.ancLinks").click(function() {
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top + "px"
        }, {
            duration: 500
        });
        return false;
    });
  });
// ]]></script>
  <script>
  $(function() {
    $( "#tabs-bay" ).tabs();
  });
  </script>	
<div id="main" class="grid_16 <?php if( is_page("about") ) echo 'as21-page-about';?> ">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="entry4">

		<?php the_content(); ?>


  <?php endwhile; endif; ?>


			</div><!-- / #main -->
</div>

<?php 
// var_dump(is_page("about"));
get_footer(); 
?>
