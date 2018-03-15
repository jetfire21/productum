<?php get_header(); ?>
<?php //get_sidebar("2"); ?>
<?php get_sidebar(); ?>

<!--         

<div id="main" class="grid_8">

    <h1>Результаты поиска:</h1>
                <div class="entry">                 
                    <p style="margin-bottom:0;">По запросу <strong><?php echo wp_specialchars($s); ?></strong> найдены:</p>              
                </div>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
                <div class="entry">
                
                    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                    <p class="post_meta"><span>Posted in <?php the_category(', ') ?>. Written by <?php the_author() ?> on <?php the_time('F jS, Y') ?></p>
                    
                    <?php the_excerpt() ?>
                    
                </div>
            
				<?php endwhile; else: ?>        
                      <div class="entry">   <p>Sorry, no posts matched your criteria.</p>    </div>    
				<?php endif; ?>
                				
				<div class="more_entries">
					<?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>
				</div> 

        </div>

    -->     

    <?php // new layout ?>

    <div id="main" class="a21_catalog  grid_12 ">
        <h1>Результаты поиска:</h1>

        <?php $col = 1; ?>

        <!-- начало цикла 1 --> 
        <?php if(have_posts()): ?>
            <div class="entry">                 
                <p style="margin-bottom:0;">По запросу <strong>"<?php echo wp_specialchars($s); ?>"</strong> найдены:</p>              
            </div>

            <?php while (have_posts()) : the_post(); ?>
                <?php $sch = 0; ?>
                <?php if ($col == 1) echo "<div class=\"row\">"; ?>

                <div class="col<?php echo $col;?>" id="post-<?php the_ID(); ?>">


                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                        <!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>&w=128&h=128&zc=1&q=65" alt="<?php the_title(); ?>" class="products_img" style="margin-bottom:5px" width="128px" height="128px"></a> -->
                            <!--
                            <img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>" alt="<?php the_title(); ?>" class="products_img" style="margin-bottom:5px" width="128px" height="128px">
                        -->
                        <?php
                        $img_128_128 = post_custom('Image1');
                        $img_128_128 = preg_replace("/.jpg$/i", "-128x128.jpg", $img_128_128);
                        $img_128_128 = preg_replace("/.png$/i", "-128x128.png", $img_128_128);
                        $img = get_option('home')."/".$img_128_128;
                        if( !file_exists($img) ) $img_128_128 = post_custom('Image1');
                        ?>

                        <img src="<?php echo get_option('home'); ?>/<?php echo $img_128_128;?>" alt="<?php the_title(); ?>" class="products_img" style="margin-bottom:5px" width="128px" height="128px">
                    </a>
                    <p class="a21_prod_title" style="color: #252525;font-size: 1.2em;font-weight: bold;line-height: 1em; margin: 0 0 15px;" id="post-<?php the_ID(); ?>">
                        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
                    </p>


                    <div class="wrap_buy_stock">

    
    <?php if (post_custom('Available')=='да') { ?>
    <!-- <img src="<?php echo bloginfo('template_url'); ?>/images/tick_circle.png" width=16 height=16>&nbsp;<b>Есть в наличии!</b> -->
    <!-- <img src="<?php echo bloginfo('template_url'); ?>/images/a21/check-2.png" width=16 height=16>&nbsp;<span class="a21-stock">Есть в наличии!</span> -->
    <i class="icon-ok-circled" aria-hidden="true"></i>&nbsp;<span class="a21-stock">Есть в наличии!</span>


    <?php } ?>
    <?php if (post_custom('Available')=='нет') { ?><b>Нет в наличии</b><?php } ?>
    <?php if (post_custom('Available')=='на заказ') { ?><b>На заказ</b><?php } ?></p>

    <p class="a21-product-price">
        <?php if (post_custom('Price')) { ?>
        Цена: <b style="font-size:16px; color:gray; font-weight:bold;"><?php echo post_custom('Price');?> руб
    </b>
</p>
<?php } ?>
                        <a href="#add_product_to_cart" class="a21_popup-modal product-buy gradient" data-img-url="<?php echo get_option('home'); ?>/<?php echo $img_128_128;?>" data-prod-id="<?php echo get_the_ID();?>" data-title="<?php the_title(); ?>" data-price="<?php echo post_custom('Price');?>">Купить</a>
    <br>
</div>
</div>


<div id="add_product_to_cart" class="white-popup-block mfp-hide">
    <h1>Товар добавлен в корзину</h1>
    <p class="a21_mfp_left"></p>
    <p class="a21_mfp_right"></p>
    <div class="clear"></div>
    <a href="#" id="continue_buy">Продолжить покупки</a>
    <a href="#" id="a21_oformit_zakaz"class="product-buy">Оформить заказ</a>
    <!-- <p><a class="popup-modal-dismiss" href="#">Dismiss</a></p> -->
</div>

<div id="a21_big_cart" class="white-popup-block mfp-hide">
    <span class="popup-modal-dismiss">x</span>
    <h1>Корзина</h1>
    <div class="wrap_cart_prod"></div>
<!--    <table>
        <tr>
            <td></td><td>Название</td><td>Цена</td><td>Кол-во</td><td>Сумма</td><td></td>
        </tr>
        <tr>
            <td><img src="http://graphite-pro.dev/wp-content/uploads/2016/10/y2klay.jpg" alt="Промышленный  пластилин Y2-Klay для ЧПУ" class="product_img"></td>
            <td> <a class="black_link" href="/catalog/20090">Индивидуальные номера на электромобиль</a></td>
            <td>1 500 р.</td>
            <td>
            <input style="width: 20px; text-align: center;" onkeyup="javascript: fChangeCount(47512,20090)" id="count_20090" class="cart_input" type="text" value="1">
            </td>
            <td>5 999 р.</td>
            <td></td>
        </tr>
    </table>
-->

</div>

<?php 
//if ($col == 4) {echo "</div>"; $sch = 1;} if($col == 1) {$col = 2;}  else { if($col != 1) { if($col == 4) {$col = 1;}  if($col == 3) {$col =  4;} if($col == 2) {$col =  3;}} } 
if ($col == 3) {echo "</div>"; $sch = 1; $col = 1;}  else{ $col++;}
?>
<!-- конец цикла 2 -->  
<?php endwhile; ?>  
<?php else: ?>
  <div class="entry">   <p>По вашему запросу <strong>"<?php echo wp_specialchars($s);?></strong>" ничего не найдено </p>    </div>    
<?php endif; ?>
<!-- 
<div class="more_entries">
    <?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>
</div> 
-->

</div><!-- / #main -->
</div>
<?php get_footer(); ?>