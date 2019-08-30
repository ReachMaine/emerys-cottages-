<?php
vc_map( array(
	'base'			=> 'pricing-tables',
	'name'			=> 'Pricing Tables',
	'description'	=> 'Pricing Tables',
	'icon'			=> 'webnus_pricingtable',
	'category'		=> esc_html__( 'Webnus Shortcodes', 'hotella' ),

	'params' => array(

		array(
			'heading'		=> esc_html__( 'Type', 'hotella' ),
			'description'	=> esc_html__( 'You can choose among these pre-designed types.', 'hotella'),
			'type'			=> 'dropdown',
			'param_name'	=> 'type',
			'value'			=> array(
				esc_html__( 'Type 1', 'hotella' ) => '1',
				esc_html__( 'Type 2', 'hotella' ) => '2',
				esc_html__( 'Type 3', 'hotella' ) => '3',
				esc_html__( 'Type 4', 'hotella' ) => '4',
				esc_html__( 'Type 5', 'hotella' ) => '5',
				esc_html__( 'Type 6', 'hotella' ) => '6',
				esc_html__( 'Type 7', 'hotella' ) => '7',
			),
		),

		array(
			'heading'		=> esc_html__( 'Title', 'hotella' ),
			'description' 	=> esc_html__( 'Pricing Table Title', 'hotella'),
			'type'			=> 'textfield',
			'param_name'	=> 'title',
		),

		array(
			'heading'		=> esc_html__( 'Header Description', 'hotella' ),
			'description' 	=> esc_html__( 'Pricing Table Description', 'hotella'),
			'type'			=> 'textfield',
			'param_name'	=> 'description',
			'dependency'	=> array( 'element' => 'type', 'value' => '4' ),
		),

		array(
			'heading'		=> esc_html__( 'Price Symbol', 'hotella' ),
			'type'			=> 'textfield',
			'param_name'	=> 'price_symbol',
			'value'			=> '$',
			'dependency'	=> array( 'element' => 'type', 'value' => '7' ),
		),

		array(
			'heading'		=> esc_html__( 'Price', 'hotella' ),
			'description'	=> esc_html__( 'Pricing Table Price', 'hotella'),
			'type'			=> 'textfield',
			'param_name'	=> 'price',
			'value'			=> '$10',
		),

		array(
			'heading'		=> esc_html__( 'Special Offer', 'hotella' ),
			'description'	=> esc_html__( 'Pricing Table Special Offer or On Sale Price', 'hotella'),
			'type'			=> 'textfield',
			'param_name'	=> 'on_sale_price',
			'value'			=> '',
		),

		array(
			'heading'		=> esc_html__( 'Plan Label', 'hotella' ),
			'description'	=> esc_html__( 'Pricing Table Label', 'hotella'),
			'type'			=> 'textfield',
			'param_name'	=> 'plan_label',
			'value'			=> '',
			'dependency'	=> array( 'element' => 'type', 'value' => array( '3', '5' ) ),
		),

		array(
			'heading'		=> esc_html__( 'Label Color', 'hotella' ),
			'description' 	=> esc_html__( 'Select Custom Label Color', 'hotella'),
			'type'			=> 'colorpicker',
			'param_name'	=> 'label_bg_color',
			'dependency'	=> array( 'element' => 'type', 'value' => '5' ),
		),

		array(
			'heading'		=> esc_html__( 'Period', 'hotella' ),
			'description'	=> esc_html__( 'Pricing Table Period', 'hotella'),
			'type'			=> 'textfield',
			'param_name'	=> 'period',
			'value'			=> esc_html__( 'Month', 'hotella'),
		),

		array(
			'heading'		=> esc_html__( 'Features', 'hotella' ),
			'description'	=> esc_html__( 'Enter features for pricing table - value, title and color.', 'hotella' ),
			'type'			=> 'param_group',
			'param_name'	=> 'features',
			'params' => array(
				array(
					'heading'	 => esc_html__( 'Feature Item Icon', 'hotella' ),
					'type'		 => 'dropdown',
					'param_name' => 'feature_icon',
					'value'		 => array(
						esc_html__( 'Empty', 'hotella' )			=> 'empty-icon',
						esc_html__( 'Available', 'hotella' )		=> 'available-icon',
						esc_html__( 'Not Available', 'hotella' )	=> 'not-available-icon',
					),
					'admin_label'	=> true,
				),
				array(
					'heading'		=> esc_html__( 'Feature Item Text', 'hotella' ),
					'type'			=> 'textfield',
					'param_name'	=> 'feature_item',
					'admin_label'	=> true,
				),
			),
		),

		array(
			'heading'		=> esc_html__( 'Footer Pricing Table Text', 'hotella' ),
			'type'			=> 'textfield',
			'param_name'	=> 'footer_text',
			'value'			=> '',
		),		

		array(
			'heading'		=> esc_html__( 'Button Text', 'hotella' ),
			'type'			=> 'textfield',
			'param_name'	=> 'button_text',
			'value'			=> '',
		),

		array(
			'heading'		=> esc_html__( 'Button URL', 'hotella' ),
			'description'	=> esc_html__( 'Button URL (http://example.com)', 'hotella' ),	
			'type'			=> 'textfield',
			'param_name'	=> 'button_url',
			'value'			=> '',
		),

		array(
			'type'			=> 'checkbox',
			'heading'		=> esc_html__( 'Featured Plan ?', 'hotella' ),
			'param_name'	=> 'featured',
			'value'			=> array( esc_html__( 'Yes', 'hotella' ) => ' w-featured' ),
			'description'	=> esc_html__( 'Pricing Tables Featured Plan', 'hotella'),
		),

		array(
			'heading'		=> esc_html__('Plan Icon', 'hotella'),
			'type'			=> 'iconfonts',
			'param_name'	=> 'icon',
			'value'			=> '',
			'dependency'	=> array(
				'element' => 'type',
				'value'   => '2',
			),
		),

		array(
			'heading'		=> esc_html__( 'Heading Background Color', 'hotella' ),
			'description' 	=> esc_html__( 'Select Custom Background Color', 'hotella'),
			'type'			=> 'colorpicker',
			'param_name'	=> 'heading_bg_color',
			'dependency'	=> array( 'element' => 'type', 'value' => '6' ),
		),

		array(
			'heading'		=> esc_html__( 'Heading Text Color', 'hotella' ),
			'description' 	=> esc_html__( 'Select Custom Text Color', 'hotella'),
			'type'			=> 'colorpicker',
			'param_name'	=> 'heading_text_color',
			'dependency'	=> array( 'element' => 'type', 'value' => '6' ),
		),
	)

) );