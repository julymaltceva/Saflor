<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127980924-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127980924-1');
</script>

<link rel="stylesheet" href="/wp-content/themes/main/reset.css" type="text/css"/>
<script src="https://use.fontawesome.com/718714b9fd.js"></script>
</head> 
<?php  global $woocommerce;	?>
<body <?php body_class(); ?>>
<div id="wrapper"> 
	<header>
		<div class="container">
			<div class="row top-row">
				<div class="col-md-4 d-none d-md-block">
					<p class="top-l-1">Доставка цветов и подарков</p>
					<p class="top-l-2">Москва, Комсомольская пл. д.1А</p>
					<p class="top-l-3">м. Комсомольская (самовывоз)</p>
					<div class="wrap-icons">
						<a href="https://www.instagram.com/saflorflowers/?hl=ru" target="_blank"><i class="sprite-social sprite-1"></i></a>
						<a href="/" target="_blank"><i class="sprite-social sprite-2"></i></a>
						<a href="/" target="_blank"><i class="sprite-social sprite-3"></i></a> 
						<!--a href="/"><i class="sprite-social sprite-4"></i></a--> 
						<a href="/" target="_blank"><i class="sprite-social sprite-5"></i></a> 
					</div>  
				</div>
				<div class="col-xs-2 col-md-4 logo">  
					<a class="top-logo" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php $header_logo = get_theme_mod( 'header_logo' ); if ( ! empty( $header_logo ) ) : ?>
							<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
						<?php else : echo esc_attr( get_bloginfo( 'name', 'display' ) ); endif; ?>
					</a>
				</div> 
				<div class="col-12 delivery col-xs-5 d-md-none">  
					<p class="top-l-1">Доставка цветов и подарков</p>
				</div> 
				<div class="col-md-4 col-xs-3 phone">
					<div class="wrap_head_tel">
							<a class="reg d-none d-md-block" href="/my-account" class="reg">Регистрация / Вход </a>
							<a  class="h-tel h-tel-1" href="tel:+74994905002">+7 (499) 490-50-02</a>
							<a  class="h-tel" href="tel:+79855592500">+7 (985) 559-25-00</a>
							<a href="#contact_form_pop" class="active_form d-none d-md-block fancybox-inline"> Заказать звонок</a>
							<div style="display:none" class="fancybox-hidden">
								<div id="contact_form_pop" class="form_index">
									<?php echo do_shortcode( '[contact-form-7 id="2903" title="Обратная связь"]' ); ?>
								</div>
							</div>
										
					</div>
				</div>
				
			</div>
			<div class="wrap_15"> 
				<div class="row col_bg_top_menu">
					<div class="col-12">
						<nav class="navbar navbar-expand-xl navbar-light">
							<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								 
							</button> 
							<div class="navbar-collapse"  id="navbarSupportedContent">
							<span class="navbar-brand d-xl-none">меню</span>
								<?php wp_nav_menu( array( 'theme_location'  => 'main-menu', 'container' => '', 'menu_class' => 'nav nav-pills nav-fill', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker'  => new WP_Bootstrap_Navwalker(), ) ); ?>
							
							
								<form class="search-form-mobile" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<input type="text" id="s" name="s" class="form-control mr-sm-2" placeholder="Поиск по сайту..." > 
									<input type="hidden" name="post_type" value="product"  class="form-control" /> 
									<i class="icon_search"></i>
								</form> 
							</div> 
						</nav> 
						<a href="#" class="main_search"></a>	
						<div class="hide_form_search">
							<i class="close_form"></i>	
							<form class="form-inline search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<input type="text" id="s" name="s" class="form-control mr-sm-2" placeholder="Поиск по сайту..." > 
								<input type="hidden" name="post_type" value="product"  class="form-control" />
								<input type="submit" id="searchsubmit" value="найти" />
								<i class="icon_search"></i>
							</form> 
						</div>	
								
						<div class="wrap_f_cart">
							<div class="cart_icon d-none d-md-block">
								<span class="cart_count">(<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>)</span>
							</div>
							<a href="/cart/" class="cart_icon2 d-md-none">
								<span class="cart_count">(<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>)</span>
							</a>
							<div class="f_cart_content">
								<?php the_widget( "WC_Widget_Cart" ); ?>
							</div>
						</div>
						
						
					</div>
 
				</div> 
			</div>
 
			<?php if( is_front_page() ){ ?>	
				<div class="row wrap_main_slide">
					<div class="col-12">
						<?php main_slider (); ?>
					</div>
				</div>
			<?php } ?>
				<div class="row wrap_to_icon">
					<div class="top_icon tp-1"><i></i><span>БЕСПЛАТНАЯ<br/>доставка</span></div>
					<div class="top_icon tp-2"><i></i><span>Уникальная открытка в подарок</span></div>
					<div class="top_icon tp-3"><i></i><span>Все способы ОПЛАТЫ</span></div>
					<div class="top_icon tp-4"><i></i><span>Пришлем фото Вашего заказа перед отправкой</span></div>
					<div class="top_icon tp-5"><i></i><span>100% ГАРАНТИЯ свежести цветов</span></div>
				</div>	 

		</div>

	</header>
	

<?php if( !is_front_page() && !is_shop() && !is_product_category() && !is_product_tag() ){ ?>	

	<div class="container">
		<div class="row">
			<div class="col-12 breadcrumb">
				<?php if(function_exists('bcn_display')) { bcn_display(); } ?>
			</div>
		</div>

	</div>

<?php } ?>
	

	
<main id="main" class="container">

<?php if( !is_front_page() ){ ?>
	<div class="row">
<?php } ?>
