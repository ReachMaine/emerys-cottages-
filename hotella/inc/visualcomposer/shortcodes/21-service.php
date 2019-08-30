<?php
vc_map( array(
		'name'			=> esc_html__( 'Service', 'hotella' ),
		'base'			=> 'service',
		'description'	=> esc_html__( 'Service', 'hotella' ),
		'icon'			=> 'webnus-services',
		'category'		=> esc_html__( 'Webnus Shortcodes', 'hotella' ),
		'params'		=> array(
			array(
				'type'				=> 'textfield',
				'heading'			=> esc_html__('Service Title', 'hotella'),
				'param_name'		=> 'service_single_title',
				'value'				=> '',
				'description'		=> esc_html__( 'Please write Service Title', 'hotella'),
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
				'heading'			=> esc_html__('Content', 'hotella'),
				'param_name'		=> 'service_single_content',
				'value'				=> '',
				'description'		=> esc_html__( 'Please write Content', 'hotella'),
			),
			array(
                'type'				=> 'iconfonts',
                'heading'			=> esc_html__( 'Icon', 'hotella' ),
                'param_name'		=> 'icon_name',
                'value'				=> '',
                'description'		=> esc_html__( 'Select Icon', 'hotella'),
                'group'				=> 'Icons',
            ),
		)
	)
);