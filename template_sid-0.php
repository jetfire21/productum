<?php
/*
Template Name: Sid-0
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
  <style>
  .grid_mm {
	  margin: -10px;
  }
  .recovered {
	  margin-top: -40px;
  }
  .training-list {
	  padding: 20px 30px 0 90px;
  }
  .block-icons-top {
	  padding: 0 20px;
  }
  </style>
<div class="grid_mm">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



		<?php the_content(); ?>


  <?php endwhile; endif; ?>


		
</div>



<?php get_footer(); ?>
