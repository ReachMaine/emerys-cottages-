<?php

vc_map( array(
        'name' =>'Icon Box',
        'base' => 'iconbox',
        'description' => 'Icon + text article',
		'icon' => 'webnus_iconbox',
        'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        'params' => array(
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Type', 'hotella' ),
                'param_name' => 'type',
                'value' => array(
				'Type 0'=>'0',
				'Type 1'=>'1',
				'Type 2'=>'2',
				'Type 3'=>'3',
				'Type 4'=>'4',
				'Type 5'=>'5',
				'Type 6'=>'6',
				'Type 7'=>'7',
				'Type 8'=>'8',
				'Type 9'=>'9',
				'Type 10'=>'10',
				'Type 11'=>'11',
				'Type 12'=>'12',
				'Type 13'=>'13',
				'Type 14'=>'14',
				'Type 15'=>'15',
				'Type 16'=>'16',
				'Type 17'=>'17',
				'Type 18'=>'18',
				'Type 19'=>'19',
				'Type 20'=>'20',
				'Type 21'=>'21',
				'Type 22'=>'22',
				'Type 23'=>'23',
				'Type 24'=>'24',
				'Type 25'=>'25',
                'Type 26'=>'26',
                'Type 27'=>'27',
				),
                'description' => esc_html__( 'You can choose among these pre-designed types.', 'hotella')
            ),
            array(
				'type'			=> 'checkbox',
				'heading'		=> esc_html__( 'Featured Iconbox ?', 'hotella' ),
				'param_name'	=> 'featured',
				'value'			=> array( esc_html__( 'Yes', 'hotella' ) => ' w-featured' ),
				'description'	=> esc_html__( 'Iconbox Featured Plan', 'hotella'),
				'dependency'	=> array(
					'element' => 'type',
					'value'   => '22',
				),
			),
			array(
				'type'			=> 'checkbox',
				'heading'		=> esc_html__( 'Remove left border?', 'hotella' ),
				'param_name'	=> 'border_left',
				'value'			=> array( esc_html__( 'Yes', 'hotella' ) => ' w-border-left' ),
				'dependency'	=> array(
					'element' => 'type',
					'value'   => array( '15', ),
				),
			),
			array(
				'type'			=> 'checkbox',
				'heading'		=> esc_html__( 'Remove right border?', 'hotella' ),
				'param_name'	=> 'border_right',
				'value'			=> array( esc_html__( 'Yes', 'hotella' ) => ' w-border-right' ),
				'dependency'	=> array(
					'element' => 'type',
					'value'   => array( '15', '22', ),
				),
			),
			array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Title', 'hotella'),
				'param_name'    => 'icon_title',
				'value'         => '',
				'description'   => esc_html__( 'IconBox Title', 'hotella')
			),
            array(
                'type'          => 'textfield',
                'heading'       => esc_html__('Subtitle', 'hotella'),
                'param_name'    => 'icon_subtitle',
                'value'         => '',
                'description'   => esc_html__( 'IconBox Subtitle', 'hotella'),
                'dependency'    => array(
                    'element' => 'type',
                    'value'   => array( '1', '15', ),
                ),
            ),
			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Title color (leave bank for default color)', 'hotella'),
				'param_name'    => 'title_color',
				'value'         => '',
				'description'   => esc_html__( 'Select title color', 'hotella')
			),

            array(
				'type'          => 'textarea',
				'heading'       => esc_html__('Content', 'hotella'),
				'param_name'    => 'iconbox_content',
				'value'         => '',
				'description'   => esc_html__( 'IconBox Content Goes Here', 'hotella'),
                'dependency'    => array(
                    'element' => 'type',
                    'value'   => array( '0', '1', '2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25' ),
                ),
			),

			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Content color (leave bank for default color)', 'hotella'),
				'param_name'    => 'content_color',
				'value'         => '',
				'description'   => esc_html__( 'Select content color', 'hotella'),
                'dependency'    => array(
                    'element' => 'type',
                    'value'   => array( '1', '2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25' ),
                ),
			),


			 array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Link Text', 'hotella'),
				'param_name'    => 'icon_link_text',
				'value'         => '',
				'description'   => esc_html__( 'IconBox Link Text', 'hotella'),
                'dependency'    => array(
                    'element' => 'type',
                    'value'   => array( '1','1', '2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25' ),
                ),
			),


			 array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Link URL', 'hotella'),
				'param_name'    => 'icon_link_url',
				'value'         => '',
				'description'   => esc_html__( 'IconBox Link URL (http://example.com)', 'hotella'),
                'dependency'    => array(
                    'element' => 'type',
                    'value'   => array( '1', '2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25' ),
                ),
			),

			array(
				'type'          => 'colorpicker',
				'heading'       => esc_html__('Link color (leave bank for default color)', 'hotella'),
				'param_name'    => 'link_color',
				'value'         => '',
				'description'   => esc_html__( 'Select link color', 'hotella'),
                'dependency'    => array(
                    'element' => 'type',
                    'value'   => array( '1', '2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25' ),
                ),
			),

            array(
				'type'          => 'textfield',
				'heading'       => esc_html__('Icon Size (leave blank for default size)', 'hotella'),
				'param_name'    => 'icon_size',
				'value'         => '',
				'description'   => esc_html__( 'Icon size in px format, Example: 16px', 'hotella'),

			),
            array(
                'type'          => 'textfield',
                'heading'       => esc_html__('Minimum Background Color Height', 'hotella'),
                'param_name'    => 'min_height',
                'value'         => '',
                'description'   => esc_html__( 'Height size in px format, Example: 250px', 'hotella'),
                'dependency'    => array(
                    'element' => 'type',
                    'value'   => '26',
                ),

            ),
            array(
                'type'          => 'colorpicker',
                'heading'       => esc_html__('Icon Background Color', 'hotella'),
                'param_name'    => 'icon_bg',
                'value'         => '',
                'description'   => esc_html__( 'Select Icon Background Color', 'hotella'),
                'dependency'    => array(
                    'element' => 'type',
                    'value'   => '26',
                ),

            ),
			array(
				'type'          =>'colorpicker',
				'heading'       => esc_html__('Icon color (leave bank for default color)', 'hotella'),
				'param_name'    => 'icon_color',
				'value'         => '',
				'description'   => esc_html__( 'Select icon color', 'hotella'),

			),

            array(
                'type'          => 'attach_image',
                'heading'       => esc_html__( 'Image', 'hotella' ),
                'param_name'    => 'icon_image',
                'value'         => '',
                'description'   => wp_kses( __( 'Select Image instead of Icons.<br>Note: If you have another Icon that not is here. You can put PNG image of that instead of these Icons.', 'hotella'), array( 'br' => array() ) ),
            ),

            array(
                'type'          => 'iconfonts',
                'heading'       => esc_html__( 'Icon', 'hotella' ),
                'param_name'    => 'icon_name',
                'value'         => '',
                'description'   => esc_html__( 'Select Icon', 'hotella'),
            ),

        ),


    ) );


?>