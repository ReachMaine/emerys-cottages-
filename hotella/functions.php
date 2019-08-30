<?php

// Add Localization
load_theme_textdomain('hotella', get_template_directory().'/languages');

// Include inc folder files
include_once get_template_directory(). '/inc/init.php';

// Sets up theme defaults and registers support for various WordPress features
add_action( 'after_setup_theme', 'hotella_webnus_theme_setup' );
function hotella_webnus_theme_setup() {
	add_theme_support('title-tag');
	add_theme_support('woocommerce');
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-formats', array( 'aside','gallery', 'link', 'quote','image','video','audio' ));

	// webnus thumbnails
	add_image_size("hotella_webnus_tabs_img",		164, 124, true);
	add_image_size("hotella_webnus_thumb300x200",	300, 200, true);
	add_image_size("hotella_webnus_blog3_thumb",	420, 280, true);
	add_image_size("hotella_webnus_blog2_thumb",	420, 330, true);
	add_image_size("hotella_webnus_square",			460, 460, true);
	add_image_size("hotella_webnus_latest_cover",	690, 460, true);
	add_image_size("hotella_webnus_latestfromblog",	720, 388, true);
	add_image_size("post-thumbnail",440, 440, true);

	remove_action( 'init', 'postratings_init' );
	add_action( 'init', 'hotella_webnus_register_menus');
	add_action( 'widgets_init', 'hotella_webnus_sidebar_init');
	add_action( 'wp_enqueue_scripts', 'hotella_webnus_script_loader');
	add_action( 'wp_enqueue_scripts', 'hotella_webnus_api', 10);
	add_action( 'admin_enqueue_scripts', 'hotella_webnus_admin_enqueue' );
	add_action( 'wp_head', 'hotella_webnus_wphead_action');
	add_action( 'login_head', 'hotella_webnus_custom_login_logo' );
	add_action( 'wp_head', 'hotella_webnus_open_graph_tags');
	add_action( 'admin_bar_menu', 'hotella_webnus_admin_bar_link',25);
	add_action( 'template_redirect', 'hotella_webnus_maintenance_mode');
	add_action( 'admin_bar_menu', 'hotella_remove_redux_themeoption_from_adminbar', 999 );
	add_action( 'init','hotella_webnus_set_vc_as_theme');
	add_filter('excerpt_length', 'hotella_webnus_excerpt_length', 999);
	add_filter('excerpt_more', 'hotella_webnus_excerpt_more');
	add_filter('the_content_more_link', 'hotella_webnus_excerpt_more');
	add_filter('upload_mimes', 'hotella_webnus_custom_font_mimes');
	add_filter('body_class', 'hotella_webnus_body_classes');
	add_filter( 'the_content', 'hotella_fix_vc_p_tag' );
	add_filter('expand_ratings_template', 'hotella_webnus_ratings_fix', 999, 1 );

	update_option( 'image_default_link_type', 'file' );
}

// Globals should always be within a function
function hotella_webnus_options() {
	global $hotella_webnus_options;
	return $hotella_webnus_options;
}

/***************************************/
/*	    Maintenance Mode
/***************************************/
function hotella_webnus_maintenance_mode() {
	$hotella_webnus_options = hotella_webnus_options();
	$is_maintenance = isset( $hotella_webnus_options['hotella_webnus_maintenance_mode'] ) ? $hotella_webnus_options['hotella_webnus_maintenance_mode'] : '';
	$maintenance_page = isset($hotella_webnus_options['hotella_webnus_maintenance_page']) ? $hotella_webnus_options['hotella_webnus_maintenance_page'] : '';
    if (!is_page( $maintenance_page ) && $is_maintenance && $maintenance_page && !current_user_can('edit_posts') && !in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ))){
        wp_redirect( esc_url( home_url( 'index.php?page_id='.$maintenance_page) ) );
        exit();
    }
}

/***************************************/
/*	    General Sidebars
/***************************************/

function hotella_webnus_sidebar_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'hotella' ),
		'id'            => 'left-sidebar',
		'description'   => esc_html__( 'Appears in left side in the blog page.', 'hotella' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="subtitle-wrap"><h4 class="subtitle">',
		'after_title'   => '</h4></div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'hotella' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Appears in right side in the blog page.', 'hotella' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="subtitle-wrap"><h4 class="subtitle">',
		'after_title'   => '</h4></div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Custom Sidebar', 'hotella' ),
		'id'            => 'custom-sidebar',
		'description'   => esc_html__( 'Appears in custom pages.', 'hotella' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="subtitle-wrap"><h4 class="subtitle">',
		'after_title'   => '</h4></div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Toggle Top Area Section 1', 'hotella' ),
		'id'            => 'top-area-1',
		'description'   => esc_html__( 'Appears in top area section 1', 'hotella' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="subtitle">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Toggle Top Area Section 2', 'hotella' ),
		'id'            => 'top-area-2',
		'description'   => esc_html__( 'Appears in top area section 2', 'hotella' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="subtitle">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Toggle Top Area Section 3', 'hotella' ),
		'id'            => 'top-area-3',
		'description'   => esc_html__( 'Appears in top area section 3', 'hotella' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="subtitle">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Toggle Top Area Section 4', 'hotella' ),
		'id'            => 'top-area-4',
		'description'   => esc_html__( 'Appears in top area section 4', 'hotella' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="subtitle">',
		'after_title'   => '</h5>',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Footer Section 1', 'hotella' ),
		'id'            => 'footer-section-1',
		'description'   => esc_html__( 'Appears in footer section 1', 'hotella' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="subtitle">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Section 2', 'hotella' ),
		'id'            => 'footer-section-2',
		'description'   => esc_html__( 'Appears in footer section 2', 'hotella' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="subtitle">',
		'after_title'   => '</h5>',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Footer Section 3', 'hotella' ),
		'id'            => 'footer-section-3',
		'description'   => esc_html__( 'Appears in footer section 3', 'hotella' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="subtitle">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Section 4', 'hotella' ),
		'id'            => 'footer-section-4',
		'description'   => esc_html__( 'Appears in footer section 4', 'hotella' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="subtitle">',
		'after_title'   => '</h5>',
	) );



	  register_sidebar( array(
		'name' => esc_html__( 'WooCommerce Page Sidebar', 'hotella' ),
		'id' => 'shop-widget-area',
		'description' => esc_html__( 'Product page widget area', 'hotella' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3><div class="sidebar-line"><span></span></div>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Header Sidebar', 'hotella' ),
		'id' => 'header-advert',
		'description' => esc_html__( 'Header Sidebar', 'hotella' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="subtitle">',
		'after_title' => '</h5>',
	) );

	    if(function_exists('is_woocommerce')) {

        register_sidebar(array(
            'name' => 'WooCommerce Header Widget Area',
            'id' => 'woocommerce_header',
            'description' => esc_html__('This widget area should be used only for WooCommerce header cart widget', 'hotella' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        ));
}

}

/***************************************/
/*	    Excerpt Length
/***************************************/

function hotella_webnus_excerpt_length($length) {
    return 300;
}

function hotella_webnus_excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	return $excerpt;
}

function hotella_webnus_excerpt_more($more) {
	$hotella_webnus_options = hotella_webnus_options();
	$hotella_webnus_options['hotella_webnus_blog_readmore_text'] = isset($hotella_webnus_options['hotella_webnus_blog_readmore_text']) ? $hotella_webnus_options['hotella_webnus_blog_readmore_text'] : '' ;
	global $post;
	return '... <br><br><a class="readmore" href="' . get_permalink($post->ID) . '">' . esc_html($hotella_webnus_options['hotella_webnus_blog_readmore_text']) . '</a>';
}


/****************************/
/*	   Navigation Menu
/****************************/

/** Register Menus */
function hotella_webnus_register_menus() {
	register_nav_menus(
		array(
			'header-top-menu'		=> esc_html__('Topbar Menu', 'hotella'),
			'top-header-menu'		=> esc_html__('Top Header Menu', 'hotella'),
			'header-menu'			=> esc_html__('Header Menu', 'hotella'),
			'onepage-header-menu'	=> esc_html__('Onepage Header Menu', 'hotella'),
			'duplex-menu-left'		=> esc_html__('Duplex Menu - Left', 'hotella'),
			'duplex-menu-right' 	=> esc_html__('Duplex Menu - Right', 'hotella'),
			'footer-menu'			=> esc_html__('Footer Menu', 'hotella'),
		)
	);
}

/** Walker Nav Menu */
class hotella_webnus_description_walker extends Walker_Nav_Menu{
	function start_el(&$output, $item, $depth=0, $args=array(),$current_object_id=0){
		$this->curItem = $item;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		$is_mega_menu = '';
		if('page'  == $item->object){
			$post_obj = get_post( $item->object_id, 'OBJECT' );
			$is_mega = get_post_meta($item->object_id,'hotella_mega_menu_meta',true);
			if(!empty($is_mega))
				$is_mega_menu .= ' mega ';
		}
		$output .= $indent . '<li' . $id . $value . $class_names .'>';
		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
		$attributes = '';
		$item_output = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}
		if('page'  == $item->object){
			$post_obj = get_post( $item->object_id, 'OBJECT' );
			$is_mega = get_post_meta($item->object_id,'hotella_mega_menu_meta',true);
			if(!empty($is_mega))
				$item_output .= do_shortcode($post_obj->post_content);
			else {
				$item_output .= $args->before;

/** colorize categories in menu */
				$color ='';
				if ($item->object == 'category'){
					$cat_data = get_option("category_$item->object_id");
					$color = (!empty($cat_data['catBG']))?'style="color:'. $cat_data['catBG'] .'"':'';
				}
				$item_output .= '<a '. $color . $attributes. ' data-description="' .$item->description .'">';
				if(!empty($item->icon))
				$item_output .= '<i class="'.$item->icon.'"></i>';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= '</a>';
				$item_output .= $args->after;
			}
		}
		else{
			$item_output .= $args->before;
			$item_output .= '<a '. $attributes. ' data-description="' .$item->description .'">';
			if(!empty($item->icon))
				$item_output .= '<i class="'.$item->icon.'"></i>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;
		}

/** mega posts start */
		if ( $depth == 0 && $item->object == 'category' && $item->classes['0'] == "mega" ) {
			$item_output .= '<ul class="sub-posts">';
				global $post;
				$menuposts = get_posts( array( 'posts_per_page' => 4, 'category' => $item->object_id ) );
				foreach( $menuposts as $post ):
					$post_title = get_the_title();
					$post_link = get_permalink();
					$post_time = get_the_time(get_option( 'date_format' ));
					$post_comments = get_comments_number();
					$post_views = hotella_webnus_getViews(get_the_ID());
					$post_image = wp_get_attachment_image_src( get_post_thumbnail_id(), "hotella_webnus_latestfromblog" );
					if ( $post_image != ''){
						$menu_post_image = '<img src="' . $post_image[0]. '" alt="' . $post_title . '" width="' . $post_image[1]. '" height="' . $post_image[2]. '" />';
					} else {
						$menu_post_image = esc_html__( 'No image','hotella');
					}
					$item_output .= '
							<li>
								<figure>
									<a href="'  .esc_url($post_link) . '">' . $menu_post_image . '</a>
								</figure>
								<h5><a href="' . esc_url($post_link) . '">' . $post_title . '</a></h5>
							</li>';
				endforeach;
				wp_reset_postdata();
			$item_output .= '</ul>';
		}
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}


/****************************/
/*		Enqueue Scripts
/***************************/
include_once get_template_directory() . '/inc/dynamicfiles/dyncss.php';

// Webnus Google Fonts
function hotella_webnus_google_fonts_url() {
    $fonts_url 		= '';
    $font_families	= array();
    $subsets		= 'latin,latin-ext';

    // Default typography
    if ( 'off' !== _x( 'on', 'Lora font: on or off', 'hotella' ) ) {
        $font_families[] = 'Lora:400,400italic,700,700italic';
    }
    if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'hotella' ) ) {
        $font_families[] = 'Poppins:300,400,500,600,700';
    }
       if ( 'off' !== _x( 'on', 'Playfair Display font: on or off', 'hotella' ) ) {
        $font_families[] = 'Playfair Display:400,400italic,700';
    }

    if ( $font_families ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

    return esc_url( $fonts_url );
}

function hotella_webnus_script_loader(){
	$hotella_webnus_options = hotella_webnus_options();

	$w_theme = wp_get_theme();
	$w_version = $w_theme->get('Version');

// main style
	$main_style_uri = ($hotella_webnus_options['hotella_webnus_css_minifier'])?get_template_directory_uri().'/css/master-min.php':get_template_directory_uri().'/css/master.css';
	wp_register_style( 'main-style', $main_style_uri,false,$w_version);
	wp_enqueue_style('main-style');

// dyncss
	if ( hotella_webnus_dyncss_output() ) {
		wp_enqueue_style( 'webnus-dynamic-styles', get_template_directory_uri() . '/css/dyncss.css' );
		wp_add_inline_style( 'webnus-dynamic-styles', hotella_webnus_dyncss_output() );
	}

// google font
	wp_enqueue_style( 'webnus-google-fonts', hotella_webnus_google_fonts_url(), array(), null );

// Comment Reply JS
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

// Webnus JS
	wp_enqueue_script('hotella_doubletab', get_template_directory_uri() . '>/js/jquery.plugins.js', array( 'jquery' ), null, true);
	if(!is_single())
		wp_enqueue_script('hotella_masonry', get_template_directory_uri() . '/js/jquery.masonry.min.js', array( 'jquery' ), null, true);
	if($hotella_webnus_options['hotella_webnus_news_ticker'])
		wp_enqueue_script('hotella_ticker', get_template_directory_uri() . '/js/jquery.ticker.js', array( 'jquery' ), null, true);
	wp_enqueue_script( 'hotella_custom_script', get_template_directory_uri() . '/js/webnus-custom.js', array( 'jquery' ), null, true );
}

function hotella_webnus_api() {
	// Google Map api
    $hotella_webnus_options = hotella_webnus_options();
    $api_code       = ( isset( $hotella_webnus_options['hotella_google_map_api'] ) && $hotella_webnus_options['hotella_google_map_api'] ) ? 'key=' . $hotella_webnus_options['hotella_google_map_api'] : '';
    $sign_in        = ( isset( $hotella_webnus_options['hotella_google_map_api_sign_in'] ) && $hotella_webnus_options['hotella_google_map_api_sign_in'] ) ? 'signed_in=true' : '';
    $init_query     = ( $api_code || $sign_in ) ? '?' : '';
    $merge_query    = $api_code ? '&' : '';
    wp_register_script( 'hotella-googlemap-api', 'https://maps.googleapis.com/maps/api/js' . $init_query . $api_code . $merge_query . $sign_in, array(), false, false );

    // youtube
    wp_register_script( 'youtube-api', get_template_directory_uri() . '/js/youtube-api.js', array(), false, false );
}

/****************************/
/*	Admin Enqueue Scripts
/****************************/

function hotella_webnus_admin_enqueue() {
// IconFonts Style
	wp_enqueue_style( 'iconfonts-style', get_template_directory_uri() . '/css/iconfonts.css', null, null );
	wp_enqueue_style( 'sweetalert', get_template_directory_uri() . '/css/sweetalert.min.css', array(), 'all' );

// Webnus Admin JS
	wp_enqueue_script( 'sweetalert', get_template_directory_uri() . '/js/sweetalert.min.js', array(), null, true );
	wp_enqueue_script( 'hotella-custom-scripts', get_template_directory_uri() . '/js/webnus-custom-admin.js', array( 'jquery' ), null, true );
}


/************************************************************/
/*	Add Page Background & Typekit & Header Area to Header
/************************************************************/

function hotella_webnus_page_background_override(){
	$wrap_color	= rwmb_meta( 'hotella_wrap_color_meta' );
	$bgcolor	= rwmb_meta( 'hotella_body_bg_color_meta' );
	$bgimages	= rwmb_meta( 'hotella_body_bg_img_meta' );
	$bgimage	= '';
	if ( $bgimages ) :
		foreach ( $bgimages as $bgimage ) :
			$bgimage = $bgimage['full_url'];
		endforeach;
	endif;
	$bgpercent	= rwmb_meta( 'hotella_body_bg_image_100_meta' );
	$bgrepeat	= rwmb_meta( 'hotella_body_bg_image_repeat_meta' );
		echo '<style type="text/css" media="screen">body{ ';
		if(!empty($bgcolor)) {
			echo "background-image:url('');background-color:{esc_attr( $bgcolor )};";
		}
		if(!empty($bgimage)) {
			if($bgrepeat == 1)
				echo  " background-image:url('{esc_attr( $bgimage )}'); background-repeat:repeat;";
			else if($bgrepeat==2)
				echo  " background-image:url('{esc_attr( $bgimage )}'); background-repeat:repeat-x;";
			else if($bgrepeat==3)
				echo  " background-image:url('{esc_attr( $bgimage )}'); background-repeat:repeat-y;";
			else if($bgrepeat==0) {
				if($bgpercent)
					echo  " background-image:url('{esc_attr( $bgimage )}'); background-repeat:no-repeat; background-size:100% auto; ";
				else
					echo  " background-image:url('{esc_attr( $bgimage )}'); background-repeat:no-repeat; ";
			}
		}
	if($bgpercent && !empty($bgimage)){
		echo 'background-size:cover; background-attachment:fixed; background-position:center;';
	}
	if($wrap_color){
		echo '} #wrap{background:'.esc_attr( $wrap_color ).';';
		if ( $bgimage ) {
			echo 'background: none;';
		}
	}
	if ( !$wrap_color && $bgimage ) {
		echo '} #wrap{background: none;';
	}
	echo ' }</style>';
}

function hotella_webnus_wphead_action(){
	$hotella_webnus_options = hotella_webnus_options();

// Header Area
	echo isset( $hotella_webnus_options['hotella_webnus_space_before_head'] ) ? $hotella_webnus_options['hotella_webnus_space_before_head'] : '';

// Page Background
	global $post;
	if(!is_404() && isset($post))
		hotella_webnus_page_background_override(); // referred to up

// Typekit
	$w_adobe_typekit = ltrim ( isset( $hotella_webnus_options['hotella_webnus_typekit_id'] ) ? $hotella_webnus_options['hotella_webnus_typekit_id'] : '' );
    if(isset($w_adobe_typekit ) && !empty($w_adobe_typekit ))
        echo '<script src="//use.typekit.net/'.esc_url( $w_adobe_typekit ).'.js"></script><script>try{Typekit.load();}catch(e){}</script>';
}


/*******************************/
/*		Custom Admin Logo
/******************************/

function hotella_webnus_custom_login_logo() {
	$hotella_webnus_options = hotella_webnus_options();
    $logo = isset($hotella_webnus_options['hotella_webnus_admin_login_logo']['url'])? $hotella_webnus_options['hotella_webnus_admin_login_logo']['url'] : '' ;
    if(isset($logo) && !empty($logo))
		echo '<style type="text/css">h1 a { background-image:url('.esc_url( $logo ).') !important; }</style>';
}


/*************************/
/*		Open Graph
**************************/

function hotella_webnus_my_excerpt($text, $excerpt){
    if ($excerpt) return $excerpt;
    $text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
    $text = strip_tags($text);
    $excerpt_length = apply_filters('excerpt_length', 55);
    $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
    $words = preg_split("/[\n
	 ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) > $excerpt_length ) {
            array_pop($words);
            $text = implode(' ', $words);
            $text = $text . $excerpt_more;
    } else {
            $text = implode(' ', $words);
    }
    return apply_filters('wp_trim_excerpt', $text, $excerpt);
}


function hotella_webnus_open_graph_tags() {
	if (is_single()) {
		global $post;
		if(get_the_post_thumbnail($post->ID, 'thumbnail')) {
			$thumbnail_id = get_post_thumbnail_id($post->ID);
			$thumbnail_object = get_post($thumbnail_id);
			$image = $thumbnail_object->guid;
		} else {
			$image = ''; // Change this to the URL of the logo you want beside your links shown on Facebook
		}
		$description = hotella_webnus_my_excerpt( $post->post_content, $post->post_excerpt );
		$description = strip_tags($description);
		$description = str_replace("\"", "'", $description);
		?>
		<meta property="og:title" content="<?php the_title(); ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:image" content="<?php echo esc_url($image); ?>" />
		<meta property="og:url" content="<?php the_permalink(); ?>" />
		<meta property="og:description" content="<?php echo esc_attr($description); ?>" />
		<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
		<?php
	}
}


/**************************/
/*		Post View
/**************************/

function hotella_webnus_setViews($postID) {
    $count_key = 'hotella_webnus_views';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
    return $count;
}
function hotella_webnus_getViews($postID) {
    $count_key = 'hotella_webnus_views';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
	}
    return $count;
}


/*******************************/
/*	 Add to Admin Bar Menu
/******************************/

// Add Webnus Theme Options To Admin Menu
function hotella_webnus_admin_bar_link() {
	global $wp_admin_bar;
	if ( !is_super_admin() || !is_admin_bar_showing() )
		return;
	$wp_admin_bar->add_menu( array(
	'id' => 'hotella_webnus_themeoption_link',
	'title' => esc_html__( 'Webnus Theme Option','hotella'),
	'href' => site_url().'/wp-admin/themes.php?page=hotella_webnus_theme_options',
	) );
}


/********************************/
/*   	Custom Functions
/********************************/

// MIMETYPE fonts
function hotella_webnus_custom_font_mimes ( $existing_mimes=array() ) {
	$existing_mimes['woff'] = 'application/x-font-woff';
	$existing_mimes['ttf'] = 'application/x-font-ttf';
	$existing_mimes['eot'] = 'application/vnd.ms-fontobject"';
	return $existing_mimes;
}

// Validates a field's length.
if ( ! function_exists( 'hotella_webnus_validate_length' ) ) {
	function hotella_webnus_validate_length( $fieldValue, $minLength ) {
		return ( strlen( trim( $fieldValue ) ) > $minLength );
	}
}

if ( ! function_exists( 'hotella_fix_vc_p_tag' ) ) {
	function hotella_fix_vc_p_tag( $content ) {
		return strtr( $content, array( '<p>[' => '[', ']</p>' => ']', ']<br />' => ']' ) );
	}
}

function hotella_webnus_set_vc_as_theme(){
	if( function_exists( 'vc_set_as_theme' ) ) {
		vc_set_as_theme( $notifier = false );
	}
}
if (!isset($content_width)){$content_width = 940;}
if(false){wp_link_pages(); posts_nav_link(); paginate_links(); the_tags();get_post_format(0);}



/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function hotella_webnus_body_classes( $classes ) {
	$hotella_webnus_options = hotella_webnus_options();
	// Transparent Header
	$transparent_header = '';
	if(is_page()){
		$transparent_header = rwmb_meta( 'hotella_transparent_header_meta' );
	}
	$classes[] = ($transparent_header=='light')?esc_attr( ' transparent-header-w' ):'';
	$classes[] = ($transparent_header=='dark')?esc_attr( ' transparent-header-w t-dark-w' ):'';

	// Post Show
	if (is_single()){
		$post_meta = rwmb_meta( 'hotella_blogpost_meta' );
		if(!empty($post_meta)){
			if($post_meta=="postshow1" && $thumbnail_id = get_post_thumbnail_id()){
				$classes[] = esc_attr( " postshow1-hd transparent-header-w t-dark-w" );
			} elseif ( $post_meta=="postshow2" && $thumbnail_id = get_post_thumbnail_id() ) {
				$classes[] = esc_attr( " postshow2-hd" );
			}
		}
	}
	$hotella_webnus_options['hotella_webnus_header_topbar_enable'] = isset($hotella_webnus_options['hotella_webnus_header_topbar_enable']) ? $hotella_webnus_options['hotella_webnus_header_topbar_enable'] : '' ;
	$hotella_webnus_options['hotella_webnus_topbar_fixed'] = isset($hotella_webnus_options['hotella_webnus_topbar_fixed']) ? $hotella_webnus_options['hotella_webnus_topbar_fixed'] : '' ;
	$hotella_webnus_options['hotella_webnus_enable_smoothscroll'] = isset($hotella_webnus_options['hotella_webnus_enable_smoothscroll']) ? $hotella_webnus_options['hotella_webnus_enable_smoothscroll'] : '' ;
	$hotella_webnus_options['hotella_webnus_header_menu_type'] = isset($hotella_webnus_options['hotella_webnus_header_menu_type']) ? $hotella_webnus_options['hotella_webnus_header_menu_type'] : '' ;
	// topbar
	$classes[] =($hotella_webnus_options['hotella_webnus_header_topbar_enable'])?esc_attr( ' has-topbar-w' ):'';
	$classes[] =($hotella_webnus_options['hotella_webnus_topbar_fixed'])?esc_attr( ' topbar-fixed' ):'';

	// smooth scroll
	$classes[] = $hotella_webnus_options['hotella_webnus_enable_smoothscroll'] ? esc_attr( ' smooth-scroll' ) : '';

	// header 11
	$classes[] = $hotella_webnus_options['hotella_webnus_header_menu_type'] == '11' ? esc_attr( ' has-header-type11' ) : '';

	// header 13
	$classes[] = $hotella_webnus_options['hotella_webnus_header_menu_type'] == '13' ? esc_attr( ' has-header-type13' ) : '';

	return $classes;
}


/********************************/
/*   	Template Tags
/********************************/
function hotella_webnus_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
		<div class="comment-info">
			<?php echo get_avatar( $comment, 90 ); ?>
			<cite>
				<?php comment_author_link() ?> :
				<span class="comment-data"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F j, Y'); ?> at <?php comment_time('g:i a'); ?></a><?php edit_comment_link('Edit',' | ',''); ?></span>
			</cite>
		</div>
		<div class="comment-text">
			<?php if ($comment->comment_approved == '0') : ?>
				<p><em><?php esc_html_e('Your comment is awaiting moderation.','hotella'); ?></em></p>
			<?php endif; ?>
			<?php comment_text() ?>
			<div class="reply">
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
			</div>
		</div>
<?php }

require get_template_directory() . '/inc/template-functions/template-functions.php';

// Remove theme option from admin topbar
if ( ! function_exists( 'hotella_remove_redux_themeoption_from_adminbar' ) ) :
	function hotella_remove_redux_themeoption_from_adminbar( $wp_admin_bar ){
		$wp_admin_bar->remove_node( 'hotella_webnus_theme_options' );
	}
endif;

if ( ! function_exists( 'hotella_kayses' )) {
	function hotella_kayses(){
		return array(
			'a' => array(
				'href' => array(),
				'title' => array(),
				'target' => array(),
				'style' => array(),
				'class' => array(),
			),
			'br' => array(),
			'em' => array(),
			'strong' => array(),
			'span' => array(
				'class' => array(),
			),
			'code' => array(),
		);
	}
}

if(function_exists('the_ratings')) {
// WP Post Ratings Override plugin images, from plugin source
	add_action( 'wp_print_scripts', 'hotella_webnus_deregister_script', 100 );
	function hotella_webnus_deregister_script() {
		$postratings_max = intval(get_option('postratings_max'));
		$postratings_ajax_style = get_option('postratings_ajax_style');
		$postratings_custom = intval(get_option('postratings_customrating'));
		if($postratings_custom) {
			for($i = 1; $i <= $postratings_max; $i++) {
				$postratings_javascript .= 'var ratings_'.$i.'_mouseover_image=new Image();ratings_'.$i.'_mouseover_image.src=ratingsL10n.plugin_url+"/images/"+ratingsL10n.image+"/rating_'.$i.'_over."+ratingsL10n.image_ext;';
			}
		} else {
			$postratings_javascript = 'var ratings_mouseover_image=new Image();ratings_mouseover_image.src=ratingsL10n.plugin_url+"/images/"+ratingsL10n.image+"/rating_over."+ratingsL10n.image_ext;';
		}
		wp_dequeue_script( 'wp-postratings' );
		wp_enqueue_script('wp-postratings', plugins_url('wp-postratings/postratings-js.js'), array('jquery'), null, true);
		wp_localize_script('wp-postratings', 'ratingsL10n', array(
			'plugin_url' => get_template_directory_uri(),
			'ajax_url' => admin_url('admin-ajax.php'),
			'text_wait' => esc_html__('Please rate only 1 post at a time.', 'hotella'),
			'image' => get_option('postratings_image'),
			'image_ext' => 'png',
			'max' => $postratings_max,
			'show_loading' => intval($postratings_ajax_style['loading']),
			'show_fading' => intval($postratings_ajax_style['fading']),
			'custom' => $postratings_custom,
			'l10n_print_after' => $postratings_javascript
		));
	}


// Fixing WP-Ratings plugin initial output, to match Design
	function hotella_webnus_ratings_fix($html) {
		$search = plugins_url( '/wp-postratings/images/stars/' );
		$replace = get_template_directory_uri() . '/images/stars/';
		$html = str_replace($search, $replace, $html);
		return $html;
	}

// WP Post Ratings Override plugin images, from plugin source
	add_action( 'init', 'hotella_postratings_cc' , 10 );
	function hotella_postratings_cc() {
	  if( ! defined( 'RATINGS_IMG_EXT' ) ) {
	    define( 'RATINGS_IMG_EXT', apply_filters( 'wp_postratings_image_extension', 'png' ) );
	  }
	}
}

/**
 * AweBooking Integration
 */
if ( class_exists( 'APB_Booking' ) ) {

	// Get Title for roomlist page
	if ( ! function_exists('hotella_custom_roomlist_title') ) {
		function hotella_custom_roomlist_title() {
			echo '<section id="headline" class="hotella-awebook">
					<div class="container">
						<h2> ' . get_the_title() . ' </h2>
					</div>
				</section>';
		}
	}

	// AWEBooking Tax Amount
	if ( ! function_exists('hotella_awe_tax_amount') ) {
		function hotella_awe_tax_amount(){
			$tax_amount = floatval( get_option( 'apb_tax_amount' ) );
			if ( $tax_amount == 0 ) :
				echo '<p class="tax">' . esc_html__( 'excludes tax', 'hotella' ) . '</p>';
			else :
				echo '<p class="awe-book-tax"><span class="tax-amount">' . esc_html( $tax_amount ) . '</span><span class="tax-text">' . esc_html__( 'tax', 'hotella' ) . '</span></p>';
			endif;
		}
	}

	// Start Add Custom To Awebooking Room List
	if ( ! function_exists('hotella_layout_list_package') ) {
		function hotella_layout_list_package( $argsData = array() ) {
				$argsData['check'] = isset( $argsData['check'] ) ? $argsData['check'] : true;
				$argsData['count_day'] = isset( $argsData['count_day'] ) ? $argsData['count_day'] : 1;
				$get_awebooking_option = AWE_function::get_room_option( get_the_ID(), 'apb_room_type' );
				$room_desc  = get_post_meta( get_the_ID(), 'room_desc', true );
				$room_desc_w = '<div class="awe-short-description">' . $room_desc .'</div>';
				if ( ! empty( $get_awebooking_option ) ) {
					echo ' <div class="packages-wrap">
							';
								hotella_awe_tax_amount();
					echo		$room_desc_w;
					echo 	'<ul class="packages">';
								foreach ( $get_awebooking_option as $item_option ) { ?>
										<?php $package_dec = ! empty( $item_option->option_desc ) ? '<span class="package-desc">' . $item_option->option_desc . '</span>' : ''; ?>
									<li> 
										<p class="package-<?php echo absint( $item_option->id ); ?>">
											<?php echo $icon = isset( $item_option->option_icon ) ? '<i class="' . $item_option->option_icon . '"></i>' : '' ; ?>
											<?php echo esc_html( $item_option->option_name ); ?>
											<?php echo $package_dec; ?>	
										</p>
									</li>
						<?php	}
					echo 	'</ul>
						   </div>';
			}
		}
	}

	function hotella_awebooking_excerpt() {
		add_post_type_support( 'apb_room_type', 'excerpt' );
	}

	// woocommerc update cancel
	if ( ! function_exists( 'wn_plugin_updates' ) ){
		function wn_plugin_updates( $value ) {
			$value = new StdClass;
			unset( $value->response['woocommerce/woocommerce.php'] );
			return $value;
		}
		add_filter( 'site_transient_update_plugins', 'wn_plugin_updates' );
	}

	// Pre payment 
	add_action( 'woocommerce_calculate_totals', 'action_cart_calculate_totals', 10, 1 );
	function action_cart_calculate_totals( $cart_object ) {
		$apb_deposit_type		= get_option( 'apb_deposit_type' );
		$apb_deposit_number		= get_option( 'apb_deposit_number' );

		if ( !WC()->cart->is_empty() && $apb_deposit_type == 'percent' ) {

			$cart_object->subtotal = $cart_object->subtotal * $apb_deposit_number / 100 ;


			$cart_object->total = $cart_object->total * $apb_deposit_number / 100 ;


			$cart_object->cart_contents_total = $cart_object->cart_contents_total * $apb_deposit_number / 100 ;

		} elseif ( !WC()->cart->is_empty() && $apb_deposit_type == 'money' ) {

			$cart_object->subtotal = $apb_deposit_number ;


			$cart_object->total = $apb_deposit_number ;


			$cart_object->cart_contents_total = $apb_deposit_number ;
		}
	}

}


require_once get_template_directory() . '/inc/webnus-admin-welcome/update.php';

