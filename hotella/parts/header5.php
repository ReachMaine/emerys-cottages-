<?php
// define variables
$hotella_webnus_options = hotella_webnus_options();
$hotella_webnus_options['hotella_webnus_header_address'] = isset($hotella_webnus_options['hotella_webnus_header_address']) ? $hotella_webnus_options['hotella_webnus_header_address'] : '' ;
$hotella_webnus_options['hotella_webnus_header_phone'] = isset($hotella_webnus_options['hotella_webnus_header_phone']) ? $hotella_webnus_options['hotella_webnus_header_phone'] : '' ;
$hotella_webnus_options['hotella_webnus_header_email'] = isset($hotella_webnus_options['hotella_webnus_header_email']) ? $hotella_webnus_options['hotella_webnus_header_email'] : '' ;
$hotella_webnus_options['hotella_webnus_header_woocart_enable'] = isset($hotella_webnus_options['hotella_webnus_header_woocart_enable']) ? $hotella_webnus_options['hotella_webnus_header_woocart_enable'] : '' ;
$hotella_webnus_options['hotella_webnus_header_menu_type'] = isset($hotella_webnus_options['hotella_webnus_header_menu_type']) ? $hotella_webnus_options['hotella_webnus_header_menu_type'] : '' ;
$hotella_webnus_options['hotella_webnus_header_search_enable'] = isset($hotella_webnus_options['hotella_webnus_header_search_enable']) ? $hotella_webnus_options['hotella_webnus_header_search_enable'] : '' ;
$hideheader = '';

if( is_page()){
	$hideheader = rwmb_meta( 'hotella_hide_header_meta' );
}

$menu_icon 		= isset($hotella_webnus_options['hotella_webnus_header_menu_icon']) ? $hotella_webnus_options['hotella_webnus_header_menu_icon'] : '' ;
$menu_type 		= $hotella_webnus_options['hotella_webnus_header_menu_type'];
$header_class 	= '';
$header_class  	= !empty($menu_icon) ? ' sm-rgt-mn' : '';
$header_class  .= $hideheader ? ' hi-header' : '';
$header_class  .= $menu_type == '11' ? ' w-header-type-11' : '';
?>

<!-- header components - display: @media only screen and (max-width: 767px) -->
<div class="container">
	<div class="components phones-components clearfix">
		<?php
			$logo_rightside = isset($hotella_webnus_options['hotella_webnus_header_logo_rightside']) ? $hotella_webnus_options['hotella_webnus_header_logo_rightside'] : '' ;
			if( $logo_rightside == 1 ) { ?>
				<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
					<input name="s" type="text" placeholder="<?php esc_html_e('Search...','hotella') ?>" class="header-saerch" >
				</form>
			<?php }
			elseif( $logo_rightside == 2 ) {
				$allowed_html = array( 'a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'em' => array(), 'strong' => array() ); ?>
				<h6 class="col-sm-4"><i class="sl-location-pin"></i><span><?php echo wp_kses( $hotella_webnus_options['hotella_webnus_header_address'], $allowed_html ); ?></span></h6>
				<h6 class="col-sm-4"><i class="sl-phone"></i><span><?php echo '' . $hotella_webnus_options['hotella_webnus_header_phone']; ?></span></h6>
				<h6 class="col-sm-4"><i class="sl-envelope-open"></i><span><?php echo '' . $hotella_webnus_options['hotella_webnus_header_email']; ?></span></h6>
			<?php }
			elseif( $logo_rightside == 3 ) {
				if(is_active_sidebar('header-advert'))
				dynamic_sidebar('header-advert');
				if(is_active_sidebar('woocommerce_header'))
				dynamic_sidebar('woocommerce_header');
			}
$mobile_sticky = ( isset( $hotella_webnus_options['hotella_webnus_header_sticky_phone'] ) && $hotella_webnus_options['hotella_webnus_header_sticky_phone'] == '1' ) ? ' mobistky ' : '' ;
		?>
	</div>
</div>

<header id="header"  class="horizontal-w<?php echo esc_attr( $header_class ) . $mobile_sticky ; ?>">
	<div class="container">

		<!-- logo -->
		<div class="col-sm-3 logo-wrap">
			<div class="logo">
			<?php
				$logo 					= isset( $hotella_webnus_options['hotella_webnus_logo']['url'] ) ? $hotella_webnus_options['hotella_webnus_logo']['url'] : '';
				$logo_width 			= isset( $hotella_webnus_options['hotella_webnus_logo_width'] ) ? $hotella_webnus_options['hotella_webnus_logo_width'] : '';
				$transparent_logo 		= isset( $hotella_webnus_options['hotella_webnus_transparent_logo']['url'] ) ? $hotella_webnus_options['hotella_webnus_transparent_logo']['url'] : '';
				$transparent_logo_width = isset( $hotella_webnus_options['hotella_webnus_transparent_logo_width'] ) ? $hotella_webnus_options['hotella_webnus_transparent_logo_width'] : '';
				$sticky_logo 			= isset( $hotella_webnus_options['hotella_webnus_sticky_logo']['url'] ) ? $hotella_webnus_options['hotella_webnus_sticky_logo']['url'] : '';
				$sticky_logo_width 		= isset( $hotella_webnus_options['hotella_webnus_sticky_logo_width'] ) ? $hotella_webnus_options['hotella_webnus_sticky_logo_width'] : '150';
				$has_logo				= false; /* Check if there is one logo exists at least. */

				if( !empty($logo) || !empty($transparent_logo) || !empty($sticky_logo) )
					$has_logo = true;

				if( $has_logo === TRUE ) {
					if(!empty($transparent_logo))
						echo '<a href="'.esc_url(home_url( '/' )).'"><img src="'.esc_url($transparent_logo).'" width="' . $transparent_logo_width . '" id="img-logo-w1" alt="'.get_bloginfo( "name" ).'" class="img-logo-w1" style="width: ' . $transparent_logo_width . '"></a>';
					else
						echo '<a href="'.esc_url(home_url( '/' )).'"><img src="'.esc_url($logo).'" width="' . $logo_width . '" id="img-logo-w1" alt="'.get_bloginfo( "name" ).'" class="img-logo-w1" style="width: ' . $logo_width . '"></a>';

					if(!empty($sticky_logo))
						echo '<span class="logo-sticky"><a href="'.esc_url(home_url( '/' )).'"><img src="'.esc_url($sticky_logo).'" width="' . $sticky_logo_width . '" id="img-logo-w3" alt="'.get_bloginfo( "name" ).'" class="img-logo-w3"></a></span>';
					else
						echo '<span class="logo-sticky"><a href="'.esc_url(home_url( '/' )).'"><img src="'.esc_url($logo).'" width="'. (!empty($sticky_logo_width)?$sticky_logo_width:$logo_width). '" id="img-logo-w3" alt="'.get_bloginfo( "name" ).'" class="img-logo-w3"></a></span>';
				} else { ?>
					<span id="site-title"><a href="<?php echo esc_url(home_url( '/' )); ?>"><?php bloginfo( 'name' ); ?></a></span>
						<span class="site-slog">
							<a href="<?php echo esc_url(home_url( '/' )); ?>">
								<?php
									$slogan = isset( $hotella_webnus_options['hotella_webnus_slogan'] ) ? $hotella_webnus_options['hotella_webnus_slogan'] : '';
									if( empty($slogan)) bloginfo( 'description' ); else echo esc_html($slogan);
								?>
							</a>
						</span>
					<?php
				}
			?>
			</div> <!-- end logo -->
		</div> <!-- end logo-wrap -->

		<!-- nav and component -->
		<div class="col-sm-9 nav-components">
			<!-- header components -->
			<div class="components clearfix">
				<?php
					$logo_rightside = isset($hotella_webnus_options['hotella_webnus_header_logo_rightside']) ? $hotella_webnus_options['hotella_webnus_header_logo_rightside'] : '' ;
					if( $logo_rightside == 1 ) { ?>
						<form action="<?php echo esc_url(home_url( '/' )); ?>" method="get">
							<input name="s" type="text" placeholder="<?php esc_html_e('Search...','hotella') ?>" class="header-saerch" >
						</form>
					<?php }
					elseif( $logo_rightside == 2 ) {
						$allowed_html = array( 'a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'em' => array(), 'strong' => array() ); ?>
						<h6><i class="sl-location-pin"></i><span><?php echo wp_kses( $hotella_webnus_options['hotella_webnus_header_address'], $allowed_html ); ?></span></h6>
						<h6><i class="sl-phone"></i><span><?php echo '' . $hotella_webnus_options['hotella_webnus_header_phone']; ?></span></h6>
						<h6><i class="sl-envelope-open"></i><span><?php echo '' . $hotella_webnus_options['hotella_webnus_header_email']; ?></span></h6>
					<?php }
					elseif( $logo_rightside == 3 ) {
						if(is_active_sidebar('header-advert'))
						dynamic_sidebar('header-advert');
						if(is_active_sidebar('woocommerce_header'))
						dynamic_sidebar('woocommerce_header');
					}
					if ( class_exists( 'WooCommerce' ) && $hotella_webnus_options['hotella_webnus_header_woocart_enable'] ) {
						the_widget( 'Woocommerce_Header_Cart' );
					}
				?>
			</div>
			<!-- navigation -->
			<nav id="nav-wrap" class="nav-wrap1">
				<div class="container">
				<?php
					$onepage_menu = '';
					if(is_page()){
						$onepage_menu = rwmb_meta( 'hotella_onepage_menu_meta' );
					}
					$menu_location = '';
					if( $hotella_webnus_options['hotella_webnus_header_menu_type'] == 0 ) {
						$menu_location = 'header-top-menu';
					} elseif($onepage_menu) {
						$menu_location = 'onepage-header-menu';
					} else {
						$menu_location = 'header-menu';
					}
					// nav
					if ( has_nav_menu( $menu_location ) ) {
						wp_nav_menu( array( 'theme_location' => $menu_location, 'container' => 'false', 'menu_id' => 'nav', 'depth' => '5', 'fallback_cb' => 'wp_page_menu', 'items_wrap' => '<ul id="%1$s">%3$s</ul>',  'walker' => new hotella_webnus_description_walker() ) );
					} ?>
				</div>  <!-- end container -->
			</nav> <!-- end nav-wrap -->
			<!-- search -->
			<?php if( $hotella_webnus_options['hotella_webnus_header_search_enable'] ) : ?>
				<form id="w-header-type-11-search" role="search" action="<?php echo esc_url(home_url( '/' )); ?>" method="get" >
					<i id="header11_search_icon" class="sl-magnifier"></i>
					<input name="s" type="text">
				</form>
			<?php endif; ?>
		</div> <!-- end col-md-9 -->

	</div> <!-- end container -->
</header> <!-- end header -->