<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "hotella_webnus_options";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.
	$theme_bg_dir = get_template_directory_uri() . '/images/bgs/bg-pattern/';

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'submenu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Theme Options', 'hotella' ),
        'page_title'           => esc_html__( 'Theme Options', 'hotella' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => 'hotella_webnus_theme_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        'hide_expand'			=> true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */



    /*
     *
     * ---> START SECTIONS
     *
     */

	$ext_path = WP_PLUGIN_DIR . '/webnus-core/theme-options/extensions/';
	Redux::setExtensions( $opt_name, $ext_path );

	/*
     * ---> END ARGUMENTS
     */



    /*
     *
     * ---> START SECTIONS
     *
     */
	$webnus_socials = array (
		'dribbble'		=> 'dribbble',
		'facebook'		=> 'facebook',
		'flickr'		=> 'flickr',
		'foursquare'	=> 'foursquare',
		'github'		=> 'github',
		'google-plus'	=> 'google-plus',
		'instagram'		=> 'instagram',
		'lastfm'		=> 'lastfm',
		'linkedin'		=> 'linkedin',
		'pinterest'		=> 'pinterest',
		'reddit'		=> 'reddit',
		'soundcloud'	=> 'soundcloud',
		'spotify'		=> 'spotify',
		'tumblr'		=> 'tumblr',
		'twitter'		=> 'twitter',
		'vimeo'			=> 'vimeo',
		'vine'			=> 'vine',
		'yelp'			=> 'yelp',
		'yahoo'			=> 'yahoo',
		'youtube'		=> 'youtube',
		'wordpress'		=> 'wordpress',
		'dropbox'		=> 'dropbox',
		'evernote'		=> 'evernote',
		'envato'		=> 'envato',
		'skype'			=> 'skype',
		'feed'			=> 'feed',
	);
	$webnus_languages = array(
	'en'		=> 'en',
	'uk'		=> 'uk',
	'fa'		=> 'fa',
	'ue'		=> 'ue',
	'us'		=> 'us',
	);
	// SSL VALUE
	$backend_protocol = ( is_ssl() ) ? 'https' : 'http' ;

	$fonts = array (
		'Open Sans,arial,helvatica' => 'Open Sans',
		'BebasRegular,arial,helvatica' => 'Bebas Regular',
		'LeagueGothicRegular,arial,helvatica' => 'League Gothic Regular',
		'Arial,helvetica,sans-serif' => 'Arial',
		'helvetica,sans-serif,arial' => 'Helvatica',
		'sans-serif,arial,helvatica' => 'Sans Serif',
		'verdana,san-serif,helvatica' => 'Verdana' ,
		'custom-font-1' => 'hotella_webnus_custom_font1',
		'Custom Font 2' => 'hotella_webnus_custom_font2',
		'Custom Font 3' => 'hotella_webnus_custom_font3',
		'typekit-font-1' => 'hotella_webnus_typekit_font1',
		'typekit-font-2' => 'hotella_webnus_typekit_font2',
		'typekit-font-3' => 'hotella_webnus_typekit_font3',
	);

    $keyses = array(
            'a' => array(
                'href' => array(),
                'title' => array(),
                'target' => array(),
                ),
            'br' => array(),
            'em' => array(),
            'strong' => array(),
            'span' => array(
                'class' => array(),
                ),
            );

    // -> START Layout Fields
    Redux::setSection( $opt_name, array(
        'title'		=> esc_html__( 'Layout', 'hotella' ),
        'desc'		=> esc_html__( 'Here are general settings of the theme:', 'hotella' ),
        'id'		=> 'layout_opts',
        'icon'		=> 'ti-layout',
        'fields'	=> array(
			array(
				'title'		=> esc_html__( 'Responsive', 'hotella' ),
				'subtitle'	=> esc_html__( 'Disable this option in case you don\'t need a responsive website.', 'hotella' ),
				'id'		=> 'hotella_webnus_enable_responsive',
				'type'		=> 'switch',
				'default'	=> '1',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
			),
			array(
				'title'		=> esc_html__( 'CSS Minifyer', 'hotella' ),
				'subtitle'	=> esc_html__( 'Enable this option to minify your styles. It\'ll decrease size of your style-sheet files to speed up your website.', 'hotella' ),
				'id'		=> 'hotella_webnus_css_minifier',
				'type'		=> 'switch',
				'default'	=> '1',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
			),
			array(
				'title'		=> esc_html__( 'Smooth Scroll', 'hotella' ),
				'subtitle'	=> esc_html__( 'By enabling this option, your page will have smooth scrolling effect.','hotella' ),
				'id'		=> 'hotella_webnus_enable_smoothscroll',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
			),
			array(
				'title'		=> esc_html__( 'Layout', 'hotella' ),
				'subtitle'	=> esc_html__( 'Select boxed or wide layout. in Boxed you can set background from "Styling Options > Background".','hotella' ),
				'id'		=> 'hotella_webnus_background_layout',
				'type'		=> 'button_set',
				'default'	=> 'wide',
				'options'	=> array(
					'wide'			 => esc_html__( 'Wide', 'hotella' ),
					'boxed-wrap' => esc_html__( 'Boxed', 'hotella' ),
				),
			),
            array(
                'title'     => esc_html__( 'Wide Container', 'hotella' ),
                'subtitle'  => esc_html__( 'Enable this option to have Wide Container in large screen', 'hotella' ),
                'id'        => 'hotella_webnus_wide_screen',
                'type'      => 'switch',
                'default'   => '1',
                'on'        => esc_html__( 'Enabled', 'hotella' ),
                'off'       => esc_html__( 'Disabled', 'hotella' ),
                'required'  => array( 'hotella_webnus_background_layout', '=', 'wide' ),
            ),
			array(
				'title'		=> esc_html__( 'Container max-width', 'hotella' ),
				'subtitle'	=> esc_html__( 'You can define width of your website. ( Max width: 1170px )','hotella' ),
				'id'		=> 'hotella_webnus_container_width',
				'type'		=> 'text',
			),
        ),
    ) );



	// -> START Header Options Fields
    Redux::setSection( $opt_name, array(
        'title'		=> esc_html__( 'Header Options', 'hotella' ),
        'desc'		=> esc_html__( 'Everything about headers, Logo, Menus and contact information are here:', 'hotella' ),
        'id'		=> 'header_opts',
        'icon'		=> 'ti-layout-tab-window',
	));

	Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Logo', 'hotella' ),
	'id'               => 'header_general_opts',
	'subsection'       => true,
	'fields'			=> array(
			array(
				'title'		=> esc_html__( 'Logo', 'hotella' ),
				'subtitle'	=> esc_html__( 'Choose an image file for your logo. For Retina displays please add Image in large size and set custom width.', 'hotella' ),
				'id'		=> 'hotella_webnus_logo',
				'type'		=> 'media',
				'url'		=> true,
			),
			array(
				'title'		=> esc_html__( 'Logo width', 'hotella' ),
				'id'		=> 'hotella_webnus_logo_width',
				'type'		=> 'text',
				'validate'	=> 'numeric',
			),
			array(
				'title'		=> esc_html__( 'Transparent logo', 'hotella' ),
				'subtitle'	=> esc_html__( 'Choose an image file for your Transparent header logo and Header Type 11', 'hotella' ),
				'id'		=> 'hotella_webnus_transparent_logo',
				'type'		=> 'media',
				'url'		=> true,
			),
			array(
				'title'		=> esc_html__( 'Transparent logo width', 'hotella' ),
				'id'		=> 'hotella_webnus_transparent_logo_width',
				'type'		=> 'text',
				'validate'	=> 'numeric',
			),
			array(
				'title'		=> esc_html__( 'Header padding-top', 'hotella' ),
				'id'		=> 'hotella_webnus_header_padding_top',
				'type'		=> 'text',
			),
			array(
				'title'		=> esc_html__( 'Header padding-bottom', 'hotella' ),
				'id'		=> 'hotella_webnus_header_padding_bottom',
				'type'		=> 'text',
			),
			array(
				'title'		=> esc_html__( 'Text logo', 'hotella' ),
				'id'		=> 'hotella_webnus_slogan',
				'subtitle'	=> esc_html__( 'If you do not set logo, this text appears instead of that.', 'hotella' ),
				'type'		=> 'text',
			),
        ),
    ) );

	Redux::setSection( $opt_name, array(
		'title'            => esc_html__( 'Header Layout', 'hotella' ),
		'id'               => 'header_layout_opts',
		'subsection'       => true,
		'fields'	=> array(
			array(
				'title'		=> esc_html__( 'Select Header Layout', 'hotella' ),
				'id'		=> 'hotella_webnus_header_menu_type',
				'type'		=> 'image_select',
				'options'	=> array(
					'0' => array(
						'alt' => 'Header Type 0',
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu0.png'
					),
					'1' => array(
						'alt' => 'Header Type 1',
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu1.png'
					),
					'2' => array(
						'alt' => 'Header Type 2',
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu2.png'
					),
					'3' => array(
						'alt' => 'Header Type 3',
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu3.png'
					),
					'4' => array(
						'alt' => 'Header Type 4',
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu4.png'
					),
					'5' => array(
						'alt' => 'Header Type 5',
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu5.png'
					),
					'6' => array(
						'alt' => 'Header Type 6',
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu6.png'
					),
					'7' => array(
						'alt' => 'Header Type 7',
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu7.png'
					),
					'8' => array(
						'alt' => 'Header Type 8',
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu8.png'
					),
					'9' => array(
						'alt' => 'Header Type 9',
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu9.png'
					),
					'10' => array(
						'alt' => 'Header Type 10',
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu10.png'
					),
					'11' => array(
						'alt' => 'Header Type 11',
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu11.png'
					),
					'12' => array(
						'alt' => 'Header Type 12',
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu12.png'
					),
					'13' => array(
						'alt' => 'Header Type 13',
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu13.png'
					),
				),
				'default'		=> '1',
				'full_width'	=> true,
			),
			array(
				'id'     => 'opt-notice-warning',
				'type'   => 'info',
				'notice' => false,
				'style'  => 'warning',
				'title'  => esc_html__( 'Set Menus', 'hotella' ),
				'desc'   => esc_html__( 'After saving your setting, please go to "Appearance > Menus" and create menus then set them to Duplex Menu Left and Right.', 'hotella' ),
				'required'  => array( 'hotella_webnus_header_menu_type', '=', '8' ),
			),
			array(
				'title'		=> esc_html__( 'Submenu Style', 'hotella' ),
				'subtitle'	=> esc_html__( 'For Header Menu and Topbar Menu', 'hotella' ),
				'id'		=> 'hotella_webnus_dark_submenu',
				'type'		=> 'button_set',
				'default'	=> '2',
				'options' => array(
					'1' => 'Light',
					'2' => 'Dark',
				 ),
			),
			array(
				'title'		=> esc_html__( 'Header Background Image', 'hotella' ),
				'id'		=> 'hotella_webnus_header_background',
				'type'		=> 'media',
				'url'		=> true,
				'required'  => array( 'hotella_webnus_header_menu_type', '=', '6' ),
			),
			array(
				'id'		=> 'hotella_webnus_header_logo_alignment',
				'type'		=> 'button_set',
				'title'		=> esc_html__('Logo Alignment', 'hotella'),
				'subtitle'	=> esc_html__('This option changes the position of the logo on top of the header.', 'hotella'),
				'options'	=> array(
					'1'		=> 'Left',
					'2'		=> 'Center',
					'3'		=> 'Right'
				 ),
				'default'	=> '2',
				'required'  => array( 'hotella_webnus_header_menu_type', '=', array('2','3','4','5','9','12') ),
			),
			array(
				'id'		=> 'hotella_webnus_header_search_enable',
				'title'		=> esc_html__('Search in Header', 'hotella'),
				'subtitle'	=> esc_html__('This option shows a search icon at the end of the header menu.', 'hotella'),
				'type'		=> 'switch',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
				'default'	=> '1',
				'required'  => array( 'hotella_webnus_header_menu_type', '=', array('1','13') ),
			),

            array(
                'title'     => esc_html__( 'Search Tooltip Text', 'hotella' ),
                'id'        => 'hotella_webnus_header_search_text',
                'type'      => 'text',
                'default'   => 'Search',
                'required'  => array(
                        array('hotella_webnus_header_search_enable', '=', '1'),
                        array('hotella_webnus_header_menu_type', '=', '13'),

                ),
            ),

			array(
				'title'		=> esc_html__( 'Header Login Modal', 'hotella' ),
				'id'		=> 'hotella_webnus_header_login',
				'subtitle'	=> esc_html__('This option shows a login modal button at the end of the header menu.', 'hotella'),
				'type'		=> 'switch',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
				'default'	=> '1',
				'required'  => array( 'hotella_webnus_header_menu_type', '=', array('13') ),
			),

            array(
                'title'     => esc_html__( 'Login Tooltip Text', 'hotella' ),
                'id'        => 'hotella_webnus_header_login_text',
                'type'      => 'text',
                'default'   => 'Login',
                'required'  => array( 'hotella_webnus_header_login', '=', '1' ),
            ),

            array(
                'id'        => 'hotella_webnus_header_booking_enable',
                'title'     => esc_html__('Booking in Header', 'hotella'),
                'subtitle'  => esc_html__('This option shows a booking icon at the end of the header menu.', 'hotella'),
                'type'      => 'switch',
                'on'        => esc_html__( 'Enabled', 'hotella' ),
                'off'       => esc_html__( 'Disabled', 'hotella' ),
                'default'   => '1',
                'required'  => array( 'hotella_webnus_header_menu_type', '=', array('13') ),
            ),

            array(
                'title'     => esc_html__( 'Booking Tooltip Text', 'hotella' ),
                'id'        => 'hotella_webnus_header_booking_text',
                'type'      => 'text',
                'default'   => 'Booking',
                'required'  => array( 'hotella_webnus_header_booking_enable', '=', '1' ),
            ),
			array(
				'id'		=> 'hotella_webnus_header_woocart_enable',
				'title'		=> esc_html__('Wocommerce cart in Header', 'hotella'),
				'subtitle'	=> esc_html__('This option shows a woocommerce cart icon at top of the header menu.', 'hotella'),
				'type'		=> 'switch',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
				'default'	=> '0',
				'required'  => array( 'hotella_webnus_header_menu_type', '=', array('11') ),
			),
			array(
				'id'		=> 'hotella_webnus_header_logo_rightside',
				'title'		=> esc_html__('Header Next Side Space', 'hotella'),
				'type'		=> 'button_set',
				'options'	=> array(
					'0'		=> 'None',
					'1'		=> 'Search Box',
					'2'		=> 'Contact Information',
					'3'		=> 'Header Sidebar'
				 ),
				'default'	=> '2',
				'required'  => array( 'hotella_webnus_header_menu_type', '=', array('2','3','4','5','9','11','12') ),
			),
			array(
				'id'		=> 'hotella_webnus_header_address',
				'title'		=> esc_html__('Header Address', 'hotella'),
				'type'		=> 'textarea',
				'default'	=> '<strong>1234 North Avenue Luke Lane</strong><br>South Bend, IN 360001',
				'allowed_html' => array(
					'a' => array(
						'href' => array(),
						'title' => array()
					),
					'br'	=> array(),
					'em'	=> array(),
					'strong'=> array()
				),
				'required'  => array( 'hotella_webnus_header_logo_rightside', '=', array('2') ),
			),
			array(
				'id'		=> 'hotella_webnus_header_phone',
				'title'		=> esc_html__('Header Phone Number', 'hotella'),
				'type'		=> 'textarea',
				'default'	=> '<strong>987.654.3216</strong><br>987.654.3217',
				'allowed_html' => array(
					'a' => array(
						'href' => array(),
						'title' => array()
					),
					'br' => array(),
					'em' => array(),
					'strong' => array()
				),
				'required'	=> array( 'hotella_webnus_header_logo_rightside', '=', array('2') ),
			),
			array(
				'id'		=> 'hotella_webnus_header_email',
				'title'		=> esc_html__('Header Email Address', 'hotella'),
				'type'		=> 'textarea',
				'default'	=> '<strong>info@easyseo.com</strong><br>support@easyseo.com',
				'allowed_html' => array(
					'a' => array(
						'href' => array(),
						'title' => array()
					),
					'br' => array(),
					'em' => array(),
					'strong' => array()
				),
				'required'	=> array( 'hotella_webnus_header_logo_rightside', '=', array('2') ),
			),
            array(
                'title'     => esc_html__( 'WPML Language Switcher', 'hotella' ),
                'id'        => 'hotella_webnus_wpml_language_switcher',
                'type'      => 'switch',
                'default'   => '2',
                'on'        => esc_html__( 'Enable', 'hotella' ),
                'off'       => esc_html__( 'Disable', 'hotella' ),
                'required'  => array( 'hotella_webnus_header_menu_type', '=', array('12') ),
            ),
			array(
				'title'		=> esc_html__( 'AJAX Live Search', 'hotella' ),
				'id'		=> 'hotella_webnus_enable_livesearch',
				'type'		=> 'switch',
				'default'	=> '1',
				'on'		=> esc_html__( 'Enable', 'hotella' ),
				'off'		=> esc_html__( 'Disable', 'hotella' ),
			),
			array(
				'title'		=> esc_html__( 'Mobile Menu', 'hotella' ),
				'subtitle'	=> 'Choose between two type of menu style for mobile and tablet sizes.',
				'id'		=> 'hotella_webnus_header_menu_icon',
				'type'		=> 'image_select',
				'options'	=> array(
					'sm-rgt-ms'      => array(
						'alt'  => 'Modern',
						'img'  => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu-icon1.png'
					),
					''      => array(
						'alt'  => 'Classic',
						'img'  => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/menu-icon2.png'
					),

				),
				'default'	=> 'sm-rgt-ms',
			),
		),
	));

    Redux::setSection( $opt_name, array(
    'title'            => esc_html__( 'Top Header', 'hotella' ),
    'id'               => 'top_header_opts',
    'subsection'       => true,
    'fields'    => array(
            array(
                'id'        => 'hotella_webnus_top_header',
                'title'     => esc_html__('Top Header', 'hotella'),
                'type'      => 'switch',
                'default'   => '1',
                'on'        => esc_html__( 'Enable', 'hotella' ),
                'off'       => esc_html__( 'Disable', 'hotella' ),
            ),

            array(
                'id'            => 'top_header_elements',
                'type'          => 'sorter',
                'title'         => 'Top Header Elements',
                'desc'          => esc_html__('You can set value of elements in below sections.', 'hotella'),
                'compiler'      => 'true',
                'full_width'    => true,
                'options'       => array(
                    'disabled'  => array(
                        'top_header_menu'   => 'Top Header Menu',
                        'weather'           => 'Weather',
                        'map'               => 'Map',
                        'custom_link'       => 'Custom Link',
                    ),
                    'left'      => array(),
                    'right'     => array(),
                ),
                'required'  => array( 'hotella_webnus_top_header', '=', array('1') ),
            ),

            array(
                'title'     => esc_html__( 'Weather Post ID', 'hotella' ),
                'type'      => 'text',
                'id'        => 'hotella_weather_id',
                'default'   => '17',
                'required'  => array( 'hotella_webnus_top_header', '=', array('1') ),
            ),

            array(
                'title'     => esc_html__( 'Custom Link Text', 'hotella' ),
                'type'      => 'text',
                'id'        => 'hotella_webnus_top_header_ctext',
                'default'   => 'Custom Text',
                'required'  => array( 'hotella_webnus_top_header', '=', array('1') ),
            ),

            array(
                'title'     => esc_html__( 'Custom Link Address', 'hotella' ),
                'type'      => 'text',
                'id'        => 'hotella_webnus_top_header_clink',
                'default'   => 'http://',
                'required'  => array( 'hotella_webnus_top_header', '=', array('1') ),
            ),

            array(
                'title'     => esc_html__( 'Map Address', 'hotella' ),
                'type'      => 'text',
                'id'        => 'hotella_webnus_top_header_map_address',
                'default'   => 'Space+Needle,Seattle+WA',
                'required'  => array( 'hotella_webnus_top_header', '=', array('1') ),
            ),

        ),
    ) );

	Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Sticky Header', 'hotella' ),
	'id'               => 'header_menu_opts',
	'subsection'       => true,
	'fields'	=> array(
			array(
				'title'		=> esc_html__( 'Sticky Header', 'hotella' ),
				'subtitle'	=> esc_html__( 'Sticky header is a fixed header when scrolling the page.By enabling this option when you are scrolling, the header menu will scroll too.', 'hotella' ),
				'id'		=> 'hotella_webnus_header_sticky',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
			),
			array(
				'title'		=> esc_html__( 'Sticky Header In Phone', 'hotella' ),
				'id'		=> 'hotella_webnus_header_sticky_phone',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
			),
			array(
				'title'		=> esc_html__( 'Sticky header logo', 'hotella' ),
				'subtitle'	=> esc_html__( 'Use this option to upload a logo which will be used when header is on sticky state.', 'hotella' ),
				'id'		=> 'hotella_webnus_sticky_logo',
				'type'		=> 'media',
				'url'		=> true,
				'required'  => array( 'hotella_webnus_header_sticky', '=', '1' ),
			),
			array(
				'title'		=> esc_html__( 'Sticky header logo width', 'hotella' ),
				'id'		=> 'hotella_webnus_sticky_logo_width',
				'type'		=> 'text',
				'validate'	=> 'numeric',
				'required'  => array( 'hotella_webnus_header_sticky', '=', '1' ),
			),

			array(
				'title'		=> esc_html__( 'Scrolls value to sticky the header', 'hotella' ),
				'subtitle'	=> esc_html__( 'Fill your desired amount which by scrolling that amount, sticky menu will appear.', 'hotella' ),
				'type'		=> 'text',
				'id'		=> 'hotella_webnus_header_sticky_scrolls',
				'validate'	=> 'numeric',
				'default'	=> '380',
				'required'  => array( 'hotella_webnus_header_sticky', '=', '1' ),
			),
		),
    ) );


	Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Topbar', 'hotella' ),
	'id'               => 'topbar_opts',
	'subsection'       => true,
	'fields'	=> array(
			array(
				'title'		=> esc_html__( 'TopBar', 'hotella' ),
				'subtitle'	=> esc_html__( 'Top bar is the topmost location in your website that you can place special elements in.', 'hotella' ),
				'id'		=> 'hotella_webnus_header_topbar_enable',
				'type'		=> 'switch',
				'default'	=> '1',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
			),

			array(
				'title'		=> esc_html__( 'Background Color', 'hotella' ),
				'subtitle'	=> esc_html__( 'This option changes the background color of Topbar.', 'hotella' ),
				'id'		=> 'hotella_webnus_topbar_background_color',
				'type'		=> 'color',
				'output'	=> array(
					'background-color' => '#wrap .top-bar',
				),
			),

            array(
                'title'     => esc_html__( 'Topbar Backgruond Color Style', 'hotella'),
                'id'        => 'hotella_webnus_topbar_bgcolor_style',
                'type'      => 'button_set',
                'default'   => '1',
                'options'   => array(
                    '1' => esc_html__( 'Dark', 'hotella' ),
                    '2' => esc_html__( 'Light', 'hotella' ),
                ),
            ),

			array(
				'title'		=> esc_html__( 'Fixed TopBar', 'hotella' ),
				'id'		=> 'hotella_webnus_topbar_fixed',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
			),

            array(
                'id'            => 'topbar_elements',
                'type'          => 'sorter',
                'title'         => 'Topbar Elements',
                'desc'          => esc_html__('You can set value of elements in below sections.', 'hotella'),
                'compiler'      => 'true',
                'full_width'    => true,
                'options'       => array(
                    'disabled' => array(
                        'search'    => 'Search',
                        'social'    => 'Social Icons',
                        'login'     => 'Login Modal',
                        'contact'   => 'Contact Modal',
                        'address'   => 'Contact Addresse',
                        'email'     => 'Contact Email Address',
                        'text'      => 'Custom Text',
                        'phone'     => 'Contact Phone Number',
                        'menu'      => 'Topbar Menu',
                        'language'  => 'Language Bar',
                        'button'    => 'Custom Button',
                    ),
                    'left'  => array(),
                    'right'  => array(),
                ),
            ),

			array(
				'title'		=> esc_html__( 'Login Modal Link Text', 'hotella' ),
				'id'		=> 'hotella_webnus_topbar_login_text',
				'type'		=> 'text',
				'default'	=> 'Login / Register',
			),

			array(
				'title'		=> esc_html__( 'Select Modal Contact Form', 'hotella' ),
				'id'		=> 'hotella_webnus_topbar_form',
				'type'		=> 'select',
				'data'      => 'posts',
                'args'      => array( 'post_type' => 'wpcf7_contact_form', ),
			),

			array(
				'title'		=> esc_html__( 'Contact Addresse', 'hotella' ),
				'type'		=> 'text',
				'id'		=> 'hotella_webnus_topbar_address',
				'default'	=> '',
			),

			array(
				'title'		=> esc_html__( 'Contact Phone Number', 'hotella' ),
				'type'		=> 'text',
				'id'		=> 'hotella_webnus_topbar_phone',
				'default'	=> '+1 234 56789',
			),

			array(
				'title'		=> esc_html__( 'Contact Email Address', 'hotella' ),
				'type'		=> 'text',
				'id'		=> 'hotella_webnus_topbar_email',
				'default'	=> 'info@site.com',
			),

			array(
				'title'		=> esc_html__( 'Custom Button Text', 'hotella' ),
				'id'		=> 'hotella_webnus_topbar_button_text',
				'type'		=> 'text',
			),

			array(
				'title'		=> esc_html__( 'Custom Button Link URL', 'hotella' ),
				'id'		=> 'hotella_webnus_topbar_button_link',
				'type'		=> 'text',
			),

			array(
				'title'		=> esc_html__( 'Your Custom Text', 'hotella' ),
				'subtitle'	=> esc_html__( 'Insert any text', 'hotella' ),
				'id'		=> 'hotella_webnus_topbar_text',
				'type'		=> 'text',
			),
		),
    ) );

	Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Toggle Top Area', 'hotella' ),
	'id'               => 'toggle_top_area_opts',
	'subsection'       => true,
	'fields'	=> array(
			array(
				'title'		=> esc_html__( 'Toggle Top Area', 'hotella' ),
				'subtitle'	=> esc_html__( 'It loads a small plus icon to the top right corner of your website.By clicking on it, it opens and shows your content that you set before.','hotella' ),
				'id'		=> 'hotella_webnus_toggle_toparea_enable',
				'type'		=> 'switch',
				'default'	=> 0,
				'on'		=> esc_html__( 'Show', 'hotella' ),
				'off'		=> esc_html__( 'Hide', 'hotella' ),
			),
		),
    ) );

	Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Admin Login Logo', 'hotella' ),
	'id'               => 'admin_logo_opts',
	'subsection'       => true,
	'fields'	=> array(
			array(
				'title'		=> esc_html__( 'Admin Login Logo', 'hotella' ),
				'subtitle'	=> esc_html__( 'It belongs to the back-end of your website to log-in to admin panel.', 'hotella' ),
				'id'		=> 'hotella_webnus_admin_login_logo',
				'type'		=> 'media',
				'url'		=> true,
			),
		),
    ) );

	Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'News Ticker', 'hotella' ),
	'id'               => 'header_newsticker_opts',
	'subsection'       => true,
	'fields'	=> array(
			array(
				'title'		=> esc_html__( 'News Ticker', 'hotella' ),
				'id'		=> 'hotella_webnus_news_ticker',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
			),

			array(
				'title'		=> esc_html__( 'News Ticker Title', 'hotella' ),
				'type'		=> 'text',
				'id'		=> 'hotella_webnus_nt_title',
				'default'	=> 'Latest Posts',
				'required'  => array( 'hotella_webnus_news_ticker', '=', '1' ),
			),

			array(
				'title'		=> esc_html__( 'Show in', 'hotella' ),
				'id'		=> 'hotella_webnus_nt_show',
				'type'		=> 'button_set',
				'required'  => array( 'hotella_webnus_news_ticker', '=', '1' ),
				'type'		=> 'button_set',
				'default'	=> '0',
				'options' => array(
					'0' => 'Home',
					'1' => 'All Pages',
				 ),
			),

			array(
				'title'		=> esc_html__( 'Category', 'hotella' ),
				'subtitle'	=> esc_html__( 'Select specific category, leave blank to show all categories.', 'hotella' ),
				'id'		=> 'hotella_webnus_nt_cat',
				'type'		=> 'select',
				'data'		=> 'category',
				'required'  => array( 'hotella_webnus_news_ticker', '=', '1' ),
			),

			array(
				'title'		=> esc_html__( 'Post Count', 'hotella' ),
				'type'		=> 'text',
				'id'		=> 'hotella_webnus_nt_count',
				'validate' => 'numeric',
				'default'	=> '5',
				'required'  => array( 'hotella_webnus_news_ticker', '=', '1' ),
			),

			array(
				'title'		=> esc_html__( 'Animation Type', 'hotella' ),
				'id'		=> 'hotella_webnus_nt_effect',
				'type'		=> 'button_set',
				'default'	=> '1',
				'options' => array(
					'0' => 'Fade',
					'1' => 'Reveal',
				 ),
				'required'  => array( 'hotella_webnus_news_ticker', '=', '1' ),
			),

			array(
				'title'		=> esc_html__( 'Animation Speed	', 'hotella' ),
				'type'		=> 'text',
				'id'		=> 'hotella_webnus_nt_speed',
				'validate' => 'numeric',
				'default'	=> '1',
				'required'  => array( 'hotella_webnus_news_ticker', '=', '1' ),
			),

			array(
				'title'		=> esc_html__( 'Pause On Items', 'hotella' ),
				'type'		=> 'text',
				'id'		=> 'hotella_webnus_nt_pause',
				'validate' => 'numeric',
				'default'	=> '2',
				'required'  => array( 'hotella_webnus_news_ticker', '=', '1' ),
			),

		),
    ) );

	// -> START Footer Options Fields
	Redux::setSection( $opt_name, array(
		'title'		=> esc_html__( 'Footer Options', 'hotella' ),
		'id'		=> 'start_footer_opts',
		'icon'		=> 'ti-layout-accordion-merged',
	) );

	Redux::setSection( $opt_name, array(
		'title'		=> esc_html__( 'Footer Top Area', 'hotella' ),
		'id'		=> 'footer_top_area_opts',
		'subsection'=> true,
		'fields'	=> array(
			array(
				'title'		=> esc_html__('Footer Social Bar', 'hotella'),
				'subtitle'	=> esc_html__('Set in Social Networks Tab.', 'hotella'),
				'id'		=> 'hotella_webnus_footer_social_bar',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Show', 'hotella' ),
				'off'		=> esc_html__( 'Hide', 'hotella' ),
			),
			array(
				'title'		=> esc_html__('Footer Instagram Bar', 'hotella'),
				'id'		=> 'hotella_webnus_footer_instagram_bar',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Show', 'hotella' ),
				'off'		=> esc_html__( 'Hide', 'hotella' ),
			),
			array(
				'title'		=> esc_html__('Instagram Username', 'hotella'),
				'id'		=> 'hotella_webnus_footer_instagram_username',
				'type'		=> 'text',
				'required'  => array( 'hotella_webnus_footer_instagram_bar', '=', '1' ),
			),
			array(
				'title'		=> esc_html__('Instagram Access Token', 'hotella'),
				'subtitle'	=> wp_kses( __('Get the this information <a target="_blank" href="http://www.pinceladasdaweb.com.br/instagram/access-token/">here</a>.', 'hotella'), $keyses ),
				'id'		=> 'hotella_webnus_footer_instagram_access',
				'type'		=> 'text',
				'required'  => array( 'hotella_webnus_footer_instagram_bar', '=', '1' ),
			),
			array(
				'title'		=> esc_html__('Footer Subscribe Bar', 'hotella'),
				'id'		=> 'hotella_webnus_footer_subscribe_bar',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Show', 'hotella' ),
				'off'		=> esc_html__( 'Hide', 'hotella' ),
			),
			array(
				'title'		=> esc_html__('Footer Subscribe Text', 'hotella'),
				'id'		=> 'hotella_webnus_footer_subscribe_text',
				'type'		=> 'text',
				'required'  => array( 'hotella_webnus_footer_subscribe_bar', '=', '1' ),
			),
			array(
				'title'		=> esc_html__('Subscribe Service', 'hotella'),
				'id'		=> 'hotella_webnus_footer_subscribe_type',
				'type'		=> 'button_set',
				'default'	=> 'FeedBurner',
				'options'	=> array(
					'FeedBurner'	=> esc_html__( 'FeedBurner', 'hotella' ),
					'MailChimp'		=> esc_html__( 'MailChimp', 'hotella' ),
				),
				'required'  => array( 'hotella_webnus_footer_subscribe_bar', '=', '1' ),
			),
			array(
				'title'		=> esc_html__('Feedburner ID', 'hotella'),
				'id'		=> 'hotella_webnus_footer_feedburner_id',
				'type'		=> 'text',
				'required'  => array( 'hotella_webnus_footer_subscribe_type', '=', 'FeedBurner' ),
			),
			array(
				'title'		=> esc_html__('Mailchimp URL', 'hotella'),
				'sub_desc'	=> esc_html__('Mailchimp form action URL', 'hotella'),
				'id'		=> 'hotella_webnus_footer_mailchimp_url',
				'type'		=> 'text',
				'required'  => array( 'hotella_webnus_footer_subscribe_type', '=', 'MailChimp' ),
			),
		),
	) );

	Redux::setSection( $opt_name, array(
		'title'		=> esc_html__( 'Footer', 'hotella' ),
		'id'		=> 'footer_opts',
		'subsection'=> true,
		'fields'	=> array(
			array(
				'title'		=> esc_html__( 'Footer Columns', 'hotella' ),
				'subtitle'	=> wp_kses( __( 'Choose among these structures (1column, 2column, 3column and 4column) for your footer section.<br>To filling these column sections you should go to appearance > widget. And put every widget that you want in these sections.','hotella'), array( 'br' => array() ) ),
				'id'		=> 'hotella_webnus_footer_columns',
				'type'		=> 'image_select',
				'full_width'=> true,
				'default'	=> '1',
				'options'  => array(
					'1' => array(
						'alt' => esc_html__( 'Footer Layout 1', 'hotella' ),
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/footer1.png'
					),
					'2' => array(
						'alt' => esc_html__( 'Footer Layout 2', 'hotella' ),
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/footer2.png'
					),
					'3' => array(
						'alt' => esc_html__( 'Footer Layout 3', 'hotella' ),
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/footer3.png'
					),
					'4' => array(
						'alt' => esc_html__( 'Footer Layout 4', 'hotella' ),
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/footer4.png'
					),
					'5' => array(
						'alt' => esc_html__( 'Footer Layout 5', 'hotella' ),
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/footer5.png'
					),
					'6' => array(
						'alt' => esc_html__( 'Footer Layout 6', 'hotella' ),
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/footer6.png'
					),
				),
			),
			array(
				'title'		=> esc_html__( 'Footer background color', 'hotella' ),
				'subtitle'	=> esc_html__( 'Pick a background color', 'hotella' ),
				'id'		=> 'hotella_webnus_footer_background_color',
				'type'		=> 'color',
				'output'	=> array(
					'background-color' => '#wrap #footer',
				),
			),
			array(
				'title'		=> esc_html__( 'Footer Backgruond Color Style', 'hotella'),
				'id'		=> 'hotella_webnus_footer_color',
				'type'		=> 'button_set',
				'default'	=> '1',
				'options'	=> array(
					'1' => esc_html__( 'Dark', 'hotella' ),
					'2' => esc_html__( 'Light', 'hotella' ),
				),
			),
		),
	) );

	Redux::setSection( $opt_name, array(
		'title'		=> esc_html__( 'Footer Bottom Area', 'hotella' ),
		'id'		=> 'footer_bottom_area_opts',
		'subsection'=> true,
		'fields'	=> array(
			array(
				'title'		=> esc_html__( 'Footer Bottom', 'hotella' ),
				'subtitle'	=> esc_html__( 'This option shows a section below the footer that you can put copyright menu and logo in it.', 'hotella' ),
				'id'		=> 'hotella_webnus_footer_bottom_enable',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Show', 'hotella' ),
				'off'		=> esc_html__( 'Hide', 'hotella' ),
			),
			array(
				'title'		=> esc_html__('Footer bottom background color', 'hotella'),
				'subtitle'	=> esc_html__('Pick a background color', 'hotella'),
				'id'		=> 'hotella_webnus_footer_bottom_background_color',
				'type'		=> 'color',
				'required'  => array( 'hotella_webnus_footer_bottom_enable', '=', '1' ),
				'output'	=> array(
					'background-color' => '#wrap #footer .footbot',
				),
			),
			array(
				'title'		=> esc_html__('Footer Bottom Left', 'hotella'),
				'id'		=> 'hotella_webnus_footer_bottom_left',
				'type'		=> 'button_set',
				'default'	=> '3',
				'options'	=> array(
					'1' => esc_html__( 'Logo', 'hotella' ),
					'2' => esc_html__( 'Menu', 'hotella' ),
					'3' => esc_html__( 'Custom Text', 'hotella' ),
					'4' => esc_html__( 'Social Icons', 'hotella' ),
				),
				'required'  => array( 'hotella_webnus_footer_bottom_enable', '=', '1' ),
			),
			array(
				'title'		=> esc_html__('Footer Bottom Right', 'hotella'),
				'id'		=> 'hotella_webnus_footer_bottom_right',
				'type'		=> 'button_set',
				'default'	=> '1',
				'options'	=> array(
					'1' => esc_html__( 'Logo', 'hotella' ),
					'2' => esc_html__( 'Menu', 'hotella' ),
					'3' => esc_html__( 'Custom Text', 'hotella' ),
					'4' => esc_html__( 'Social Icons', 'hotella' ),
				),
				'required'  => array( 'hotella_webnus_footer_bottom_enable', '=', '1' ),
			),
			array(
				'title'		=> esc_html__('Footer Logo', 'hotella'),
				'subtitle'	=> esc_html__('Please choose an image file for footer logo.', 'hotella'),
				'id'		=> 'hotella_webnus_footer_logo',
				'type'		=> 'media',
				'url'		=> true,
				'required'  => array( 'hotella_webnus_footer_bottom_enable', '=', '1' ),
			),
			array(
				'title'		=> esc_html__('Footer Custom Text', 'hotella'),
				'id'		=> 'hotella_webnus_footer_copyright_left',
				'type'		=> 'text',
				'required'  => array( 'hotella_webnus_footer_bottom_enable', '=', '1' ),
			),
			array(
				'title'		=> esc_html__('Footer Custom Text', 'hotella'),
				'id'		=> 'hotella_webnus_footer_copyright_right',
				'type'		=> 'text',
				'required'  => array( 'hotella_webnus_footer_bottom_enable', '=', '1' ),
			),
		),
	) );

	// -> START Pages Fields
	Redux::setSection( $opt_name, array(
		'title'		=> esc_html__( 'Pages', 'hotella' ),
		'id'		=> 'pages_opts',
		'icon'		=> 'sl-docs',
	) );

	Redux::setSection( $opt_name, array(
		'title'		=> esc_html__( '404 Page', 'hotella' ),
		'id'		=> '404_opts',
		'subsection'=> true,
		'fields'	=> array(
			array(
				'title'		=> esc_html__( 'Text To Display', 'hotella' ),
				'id'		=> 'hotella_webnus_404_text',
				'type'		=> 'ace_editor',
				'theme'		=> 'chrome',
				'mode'		=> 'php',
				'default'	=> '<h3>We\'re sorry, but the page you were looking for doesn\'t exist.</h3>',
				'full_width'=> true,
			),
		),
	) );

	Redux::setSection( $opt_name, array(
		'title'		=> esc_html__( 'Breadcrumbs', 'hotella' ),
		'id'		=> 'breadcrumbs_opts',
		'subsection'=> true,
		'fields'	=> array(
			array(
				'title'		=> esc_html__( 'Breadcrumbs', 'hotella' ),
				'subtitle'	=> esc_html__( 'It allows users to keep track of their locations within pages.','hotella' ),
				'id'		=> 'hotella_webnus_enable_breadcrumbs',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Show', 'hotella' ),
				'off'		=> esc_html__( 'Hide', 'hotella' ),
			),
		),
	) );

	// -> START Blog Options Fields
	Redux::setSection( $opt_name, array(
		'title'		=> esc_html__( 'Blog Options', 'hotella' ),
		'id'		=> 'blog-opts',
		'icon'		=> 'ti-pencil-alt',
	) );

	Redux::setSection( $opt_name, array(
		'title'		=> esc_html__( 'Blog Page', 'hotella' ),
		'id'		=> 'blog-page-opts',
		'subsection'=> true,
		'fields'	=> array(
			array(
				'title'		=> esc_html__( 'BlogTemplate', 'hotella' ),
				'subtitle'	=> esc_html__( 'For styling your blog page you can choose among these template layouts.', 'hotella' ),
				'id'		=> 'hotella_webnus_blog_template',
				'type'		=> 'image_select',
				'full_width'=> true,
				'default'	=> '2',
				'options'	=> array(
					'1' => array(
						'alt' => esc_html__( 'Blog Type 1', 'hotella' ),
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/blog-type1.png'
					),
					'2' => array(
						'alt' => esc_html__( 'Blog Type 2', 'hotella' ),
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/blog-type2.png'
					),
					'3' => array(
						'alt' => esc_html__( 'Blog Type 3', 'hotella' ),
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/blog-type3.png'
					),
					'4' => array(
						'alt' => esc_html__( 'Blog Type 4', 'hotella' ),
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/blog-type4.png'
					),
					'5' => array(
						'alt' => esc_html__( 'Blog Type 5', 'hotella' ),
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/blog-type5.png'
					),
					'6' => array(
						'alt' => esc_html__( 'Blog Type 6', 'hotella' ),
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/blog-type6.png'
					),
					'7' => array(
						'alt' => esc_html__( 'Blog Type 7', 'hotella' ),
						'img' => get_template_directory_uri() . '/inc/theme-options/webnus-options/assets/img/blog-type7.png'
					),
				),
			),
			array(
				'title'		=> esc_html__('Blog Sidebar Position', 'hotella'),
				'id'		=> 'hotella_webnus_blog_sidebar',
				'type'		=> 'button_set',
				'default'	=> 'right',
				'options'	=> array(
					'none'	=> esc_html__( 'None', 'hotella' ),
					'left'	=> esc_html__( 'Left', 'hotella' ),
					'right'	=> esc_html__( 'Right', 'hotella' ),
					'both'	=> esc_html__( 'Both', 'hotella' ),
				),
			),
			array(
				'title'		=> esc_html__('Excerpt Or Full Blog Content', 'hotella'),
				'subtitle'	=> esc_html__('You can show all text of your posts in blog page or a fixed amount of characters to show for each post.','hotella'),
				'id'		=> 'hotella_webnus_blog_excerptfull_enable',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Full', 'hotella' ),
				'off'		=> esc_html__( 'Excerpt', 'hotella' ),
			),
			array(
				'title'		=> esc_html__('Excerpt Length for Large Posts', 'hotella'),
				'subtitle'	=> esc_html__('Type the number of characters you want to show in the blog page for each post.','hotella'),
				'id'		=> 'hotella_webnus_blog_excerpt_large',
				'type'		=> 'slider',
				'default'	=> 93,
				'min'		=> 1,
				'step'		=> 1,
				'max'		=> 400,
				'display_value'	=> 'text',
				'required'  => array( 'hotella_webnus_blog_excerptfull_enable', '=', '0' ),
			),
			array(
				'title'		=> esc_html__('Excerpt Length for List Posts', 'hotella'),
				'subtitle'	=> esc_html__('Type the number of characters you want to show in the blog page for each post.','hotella'),
				'id'		=> 'hotella_webnus_blog_excerpt_list',
				'type'		=> 'slider',
				'default'	=> 17,
				'min'		=> 1,
				'step'		=> 1,
				'max'		=> 400,
				'display_value'	=> 'text',
				'required'  => array( 'hotella_webnus_blog_excerptfull_enable', '=', '0' ),
			),
			array(
				'title'		=> esc_html__('Blog Page Title', 'hotella'),
				'subtitle'	=> esc_html__('By hiding this option, blog Page title will be disappearing.','hotella'),
				'id'		=> 'hotella_webnus_blog_page_title_enable',
				'type'		=> 'switch',
				'default'	=> '1',
				'on'		=> esc_html__( 'Show', 'hotella' ),
				'off'		=> esc_html__( 'Hide', 'hotella' ),
			),
			array(
				'title'		=> esc_html__('Blog Page Title Text', 'hotella'),
				'id'		=> 'hotella_webnus_blog_page_title',
				'type'		=> 'text',
				'default'	=> 'Blog',
				'required'  => array( 'hotella_webnus_blog_page_title_enable', '=', '1' ),
			),
			array(
				'title'		=> esc_html__('Read More Text', 'hotella'),
				'subtitle'	=> esc_html__('You can set another name instead of read more link.','hotella'),
				'id'		=> 'hotella_webnus_blog_readmore_text',
				'type'		=> 'text',
				'default'	=> 'Continue Reading',
			),
			array(
				'title'		=> esc_html__( 'Featured Image on Blog', 'hotella' ),
				'subtitle'	=> esc_html__( 'By disabling this option, all blog feature images will be disappearing.', 'hotella' ),
				'id'		=> 'hotella_webnus_blog_featuredimage_enable',
				'type'		=> 'switch',
				'default'	=> '1',
				'on'		=> esc_html__( 'On', 'hotella' ),
				'off'		=> esc_html__( 'Off', 'hotella' ),
			),
			array(
				'title'		=> esc_html__('Default Blank Featured Image', 'hotella'),
				'id'		=> 'hotella_webnus_no_image',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'On', 'hotella' ),
				'off'		=> esc_html__( 'Off', 'hotella' ),
			),
			array(
				'title'		=> esc_html__('Custom Default Blank Featured Image', 'hotella'),
				'id'		=> 'hotella_webnus_no_image_src',
				'type'		=> 'media',
				'url'		=> true,
				'required'  => array( 'hotella_webnus_no_image', '=', '1' ),
			),
			array(
				'title'		=> esc_html__( 'Post Title on Blog', 'hotella' ),
				'subtitle'	=> esc_html__( 'By disabling this option, all post title images will be disappearing.','hotella' ),
				'id'		=> 'hotella_webnus_blog_posttitle_enable',
				'type'		=> 'switch',
				'default'	=> '1',
				'on'		=> esc_html__( 'On', 'hotella' ),
				'off'		=> esc_html__( 'Off', 'hotella' ),
			),
		),
	) );

	Redux::setSection( $opt_name, array(
		'title'		=> esc_html__( 'Single Blog Page', 'hotella' ),
		'id'		=> 'single-blog-page-opts',
		'subsection'=> true,
		'fields'	=> array(
			array(
				'title'		=> esc_html__('Single Post Sidebar Position', 'hotella'),
				'id'		=> 'hotella_webnus_blog_singlepost_sidebar',
				'type'		=> 'button_set',
				'default'	=> 'right',
				'options'	=> array(
					'none'	=> esc_html__( 'None', 'hotella' ),
					'left'	=> esc_html__( 'Left', 'hotella' ),
					'right'	=> esc_html__( 'Right', 'hotella' ),
				),
			),
			array(
				'title'		=> esc_html__('Featured Image on Single Post', 'hotella'),
				'id'		=> 'hotella_webnus_blog_sinlge_featuredimage_enable',
				'type'		=> 'switch',
				'on'		=> esc_html__( 'On', 'hotella' ),
				'off'		=> esc_html__( 'Off', 'hotella' ),
				'default'	=> '1',
			),
			array(
				'title'		=> esc_html__('Social Share Links', 'hotella'),
				'subtitle'	=> esc_html__('By enabling this feature your visitors can share the post to social networks such as Facebook, Twitter and...','hotella'),
				'id'		=> 'hotella_webnus_blog_social_share',
				'type'		=> 'switch',
				'on'		=> esc_html__( 'On', 'hotella' ),
				'off'		=> esc_html__( 'Off', 'hotella' ),
				'default'	=> '1',
			),
			array(
				'title'		=> esc_html__('Single post Authorbox', 'hotella'),
				'subtitle'	=> esc_html__('This feature shows a picture of post author and some info about author.','hotella'),
				'id'		=> 'hotella_webnus_blog_single_authorbox_enable',
				'type'		=> 'switch',
				'on'		=> esc_html__( 'On', 'hotella' ),
				'off'		=> esc_html__( 'Off', 'hotella' ),
				'default'	=> '1',
			),
			array(
				'title'		=> esc_html__('Recommended Posts', 'hotella'),
				'subtitle'	=> esc_html__('This feature recommends related post to visitors.','hotella'),
				'id'		=> 'hotella_webnus_recommended_posts',
				'type'		=> 'switch',
				'on'		=> esc_html__( 'On', 'hotella' ),
				'off'		=> esc_html__( 'Off', 'hotella' ),
				'default'	=> '1',
			),
		),
	) );

	Redux::setSection( $opt_name, array(
		'title'		=> esc_html__( 'Post Metadatas', 'hotella' ),
		'id'		=> 'post-meta-opts',
		'subsection'=> true,
		'fields'	=> array(
			array(
				'title'		=> esc_html__('Metadata Gravatar', 'hotella'),
				'id'		=> 'hotella_webnus_blog_meta_gravatar_enable',
				'type'		=> 'switch',
				'on'		=> esc_html__( 'On', 'hotella' ),
				'off'		=> esc_html__( 'Off', 'hotella' ),
				'default'	=> '1'
			),
			array(
				'title'		=> esc_html__('Metadata Author', 'hotella'),
				'id'		=> 'hotella_webnus_blog_meta_author_enable',
				'type'		=> 'switch',
				'on'		=> esc_html__( 'On', 'hotella' ),
				'off'		=> esc_html__( 'Off', 'hotella' ),
				'default'	=> '1'
			),
			array(
				'title'		=> esc_html__('Metadata Date', 'hotella'),
				'id'		=> 'hotella_webnus_blog_meta_date_enable',
				'type'		=> 'switch',
				'on'		=> esc_html__( 'On', 'hotella' ),
				'off'		=> esc_html__( 'Off', 'hotella' ),
				'default'	=> '1'
			),
			array(
				'id'		=> 'hotella_webnus_blog_meta_category_enable',
				'type'		=> 'switch',
				'title'		=> esc_html__('Metadata Category', 'hotella'),
				'on'		=> esc_html__( 'On', 'hotella' ),
				'off'		=> esc_html__( 'Off', 'hotella' ),
				'default'	=> '1'
			),
			array(
				'id'		=> 'hotella_webnus_blog_meta_comments_enable',
				'type'		=> 'switch',
				'title'		=> esc_html__('Metadata Comments', 'hotella'),
				'on'		=> esc_html__( 'On', 'hotella' ),
				'off'		=> esc_html__( 'Off', 'hotella' ),
				'default'	=> '1'
			),
			array(
				'id'		=> 'hotella_webnus_blog_meta_views_enable',
				'type'		=> 'switch',
				'title'		=> esc_html__('Metadata Views', 'hotella'),
				'on'		=> esc_html__( 'On', 'hotella' ),
				'off'		=> esc_html__( 'Off', 'hotella' ),
				'default'	=> '1'
			),
		),
	) );


	// -> START Styling Options Fields
	Redux::setSection( $opt_name, array(
	'title'		=> esc_html__( 'Styling Options', 'hotella' ),
	'id'		=> 'styling_opts',
	'icon'		=> 'ti-palette',
	));

	Redux::setSection( $opt_name, array(
	'title'			=> esc_html__( 'Background', 'hotella' ),
	'id'			=> 'background_opts',
	'desc'		=> esc_html__('Background shows in Boxed layout. you can select layout in "Layout" tab.', 'hotella'),
	'subsection'	=> true,
	'fields'		=> array(
		array(
			'title'		=> esc_html__( 'Body Background', 'hotella' ),
			'id'		=> 'hotella_webnus_background',
			'type'		=> 'background',
			'output'	=> array( 'body' ),
		),

		array(
			'title'		=> esc_html__( 'Background Pattern', 'hotella' ),
			'id'		=> 'hotella_webnus_background_pattern',
			'type'		=> 'image_select',
			'options'	=> array(
				'none'	=> array('alt' => 'None','img' => $theme_bg_dir.'none.jpg',),
				$theme_bg_dir.'bdbg1.png'				=> array('alt'  => 'Default BG', 'img'  	=> $theme_bg_dir.'bdbg1.png',),
				$theme_bg_dir.'gray-jean.png'			=> array('alt'  => 'Gray Jean', 'img'  		=> $theme_bg_dir.'gray-jean.png',),
				$theme_bg_dir.'light-wool.png'			=> array('alt'  => 'Light Wool', 'img'  	=> $theme_bg_dir.'light-wool.png',),
				$theme_bg_dir.'subtle_freckles.png'		=> array('alt'	=> 'Subtle Freckles','img'	=>$theme_bg_dir.'subtle_freckles.png',),
				$theme_bg_dir.'subtle_freckles2.png'	=> array('alt'	=> 'Subtle Freckles 2','img'	=>$theme_bg_dir.'subtle_freckles2.png',),
				$theme_bg_dir.'green-fibers.png'		=> array('alt'  => 'Green Fibers', 'img'  	=> $theme_bg_dir.'green-fibers.png',),
				$theme_bg_dir.'dust.png'  				=> array('alt'  => 'Dust', 'img'  			=> $theme_bg_dir.'dust.png',),
			),
			'height'	=> '64',
		),
	),
	));

	Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Colors', 'hotella' ),
	'id'               => 'colors_opts',
	'subsection'       => true,
	'fields'		   => array(
        array(
            'title'     => esc_html__( 'Choose Color Skin', 'hotella' ),
            'subtitle'  => esc_html__( 'Select Predefiend or Custom Color.' , 'hotella' ),
            'id'        => 'hotella_webnus_color_skin_type',
            'type'      => 'button_set',
            'default'   => 'predefined',
            'options'   => array(
                'predefined'    => esc_html__( 'Predefined', 'hotella' ),
                'custom'        => esc_html__( 'Custom', 'hotella' ),
            ),
        ),
		array(
			'title'		=> esc_html__( 'Predefined Color Skin', 'hotella' ),
			'id'		=> 'hotella_webnus_color_skin',
			'type'		=> 'palette',
			'class'		=> 'w-p-colorskin',
			'default'	=> 'e3e3e3',
			'palettes'	=> array(
				'e3e3e3'	=> array( '#e3e3e3' ),
				'1bbc9b'	=> array( '#1bbc9b' ),
				'0093d0'	=> array( '#0093d0' ),
				'e53f51'	=> array( '#e53f51' ),
				'f1c40f'	=> array( '#f1c40f' ),
				'e64883'	=> array( '#e64883' ),
				'45ab48'	=> array( '#45ab48' ),
				'9661ab'	=> array( '#9661ab' ),
				'0aad80'	=> array( '#0aad80' ),
				'03acdc'	=> array( '#03acdc' ),
				'ff5a00'	=> array( '#ff5a00' ),
				'c3512f' 	=> array( '#c3512f' ),
				'55606e'	=> array( '#55606e' ),
				'fe8178'	=> array( '#fe8178' ),
				'7c6853'	=> array( '#7c6853' ),
				'bed431'	=> array( '#bed431' ),
				'2d5c88'	=> array( '#2d5c88' ),
				'76dd56'	=> array( '#76dd56' ),
				'2997ab'	=> array( '#2997ab' ),
				'734854'	=> array( '#734854' ),
				'a81010'	=> array( '#a81010' ),
			),
            'required'      => array( 'hotella_webnus_color_skin_type', '=', 'predefined' ),

        ),

		array(
			'id'			=> 'hotella_webnus_custom_color_skin',
			'type'			=> 'color',
			'title'			=> esc_html__('Choose Color ', 'hotella'),
			'subtitle'		=> esc_html__('Choose your desire color scheme.', 'hotella'),
			'transparent'	=> false,
			'required'      => array( 'hotella_webnus_color_skin_type', '=', 'custom' ),
		),
		array(
			'id'		=> 'hotella_webnus_link_color',
			'type'		=> 'link_color',
			'title'		=> esc_html__('Links Color', 'hotella'),
			'active'	=> false,
			'visited'	=> true,
			'output'	=> array( 'a' ),
		),
		/*array(
			'id'       => 'hotella_webnus_contactform_button',
			'type'     => 'link_color',
			'title'    => esc_html__('Contact form button', 'hotella'),
			'subtitle'	=> esc_html__( 'In Footer'),
			'active'    => false,
		),*/
		array(
			'id'       => 'hotella_webnus_menu_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__('Header Menu Link', 'hotella'),
		),
		array(
			'id'			=> 'hotella_webnus_menu_selected_border_color',
			'type'			=> 'color',
			'title'			=> esc_html__('Header Menu Selected Border', 'hotella'),
			'transparent'	=> false,
			'output'		=> array(
				'border-color' => '#wrap #nav li.current > a',
			),
		),
		array(
			'id'		=> 'hotella_webnus_scroll_to_top_hover_background_color',
			'type'		=> 'link_color',
			'title'		=> esc_html__('Scroll to top', 'hotella'),
			'active'	=> false,
			'visited'	=> false,
		),
		array(
			'id'			=> 'hotella_webnus_iconbox_base_color',
			'type'			=> 'color',
			'title'			=> esc_html__('Iconboxes', 'hotella'),
			'subtitle'		=> esc_html__( 'Iconboxes Base Color', 'hotella' ),
			'transparent'	=> false,
			'output'		=> array('#wrap [class*="icon-box"] i'),
		),
		array(
			'id'			=> 'hotella_webnus_learnmore_link_color',
			'type'			=> 'color',
			'title'			=> esc_html__( 'Learn more link', 'hotella' ),
			'subtitle'		=> esc_html__( 'In IconBox', 'hotella' ),
			'transparent'	=> false,
			'output'		=> array('#wrap a.magicmore'),
		),

		array(
			'id'			=> 'hotella_webnus_learnmore_hover_link_color',
			'type'			=> 'color',
			'title'			=> esc_html__( 'Learn more hover link color', 'hotella' ),
			'subtitle'		=> esc_html__( 'In IconBox' , 'hotella' ),
			'transparent'	=> false,
			'output'		=> array('#wrap [class*="icon-box"] a.magicmore:hover'),
		),

		array(
			'id'			=> 'hotella_webnus_resoponsive_menu_icon_color',
			'type'			=> 'color',
			'title'			=> esc_html__('Responsive Menu Icon', 'hotella'),
			'subtitle'		=> esc_html__( 'Appears in mobile & tablet view', 'hotella'),
			'transparent'	=> false,
			'output'		=> array(
				'background-color' => '#wrap #header.sm-rgt-mn #menu-icon span.mn-ext1, #wrap #header.sm-rgt-mn #menu-icon span.mn-ext2, #wrap #header.sm-rgt-mn #menu-icon span.mn-ext3',
			),
		),

	)));

	// -> START Typography Fields
    Redux::setSection( $opt_name, array(
        'title'             => esc_html__( 'Typography', 'hotella' ),
        'id'                => 'typography_opts',
        'icon'              => 'ti-smallcap',
    ));

    Redux::setSection( $opt_name, array(
        'title'             => esc_html__( 'Body Typography', 'hotella' ),
        'id'                => 'body_typography_opts',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'         => esc_html__( 'Body Typography', 'hotella' ),
                'subtitle'      => esc_html__( 'These settings control the typography for all body text.', 'hotella' ),
                'id'            => 'body-typography',
                'type'          => 'typography',
                'all_styles'    => true,
                'letter-spacing'=> true,
                'font-style'    => false,
                'font-weight'   => false,
                'units'         => 'px',
                'fonts' => $fonts,
            ),
        ),
    ));

    Redux::setSection( $opt_name, array(
        'title'             => esc_html__( 'Paragraph Typography', 'hotella' ),
        'id'                => 'p_typography_opts',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'         => esc_html__( '(P) Paragraph Typography', 'hotella' ),
                'subtitle'      => esc_html__( 'These settings control the typography for all (P) Paragraph.', 'hotella' ),
                'id'            => 'p-typography',
                'type'          => 'typography',
                'all_styles'    => true,
                'letter-spacing'=> true,
                'font-style'    => false,
                'font-weight'   => false,
                'units'         => 'px',
                'fonts' => $fonts,
            ),
        ),
    ));

    Redux::setSection( $opt_name, array(
        'title'             => esc_html__( 'Headings Typography', 'hotella' ),
        'id'                => 'h_typography_opts',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'         => esc_html__( 'All Headings Typography', 'hotella' ),
                'subtitle'      => esc_html__( 'These settings control the typography for all Headings.', 'hotella' ),
                'id'            => 'all-h-typography',
                'type'          => 'typography',
                'all_styles'    => true,
                'letter-spacing'=> true,
                'font-style'    => false,
                'font-weight'   => false,
                'units'         => 'px',
                'fonts'         => $fonts,
            ),
            array(
                'title'         => esc_html__( '(H1) Headings Typography', 'hotella' ),
                'subtitle'      => esc_html__( 'These settings control the typography for all H1 Headings.', 'hotella' ),
                'id'            => 'h1-typography',
                'type'          => 'typography',
                'all_styles'    => true,
                'letter-spacing'=> true,
                'font-style'    => false,
                'font-weight'   => false,
                'units'         => 'px',
                'fonts'         => $fonts,
            ),
            array(
                'title'         => esc_html__( '(H2) Headings Typography', 'hotella' ),
                'subtitle'      => esc_html__( 'These settings control the typography for all H2 Headings.', 'hotella' ),
                'id'            => 'h2-typography',
                'type'          => 'typography',
                'all_styles'    => true,
                'letter-spacing'=> true,
                'font-style'    => false,
                'font-weight'   => false,
                'units'         => 'px',
                'fonts'         => $fonts,
            ),
            array(
                'title'         => esc_html__( '(H3) Headings Typography', 'hotella' ),
                'subtitle'      => esc_html__( 'These settings control the typography for all H3 Headings.', 'hotella' ),
                'id'            => 'h3-typography',
                'type'          => 'typography',
                'all_styles'    => true,
                'letter-spacing'=> true,
                'font-style'    => false,
                'font-weight'   => false,
                'units'         => 'px',
                'fonts'         => $fonts,
            ),
            array(
                'title'         => esc_html__( '(H4) Headings Typography', 'hotella' ),
                'subtitle'      => esc_html__( 'These settings control the typography for all H4 Headings.', 'hotella' ),
                'id'            => 'h4-typography',
                'type'          => 'typography',
                'all_styles'    => true,
                'letter-spacing'=> true,
                'font-style'    => false,
                'font-weight'   => false,
                'units'         => 'px',
                'fonts'         => $fonts,
            ),
            array(
                'title'         => esc_html__( '(H5) Headings Typography', 'hotella' ),
                'subtitle'      => esc_html__( 'These settings control the typography for all H5 Headings.', 'hotella' ),
                'id'            => 'h5-typography',
                'type'          => 'typography',
                'all_styles'    => true,
                'letter-spacing'=> true,
                'font-style'    => false,
                'font-weight'   => false,
                'units'         => 'px',
                'fonts'         => $fonts,
            ),
            array(
                'title'         => esc_html__( '(H6) Headings Typography', 'hotella' ),
                'subtitle'      => esc_html__( 'These settings control the typography for all H6 Headings.', 'hotella' ),
                'id'            => 'h6-typography',
                'type'          => 'typography',
                'all_styles'    => true,
                'letter-spacing'=> true,
                'font-style'    => false,
                'font-weight'   => false,
                'units'         => 'px',
                'fonts'         => $fonts,
            ),
        ),
    ));

    Redux::setSection( $opt_name, array(
        'title'             => esc_html__( 'Menu Typography', 'hotella' ),
        'id'                => 'menu_typography_opts',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'         => esc_html__( 'Menu Typography', 'hotella' ),
                'subtitle'      => esc_html__( 'These settings control the typography for all Menus.', 'hotella' ),
                'id'            => 'menu-typography',
                'type'          => 'typography',
                'all_styles'    => true,
                'letter-spacing'=> true,
                'font-style'    => false,
                'font-weight'   => false,
                'line-height'   => false,
                'units'         => 'px',
                'fonts'         => $fonts,
            ),
            array(
                'title'         => esc_html__( 'Sub Menu Typography', 'hotella' ),
                'subtitle'      => esc_html__( 'These settings control the typography for all Sub Menus.', 'hotella' ),
                'id'            => 'sub-menu-typography',
                'type'          => 'typography',
                'all_styles'    => true,
                'letter-spacing'=> true,
                'font-style'    => false,
                'font-weight'   => false,
                'line-height'   => false,
                'units'         => 'px',
                'fonts'         => $fonts,
            ),
        ),
    ));

    Redux::setSection( $opt_name, array(
        'title'             => esc_html__( 'Blog Typography', 'hotella' ),
        'id'                => 'blog_typography_opts',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'         => esc_html__( 'Post Title Typography In Blog Page', 'hotella' ),
                'subtitle'      => esc_html__( 'These settings control the typography for all Post Title.', 'hotella' ),
                'id'            => 'post-title-typography',
                'type'          => 'typography',
                'all_styles'    => true,
                'letter-spacing'=> true,
                'font-style'    => false,
                'font-weight'   => false,
                'units'         => 'px',
                'fonts' => $fonts,
            ),
            array(
                'title'         => esc_html__( 'Post Title Typography in Single Blog Page', 'hotella' ),
                'subtitle'      => esc_html__( 'These settings control the typography for all Post Title.', 'hotella' ),
                'id'            => 'single-post-title-typography',
                'type'          => 'typography',
                'all_styles'    => true,
                'letter-spacing'=> true,
                'font-style'    => false,
                'font-weight'   => false,
                'units'         => 'px',
                'fonts' => $fonts,
            ),
        ),
    ));

	Redux::setSection( $opt_name, array(
		'title'				=> esc_html__( 'Custom Fonts', 'hotella' ),
		'id'				=> 'custom_fonts_opts',
		'desc'				=> esc_html__( 'After uploading your fonts, you should select font family (custom-font-1/custom-font-2/custom-font-3) from dropdown list in (Body/Paragraph/Headings/Menu/Blog) Typography section.', 'hotella' ),
		'subsection'		=> true,
		'fields'			=> array(
			array(
				'title'		=> esc_html__( 'Custom Font1', 'hotella' ),
				'subtitle'	=> esc_html__( 'Please Enable this option to use Custom Font 1.', 'hotella' ),
				'id'		=> 'hotella_webnus_custom_font1',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
			),
			array(
				'title'		=> esc_html__( 'Custom font 1 .woff', 'hotella' ),
				'id'		=> 'hotella_webnus_custom_font1_woff',
				'type'		=> 'media',
				'mode'       => false,
                'preview'  => false,
				'url'		=> true,
				'required'  => array( 'hotella_webnus_custom_font1', '=', '1' ),
			),
			array(
				'title'		=> esc_html__( 'Custom font 1 .ttf', 'hotella' ),
				'id'		=> 'hotella_webnus_custom_font1_ttf',
				'type'		=> 'media',
				'mode'		=> false,
                'preview'	=> false,
				'url'		=> true,
				'required'  => array( 'hotella_webnus_custom_font1', '=', '1' ),
			),
			array(
				'title'		=> esc_html__( 'Custom font 1 .eot', 'hotella' ),
				'id'		=> 'hotella_webnus_custom_font1_eot',
				'type'		=> 'media',
				'mode'		=> false,
                'preview'	=> false,
				'url'		=> true,
				'required'  => array( 'hotella_webnus_custom_font1', '=', '1' ),
			),

			array(
				'title'		=> esc_html__( 'Custom Font2', 'hotella' ),
				'subtitle'	=> esc_html__( 'Please Enable this option to use Custom Font 2', 'hotella' ),
				'id'		=> 'hotella_webnus_custom_font2',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
			),
			array(
				'title'		=> esc_html__( 'Custom font 2 .woff', 'hotella' ),
				'id'		=> 'hotella_webnus_custom_font2_woff',
				'type'		=> 'media',
				'mode'		=> false,
                'preview'	=> false,
				'url'		=> true,
				'required'  => array( 'hotella_webnus_custom_font2', '=', '1' ),
			),
			array(
				'title'		=> esc_html__( 'Custom font 2 .ttf', 'hotella' ),
				'id'		=> 'hotella_webnus_custom_font2_ttf',
				'type'		=> 'media',
				'mode'		=> false,
                'preview'	=> false,
				'url'		=> true,
				'required'  => array( 'hotella_webnus_custom_font2', '=', '1' ),
			),
			array(
				'title'		=> esc_html__( 'Custom font 2 .eot', 'hotella' ),
				'id'		=> 'hotella_webnus_custom_font2_eot',
				'type'		=> 'media',
				'mode'		=> false,
                'preview'	=> false,
				'url'		=> true,
				'required'  => array( 'hotella_webnus_custom_font2', '=', '1' ),
			),

			array(
				'title'		=> esc_html__( 'Custom Font3', 'hotella' ),
				'subtitle'	=> esc_html__( 'Please Enable this option to use Custom Font 3', 'hotella' ),
				'id'		=> 'hotella_webnus_custom_font3',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
			),
			array(
				'title'		=> esc_html__( 'Custom font 3 .woff', 'hotella' ),
				'id'		=> 'hotella_webnus_custom_font3_woff',
				'type'		=> 'media',
				'mode'		=> false,
                'preview'	=> false,
				'url'		=> true,
				'required'  => array( 'hotella_webnus_custom_font3', '=', '1' ),
			),
			array(
				'title'		=> esc_html__( 'Custom font 3 .ttf', 'hotella' ),
				'id'		=> 'hotella_webnus_custom_font3_ttf',
				'type'		=> 'media',
				'mode'		=> false,
                'preview'	=> false,
				'url'		=> true,
				'required'  => array( 'hotella_webnus_custom_font3', '=', '1' ),
			),
			array(
				'title'		=> esc_html__( 'Custom font 3 .eot', 'hotella' ),
				'id'		=> 'hotella_webnus_custom_font3_eot',
				'type'		=> 'media',
				'mode'		=> false,
                'preview'	=> false,
				'url'		=> true,
				'required'  => array( 'hotella_webnus_custom_font3', '=', '1' ),
			),
		),
	));

	Redux::setSection( $opt_name, array(
		'title'				=> esc_html__( 'Adobe Typekit', 'hotella' ),
		'id'				=> 'adobe_typekit_opts',
		'desc'				=> esc_html__( 'After completing below settings, you should select font family (typekit-font-1/typekit-font-2/typekit-font-3) from dropdown list in (Body/Paragraph/Headings/Menu/Blog) Typography section', 'hotella' ),
		'subsection'		=> true,
		'fields'			=> array(
			array(
				'title'		=> esc_html__( 'Adobe Typekit', 'hotella' ),
				'subtitle'	=> esc_html__( 'Please Enable this option to use Adobe Typekit.', 'hotella' ),
				'id'		=> 'hotella_webnus_adobe_typekit',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
			),
			array(
				'title'		=> esc_html__('Typekit Kit ID', 'hotella'),
				'id'		=> 'hotella_webnus_typekit_id',
				'type'		=> 'text',
				'required'  => array( 'hotella_webnus_adobe_typekit', '=', '1' ),
			),
			array(
				'title'		=> esc_html__('Typekit Font Family 1', 'hotella'),
				'id'		=> 'hotella_webnus_typekit_font1',
				'type'		=> 'text',
				'required'  => array( 'hotella_webnus_adobe_typekit', '=', '1' ),
			),
			array(
				'title'		=> esc_html__('Typekit Font Family 2', 'hotella'),
				'id'		=> 'hotella_webnus_typekit_font2',
				'type'		=> 'text',
				'required'  => array( 'hotella_webnus_adobe_typekit', '=', '1' ),
			),
			array(
				'title'		=> esc_html__('Typekit Font Family 3', 'hotella'),
				'id'		=> 'hotella_webnus_typekit_font3',
				'type'		=> 'text',
				'required'  => array( 'hotella_webnus_adobe_typekit', '=', '1' ),
			),

		),
	));


	// -> START Social Networks Fields
	Redux::setSection( $opt_name, array(
		'title'		=> esc_html__( 'Social Networks', 'hotella' ),
		'id'		=> 'social_opts',
		'icon'		=> 'sl-share',
		'fields'	=> array(
			array(
                'id'       => 'hotella_webnus_social_first',
                'type'     => 'select',
                'title'    => esc_html__('1st Social Name', 'hotella'),
                'options'  => $webnus_socials,
            ),
			array(
				'id'		=> 'hotella_webnus_social_first_url',
				'type'		=> 'text',
				'title'		=> esc_html__('1st Social URL', 'hotella'),
				'required'  => array( 'hotella_webnus_social_first', '!=', '' ),
			),
			array(
				'id'		=> 'hotella_webnus_social_second',
				'type'		=> 'select',
				'title'		=> esc_html__('2nd Social Name', 'hotella'),
				'options'	=> $webnus_socials,
			),
			array(
				'id'		=> 'hotella_webnus_social_second_url',
				'type'		=> 'text',
				'title'		=> esc_html__('2nd Social URL', 'hotella'),
				'required'  => array( 'hotella_webnus_social_second', '!=', '' ),
			),
			array(
				'id'		=> 'hotella_webnus_social_third',
				'type'		=> 'select',
				'title'		=> esc_html__('3rd Social Name', 'hotella'),
				'options'	=> $webnus_socials,
			),
			array(
				'id'		=> 'hotella_webnus_social_third_url',
				'type'		=> 'text',
				'title'		=> esc_html__('3rd Social URL', 'hotella'),
				'required'  => array( 'hotella_webnus_social_third', '!=', '' ),
			),
			array(
				'id'		=> 'hotella_webnus_social_fourth',
				'type'		=> 'select',
				'title'		=> esc_html__('4th Social Name', 'hotella'),
				'options'	=> $webnus_socials,
			),
			array(
				'id'		=> 'hotella_webnus_social_fourth_url',
				'type'		=> 'text',
				'title'		=> esc_html__('4th Social URL', 'hotella'),
				'required'  => array( 'hotella_webnus_social_fourth', '!=', '' ),
			),
			array(
				'id'		=> 'hotella_webnus_social_fifth',
				'type'		=> 'select',
				'title'		=> esc_html__('5th Social Name', 'hotella'),
				'options'	=> $webnus_socials,
			),
			array(
				'id'		=> 'hotella_webnus_social_fifth_url',
				'type'		=> 'text',
				'title'		=> esc_html__('5th Social URL', 'hotella'),
				'required'  => array( 'hotella_webnus_social_fifth', '!=', '' ),
			),
			array(
				'id'		=> 'hotella_webnus_social_sixth',
				'type'		=> 'select',
				'title'		=> esc_html__('6th Social Name', 'hotella'),
				'options'	=> $webnus_socials,
			),
			array(
				'id'		=> 'hotella_webnus_social_sixth_url',
				'type'		=> 'text',
				'title'		=> esc_html__('6th Social URL', 'hotella'),
				'required'  => array( 'hotella_webnus_social_sixth', '!=', '' ),
			),
			array(
				'id'		=> 'hotella_webnus_social_seventh',
				'type'		=> 'select',
				'title'		=> esc_html__('7th Social Name', 'hotella'),
				'options'	=> $webnus_socials,
			),
			array(
				'id'		=> 'hotella_webnus_social_seventh_url',
				'type'		=> 'text',
				'title'		=> esc_html__('7th Social URL', 'hotella'),
				'required'  => array( 'hotella_webnus_social_seventh', '!=', '' ),
			),
		),
	) );

    // -> START Google Map Fields
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__( 'Google Map', 'hotella' ),
        'id'        => 'google_map_opts',
        'icon'      => 'icon-map-pin',
        'fields'    => array(
            array(
                'title'     => esc_html__( 'API key', 'hotella' ),
                'subtitle'  => wp_kses( __('You should create an API for yourself and put code here. red below link to more info:  <a href="https://console.developers.google.com/flows/enableapi?apiid=maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend,places_backend&keyType=CLIENT_SIDE&reusekey=true" target="_blank">Here</a><br><br>', 'hotella'), $keyses ),
                'id'        => 'hotella_google_map_api',
                'type'      => 'text',
            ),
            array(
                'title'     => esc_html__( 'Display Sign in button', 'hotella' ),
                'subtitle'  => wp_kses( __('You can see Sign In button <a href="https://developers.google.com/maps/documentation/javascript/examples/save-simple" target="_blank">Here</a><br/><br/>', 'hotella'), $keyses ),
                'id'        => 'hotella_google_map_api_sign_in',
                'type'      => 'switch',
                'default'   => '1',
                'on'        => esc_html__( 'Show', 'hotella' ),
                'off'       => esc_html__( 'Hide', 'hotella' ),
            ),
        ),
    ) );

	// -> START Shop Fields
	Redux::setSection( $opt_name, array(
		'title'		=> esc_html__( 'Shop', 'hotella' ),
		'id'		=> 'shop_opts',
		'icon'		=> 'ti-shopping-cart',
		'fields'	=> array(
			array(
				'title'		=> esc_html__('Show/Hide Sidebar', 'hotella'),
				'id'		=> 'hotella_webnus_woo_sidebar_enable',
				'type'		=> 'switch',
				'default'	=> '1',
				'on'		=> esc_html__( 'Show', 'hotella' ),
				'off'		=> esc_html__( 'Hide', 'hotella' ),
			),
			array(
				'title'		=> esc_html__('Shop title Show/Hide', 'hotella'),
				'id'		=> 'hotella_webnus_woo_shop_title_enable',
				'type'		=> 'switch',
				'default'	=> '1',
				'on'		=> esc_html__( 'Show', 'hotella' ),
				'off'		=> esc_html__( 'Hide', 'hotella' ),
			),
			array(
				'title'		=> esc_html__('Shop page title', 'hotella'),
				'id'		=> 'hotella_webnus_woo_shop_title',
				'type'		=> 'text',
				'default'	=> 'Shop',
				'required'  => array( 'hotella_webnus_woo_shop_title_enable', '=', '1' ),
			),
			array(
				'title'		=> esc_html__('Product page title Show/Hide', 'hotella'),
				'id'		=> 'hotella_webnus_woo_product_title_enable',
				'type'		=> 'switch',
				'default'	=> '1',
				'on'		=> esc_html__( 'Show', 'hotella' ),
				'off'		=> esc_html__( 'Hide', 'hotella' ),
			),
			array(
				'title'		=> esc_html__('Product page title', 'hotella'),
				'id'		=> 'hotella_webnus_woo_product_title',
				'type'		=> 'text',
				'default'	=> 'Product',
				'required'  => array( 'hotella_webnus_woo_product_title_enable', '=', '1' ),
			),
		),
	) );

	// -> START Maintenance Fields
	Redux::setSection( $opt_name, array(
		'title'		=> esc_html__( 'Maintenance Mode', 'hotella' ),
		'id'		=> 'coming_soon_opts',
		'desc'		=> esc_html__( 'After creating your page, you can select it from dropdown list.', 'hotella' ),
		'icon'		=> 'sl-rocket',
		'fields'	=> array(
			array(
				'title'		=> esc_html__( 'Maintenance Mode', 'hotella' ),
				'subtitle'		=> esc_html__( 'Status of Maintenance Mode', 'hotella' ),
				'id'		=> 'hotella_webnus_maintenance_mode',
				'type'		=> 'switch',
				'default'	=> '0',
				'on'		=> esc_html__( 'Enabled', 'hotella' ),
				'off'		=> esc_html__( 'Disabled', 'hotella' ),
			),
			array(
				'title'		=> esc_html__( 'Maintenance Page', 'hotella' ),
				'subtitle'		=> esc_html__( 'Select Maintenance Page', 'hotella' ),
				'id'		=> 'hotella_webnus_maintenance_page',
				'type'		=> 'select',
				'data'		=> 'page',
				'required'  => array( 'hotella_webnus_maintenance_mode', '=', '1' ),
			),
		),
	) );

	// -> START Custom Codes Fields
	Redux::setSection( $opt_name, array(
		'title'		=> esc_html__( 'Custom Codes', 'hotella' ),
		'id'		=> 'custom_codes',
		'icon'		=> 'fa-code',
		'fields'	=> array(
			array(
				'title'		=> esc_html__( 'Custom CSS', 'hotella' ),
				'subtitle'	=> esc_html__( 'Any custom CSS from the user should go in this field, it will override the theme CSS.', 'hotella' ),
				'id'		=> 'hotella_webnus_custom_css',
				'type'		=> 'ace_editor',
				'mode'		=> 'css',
				'theme'		=> 'chrome',
				'full_width'=> true,
			),
			array(
				'title'		=> esc_html__( 'Space Before &lt;/head&gt;', 'hotella' ),
				'subtitle'		=> esc_html__( 'Add code before the &lt;/head&gt; tag.', 'hotella' ),
				'id'		=> 'hotella_webnus_space_before_head',
				'type'		=> 'ace_editor',
				'theme'		=> 'chrome',
				'full_width'=> true,
			),
			array(
				'title'		=> esc_html__( 'Space Before &lt;/body&gt;', 'hotella' ),
				'subtitle'		=> esc_html__( 'Add code before the &lt;/body&gt; tag.', 'hotella' ),
				'id'		=> 'hotella_webnus_space_before_body',
				'type'		=> 'ace_editor',
				'theme'		=> 'chrome',
				'full_width'=> true,
			),
		),
	) );


	/*
	 * <--- END SECTIONS
	 */