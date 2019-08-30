<?php
/**
* Awebooking Integration
*
*
* @author 		Webnus
* @package 	Hotella/inc
* @version     2.0.0
*/

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( ! is_plugin_active( 'awebooking/awebooking.php' ) ) {

    return;

}

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// Hooks

// Please refer to hotella_awebooking_scripts
add_action( 'wp_enqueue_scripts',               'hotella_awebooking_scripts', 9999 );
// Please refer to hotella_single_room_title
add_action( 'awebooking/before_main_content',    'hotella_single_room_title', 1 );

// enqueue style and scripts
if ( ! function_exists( 'hotella_awebooking_scripts' ) ) {

    function hotella_awebooking_scripts() {
 
        if ( is_plugin_active( 'awebooking/awebooking.php' ) ) {

            wp_enqueue_style( 'wn-awebooking', get_template_directory_uri() . '/inc/awebooking/wn-awebooking.css');
            wp_enqueue_script( 'wn-awebooking', get_template_directory_uri() . '/inc/awebooking/wn-awebooking.js', array( 'jquery' ), null, true );

        }
 
    }

}

// Room Page Title
if ( ! function_exists( 'hotella_single_room_title' ) ) {

    function hotella_single_room_title() {

        if ( is_post_type_archive( 'room_type' ) ) {
            echo '
            <section id="headline" class="hotella-awebook">
                <div class="container">
                    <h2> ' . __( 'Rooms', 'hotella' ) . ' </h2>
                </div>
            </section>
            <hr class="vertical-space3">';
        }

        if ( is_single() ) {
            echo '
            <section id="headline" class="hotella-awebook">
                <div class="container">
                    <h2> ' . get_the_title() . ' </h2>
                </div>
            </section>
            <hr class="vertical-space3">';
        }
    }

}

// Incloud icons

if ( is_plugin_active('wp-simple-iconfonts/wp-simple-iconfonts.php') ) {
    require_once get_template_directory() . '/inc/awebooking/iconfonts.php';
}