<?php
$output = $title = $interval = $el_class ='';
extract( shortcode_atts( array(
	'title' => '',
	'interval' => 0,
	'el_class' => '',
	'tabs_type' => '',
), $atts ) );


wp_enqueue_script( 'jquery-ui-tabs' );

$el_class = $this->getExtraClass( $el_class );

$element = 'wpb_tabs';
if ( 'vc_tour' == $this->shortcode ) $element = 'wpb_tour';

// Extract tab titles
preg_match_all( '/vc_tab([^\]]+)/i', $content, $matches, PREG_OFFSET_CAPTURE );
$tab_titles = $icon_name = $icon_color = array();

/**
 * vc_tabs
 *
 */
if(isset( $matches[1] )) {
		$tab_titles = $matches[1];		
}		
$tabs_nav = '';
$tabs_nav .= '<ul class="wpb_tabs_nav ui-tabs-nav vc_clearfix">';
foreach ( $tab_titles as $tab ) {
	$tab_atts = shortcode_parse_atts($tab[0]);
	if(isset( $matches[1] )) {
		$icon_style = (isset( $tab_atts['icon_color'] ) ? ' style="color:'.$tab_atts['icon_color'].'"':'');
		$tabs_nav .= '<li><a href="#tab-' . ( isset( $tab_atts['tab_id'] ) ? $tab_atts['tab_id'] : sanitize_title( $tab_atts['title'] ) ) . '">' .( isset( $tab_atts['icon_name'] ) ? '<i class="'.$tab_atts['icon_name'].'"' . $icon_style . '></i>' : '' ) . ( isset( $tab_atts['title'] ) ? $tab_atts['title'] : '') . '</a></li>';
	}
}
$tabs_nav .= '</ul>' . "\n";

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, trim( $element . ' wpb_content_element ' . $el_class ), $this->settings['base'], $atts );

$output .= "\n\t" . '<div class="' . $css_class . '" data-interval="' . $interval . '">';
$output .= "\n\t\t" . '<div class="wpb_wrapper webnus-tabs' . $tabs_type . ' wpb_tour_tabs_wrapper ui-tabs vc_clearfix">';
$output .= wpb_widget_title( array( 'title' => $title, 'extraclass' => $element . '_heading' ) );
$output .= "\n\t\t\t" . $tabs_nav;
$output .= "\n\t\t\t" . wpb_js_remove_wpautop( $content );
if ( 'vc_tour' == $this->shortcode ) {
	$output .= "\n\t\t\t" . '<div class="wpb_tour_next_prev_nav vc_clearfix"> <span class="wpb_prev_slide"><a href="#prev" title="' . esc_html__( 'Previous tab', 'hotella' ) . '">' . esc_html__( 'Previous tab', 'hotella' ) . '</a></span> <span class="wpb_next_slide"><a href="#next" title="' . esc_html__( 'Next tab', 'hotella' ) . '">' . esc_html__( 'Next tab', 'hotella' ) . '</a></span></div>';
}
$output .= "\n\t\t" . '</div> ' . $this->endBlockComment( '.wpb_wrapper' );
$output .= "\n\t" . '</div> ' . $this->endBlockComment( $element );

echo wpb_js_remove_wpautop($output);