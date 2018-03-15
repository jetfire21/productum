<?php
/*
Template Name: Sid Form
*/
session_start();
// if(isset($_POST["img_captcha"]) && isset($_SESSION["img_captcha"])) {

// if($_POST["img_captcha"] == $_SESSION["img_captcha"])
//  $_SESSION["message_captcha"]='<font color=green><b>Защитный код верен!</b></font>';
// else
//  $_SESSION["message_captcha"]='<font color=red><b>Неверный защитный код!</b></font>';
// header("Location: message_captcha.php");
// }
?>


<?php get_header(); ?>

			<div id="main" class="grid_16">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="entry">

        <h1><?php the_title(); ?></h1>

		<?php the_content(); ?>
<?php

// print_r($_POST);

?>


<script type="text/javascript">
jQuery(document).ready(function () {

    if (jQuery('#sid_radio1').attr('checked')=='checked') jQuery('#sid_passport_hide').css('display', 'none');
    else jQuery('#sid_passport_hide').css('display', 'block');
    jQuery('#sid_radio1').click(function() {
        jQuery('#sid_passport_hide').hide();
    });
    jQuery('#sid_radio2').click(function() {
        jQuery('#sid_passport_hide').show();
    });

	    jQuery('.sid_zakaz_form').validate({
    	    rules: {
    	        sid_fio: {
    	            required: true
    	        },
                sid_phone: {
    	            required: true
    	        },
                sid_adress: {
    	            required: true
    	        },
                sid_email: {
    	            required: true ,
                    email: true
    	        },
                sid_adress: {
    	            required: true
    	        },
                sid_passp_seri: {
    	            required: true
    	        },
                sid_passp_numb: {
    	            required: true
    	        },
                sid_passp_kem: {
    	            required: true
    	        },
                sid_passp_date: {
    	            required: true
    	        },
                sid_captcha: {
    	            required: true
    	        },

    		    agree: "required"
    	    },
            messages: {
                sid_fio:  "Заполните обязательное поле",
                sid_phone:  "Заполните обязательное поле",
                sid_adress:  "Заполните обязательное поле",
                sid_passp_seri:  "Заполните обязательное поле",
                sid_passp_numb:  "Заполните обязательное поле",
                sid_passp_kem:  "Заполните обязательное поле",
                sid_passp_date:  "Заполните обязательное поле",
                sid_captcha:  "Заполните обязательное поле",
                sid_email:  { required: "Заполните обязательное поле",
				                email: "Формат e-mail неправильный!"
                },
		    }
	    });



});

</script>
<?php //if(!isset($_POST["img_captcha"]) or !isset($_SESSION["img_captcha"])):?>
        <div class="sid_form ">
            <?php if( function_exists('sid_wp_mail') and $sid_resp = sid_wp_mail()): ?>
            <div class="sid_response">
                <h3><?php  echo $sid_resp ; ?></h3>
            </div>
            <?php endif; ?>
            <form action="" method="post" class="sid_zakaz_form">
            <div class="grid_8">
                <h3>Контактные данные</h3>
                <p>
                    <label for="sid_fio">Ф.И.О.*</label><br>
                    <input type="text" class="form-control" id="sid_fio" name="sid_fio" value="<?=htmlspecialchars(stripslashes( $_POST['sid_fio'])) ?>" />
                </p>
                <p>
                    <label for="sid_phone">Телефон *</label><br>
                    <input type="text" class="form-control" id="sid_phone" name="sid_phone" value="<?=htmlspecialchars(stripslashes( $_POST['sid_phone'])) ?>" />
                </p>
                <p>
                    <label for="sid_email">E-mail *</label><br>
                    <input type="text" class="form-control" id="sid_email" name="sid_email" value="<?=htmlspecialchars(stripslashes( $_POST['sid_email'])) ?>" />
                </p>
                <p>
                    <label for="sid_adress">Адрес доставки с индексом *</label><br>
                    <input type="text" class="form-control" id="sid_adress" name="sid_adress" value="<?=htmlspecialchars(stripslashes( $_POST['sid_adress'])) ?>" />
                </p>

                <p>
                    <h3>Предполагаемые транспортные компании</h3>
                    <label for="sid_chb1">Деловые линии</label> <input type="checkbox" class="checkbox" name="Деловые линии" id="sid_chb1" <?php if(isset($_POST['Деловые линии'])) echo ' checked="checked"'; ?> />&nbsp;&nbsp;
                    <label for="sid_chb2">ПЭК</label> <input type="checkbox" class="checkbox" name="ПЭК" id="sid_chb2"<?php if(isset($_POST['ПЭК'])) echo ' checked="checked"'; ?>  />&nbsp;&nbsp;
                    <label for="sid_chb3">Автотрейдинг</label> <input type="checkbox" class="checkbox" name="Автотрейдинг"<?php if(isset($_POST['Автотрейдинг'])) echo ' checked="checked"'; ?>  id="sid_chb3" />
                </p>
                </div>
                <div class="grid_7">

                    <h3>Доставка</h3>
                <p>
                    <label for="sid_radio1">по Москве</label> <input type="radio" class="radio" name="sid_dostavka" id="sid_radio1" checked="checked" value="по Москве" />&nbsp;&nbsp;
                    <label for="sid_radio2">по России</label> <input type="radio" class="radio" name="sid_dostavka" id="sid_radio2"  value="по России"  />
                </p>
                <div id="sid_passport_hide" style="display: none;" >
                <p>
                    <label><strong>Паспортные данные</strong></label><br>
                    <label for="sid_passp_seri">Серия *</label><br>
                    <input type="text" class="form-control" id="sid_passp_seri" name="sid_passp_seri" value="" />
                </p>
                <p>
                    <label for="sid_passp_numb">Номер *</label><br>
                    <input type="text" class="form-control" id="sid_passp_numb" name="sid_passp_numb" value="" />
                </p>
                <p>
                    <label for="sid_passp_kem">Кем выдан *</label><br>
                    <input type="text" class="form-control" id="sid_passp_kem" name="sid_passp_kem" value="" />
                </p>
                <p>
                    <label for="sid_passp_date">Дата выдачи *</label><br>
                    <input type="text" class="form-control" id="sid_passp_date" name="sid_passp_date" value="" />
                </p>


                </div>
                </div>
                <div class="grid_16">
                <h3>Лист заказа</h3>

                <table class="sid_table" >
                    <tr>
                        <th class="numb_th" >№</th>
                        <th class="art_th">Артикул</th>
                        <th  class="name_th">Наименование</th>
                        <th class="col_th">Количество</th>
                        <th class="comm_th">Комментарий</th>
                    </tr>
                    <?php for($i=1;$i<21;++$i) : ?>
                    <tr>
                        <td class="sid_table_numb"><?php echo $i.'. '; ?></td>
                        <td><input type="text" class="form-control" name="sid_articul[]" value="<?=htmlspecialchars(stripslashes( $_POST['sid_articul'][$i-1])) ?>" /></td>
                        <td><input type="text" class="form-control" name="sid_title[]" value="<?=htmlspecialchars(stripslashes( $_POST['sid_title'][$i-1])) ?>" /></td>
                        <td class="col_td"><input type="text" class="form-control" name="sid_count[]" value="<?=htmlspecialchars(stripslashes( $_POST['sid_count'][$i-1])) ?>" /></td>
                        <td><input type="text" class="form-control" name="sid_comment[]" value="<?=htmlspecialchars(stripslashes( $_POST['sid_comment'][$i-1])) ?>" /></td>
                    </tr>

                    <?php endfor; ?>

                </table>
                 <p class="captcha">
                    <label for="sid_captcha">Код: *</label><br>
                     <img src="http://<?php echo $_SERVER['HTTP_HOST'];?>/captcha/img_captcha.php" border="0" alt="">
                    <input type="text" style="width: 70px;display: inline;vertical-align: top; margin: 0 10px;" class="form-control" id="sid_captcha" name="sid_captcha" value="" />
                </p>

                <p style="text-align: center;"><button class="sid_btn" onClick="_gaq.push(['_trackEvent', 'Knopka', 'zakaz']); yaCounter22359052.reachGoal('oformitzakazzakazat');">Заказать</button> </p>
                 <!-- <input type="text" name="img_captcha"> -->
                </div>
                <input type="hidden" name="sid_post_zakaz" value="submit" />
            </form>
                 <?php
					// echo "message".$_SESSION["message_captcha"];
					// $_SESSION["message_captcha"]='';
					// echo "img_c".$_SESSION["img_captcha"]
				   ?>

<?php
   // endif;
?>

        </div>
        <!-- end sid_form -->

        </div>

  <?php endwhile; endif; ?>


			</div><!-- / #main -->

			<ul id="showcase">

			</ul>


<?php get_footer(); ?>
