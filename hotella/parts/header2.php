<?php
$hotella_webnus_options = hotella_webnus_options();
$hideheader = '';
if( is_page()){
$hideheader =rwmb_meta( 'hotella_hide_header_meta' );
}
$mobile_sticky = ( isset( $hotella_webnus_options['hotella_webnus_header_sticky_phone'] ) && $hotella_webnus_options['hotella_webnus_header_sticky_phone'] == '1' ) ? ' mobistky ' : '' ;
?>
<header id="header"  class="horizontal-w <?php echo '' . $mobile_sticky;  ?> <?php
$menu_icon = isset($hotella_webnus_options['hotella_webnus_header_menu_icon']) ? $hotella_webnus_options['hotella_webnus_header_menu_icon'] : '' ;
$menu_type = isset($hotella_webnus_options['hotella_webnus_header_menu_type']) ? $hotella_webnus_options['hotella_webnus_header_menu_type'] : '' ;
echo 'w-header-type-' . esc_attr( $menu_type ) .' ';
$hotella_webnus_options['hotella_webnus_header_color_type'] = isset($hotella_webnus_options['hotella_webnus_header_color_type']) ? $hotella_webnus_options['hotella_webnus_header_color_type'] : '' ;
$hotella_webnus_options['hotella_webnus_header_logo_alignment'] = isset($hotella_webnus_options['hotella_webnus_header_logo_alignment']) ? $hotella_webnus_options['hotella_webnus_header_logo_alignment'] : '' ;
$hotella_webnus_options['hotella_webnus_header_email'] = isset($hotella_webnus_options['hotella_webnus_header_email']) ? $hotella_webnus_options['hotella_webnus_header_email'] : '' ;
$hotella_webnus_options['hotella_webnus_header_phone'] = isset($hotella_webnus_options['hotella_webnus_header_phone']) ? $hotella_webnus_options['hotella_webnus_header_phone'] : '' ;
$hotella_webnus_options['hotella_webnus_header_address'] = isset($hotella_webnus_options['hotella_webnus_header_address']) ? $hotella_webnus_options['hotella_webnus_header_address'] : '' ;
if(!empty($menu_icon)) echo 'sm-rgt-mn ';
if($menu_type==9) echo 'box-menu ';
if($menu_type==11) echo 'w-header-type-11 ';
if($menu_type==12) echo 'header-type-12 ';
echo ($hideheader)? 'hi-header ' : '';
echo ' '.$hotella_webnus_options['hotella_webnus_header_color_type']
 ?>">
	<div  class="container">
		<?php if(!$menu_type==0){
			$logo_alignment = $hotella_webnus_options['hotella_webnus_header_logo_alignment'];
			if( 1 == $logo_alignment ) {
				echo '<div class="col-md-3 logo-wrap">';
			} elseif( 2 == $logo_alignment ) {
				echo '<div class="col-md-3 cntmenu-leftside"></div><div class="col-md-6 logo-wrap center">';
			} elseif( 3 == $logo_alignment ) {
				echo '<div class="col-md-3 logo-wrap right">';
			}
		}
		else {
			echo '<div class="col-md-12 logo-wrap center">';
		}
		?>
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
	echo '<a href="'.esc_url(home_url( '/' )).'"><img src="'.esc_url($logo).'" width="'. $logo_width . '" id="img-logo-w1" alt="'.get_bloginfo( "name" ).'" class="img-logo-w1" style="width: '. $logo_width . '"></a>';
if(!empty($transparent_logo))
	echo '<a href="'.esc_url(home_url( '/' )).'"><img src="'.esc_url($transparent_logo).'" width="' . (!empty($transparent_logo_width)?$transparent_logo_width:$logo_width) . '" id="img-logo-w2" alt="'.get_bloginfo( "name" ).'" class="img-logo-w2" style="width: ' . $transparent_logo_width . '"></a>';
else
	echo '<a href="'.esc_url(home_url( '/' )).'"><img src="'.esc_url($logo).'" width="'. (!empty($transparent_logo_width)?$transparent_logo_width:$logo_width). '" id="img-logo-w2" alt="'.get_bloginfo( "name" ).'" class="img-logo-w2" style="width: '. ( !empty($transparent_logo_width) ? $transparent_logo_width . 'px': $logo_width. 'px' ). '"></a>';
if(!empty($sticky_logo))
	echo '<span class="logo-sticky"><a href="'.esc_url(home_url( '/' )).'"><img src="'.esc_url($sticky_logo).'" width="'. (!empty($sticky_logo_width)?$sticky_logo_width:"150"). '" id="img-logo-w3" alt="'.get_bloginfo( "name" ).'" class="img-logo-w3"></a></span>';
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
<?php } ?>
		</div></div>
	<?php if(!$menu_type==0){
		switch($logo_alignment){
			case 1:
				echo '<div class="col-md-9 alignright"><hr class="vertical-space" />';
			break;
			case 2:
				echo '<div class="col-md-3 right-side">';
			break;
			case 3:
				echo '<div class="col-md-9 left-side"><hr class="vertical-space" />';
			break;
			default:
			echo '';
		}
			$logo_rightside = isset($hotella_webnus_options['hotella_webnus_header_logo_rightside']) ? $hotella_webnus_options['hotella_webnus_header_logo_rightside'] : '' ;
			if( 1 == $logo_rightside ){
			?>
				<form action="<?php echo esc_url(home_url( '/' )); ?>" method="get">
				<input name="s" type="text" placeholder="<?php esc_html_e('Search...','hotella') ?>" class="header-saerch" >
				</form>
			<?php }
			elseif(2 == $logo_rightside)
			{ ?>
				<h6><i class="sl-location-pin"></i><span><?php echo '' . $hotella_webnus_options['hotella_webnus_header_email']; ?></span></h6>
				<h6><i class="sl-phone"></i><span><?php echo '' . $hotella_webnus_options['hotella_webnus_header_phone']; ?></span></h6>
				<h6><i class="sl-envelope-open"></i><span><?php echo '' . $hotella_webnus_options['hotella_webnus_header_address']; ?></span></h6>
			<?php }
			elseif(3 == $logo_rightside)
			{
				echo '<div class="header-widget-component wn-toggle">';
				echo '<i class="sl-event wn-click"></i>';
				echo '<div class="booking-content-component wn-content-toggle">';
				if(is_active_sidebar('header-advert'))
				dynamic_sidebar('header-advert');
				if(is_active_sidebar('woocommerce_header'))
				dynamic_sidebar('woocommerce_header');
				echo '</div>';
				echo '</div>';
			}
			?>
		</div>
		<?php } ?>
	</div>
	<?php
	$menu_alignment ='';
	if(!$menu_type==0){
		if($logo_alignment==3 ){
			$menu_alignment='left ';
		}elseif($logo_alignment==2 ){
			$menu_alignment='center ';
		}
	}

	if ($menu_type == '12' && isset( $hotella_webnus_options['hotella_webnus_top_header'] ) && $hotella_webnus_options['hotella_webnus_top_header'] == '1'){
	if ( ! function_exists( 'topheader_menu' ) ){
        function topheader_menu(){
            $hotella_webnus_options = hotella_webnus_options();
            if ( has_nav_menu('top-header-menu') ){
                if($menu_type==0){
                    $menuParameters = array('theme_location' => 'top-header-menu','container' => 'false','menu_id' => 'nav','depth' => '5','items_wrap' => '<ul id="%1$s">%3$s</ul>',);
                }else{
                    $menuParameters = array('theme_location' => 'top-header-menu','container' => 'false', 'depth' => '1', 'echo'  => false,);
                }
                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
            }
        }
    }

    if ( ! function_exists( 'topheader_weather' ) ){
        function topheader_weather(){
        	$hotella_webnus_options = hotella_webnus_options();
        	$time = date( 'H:i', current_time( 'timestamp', 0 ) ) ;
            echo '<div class="wtop-weather"><span>' .$time . '</span>' . do_shortcode('[wpc-weather id="'.$hotella_webnus_options['hotella_weather_id'].'"]') . '</div>';
        }
    }

    if ( ! function_exists( 'topheader_map' ) ){
        function topheader_map(){
        	$hotella_webnus_options = hotella_webnus_options();
			$map_address = ( isset( $hotella_webnus_options['hotella_webnus_top_header_map_address'] ) && $hotella_webnus_options['hotella_webnus_top_header_map_address'] ) ? $hotella_webnus_options['hotella_webnus_top_header_map_address'] : '';
			echo '<a class="w-top-headaer-link topheader-map" href="https://maps.google.com/maps?q=' . $map_address . '">' . esc_html('MAP','hotella') . '<i class="ti-location-pin"></i></a>';
        }
    }

    if ( ! function_exists( 'topheader_custom_link' ) ){
        function topheader_custom_link(){
        	$hotella_webnus_options = hotella_webnus_options();
        	echo '<a href="'. $hotella_webnus_options['hotella_webnus_top_header_clink'] .'" class="w-top-headaer-link topheader-clink" target="_blank">'. $hotella_webnus_options['hotella_webnus_top_header_ctext'] .'</a>';
        }
    }


	?>
	<div class="top-header-sec wn-toggle">
		<i class="sl-info wn-click"></i>
		<div class="container wn-content-toggle">
			<div class="col-md-6 col-sm-6">
			<?php
			if( $hotella_webnus_options['top_header_elements']['left'] ){
		        foreach ($hotella_webnus_options['top_header_elements']['left'] as $key=>$value) {
		            switch($key) {

		                case 'top_header_menu': topheader_menu();
		                break;

		                case 'weather': topheader_weather();
		                break;

		                case 'map': topheader_map();
		                break;

		                case 'custom_link': topheader_custom_link();
		                break;

		            }
		        }
			}
			?>
			</div>
			<div class="col-md-6 col-sm-6">
			<?php
			if( $hotella_webnus_options['top_header_elements']['right'] ){
		        foreach ($hotella_webnus_options['top_header_elements']['right'] as $key=>$value) {
		            switch($key) {

		                case 'top_header_menu': topheader_menu();
		                break;

		                case 'weather': topheader_weather();
		                break;

		                case 'map': topheader_map();
		                break;

		                case 'custom_link': topheader_custom_link();
		                break;

		            }
		        }
			}
			?>
			</div>
		</div>
	</div>
	<?php
		}
	?>
	<nav id="nav-wrap" class="nav-wrap2 <?php echo esc_attr( $menu_alignment );
		switch($menu_type){
			case 2:
				echo 'mn4';
				break;
			case 3:
				echo 'mn4 darknavi';
				break;
			case 5:
				echo 'darknavi';
				break;
			default:
				echo '';
		}
	?>">
		<div class="container">
			<?php
			$onepage_menu = '';
			if(is_page()){
				$onepage_menu = rwmb_meta( 'hotella_onepage_menu_meta' );
			}

				$menu_location = '';
				if($menu_type==0){
					$menu_location = 'header-top-menu';
				}elseif($onepage_menu){
					$menu_location = 'onepage-header-menu';
				}else{
					$menu_location = 'header-menu';
				}
				if ( has_nav_menu( $menu_location ) ) {
					wp_nav_menu( array( 'theme_location' => $menu_location, 'container' => 'false', 'menu_id' => 'nav', 'depth' => '5', 'fallback_cb' => 'wp_page_menu', 'items_wrap' => '<ul id="%1$s">%3$s</ul>',  'walker' => new hotella_webnus_description_walker() ) );
				}

			if( !function_exists('is_plugin_active') ) {
				include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
			}

			if ( is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) && $hotella_webnus_options['hotella_webnus_wpml_language_switcher'] == '1' ) {
				do_action('wpml_add_language_selector');
			}
			?>
		</div>
	</nav>

</header>
<!-- end-header -->