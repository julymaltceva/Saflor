<?php if( !is_front_page() ){ ?>
	</div>
<?php } ?>
	</main><!-- /#main -->
	<footer id="footer">
		<div class="container">
			<div class="row top-footer">
				<div class="footer-info col-md-3 col-xs-4">
						<a class="footer-logo" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php $header_logo = get_theme_mod( 'header_logo' ); if ( ! empty( $header_logo ) ) : ?>
								<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
							<?php else : echo esc_attr( get_bloginfo( 'name', 'display' ) ); endif; ?>
						</a>
						<p class="f-l-text text-1">Saflor Flowers<br/>
							Интернет-магазин цветов и подарков<br/>
							© 2018
						</p>
						<div class="f-l-icon">
							<a href="https://wa.me/79855592500?text=Запрос%20с%20сайта" target="_blank"><i class="skype"></i></a>
							<!--a href="/"><i class="tel"></i></a>
							<a href="/"><i class="messenger"></i></a-->
						</div>
						<a  class="h-tel" href="tel:+74994905002">+7 (499) 490-50-02</a>
						<a  class="h-tel" href="tel:+79855592500">+7 (985) 559-25-00</a>
						<a href="#contact_form_pop" class="active_form fancybox-inline"> Заказать звонок</a>
						<p class="f-l-text text-2">Saflor Flowers<br/>
							Интернет-магазин цветов и подарков<br/>
							© 2018
						</p>
				</div>
				<div class="footer-menu col-xs-8">
					<div class="col-md-3">
						<?php wp_nav_menu( array( 'theme_location'  => 'footer-menu-l', 'container' => '', 'menu_class' => 'f-menu', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker'  => new WP_Bootstrap_Navwalker(), ) ); ?>
						<ul id="menu-futer-centr" class="foot f-menu-1">
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1104" class="bold menu-item menu-item-type-taxonomy menu-item-object-product_cat nav-item menu-item-1104">
								<a title="Цветы" href="https://sa-flor.ru/product-category/cvety/" class="nav-link">Цветы</a>
							</li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-3617" class="bold menu-item menu-item-type-taxonomy menu-item-object-product_cat nav-item menu-item-3617">
								<a title="Ароматы для дома" href="https://sa-flor.ru/product-category/aromaty-dlja-doma/" class="nav-link">Ароматы для дома</a>
							</li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1123" class="bold menu-item menu-item-type-taxonomy menu-item-object-product_cat nav-item menu-item-1123">
								<a title="Свадебная флористика" href="https://sa-flor.ru/product-category/svadebnaja-floristika/" class="nav-link">Свадебная флористика</a>
							</li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1134" class="bold menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-1134">
								<a title="Услуги" href="#" class="nav-link">Услуги</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<?php wp_nav_menu( array( 'theme_location'  => 'footer-menu-c', 'container' => '', 'menu_class' => 'f-menu', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker'  => new WP_Bootstrap_Navwalker(), ) ); ?>
						<ul id="menu-futer-pravoe" class="foot f-menu-3">
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1136" class="bold menu-item menu-item-type-taxonomy menu-item-object-product_cat nav-item menu-item-1136">
								<a title="Подарки" href="https://sa-flor.ru/product-category/podarki/" class="nav-link">Подарки</a>
							</li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1148" class="bold menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-1148">
								<a title="Корпоративным клиентам" href="https://sa-flor.ru/korporativnym-klientam/" class="nav-link">Корпоративным клиентам</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 f-right">
						<?php wp_nav_menu( array( 'theme_location'  => 'footer-menu-b', 'container' => '', 'menu_class' => 'f-menu', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker'  => new WP_Bootstrap_Navwalker(), ) ); ?>
					
						<div class="wrap-icons">
							<h5>присоединяйтесь к нам</h5>
							<a href="https://www.instagram.com/saflorflowers/?hl=ru" target="_blank"><i class="sprite-social sprite-1"></i></a>
							<!--a href="/" target="_blank"><i class="sprite-social sprite-2"></i></a-->
							<a href="https://www.facebook.com/saflor.saflor.1" target="_blank"><i class="sprite-social sprite-3"></i></a> 
							<!--a href="/"><i class="sprite-social sprite-4"></i></a--> 
							<!--a href="/" target="_blank"><i class="sprite-social sprite-5"></i></a--> 
						</div>
						<ul id="menu-futer-levoe" class="foot f-menu-3">
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-71" class="bold menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-71">
								<a title="Кабинет покупателя" href="https://sa-flor.ru/my-account/" class="nav-link">Кабинет покупателя</a>
							</li>
						</ul> 
					</div>
				</div>
			</div>
			<a href="//unicoweb.ru/" target="_blank" class="development">Разработка сайта: UNICO</a> 
		</div> 
	</footer> 
	
</div><!-- /#wrapper -->

<?php wp_footer(); ?>
 
	<script> 
 
		jQuery(document).ready(function(){
			var cart_t_margin = ( jQuery(window).height() - 70 ) / 2 ;
			
			if ( cart_t_margin < 0 ){
				cart_t_margin = 20;
			}
			jQuery('.wrap_f_cart').css('top', cart_t_margin);
 

			jQuery('.main_search').click(function(eventObject){
				eventObject.preventDefault();
				jQuery('.hide_form_search').show(); 
			});
			
			jQuery('.close_form').click(function(eventObject){
				eventObject.preventDefault();
				jQuery('.hide_form_search').hide(); 
			});
			
			jQuery(".wrap_w_category").on("click", ".m_orderby li", function () {
			  		var t_act = jQuery(this).attr('data');
					jQuery('.woocommerce-ordering .orderby').val( t_act );
					jQuery('.woocommerce-ordering').submit(); 
			});
 
			jQuery(".wrap_w_category").on("click", ".active_but", function (eventObject) {
					eventObject.preventDefault();
					jQuery('.main_activ_sl').removeClass('main_activ_sl');
					jQuery(this).parents(".slick-slide").addClass('main_activ_sl');
					jQuery(this).parents(".wrmc-2").find(">div").addClass('main_activ_sl'); 
			});
 			jQuery('.active_but').click(function(eventObject){
					eventObject.preventDefault();
					jQuery('.main_activ_sl').removeClass('main_activ_sl');
					jQuery(this).parents(".slick-slide").addClass('main_activ_sl');
					jQuery(this).parents(".wrmc-2").find(">div").addClass('main_activ_sl'); 
			}); 
 
 
			jQuery('.reset_filter').click(function(eventObject){
				eventObject.preventDefault();
				 window.location.replace( window.location.origin + window.location.pathname ); 
 
			});
			
			jQuery('.cart_icon').toggle(  
					function() {  
						jQuery('.f_cart_content').show();  
					},  
					function() {  
						jQuery('.f_cart_content').hide();  
					}  
				);	
 
			jQuery('.wpf_slider span.ui-slider-handle:first').click(function(){
				 
 
			}); 
			
			if( jQuery(window).width() < 769 ){
				
				jQuery('.wpf_item_name').addClass('wpf_grouped_close');
				jQuery('.wpf_items_group').hide();
				
			}
			
			
			//jQuery('.wrap_post_thumb').zoom({ touch:'false' });
			
			jQuery('#menu-osnovnoe-menju .menu-item-type-taxonomy .dropdown-toggle').click(function(){
				
				if( jQuery(window).width() > 1200 ){
				
					window.location = jQuery(this).attr('href');
				
				}
				 
			});
						
		}); 
	</script>
<script type="text/javascript" src="//api.venyoo.ru/wnew.js?wc=venyoo/default/science&widget_id=6623447452090368"></script>
</body>
</html>