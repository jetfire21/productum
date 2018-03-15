<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="main" class="grid_8">
	
	<!--<h4 class="breadcrumbs"><#php the_category(' &raquo; '); #></h4>-->
	
	<?php 
	
						$cats = array('3'); // создаем массив и вносим родительскую рубрику
						$categories = get_categories('child_of=3'); 
						foreach ($categories as $cat) {
						$cats[] = $cat->cat_ID; // пополняем массив IDами деткок
					}
					
						$products = array('4'); // создаем массив и вносим родительскую рубрику
						$categories = get_categories('child_of=4'); 
						foreach ($categories as $cat) {
						$products[] = $cat->cat_ID; // пополняем массив IDами деткок
					}
					
					if (is_category($products) || in_category($products)) { ?>
					<!-- начало условия категории продукция -->
					
					<?php while (have_posts()) : the_post(); ?>
						
						<div class="entry">
							<h1 class="single"><?php
								if ($_SERVER['REQUEST_URI'] == '/materials/vacuum-technology/razjem-dlya-vacuumnogo-shlanga-hose-connector-2') {

									echo 'Разъем для вакуумного шланга / Hose connector Артикул № 390142-1';
								} 
								else the_title(); ?></h1>
								
								<a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>" rel="shadowbox[<?php the_ID(); ?>]">
									<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>&w=455&h=250&zc=1&q=70" alt="<?php the_title(); ?>" width="455px" height="250px" class="products_img"> -->
									<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>" alt="<?php the_title(); ?>" width="455px" height="250px" class="products_img">
								</a>
								<div style="float:left; width:190px">
									<?php if (post_custom('Image2')) { ?>
									<a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image2');?>" rel="shadowbox[<?php the_ID(); ?>]">
										<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image2');?>&w=180&h=110&zc=1&q=65" alt="<?php the_title(); ?>" width="180px" height="110px" class="products_img" > -->
										<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image2');?>" alt="<?php the_title(); ?>" width="180px" height="110px" class="products_img" >
									</a>
									<?php if (post_custom('Image3')) { ?>
									<a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image3');?>" rel="shadowbox[<?php the_ID(); ?>]">
										<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image3');?>&w=180&h=110&zc=1&q=65" alt="<?php the_title(); ?>" width="180px" height="110px" class="products_img" > -->
										<img srcc="<?php echo get_option('home'); ?>/<?php echo post_custom('Image3');?>" alt="<?php the_title(); ?>" width="180px" height="110px" class="products_img" >
									</a><?php } ?>
									<?php if (post_custom('Image4')) { ?>
									<a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image4');?>" rel="shadowbox[<?php the_ID(); ?>]">
										<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image4');?>&w=180&h=110&zc=1&q=65" alt="<?php the_title(); ?>" width="180px" height="110px" class="products_img" > -->
										<img srcc="<?php echo get_option('home'); ?>/<?php echo post_custom('Image4');?>" alt="<?php the_title(); ?>" width="180px" height="110px" class="products_img" >
									</a><?php } ?>
									<?php if (post_custom('Image5')) { ?>
									<a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image5');?>" rel="shadowbox[<?php the_ID(); ?>]">
										<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image5');?>&w=180&h=110&zc=1&q=65" alt="<?php the_title(); ?>" width="180px" height="110px" class="products_img" > -->
										<img srcc="<?php echo get_option('home'); ?>/<?php echo post_custom('Image5');?>" alt="<?php the_title(); ?>" width="180px" height="110px" class="products_img" >
									</a><?php } ?>
									<?php } ?>
									<?php if (post_custom('Price')) { ?><div class="h_1">Цена: <?php echo post_custom('Price');?> руб</div><?php } ?>
										<div class="h_2">Наличие: <?php if (post_custom('Available')=='да') { ?><img src="<?php echo bloginfo('template_url'); ?>/images/tick_circle.png" width=16 height=16>&nbsp;<font style="color:green">Есть</font><?php } else { ?><font style="color:red"><?php echo post_custom('Available'); ?></font><?php } ?></div>

										<!-- ВИДЕО -->
										<?php if ($sid_video_code = trim(get_post_meta($post->ID,'sid_video_code',true)) and $sid_video_code!='') : ?>
											<?php $sid_video_size_w = (int)trim(get_post_meta($post->ID,'sid_video_size_w',true));
											$sid_video_size_h = (int)trim(get_post_meta($post->ID,'sid_video_size_h',true));
											if ($sid_video_size_w>460) $sid_video_size_w=460;
											if ($sid_video_size_w=='') $sid_video_size_w=460;
											if ($sid_video_size_h=='') $sid_video_size_h=200;
											?>
											<div id="sid_video_block" style="margin: 10px 0;">

												<object style="height: <?=$sid_video_size_h ?>px; width: <?=$sid_video_size_w ?>px"><param name="movie" value="http://www.youtube.com/v/<?=$sid_video_code ?>?version=3"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><embed src="http://www.youtube.com/v/<?=$sid_video_code ?>?version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" height="<?=$sid_video_size_h ?>" width="<?=$sid_video_size_w ?>"></object>

											</div>
										<?php endif; ?>				
										<!-- ВИДЕО END -->

										<?php if (post_custom('Weight')) { ?><strong>Вес:</strong> <?php echo post_custom('Weight');?> гр.<br><?php } ?>
											<?php if (post_custom('Cover')) { ?><strong>Покрытие:</strong> <?php echo post_custom('Cover');?><?php } ?>
												
											</div>
											<div class="products_cat_desc" style="margin-left:200px; color:black;">
												
												<?php the_content(); ?>
												
												<p class="post_meta">Подходит на автомобили: <?php the_category(', ') ?></p>
												
											</div>
											
											<div style="clear:both"></div>
											
										</div>
										
									<?php endwhile; ?>
									
									<div class="more_entries">
										<?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>
									</div>				 
									
									<!-- конец условия категории продукция -->
									<?php } elseif (is_category($cats) || in_category($cats)) { ?>
									
									<!-- начало условия категории материалы -->
									
									<?php while (have_posts()) : the_post(); ?>
										
										<div class="entry">
											<h1 class="single">
												<?php
												if ($_SERVER['REQUEST_URI'] == '/materials/vacuum-technology/razjem-dlya-vacuumnogo-shlanga-hose-connector-2') {

													echo 'Разъем для вакуумного шланга / Hose connector Артикул № 390142-1';
												}
												else if ($_SERVER['REQUEST_URI'] == '/materials/vacuum-technology/fitingi-aksessuary/razjem-dlya-vacuumnogo-shlanga-hose-connector') {

													echo 'Разъем для вакуумного шланга / Hose connector Артикул № 390150-1';
												}
												else if ($_SERVER['REQUEST_URI'] == '/materials/outlet/ugletkan-karbon-245-gm2-tvill-shirina-100-c') {
													echo 'Углеткань (карбон) 245 г/м², твилл, ширина 100 см, № 1902351S / Carbon fabric 245 g/m²';
												}
												else if ($_SERVER['REQUEST_URI'] == '/materials/decorate-fabric/dekorativnaya-tkan-aluteks-300-gm2-design-glass-fabric-300-gm') {
													echo 'Декоративная ткань Алютекс, 300 г/м², твилл, № 195121S / Design glass fabric 300 g/mІ² silver';
												}
												else if ($_SERVER['REQUEST_URI'] == '/materials/ugletkan-karbon-200-gm2-plein-carbon-fabric-200-gm2-plain') {
													echo 'Углеткань (карбон) 200 г/м², плейн / Carbon fabric 200 g/m², plain, 190229-NA-100-1S';
												}









												else echo the_title(); ?></h1>
												
												<div style="float:left; width:215px">

							<?php /*
							<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>&w=210&h=210&zc=1&q=70" alt="<?php the_title(); ?>" width="210px" height="210px" class="products_img"> -->
							<!-- <img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>" alt="<?php the_title(); ?>" width="210px" height="210px" class="products_img"> -->
							<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>" alt="<?php the_title(); ?>" width="210px" height="210px" class="products_img">
							
							<?php if (post_custom('Image2')) { ?>
							<a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image2');?>" rel="shadowbox[<?php the_ID(); ?>]">
								<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image2');?>&w=80&h=80&zc=1&q=65" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img"> -->
								<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image2');?>" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img">
							</a>
							<?php if (post_custom('Image3')) { ?>
								<a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image3');?>" rel="shadowbox[<?php the_ID(); ?>]">
									<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image3');?>&w=80&h=80&zc=1&q=65" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img"> -->
									<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image3');?>" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img">
								</a><?php } ?>
							<?php if (post_custom('Image4')) { ?>
								<a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image4');?>" rel="shadowbox[<?php the_ID(); ?>]">
									<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image4');?>&w=80&h=80&zc=1&q=65" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img"> -->
									<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image4');?>" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img">
								</a><?php } ?>
							<?php if (post_custom('Image5')) { ?>
								<a href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image5');?>" rel="shadowbox[<?php the_ID(); ?>]">
									<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image5');?>&w=80&h=80&zc=1&q=65" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img"> -->
									<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image5');?>" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img">
							    </a><?php } ?>
								*/ ?>
								
								<a data-fancybox="gallery" href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>">
									<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>" alt="<?php the_title(); ?>" width="210px" height="210px" class="products_img">
								</a>
								
								<?php if (post_custom('Image2')) { ?>
								<a data-fancybox="gallery" href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image2');?>">
									<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image2');?>&w=80&h=80&zc=1&q=65" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img"> -->
									<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image2');?>" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img">
								</a>
								<?php } ?>
								<?php if (post_custom('Image3')) { ?>
								<a data-fancybox="gallery" href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image3');?>">
									<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image3');?>&w=80&h=80&zc=1&q=65" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img"> -->
									<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image3');?>" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img">
								</a><?php } ?>
								<?php if (post_custom('Image4')) { ?>
								<a data-fancybox="gallery" href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image4');?>">
									<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image4');?>&w=80&h=80&zc=1&q=65" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img"> -->
									<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image4');?>" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img">
								</a><?php } ?>
								<?php if (post_custom('Image5')) { ?>
								<a  data-fancybox="gallery" href="<?php echo get_option('home'); ?>/<?php echo post_custom('Image5');?>">
									<!-- <img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php echo post_custom('Image5');?>&w=80&h=80&zc=1&q=65" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img"> -->
									<img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image5');?>" alt="<?php the_title(); ?>" width="80px" height="80px" class="products_img">
								</a><?php } ?>



								
								<?php if (post_custom('Price')) { ?><div class="h_1">Цена: <?php echo post_custom('Price');?> руб</div><?php } ?>

									<a href="#add_product_to_cart" class="a21_popup-modal product-buy gradient" data-img-url="<?php echo get_option('home'); ?>/<?php echo $img_128_128;?>" data-prod-id="<?php echo get_the_ID();?>" data-title="<?php the_title(); ?>" data-price="<?php echo post_custom('Price');?>">Купить</a>
									<br>

									<?php if (post_custom('Available')) { ?><div class="h_2">Наличие: <?php if (post_custom('Available')=='да') { ?><img src="<?php echo bloginfo('template_url'); ?>/images/tick_circle.png" width=16 height=16>&nbsp;<font style="color:green">Есть</font><?php } else { ?><font style="color:red"><?php echo post_custom('Available'); ?></font><?php } ?></div><?php } ?>

										<!-- ВИДЕО -->
										<?php if ($sid_video_code = trim(get_post_meta($post->ID,'sid_video_code',true)) and $sid_video_code!='') : ?>
											<?php $sid_video_size_w = (int)trim(get_post_meta($post->ID,'sid_video_size_w',true));
											$sid_video_size_h = (int)trim(get_post_meta($post->ID,'sid_video_size_h',true));
											if ($sid_video_size_w>460) $sid_video_size_w=460;
											if ($sid_video_size_w=='') $sid_video_size_w=460;
											if ($sid_video_size_h=='') $sid_video_size_h=200;
											?>
											<div id="sid_video_block" style="margin: 10px 0;">

												<object style="height: <?=$sid_video_size_h ?>px; width: <?=$sid_video_size_w ?>px"><param name="movie" value="http://www.youtube.com/v/<?=$sid_video_code ?>?version=3"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><embed src="http://www.youtube.com/v/<?=$sid_video_code ?>?version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" height="<?=$sid_video_size_h ?>" width="<?=$sid_video_size_w ?>"></object>

											</div>
										<?php endif; ?>				
										<!-- ВИДЕО END -->

										<p><?php if (post_custom('Weight')) { ?><strong>Вес:</strong> <?php echo post_custom('Weight');?> гр.<br><?php } ?>
											<?php if (post_custom('Cover')) { ?><strong>Покрытие:</strong> <?php echo post_custom('Cover');?><?php } ?>
												
												
												
											</div>
											<div class="products_cat_desc" style="margin-left:225px; color:black;">


												
							<!--<1php remove_filter('the_excerpt', 'wpautop'); 1>
							<1php the_content(); 1>
								<1php add_filter('the_content', 'wpautop'); -->
									<?php if (post_custom('Additional')) { ?><strong>Особенности:</strong> <?php echo post_custom('Additional');?><br><br><?php } ?>
										<?php if (post_custom('Application')) { ?><strong>Применение:</strong> <?php echo post_custom('Application');?><br><?php } ?>
											
											
										</div>
										
										<div style="clear:both"></div>
										<?php the_content(); ?>
										<?php if (post_custom('WorkTime')) { ?><strong>Время работоспособности смеси:</strong> <?php echo post_custom('WorkTime');?><br><br><?php } ?>
											<?php if (post_custom('WorkTime2')) { ?><strong>Время первичного отверждения:</strong> <?php echo post_custom('WorkTime2');?><br><br><?php } ?>
												<?php if (post_custom('Volume')) { ?><strong>Объем:</strong> <?php echo post_custom('Volume');?><br><br><?php } ?>
													<?php if (post_custom('WorkTemperature')) { ?><strong>Рабочая температура:</strong> <?php echo post_custom('WorkTemperature');?><br><br><?php } ?>
														<?php if (post_custom('Components')) { ?><strong>Соотношение компонентов:</strong> <?php echo post_custom('Components');?><br><br><?php } ?>
															<?php if (post_custom('TechProcess')) { ?><strong>Технологический процесс:</strong> <?php echo post_custom('TechProcess');?><br><br><?php } ?>
																<?php if (post_custom('Density')) { ?><strong>Плотность:</strong> <?php echo post_custom('Density');?><br><?php } ?>
																	<?php if (post_custom('Width')) { ?><strong>Ширина:</strong> <?php echo post_custom('Width');?><br><br><?php } ?>
																		<?php if (post_custom('Spec')) { ?><strong>Приблизительная характеристика ламината при ручном формовании:</strong> <?php echo post_custom('Spec');?><br><?php } ?>
																			<div id="sid_pdf_files">
																				<?php for ($i=1;$i<5;++$i) : ?>
																					<?php if (post_custom('sid_pdf_'.$i) and post_custom('sid_pdf_title_'.$i)) : ?>
																						<div class="sid_pdf_block">
																							<a href="<?php echo post_custom('sid_pdf_'.$i);?>"><img src="<?php bloginfo('template_url'); ?>/images/acroread.png" width="24" height="24" alt="PDF" style="float:left;padding:3px 5px;"><?php echo post_custom('sid_pdf_title_'.$i);?></a>
																						</div>
																					<?php endif; ?>
																				<?php endfor; ?>
																			</div>
																			<br><br>
																			<?php 
							// if( (bool)$_GET['dev'] === true ) print_r(get_the_tags());
							// if (has_tag()) {wp_related_posts(); }
																			?>
																			
																		</div>
																		
																	<?php endwhile; ?>
																	
																	<div class="more_entries">
																		<?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>
																	</div>				 
																	
																	<!-- конец условия категории материалы -->
																	
																	<?php } else { ?>

																	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
																		
																		<div class="entry">
																			
																			<h1 class="single"><?php the_title(); ?></h1>
																			<p class="post_meta"><span>Posted in <?php the_category(', ') ?>. Written by <?php the_author() ?> on <?php the_time('F jS, Y') ?></p>
																			<?php if (post_custom('Image1')) { ?><img src="<?php echo get_option('home'); ?>/<?php echo post_custom('Image1');?>" alt="<?php the_title(); ?>" class="products_img" style="float:left"></a><?php } ?>
																				<?php the_content(); ?>
																				<div style="clear:both"></div>
																			</div>
																			
																		<?php endwhile; endif; ?>
																		<?php comments_template(); ?>
																		
																		<? } ?>
																		
																	</div><!-- / #main -->


																	<?php get_sidebar("2"); ?>
																	<?php 
// echo "single.php";
																	get_footer(); 
																	?>
