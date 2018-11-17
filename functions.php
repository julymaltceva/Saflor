<?php
add_theme_support( 'woocommerce' );
$theme_version = '5.0.2';
 
	$theme_customizer = get_template_directory() . '/inc/customizer.php';
	if ( is_readable( $theme_customizer ) ) {
		require_once $theme_customizer;
	} 
 
	if ( ! isset( $content_width ) ) {
		$content_width = 800;
	}
	function add_my_currency( $currencies ) {
		$currencies['RUB'] = __( 'Русский рубль', 'woocommerce' );
		return $currencies;
	}
	add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
	 
	function add_my_currency_symbol( $currency_symbol, $currency ) {
		switch( $currency ) { 
		case 'RUB': $currency_symbol = ' руб'; break;
		}
		return $currency_symbol;
	}
 
	add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_single_add_to_cart_text' );  // 2.1 +
	  
	function woo_custom_single_add_to_cart_text() {
	  
		return __( 'купить', 'woocommerce' );
	  
	}
	
	add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text' );  // 2.1 +
	  
	function woo_custom_product_add_to_cart_text() {
	  
		return __( 'купить', 'woocommerce' );
	  
	}
	
	if ( ! function_exists( 'main_setup_theme' ) ) :
		function main_setup_theme() {

			// Make theme available for translation: Translations can be filed in the /languages/ directory
			load_theme_textdomain( 'main', get_template_directory() . '/languages' );

			// Theme Support
			add_theme_support( 'title-tag' );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'html5', array(
				'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
			) );

			// Date/Time Format
			$theme_dateformat = get_option( 'date_format' );
			$theme_timeformat = 'H:i';

			// Default Attachment Display Settings
			update_option( 'image_default_align', 'none' );
			update_option( 'image_default_link_type', 'none' );
			update_option( 'image_default_size', 'large' );

			// Custom CSS-Styles of Wordpress Gallery
			add_filter( 'use_default_gallery_style', '__return_false' );

		}
		add_action( 'after_setup_theme', 'main_setup_theme' );
	endif;


	/**
	 * Add new User fields to Userprofile
	 *
	 * @since v1.0
	 */
	if ( ! function_exists( 'main_add_user_fields' ) ) :
		function main_add_user_fields( $fields ) {
			// Add new fields
			$fields['facebook_profile'] = 'Facebook URL';
			$fields['twitter_profile'] = 'Twitter URL';
			$fields['google_profile'] = 'Google+ URL';
			$fields['linkedin_profile'] = 'LinkedIn URL';
			$fields['xing_profile'] = 'Xing URL';
			$fields['github_profile'] = 'GitHub URL';

			return $fields;
		}
		add_filter( 'user_contactmethods', 'main_add_user_fields' ); // get_user_meta( $user->ID, 'facebook_profile', true );
	endif;


	/**
	 * Test if a page is a blog page
	 * if ( is_blog() ) { ... }
	 *
	 * @since v1.0
	 */
	function is_blog() {
		global $post;
		$posttype = get_post_type( $post );
		
		return ( ( is_archive() || is_author() || is_category() || is_home() || is_single() || ( is_tag() && ( 'post' === $posttype ) ) ) ? true : false );
	}


	/**
	 * Get the page number
	 *
	 * @since v1.0
	 */
	function get_page_number() {
		if ( get_query_var( 'paged' ) ) {
			print ' | ' . __( 'Page ' , 'main') . get_query_var( 'paged' );
		}
	}


	/**
	 * Disable comments for Media (Image-Post, Jetpack-Carousel, etc.)
	 *
	 * @since v1.0
	 */
	function main_filter_media_comment_status( $open, $post_id ) {
		$media_post = get_post( $post_id );
		if ( 'attachment' === $media_post->post_type ) {
			return false;
		}
		return $open;
	}
	add_filter( 'comments_open', 'main_filter_media_comment_status', 10 , 2 );


	/**
	 * Style Edit buttons as badges: http://getbootstrap.com/components/#badges
	 *
	 * @since v1.0
	 */
	function main_custom_edit_post_link( $output ) {
		$output = str_replace( 'class="post-edit-link"', 'class="post-edit-link badge badge-info"', $output );
		return $output;
	}
	add_filter( 'edit_post_link', 'main_custom_edit_post_link' );


	/**
	 * Responsive oEmbed filter: http://getbootstrap.com/components/#responsive-embed
	 *
	 * @since v1.0
	 */
	function main_oembed_filter( $html, $url, $attr, $post_id ) {
		$return = '<div class="embed-responsive embed-responsive-16by9">' . $html . '</div>';
		return $return;
	}
	add_filter( 'embed_oembed_html', 'main_oembed_filter', 10, 4 );


	if ( ! function_exists( 'main_content_nav' ) ) :
		/**
		 * Display a navigation to next/previous pages when applicable
		 *
		 * @since v1.0
		 */
		function main_content_nav( $nav_id ) {
			global $wp_query;

			if ( $wp_query->max_num_pages > 1 ) : ?>
				<div id="<?php echo $nav_id; ?>" class="d-flex mb-4 justify-content-between">
					<div><?php next_posts_link( '<span aria-hidden="true">&larr;</span> ' . __( 'Older posts', 'main' ) ); ?></div>
					<div><?php previous_posts_link( __( 'Newer posts', 'main' ) . ' <span aria-hidden="true">&rarr;</span>' ); ?></div>
				</div><!-- /.d-flex -->
			<?php
			else :
				echo '<div class="clearfix"></div>';
			endif;
		}

		// Add Class
		function posts_link_attributes() {
			return 'class="btn btn-secondary"';
		}
		add_filter( 'next_posts_link_attributes', 'posts_link_attributes' );
		add_filter( 'previous_posts_link_attributes', 'posts_link_attributes' );

	endif; // content navigation


	/**
	 * Modify Next/Previous Post output
	 *
	 * @since v2.0
	 */
	function post_link_attributes( $output ) {
		$class = 'class="btn btn-outline-secondary"';
		return str_replace( '<a href=', '<a ' . $class . ' href=', $output );
	}
	add_filter( 'next_post_link', 'post_link_attributes' );
	add_filter( 'previous_post_link', 'post_link_attributes' );


	/**
	 * Init Widget areas in Sidebar
	 *
	 * @since v1.0
	 */
	function main_widgets_init() {
		// Area 1
		register_sidebar( array(
			'name' => 'Sidebar',
			'id' => 'primary_widget_area',
			'before_widget' => '<div class="wrap_widgets">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => 'Sidebar2',
			'id' => 'primary_widget_area2',
			'before_widget' => '<div class="wrap_widgets">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		register_sidebar( array(
			'name' => 'Сайтбар на странице товара под кнопкой заказа',
			'id' => 'front_page_area',
			'before_widget' => ' ',
			'after_widget' => ' ',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		) );
	}
	add_action( 'widgets_init', 'main_widgets_init' );


	if ( ! function_exists( 'main_article_posted_on' ) ) :
		/**
		 * "Theme posted on" pattern
		 * 
		 * @since v1.0
		 */
		function main_article_posted_on() {
			global $theme_dateformat, $theme_timeformat;

			printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author-meta vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'main' ),
				esc_url( get_the_permalink() ),
				esc_attr( get_the_date( $theme_dateformat ) . ' - ' . get_the_time( $theme_timeformat ) ),
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date( $theme_dateformat ) . ' - ' . get_the_time( $theme_timeformat ) ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				esc_attr( sprintf( __( 'View all posts by %s', 'main' ), get_the_author() ) ),
				get_the_author()
			);

		}
	endif;


	/**
	 * Template for Password protected post form
	 * 
	 * @since v1.0
	 */
	function main_password_form() {
		global $post;
		$label = 'pwbox-' . ( empty( $post->ID ) ? rand() : $post->ID );

		$output = '<div class="row">';
			$output .= '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">';
			$output .= '<h4 class="col-md-12 alert alert-warning">' . __( 'This content is password protected. To view it please enter your password below.', 'main' ) . '</h4>';
				$output .= '<div class="col-md-6">';
					$output .= '<div class="input-group">';
						$output .= '<input type="password" name="post_password" id="' . $label . '" placeholder="' . __( 'Password', 'main' ) . '" class="form-control" />';
						$output .= '<div class="input-group-append"><input type="submit" name="submit" class="btn btn-primary" value="' . esc_attr( __( 'Submit', 'main' ) ) . '" /></div>';
					$output .= '</div><!-- /.input-group -->';
				$output .= '</div><!-- /.col -->';
			$output .= '</form>';
		$output .= '</div><!-- /.row -->';
		return $output;
	}
	add_filter( 'the_password_form', 'main_password_form' );


	if ( ! function_exists( 'main_comment' ) ) :
		/**
		 * Style Reply link
		 *
		 * @since v1.0
		 */
		function main_replace_reply_link_class( $class ) {
			$class = str_replace( "class='comment-reply-link", "class='btn btn-outline-secondary", $class );
			return $class;
		}
		add_filter( 'comment_reply_link', 'main_replace_reply_link_class' );

		/**
		 * Template for comments and pingbacks:
		 * add function to comments.php ... wp_list_comments( array( 'callback' => 'main_comment' ) );
		 *
		 * @since v1.0
		 */
		function main_comment( $comment, $args, $depth ) {
			global $theme_dateformat, $theme_timeformat;

			$GLOBALS['comment'] = $comment;
			switch ( $comment->comment_type ) :
				case 'pingback' :
				case 'trackback' :
			?>
			<li class="post pingback">
				<p><?php _e( 'Pingback:', 'main' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'main' ), '<span class="edit-link">', '</span>' ); ?></p>
			<?php
					break;
				default :
			?>
			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
				<article id="comment-<?php comment_ID(); ?>" class="comment">
					<footer class="comment-meta">
						<div class="comment-author vcard">
							<?php
								$avatar_size = 136;
								if ( '0' !== $comment->comment_parent ) {
									$avatar_size = 68;
								}
								echo get_avatar( $comment, $avatar_size );

								/* translators: 1: comment author, 2: date and time */
								printf( __( '%1$s, %2$s', 'main' ),
									sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
									sprintf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
										esc_url( get_comment_link( $comment->comment_ID ) ),
										get_comment_time( 'c' ),
										/* translators: 1: date, 2: time */
										//sprintf( __( '%1$s - %2$s', 'main' ), get_comment_time( $theme_dateformat ), get_comment_time( $theme_timeformat ) )
										sprintf( __( '%1$s ago', 'main' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) )
									)
								);
							?>

							<?php edit_comment_link( __( 'Edit', 'main' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .comment-author .vcard -->

						<?php if ( '0' === $comment->comment_approved ) : ?>
							<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'main' ); ?></em>
							<br />
						<?php endif; ?>

					</footer>

					<div class="comment-content"><?php comment_text(); ?></div>

					<div class="reply">
						<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'main' ) . ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
					</div><!-- .reply -->
				</article><!-- #comment-## -->

			<?php
					break;
			endswitch;

		}

		/**
		 * Custom Comment form
		 *
		 * @since v1.0
		 * @since v1.1: Added 'submit_button' and 'submit_field'
		 * @since v2.0.2: Added '$consent' and 'cookies'
		 */
		function main_custom_commentform( $args = array(), $post_id = null ) {
			if ( null === $post_id ) {
				$post_id = get_the_ID();
			}

			$commenter = wp_get_current_commenter();
			$user = wp_get_current_user();
			$user_identity = $user->exists() ? $user->display_name : '';

			$args = wp_parse_args( $args );

			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true' required" : '' );
			$consent  = ( empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"' );
			$fields = array(
				'author'  => '<div class="form-group"><label for="author">' . __( 'Name', 'main' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label>' . 
							'<input type="text" id="author" name="author" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></div>',
				'email'   => '<div class="form-group"><label for="email">' . __( 'Email', 'main' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label>' . 
							'<input type="email" id="email" name="email" class="form-control" value="' . esc_attr( $commenter['comment_author_email'] ) . '"' . $aria_req . ' /></div>',
				'url'     => '',
				'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' /> ' .
							 '<label for="wp-comment-cookies-consent">' . __( 'Save my name, email, and website in this browser for the next time I comment.', 'main' ) . '</label></p>',
			);

			$fields = apply_filters( 'comment_form_default_fields', $fields );
			$defaults = array(
				'fields'               => $fields,
				'comment_field'        => '<div class="form-group"><textarea id="comment" name="comment" class="form-control" aria-required="true" required placeholder="' . __( 'Comment', 'main' ) . ( $req ? '*' : '' ) . '"></textarea></div>',
				/** This filter is documented in wp-includes/link-template.php */
				'must_log_in'          => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'main' ), wp_login_url( apply_filters( 'the_permalink', get_the_permalink( get_the_ID() ) ) ) ) . '</p>',
				/** This filter is documented in wp-includes/link-template.php */
				'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'main' ), get_edit_user_link(), $user->display_name, wp_logout_url( apply_filters( 'the_permalink', get_the_permalink( get_the_ID() ) ) ) ) . '</p>',
				'comment_notes_before' => '',
				'comment_notes_after'  => '<p class="small comment-notes">' . __( 'Your Email address will not be published.', 'main' ) . '</p>',
				'id_form'              => 'commentform',
				'id_submit'            => 'submit',
				'class_submit'         => 'btn btn-primary',
				'name_submit'          => 'submit',
				'title_reply'          => '',
				'title_reply_to'       => __( 'Leave a Reply to %s', 'main' ),
				'cancel_reply_link'    => __( 'Cancel reply', 'main' ),
				'label_submit'         => __( 'Post Comment', 'main' ),
				'submit_button'        => '<input type="submit" id="%2$s" name="%1$s" class="%3$s" value="%4$s" />',
				'submit_field'         => '<div class="form-submit">%1$s %2$s</div>',
				'format'               => 'html5',
			);

			return $defaults;

		}
		add_filter( 'comment_form_defaults', 'main_custom_commentform' );

	endif;


	/**
	 * Nav menus
	 *
	 * @since v1.0
	 */
	if ( function_exists( 'register_nav_menus' ) ) {
		register_nav_menus( array(
			'top-menu' => 'Меню в шапке',
			'main-menu' => 'Основное меню',
			'footer-menu-l' => 'Меню в футере левое', 
			'footer-menu-c' => 'Меню в футере центральное', 
			'footer-menu-b' => 'Меню в футере правое' 
		) );
	}

	// Custom Nav Walker: wp_bootstrap4_navwalker()
	$custom_walker = get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
	if ( is_readable( $custom_walker ) ) {
		require_once $custom_walker;
	}

	$custom_walker_footer = get_template_directory() . '/inc/wp_bootstrap_navwalker_footer.php';
	if ( is_readable( $custom_walker_footer ) ) {
		require_once $custom_walker_footer;
	}

 
	add_action( 'wp_enqueue_scripts', 'main_scripts_loader' );
	function main_scripts_loader() {

		wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', false, $theme_version, 'all' ); 
		wp_enqueue_style( 'fonts', get_template_directory_uri() . '/fonts/fonts.css', false, $theme_version, 'all' );  
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', false, $theme_version, 'all' );  
		
		if ( is_rtl() ) {
			wp_enqueue_style( 'rtl', get_template_directory_uri() . '/assets/css/rtl.min.css', false, $theme_version, 'all' );
		}
 
		wp_enqueue_script( 'popper',  'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', false, $theme_version, true );
		wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', false, $theme_version, true );
		/*wp_enqueue_script( 'swipe', get_template_directory_uri() . '/assets/js/bootstrap-swipe-carousel.js', false, $theme_version, true );*/
		wp_enqueue_script( 'loop2', get_template_directory_uri() . '/assets/js/jquery.zoom.js', false, $theme_version, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}


			/*wp_deregister_script('jquery');
			wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), '3.3.1');*/
	}

	
	
add_filter('woocommerce_get_image_size_thumbnail','add_thumbnail_size',1,10);
function add_thumbnail_size($size){

    $size['width'] = 212;
    $size['height'] = 210;
    $size['crop']   = 1; //0 - не обрезаем, 1 - обрезка
    return $size;
}
add_filter('woocommerce_get_image_size_single','add_single_size',1,10);
function add_single_size($size){

    $size['width'] = 570;
    $size['height'] = 550;
    $size['crop']   = 1;
    return $size;
}	
add_filter('woocommerce_get_image_size_gallery_thumbnail','add_gallery_thumbnail_size',1,10);
function add_gallery_thumbnail_size($size){

    $size['width'] = 124;
    $size['height'] = 121;
    $size['crop']   = 1;
    return $size;
}	
	
	
	
	
	add_filter('add_to_cart_fragments', 'header_add_to_cart_fragment');

	function header_add_to_cart_fragment( $fragments ) {
		global $woocommerce;
		ob_start();
		?>
		<span class="basket-btn__counter">(<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>)</span>
		<?php 
		$fragments['.basket-btn__counter'] = ob_get_clean();
		return $fragments;
	}
	add_filter('document_title_parts', function( $parts ){
		if( isset($parts['site']) ) unset($parts['site']);
		return $parts;
	});
 
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) { 
 	$fragments['span.cart_count'] = '<span class="cart_count">('.WC()->cart->cart_contents_count.')</span>';
 	return $fragments;
}


function main_slider (){
	$args = array('post_type' => 'main_gallery','posts_per_page' => -1);
	$posts = get_posts( $args );
	$t_count= 0;
	if ( $posts ) { 
		$k_post = count( $posts ); ?>
			<div id="carouselExampleIndicators" class="carousel slide header-slider" data-ride="carousel">
				<ol class="carousel-indicators hidden">
					<?php	for ( $x=0; $x < $k_post; $x++ ){
								if ( $x == 0 ) {
									echo '<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>';
								}else{
									echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$x.'"></li>';
								}
							} ?> 
				</ol>
				<div class="carousel-inner" role="listbox">
				
		<?php foreach($posts as $post){ setup_postdata($post);
				$metas = get_post_meta( $post->ID);?>
				
					<div class="carousel-item<?php if( $t_count == 0 ) {echo ' active'; } ?>">
						<a href="<?php echo $metas['wpcf-ssylka'][0]; ?>">
							<img class="d-none d-xl-block img-fluid" src="<?php echo $metas['wpcf-m_image'][0]; ?>" alt="">
							<img class="d-none d-md-block d-xl-none img-fluid" src="<?php echo $metas['wpcf-m_image768'][0]; ?>" alt="">
							<img class="d-block d-md-none img-fluid" src="<?php echo $metas['wpcf-m_image380'][0]; ?>" alt="">
						
						<div class="carousel-caption">
							<h3><?php echo $post->post_title; ?></h3>
							<p><?php echo $post->post_content; ?></p>
							<p class="link_slide" ><?php echo $metas['wpcf-tekst-knopki'][0]; ?></p>
						</div>
						</a>
						
					</div>
 
			<?php $t_count++;
		} wp_reset_postdata();  ?>
				</div>
				<?php /*
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				  */ ?>
			</div>
			<!--<script>
			jQuery(document).ready(function($){
				// Bootstrap карусель должна быть загружена в первую очередь
				$('.header-slider').swipeCarousel({
				  sensitivity: 'high' // low, medium или high
				});	
			});
			</script>-->

			<script>
		jQuery(document).ready(function(){
			
			  jQuery(".header-slider .carousel-inner").slick({
				dots: true,
				infinite: false,
				arrows: false,
				slidesToShow: 1,
				slidesToScroll: 1
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

		
<?php	 
	} 
}
 
add_filter( 'woocommerce_update_order_review_fragments', 'mc_woocommerce_update_order_review_fragments' );

function mc_woocommerce_update_order_review_fragments( $data ) {
 
	return  $data ;
}

function m_collect_time ( $data ){
	if ( !$data ) $data =array( 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20 ); 
	
	$result = "<span class='s-m-data'><label>Выберите дату</label><input type='text' class='m-data'></span>";
	$time = array();
	
	 $time[0] = "00:00 - 01:00"; $time[13] = "13:00 - 14:00";
	 $time[1] = "01:00 - 02:00"; $time[14] = "14:00 - 15:00";
	 $time[2] = "02:00 - 03:00"; $time[15] = "15:00 - 16:00";
	 $time[3] = "03:00 - 04:00"; $time[16] = "16:00 - 17:00";
	 $time[4] = "04:00 - 05:00"; $time[17] = "17:00 - 18:00";
	 $time[5] = "05:00 - 06:00"; $time[18] = "18:00 - 19:00";
	 $time[6] = "06:00 - 07:00"; $time[19] = "19:00 - 20:00";
	 $time[7] = "07:00 - 08:00"; $time[20] = "20:00 - 21:00";
	 $time[8] = "08:00 - 09:00"; $time[21] = "21:00 - 22:00";
	 $time[9] = "09:00 - 10:00"; $time[22] = "22:00 - 23:00";
	$time[10] = "10:00 - 11:00"; $time[23] = "23:00 - 00:00";
	$time[11] = "11:00 - 12:00"; 
	$time[12] = "12:00 - 13:00"; 
	
	if ( is_array ( $data ) ){
		
		$result .= "<span class='s-m-time'><label>Выберите время</label><select name='m_time' class='m_time'>";

		foreach	( $data as $val ){
			     
			$result .= "<option value='".$time[$val]."'>".$time[$val]."</option>";

		}
		
		$result .= "</select></span>";
		
	}
	 
	return $result;
	
}

add_action( 'woocommerce_after_shipping_rate', 'mc_w_woocommerce_after_shipping_rate' );

function mc_w_woocommerce_after_shipping_rate( $data ) {
	
	if ( $data->id == "flat_rate:1" ){ //Дневная доставка в пределах МКАД c 10.00 до 21.00
		
			$time_arr = array( 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20 ); // от 0 до 23 
			
			echo m_collect_time ( $time_arr ); 
	}elseif ( $data->id == "flat_rate:4" ){ // Утренняя и вечерняя доставки в пределах МКАД с 8.00 до 10.00 и с 21.00 до 00.00
		
			$time_arr = array( 8, 9, 21, 22, 23 ); 

			echo m_collect_time ( $time_arr );
			
	}elseif ( $data->id == "flat_rate:5" ){ // Ночная доставка в пределах МКАД c 00.00 до 8.00
		
			$time_arr = array( 0, 1, 2, 3, 4, 5, 6, 7 ); 

			echo m_collect_time ( $time_arr );
			
	}elseif ( $data->id == "flat_rate:6" ){ // Доставка за пределы МКАД до 5 км
		
			$time_arr = array(); 

			echo m_collect_time ( $time_arr );
			
	}elseif ( $data->id == "flat_rate:7" ){ // Доставка за пределы МКАД до 10 км
		
			$time_arr = array(); 

			echo m_collect_time ( $time_arr );
			
	}elseif ( $data->id == "flat_rate:8" ){ // Доставка за пределы МКАД до 20 км
		
			$time_arr = array(); 

			echo m_collect_time ( $time_arr );
			
	}else{
			$time_arr = array(); 

			echo m_collect_time ( $time_arr );
			
	}
}

add_filter( 'woocommerce_get_privacy_policy_text', 'filter_function_name_7633', 10, 2 );
function filter_function_name_7633( $text, $type ){
	$text ='';

	return $text;
}

add_filter('document_title_parts', function( $parts ){
	
	if( isset($parts['page']) ) unset($parts['page']);
	return $parts;
});

add_filter('woocommerce_get_catalog_ordering_args', 'tk_woocommerce_catalog_orderby');
function tk_woocommerce_catalog_orderby( $args ) {
    if( is_product_category( 'bukety-nevesty' ) ) {
		$args['orderby'] = 'menu_order';
		$args['order'] = 'ASC';
		$args['meta_key'] = '';
    }
    return $args;
}

add_filter( 'woocommerce_default_catalog_orderby', 'filter_function_name_6539' );
function filter_function_name_6539( $option ){
	if( is_product_category( 'bukety-nevesty' ) ) {
		$option ="menu_order";
	}
	return $option;
}

 

add_filter('woocommerce_variable_price_html', 'custom_variation_price', 10, 2);

    function custom_variation_price( $price, $product ) {

        foreach($product->get_available_variations() as $pav){
            $def=true;
            foreach($product->get_variation_default_attributes() as $defkey=>$defval){
                if($pav['attributes']['attribute_'.$defkey]!=$defval){
                    $def=false;             
                }   
            }
            if($def){
                $price = $pav['display_price'];         
            }
        }   

        return woocommerce_price($price);

    }
 
/*	
add_filter( 'woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_args' );
function custom_woocommerce_get_catalog_ordering_args( $args ) {
$orderby_value = isset( $_GET['orderby'] ) ? woocommerce_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );

if ( 'name_list' == $orderby_value ) {
$args['orderby'] = 'name';
$args['order'] = 'ASC';
$args['meta_key'] = '';
}

return $args;
}
*/

	
add_filter( 'woocommerce_default_catalog_orderby_options', 'custom_woocommerce_catalog_orderby' );
add_filter( 'woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby' );

function custom_woocommerce_catalog_orderby( $sortby ) {
	 
	unset( $sortby['popularity'] ) ;
if(!$sortby['menu_order'])	{
	$sortby['title'] = 'названию';
}else{
	$sortby['menu_order'] = 'названию';
}
	$sortby['price'] = 'цене от меньшей к большей'; 
	$sortby['price-desc'] = 'цене от большей к меньшей'; 
	$sortby['date'] = 'новизне'; 
 
	return $sortby;
}

add_action( 'admin_enqueue_scripts', function(){
	wp_enqueue_script('my-wp-admin', get_template_directory_uri() . '/assets/js/my-wp-admin.js');
}, 99 );

add_filter( 'posts_clauses', 'filter_function_name_3184', 99);

function filter_function_name_3184( $clauses ){
	
 
	$clauses['join'] = str_replace("_price", "wpcf-pr-filter", $clauses['join']);
	
	return $clauses;
}

add_filter( 'single_product_archive_thumbnail_size', 'filter_function_name_1377' );
function filter_function_name_1377( $size ){
	
	$size="large";
	return $size;
}
 

remove_filter( 'woocommerce_product_loop_start', 'woocommerce_maybe_show_product_subcategories' );




 
?>
