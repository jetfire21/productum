<?php get_header(); ?>
			<?php get_sidebar(); ?>
						<?php
						$cats = array('3'); // создаем массив и вносим родительскую рубрику (id=3 - материалы)
						$categories = get_categories('child_of=3');
						foreach ($categories as $cate) {
						$cats[] = $cate->cat_ID; // пополняем массив IDами деткок
						}

						$products = array('4'); // создаем массив и вносим родительскую рубрику
						$categories = get_categories('child_of=4');
						foreach ($categories as $cate) {
						$products[] = $cate->cat_ID; // пополняем массив IDами деткок
						}
                        ?>

			<div id="main" class="a21_catalog <?php if (is_category($cats) || in_category($cats)) echo ' grid_12 '; else echo ' grid_8 '; ?>">
			
			<p class="breadcrumbs" style="font-size: 1.2em;font-weight: bold;line-height: 1em;margin: 0 0 15px;"><?php echo(get_category_parents($cat, TRUE, ' &raquo; ')); ?></p>


			<?php
if ($_SERVER['REQUEST_URI'] == '/category/materials/polyurethane-varnish') {

         echo '<h1>Полиуретановые лаки</h1>';
     } 
else if ($_SERVER['REQUEST_URI'] == '/category/materials/gelcoat/gelcoat-gelcoat-materials') {

         echo '<h1>Готовые комплекты</h1>';
     }
else if ($_SERVER['REQUEST_URI'] == '/category/materials/epoxy-resins/ready-kit') {

         echo '<h1>Готовые комплекты эпоксидных смол</h1>';
     }
else if ($_SERVER['REQUEST_URI'] == '/category/materials/glass-fabric/rukava') {

         echo '<h1>Рукава из стеклоткани</h1>';
     }
else if ($_SERVER['REQUEST_URI'] == '/category/materials/carbon-fabric/braid') {

         echo '<h1>Карбоновые рукава</h1>';
     }
if (($_SERVER['REQUEST_URI'])=="/category/decorate/bmv/5-series-sedan") { echo '<h1>5 Series Sedan</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/decorate/bmv") { echo '<h1>BMW</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/decorate/bmv/bmw-118") { echo '<h1>BMW-118</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/decorate/bmv/bmw-39") { echo '<h1>BMW-39</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/decorate/bmv/bmw-60") { echo '<h1>BMW-60</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/decorate/honda") { echo '<h1>Honda</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/decorate/jaguar") { echo '<h1>Jaguar</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/decorate/mercedes") { echo '<h1>Mercedes</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/decorate/porsche") { echo '<h1>Porsche</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/decorate/toyota") { echo '<h1>Toyota</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/decorate/yamaha") { echo '<h1>Yamaha</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/carbon-fabric/non-crimp-fabrics") { echo '<h1>Без плетения</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/vacuum-technology/vacuum-tools-pumps") { echo '<h1>Вакуумные насосы</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/vacuum-technology") { echo '<h1>Вакуумные технологии</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/fillers/fibrous") { echo '<h1>Волокнистые</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/decorate-fabric") { echo '<h1>Декоративные ткани</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/tools/for-mould-construction") { echo '<h1>Для изготовления форм</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/tools/tools-laminate") { echo '<h1>Для ламинирования</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/tools/dlya-raskroya") { echo '<h1>Для раскроя</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/epoxy-resins/dobavki") { echo '<h1>Добавки</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/vacuum-technology/zhertvennye-tkani-peel-ply") { echo '<h1>Жертвенные ткани / Peel ply</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/izgotovlenie-osnastki") { echo '<h1>Изготовление оснастки</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/tools") { echo '<h1>Инструменты</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/carbon-semi/composite-semi-rods") { echo '<h1>Карбоновые прутки</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/glues") { echo '<h1>Клеи</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/carbon-semi") { echo '<h1>Композитные полуфабрикаты</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials") { echo '<h1>Материалы</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/carbon-fabric/multiaksialnye-tkani") { echo '<h1>Мультиаксиальные ткани</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/carbon-starter-kit") { echo '<h1>Наборы карбон «Сделай Сам»</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/fillers") { echo '<h1>Наполнители</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/decorate/page/2") { echo '<h1>Наши работы</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/carbon-fabric/non-woven") { echo '<h1>Нетканный</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/tools/tools-knifes") { echo '<h1>Ножницы, ножи</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/vacuum-technology/plenki") { echo '<h1>Пленки</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/poliesterovye-smoly") { echo '<h1>Полиэстеровые смолы</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/vacuum-technology/vpityvaushie-materialy-setki") { echo '<h1>Проводящие материалы / Сетки</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/separators") { echo '<h1>Разделительные составы</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/sandvich") { echo '<h1>Сендвичные материалы</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/silicone-compounds-materials") { echo '<h1>Силиконовые компаунды</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/glass-fabric/glass-tapes") { echo '<h1>Стеклоленты</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/glass-fabric/glass-fabric-glass-fabric") { echo '<h1>Стеклоткань</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/fillers/spherical") { echo '<h1>Сферические</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/epoxy-resins/termic-resins") { echo '<h1>Термостойкие эпоксидные смолы</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/technology") { echo '<h1>Технологии</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/fillers/thixotropy-agents") { echo '<h1>Тиксотропные агенты</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/carbon-aramid") { echo '<h1>Угле-арамидный микс</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/carbon-fabric/carbon-fibre-tape") { echo '<h1>Углеленты</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/carbon-fabric/fabrics") { echo '<h1>Углеткани</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/vacuum-technology/fitingi-aksessuary") { echo '<h1>Фитинги / Аксессуары</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/epoxy-resins/himostoykie-smoly") { echo '<h1>Химостойкие эпоксидные смолы</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/epoxy-resins/epoksidnye-klei") { echo '<h1>Эпоксидные клеи</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/epoxy-resins/fill-resins") { echo '<h1>Эпоксидные смолы для заливки</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/epoxy-resins/laminating-resins") { echo '<h1>Эпоксидные смолы для ламинирования</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/materials/vacuum-technology/fitingi-aksessuary/razjem-dlya-vacuumnogo-shlanga-hose-connector") { echo '<h1>Разъем для вакуумного шланга Hose connector Артикул № 390150-1</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/bazaltovye-tkani") { echo '<h1>Базальтовые ткани</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/vacuum-technology/germetiziruyushie-zhguty") { echo '<h1>Герметизирующие жгуты</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/epoxy-resins/kolerovochnye-pasty") { echo '<h1>Колеровочные пасты</h1>';}
else if (($_SERVER['REQUEST_URI'])=="/category/materials/epoxy-resins/yuvelirnie-smoly") { echo '<h1>Эпоксидная смола для бижутерити</h1>';}



?>


						<?php
						if (is_category($products) || in_category($products)) { ?>
						<!-- начало условия категории продукция -->
						
	<!-- начало цикла 1 -->		
	<?php if ($_SERVER['REQUEST_URI']=="/category/products") {?>
	<h1 class="single">Карбоновая защита картера</h1>
	<p>В автомобилестроении и тюнинге карбон используется не только как декоративный, но и как защитный материал, повышающий в несколько раз устойчивость изделия к термическим, химическим и механическим воздействиям. Карбоновая защита картера пришла на смену алюминиевым и титановым пластинам, которые имели различные минусы, были более тяжелыми, что сказывалось на аэродинамических свойствах автомобиля. Самое главное в защите двигателя – устойчивость к физическому воздействию, проще говоря – ударам. Карбоновая защита картера не имеет аналогов по сочетанию основных характеристик. У нас вы сможете заказать защиту картера из карбона для любой модели автомобиля.</p><br />
	<?php } ?>
	
	
	<?php while (have_posts()) : the_post(); ?>

						<div class="post">
						
							<div style="float:left; width:190px">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>&w=180&h=110&zc=1&q=65" alt="<?php the_title(); ?>" class="products_img" width="180px" height="110px"></a> -->
							<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>&w=180&h=110&zc=1&q=65" alt="<?php the_title(); ?>" class="products_img" width="180px" height="110px"></a>
							</div>
						
							<div class="products_cat_desc" style="margin-left:200px">
							<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<?php if (post_custom('Available')=='да') { ?>
<!-- <img src="<?php echo bloginfo('template_url'); ?>/images/tick_circle.png" width=16 height=16>&nbsp;<b>Есть в наличии!</b> -->
<!-- <img src="<?php echo bloginfo('template_url'); ?>/images/a21/check-2.png" width=16 height=16> -->
<i class="icon-ok-circled" aria-hidden="true"></i>&nbsp;<span class="a21-stock">Есть в наличии!</span>
<?php } ?>
<?php if (post_custom('Available')=='нет') { ?><b>Нет в наличии</b><?php } ?>
<?php if (post_custom('Available')=='на заказ') { ?><b>На заказ</b><?php } ?>
</p>
							<p><?php if (post_custom('Price')) { ?><b style="font-size:16px; color:gray; font-weight:bold;"><?php echo post_custom('Price');?> руб</b><br><br><?php } ?>
							
							
							</div>
							
							<div style="clear:both"></div>
							<p class="post_meta">Подходит на автомобили: <?php the_category(', ') ?></p>
						
						</div>
				
	<!-- конец цикла 2 -->		<?php endwhile; ?>
				
						<div class="more_entries" style="clear:both">
						<?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>
						</div>				 
				
						<!-- конец условия категории продукция -->
						
						<!-- начало условия категории материалы -->
                    	<?php } elseif (is_category(3)) { ?>
			<?php $col = 1; ?>
                        <?php
						$categories = get_categories('parent=3');
						foreach ($categories as $categ) {
						$catsg[] = $categ->cat_ID; // пополняем массив IDами деткок
						}
                        ?>

							<!-- начало цикла 1 -->	
								<?php foreach ($catsg as $categ_id):  ?>
                                                        <?php $sch = 0; ?>
                                                        <?php if ($categ_id == 3) continue; ?>
             <?php if ($col == 1) echo "<div class='row'>"; ?>

             <div class="col<?php echo $col;?>" >
             	<?php if(function_exists('ciii_term_images')) ciii_term_images( 'category', 'show_description=0&term_ids='.$categ_id ); ?>
             	<p style="color: #252525;font-size: 1.2em;font-weight: bold;line-height: 1em;margin: 0 0 15px;"><a href="<?php echo get_category_link( $categ_id ); ?>" rel="bookmark" title="<?php echo get_cat_name($categ_id);?>"><?php echo get_cat_name($categ_id);?></a></p>
             </div>

			<?php 
			// if ($col == 4) {echo "</div>"; $sch = 1;} 
			// if($col == 1) {$col = 2;}  else { if($col != 1) { if($col == 4) {$col = 1;}  if($col == 3) {$col =  4;} if($col == 2) {$col =  3;}} }
			if ($col == 3) {echo "</div>"; $sch = 1; $col = 1;}  else{ $col++;}

			 ?>
	<!-- конец цикла 2 -->	
		<?php endforeach; ?>
            <?php if ($sch == 0) echo "</div>"; ?> 

						<?php } elseif (in_category($cats)) { ?>
                        <?php query_posts($query_string."&posts_per_page=-1'");?>
<?php

$args = array(
	'posts_per_page' => -1,
    'cat' => $cat,
	'orderby' => 'meta_value',
    'meta_key' => 'Available',
    'order' => 'DESC',
    'orderby'=> 'date'
);
$new_query = new WP_Query($args);
// echo '----lala----'.print_r($new_query);
// echo '----lala----'.$new_query->post_count;
?>
			<?php $col = 1; ?>
			
			<?php if ($_SERVER['REQUEST_URI']=="/category/materials/aramid-fabric") { ?>
			<h1 class="single">Арамидная ткань</h1>
			<p>Научные изыскания в совокупности с современными технологиями все больше проникают в повседневную жизнь. Появляются новые материалы, имеющие высокие износостойкие и прочностные характеристики, благодаря которым им находится широкое применение в различных отраслях производства. Мы говорим о таких материалах, как карбон, кевлар, гибридные ткани. </p>
			<p>Предлагаем вам купить кевлар – современное легкое, термостойкое защитное волокно, обладающее невероятно высокими баллистическими свойствами. Кроме того, кевлар экологичен и абсолютно безопасен для здоровья. У нас вы можете купить кевлар по выгодной цене в любом количестве, а также заказать различные изделия из карбона и кевлара дешевле, чем в других компаниях.</p>
			<?php }
			elseif ($_SERVER['REQUEST_URI']=="/category/materials/carbon-fabric") {
			 ?>
			<h1 class="single">Карбоновое волокно и углеткань</h1>
			<p>Основная сфера деятельности нашей компании: продажа углеткани различных видов, изготовление изделий из карбона, кевлара и гибридных материалов на заказ. В каталоге представлена карбоновая ткань однонаправленная и с плетением, гибкие оплеточные рукава, углеленты. У нас вы можете купить углеткань по самой выгодной цене в любом объеме, а также карбоновое волокно для производства. Кроме продажи углеткани, мы занимаемся изготовлением различных изделий из карбона для тюнинга автомобилей. В каталоге представлен весь ассортимент товара. Если вы не нашли необходимый вам товар, свяжитесь с нашими менеджерами, мы постараемся выполнить ваш заказ.</p>
			 <?php }
			elseif ($_SERVER['REQUEST_URI']=="/category/materials/carbon-semi/composite-semi-plate") {
			 ?>
			<h1 class="single">Карбоновый лист</h1>
			<p>Предлагаем вам карбоновые пластины и листы стандартных размеров для дальнейшего применения в производстве и отделке. Наиболее прочный на сегодняшний день материал, который нашел свое применение во многих сферах - в том числе, медицине, спорте, тюнинге авто и мототехники, производстве защитных покрытий - карбон. Карбоновые пластины изготавливаются на специальном оборудовании в заводских условиях, что предотвращает появление подделок. Качество материала подтверждено сертификатом. От крупных оптовых заказов карбонового листа, до розничной покупки различных готовых изделий и изготовления их на заказ – звоните нам, оставляйте заявки по электронной почте  или приезжайте в офис.</p>
			 <?php }
			elseif ($_SERVER['REQUEST_URI']=="/category/materials/carbon-semi/composite-semi-tubes") {
			 ?>
			 <h1 class="single">Карбоновые трубки</h1>
			<p>Карбоновая труба, или, иначе, оплеточный рукав, давно заменили привычные защитные материалы. То, что карбоновые трубки можно применять не только в защите кабельных систем, но и, благодаря отличным растягивающим свойствам, в других отраслях, послужило хорошим толчком к разработке предложений по использованию карбона и различных смол. Одно из приоритетных направлений – медицинское протезирование. Другое, не менее актуальное – автомобилестроение и тюнинг. У нас в продаже всегда в наличии карбоновая труба стандартного диаметра в бобинах по 5 метров. Обращаем ваше внимание, что в комплект к карбоновым трубкам необходимо приобретать специальные смолы. </p>
			 <?php }
			elseif ($_SERVER['REQUEST_URI']=="/category/materials/epoxy-resins") {
			 ?>
			 <h1 class="single">Прозрачная эпоксидная смола для карбона, для творчества. Эпоксидная смола ювелирная</h1>
			<p>Эпоксидная смола стала применяться как прочный скрепляющий материал гораздо раньше, чем был изобретен карбон. Но в сочетании эти два материала дали поистине удивительный результат. Прозрачная смола для заливки  пластична, что позволяет делать из труб и листов материала изделия различных форм. В нашем магазине вы сможете купить эпоксидную смолу различных объемов и свойств, по самым выгодным ценам. К каждому товару вы найдете подробное описание и рекомендации к применению. О крупных оптовых партиях прозрачной эпоксидной смолы для заливки следует предварительно договариваться по телефону или оставлять заявки по электронной почте.</p>
			 <?php } 
			 elseif ($_SERVER['REQUEST_URI']=="/category/materials/gelcoat") {
			 ?>
			  <h1 class="single">Эпоксидный гелькоут</h1>
			<p>На основе эпоксидных смол изготавливается пигментированный материал эластичного или полуэластичного типа, который применяется в качестве финишной декоративной отделки для изделий из карбона, кевлара, гибридных материалов. Эпоксидный гелькоут прост в применении, может наноситься методом распыления, не требует особых навыков работы и отлично полируется. Его применяют в авиа, авто и судостроении. Гелькоут не только придает изделию высокие декоративные свойства, но и повышает защитные характеристики, стойкость к воздействию атмосферных явлений, агрессивнх сред и механического воздействия. Правильно подобрать необходимый вам эпоксидный гелькоут вам помогут наши консультанты.</p>
			 <?php } 
			 elseif ($_SERVER['REQUEST_URI']=="/category/materials/glass-fabric") {
			 ?>
			 <h1 class="single">Стеклоткань для тюнинга</h1>
			<p>В нашем магазине вы можете приобрести различную стеклоткань для тюнинга авто, авиа и мототехники, водных судов. Большой выбор различных тканей, в том числе цветных, позволит подобрать вам необходимые товары в нужном вам количестве. Мы продаем стеклоткань для тюнинга оптом и в розницу, от одного листа, до большой партии. На складе всегда в наличии различные виды стеклоткани и смол. Если вы хотите заказать готовые изделия из стеклоткани, карбона, кевлара, гибридных материалов, например, спойлеры для автомобилей, позвоните нам или приезжайте к нам в офис. Мы предлагаем большой ассортимент по самым низким ценам. </p>
			 <?php } 
			 elseif ($_SERVER['REQUEST_URI']=="/category/materials/prepreg") {
			 ?>
			 <h1 class="single">Препреги</h1>
			<p>В ассортименте нашего магазина предложены однонаправленные и твилловые препреги, использующиеся в авиа и автостроительстве. Это отличный материал, который легко подвергается формовке и обработке в соответствии с желаемым результатом. Препрег имеет отличительную особенность от других стекломатериалов – наличие пропитки. То есть, препрег – это полуфабрикат, готовый к работе и не требующий дополнительных составов. Он невероятно актуален в создании прочных и легких конструкций, требующих упругости поверхности. Подробное описание и характеристики материала вы можете найти в соответствующем разделе, а также получить консультацию наших менеджеров при визите в офис или по телефонам.</p>
			 <?php } ?>
			 
			 
			
							<!-- начало цикла 1 -->	
			<?php while ($new_query->have_posts()) : $new_query->the_post(); ?>
                            <?php $sch = 0; ?>
             <?php if ($col == 1) echo "<div class=\"row alex777\">"; ?>

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
								<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); echo ' col-'.$col;?></a>
							</p>



							<div class="wrap_buy_stock">
															<?php if (post_custom('Available')=='да') { ?>
									<!-- <img src="<?php echo bloginfo('template_url'); ?>/images/a21/check-2.png" width=16 height=16> -->
									<i class="icon-ok-circled" aria-hidden="true"></i>&nbsp;<span class="a21-stock">Есть в наличии!</span>
									<!-- <img src="<?php echo bloginfo('template_url'); ?>/images/tick_circle.png" width=16 height=16>&nbsp;<b>Есть в наличии!</b>-->
								<?php } ?>
								<?php if (post_custom('Available')=='нет') { ?><b>Нет в наличии</b><?php } ?>
								<?php if (post_custom('Available')=='на заказ') { ?><b>На заказ</b><?php } ?></p>
								<p class="a21-product-price">
									<?php if (post_custom('Price')) { ?>
										Цена: <b style="font-size:16px; color:gray; font-weight:bold;"><?php echo post_custom('Price');?> руб
									</b>
								</p>
								<!-- <a href="#add_product_to_cart" class="a21_popup-modal product-buy gradient" data-img-url="<?php echo get_option('home'); ?>/<?php echo $img_128_128;?>" data-prod-id="<?php echo get_the_ID();?>" data-title="<?php the_title(); ?>" data-price="<?php echo post_custom('Price');?>">Купить</a> -->
								<!-- <a href="#add_product_to_cart" class="a21_popup-modal product-buy gradient" data-img-url="<?php echo get_option('home'); ?>/<?php echo $img_128_128;?>" data-prod-id="<?php echo get_the_ID();?>" data-title="<?php the_title(); ?>" data-price="<?php echo post_custom('Price');?>">Купить</a> -->
								<br>
							<?php } ?>
						<?php if (post_custom('Price')) { ?> </div> <!--wrap_buy_stock --> <?php } ?>
			</div> 



			<?php 
			// if ($col == 4) {echo "</div>"; $sch = 1;} 
			// if($col == 1) {$col = 2;}  else { if($col != 1) { if($col == 4) {$col = 1;}  if($col == 3) {$col =  4;} if($col == 2) {$col =  3;}} } 
			if($new_query->post_count < 3) { if($new_query->post_count == $col) echo "</div>"; }
			if ($col == 3) {echo "</div>"; $sch = 1; $col = 1;}  else{ $col++;}
			?>
	<!-- конец цикла 2 -->	
	<?php endwhile; ?>
			<?php if ($sch == 0) echo "</div>"; ?>
				
						<div class="more_entries" style="clear:both; padding-top:10px;">
						<?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>
						</div>

<?php
if ($_SERVER['REQUEST_URI'] == '/category/materials/epoxy-resins/yuvelirnie-smoly') {

         echo '

<p>Эпоксидная ювелирная смола – прочный прозрачный материал, с помощью которого можно быстро и надежно соединять элементы бижутерии, выполнять отливку элементов, создавать объемные детали, имитировать лед, капли воды. Простота работы и надежный результат сделали эпоксидную смолу материалом номер один в процессе создания украшений и декора. Ее также используют при работе в технике скрапбукинга и декупажа.</p>

<p>Прозрачные соединения прочно удерживают элементы, и бижутерия выглядит нежно и аккуратно. Ювелирная смола практически не имеет запаха, отличается высокой текучестью, не образует пузырей при заливке.</p>

<p>Преимущества эпоксидной смолы для бижутерии:</p>

<ul style="margin-left: 20px;"><li style="list-style-type:disc">Позволяет добиться эффекта стеклянной поверхности.</li>
<li style="list-style-type:disc">Обеспечивает прочное, прозрачное покрытие.</li>
<li style="list-style-type:disc">Имеет широкую сферу применения – от создания украшений до декорирования различных поверхностей.</li>
<li style="list-style-type:disc">Подходит для работы с пластиком, стеклом, фаянсом, металлом, силиконом, окрашенными деревянными материалами.</li>
<li style="list-style-type:disc">Не теряет своих свойств под воздействием влаги и света.</li>
<li style="list-style-type:disc">Может использоваться как клей, обладающий отличными адгезионными свойствами. С ее помощью можно соединять детали из камня, металла, фарфора.</li></ul>

<p>Эпоксидная смола разных видов отличается временем жизнеспособности, объемом, соотношением компонентов, временем отверждения, условиями хранения и технологией применения. Чтобы купить подходящую смолу в Москве, выберите необходимый тип и объем и оформите заказ.</p>
<p>Эпоксидная смола требует аккуратного обращения и соблюдения техники безопасности во время работы. Для защиты рук обязательно используйте нитриловые либо латексные перчатки. Не допускайте попадания вещества на слизистые и кожу.</p>


';
     } 
     else if ($_SERVER['REQUEST_URI'] == '/category/materials/polyurethane-varnish') {

         echo '

<p>В данном разделе компания «Графит ПРО» предлагает полиуретановые лаки .. С помощью  лака вы сможете создать на поверхности композитного материала -  углепластика, стеклопластика,  а так же  дерева либо  металла защитное покрытие высокого качества. Мы рекомендуем специализированные акрилуретановые и полиуретановые лаки ведущих европейских производителей, качество которых соответствует высоким стандартам. Также, воспользовавшись нашими услугами, вы сможете приобрести отвердители и растворители для лаков, колеры, грунты,заполнители пор.</p>

<p>Полиуретановые лаки позволяют создавать  покрытия, характеризующихся глубоким блеском, хорошей адгезией и высокой износоустойчивостью</p>

<h2>Особенности полиуретанового лака</h2>

<p>Полиуретановый лак универсален и может быть использован для обработки различных поверхностей. К особенностям данного материала относятся:</p>

<ul style="margin-left: 20px;"><li style="list-style-type:disc">хорошая стойкость к УФ излучению;</li>
<li style="list-style-type:disc">глубокий блеск;</li>
<li style="list-style-type:disc">прямая адгезия к углеродному основанию;</li>
<li style="list-style-type:disc">высокий эффект заполняемости.</li></ul>

<p>Полиуретановый лак рекомендуется  для использования на ламинатах, характеризующихся сложной визуальной фактурой. Незаменим в качестве защитного слоя на карбоновых деталях с открытым (не окрашенным) волокном. Лак защищает от деградации смоляную матрицу и препятствует выцветанию углеткани. В отличие от акриловых лаков меньше подвержен царапинам, за счет более эластичной структуры. Усиливает 3д эффект. </p>

<p>Консультанты компании «Графит ПРО» готовы оказать помощь в подборе оптимальных материалов в соответствии с решаемой вами задачей. Наши специалисты профессионально проконсультируют и предложат  лак, использование которого, позволит добиться покрытия исключительного качества с минимальными трудозатратами.</p>

<h2>Использование полиуретановых лаков – гарантия высокого качества результата</h2>

<p>При работе со стеклопластиком, углепластиком и другими композитными материалами полиуретановые лаки незаменимы. Они широко используются при изготовлении автозапчастей, спортивного инвентаря и другого оборудования. Наличие защиты от воздействия ультрафиолетовых лучей гарантирует сохранение структуры и цвета   покрытия. Лак может быть использован для  создания матовых и глянцевых поверхностей.</p>

<h2>Обращайтесь к надежному поставщику лаков – компании «Графит ПРО»</h2>

<p>Если вас интересует гарантия качества материалов и оптимальные цены, компания «Графит ПРО» готова стать надежным поставщиком. Мы предлагаем лучшие современные лаки и вспомогательные материалы, которые помогут вам добиться безупречных по качеству, износоустойчивых и долговечных покрытий. При выборе лака обращайте внимание на приведенное нами описание. Если для выбора лака данной информации недостаточно, обратитесь к менеджерам-консультантам компании «Графит ПРО».</p>

<p>Заказчикам мы гарантируем персональный подход и сервис высокого уровня. На лаки мы готовы предоставить скидки в зависимости от объема заказа. Также индивидуальные скидки на лаки и другие виды продукции действуют для постоянных клиентов компании. Обращайтесь, мы обеспечим вас лучшей продукцией!</p>


';
     } 
?>


						
	<!-- если не продукция и не материалы... -->	<?php } else { ?>
				
				<?php if (have_posts()) : ?>
				
				<?php while (have_posts()) : the_post(); ?>
                
				<div class="post">
					
					<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					
					 <p class="post_meta"><span>Posted in <?php the_category(', ') ?>. <?php the_time('F jS, Y') ?></p>
					
					<div class="entry">
						<?php if ( get_option('woo_the_content') ) { the_content(); } else { the_excerpt(); ?>
                        <div class="btn-continue"><a href="<?php the_permalink() ?>">Continue Reading</a></div>
                        <?php } ?>
					</div>
				
				</div>
				
				<?php endwhile; ?>
				
				<div class="more_entries" style="clear:both">
					<?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>
				</div>
				
				<?php else : ?>
				
				<h2>Not Found</h2>
				
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
				
				<?php endif; ?>
				
						<!-- конец проверки на категорию -->
						<?php } ?>

			</div><!-- / #main -->


<?php if (!is_category($cats) || !in_category($cats)) get_sidebar("2"); ?>






<?php get_footer(); ?>
