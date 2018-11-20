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
				<?php echo do_shortcode( '[products ids="1365, 1242, 1238, 1246, 1248, 1241" columns="1" orderby="price"] ' ); ?>  
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
				<?php echo do_shortcode( '[products ids="2302, 1562, 1535, 1501, 1499, 1533" columns="1" orderby="price"] ' ); ?>  
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
				<?php echo do_shortcode( '[products ids="932, 1042, 584, 935, 975, 957" columns="1" orderby="price"] ' ); ?>  
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
				<?php echo do_shortcode( '[products ids="815, 840, 3028, 835, 3290, 914" columns="1" orderby="price"] ' ); ?>  
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
				<?php echo do_shortcode( '[products ids="3545, 3663, 3667, 3681, 3695, 3461" columns="1" orderby="price"] ' ); ?>  
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
				<?php echo do_shortcode( '[products ids="484, 2952, 286, 297, 379, 641" columns="1" orderby="price"] ' ); ?>  
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
