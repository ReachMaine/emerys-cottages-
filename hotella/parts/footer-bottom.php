<?php
$hotella_webnus_options = hotella_webnus_options();
$w_fbl_type = isset($hotella_webnus_options['hotella_webnus_footer_bottom_left']) ? $hotella_webnus_options['hotella_webnus_footer_bottom_left'] : '' ;
$w_fbr_type = isset($hotella_webnus_options['hotella_webnus_footer_bottom_right']) ? $hotella_webnus_options['hotella_webnus_footer_bottom_right'] : '' ;
$w_fb_logo = '<img src="'.esc_url(isset($hotella_webnus_options['hotella_webnus_footer_logo']['url']) ? $hotella_webnus_options['hotella_webnus_footer_logo']['url'] : '').'" width="65" alt="'.get_bloginfo( "name" ).'">';
$hotella_webnus_options['hotella_webnus_footer_copyright_left'] = isset($hotella_webnus_options['hotella_webnus_footer_copyright_left']) ? $hotella_webnus_options['hotella_webnus_footer_copyright_left'] : '' ;
$hotella_webnus_options['hotella_webnus_footer_copyright_right'] = isset($hotella_webnus_options['hotella_webnus_footer_copyright_right']) ? $hotella_webnus_options['hotella_webnus_footer_copyright_right'] : '' ;
if (has_nav_menu('footer-menu')){
	$menuParameters = array('theme_location'=>'footer-menu','container' => false,'echo' => false,'items_wrap' => '%3$s','depth' => 0,);
	$w_fb_menu = strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
}
$w_fb_text_left = wp_kses( $hotella_webnus_options['hotella_webnus_footer_copyright_left'], hotella_kayses() );
$w_fb_text_right = wp_kses( $hotella_webnus_options['hotella_webnus_footer_copyright_right'], hotella_kayses() );
?>
<section class="footbot">
<div class="container">
	<div class="col-md-6">
	<div class="footer-navi">
	<?php switch ($w_fbl_type){
		case 1: echo '' . $w_fb_logo;
		break;
		case 2:	echo '' . $w_fb_menu;
		break;
		case 3:	echo '' . $w_fb_text_left;
		break;
	} ?>
	</div>
	</div>
	<div class="col-md-6">
	<div class="footer-navi floatright">
	<?php switch ($w_fbr_type){
		case 1: echo '' . $w_fb_logo;
		break;
		case 2:	echo '' . $w_fb_menu;
		break;
		case 3:	echo '' . $w_fb_text_right;
		break;
	} ?>
	</div>
	</div>
</div>
</section>