<?php
/**
 * Template Name: home page
 *
 */
	get_header();
	$id = get_the_ID();
?>

		
		
			<?php the_post(); ?>
		<div class="row popular_section_title">		
				 <h2><span>Популярные разделы</span></h2> 
		</div>		
		<div class="row popular_section_item">	
			<?php $t_mod =  get_theme_mods(); ?>
			<div class="col-12 col-md-8">
				<div class="wrap_home_cat"> 
					<a href="<?php echo $t_mod['h-link-1'] ; ?>"><img src="<?php echo $t_mod['h-file-1'] ; ?>" alt="image"></a>
					<div class="wrap_home_cat_a"><a href="<?php echo $t_mod['h-link-1'] ; ?>"><?php echo $t_mod['h-text-1'] ; ?></a></div>
				</div>
			</div>
			<div class="col-6 col-md-4">
				<div class="wrap_home_cat"> 
					<a href="<?php echo $t_mod['h-link-2'] ; ?>"><img src="<?php echo $t_mod['h-file-2'] ; ?>" alt="image"></a>
					<div class="wrap_home_cat_a"><a href="<?php echo $t_mod['h-link-2'] ; ?>"><?php echo $t_mod['h-text-2'] ; ?></a></div>
				</div>
			</div>
			<div class="col-6 col-md-4">
				<div class="wrap_home_cat"> 
					<a href="<?php echo $t_mod['h-link-3'] ; ?>"><img src="<?php echo $t_mod['h-file-3'] ; ?>" alt="image"></a>
					<div class="wrap_home_cat_a"><a href="<?php echo $t_mod['h-link-3'] ; ?>"><?php echo $t_mod['h-text-3'] ; ?></a></div>
				</div>
			</div>
			<div class="col-12 col-md-8">
				<div class="wrap_home_cat"> 
					<a href="<?php echo $t_mod['h-link-4'] ; ?>"><img src="<?php echo $t_mod['h-file-4'] ; ?>" alt="image"></a>
					<div class="wrap_home_cat_a"><a href="<?php echo $t_mod['h-link-4'] ; ?>"><?php echo $t_mod['h-text-4'] ; ?></a></div>
				</div>
			</div>
		</div>
		<div class="row new_products_title">
			<h2 class="h-nopadding" ><span>Новинки</span></h2>
		</div>
		<div class="row new_products_item">		
			<div class="col-12 content_product_new second_slider">
				<?php echo do_shortcode( '[product_category category="novinki" per_page="10" columns="1"] ' ); ?>  
			</div>	
			<div class="col-12">
				<a href="/product-category/novinki/" class="activ_cat">Смотреть все</a>
			</div>
		</div>
		<div class="row gifts_title">
			<h2 class="no_top_p"><span>Подарки</span></h2>
		</div>	
		<div class="row gifts_item">	
			<div class="col-12 content_product_new second_slider"> 
				<?php echo do_shortcode( '[product_category category="podarki" per_page="10" columns="1" visibility="featured"] ' ); ?>  
			</div>
 
			<div class="col-12">
				<a href="/product-category/podarki/" class="activ_cat">Смотреть все</a>
			</div>
		</div>

		<div class="row category category-row">
			<h1 class="col-xs-7 category_title d-block d-xl-none woocommerce-products-header__title page-title">Букеты<i></i></h1>
			<a href="/product-category/cvety/bukety/" class="col-xs-4 activ_cat">Смотреть все</a>
		</div>
		<div class="col-12 content_product_new category"> 
			<div class="woocommerce columns-1">
				<div class="container wrap-woo">
					<div id="products-acc-1" class="row slider main_slider columns-1">
						<div class="wrap-main-card">
							<div>
								<div class="main-card woo_cont-prod">
									<a href="https://sa-flor.ru/product/buket-103/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
										<div class="wrap_post_thumb" style="position: relative; overflow: hidden;">
											<img width="547" height="550" src="https://sa-flor.ru/wp-content/uploads/2018/09/20180706_152033-2-1-e1542637588334-547x550.jpg" class="attachment-large size-large wp-post-image" alt="" srcset="https://sa-flor.ru/wp-content/uploads/2018/09/20180706_152033-2-1-e1542637588334-547x550.jpg 547w, https://sa-flor.ru/wp-content/uploads/2018/09/20180706_152033-2-1-e1542637588334-209x210.jpg 209w, https://sa-flor.ru/wp-content/uploads/2018/09/20180706_152033-2-1-e1542637588334-768x772.jpg 768w" sizes="(max-width: 547px) 100vw, 547px">
											<img src="https://sa-flor.ru/wp-content/uploads/2018/09/20180706_152033-2-1-e1542637588334-547x550.jpg" class="zoomImg" style="position: absolute; top: -74.6667px; left: -175.469px; opacity: 0; width: 547px; height: 550px; border: none; max-width: none; max-height: none;">
										</div>
										<div class="wrap_exept">Букет с гвоздикой, фрезией и эустомой
										</div>	
										<span class="price">
											<span class="woocommerce-Price-amount amount">2 290&nbsp;
												<span class="woocommerce-Price-currencySymbol"> руб
												</span>
											</span>
										</span>
									</a>
									<a href="#" class="active_but">+
 									</a>
 									<div class="wrap_hide_but"> 
 										<a href="https://sa-flor.ru/product/buket-103/" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1365" data-product_sku="10-103" aria-label="Добавить &quot;Букет с гвоздикой, фрезией и эустомой&quot; в корзину" rel="nofollow">купить
 										</a>
            							<a class="clickBuyButton button21" href="#" data-productid="1365">Купить в один клик
            							</a>		
									</div>
								</div>
							</div>
						</div>
						<div class="wrap-main-card">
							<div>
								<div class="main-card woo_cont-prod">
									<a href="https://sa-flor.ru/product/buket-047/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
										<div class="wrap_post_thumb" style="position: relative; overflow: hidden;">
											<img width="550" height="550" src="https://sa-flor.ru/wp-content/uploads/2018/09/big-6-550x550.jpg" class="attachment-large size-large wp-post-image" alt="" srcset="https://sa-flor.ru/wp-content/uploads/2018/09/big-6-550x550.jpg 550w, https://sa-flor.ru/wp-content/uploads/2018/09/big-6-210x210.jpg 210w, https://sa-flor.ru/wp-content/uploads/2018/09/big-6-768x768.jpg 768w, https://sa-flor.ru/wp-content/uploads/2018/09/big-6.jpg 890w" sizes="(max-width: 550px) 100vw, 550px">
											<img src="https://sa-flor.ru/wp-content/uploads/2018/09/big-6-550x550.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 550px; height: 550px; border: none; max-width: none; max-height: none;">
										</div>
										<div class="wrap_exept">Букет из пионовидной розы Ред Пиано
										</div>	
										<span class="price">
											<span class="woocommerce-Price-amount amount">2 890&nbsp;
												<span class="woocommerce-Price-currencySymbol"> руб
												</span>
											</span>
										</span>
									</a>
 									<a href="#" class="active_but">+
 									</a>
 									<div class="wrap_hide_but"> 
 										<a href="https://sa-flor.ru/product/buket-047/" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1242" data-product_sku="10-47" aria-label="Добавить &quot;Букет из пионовидной розы Ред Пиано&quot; в корзину" rel="nofollow">купить
 										</a>
             							<a class="clickBuyButton button21" href="#" data-productid="1242">Купить в один клик
             							</a>
									</div>
								</div>
							</div>
						</div>
						<div class="wrap-main-card">
							<div>
								<div class="main-card woo_cont-prod">
									<a href="https://sa-flor.ru/product/buket-043/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
										<div class="wrap_post_thumb" style="position: relative; overflow: hidden;">
											<img width="550" height="550" src="https://sa-flor.ru/wp-content/uploads/2018/09/DSC_6200-2-2-550x550.jpg" class="attachment-large size-large wp-post-image" alt="" srcset="https://sa-flor.ru/wp-content/uploads/2018/09/DSC_6200-2-2-550x550.jpg 550w, https://sa-flor.ru/wp-content/uploads/2018/09/DSC_6200-2-2-210x210.jpg 210w, https://sa-flor.ru/wp-content/uploads/2018/09/DSC_6200-2-2-768x768.jpg 768w" sizes="(max-width: 550px) 100vw, 550px">
											<img src="https://sa-flor.ru/wp-content/uploads/2018/09/DSC_6200-2-2-550x550.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 550px; height: 550px; border: none; max-width: none; max-height: none;">
										</div>
										<div class="wrap_exept">Букет из астр и эустомы
										</div>	
										<span class="price">
											<span class="woocommerce-Price-amount amount">3 790&nbsp;
												<span class="woocommerce-Price-currencySymbol"> руб
												</span>
											</span>
										</span>
									</a>
									<a href="#" class="active_but">+
									</a>
									<div class="wrap_hide_but"> 
										<a href="https://sa-flor.ru/product/buket-043/" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1238" data-product_sku="10-43" aria-label="Добавить &quot;Букет из астр и эустомы&quot; в корзину" rel="nofollow">купить
										</a>
            							<a class="clickBuyButton button21" href="#" data-productid="1238">Купить в один клик
            							</a>
									</div>
								</div>
							</div>
						</div>
						<div class="wrap-main-card">
							<div>
								<div class="main-card woo_cont-prod">
									<a href="https://sa-flor.ru/product/buket-051/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
										<div class="wrap_post_thumb" style="position: relative; overflow: hidden;">
											<img width="550" height="550" src="https://sa-flor.ru/wp-content/uploads/2018/09/16-2-1-550x550.jpg" class="attachment-large size-large wp-post-image" alt="" srcset="https://sa-flor.ru/wp-content/uploads/2018/09/16-2-1-550x550.jpg 550w, https://sa-flor.ru/wp-content/uploads/2018/09/16-2-1-210x210.jpg 210w, https://sa-flor.ru/wp-content/uploads/2018/09/16-2-1-768x768.jpg 768w" sizes="(max-width: 550px) 100vw, 550px">
											<img src="https://sa-flor.ru/wp-content/uploads/2018/09/16-2-1-550x550.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 550px; height: 550px; border: none; max-width: none; max-height: none;">
										</div>
										<div class="wrap_exept">Букет из тюльпанов
										</div>	
										<span class="price">
											<span class="woocommerce-Price-amount amount">3 490&nbsp;
												<span class="woocommerce-Price-currencySymbol"> руб
												</span>
											</span>
										</span>
									</a>
									<a href="#" class="active_but">+
									</a>
									<div class="wrap_hide_but"> 
										<a href="https://sa-flor.ru/product/buket-051/" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1246" data-product_sku="10-51" aria-label="Добавить &quot;Букет из тюльпанов&quot; в корзину" rel="nofollow">купить
										</a>
            							<a class="clickBuyButton button21" href="#" data-productid="1246">Купить в один клик
            							</a>            				
									</div>
								</div>
							</div>
						</div>
						<div class="wrap-main-card">
							<div>
								<div class="main-card woo_cont-prod">
									<a href="https://sa-flor.ru/product/buket-053/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
										<div class="wrap_post_thumb" style="position: relative; overflow: hidden;">
											<img width="550" height="550" src="https://sa-flor.ru/wp-content/uploads/2018/09/20180622_142942-2-1-550x550.jpg" class="attachment-large size-large wp-post-image" alt="" srcset="https://sa-flor.ru/wp-content/uploads/2018/09/20180622_142942-2-1-550x550.jpg 550w, https://sa-flor.ru/wp-content/uploads/2018/09/20180622_142942-2-1-210x210.jpg 210w, https://sa-flor.ru/wp-content/uploads/2018/09/20180622_142942-2-1-768x768.jpg 768w" sizes="(max-width: 550px) 100vw, 550px">
											<img src="https://sa-flor.ru/wp-content/uploads/2018/09/20180622_142942-2-1-550x550.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 550px; height: 550px; border: none; max-width: none; max-height: none;">
										</div>
										<div class="wrap_exept">Букет из малиновых роз и альстромерии
										</div>	
										<span class="price">
											<span class="woocommerce-Price-amount amount">3 590&nbsp;
												<span class="woocommerce-Price-currencySymbol"> руб
												</span>
											</span>
										</span>
									</a>
									<a href="#" class="active_but">+
									</a>
									<div class="wrap_hide_but"> 
										<a href="https://sa-flor.ru/product/buket-053/" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1248" data-product_sku="10-53" aria-label="Добавить &quot;Букет из малиновых роз и альстромерии&quot; в корзину" rel="nofollow">купить
										</a>
							            <a class="clickBuyButton button21" href="#" data-productid="1248">Купить в один клик
							            </a>
									</div>
								</div>
							</div>
						</div>
						<div class="wrap-main-card">
							<div>
								<div class="main-card woo_cont-prod">
									<a href="https://sa-flor.ru/product/buket-iz-rozovyh-tjulpanov-i-gvozdiki-046/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
										<div class="wrap_post_thumb" style="position: relative; overflow: hidden;">
											<img width="550" height="550" src="https://sa-flor.ru/wp-content/uploads/2018/09/buket-49-550x550.jpg" class="attachment-large size-large wp-post-image" alt="" srcset="https://sa-flor.ru/wp-content/uploads/2018/09/buket-49-550x550.jpg 550w, https://sa-flor.ru/wp-content/uploads/2018/09/buket-49-210x210.jpg 210w, https://sa-flor.ru/wp-content/uploads/2018/09/buket-49-768x768.jpg 768w, https://sa-flor.ru/wp-content/uploads/2018/09/buket-49.jpg 1000w" sizes="(max-width: 550px) 100vw, 550px">
											<img src="https://sa-flor.ru/wp-content/uploads/2018/09/buket-49-550x550.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 550px; height: 550px; border: none; max-width: none; max-height: none;">
										</div>
										<div class="wrap_exept">Букет из розовых тюльпанов и гвоздики
										</div>	
										<span class="price">
											<span class="woocommerce-Price-amount amount">5 390&nbsp;
												<span class="woocommerce-Price-currencySymbol"> руб
												</span>
											</span>
										</span>
									</a>
									<a href="#" class="active_but">+
									</a>
									<div class="wrap_hide_but"> 
										<a href="https://sa-flor.ru/product/buket-iz-rozovyh-tjulpanov-i-gvozdiki-046/" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1241" data-product_sku="10-46" aria-label="Добавить &quot;Букет из розовых тюльпанов и гвоздики&quot; в корзину" rel="nofollow">купить
										</a>
            							<a class="clickBuyButton button21" href="#" data-productid="1241">Купить в один клик
            							</a>
									</div>
								</div>
							</div>
						</div>		
					</div>
				</div>			
			</div>	
			<!--	<?php echo do_shortcode( '[product_category category="bukety" per_page="6" columns="1"] ' ); ?>  -->
		</div>
		<div class="col-xs-12 category">
			<a href="/product-category/cvety/bukety/" class="activ_cat">Смотреть все Букеты
				<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
			</a>
		</div>

		<div class="icons top_icon tp-1"><i></i><span>БЕСПЛАТНАЯ доставка</span></div>
		
		<div class="row category category-row">
			<h1 class="col-xs-7 category_title d-block d-xl-none woocommerce-products-header__title page-title">Монобукеты<i></i></h1>
			<a href="/product-category/cvety/monobukety/" class="col-xs-4 activ_cat">Смотреть все</a>
		</div>
		<div class="col-12 content_product_new category"> 
				<?php echo do_shortcode( '[product_category category="monobukety" per_page="6" columns="1"] ' ); ?>  
		</div>
		<div class="col-xs-12 category">
			<a href="/product-category/cvety/monobukety/" class="activ_cat">Смотреть все Монобукеты
				<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
			</a>
		</div>
		
		<div class="icons top_icon tp-2"><i></i><span><i class="unical">Уникальная</i><i class="post">открытка</i> в подарок</span></div>

		<div class="row category category-row">
			<h1 class="col-xs-7 category_title d-block d-xl-none woocommerce-products-header__title page-title">Цветы в шляпных коробках<i></i></h1>
			<a href="/product-category/cvety/cvety-v-shljapnyh-korobkah/" class="col-xs-4 activ_cat">Смотреть все</a>
		</div>
		<div class="col-12 content_product_new category"> 
				<?php echo do_shortcode( '[product_category category="cvety-v-shljapnyh-korobkah" per_page="6" columns="1"] ' ); ?>  
		</div>
		<div class="col-xs-12 category">
			<a href="/product-category/cvety/cvety-v-shljapnyh-korobkah/" class="activ_cat">Смотреть все Цветы в шляпных коробках
				<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
			</a>
		</div>

		<div class="icons top_icon tp-3"><i></i><span>Все способы ОПЛАТЫ</span></div>

		<div class="row category category-row">
			<h1 class="col-xs-7 category_title d-block d-xl-none woocommerce-products-header__title page-title">Цветы в корзинах<i></i></h1>
			<a href="/product-category/cvety/cvety-v-korzinah/" class="col-xs-4 activ_cat">Смотреть все</a>
		</div>
		<div class="col-12 content_product_new category"> 
				<?php echo do_shortcode( '[product_category category="cvety-v-korzinah" per_page="6" columns="1"] ' ); ?>  
		</div>
		<div class="col-xs-12 category">
			<a href="/product-category/cvety/cvety-v-korzinah/" class="activ_cat">Смотреть все Цветы в корзинах
				<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
			</a>
		</div>

		<div class="icons top_icon tp-4"><i></i><span>Пришлем фото Вашего заказа перед отправкой</span></div>

		<div class="row category category-row">
			<h1 class="col-xs-7 category_title d-block d-xl-none woocommerce-products-header__title page-title">Ароматы для дома<i></i></h1>
			<a href="/product-category/cvety/aromaty-dlja-doma/" class="col-xs-4 activ_cat">Смотреть все</a>
		</div>
		<div class="col-12 content_product_new category"> 
				<?php echo do_shortcode( '[product_category category="aromaty-dlja-doma" per_page="6" columns="1"] ' ); ?>  
		</div>
		<div class="col-xs-12 category">
			<a href="/product-category/cvety/aromaty-dlja-doma/" class="activ_cat">Смотреть все Ароматы для дома
				<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
			</a>
		</div>

		<div class="icons top_icon tp-5"><i></i><span>100% ГАРАНТИЯ свежести цветов</span></div>

		<div class="row category category-row">
			<h1 class="col-xs-7 category_title d-block d-xl-none woocommerce-products-header__title page-title">Подарки<i></i></h1>
			<a href="/product-category/cvety/podarki/" class="col-xs-4 activ_cat">Смотреть все</a>
		</div>
		<div class="col-12 content_product_new category"> 
				<?php echo do_shortcode( '[product_category category="podarki" per_page="6" columns="1"] ' ); ?>  
		</div>
		<div class="col-xs-12 category">
			<a href="/product-category/cvety/podarki/" class="activ_cat">Смотреть все Подарки
				<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
			</a>
		</div>

		<div class="row individualny_buket individualny_buket_title">
			<h2 class="h_c_form"><span>Индивидуальный букет</span></h2>
		</div>	
		<div class="row individualny_buket individualny_buket_item">
			<div class="col-md-6 col-xl-5 order-md-2">
				<img class="img_right_form" src="<?php echo get_template_directory_uri(); ?>/images/form_k.jpg" alt="image">
			</div> 
			<div class="col-md-6 col-xl-7 order-md-1">
				<div class="wrap-c-form">
					<h4 class="Сделайте_мне_букет_на_свой_вкус">Сделайте мне букет на свой вкус</h4>
					<?php echo do_shortcode( '[contact-form-7 id="5" title="Форма на главной"]' ); ?>
				</div>
			</div> 
		</div>			
		<div class="row delivery">
			<h2><span>Наши преимущества</span></h2>
		</div>		 
		<div class="row wrap_delivery">
			<?php the_content(); ?>	
		</div>			

				

		 
		<?php //get_sidebar(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js" ></script>	
	 <script>
		jQuery(document).ready(function(){
			
			  jQuery(".second_slider .main_slider").slick({
				dots: false,
				infinite: false,
				slidesToShow: 4,
				slidesToScroll: 1,
				responsive: [
							{
							  breakpoint: 1200,
							  settings: {
								slidesToShow: 3,
								slidesToScroll: 1
							  }
							},
							{
							  breakpoint: 768,
							  settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							  }
							}
						 
						  ]
			  
			  });
			  
			jQuery(".wrap_home_cat a").mouseover(function() {
										jQuery(this).find('img').stop().animate( { width: "120%", left:"-10%", top:"-15%" }, 800 )
									})
									.mouseout(function(){
										var mleft = jQuery(this).find('img').css("left");
										var mtop = jQuery(this).find('img').css("top"); 
										jQuery(this).find('img').stop().css("top",mtop).animate( { width: "100%", left:"-="+mleft , top:"-="+mtop }, 800);		 
									});
 
		
		}); 
	 </script>

<?php get_footer(); ?>
