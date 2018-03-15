	<div id="sidebar" class="grid_4">
            
			<?php 
			$cats = array('3'); // создаем массив и вносим родительскую рубрику
			$categories = get_categories('child_of=3'); 
			foreach ($categories as $cat) {
			$cats[] = $cat->cat_ID; // пополняем массив IDами деткок
			}

			// var_dump($cats);
			// echo "<hr>";
			// var_dump(is_category($cats));
			// var_dump(in_category($cats));
			
			$products = array('4'); // создаем массив и вносим родительскую рубрику
			$categories = get_categories('child_of=4'); 
			foreach ($categories as $cat) {
			$products[] = $cat->cat_ID; // пополняем массив IDами деткок
			}
			
			if (is_category($cats) || in_category($cats) || $_GET['s'] ) { ?>
			<ul>
			<li style="padding:10px 0 0 10px;">
			<div class="h_3">Каталог материалов<br><font style="font-size:12px">для производства карбона</font></div></li>
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
    'definition' => '1' // name of the setting definition
);

			$focal->widget($args, $instance); ?>
			<!--<1php wp_list_categories ('&title_li=&child_of=3') 1>-->
			
<!-- Ссылка на PDF-файл ---------------------------------------- -->			
			<?php $recent = new WP_Query("cat=119&post_type=post");  ?>
            <?php if ($recent->have_posts()) : ?>
                <ul>
                <?php while($recent->have_posts()) : $recent->the_post();?>
			        <!--<li class="current-cat">
			            <a href="http://sats.ru/graphite/wp-content/uploads/2012/09/Blankpochtovogoperevoda.pdf" style="color:white;line-height:13px;"><img src="<?php bloginfo('template_url'); ?>/images/acroread.png" width="24" height="24" alt="PDF" style="float:left;padding:3px 5px; font-size:11px;">Скачать полный каталог в формате PDF</a>
                    </li>-->
                    <li class="current-cat">
                        <?php the_content(); ?>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
	<?php wp_reset_query(); ?>		
			
			<?php } elseif (is_category($products) || in_category($products)) { ?>
			
			<ul>
			<li style="padding:10px 0 0 10px;">
			<h3>Каталог продукции<br><font style="font-size:12px">от нашей компании</font></h3></li>
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
    'definition' => '2' // name of the setting definition
);

			$focal->widget($args, $instance); ?>
			<!--<1php wp_list_categories ('&title_li=&child_of=4') 1>-->
						
			<?php } else { ?>
			
				<?php if (is_page('about')) { ?>
				
				<h3 style="margin-top:11px;">Вакансии<br><font style="font-size:12px">в Graphite-PRO</font></h3>
				На данный момент в нашей компании открыта вакансия кладовщика. Опыт работы не обязателен. 

Резюме отправляйте по адресу:<br><a href="mailto:info@graphite-pro.ru">info@graphite-pro.ru</a>
				<?php } ?>
				
				
			
			<p><!--This is some generic text to describe all other category pages,-->
			</p>
			<?php } ?>
			
			
			
			<?php 
			if ( in_category( 'materials' )) { ?>
				&nbsp;
			<?php } elseif ( in_category( array( 'products', 'toyota' ) )) { ?>
				&nbsp;
			<?php } else { ?>
				&nbsp;
			<?php } ?>
            <?php if (is_page('about')): ?>

                <a href="#" id="print_link" style="font-size: 16px;"><img src="<?php bloginfo('template_url'); ?>/images/print.gif" width="16" height="16" alt="" /> Печатать</a>

            <?php endif; ?>			
			<!-- Add you sidebar manual code here to show above the widgets -->

            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) )  ?>		           

			<!-- Add you sidebar manual code here to show below the widgets -->
			
	</div><!-- / #sidebar -->
			