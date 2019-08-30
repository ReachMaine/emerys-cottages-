<?php
vc_map( array(
		'name'			=> esc_html__( 'Webnus Image Carousel', 'hotella' ),
		'base'			=> 'imagecarousel',
		'description'	=> esc_html__( 'Webnus Image Carousel', 'hotella' ),
		'icon'			=> 'webnus-imagecarousel',
		'category'		=> esc_html__( 'Webnus Shortcodes', 'hotella' ),
		'params'		=> array(
			array(
				'heading'		=> esc_html__( 'Carousel Items', 'hotella' ),
				'description'	=> esc_html__( 'Please enter carousel items to show', 'hotella' ),
				'type'			=> 'textfield',
				'param_name'	=> 'item_carousle',
				'value'			=> '',
				),
				array(
					'type'			=> 'param_group',
					'heading'		=> esc_html__( 'Image Item', 'hotella' ),
					'description'	=> esc_html__( 'Please Add Your image', 'hotella' ),
					'param_name'	=> 'image_item',
					'value' 		=> '',
					'params'		=> array(
						array(
							'type'			=> 'attach_image',
							'heading'		=> esc_html__( 'Select image', 'hotella' ),
							'description'	=> esc_html__( 'Please Select Your Desired image', 'hotella' ),
							'param_name'	=> 'image',
							'value'			=> '',
						),
				),

			),
		)
	)
);