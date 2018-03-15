	alex_debug(0,1,"a21_cart_get_products session",$_SESSION);


	if( empty($_SESSION['products'])) exit;
	// if( !empty($_SESSION['products'])):

	// alex_debug(0,1,"prod_ids",$prod_ids);
	// alex_debug(0,1,"prod_ids",array_unique($_SESSION['products']));
	// $params = array("post__in"=> array(11302,10932));
	$params = array("post__in"=> array_unique($_SESSION['products']));
	// $params = array("post__in"=> array_unique($prod_ids));
	$products = new WP_Query($params);
	// alex_debug(0,1,"",$products);

	// session_destroy();

	?>
	$html = "<table>";
	<?php if ($products->have_posts()) : ?>

		<tr>
			<td></td><td class="title">Название</td><td>Цена</td><td>Кол-во</td><td>Сумма</td><td></td>
		</tr>

		<?php while ($products->have_posts()) : $products->the_post(); ?>

			<?php
			global $wpdb;
			$price = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key='Price' AND post_id='".get_the_ID()."'");
			$_SESSION['prod_sum'] = $_SESSION['prod_sum']+$price;
			$img_src = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key='image1' AND post_id='".get_the_ID()."'");
			$img_src = preg_replace("/^wp/i", "\/wp", $img_src);
			?>
			<tr>
			<td ><img class="product_img" src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$img_src;?>" alt=""></td>
			<td class="title"><a href="<?php echo get_permalink();?>"><?php the_title(); ?></a></td>
			<td><?php echo $price?> р.</td>
			<td>
			<input style="width: 20px; text-align: center;" onkeyup="javascript: fChangeCount(47512,20090)" id="count_20090" class="cart_input" type="text" value="1"/>
			</td>
			<td>2300 р. <?php echo $_SESSION['prod_sum'];?></td>
			</tr>

		<?php endwhile; ?>
		 <tr> <td></td> <td></td> <td></td> <td>Итого: </td><td><?php echo $_SESSION['prod_sum'];?> р.</td><td></td> </tr>

	<?php else:  ?>
		<p>  <?php _e( 'No Products'); ?> </p>
	<?php endif;  ?>
	<?php wp_reset_postdata(); ?>
	</table>
	<a href="#" id="a21_oformit_zakaz"class="product-buy">Оформить заказ</a>

	<?php //endif; // check $_SESSION['products']))

	exit;