<?php get_header(); ?>

	<div id="main" class="grid_8">

	<?php
	 //echo 'page----'; var_dump(username_exists('jetfire112')); 
	// $mail = 'as_fds35@ya.ru';
	// $user_mail = explode('@', $mail);
	// var_dump($user_mail[0]);
	// echo substr('qwety', 0,1);
	?>

		<?php if( is_page( 'user-data' ) ){ 
			 $cur_user = wp_get_current_user();
			if ( 0 != $cur_user->ID ) echo '<ul><li><a href="?a=logout">Выход</a></li><li> <a href="/my-orders">Мои заказы</a></li></ul>';}
		 ?>

			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<!--<h2 class="single"><0php the_title(); 0></h2>-->
				
		<?php the_content(); ?>
		<?php endwhile; endif; ?>

	<?php
	if( is_page( 'my-orders' ) ){

		 // echo 'orders<br>';
		 $check_user_orders = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->postmeta} WHERE post_id='112' AND meta_key='as21_user_orders' ");
		 // var_dump($check_user_orders);
		 // echo current_time('mysql');
		 // echo get_option( 'as21_cur_order' );
		 global $wpdb;
		 // $q = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->postmeta} WHERE post_id='2' AND meta_key='as21_user_orders' ");
		 // var_dump($q);
		 // if($q) echo 'yes'; else echo 'no';
		 // echo '<hr>';

		 $cur_user_id = get_current_user_id() ? (int)get_current_user_id() : 0;
		 if($cur_user_id){

		 	$num_orders = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->postmeta} WHERE post_id='{$cur_user_id}' AND meta_key='as21_user_orders' ");
		 	// var_dump($num_orders);
		 	$i = 1;

		 	if( !empty($num_orders) ){




			 	//$products_data = $wpdb->get_results("SELECT * FROM {$wpdb->posts} WHERE post_author=3 OR post_author=4 AND post_type='as21_orders' "); 
			 	// $part_sql = substr($part_sql, 0,-2);
			 	// $products_data = $wpdb->get_results("SELECT * FROM {$wpdb->posts} WHERE ".$part_sql." AND post_type='as21_orders' "); 

			 	if( $_GET['order_id'] ){

				   $order_id = (int)$_GET['order_id'];
				 	$products_data = $wpdb->get_results("SELECT * FROM {$wpdb->posts} WHERE post_author={$order_id} AND post_type='as21_orders' "); 

				 	// deb_last_query();
				 	// var_dump($products_data);
				 	echo "<h3>Заказ № {$order_id}</h3>";
					$html .= '<table>
								<tr><th></th><th class="title">Название</th><th>Цена</th><th>Кол-во</th><th>Сумма</th><th></th></tr>';

				 // 	foreach ($products_data as $product):
					// 	$price = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key='Price' AND post_id='".$product->post_parent."'");
					// 	$img_src = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key='image1' AND post_id='".$product->post_parent."'");
					// 	$prod_data = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM {$wpdb->posts} WHERE ID=%d AND post_type=%s ", (int)$product->post_parent,'post' ) );
					// 	// deb_last_query();
					// 	// var_dump($prod_data);
					// 	$img_src = preg_replace("/^wp/i", "\/wp", $img_src);

					// 	$price = preg_replace("/[^0-9]/", '', $price);
					// 	$prod_sum = $product->comment_count * $price;	
					// 	$total_sum += $prod_sum; 	
					// 	// <td ><img class="product_img" src="http://'.$_SERVER['HTTP_HOST'].$img_src.'" alt=""></td>
					// 	$html .= '<tr id="p_id-'.$prod_id.'">
					// 				<td></td>
					// 				<td class="title"><a href="'.$prod_data->guid.'">'.$prod_data->post_title.'</a></td>
					// 				<td>'.$price.' р.</td>			
					// 				<td>'.$product->comment_count.'</td>
					// 				<td class="prod_sum">'.$prod_sum.' р.</td>
					// 				<td></td>
					// 			</tr>';
					// endforeach;		

				 	foreach ($products_data as $product):
						$price = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key='Price' AND post_id='".$product->post_parent."'");
						$img_src = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key='image1' AND post_id='".$product->post_parent."'");
						$prod_data = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM {$wpdb->posts} WHERE ID=%d AND post_type=%s ", (int)$product->post_parent,'post' ) );

						// deb_last_query();
						// alex_debug(0,1,'',$prod_data);
						$options = rwmb_meta( 'as21_prod_options','',$prod_data->ID );
						// alex_debug(0,1,'product',$product);
						// alex_debug(0,1,'options',$options);
						$option = $prod_data->post_category;
						 $title = $options[$option]['title']; 
						$price = (int)$options[$option]['price'];

						$img_src = preg_replace("/^wp/i", "\/wp", $img_src);

						$price = preg_replace("/[^0-9]/", '', $price);
						$prod_sum = $product->comment_count * $price;	
						$total_sum += $prod_sum; 	
						// <td ><img class="product_img" src="http://'.$_SERVER['HTTP_HOST'].$img_src.'" alt=""></td>
						$html .= '<tr id="p_id-'.$prod_id.'">
									<td></td>
									<td class="title"><a href="'.$prod_data->guid.'">'.$title.'</a></td>
									<td>'.$price.' р.</td>			
									<td>'.$product->comment_count.'</td>
									<td class="prod_sum">'.$prod_sum.' р.</td>
									<td></td>
								</tr>';
					endforeach;

					$html .= "<tr class='row_total'> <td></td> <td></td> <td></td> <td>Итого: </td><td class='total_sum'>{$total_sum} р.</td><td></td> </tr>";

			 		$html .= '</table>';
			 		echo $html;
		 		}else{
			 		 $num_orders = substr($num_orders, 0,-1);
				 	$num_orders = explode(',', $num_orders);

				 	foreach ($num_orders as $order) {
				 		$part_sql .= ' post_author='.$order.' OR';
				 		echo "<a href='?order_id=".$order."'>".$i.". Заказ №".$order."</a><br>";
				 		$i++;
				 	}
		 		}
		 	}else{
		 		echo "<h3>Заказов еще нет</h3>";
		 	}

		 }




	/*
	 	$html .= "</table>A";;
	// echo $html;
        // $admin_email = 'info@graphite-pro.ru';
        $email = 'freerun-2012@yandex.ru';
        $email2 = 'info@graphite-pro.ru';
        $admin_email = 'rafael2013santi@gmail.com';
        $dop_email = '';
        $multiple_to_recipients = array(
            $email,
            $dop_email
        );
        $subject 	= 'Заказ на сайте';
        $admin_msg= '
                <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
                <html>
                <head></head>
                <body>
				'.$html.'
                </body>
                </html>
                ';
                $headers  = 'MIME-Version: 1.0'."\r\n";
			    $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
			    $headers .= 'From: Graphite PRO <'.$admin_email.'>'."\r\n";

		 if( wp_mail($email, $subject, $admin_msg, $headers)) echo $res['mail'] = "письмо отправлено!";
		 // // if( wp_mail($email2, $subject, $admin_msg, $headers)) echo "письмо отправлено!";
		 else echo $res['mail'] = "письмо не отправлено";
		 */
	}
	?>		

	</div><!-- / #main -->

<?php get_sidebar(); ?>
<?php get_sidebar("2"); ?>
<div class="clear"></div>
<?php get_footer(); ?>