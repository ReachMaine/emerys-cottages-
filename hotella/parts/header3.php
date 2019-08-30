<?php
$hotella_webnus_options = hotella_webnus_options();
$hotella_webnus_options['hotella_webnus_header_menu_type'] = isset($hotella_webnus_options['hotella_webnus_header_menu_type']) ? $hotella_webnus_options['hotella_webnus_header_menu_type'] : '' ;
$hotella_webnus_options['hotella_webnus_header_search_enable'] = isset($hotella_webnus_options['hotella_webnus_header_search_enable']) ? $hotella_webnus_options['hotella_webnus_header_search_enable'] : '' ;
?>
<div id="vertical-header-wrapper"  style="<?php echo (7 == $hotella_webnus_options['hotella_webnus_header_menu_type'])? 'left : -250px;' : ''; ?>">
	<?php if (7 == $hotella_webnus_options['hotella_webnus_header_menu_type']) { ?>
		<div id="toggle-icon">
			<span class="mn-ext1"></span>
			<span class="mn-ext2"></span>
			<span class="mn-ext3"></span>
		</div>
	<?php }
	$mobile_sticky = ( isset( $hotella_webnus_options['hotella_webnus_header_sticky_phone'] ) && $hotella_webnus_options['hotella_webnus_header_sticky_phone'] == '1' ) ? ' mobistky ' : '' ;
	$header_background = isset($hotella_webnus_options['hotella_webnus_header_background']['url']) ? 'style="background-size:cover; background-image: url(\''.$hotella_webnus_options['hotella_webnus_header_background']['url'].'\')"' : '';
	$menu_icon = isset($hotella_webnus_options['hotella_webnus_header_menu_icon'])? 'sm-rgt-mn ':''; ?>
	<header id="header" <?php echo '' . $header_background ?> class="vertical-w <?php echo esc_attr( $menu_icon ) . $mobile_sticky ;?>">
		<div class="container vheader-container">
			<div class="col-md-3 col-sm-3 logo-wrap">
			<div class="logo">
			<?php
			$logo 		= isset( $hotella_webnus_options['hotella_webnus_logo']['url'] ) ? $hotella_webnus_options['hotella_webnus_logo']['url'] : '';
			$logo_width = isset( $hotella_webnus_options['hotella_webnus_logo_width'] ) ? $hotella_webnus_options['hotella_webnus_logo_width'] : '';
			$has_logo	= false; /* Check if there is one logo exists at least. */

			if( !empty($logo) ) $has_logo = true;
			if((TRUE === $has_logo)){
			if(!empty($logo))
				echo '<a href="'.esc_url(home_url( '/' )).'"><img src="'.esc_url($logo).'" width="' . $logo_width . '" id="img-logo-w1" alt="'.get_bloginfo( "name" ).'" class="img-logo-w1" style="width: '. $logo_width . '"></a>';
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
			</a></span>
			<?php } ?></div></div>
			<nav id="nav-wrap" class="col-md-9 col-sm-9 nav-wrap3">
				<div class="container">
					<?php // OnePage Menu
					$onepage_menu = '';
					if(is_page()){
						$onepage_menu = rwmb_meta( 'hotella_onepage_menu_meta' );
					}

						if($onepage_menu){
							if ( has_nav_menu( 'onepage-header-menu' ) ) {
								wp_nav_menu( array( 'theme_location' => 'onepage-header-menu', 'container' => 'false', 'menu_id' => 'nav', 'depth' => '5', 'fallback_cb' => 'wp_page_menu', 'items_wrap' => '<ul id="%1$s">%3$s</ul>',  'walker' => new hotella_webnus_description_walker()) );
							}
						}else{
							if ( has_nav_menu( 'header-menu' ) )
							{
								wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'false', 'menu_id' => 'nav', 'depth' => '5', 'fallback_cb' => 'wp_page_menu', 'items_wrap' => '<ul id="%1$s">%3$s</ul>',  'walker' => new hotella_webnus_description_walker()) );
							}
						}
					?>
				</div>
			</nav>
			<?php
			if($hotella_webnus_options['hotella_webnus_header_search_enable']) {
			?>
			<div id="search-form">
				<form action="<?php echo esc_url(home_url( '/' )); ?>" method="get">
					<input type="text" class="search-text-box" id="search-box" name="s">
				</form>
			</div>
			<?php } ?>
		</div>
	</header>
</div>
<!-- end-header -->
