<?php
$hotella_webnus_options = hotella_webnus_options();
$hideheader = '';
if( is_page()){
	$hideheader =rwmb_meta( 'hotella_hide_header_meta' );
}
$menu_type = isset($hotella_webnus_options['hotella_webnus_header_menu_type']) ? $hotella_webnus_options['hotella_webnus_header_menu_type'] : '' ;
$mobile_sticky = ( isset( $hotella_webnus_options['hotella_webnus_header_sticky_phone'] ) && $hotella_webnus_options['hotella_webnus_header_sticky_phone'] == '1' ) ? ' mobistky ' : '' ;
$header_class = ( $menu_type == 13 ) ?  'w-header-type-13' : '';
?>
<header id="header" class="horizontal-w <?php echo '' . $mobile_sticky . $header_class;  ?> <?php $menu_icon = isset($hotella_webnus_options['hotella_webnus_header_menu_icon']) ? $hotella_webnus_options['hotella_webnus_header_menu_icon'] : '' ;
	$hotella_webnus_options['hotella_webnus_header_color_type'] = isset($hotella_webnus_options['hotella_webnus_header_color_type']) ? $hotella_webnus_options['hotella_webnus_header_color_type'] : '' ;
	$hotella_webnus_options['hotella_webnus_header_search_enable'] = isset($hotella_webnus_options['hotella_webnus_header_search_enable']) ? $hotella_webnus_options['hotella_webnus_header_search_enable'] : '' ;
	if(!empty($menu_icon)) echo ' sm-rgt-mn ';
	if($menu_type==10) echo ' w-header-type-10 ';
	echo ($hideheader)? ' hi-header ' : '';
	echo ' '.$hotella_webnus_options['hotella_webnus_header_color_type'];
	?>">
	<?php if ( $menu_type != 13 ) { ?>
	<div class="container">
	<?php }
	$logo_class =  $menu_type != 13 ? 'class="col-md-3 col-sm-3 logo-wrap"' : 'class="col-md-2 col-sm-2 logo-wrap"' ;
	?>
		<div <?php echo '' . $logo_class; ?> >
			<div class="logo">
				<?php
				$logo 					= isset( $hotella_webnus_options['hotella_webnus_logo']['url'] ) ? $hotella_webnus_options['hotella_webnus_logo']['url'] : '';
				$logo_width 			= isset( $hotella_webnus_options['hotella_webnus_logo_width'] ) ? $hotella_webnus_options['hotella_webnus_logo_width'] : '';
				$transparent_logo 		= isset( $hotella_webnus_options['hotella_webnus_transparent_logo']['url'] ) ? $hotella_webnus_options['hotella_webnus_transparent_logo']['url'] : '';
				$transparent_logo_width = isset( $hotella_webnus_options['hotella_webnus_transparent_logo_width'] ) ? $hotella_webnus_options['hotella_webnus_transparent_logo_width'] : '';
				$sticky_logo 			= isset( $hotella_webnus_options['hotella_webnus_sticky_logo']['url'] ) ? $hotella_webnus_options['hotella_webnus_sticky_logo']['url'] : '';
				$sticky_logo_width 		= isset( $hotella_webnus_options['hotella_webnus_sticky_logo_width'] ) ? $hotella_webnus_options['hotella_webnus_sticky_logo_width'] : '150';
				$has_logo				= false; /* Check if there is one logo exists at least. */

				if( !empty($logo) || !empty($transparent_logo) || !empty($sticky_logo) ) $has_logo = true;
				if((TRUE === $has_logo)){
					if(!empty($logo))
						echo '<a href="'.esc_url(home_url( '/' )).'"><img src="'.esc_url($logo).'" width="' . $logo_width . '" id="img-logo-w1" alt="'.get_bloginfo( "name" ).'" class="img-logo-w1" style="width: '. $logo_width . '"></a>';
					if(!empty($transparent_logo))
						echo '<a href="'.esc_url(home_url( '/' )).'"><img src="'.esc_url($transparent_logo).'" width="' . $transparent_logo_width . '" id="img-logo-w2" alt="'.get_bloginfo( "name" ).'" class="img-logo-w2" style="width: ' . $transparent_logo_width  . '"></a>';
					else
						echo '<a href="'.esc_url(home_url( '/' )).'"><img src="'.esc_url($logo).'" width="' . (!empty($transparent_logo_width)?$transparent_logo_width:$logo_width) . '" id="img-logo-w2" alt="' .get_bloginfo( "name" ).'" class="img-logo-w2" style="width: '. ( !empty($transparent_logo_width) ? $transparent_logo_width : $logo_width ). '"></a>';

					if(!empty($sticky_logo))
						echo '<span class="logo-sticky"><a href="'.esc_url(home_url( '/' )).'"><img src="'.esc_url($sticky_logo).'" width="'. (!empty($sticky_logo_width)?$sticky_logo_width:$logo_width). '" id="img-logo-w3" alt="'.get_bloginfo( "name" ).'" class="img-logo-w3"></a></span>';
					else
						echo '<span class="logo-sticky"><a href="'.esc_url(home_url( '/' )).'"><img src="'.esc_url($logo).'" width="'. (!empty($sticky_logo_width)?$sticky_logo_width:$logo_width). '" id="img-logo-w3" alt="'.get_bloginfo( "name" ).'" class="img-logo-w3"></a></span>';
				}else{ ?>
					<a id="site-title" href="<?php echo esc_url(home_url( '/' )); ?>"><?php bloginfo( 'name' ); ?></a>
					<span class="site-slog">
						<a href="<?php echo esc_url(home_url( '/' )); ?>">
							<?php
							$slogan = isset($hotella_webnus_options['hotella_webnus_slogan']) ? $hotella_webnus_options['hotella_webnus_slogan'] : '' ;
							if( empty($slogan))
								bloginfo( 'description' );
							else
								echo esc_html($slogan);
							?>
						</a>
					</span>
					<?php }
					$nav_class = $menu_type == 13 ? 'class="nav-wrap1 col-md-8 col-sm-8 wn-full-header"' : 'class="nav-wrap1 col-md-9 col-sm-9"' ;
					?></div></div>
					<nav id="nav-wrap" <?php echo '' . $nav_class ; ?> >
					<?php if ( $menu_type != 13 ) { ?>
						<div class="container">
						<?php } ?>
							<?php
							if(is_active_sidebar('woocommerce_header')) {
								dynamic_sidebar('woocommerce_header');
							}
							$search_url = esc_url(home_url( '/' ));
							$search_tooltip = $hotella_webnus_options['hotella_webnus_header_search_text'];
							$header_search = '
									<div id="search-form" class="js-contentToggle" data-tooltip="' . esc_html($search_tooltip) . '">
										<i id="searchbox-icon" class="sl-magnifier js-contentToggle__trigger"></i>
										<div id="search-form-box" class="search-form-box js-contentToggle__content">
											<form action="' . $search_url . '" method="get">
												<input type="text" class="search-text-box" id="search-box" name="s">
											</form>
										</div>
									</div>';
							if( $hotella_webnus_options['hotella_webnus_header_search_enable'] && $menu_type != 13 ){
								echo '' . $header_search ;
							?>
								<?php }

							// OnePage Menu
								$onepage_menu = '';
								if(is_page()){
									$onepage_menu = rwmb_meta( 'hotella_onepage_menu_meta' );
								}

								if($onepage_menu){
									if ( has_nav_menu( 'onepage-header-menu' ) ) {
										wp_nav_menu( array( 'theme_location' => 'onepage-header-menu', 'container' => 'false', 'menu_id' => 'nav', 'depth' => '5', 'fallback_cb' => 'wp_page_menu', 'items_wrap' => '<ul id="%1$s">%3$s</ul>',  'walker' => new hotella_webnus_description_walker()) );
									}
								}
								else{
									if ( has_nav_menu( 'header-menu' ) ) {
										wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'false', 'menu_id' => 'nav', 'depth' => '5', 'fallback_cb' => 'wp_page_menu', 'items_wrap' => '<ul id="%1$s">%3$s</ul>',  'walker' => new hotella_webnus_description_walker()) );
									}
								}
								?>
						<?php if ( $menu_type != 13 ) { ?>
							</div>
						<?php } ?>
						</nav>
						<?php if( $menu_type == 13 ){
							echo '
								<div class="col-sm-2 tools-section"> ' . $header_search = $hotella_webnus_options['hotella_webnus_header_search_enable'] ? $header_search : '';
								if ( $hotella_webnus_options['hotella_webnus_header_login'] ){
										$login_tooltip = $hotella_webnus_options['hotella_webnus_header_login_text'];
										if ( is_user_logged_in() ) {
											global $user_identity;
											$login_text = esc_html__('Welcome ','hotella') . esc_html($user_identity);
										}
										$login_class = ( is_plugin_active( 'user-pro/index.php' ) ) ? 'popup-login':'inlinelbb';
										echo '
											<div class="w-login-modal js-contentToggle" data-tooltip="' . esc_html($login_tooltip) . '">
												<i class="sl-user js-contentToggle__trigger" id="wn-login-modal-icon"></i>
												<div id="w-login" class="w-login js-contentToggle__content">';
												if ( function_exists('hotella_webnus_login') ) {
													hotella_webnus_login();
												}
											echo '
												</div>
											</div>';
									}
								if ( $hotella_webnus_options['hotella_webnus_header_booking_enable'] ){
									$booking_tooltip = $hotella_webnus_options['hotella_webnus_header_booking_text'];
									echo '<div class="booking-header-icon js-contentToggle" data-tooltip="' . esc_html($booking_tooltip) . '">
											<i class="sl-event js-contentToggle__trigger" id="wn-booking-header-icon"></i>
												<div class="booking-modal-content js-contentToggle__content">';
												if (class_exists( 'Awebooking' )){
													echo do_shortcode( '[awebooking_check_form]' );
												}else{
													echo '<div class="booking wn-notice">' . esc_html__('Please activate AWE Booking plugin' , 'hotella') . '</div>';
												}
										  echo '</div>';
									echo '</div>';
								}

								echo '</div>';
						} ?>
				<?php if ( $menu_type != 13 ) { ?>
					</div>
				<?php } ?>
				</header>
<!-- end-header -->