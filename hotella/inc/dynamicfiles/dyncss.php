<?php
ob_start();
$thm_options = get_option('hotella_webnus_options');


/*
 * Body style
*/
if (!empty($thm_options['hotella_webnus_background_pattern']) && ($thm_options['hotella_webnus_background_pattern'] != 'none')) {
	echo "body{background-image:url('{$thm_options['hotella_webnus_background_pattern']}') !important; background-repeat:repeat;} ";
}

if ($thm_options['hotella_webnus_wide_screen'] == '1'){
    echo"
    @media only screen and (min-width: 1361px) {
    .container {width: 96%;}
    }
  ";
}

/*
 * Header Style
*/
if(!empty($thm_options['hotella_webnus_container_width']))
{
	$w_value = trim ($thm_options['hotella_webnus_container_width']);
	if($w_value){
		if(substr($w_value,-2,2)!="px"){$w_value.='px';};
		echo esc_attr( "#wrap .container {max-width:{$w_value};}\n\n" );
	}
}

if(!empty($thm_options['hotella_webnus_header_padding_top']))
{
	$w_value = trim ($thm_options['hotella_webnus_header_padding_top']);
	if($w_value){
		if(substr($w_value,-2,2)!="px"){$w_value.='px';};
		echo esc_attr( "#header {padding-top:{$w_value};}\n\n" );
	}
}

if(!empty($thm_options['hotella_webnus_header_padding_bottom']))
{
	$w_value = trim ($thm_options['hotella_webnus_header_padding_bottom']);
	if($w_value){
		if(substr($w_value,-2,2)!="px"){$w_value.='px';};
		echo esc_attr( "#header {padding-bottom:{$w_value};}\n\n" );
	}
}

/*
 * Custom Fonts For P,H Tags
*/
$w_custom_font1_src = $w_custom_font2_src = $w_custom_font3_src ='';

//custom-font-1 font-face

  if( isset($thm_options['hotella_webnus_custom_font1_eot']) && $thm_options['hotella_webnus_custom_font1_eot']['url'] )
    $w_custom_font1_src[] = "url('{$thm_options['hotella_webnus_custom_font1_eot']['url']}?#iefix') format('embedded-opentype')";
  if( isset($thm_options['hotella_webnus_custom_font1_woff']) && $thm_options['hotella_webnus_custom_font1_woff']['url'] )
    $w_custom_font1_src[] = "url('{$thm_options['hotella_webnus_custom_font1_woff']['url']}') format('woff')";
  if( isset($thm_options['hotella_webnus_custom_font1_ttf']) && $thm_options['hotella_webnus_custom_font1_woff']['url'] )
    $w_custom_font1_src[] = "url('{$thm_options['hotella_webnus_custom_font1_ttf']['url']}') format('truetype')";

if($w_custom_font1_src !='')
{
  $w_custom_font1_src= implode(",\n",$w_custom_font1_src);
  echo "@font-face {
  font-family: 'custom-font-1';
  font-style: normal;
  font-weight: normal;
  src: {$w_custom_font1_src};\n}\n";
}

//custom-font-2 font-face

  if( isset($thm_options['hotella_webnus_custom_font2_eot']) && $thm_options['hotella_webnus_custom_font2_eot']['url'] )
    $w_custom_font2_src[] = "url('{$thm_options['hotella_webnus_custom_font2_eot']['url']}?#iefix') format('embedded-opentype')";
  if( isset($thm_options['hotella_webnus_custom_font2_woff']) && $thm_options['hotella_webnus_custom_font2_woff']['url'] )
    $w_custom_font2_src[] = "url('{$thm_options['hotella_webnus_custom_font2_woff']['url']}') format('woff')";
  if( isset($thm_options['hotella_webnus_custom_font2_ttf']) && $thm_options['hotella_webnus_custom_font2_ttf']['url'] )
    $w_custom_font2_src[] = "url('{$thm_options['hotella_webnus_custom_font2_ttf']['url']}') format('truetype')";

if($w_custom_font2_src !='')
{
  $w_custom_font2_src= implode(",\n",$w_custom_font2_src);
  echo "@font-face {
  font-family: 'custom-font-2';
  font-style: normal;
  font-weight: normal;
  src: {$w_custom_font2_src};\n}\n";
}

//custom-font-3 font-face

  if( isset($thm_options['hotella_webnus_custom_font3_eot']) && $thm_options['hotella_webnus_custom_font2_eot']['url'] )
    $w_custom_font3_src[] = "url('{$thm_options['hotella_webnus_custom_font3_eot']['url']}?#iefix') format('embedded-opentype')";
  if( isset($thm_options['hotella_webnus_custom_font3_woff']) && $thm_options['hotella_webnus_custom_font3_woff']['url'] )
    $w_custom_font3_src[] = "url('{$thm_options['hotella_webnus_custom_font3_woff']['url']}') format('woff')";
  if( isset($thm_options['hotella_webnus_custom_font3_ttf']) && $thm_options['hotella_webnus_custom_font3_ttf']['url'] )
    $w_custom_font3_src[] = "url('{$thm_options['hotella_webnus_custom_font3_ttf']['url']}') format('truetype')";

if($w_custom_font3_src !='')
{
  $w_custom_font3_src= implode(",\n",$w_custom_font3_src);
  echo "@font-face {
  font-family: 'custom-font-3';
  font-style: normal;
  font-weight: normal;
  src: {$w_custom_font3_src};\n}\n";
}

// body-font select
if(isset($thm_options['body-typography']['font-family']) && $thm_options['body-typography']['font-family']!=''){
    $font_family= '';
    if ($thm_options['body-typography']['font-family'] == 'typekit-font-1'){
        $font_family = $thm_options['webnus_typekit_font1'];
    }elseif ($thm_options['body-typography']['font-family'] == 'typekit-font-2'){
        $font_family = $thm_options['webnus_typekit_font2'];
    }elseif ($thm_options['body-typography']['font-family'] == 'typekit-font-3'){
        $font_family = $thm_options['webnus_typekit_font3'];
    }else{
        $font_family = $thm_options['body-typography']['font-family'];
    }
    echo "body { font-family: {$font_family};}\n";
}


// p-font select
if(isset($thm_options['p-typography']['font-family']) && $thm_options['p-typography']['font-family']!=''){
    $font_family= '';
    if ($thm_options['p-typography']['font-family'] == 'typekit-font-1'){
        $font_family = $thm_options['webnus_typekit_font1'];
    }elseif ($thm_options['p-typography']['font-family'] == 'typekit-font-2'){
        $font_family = $thm_options['webnus_typekit_font2'];
    }elseif ($thm_options['p-typography']['font-family'] == 'typekit-font-3'){
        $font_family = $thm_options['webnus_typekit_font3'];
    }else{
        $font_family = $thm_options['p-typography']['font-family'];
    }
    echo "#wrap p { font-family: {$font_family};}\n";
}


// heading-font select
if(isset($thm_options['all-h-typography']['font-family']) && $thm_options['all-h-typography']['font-family']!=''){
    $font_family= '';
    if ($thm_options['all-h-typography']['font-family'] == 'typekit-font-1'){
        $font_family = $thm_options['webnus_typekit_font1'];
    }elseif ($thm_options['all-h-typography']['font-family'] == 'typekit-font-2'){
        $font_family = $thm_options['webnus_typekit_font2'];
    }elseif ($thm_options['all-h-typography']['font-family'] == 'typekit-font-3'){
        $font_family = $thm_options['webnus_typekit_font3'];
    }else{
        $font_family = $thm_options['all-h-typography']['font-family'];
    }
    echo "#wrap h1, #wrap h2, #wrap h3, #wrap h4, #wrap h5, #wrap h6 { font-family: {$font_family};}\n";
}


if(isset($thm_options['h1-typography']['font-family']) && $thm_options['h1-typography']['font-family']!=''){
    $font_family= '';
    if ($thm_options['h1-typography']['font-family'] == 'typekit-font-1'){
        $font_family = $thm_options['webnus_typekit_font1'];
    }elseif ($thm_options['h1-typography']['font-family'] == 'typekit-font-2'){
        $font_family = $thm_options['webnus_typekit_font2'];
    }elseif ($thm_options['h1-typography']['font-family'] == 'typekit-font-3'){
        $font_family = $thm_options['webnus_typekit_font3'];
    }else{
        $font_family = $thm_options['h1-typography']['font-family'];
    }
    echo "#wrap h1 { font-family: {$font_family};}\n";
}


if(isset($thm_options['h2-typography']['font-family']) && $thm_options['h2-typography']['font-family']!=''){
    $font_family= '';
    if ($thm_options['h2-typography']['font-family'] == 'typekit-font-1'){
        $font_family = $thm_options['webnus_typekit_font1'];
    }elseif ($thm_options['h2-typography']['font-family'] == 'typekit-font-2'){
        $font_family = $thm_options['webnus_typekit_font2'];
    }elseif ($thm_options['h2-typography']['font-family'] == 'typekit-font-3'){
        $font_family = $thm_options['webnus_typekit_font3'];
    }else{
        $font_family = $thm_options['h2-typography']['font-family'];
    }
    echo "#wrap h2 { font-family: {$font_family};}\n";
}


if(isset($thm_options['h3-typography']['font-family']) && $thm_options['h3-typography']['font-family']!=''){
    $font_family= '';
    if ($thm_options['h3-typography']['font-family'] == 'typekit-font-1'){
        $font_family = $thm_options['webnus_typekit_font1'];
    }elseif ($thm_options['h3-typography']['font-family'] == 'typekit-font-2'){
        $font_family = $thm_options['webnus_typekit_font2'];
    }elseif ($thm_options['h3-typography']['font-family'] == 'typekit-font-3'){
        $font_family = $thm_options['webnus_typekit_font3'];
    }else{
        $font_family = $thm_options['h3-typography']['font-family'];
    }
    echo "#wrap h3 { font-family: {$font_family};}\n";
}


if(isset($thm_options['h4-typography']['font-family']) && $thm_options['h4-typography']['font-family']!=''){
    $font_family= '';
    if ($thm_options['h4-typography']['font-family'] == 'typekit-font-1'){
        $font_family = $thm_options['webnus_typekit_font1'];
    }elseif ($thm_options['h4-typography']['font-family'] == 'typekit-font-2'){
        $font_family = $thm_options['webnus_typekit_font2'];
    }elseif ($thm_options['h4-typography']['font-family'] == 'typekit-font-3'){
        $font_family = $thm_options['webnus_typekit_font3'];
    }else{
        $font_family = $thm_options['h4-typography']['font-family'];
    }
    echo "#wrap h4 { font-family: {$font_family};}\n";
}


if(isset($thm_options['h5-typography']['font-family']) && $thm_options['h5-typography']['font-family']!=''){
    $font_family= '';
    if ($thm_options['h5-typography']['font-family'] == 'typekit-font-1'){
        $font_family = $thm_options['webnus_typekit_font1'];
    }elseif ($thm_options['h5-typography']['font-family'] == 'typekit-font-2'){
        $font_family = $thm_options['webnus_typekit_font2'];
    }elseif ($thm_options['h5-typography']['font-family'] == 'typekit-font-3'){
        $font_family = $thm_options['webnus_typekit_font3'];
    }else{
        $font_family = $thm_options['h5-typography']['font-family'];
    }
    echo "#wrap h5 { font-family: {$font_family};}\n";
}


if(isset($thm_options['h6-typography']['font-family']) && $thm_options['h6-typography']['font-family']!=''){
    $font_family= '';
    if ($thm_options['h6-typography']['font-family'] == 'typekit-font-1'){
        $font_family = $thm_options['webnus_typekit_font1'];
    }elseif ($thm_options['h6-typography']['font-family'] == 'typekit-font-2'){
        $font_family = $thm_options['webnus_typekit_font2'];
    }elseif ($thm_options['h6-typography']['font-family'] == 'typekit-font-3'){
        $font_family = $thm_options['webnus_typekit_font3'];
    }else{
        $font_family = $thm_options['h6-typography']['font-family'];
    }
    echo "#wrap h6 { font-family: {$font_family};}\n";
}



// menu-font select
if(isset($thm_options['menu-typography']['font-family']) && $thm_options['menu-typography']['font-family']!=''){
    $font_family= '';
    if ($thm_options['menu-typography']['font-family'] == 'typekit-font-1'){
        $font_family = $thm_options['webnus_typekit_font1'];
    }elseif ($thm_options['menu-typography']['font-family'] == 'typekit-font-2'){
        $font_family = $thm_options['webnus_typekit_font2'];
    }elseif ($thm_options['menu-typography']['font-family'] == 'typekit-font-3'){
        $font_family = $thm_options['webnus_typekit_font3'];
    }else{
        $font_family = $thm_options['menu-typography']['font-family'];
    }
    echo "#wrap ul#nav * { font-family: {$font_family};}\n";
}

// sub-menu-font select
if(isset($thm_options['sub-menu-typography']['font-family']) && $thm_options['sub-menu-typography']['font-family']!=''){
    $font_family= '';
    if ($thm_options['sub-menu-typography']['font-family'] == 'typekit-font-1'){
        $font_family = $thm_options['webnus_typekit_font1'];
    }elseif ($thm_options['sub-menu-typography']['font-family'] == 'typekit-font-2'){
        $font_family = $thm_options['webnus_typekit_font2'];
    }elseif ($thm_options['sub-menu-typography']['font-family'] == 'typekit-font-3'){
        $font_family = $thm_options['webnus_typekit_font3'];
    }else{
        $font_family = $thm_options['sub-menu-typography']['font-family'];
    }
    echo "#nav ul li a { font-family: {$font_family} !important;}\n";
}


// blog-title-font select
if(isset($thm_options['post-title-typography']['font-family']) && $thm_options['post-title-typography']['font-family']!=''){
    $font_family= '';
    if ($thm_options['post-title-typography']['font-family'] == 'typekit-font-1'){
        $font_family = $thm_options['webnus_typekit_font1'];
    }elseif ($thm_options['post-title-typography']['font-family'] == 'typekit-font-2'){
        $font_family = $thm_options['webnus_typekit_font2'];
    }elseif ($thm_options['post-title-typography']['font-family'] == 'typekit-font-3'){
        $font_family = $thm_options['webnus_typekit_font3'];
    }else{
        $font_family = $thm_options['post-title-typography']['font-family'];
    }
    echo ".blog-post h4, .blog-post h1, .blog-post h3, .blog-line h4, .blog-single-post h1 { font-family: {$font_family};}\n";
}


// single-blog-title-font select
if(isset($thm_options['single-post-title-typography']['font-family']) && $thm_options['single-post-title-typography']['font-family']!=''){
    $font_family= '';
    if ($thm_options['single-post-title-typography']['font-family'] == 'typekit-font-1'){
        $font_family = $thm_options['webnus_typekit_font1'];
    }elseif ($thm_options['single-post-title-typography']['font-family'] == 'typekit-font-2'){
        $font_family = $thm_options['webnus_typekit_font2'];
    }elseif ($thm_options['single-post-title-typography']['font-family'] == 'typekit-font-3'){
        $font_family = $thm_options['webnus_typekit_font3'];
    }else{
        $font_family = $thm_options['single-post-title-typography']['font-family'];
    }
    echo ".blog-single-post h1 { font-family: {$font_family};}\n";
}

/*
 * Color Skin Style Generator
 */

 /* == Menu Colors ------------------ */

if( isset($thm_options['hotella_webnus_menu_link_color']) && $thm_options['hotella_webnus_menu_link_color']['regular'] )
	echo "#wrap #nav a { color:{$thm_options['hotella_webnus_menu_link_color']['regular']};}\n\n";

if( isset($thm_options['hotella_webnus_menu_link_color']) && $thm_options['hotella_webnus_menu_link_color']['hover'] )
	echo "#wrap #nav a:hover,.transparent-header-w.t-dark-w #header.horizontal-w.duplex-hd #nav > li:hover > a,
		.transparent-header-w #header.horizontal-w #nav > li:hover > a {color:{$thm_options['hotella_webnus_menu_link_color']['hover']};}\n\n";

if( isset($thm_options['hotella_webnus_menu_link_color']) && $thm_options['hotella_webnus_menu_link_color']['active'] )
	echo "#wrap #nav li.current > a, #wrap #nav li.current ul li a:hover, #wrap #nav li.active > a {color:{$thm_options['hotella_webnus_menu_link_color']['active']};}\n\n";


/* scroll to top */

if(isset($thm_options['hotella_webnus_scroll_to_top_hover_background_color']) && $thm_options['hotella_webnus_scroll_to_top_hover_background_color']['regular'] )
	echo esc_attr( "#wrap #scroll-top a {background-color:{$thm_options['hotella_webnus_scroll_to_top_hover_background_color']['regular']};}\n" );

if(isset($thm_options['hotella_webnus_scroll_to_top_hover_background_color']) && $thm_options['hotella_webnus_scroll_to_top_hover_background_color']['hover'] )
	echo esc_attr( "#wrap #scroll-top a:hover {background-color:{$thm_options['hotella_webnus_scroll_to_top_hover_background_color']['hover']};}\n" );
$thm_options['hotella_webnus_custom_color_skin'] = ( ! empty( $thm_options['hotella_webnus_custom_color_skin'] ) ) ? $thm_options['hotella_webnus_custom_color_skin'] : '';
if ( $thm_options['hotella_webnus_color_skin'] != 'e3e3e3' || $thm_options['hotella_webnus_custom_color_skin'] ) {

  $color_custom    = ( $thm_options['hotella_webnus_custom_color_skin'] ) ? $thm_options['hotella_webnus_custom_color_skin'] : '' ;
  $color_predefined = ( $thm_options['hotella_webnus_color_skin'] != 'e3e3e3' ) ? $thm_options['hotella_webnus_color_skin'] : '' ;
  $color = ( $thm_options['hotella_webnus_custom_color_skin'] ) ? $color_custom : '#'.$color_predefined ;

 ?>
	 /* == TextColors
  ---------------- */
  #wrap.colorskin-custom .theme-skin.bordered-bot,.colorskin-custom .hb-accom-list-shortcode-wrapper .hb-accom-list-item a,.colorskin-custom span.hb-summary-change-search a,.colorskin-custom .hb-dp-day a,.colorskin-custom #awe-plugin-booking .apb-layout .apb-content-area .apb-room_item .packages-wrap ul.packages li i,#wrap.colorskin-custom .sidebar .widget .tabs li.active a, #wrap.colorskin-custom a.magicmore:hover:after, #wrap.colorskin-custom a.magicmore:hover, #wrap.colorskin-custom a.magicmore:hover:after, #wrap.colorskin-custom .wpcr3_review_title.wpcr3_caps, #wrap.colorskin-custom .vc_tta-accordion.vc_tta-style-classic.vc_tta-shape-square .vc_tta-panel.vc_active .vc_tta-panel-heading , #wrap.colorskin-custom .vc_tta-accordion.vc_tta-style-classic.vc_tta-shape-square .vc_active .vc_tta-panel-heading .vc_tta-controls-icon::before , #wrap.colorskin-custom .vc_tta-accordion.vc_tta-style-classic.vc_tta-shape-square .vc_tta-controls-icon-position-right .vc_active:before , #wrap.colorskin-custom .button.gray.rounded.bordered-bot , #wrap.colorskin-custom .buy-process-item span , #wrap.colorskin-custom .vc_images_carousel .vc_carousel-control:hover, #wrap.colorskin-custom .vc_images_carousel .vc_carousel-control span:hover , #wrap.colorskin-custom #awe-plugin-booking .apb-layout .apb-content-area .apb-room_item .apb-room_view-more:hover, #awe-plugin-booking .apb-layout .apb-content-area .apb-room_item .apb-room_heading:hover a , #wrap.colorskin-custom .icon-box9 a.magicmore , #wrap.colorskin-custom .icon-box13 a.magicmore:after , #wrap.colorskin-custom .icon-box14 a.magicmore:after , #wrap.colorskin-custom .icon-box15 .magicmore:hover:after , #wrap.colorskin-custom .top-bar .top-search-form-icon:hover i , #wrap.colorskin-custom .top-custom-text a:hover , #wrap.colorskin-custom .wp-pagenavi a:hover , #wrap.colorskin-custom .awebooking .apb-btn:visited , #wrap.colorskin-custom .colorb, #wrap.colorskin-custom .colorf, #wrap.colorskin-custom .hebe .tp-tab-title, #wrap.colorskin-custom .vc_carousel.vc_carousel_horizontal.hero-carousel h2.post-title a:hover, #wrap.colorskin-custom .wpb_gallery_slides .flex-caption h2.post-title a:hover, #wrap.colorskin-custom .vc_tta-color-white.vc_tta-style-modern.vc_tta-o-shape-group .vc_tta-tab.vc_active>a i.vc_tta-icon, #wrap.colorskin-custom .blog-social a:hover, .transparent-header-w.t-dark-w #wrap.colorskin-custom .top-bar .top-links a:hover, .transparent-header-w.t-dark-w #wrap.colorskin-custom .top-bar h6 i, .colorskin-custom .widget ul li.cat-item a:after , .colorskin-custom .breadcrumbs-w a:after , .colorskin-custom .blog-inner .blog-author:after, .colorskin-custom .blog-inner .blog-date:after , .colorskin-custom .blog-post a:hover, .colorskin-custom .blog-author span, .colorskin-custom .blog-line p a:hover , .colorskin-custom h6.blog-date a:hover, .colorskin-custom h6.blog-cat a:hover, .colorskin-custom h6.blog-author a:hover , .colorskin-custom .blog-line:hover h4 a , .colorskin-custom a.readmore , .colorskin-custom a.addtocart:hover, .colorskin-custom a.select-options:hover , .colorskin-custom .max-title:after , .colorskin-custom .subtitle-element:after , .colorskin-custom .max-counter.t-counter:hover i.icon-counter , .colorskin-custom .max-counter.t-counter:hover .max-count:after , .colorskin-custom .max-counter.t-counter:hover .max-count, .colorskin-custom .dark-content .max-counter.t-counter:hover .max-count, .colorskin-custom .our-team4 .social-team a i:before , .colorskin-custom .our-team5 h5 , .colorskin-custom .our-team5 .social-team a i:hover:before , .colorskin-custom .testimonial2 .testimonial-content h5 , .colorskin-custom .testimonials-slider-w.flexslider .flex-direction-nav a i , .colorskin-custom .pricing-plan1 .ppfooter .readmore , .colorskin-custom .pricing-plan2 .ppfooter .readmore , .colorskin-custom .our-process-item:hover i , .colorskin-custom .buy-process-wrap:before , .colorskin-custom .buy-process-item h4 , .colorskin-custom .buy-process-item .icon-wrapper:before  , .colorskin-custom .buy-process-item i , .colorskin-custom .buy-process-item.featured i , .colorskin-custom .contact-info i , .colorskin-custom .acc-trigger a:hover, .colorskin-custom .acc-trigger.active a, .colorskin-custom .acc-trigger.active a:hover , .colorskin-custom .w-pricing-table.pt-type1 .pt-footer a, .colorskin-custom .w-pricing-table.pt-type1 .pt-footer a , .colorskin-custom .w-pricing-table.pt-type2 > span , .colorskin-custom .w-pricing-table.pt-type2:hover > span , .colorskin-custom .w-pricing-table.pt-type2 .pt-footer a, .colorskin-custom .w-pricing-table.pt-type2 .pt-footer a , .colorskin-custom .w-pricing-table.pt-type2.featured .pt-footer a , .colorskin-custom .w-pricing-table.pt-type3 .pt-footer a, .colorskin-custom .w-pricing-table.pt-type3.featured .pt-footer a , .colorskin-custom .w-pricing-table.pt-type7 .plan-title , .colorskin-custom .related-works .portfolio-item:hover h5 a , .colorskin-custom .event-grid .event-detail , .colorskin-custom .teaser-box2 .teaser-title , .colorskin-custom .teaser-box3 .teaser-subtitle , .colorskin-custom .teaser-box4 .teaser-title, .colorskin-custom teaser-box4 .teaser-subtitle , .colorskin-custom .teaser-box8:hover .teaser-title , .colorskin-custom #tribe-events-content-wrapper #tribe-bar-form .tribe-events-button , .colorskin-custom #w-login form input , .colorskin-custom #w-login .login-links li a, .colorskin-custom .modal-title , .colorskin-custom .post-format-icon , .colorskin-custom .latestposts-one .latest-title a:hover , .colorskin-custom .latestposts-two .blog-line p.blog-cat a , .colorskin-custom .latestposts-two .blog-line:hover h4 a , .colorskin-custom .latestposts-three h3.latest-b2-title a:hover , .colorskin-custom .latestposts-three h6.latest-b2-cat a, .colorskin-custom .latestposts-three .latest-b2-metad2 span a:hover, .colorskin-custom .latestposts-six .latest-title a:hover , .colorskin-custom .latestposts-six .latest-author a:hover , .colorskin-custom .latestposts-seven .wrap-date-icons h3.latest-date , .colorskin-custom .latestposts-seven .latest-content .latest-title a:hover , .colorskin-custom .latestposts-seven .latest-content .latest-author a , .colorskin-custom .latestposts-seven .latest-content .latest-author a:hover , .colorskin-custom .latestposts-nine .latest-b9 h3 .link , .colorskin-custom .latestposts-ten .latest-b10 .latest-b10-content a.readmore , .colorskin-custom .latestposts-eleven .latest-b11 .latest-b11-meta .date:after , .colorskin-custom .latestposts-twelve .latest-b12 .latest-b12-cont .latest-b12-cat a , .colorskin-custom .latestposts-twelve .latest-b12 .latest-b12-cont .latest-b12-author:hover a, .colorskin-custom .latestposts-twelve .latest-b12 .latest-b12-cont .latest-b12-title:hover a , .colorskin-custom .latest-b13-title a:hover, .colorskin-custom latest-b13-author a:hover, .colorskin-custom latest-b13-cat:hover a , .colorskin-custom .vc_tta-tabs.vc_tta-style-modern.vc_tta-shape-round .vc_tta-tab.vc_active > a , .colorskin-custom .vc_tta-tabs.vc_tta-style-modern.vc_tta-shape-round .vc_tta-tab .vc_tta-icon , .colorskin-custom .blox .widget_search input[type=submit]#searchsubmit.btn, .colorskin-custom .max-hero .widget_search input[type=submit]#searchsubmit.btn  , .colorskin-custom .w-login #user-login .login-links li a , .colorskin-custom .w-login #user-logged .logged-links , .colorskin-custom #awe-plugin-booking .apb-layout .apb-content-area .awe-book-tax, .colorskin-custom .packages-wrap p.tax , .colorskin-custom #awe-plugin-booking .apb-layout.apb-sidebar-left .apb-widget-area .apb-check-avb-form .awebooking-wrapper .apb-content .apb-field > label , .colorskin-custom #awe-plugin-booking .apb-layout.apb-sidebar-left .apb-widget-area .apb-check-avb-form .awebooking-wrapper .apb-content .apb-field .apb-field-group .apbf , .colorskin-custom .single-awe .awebooking .awebooking-wrapper .apb-content .apb-field > label , .colorskin-custom .single-awe .awebooking .awebooking-wrapper .apb-content .apb-field .apb-field-group .apbf , .colorskin-custom .icon-box i , .colorskin-custom .icon-box3 i , .colorskin-custom .icon-box3 h4 , .colorskin-custom .icon-box3:hover, .colorskin-custom .blox.dark .icon-box3:hover , .colorskin-custom .icon-box4:hover i , .colorskin-custom .icon-box5 i , .colorskin-custom .icon-box8 i , .colorskin-custom .icon-box8:hover i , .colorskin-custom .icon-box8 a:hover , .colorskin-custom .icon-box11 i , .colorskin-custom .icon-box11:hover i , .colorskin-custom .icon-box15 img, .colorskin-custom .icon-box15 i , .colorskin-custom .icon-box16 i , .colorskin-custom .icon-box16 h4 , .colorskin-custom .icon-box16 p strong , .colorskin-custom .icon-box16 a.magicmore , .colorskin-custom .icon-box18 i , .colorskin-custom .icon-box19 i , .colorskin-custom .icon-box19 a.magicmore , .colorskin-custom .icon-box20:hover i , .colorskin-custom .icon-box21 i , .colorskin-custom .icon-box21:hover h4 , .colorskin-custom .icon-box21:hover i , .colorskin-custom .icon-box22 a.magicmore , .colorskin-custom .icon-box22:hover h4, .colorskin-custom .icon-box22:hover i, .colorskin-custom .icon-box22.w-featured i , .colorskin-custom .icon-box22.w-featured h4 , .colorskin-custom .icon-box23 h4, .colorskin-custom .blox .icon-box23 h4, .colorskin-custom .blox.dark .icon-box23 h4 , .colorskin-custom .icon-box24 i , .colorskin-custom .icon-colorx i, .colorskin-custom i.icon-colorx , .colorskin-custom #nav a:hover, .colorskin-custom #nav li:hover > a , .colorskin-custom #header #nav .active a , .colorskin-custom .nav-wrap2 #nav > li:hover > a, .colorskin-custom .top-links #nav > li:hover > a , .colorskin-custom #header.w-header-type-11 .logo-wrap , .colorskin-custom #header.w-header-type-13 .tools-section .w-login-modal:hover > i, .colorskin-custom header.w-header-type-13 .tools-section .booking-header-icon:hover > i, .colorskin-custom #header.w-header-type-13 .tools-section #search-form:hover i, .colorskin-custom #header.w-header-type-13 .tools-section .w-login-modal.wn-active i.wn-click, .colorskin-custom header.w-header-type-13 .tools-section .booking-header-icon.wn-active i.wn-click, .colorskin-custom #header.w-header-type-13 .tools-section #search-form.wn-active i.wn-click , .colorskin-custom #header.w-header-type-13 .tools-section div.active i , .colorskin-custom .components .woo-cart-header .header-cart span , .colorskin-custom #menu-icon:hover, .colorskin-custom #menu-icon.active , .colorskin-custom header-type-12 .nav-wrap2 #nav > li:hover > ul li:hover a , .colorskin-custom .header-type-12 .header-widget-component.wn-active i.wn-click, .colorskin-custom header-type-12 .top-header-sec.wn-active i.wn-click , .colorskin-custom .top-header-sec .container div:first-child a:hover, .colorskin-custom top-header-sec .inlinelb:hover , .colorskin-custom .top-header-sec .wtop-weather , .colorskin-custom .top-links a:hover , .colorskin-custom .top-bar .inlinelb:hover , .colorskin-custom .transparent-header-w.t-dark-w #header.horizontal-w #nav > li:hover > a, .colorskin-custom .transparent-header-w.t-dark-w #header.horizontal-w #nav > li.current > a , .colorskin-custom .footer-navi a:hover, .colorskin-custom .custom-footer-menu a:hover , .colorskin-custom .footer-navi a:after , .colorskin-custom .transparent-header-w.t-dark-w .top-bar .socialfollow a:hover , .colorskin-custom #scroll-top a:hover , .colorskin-custom .breadcrumbs-w i , .colorskin-custom .wpcf7 .wpcf7-form input[type="reset"], .colorskin-custom .wpcf7 .wpcf7-form input[type="button"], .colorskin-custom .wpcr3_button_1.wpcr3_cancel_btn , .colorskin-custom .widget ul li a:hover, .colorskin-custom #footer.litex .footer-in .widget ul li a:hover , .colorskin-custom .widget ul li .comment-author-link a:hover , .colorskin-custom .tagcloud a:hover, .colorskin-custom #footer.litex .tagcloud a:hover , .colorskin-custom .sidebar .widget .tabs li:hover a , .colorskin-custom sidebar .widget .tabs li.active a , .colorskin-custom .woo-cart-dropdown ul li a:hover , .colorskin-custom .single .woo-template span.onsale, .colorskin-custom .woocommerce ul.products li.product .onsale , .colorskin-custom .woocommerce div.product .woocommerce-tabs ul.tabs li.active , .colorskin-custom .woocommerce .button , .colorskin-custom .widget_shopping_cart_content p.buttons a.button , .colorskin-custom .single .woo-template span.onsale, .colorskin-custom .woocommerce ul.products li.product .onsale , .colorskin-custom .woocommerce div.product .woocommerce-tabs ul.tabs li.active , .colorskin-custom .woocommerce .button , .colorskin-custom .widget_shopping_cart_content p.buttons a.button, .colorskin-custom .bbp-body a, .colorskin-custom .bbp-body a:visited, .colorskin-custom .bbp-body a:hover, .colorskin-custom .bbp-body a.bbp-forum-title:hover, .colorskin-custom .bbp-topic-title a.bbp-topic-permalink:hover, .colorskin-custom .pin-box h4 a:hover, .colorskin-custom .tline-box h4 a:hover, .colorskin-custom .pin-ecxt h6.blog-cat a:hover, .colorskin-custom .pin-ecxt2 p a:hover, .colorskin-custom .blog-single-post .postmetadata h6.blog-cat a:hover, .colorskin-custom h6.blog-cat a, .colorskin-custom .blgtyp3.blog-post h6 a, .colorskin-custom .blgtyp1.blog-post h6 a, .colorskin-custom .blgtyp2.blog-post h6 a, .colorskin-custom .blog-single-post .postmetadata h6 a, .colorskin-custom .blog-single-post h6.blog-author a, .colorskin-custom .blgtyp3.blog-post h6 a:hover, .colorskin-custom .blgtyp1.blog-post h6 a:hover, .colorskin-custom .blgtyp2.blog-post h6 a:hover, .colorskin-custom .blog-single-post .postmetadata h6 a:hover, .colorskin-custom .blog-single-post h6.blog-author a:hover, .colorskin-custom .blog-post p.blog-cat a, .colorskin-custom .blog-line p.blog-cat a, .colorskin-custom .about-author-sec h5 a:hover, .colorskin-custom .blog-line:hover .img-hover:before, .colorskin-custom .rec-post h5 a:hover, .colorskin-custom .rec-post p a:hover, .colorskin-custom .commentlist li .comment-text .reply a:hover, .colorskin-custom .our-team h5, .colorskin-custom .our-team6 h5, .colorskin-custom .w-pricing-table.pt-type1 .price-footer a:hover, .colorskin-custom .latestnews1 .ln-item:hover .ln-content, .colorskin-custom .latestposts-one .latest-b-cat:hover, .colorskin-custom .latestposts-one .latest-author a:hover, .colorskin-custom .latestposts-two .blog-post p.blog-author a:hover, .colorskin-custom .latestposts-two .blog-line:hover .img-hover:before, .colorskin-custom .latestposts-four h3.latest-b2-title a:hover, .colorskin-custom .latestposts-five h6.latest-b2-cat a, .colorskin-custom .latestposts-six .latest-content p.latest-date, .colorskin-custom .latestposts-seven .latest-img:hover img, .colorskin-custom .a-post-box .latest-title a:hover, .colorskin-custom .event-list2 .event-title a:hover, .colorskin-custom .w-login #user-login .login-links li a:hover, .colorskin-custom .fm-w2-item .fm-w2-price, .colorskin-custom .food-menu-w4:hover img, .colorskin-custom .blox.dark .icon-box9 i, .colorskin-custom .icon-box17, .colorskin-custom .icon-box17 .icon-wrap, .colorskin-custom .icon-box17 i, .colorskin-custom .icon-box19 a.magicmore:hover, .colorskin-custom #nav > li.current > a, .colorskin-custom #nav > li > a.active, .colorskin-custom #nav > li:hover > a, .colorskin-custom #header.sticky #nav-wrap #nav #nav > li:hover > a, .colorskin-custom .dark-submenu #nav ul li a:hover, .colorskin-custom #nav ul li a:hover, .colorskin-custom #nav li.current ul li a:hover, .colorskin-custom .nav-wrap2 #nav ul li a:hover, .colorskin-custom .nav-wrap2.darknavi #nav ul li a:hover, .colorskin-custom #nav ul li.current > a, .colorskin-custom #nav ul li:hover > a, .colorskin-custom .dark-submenu #nav li.mega ul.sub-posts li a:hover, .colorskin-custom .nav-wrap2.darknavi #nav > li > a:hover, .colorskin-custom .nav-wrap2.darknavi #nav > li:hover > a, .colorskin-custom .nav-wrap2 #nav > li.current > a, .colorskin-custom #header.sticky .nav-wrap2.darknavi #nav > li > a:hover, .colorskin-custom .w-header-type-11 #nav > li:hover > a, .colorskin-custom #nav > li:hover > a, .colorskin-custom #nav li.current > a, .colorskin-custom #nav li.active > a, .colorskin-custom #header.sm-rgt-mn #menu-icon:hover i, .colorskin-custom #header.sm-rgt-mn #menu-icon.active i, .colorskin-custom .transparent-header-w.t-dark-w #header.horizontal-w.duplex-hd #nav > li:hover > a, .colorskin-custom .transparent-header-w.t-dark-w #header.horizontal-w.duplex-hd #nav > li.current > a, .colorskin-custom #header.box-menu  h6 i, .colorskin-custom #header.box-menu .nav-wrap2 #nav > li.current, .colorskin-custom #header.box-menu .nav-wrap2 #nav > li:hover, .colorskin-custom .top-bar .inlinelb.topbar-contact:hover, .colorskin-custom .transparent-header-w #header.horizontal-w.sticky #nav > li:hover > a, .colorskin-custom .transparent-header-w.t-dark-w #header.horizontal-w.sticky #nav > li:hover > a, .colorskin-custom .top-bar .socialfollow a:hover i, .colorskin-custom .toggle-top-area .widget .instagram-feed a img:hover, .colorskin-custom #footer .widget .instagram-feed a img:hover, .colorskin-custom .woocommerce nav.woocommerce-pagination ul li a, .colorskin-custom .woocommerce table.shop_table td.product-name a:hover, .colorskin-custom .woocommerce nav.woocommerce-pagination ul li a, .colorskin-custom .woocommerce table.shop_table td.product-name a:hover, .top-header-sec .wtop-weather, .colorskin-custom .top-header-sec.wn-active i.wn-click, .colorskin-custom .widget ul li.cat-item a:before, .colorskin-custom .button.pink.bordered-bot, .colorskin-custom .icon-box27  i, .colorskin-custom #footer.litex .socialfollow a:hover i, #w-login.colorskin-custom #user-login .login-links li a, #w-login.colorskin-custom #user-login .login-links li a:hover, .transparent-header-w #wrap.colorskin-custom .top-bar.litex .top-custom-text a, .colorskin-custom .icon-box10 h5, .colorskin-custom .title-plus-text h3, .colorskin-custom .latest-b13 .latest-b13-author a:hover, .colorskin-custom .apb-step ul > li.active, .colorskin-custom .apb-step ul > li.step-complete, .colorskin-custom .magicmore:hover, .colorskin-custom .icon-box2 i, .colorskin-custom .teaser-box5:hover .teaser-title, .colorskin-custom ul.check li:before, .colorskin-custom li.check:before, .colorskin-custom .latest-b13-title a:hover, .colorskin-custom .latest-b13-author a:hover, .colorskin-custom .latest-b13-cat:hover a, .colorskin-custom #header.w-header-type-13 .tools-section .booking-header-icon.wn-active i.wn-click, .colorskin-custom #header.w-header-type-13 .tools-section .booking-header-icon i.wn-click:hover, .colorskin-custom .awebooking .apbfc-next > span:hover:after, .colorskin-custom .awebooking .ui-datepicker-next > span:hover:after, .colorskin-custom .ui-datepicker.apb-datepicker .apbfc-next > span:hover:after, .colorskin-custom .ui-datepicker.apb-datepicker .ui-datepicker-next > span:hover:after, .colorskin-custom .awe-book-tax, .transparent-header-w.t-dark-w #wrap.colorskin-custom .top-bar .socialfollow a:hover i
  { color: <?php echo esc_attr($color); ?>}

  /* == Backgrounds
  ----------------- */
  #wrap.colorskin-custom .mejs-controls .mejs-time-rail .mejs-time-current:after,#wrap.colorskin-custom .mejs-controls .mejs-time-rail .mejs-time-current, #wrap.colorskin-custom .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,.colorskin-custom a.hb-dp-cmd.hb-dp-cmd-prev,.colorskin-custom a.hb-dp-cmd.hb-dp-cmd-next,.colorskin-custom .hb-dp-day a.hb-dp-selected,.colorskin-custom p.hb-booking-search-submit input,.colorskin-custom .hb-booking-change-search input,.colorskin-custom .hb-select-accom input,.colorskin-custom .hb-confirm-button input,.colorskin-custom .teaser-box5 .teaser-featured, #wrapcolorskin-custom .top-bar .top-search-form-icon:hover i, #wrap.colorskin-custom .awebooking .apb-btn, #wrap.colorskin-custom .awebooking .apb-btn:visited, #wrap.colorskin-custom .subtitle-element5 h1:after, #wrap.colorskin-custom .subtitle-element5 h2:after, #wrap.colorskin-custom .subtitle-element5 h3:after, #wrap.colorskin-custom .subtitle-element5 h4:after, #wrap.colorskin-custom .subtitle-element5 h5:after, #wrap.colorskin-custom .subtitle-element5 h6:after, #wrap.colorskin-custom .vc_tta-accordion.vc_tta-style-classic.vc_tta-shape-square .vc_tta-panel.vc_active .vc_tta-panel-heading, #wrap.colorskin-custom .vc_tta-accordion.vc_tta-style-classic.vc_tta-shape-square .vc_tta-controls-icon-position-right .vc_tta-controls-icon, #wrap.colorskin-custom .wpcf7 .w-contact-p input[type=submit], #wrap.colorskin-custom .icon-box10 a.magicmore, #wrap.colorskin-custom .ls-slider1-a, #wrap.colorskin-custom .vc_carousel.vc_carousel_horizontal.hero-carousel .hero-carousel-wrap .hero-metadata .category a, #wrap.colorskin-custom .wp-pagenavi a:hover, #wrap.colorskin-custom .blog-social a:hover, #wrap.colorskin-custom .colorb, .colorskin-custom .commentlist li .comment-text .reply a:hover, .colorskin-custom .latestnews1 .ln-item:hover .ln-content, .colorskin-custom .latestposts-one .latest-b-cat:hover, .colorskin-custom .latestposts-seven .latest-img:hover img, .colorskin-custom .icon-box17 .icon-wrap, .colorskin-custom .top-bar .inlinelb.topbar-contact:hover, .colorskin-custom #talk-business input[type=submit], .colorskin-custom #talk-business .host-btn-form, .colorskin-custom #wrap.colorskin-custom .top-bar .top-search-form-icon:hover i, .colorskin-custom #wrap.colorskin-custom .awebooking .apb-btn, .colorskin-custom #wrap.colorskin-custom .awebooking .apb-btn:visited, .colorskin-custom .our-team2 figure h2, .colorskin-custom .our-team2 .social-team, .colorskin-custom .our-team4:hover, .colorskin-custom .testimonial4 h5:after, .colorskin-custom .testimonials-slider-w.flexslider .flex-direction-nav a:hover, .colorskin-custom .testimonial-carousel.testi-carou-3 .tc-name:after, .colorskin-custom .w-pricing-table.pt-type2.featured .pt-footer a, .colorskin-custom .w-pricing-table.pt-type6 .pt-footer, .colorskin-custom .w-pricing-table.pt-type7.featured:before, .colorskin-custom .related-works .portfolio-item > a:hover:before, .colorskin-custom .latest-projects-navigation a:hover, .colorskin-custom #w-login h3, .colorskin-custom #w-login .login-links li a[href$="register"], .colorskin-custom .latestposts-twelve .latest-b12 .latest-b12-cont .latest-b12-title:after, .colorskin-custom .latest-b13-title a:after, .colorskin-custom .awbok-shcod .awebooking .awebooking-wrapper.inline .apb-btn, .colorskin-custom .offer-toggle .toogle-plus i, .colorskin-custom #awe-plugin-booking .apb-layout.apb-sidebar-left .apb-widget-area .apb-check-avb-form .awebooking-wrapper .apb-btn.check-avb-js:hover, .colorskin-custom .single-awe .awebooking .awebooking-wrapper .apb-btn:hover, .colorskin-custom .icon-box3 h4:after, .colorskin-custom .icon-box3 a.magicmore, .colorskin-custom .icon-box6 i, .colorskin-custom .icon-box8:hover i, .colorskin-custom .icon-box11:hover i, .colorskin-custom .icon-box12 i, .colorskin-custom .icon-box18:hover i, .colorskin-custom .icon-box21:hover i, .colorskin-custom .blox .icon-box21:hover i, .colorskin-custom .icon-box23 i, .colorskin-custom .icon-box24:hover i, .colorskin-custom .icon-box25 i, .colorskin-custom #header.sm-rgt-mn.w-header-type-11 .logo-wrap, .colorskin-custom .header-type-12 .awebooking-wrapper.inline .apb-btn, .colorskin-custom #pre-footer .footer-subscribe-ba, .colorskin-custom .teaser-box9 .teaser-title.has-image, .colorskin-custom .wpcr3_button_1.wpcr3_submit_btn, .colorskin-custom #footer .tagcloud a:hover, .colorskin-custom .toggle-top-area .tagcloud a:hover, .colorskin-custom .widget .widget-subscribe-form button, .colorskin-custom #footer a.button.black.square.small.thin.footer-link-custom:hover, .colorskin-custom .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .colorskin-custom .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .colorskin-custom .highlight3, .colorskin-custom .pin-ecxt2 .col1-3 span, .colorskin-custom .comments-number-x span, .colorskin-custom #tline-content:before, .colorskin-custom .tline-row-l:after, .colorskin-custom .tline-row-r:before, .colorskin-custom .tline-topdate, .colorskin-custom .port-tline-dt h3, .colorskin-custom .postmetadata h6.blog-views span, .colorskin-custom #commentform input[type="submit"], .colorskin-custom .w-pricing-table.pt-type7 .pt-footer a.magicmore, .colorskin-custom .latestposts-four .latest-b2 h6.latest-b2-cat, .colorskin-custom .a-post-box .latest-cat, .colorskin-custom .single-tribe_events .w-event-meta h3:before, .colorskin-custom .fm-w2-item.featured-w2 .fm-w2-featured, .colorskin-custom #header.sm-rgt-mn #menu-icon span.mn-ext3, .colorskin-custom .footer-in .tribe-events-widget-link a:hover, .colorskin-custom .footer-in .contact-inf button:hover, .colorskin-custom .side-list li:hover img, .colorskin-custom .button.theme-skin, .colorskin-custom .max-title:after, .colorskin-custom .subtitle-element:after, .colorskin-custom .max-counter.t-counter:hover i.icon-counter, .colorskin-custom .buy-process-wrap:before, .colorskin-custom .buy-process-item .icon-wrapper:before , .colorskin-custom .buy-process-item i, .colorskin-custom .event-grid .event-detail, .colorskin-custom .teaser-box2 .teaser-title, .colorskin-custom .teaser-box3 .teaser-subtitle, .colorskin-custom .teaser-box4 .teaser-title, .colorskin-custom teaser-box4 .teaser-subtitle, .colorskin-custom #tribe-events-content-wrapper #tribe-bar-form .tribe-events-button, .colorskin-custom .modal-title, .colorskin-custom .vc_tta-tabs.vc_tta-style-modern.vc_tta-shape-round .vc_tta-tab.vc_active > a, .colorskin-custom .blox .widget_search input[type=submit]#searchsubmit.btn, .colorskin-custom .max-hero .widget_search input[type=submit]#searchsubmit.btn , .colorskin-custom .w-login #user-logged .logged-links, .colorskin-custom .icon-box3:hover, .colorskin-custom .blox.dark .icon-box3:hover, .colorskin-custom #header.w-header-type-11 .logo-wrap, .colorskin-custom .components .woo-cart-header .header-cart span, .colorskin-custom #menu-icon:hover, .colorskin-custom #menu-icon.active, .colorskin-custom .transparent-header-w.t-dark-w .top-bar .socialfollow a:hover, .colorskin-custom #scroll-top a:hover, .colorskin-custom .wpcf7 .wpcf7-form input[type="submit"], .colorskin-custom .wpcf7 .wpcf7-form input[type="reset"], .colorskin-custom .wpcf7 .wpcf7-form input[type="button"], .colorskin-custom .tagcloud a:hover, .colorskin-custom #footer.litex .tagcloud a:hover, .colorskin-custom single .woo-template span.onsale, .colorskin-custom .woocommerce ul.products li.product .onsale, .colorskin-custom woocommerce .button, .colorskin-custom widget_shopping_cart_content p.buttons a.button, .colorskin-custom single .woo-template span.onsale, .colorskin-custom .woocommerce ul.products li.product .onsale, .colorskin-custom .woocommerce .button, .colorskin-custom .widget_shopping_cart_content p.buttons a.button, .colorskin-custom #header.sm-rgt-mn #menu-icon span, .colorskin-custom .icon-box26 h4:before, .colorskin-custom .wpcr3_button_1.wpcr3_submit_btn, .colorskin-custom .wpcr3_button_1.wpcr3_cancel_btn:hover, .colorskin-custom #awe-plugin-booking .apb-layout.apb-sidebar-left .apb-widget-area .apb-check-avb-form .awebooking-wrapper .apb-btn.check-avb-js, .colorskin-custom .icon-box27:hover, .w-login #user-logged.colorskin-custom .logged-links, #w-login.colorskin-custom h3, #w-login.colorskin-custom #user-login input[type="submit"], .colorskin-custom .apb-step ul > li.active > span, .colorskin-custom .apb-step ul > li.step-complete > span, .colorskin-custom .apb-calendar .ui-datepicker-inline td a:hover, .colorskin-custom .apb-calendar .ui-datepicker-inline td a:focus, .colorskin-custom .apb-calendar .ui-datepicker-inline td.apb-highlight a, .colorskin-custom #awe-plugin-booking .apb-container.apb-check-availability .apb-layout .apb-content-area .apb-room_item .apb-action-wrapper a
  { background-color: <?php echo esc_attr( $color ); ?>}

  /* == BorderColors
  ------------------ */
  #wrap.colorskin-custom .theme-skin.bordered-bot,#wrap.colorskin-custom .wp-pagenavi a:hover, #wrap.colorskin-cstom .vc_tta-accordion.vc_tta-style-classic.vc_tta-shape-square .vc_active .vc_tta-panel-heading .vc_tta-controls-icon::before, .colorskin-custom .commentlist li .comment-text .reply a:hover, .colorskin-custom .food-menu-w4:hover img, .colorskin-custom .icon-box19 a.magicmore:hover, .colorskin-custom #header.box-menu .nav-wrap2 #nav > li:hover, .colorskin-custom .toggle-top-area .widget .instagram-feed a img:hover, .colorskin-custom #footer .widget .instagram-feed a img:hover, .colorskin-custom .max-counter.t-counter:hover i.icon-counter, .colorskin-custom .max-counter.t-counter:hover .max-count:after, .colorskin-custom .w-pricing-table.pt-type2:hover > span, .colorskin-custom .w-pricing-table.pt-type2.featured .pt-footer a, .colorskin-custom #w-login form input, .colorskin-custom .icon-box8:hover i, .colorskin-custom .icon-box11:hover i, .colorskin-custom .icon-box21:hover i, .colorskin-custom .tline-row-l, .colorskin-custom .tline-row-r, .colorskin-custom .max-title h1:after, .colorskin-custom .max-title h2:after, .colorskin-custom .max-title h3:after, .colorskin-custom .max-title h4:after, .colorskin-custom .max-title h5:after, .colorskin-custom .max-title h6:after, .colorskin-custom .max-title2 h1:before, .colorskin-custom .max-title2 h2:before, .colorskin-custom .max-title2 h3:before, .colorskin-custom .max-title2 h4:before, .colorskin-custom .max-title2 h5:before, .colorskin-custom .max-title2 h6:before, .colorskin-custom .max-title3 h1:before, .colorskin-custom .max-title3 h2:before, .colorskin-custom .max-title3 h3:before, .colorskin-custom .max-title3 h4:before, .colorskin-custom .max-title3 h5:before, .colorskin-custom .max-title3 h6:before, .colorskin-custom .subtitle-element h1:after, .colorskin-custom .subtitle-element h2:after, .colorskin-custom .subtitle-element h3:after, .colorskin-custom .subtitle-element h4:after, .colorskin-custom .subtitle-element h5:after, .colorskin-custom .subtitle-element h6:after, .colorskin-custom .subtitle-element2 h1:before, .colorskin-custom .subtitle-element2 h2:before, .colorskin-custom .subtitle-element2 h3:before, .colorskin-custom .subtitle-element2 h4:before, .colorskin-custom .subtitle-element2 h5:before, .colorskin-custom .subtitle-element2 h6:before, .colorskin-custom .subtitle-four:after, .colorskin-custom .our-team3:hover figure img, .colorskin-custom .our-team4:hover, .colorskin-custom .testimonials-slider-w.flexslider .flex-direction-nav a, .colorskin-custom .pricing-plan1 .ppfooter .readmore, .colorskin-custom .pricing-plan2 .ppfooter .readmore, .colorskin-custom h6.h-sub-content, .colorskin-custom .w-pricing-table.pt-type2.featured > span, .colorskin-custom .w-pricing-table.pt-type3 .pt-footer a, .colorskin-custom .w-pricing-table.pt-type3.featured .pt-footer a, .colorskin-custom .w-pricing-table.pt-type5 .pt-header h4:after, .colorskin-custom .latestposts-eleven .latest-b11, .colorskin-custom .w-login #user-logged .author-avatar img, .colorskin-custom .wrap-room-grid .room-grid-item.rg-1 .entry-roomgrid-content .readmore, .colorskin-custom .fm-w2-item.featured-w2, .colorskin-custom .icon-box16 a.magicmore, .colorskin-custom .icon-box25, .colorskin-custom #header.box-menu .nav-wrap2 #nav > li > ul, .colorskin-custom .header-type-12 .nav-wrap2 #nav > li.current > a, .colorskin-custom .header-type-12 .nav-wrap2 #nav > li:hover > a, .colorskin-custom wpcr3_button_1.wpcr3_cancel_btn, .woocommerce-message, .colorskin-custom .button.pink.bordered-bot, .colorskin-custom .wpcr3_button_1.wpcr3_cancel_btn, .w-login #user-logged.colorskin-custom .author-avatar img, #w-login.colorskin-custom #user-login input, .colorskin-custom #header.box-menu .nav-wrap2 #nav > li.current, .colorskin-custom .teaser-box5:hover:before, .colorskin-custom .apb-calendar .ui-datepicker .ui-datepicker-next:hover
  { border-color: <?php echo esc_attr( $color ); ?>}

  /* == svg icon
  ------------------ */
  .colorskin-custom #wpc-weather .now .time_symbol.climacon svg
  { fill: <?php echo esc_attr( $color ); ?>}

	/* == border topcolor
	-------------------- */
	#wrap.colorskin-custom .whmpress_pricing_table.one.featured .pricing_table_price:after, #wrap.colorskin-custom .latestposts-eleven .latest-b11, #wrap.colorskin-custom .w-pricing-table.pt-type5 .pt-header h4:after, #wrap.colorskin-custom #bridge .navbar .nav li.dropdown .dropdown-toggle .caret, #wrap.colorskin-custom #bridge .navbar .nav li.dropdown.open .caret, .colorskin-custom .w-pricing-table.pt-type1.featured .plan-price:after, .colorskin-custom #header.header-type-12 #lang_sel:hover ul li > a.lang_sel_sel:after
	{ border-top-color: <?php echo esc_attr( $color ); ?>;}

	/* == border bottom
	-------------------- */
	#wrap.colorskin-custom .max-title2 h1:before, #wrap.colorskin-custom .max-title2 h2:before, #wrap.colorskin-custom .max-title2 h3:before, #wrap.colorskin-custom .max-title2 h4:before, #wrap.colorskin-custom .max-title2 h5:before, #wrap.colorskin-custom .max-title2 h6:before, #wrap.colorskin-custom .subtitle-element2 h4:before, #wrap.colorskin-custom #bridge .navbar .nav > li > a:not(#Menu-Account):after #wrap.colorskin-custom #bridge .navbar .nav li.dropdown .dropdown-toggle .caret, #wrap.colorskin-custom #bridge .navbar .nav li.dropdown.open .caret
	{ border-bottom-color: <?php echo esc_attr( $color ); ?>;}

  /* == Important
  ------------------------------- */

  /* == color
  -------------------- */
	#wrap.colorskin-custom .icon-box14 a.magicmore:hover, #wrap.colorskin-custom .internalpadding form input[type="submit"], #wrap.colorskin-custom #bridge .navbar .nav > li > a:hover, #wrap.colorskin-custom #slide-6-layer-35, #wrap.colorskin-custom .transparent-header-w.t-dark-w, #wrap.colorskin-custom .top-bar .top-links a:hover, #wrap.colorskin-custom .transparent-header-w #header.horizontal-w #nav > li:hover > a, #wrap.colorskin-custom #nav li.current > a, #wrap.colorskin-custom #nav ul li:hover > a, #wrap.colorskin-custom .transparent-header-w.t-dark-w, #wrap.colorskin-custom #header.horizontal-w #nav > li:hover > a, #wrap.colorskin-custom .icon-box3:hover a.magicmore, .colorskin-custom .colorf .spl, .colorskin-custom .our-team4 .social-team a i:before, .colorskin-custom article.title-plus-text h2.part-2, .colorskin-custom .tp-caption.colorf, .colorskin-custom .icon-box7 i
	{ color: <?php echo esc_attr( $color ); ?> !important;}

	/* == Background color
	-------------------- */
	#wrap.colorskin-custom .w-pricing-table.pt-type6 .pt-header, #wrap.colorskin-custom [data-alias="Host-slider"] #slide-5-layer-5, #wrap.colorskin-custom [data-alias="Host-slider"] #slide-4-layer-6, #wrap.colorskin-custom [data-alias="Host-slider"] #slide-6-layer-20, #wrap.colorskin-custom [data-alias="Host-slider"] #slide-6-layer-5, #wrap.colorskin-custom [data-alias="Host-slider"] #slide-6-layer-35:hover, #wrap.colorskin-custom .icon-box14 a.magicmore:hover:before, #wrap.colorskin-custom .Button-Style
	{ background-color: <?php echo esc_attr( $color ); ?> !important;}

	/* == border color
	-------------------- */
	#wrap.colorskin-custom .w-pricing-table.pt-type6, #wrap.colorskin-custom #slide-6-layer-35, #wrap.colorskin-custom .w-pricing-table.pt-type6:nth-of-type(4n+4),#wrap.colorskin-custom .icon-box14 a.magicmore:hover:before,#wrap.colorskin-custom .esg-filterbutton.selected
	{ border-color: <?php echo esc_attr( $color ); ?> !important;}


	/* == Woocommerce Specifics
	--------------------------- */
	.colorskin-custom .woocommerce div.product .woocommerce-tabs ul.tabs li.active
	{ border-top-color: <?php echo esc_attr( $color ); ?> !important;}

  /* ==  Slider button hover color
  --------------------------- */
  #wrap.colorskin-custom .tp-caption.Button-Style:hover, #wrap.colorskin-custom .Button-Style:hover { background: rgba(28,28,28,1.00) !important;}

<?php }


/*
 * Custom CSS
*/
$thm_options['hotella_webnus_custom_css'] = ( ! empty( $thm_options['hotella_webnus_custom_css'] ) ) ? $thm_options['hotella_webnus_custom_css'] : '';
echo strip_tags($thm_options['hotella_webnus_custom_css']);

$out = $GLOBALS['hotella_webnus_dyncss'] = '';
$out = ob_get_contents();
$out = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $out);
$GLOBALS['hotella_webnus_dyncss'] = str_replace(array("\r\n", "\r", "\n", "\t", '    '), '', $out);
ob_end_clean();

function hotella_webnus_dyncss_output() {
	$out = $GLOBALS['hotella_webnus_dyncss'];
	return $out;
}