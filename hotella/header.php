<?php // Define variables

	// fetch hotella options
	$hotella_options 		= hotella_webnus_options();

	// Mobile Specific Metas
	$enable_responsive		= isset( $hotella_options['hotella_webnus_enable_responsive'] ) ? $hotella_options['hotella_webnus_enable_responsive'] : '';

	// Sticky
	$header_sticky			= isset( $hotella_options['hotella_webnus_header_sticky'] ) ? $hotella_options['hotella_webnus_header_sticky'] : '';
	$header_sticky_scrolls	= isset( $hotella_options['hotella_webnus_header_sticky_scrolls'] ) ? $hotella_options['hotella_webnus_header_sticky_scrolls'] : '';
	$hotella_webnus_custom_color_skin	= isset( $hotella_options['hotella_webnus_custom_color_skin'] ) ? $hotella_options['hotella_webnus_custom_color_skin'] : '';

	// -> Start the #wrap div classes

	$wrap_class = '';

	// Colorskin
	if ( $hotella_options['hotella_webnus_color_skin'] != 'e3e3e3' || $hotella_webnus_custom_color_skin ) {
		$wrap_class .= 'colorskin-custom ';
	}

	// Header Menu
	$header_menu_type	= isset( $hotella_options['hotella_webnus_header_menu_type'] ) ? $hotella_options['hotella_webnus_header_menu_type'] : '';
	$dark_submenu		= isset( $hotella_options['hotella_webnus_dark_submenu'] ) ? $hotella_options['hotella_webnus_dark_submenu'] : '';

	$wrap_class	.= ( $header_menu_type == 0 )? esc_attr( 'no-menu-header' ) . ' ' : '';
	$wrap_class	.= ( $header_menu_type == 6 )? esc_attr( 'vertical-header-enabled' ) . ' ' : '';
	$wrap_class	.= ( $header_menu_type == 7 )? esc_attr( 'vertical-toggle-header-enabled' ) . ' ' : '';
	$wrap_class	.= ( ! isset( $dark_submenu ) || ( $dark_submenu == '2' ) )? esc_attr( ' dark-submenu' ) . ' ' : '';

	// Background Layout
	$background_layout	= isset( $hotella_options['hotella_webnus_background_layout'] ) ? $hotella_options['hotella_webnus_background_layout'] : '';
	$wrap_class 		.= ( ( $background_layout == 'boxed-wrap' ) && ( $header_menu_type != 6 ) && ( $header_menu_type != 7 ) ) ? $background_layout . ' ' : '';

	// -> End the #wrap div classes


	// Toggle Toparea
	$toggle_toparea_enable	= isset( $hotella_options['hotella_webnus_toggle_toparea_enable'] ) ? $hotella_options['hotella_webnus_toggle_toparea_enable'] : '';

	// Top Bar
	$header_topbar_enable	= isset( $hotella_options['hotella_webnus_header_topbar_enable'] ) ? $hotella_options['hotella_webnus_header_topbar_enable'] : '';

	// News Ticker
	$news_ticker			= isset( $hotella_options['hotella_webnus_news_ticker'] ) ? $hotella_options['hotella_webnus_news_ticker'] : '';

	// Modal Contact Form
	$topbar_contact			= isset( $hotella_options['hotella_webnus_topbar_contact'] ) ? $hotella_options['hotella_webnus_topbar_contact'] : '';
	$topbar_form			= isset($hotella_options['hotella_webnus_topbar_form']) ? $hotella_options['hotella_webnus_topbar_form'] : '';

	// woocommerce
	$woo_product_title_enable 	= isset( $hotella_options['hotella_webnus_woo_product_title_enable'] ) ? $hotella_options['hotella_webnus_woo_product_title_enable'] : '';
	$woo_product_title			= isset( $hotella_options['hotella_webnus_woo_product_title'] ) ? $hotella_options['hotella_webnus_woo_product_title'] : '';
	$woo_shop_title_enable		= isset( $hotella_options['hotella_webnus_woo_shop_title_enable'] ) ? $hotella_options['hotella_webnus_woo_shop_title_enable'] : '';
	$woo_shop_title				= isset( $hotella_options['hotella_webnus_woo_shop_title'] ) ? $hotella_options['hotella_webnus_woo_shop_title'] : '';

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<?php
	// Mobile Specific Metas
	if( $enable_responsive ) : ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php else : ?>
	<meta name="viewport" content="width=1200,user-scalable=yes">
	<?php endif; ?>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<?php if ( ! $header_sticky ) : ?>
<body <?php body_class(); ?>>
<?php else: ?>
<body <?php body_class(); ?> data-scrolls-value="<?php echo esc_attr( $header_sticky_scrolls ); ?>">
<?php endif; ?>

<!-- Start the #wrap div -->
<div id="wrap" class="<?php echo esc_attr( $wrap_class ); ?>">

	<?php if ( $toggle_toparea_enable ) : ?>
		<section class="toggle-top-area footer-in">
			<div class="w_toparea container">
				<div class="col-md-3">
					<?php if( is_active_sidebar( 'top-area-1' ) ) dynamic_sidebar('top-area-1'); ?>
				</div>
				<div class="col-md-3">
					<?php if( is_active_sidebar( 'top-area-2' ) ) dynamic_sidebar('top-area-2'); ?>
				</div>
				<div class="col-md-3">
					<?php if( is_active_sidebar( 'top-area-3' ) ) dynamic_sidebar('top-area-3'); ?>
				</div>
				<div class="col-md-3">
					<?php if( is_active_sidebar( 'top-area-4' ) ) dynamic_sidebar('top-area-4'); ?>
				</div>
			</div>
			<a class="w_toggle" href="#"></a>
		</section>
	<?php endif;

	$topbar_show = $header_show = true;
	if( isset( $post ) ) :
		$topbar_show = rwmb_meta( 'hotella_topbar_show' );
		$header_show = rwmb_meta( 'hotella_header_show' );
	endif;

	// Top Bar
	if ( $topbar_show || is_archive() || is_single() || is_home() || is_search() || is_404() ) :
		 if ( $header_topbar_enable )
			get_template_part( 'parts/topbar' );
	endif;

if ( $header_show || is_archive() || is_single() || is_home() || is_search() || is_404() ) :
// Menu Type
 switch( $header_menu_type ){
 	case 0:
	case 2:
	case 3:
	case 4:
	case 5:
		get_template_part('parts/header2');
	break;
	case 6:
	case 7:
		get_template_part('parts/header3');
	break;
	case 8:
		get_template_part('parts/header4');
	break;
	case 9:
		get_template_part('parts/header2');
	break;
	case 11:
		get_template_part('parts/header5');
	break;
	case 12:
        get_template_part( 'parts/header2' );
    break;
	case 13:
		get_template_part('parts/header1');
	break;
	default: //case: 1
		get_template_part('parts/header1');
	break;
 }
endif;


	// News Ticker
	if( $news_ticker ) :
		get_template_part( 'parts/news-ticker' );
	endif;

	// Modal Contact Form
	if ( $topbar_contact ) :
		$form_id = esc_html( $topbar_form );
		echo '<div style="display:none">
				<div class="w-modal modal-contact" id="w-contact">
					<h3 class="modal-title"> ' . esc_html__( 'CONTACT', 'hotella' ) . '</h3>
					<br>
					' . do_shortcode( '[contact-form-7 id="'.$form_id.'" title="' . esc_attr( 'Contact' ) . '"]' ) . '
				</div>
			</div>';
	endif;

	// Woocommerce - if woocommerce available add page headline section
	if ( isset( $post ) && get_post_type( $post->ID ) == 'product' ) :
		if ( function_exists( 'is_product' ) && is_product() && $woo_product_title_enable ) { ?>
			<section id="headline">
				<div class="container">
					<h2><?php echo esc_html( $woo_product_title ); ?></h2>
				</div>
			</section>
		<?php }

		if ( function_exists( 'is_product'  ) && ! is_product() && $woo_shop_title_enable ) { ?>
			<section id="headline">
				<div class="container">
					<h2><?php echo esc_html( $woo_shop_title ); ?></h2>
				</div>
			</section>
		<?php } ?>

		<!-- Start Page Content -->
		<section class="container">
			<hr class="vertical-space">
	<?php endif; // end woocommerce