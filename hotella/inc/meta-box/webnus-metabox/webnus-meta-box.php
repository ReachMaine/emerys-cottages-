<?php
add_filter( 'rwmb_meta_boxes', 'hotella_meta_boxes' );
function hotella_meta_boxes( $meta_boxes ) {

	// Post
	$meta_boxes[] = array(
		'title'			=> esc_attr__( 'Webnus Post Options', 'hotella' ),
		'post_types'	=> 'post',
		'fields'		=> array(
			array(
				'id'	=> 'hotella_featured_video_meta',
				'name'	=> esc_attr__( 'Video or Audio iFrame', 'hotella' ),
				'desc'	=> esc_attr__( 'Enter the Embed Code', 'hotella' ),
				'type'	=> 'textarea',
			),
			array(
				'id'	=> 'hotella_blogpost_meta',
				'name'	=> esc_attr__( 'Post Style', 'hotella' ),
				'type'	=> 'select',
				'options'     => array(
					'postshow1' => esc_attr__( 'Post Show1 Style', 'hotella' ),
					'postshow2' => esc_attr__( 'Post Show2 Style', 'hotella' ),
				),
				'placeholder' => esc_attr__( 'Select an Item', 'hotella' ),
			),
		),
	);

	// awebooking
	$meta_boxes[] = array(
		'title'			=> esc_attr__( 'Room Excerpt', 'hotella' ),
		'post_types'	=> 'room_type',
		'fields'		=> array(
			array(
				'id'	=> 'hotella_room_excerpt',
				'name'	=> esc_attr__( 'Room exceprt', 'hotella' ),
				'type'	=> 'textarea',
			),
		),
	);

	// Page
	$meta_boxes[] = array(
		'title'			=> esc_attr__( 'Webnus Page Options', 'hotella' ),
		'post_types'	=> 'page',
		'fields'		=> array(
			array(
				'id'	=> 'hotella_page_title_bar_meta',
				'name'	=> esc_attr__( 'Show Page Title:', 'hotella' ),
				'type'	=> 'switcher',
				'std'	=> 1,
			),
			array(
				'id'	=> 'hotella_breadcrumb_meta',
				'name'	=> esc_attr__( 'Show Breadcrumb:', 'hotella' ),
				'type'	=> 'select',
				'options'	=> array(
					'yes'	=> esc_attr__( 'Yes', 'hotella' ),
					'no'	=> esc_attr__( 'No', 'hotella' ),
				),
				'placeholder'	=> esc_attr__( 'Select an Item', 'hotella' ),
			),
			array(
				'id'	=> 'hotella_page_title_text_color_meta',
				'name'	=> esc_attr__( 'Page Title Text Color:', 'hotella' ),
				'type'	=> 'color',
			),
			array(
				'id'	=> 'hotella_page_title_bg_color_meta',
				'name'	=> esc_attr__( 'Page Title Background Color:', 'hotella' ),
				'type'	=> 'color',
			),
			array(
				'id'	=> 'hotella_page_title_font_size_meta',
				'name'	=> esc_attr__( 'Page Title Font Size:', 'hotella' ),
				'desc'	=> esc_attr__( '(in px format)', 'hotella' ),
				'type'	=> 'text',
			),
			array(
				'type'	=>'divider',
			),
			array(
				'id'	=> 'hotella_transparent_header_meta',
				'name'	=> esc_attr__( 'Transparent Header:', 'hotella' ),
				'type'	=> 'select',
				'options'	=> array(
					'light'	=> esc_attr__( 'Light Style', 'hotella' ),
					'dark'	=> esc_attr__( 'Dark Style', 'hotella' ),
				),
				'placeholder'	=> esc_attr__( 'Select an Item', 'hotella' ),
			),
			array(
				'id'	=> 'hotella_hide_header_meta',
				'name'	=> esc_attr__( 'Hide Header at Start:', 'hotella' ),
				'type'	=> 'switcher',
				'std'	=> 0,
			),
			array(
				'type'	=>'divider',
			),
			array(
				'id'	=> 'hotella_sidebar_position_meta',
				'name'	=> esc_attr__( 'Sidebar Position:', 'hotella' ),
				'type'	=> 'select',
				'options'	=> array(
					'right'	=> esc_attr__( 'Right', 'hotella' ),
					'left'	=> esc_attr__( 'Left', 'hotella' ),
					'both'	=> esc_attr__( 'Both', 'hotella' ),
				),
				'placeholder'	=> esc_attr__( 'Select an Item', 'hotella' ),
			),
			array(
				'type'	=>'divider',
			),
			array(
				'id'	=> 'hotella_topbar_show',
				'name'	=> esc_attr__( 'Show Topbar:', 'hotella' ),
				'type'	=> 'switcher',
				'std'	=> 1,
			),
			array(
				'id'	=> 'hotella_header_show',
				'name'	=> esc_attr__( 'Show Header:', 'hotella' ),
				'type'	=> 'switcher',
				'std'	=> 1,
			),
			array(
				'id'	=> 'hotella_footer_show',
				'name'	=> esc_attr__( 'Show Footer:', 'hotella' ),
				'type'	=> 'switcher',
				'std'	=> 1,
			),
			array(
				'type'	=>'divider',
			),
			array(
				'id'	=> 'hotella_wrap_color_meta',
				'name'	=> esc_attr__( 'Content Background Color:', 'hotella' ),
				'type'	=> 'color',
			),
			array(
				'id'	=> 'hotella_body_bg_color_meta',
				'name'	=> esc_attr__( 'Body Background Color:', 'hotella' ),
				'type'	=> 'color',
			),
			array(
				'id'	=> 'hotella_body_bg_img_meta',
				'name'	=> esc_attr__( 'Body Background Image:', 'hotella' ),
				'type'	=> 'image_advanced',
			),
			array(
				'id'	=> 'hotella_body_bg_image_100_meta',
				'name'	=> esc_attr__( '100% Background Image:', 'hotella' ),
				'type'	=> 'switcher',
				'std'	=> 0,
			),
			array(
				'id'	=> 'hotella_body_bg_image_repeat_meta',
				'name'	=> esc_attr__( 'Background Repeat:', 'hotella' ),
				'type'	=> 'select',
				'options'	=> array(
					'0'	=> esc_attr__( 'No repeat', 'hotella' ),
					'1'	=> esc_attr__( 'Repeat both vertically and horizontally', 'hotella' ),
					'2'	=> esc_attr__( 'Repeat only horizontally', 'hotella' ),
					'3'	=> esc_attr__( 'Repeat only vertically', 'hotella' ),
				),
				'placeholder'	=> esc_attr__( 'Select an Item', 'hotella' ),
			),
			array(
				'type'	=>'divider',
			),
			array(
				'id'	=> 'hotella_onepage_menu_meta',
				'name'	=> esc_attr__( 'OnePage Menu:', 'hotella' ),
				'type'	=> 'switcher',
				'std'	=> 0,
			),
			array(
				'type'	=>'divider',
			),
			array(
				'id'	=> 'hotella_mega_menu_meta',
				'name'	=> esc_attr__( 'Is mega menu?', 'hotella' ),
				'desc'	=> esc_attr__( 'Is this page Mega Menu content', 'hotella' ),
				'type'	=> 'switcher',
				'std'	=> 0,
			),
		),
	);

	return $meta_boxes;
}