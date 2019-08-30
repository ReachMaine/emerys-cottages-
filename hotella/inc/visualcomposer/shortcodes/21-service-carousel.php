<?php
vc_map( array(
		'name'			=> esc_html__( 'Service Carousel', 'hotella' ),
		'base'			=> 'service_carousel',
		'description'	=> esc_html__( 'Service Carousel', 'hotella' ),
		'icon'			=> 'webnus-services-carousel',
		'category'		=> esc_html__( 'Webnus Shortcodes', 'hotella' ),
		'params'		=> array(
			array(
				'type'			=> 'param_group',
				'heading'		=> esc_html__( 'Service Item', 'hotella' ),
				'description'	=> esc_html__( 'Please Add Your service', 'hotella' ),
				'param_name'	=> 'carousel_item',
				'value' 		=> '',
				'params'		=> array(
					array(
						'type'			=> 'textfield',
						'heading'		=> esc_html__( 'Service Title', 'hotella' ),
						'description'	=> esc_html__( 'Please enter your title', 'hotella' ),
						'param_name'	=> 'service_title',
						'value'			=> '',
						'admin_label'	=> true,
					),
					array(
						'type'			=> 'textarea',
						'heading'		=> esc_html__( 'Service Content', 'hotella' ),
						'description'	=> esc_html__( 'Please enter your content', 'hotella' ),
						'param_name'	=> 'service_content',
						'value'			=> '',
					),
					array(
						'type'			=> 'attach_image',
						'heading'		=> esc_html__( 'Select image', 'hotella' ),
						'description'	=> esc_html__( 'Please enter your content', 'hotella' ),
						'param_name'	=> 'service_image',
						'value'			=> '',
					),
					// array(
					// 	'type'			=> 'iconfonts',
					// 	'heading'		=> esc_html__( 'Icon', 'hotella' ),
					// 	'param_name'	=> 'service_icon',
					// 	'value'			=> '',
					// 	'description'	=> esc_html__( 'Select Icon', 'hotella')
					// ),
				),
			),
			array(
				'heading'		=> esc_html__( 'Carousel Items', 'hotella' ),
				'description'	=> esc_html__( 'Please enter carousel items to show', 'hotella' ),
				'type'			=> 'textfield',
				'param_name'	=> 'item_carousle',
				'value'			=> '',
			),
		)
	)
);