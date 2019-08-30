<?php
add_action( 'vc_before_init', 'hotella_rooms_map' );

function hotella_rooms_map() {

	// Get Rooms
	if ( class_exists( 'APB_Booking' ) ) {
		$rooms = get_posts( 'post_type="apb_room_type"&numberposts=-1' );
	} elseif ( class_exists( 'AweBooking' ) ) {
		$rooms = get_posts( 'post_type="room_type"&numberposts=-1' );
	}

	$rooms_choise = array();

	if ( $rooms ) :
		$rooms_choise[ esc_html__( 'Select your desired Room', 'hotella' ) ] = 0;
		foreach ( $rooms as $rooms ) :
			$rooms_choise[ $rooms->post_title ] = $rooms->ID;
		endforeach;
	else :
		$rooms_choise[ esc_html__( 'No Rooms found', 'hotella' ) ] = 0;
	endif;

	vc_map( array(
		'name'			=> esc_html__( 'Single Room', 'hotella' ),
		'base'			=> 'single_room',
		'description'	=> esc_html__( 'Single Room', 'hotella' ),
		'icon'			=> 'webnus-single-room',
		'category'		=> esc_html__( 'Webnus Shortcodes', 'hotella' ),
		'params'		=> array(
			array(
				'type'				=> 'dropdown',
				'heading'			=> esc_html__('Select Room', 'hotella'),
				'param_name'		=> 'room_id',
				'value'				=> $rooms_choise,
				'description'		=> esc_html__( 'Please Select Room', 'hotella'),
				'edit_field_class'	=> 'vc_col-sm-6',
			),
			array(
				'type'				=> 'colorpicker',
				'heading'			=> esc_html__('Background Color', 'hotella'),
				'param_name'		=> 'bgcolor',
				'value'				=> '',
				'description'		=> esc_html__( 'Select Background color', 'hotella'),
				'edit_field_class'	=> 'vc_col-sm-6',
			),
			array(
				'type'				=> 'textarea',
				'heading'			=> esc_html__('Extra Content', 'hotella'),
				'param_name'		=> 'room_extra_content',
				'value'				=> '',
				'description'		=> esc_html__( 'Please write Content', 'hotella'),
			),
	)
	) );
}