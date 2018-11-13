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
			<div class="col-12 content_product_new">
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
			<div class="col-12 content_product_new"> 
				<?php echo do_shortcode( '[product_category category="podarki" per_page="10" columns="1" visibility="featured"] ' ); ?>  
			</div>
 
			<div class="col-12">
				<a href="/product-category/podarki/" class="activ_cat">Смотреть все</a>
			</div>
		</div>

		<div class="row category">
			<h2 class="category_title col-xs-4"><span>Букеты</span></h2>
			<div class="col-xs-4"></div>
			<a href="/product-category/cvety/bukety/" class="activ_cat col-xs-4">Смотреть все</a>
		</div>

		<div class="row">
			<h2 class="h_c_form"><span>Индивидуальный букет</span></h2>
		</div>	
		<div class="row">
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
			
			  jQuery(".content_product_new .main_slider").slick({
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