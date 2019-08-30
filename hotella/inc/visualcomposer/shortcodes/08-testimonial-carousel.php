<?php 
vc_map( array(
	'name'			=> esc_html__( 'Testimonial Carousel', 'hotella' ),
	'base'			=> 'testimonial-carousel',
	'description'	=> esc_html__( 'Testimonial Carousel', 'hotella' ),
	'icon'			=> 'testimonial-carousel',
	'category'		=> esc_html__( 'Webnus Shortcodes', 'hotella' ),
	'params'		=> array(


		array(
			'type'			=> 'dropdown',
			'heading'		=> esc_html__( 'Testimonial Type', 'hotella' ),
			'param_name'	=> 'type',
			'value'			=>  array(
					'One'	=> '1',
					'Two'	=> '2',
					'Three'	=> '3',
				),
		),
		array(
			'type'			=> 'textfield',
			'heading'		=> esc_html__( 'Testimonial Items Per View', 'hotella' ),
			'param_name'	=> 'items',
			'value'			=> '',
		),

		array(
			'heading'		=> esc_html__( 'Testimonial Items', 'hotella' ),
			'type'			=> 'param_group',
			'param_name'	=> 'testimonial_item',
			'params' => array(

				array(
					'heading'		=> esc_html__( 'Testimonial Image', 'hotella' ),
					'type'			=> 'attach_image',
					'param_name'	=> 'img',
					'value'			=> '',
				),

				array(
					'heading'		=> esc_html__( 'Testimonial Content', 'hotella' ),
					'type'			=> 'textarea',
					'param_name'	=> 'tc_content',
					'value'			=> '',
				),

				array(
					'heading'		=> esc_html__( 'Testimonial Name', 'hotella' ),
					'type'			=> 'textfield',
					'param_name'	=> 'name',
					'value'			=> '',
					'admin_label'	=> true,
				),

				array(
					'heading'		=> esc_html__( 'Testimonial Job', 'hotella' ),
					'type'			=> 'textfield',
					'param_name'	=> 'job',
					'value'			=> '',
					'admin_label'	=> true,
				),
			),
		),

	)
) );