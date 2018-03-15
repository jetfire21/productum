<?php include (TEMPLATEPATH . '/sm_header.php'); ?>

<div id="content">
		
			
			
			<div id="cat_title"><div class="h_1">ТЕХНОЛОГИИ</div><div class="title_desc">статьи и материалы об углеволокне</div>
			</div>
			
		
			<div id="contentWrap" class="container_16">
			
			
			
			<div id="main" class="grid_12">
			
			<p class="breadcrumbs"><?php echo(get_category_parents($cat, TRUE, ' &raquo; ')); ?></p>
			<?php
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


?>
					
						
	<!-- начало цикла 1 -->		<?php while (have_posts()) : the_post(); ?>
                
						<div class="post">
						
							<div style="float:left; width:190px">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>&w=180&h=110&zc=1&q=65" alt="<?php the_title(); ?>" class="products_img" width="180px" height="110px"> -->
							<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>" alt="<?php the_title(); ?>" class="products_img" width="180px" height="110px">
							</a>
							</div>
							<h2 style="margin:0;padding:0" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2><br>
							<?php the_excerpt(); ?>
							<div style="clear:both"></div>
							
						</div>
				
	<!-- конец цикла 2 -->		<?php endwhile; ?>
				
						<div class="more_entries" style="clear:both">
						<?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>
						</div>				 
				
						<!-- конец условия категории продукция -->
						
						

			</div><!-- / #main -->


<?php get_sidebar("2"); ?>
<?php get_footer(); ?>
