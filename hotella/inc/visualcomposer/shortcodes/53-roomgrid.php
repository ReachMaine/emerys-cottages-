<?php
vc_map(array(
	'name'			=> esc_html__( 'Rooms', 'hotella' ),
	'base'			=> 'room-grid',
	'description'	=> esc_html__( 'Rooms Shortcode', 'hotella' ),
	'icon'			=> 'room-grid',
	'category'		=> esc_html__( 'Webnus Shortcodes', 'hotella' ),       
	'params'		=> array(
		array(
			'type'			=> 'dropdown',
			'heading'		=> esc_html__( 'Grid type', 'hotella' ),
			'param_name'	=> 'type',
			'value'			=> array(
				esc_html__( 'One', 'hotella' )	=> '1',
				esc_html__( 'Two', 'hotella' )	=> '2',
			),
			'std'			=> '1',
			'description' => esc_html__( 'please select your desiret number to show items in each row', 'hotella'),
		),
		array(
			'type'			=> 'dropdown',
			'heading'		=> esc_html__( 'Item Number', 'hotella' ),
			'param_name'	=> 'item_num',
			'value'			=> array(
				''		=> '',
				esc_html__( 'Tow', 'hotella' ) 	=> '6',
				esc_html__( 'Three', 'hotella' ) => '4',
				esc_html__( 'For', 'hotella' ) 	=> '3',
				esc_html__( 'Six', 'hotella' ) 	=> '2',
			),
			'std'			=> '4',
			'description' => esc_html__( 'please select your desiret number to show items in each row', 'hotella'),
		),
		array(
			'heading' => esc_html__( 'Post count', 'hotella' ),
			'description' => esc_html__( 'Number of grid item(s) to show. Note: When you type nothing it puts for default 6 grid items to show.', 'hotella'),
			'type' => 'textfield',
			'param_name' => 'post_count',
			'value' => '',
		),
		array(
			'heading'		=> esc_html__('Page Navigation', 'hotella') ,
			'description'	=> wp_kses( __('Enable page navigation.<br><br>', 'hotella'), array( 'br' => array() ) ),
			'type'			=> 'checkbox',
			'param_name'	=> 'room_grid',
			'value'			=> array( esc_html__( 'Enable', 'hotella' ) => 'enable'),
			'std'			=> '',
		),
	)
));