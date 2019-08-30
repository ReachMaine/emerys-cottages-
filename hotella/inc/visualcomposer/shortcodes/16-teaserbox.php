<?php vc_map( array(
	'name' =>'Teaser Box',
	'base' => 'teaserbox',
	'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ),
	'description' => 'Image and icon with text article',
	'icon' => 'webnus_teaserbox',
	'params'=>array(
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Type', 'hotella' ),
			'param_name' => 'type',
			'value'      => array(
				'Type 1'=>'1',
				'Type 2'=>'2',
				'Type 3'=>'3',
				'Type 4'=>'4',
				'Type 5'=>'5',
				'Type 6'=>'6',
				'Type 7'=>'7',
                'Type 8'=>'8',
                'Type 9'=>'9',
			),
			'description' => esc_html__( 'TeaserBox Type', 'hotella')
		),
		array(
			'type'           => 'attach_image',
			'heading'        => esc_html__( 'Image', 'hotella' ),
			'param_name'     => 'img',
			'value'          =>'',
			'description'    => esc_html__( 'TeaserBox Image', 'hotella')
		),
		array(
			'type'           => 'textfield',
			'heading'        => esc_html__( 'Title', 'hotella' ),
			'param_name'     => 'title',
			'value'          =>'',
			'description'    => esc_html__( 'Enter the Title', 'hotella')
		),
        array(
            'type'           => 'checkbox',
            'heading'        => esc_html__( 'Border for Title', 'hotella' ),
            'param_name'     => 'border',
            'value'          => '',
            'description'    => esc_html__( 'Do you want border for title?', 'hotella'),
            'dependency'     => array(
                'element' => 'type',
                'value'   => '8',
            ),
        ),
        array(
            'type'           => 'colorpicker',
            'heading'        => esc_html__( 'Border Color', 'hotella' ),
            'param_name'     => 'border_color',
            'value'          => '',
            'description'    => esc_html__( 'Select color for border', 'hotella'),
            'dependency'     => array(
                'element' => 'type',
                'value'   => '8',
            ),
        ),
        array(
            'type'           => 'textfield',
            'heading'        => esc_html__( 'Featured Text', 'hotella' ),
            'param_name'     => 'featured',
            'value'          => '',
            'description'    => esc_html__( 'Enter your text here', 'hotella'),
            'dependency'     => array(
                'element' => 'type',
                'value'   => '5',
            ),
        ),
		array(
			'type'           => 'textfield',
			'heading'        => esc_html__( 'Subtitle', 'hotella' ),
			'param_name'     => 'subtitle',
			'value'          => '',
			'description'    => esc_html__( 'Enter the Subtitle', 'hotella'),
            'dependency'        => array(
                'element' => 'type',
                'value'   => array(
                    '1',
                    '2',
                    '3',
                    '4',
                    '5',
                    '6',
                    '7',
                    '8',
                ),
            ),
		),
		array(
			'type'           => 'textfield',
			'heading'        => esc_html__( 'Link URL', 'hotella' ),
			'param_name'     => 'link_url',
			'value'          =>'#',
			'description'    => esc_html__( 'Enter the link url. Example: http://yourdomain.com', 'hotella'),
		),
		array(
			'type'           => 'textfield',
			'heading'        => esc_html__( 'Image alt', 'hotella' ),
			'param_name'     => 'img_alt',
			'value'          =>'',
			'description'    => esc_html__( 'Enter the image alt Text', 'hotella'),
		),
        array(
            'type'              => 'textarea',
            'heading'           => esc_html__('Content', 'hotella'),
            'param_name'        => 'text_content',
            'value'             => '',
            'description'       => esc_html__( 'Please write Content', 'hotella'),
            'dependency'        => array(
                'element' => 'type',
                'value'   => '8',
            ),
        ),
	),
)); ?>