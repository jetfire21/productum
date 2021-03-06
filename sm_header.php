<?php // страница наши работы, технологии ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="yandex-verification" content="7d132f9b13f44ad6" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title>
	<?php include($_SERVER['DOCUMENT_ROOT']."/seo.php");
	if(isset($seotitle) AND $seotitle!=''){echo $seotitle;}
	
	elseif ($_SERVER['REQUEST_URI']=='/technology/carbon-manufacture') echo 'Профессиональное оборудование для производства карбона';
	elseif ($_SERVER['REQUEST_URI']=='/decorate/carbon-roof') echo 'Карбоновая крыша для вашего авто';
	elseif ($_SERVER['REQUEST_URI']=='/decorate/carbon-details') echo 'Изготовление карбоновых деталей на заказ';
	elseif ($_SERVER['REQUEST_URI']=='/decorate/carbon-inserts') echo 'Карбоновые накладки'; 
	    elseif ($_SERVER['REQUEST_URI']=='/technology/carbon-manufacture-2') echo 'Оборудование для производства карбона, изготовление карбоновых деталей ';

	elseif ($_SERVER['REQUEST_URI']=='/category/materials/epoxy-resins/yuvelirnie-smoly') echo 'Ювелирная смола купить в Москве, эпоксидная ювелирная смола для бижутерии по низким ценам'; 
	elseif ($_SERVER['REQUEST_URI']=='/decorate/carbon-panels') echo 'Карбоновые панели';
	elseif ($_SERVER['REQUEST_URI']=='/decorate/carbon-floors') echo 'Карбоновые полы';
	elseif ($_SERVER['REQUEST_URI']=='/technology/%D1%82%D0%B5%D1%85%D0%BD%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F-%D1%84%D0%BE%D1%80%D0%BC%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F-%D0%BF%D1%80%D0%B5%D0%BF%D1%80%D0%B5%D0%B3%D0%BE%D0%BC') echo 'Препреги, технология формования препрегом';
	elseif ($_SERVER['REQUEST_URI']=='/category/decorate')  { echo 'Отделка карбоном в Москве, карбоновое покрытие салона автомобиля'; $seo_desc ="Профессиональный карбоновый тюнинг: покрытие автомобиля, обтяжка карбоном салона, карбоновая отделка других элементов и деталей авто по конкурентным ценам";} 
	else {
	if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
	<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Search Results<?php } ?>
	<?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Author Archives<?php } ?>
	<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
	<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
	<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?>
	<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php the_time('F'); ?><?php } ?>
	<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;<?php  single_tag_title("", true); } }
	}
	 ?>
    </title>
	<?php if ($seo_desc) { 	?><meta name="description" content="<? echo $seo_desc;?> " /><?php } ?>
	<?php wp_head(); ?>
    <?php if ( is_single() ) wp_enqueue_script( 'comment-reply' ); ?>
    
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/960.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" media="all" />
	<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" /><![endif]-->
    <!--[if lt IE 7]>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/js/pngfix.js"></script>
	<![endif]-->
    
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	
	<!--<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/js/animatedcollapse.js">-->

<!-- 	/* **********************************************
	* Animated Collapsible DIV v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
	* This notice MUST stay intact for legal use
	* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
	********************************************** */
 -->
	</script>
	
<!-- 	<script type="text/javascript">
animatedcollapse.addDiv('info_order', 'hide=1')	
animatedcollapse.init()
</script>
 -->	
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" /> 
  <!-- Google Analytics -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(["_setAccount", "UA-20409917-1"]);
_gaq.push(["_addOrganic", "blogs.yandex.ru", "text"]);
_gaq.push(["_addOrganic", "go.mail.ru", "q"]);
_gaq.push(["_addOrganic", "gogo.ru", "q"]);
_gaq.push(["_addOrganic", "nova.rambler.ru", "query"]);
_gaq.push(["_addOrganic", "rambler.ru", "words"]);
_gaq.push(["_addOrganic", "nigma.ru", "s"]);
_gaq.push(["_addOrganic", "search.qip.ru", "query"]);
_gaq.push(["_addOrganic", "webalta.ru", "q"]);
_gaq.push(["_addOrganic", "aport.ru", "r"]);
_gaq.push(["_addOrganic", "liveinternet.ru", "ask"]);
_gaq.push(["_addOrganic", "gde.ru", "keywords"]);
_gaq.push(["_addOrganic", "quintura.ru", "request"]);
_gaq.push(["_addOrganic", "poisk.ru", "text"]);
_gaq.push(["_addOrganic", "km.ru", "sq"]);
_gaq.push(["_addOrganic", "bigmir.net", "q"]); 
_gaq.push(["_addOrganic", "akavita.by", "z"]);
_gaq.push(["_addOrganic", "tut.by", "query"]);
_gaq.push(["_addOrganic", "all.by", "query"]); 
_gaq.push(["_addOrganic", "i.ua", "q"]);
_gaq.push(["_addOrganic", "meta.ua", "q"]);
_gaq.push(["_addOrganic", "online.ua", "q"]);
_gaq.push(["_addOrganic", "a.ua", "s"]);
_gaq.push(["_addOrganic", "ukr.net", "search_query"]);
_gaq.push(["_addOrganic", "search.com.ua", "q"]);
_gaq.push(["_addOrganic", "search.ua", "query"]); 
_gaq.push(["_addOrganic", "search.babylon.com", "q"]);
_gaq.push(["_addOrganic", "icq.com", "q"]);
_gaq.push(["_addOrganic", "search.winamp.com", "q"]); 
_gaq.push(["_trackPageview"]);
(function() {
	var ga = document.createElement("script");
	ga.type = "text/javascript";
	ga.async = true;
	ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";
	var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<!-- /Google Analytics -->
<link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/js/magnific-popup/magnific-popup.css">
<script src="<?php echo get_template_directory_uri();?>/js/magnific-popup/jquery.magnific-popup.min.js"></script>

</head>

<body class="custom">

	<div id="wrap">

		<ul class="skip">
			<li><a href="#nav">Skip to Navigation</a></li>
			<li><a href="#content">Skip to Content</a></li>
		</ul>

		<div id="header">
            
            <div id="logo"><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>
/" title="Graphite PRO"><img src="http://<?php echo $_SERVER['HTTP_HOST'];?>
/wp-content/themes/productum/images/logo-graphite-final.png" alt="" /></a></div> 
			
			<a id="tagline" href="tel:+7(495)721-85-59" style="color:#fff;font-style:normal;font-family: 'Rajdhani', sans-serif;font-size: 2.4em;padding: 10px 23px;"><span style="color:#777777">(495)</span>  721-85-59 
            <?php //<1php bloginfo('description'); ?> 
            </a>
			

<span id="sid_zakaz"><a onclick="yaCounter22359052.reachGoal('oformitzakaz');" href="http://<?php echo $_SERVER['HTTP_HOST'];?>
/zakaz" target="_blank">Оформить заказ</a></span>
<div class="h_mail">
info@graphite-pro.ru
</div>
<div class="h_addr">
Россия, Москва,<br>ул.Сигнальный проезд д. 16 строение 21
</div>



        
			 <ul id="nav">
			
			<!--<#php if(is_home()) echo ' class="current_page_item"'; ?><a href="<#php bloginfo('url'); #>">Home</a></li>-->
            <?php if ( get_option('woo_blog_permalink') ) { ?><li <?php if ( is_category() || is_search() || is_single() || is_tag() || is_search() || is_archive() ) { ?> class="current_page_item" <?php } ?>><a href="<?php echo get_option('home'); echo get_option('woo_blog_permalink'); ?>" title="Blog"><span>Blog</span></a></li><?php } ?>
			<?php 
            if (get_option('woo_cat_nav')) 
                wp_list_categories('orderby=order&depth=3&title_li=&exclude='.get_option('woo_nav_exclude')); 
            else
                wp_list_pages('sort_column=menu_order&depth=3&title_li=&exclude='.get_option('woo_nav_exclude')); 
            ?>
			<li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/training">Обучение</a></li>
			<li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/how-to-buy">Как купить</a></li>
			<li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/photogallery">Фотогалерея</a></li>
			<li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/about">Контакты</a></li>
			</ul>



		</div><!-- / #header -->
		