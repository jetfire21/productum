<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/" <?php if( is_page("about") || is_page('training') || is_page('how-to-buy') ) echo 'class="as21-search-about-page"';?>>
	<fieldset>
		<!--<h3><label for="s"><?php _e('Search for'); ?></label></h3>-->
		<p><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Поиск товара.." />
		<!-- <input type="submit" id="searchsubmit" value="Поиск" /> -->
		<button type="submit" id="searchsubmit" value="" class="icon icon-search"></button>
		</p>
	</fieldset>
</form>
