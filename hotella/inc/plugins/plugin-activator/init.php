<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.4.1
 * @author     Thomas Griffin
 * @author     Gary Jones
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/plugins/plugin-activator/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'hotella_webnus_register_required_plugins' );
function hotella_webnus_register_required_plugins() {
	$plugins = array(

		array(
			'name'		=> esc_html__( 'Awebooking', 'hotella' ),
			'slug'		=> 'awebooking',
			'required'	=> true,
		),

		array(
			'name'		=> esc_html__( 'Awebooking form builder', 'hotella' ),
			'slug'		=> 'awebooking-form-builder',
			'source'	=> get_template_directory() . '/inc/plugins/awebooking-form-builder.zip',
			'required'	=> true,
		),
		
		array(
			'name'		=> esc_html__( 'Awebooking simple reservatio', 'hotella' ),
			'slug'		=> 'awebooking-simple-reservation',
			'source'	=> get_template_directory() . '/inc/plugins/awebooking-simple-reservation.zip',
			'required'	=> true,
		),

		array(
			'name'		=> esc_html__( 'Awebooking woocommerce', 'hotella' ),
			'slug'		=> 'awebooking-woocommerce',
			'source'	=> get_template_directory() . '/inc/plugins/awebooking-woocommerce.zip',
			'required'	=> true,
		),

		array(
			'name'		=> esc_html__( 'Awebooking payment', 'hotella' ),
			'slug'		=> 'awebooking-payment',
			'source'	=> get_template_directory() . '/inc/plugins/awebooking-payment.zip',
			'required'	=> true,
		),

		array(
			'name'		=> esc_html__( 'WP Simple Iconfonts', 'hotella' ),
			'slug'		=> 'wp-simple-iconfonts',
			'required'	=> true,
		),

		array(
			'name'		=> esc_html__( 'Visual Composer', 'hotella' ),
			'slug'		=> 'js_composer',
			'source'	=> get_template_directory() . '/inc/plugins/js_composer.zip',
			'required'	=> true,
		),

		array(
			'name'		=> esc_html__( 'Webnus Core', 'hotella' ),
			'slug'		=> 'webnus-core',
			'source'	=> get_template_directory() . '/inc/plugins/webnus-core.zip',
			'required'	=> true,
		),

		array(
			'name'					=> 'Webnus Gallery',
			'slug'					=> 'webnus-gallery',
			'required'				=> true,
			'source'				=> get_template_directory() . '/inc/plugins/webnus-gallery.zip',
			'force_activation'		=> false,
			'force_deactivation'	=> false,
		),

		array(
			'name'		=> esc_html__( 'Modern Events Calendar', 'hotella' ),
			'slug'		=> 'modern-events-calendar',
			'source'	=> get_template_directory() . '/inc/plugins/modern-events-calendar.zip',
			'required'	=> false,
		),

		array(
			'name'		=> esc_html__( 'The Grid', 'hotella' ),
			'slug'		=> 'the-grid',
			'source'	=> get_template_directory() . '/inc/plugins/the-grid.zip',
			'required'	=> true,
		),

		array(
			'name'		=> esc_html__( 'Woocommerce', 'hotella' ),
			'slug'		=> 'woocommerce',
			'required'	=> false,
		),

		array(
			'name'		=> esc_html__( 'Contact Form 7', 'hotella' ),
			'slug'		=> 'contact-form-7',
			'required'	=> true,
		),

		array(
			'name'		=> esc_html__( 'WP-PostRatings', 'hotella' ),
			'slug'		=> 'wp-postratings',
			'required'	=> true,
		),

		array(
			'name'		=> esc_html__( 'WP Cloudy', 'hotella' ),
			'slug'		=> 'wp-cloudy',
			'required'	=> true,
		),

		array(
			'name'		=> esc_html__( 'WP Customer Reviews', 'hotella' ),
			'slug'		=> 'wp-customer-reviews',
			'required'	=> true,
		),

		array(
			'name'		=> esc_html__( 'WP PageNavi', 'hotella' ),
			'slug'		=> 'wp-pagenavi',
			'required'	=> true,
		),

		array(
			'name'		=> esc_html__( 'Social Count Plus', 'hotella' ),
			'slug'		=> 'social-count-plus',
			'required'	=> false,
		),

		array(
			'name'		=> esc_html__( 'Slider Revolution', 'hotella' ),
			'slug'		=> 'revslider',
			'source'	=> get_template_directory() . '/inc/plugins/revslider.zip',
			'required'	=> false,
		),

		array(
			'name'		=> esc_html__( 'Envato Wordpress Toolkit', 'hotella' ),
			'slug'		=> 'envato-wordpress-toolkit',
			'source'	=> get_template_directory() . '/inc/plugins/envato-wordpress-toolkit.zip',
			'required'	=> false,
		),

	);


	$config = array(
		'id'			=> 'tgmpa',					// Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path'	=> '',						// Default absolute path to bundled plugins.
		'menu'			=> 'tgmpa-install-plugins',	// Menu slug.
		'parent_slug'	=> 'themes.php',			// Parent menu slug.
		'capability'	=> 'edit_theme_options',	// Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'	=> true,					// Show admin notices or not.
		'dismissable'	=> true,					// If false, a user cannot dismiss the nag message.
		'dismiss_msg'	=> '',						// If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic'	=> true,					// Automatically activate plugins after installation or not.
		'message'		=> '
			<div class="wn-awe-notice" style=" background: #ffb5b5; margin: 20px 0; padding: 20px; ">
				<span style="color: red; font-weight: bold;">IMPORTANT NOT :</span>
				<ol>
					<li>Before installing any plugin, make sure that you install Awebooking first then go back and install rest of plugins.</li>
					<li>Don\'t install all 3 plugins of WooCommerce , Payment Checkout add-on and Awebooking form builder together, just install one of them.</li>
				</ol>		
		</div>', // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );

}
if(function_exists('vc_set_as_theme')) vc_set_as_theme( $disable_updater = true );