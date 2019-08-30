<?php
vc_map( array(
	'name'			=> esc_html__( ' Webnus Pricing Plan ', 'hotella' ),
	'base'			=> 'pricing-plan',
	'description'	=> esc_html__( 'Webnus Pricing Plan', 'hotella' ),
	'icon'			=> 'pricing-plan',
	'category'		=> esc_html__( 'Webnus Shortcodes', 'hotella' ),
	'params'		=> array(

		array(
			'heading'		=> esc_html__( 'Type', 'hotella' ),
			'description'	=> esc_html__( 'You can choose among these pre-designed types.', 'hotella'),
			'type'			=> 'dropdown',
			'param_name'	=> 'type',
			'value'			=> array(
				esc_html__( 'Type 1', 'hotella' ) => '1',
				esc_html__( 'Type 2', 'hotella' ) => '2',
			),
		),

		array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Title', 'hotella' ),
				'param_name' => 'title',
				'value'=>'',
				'description' => esc_html__( 'Enter title pricing table', 'hotella'),
		),

		array(
			'heading'		=> esc_html__( 'Features', 'hotella' ),
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
			'dependency'	=> array( 'element' => 'type', 'value' => '2' ),
		),

		array(
				'type' => 'textarea',
				'heading' => esc_html__( 'Content', 'hotella' ),
				'param_name' => 'text_content',
				'value'=>'',
				'description' => esc_html__( 'Enter the content Name', 'hotella'),
				'dependency'	=> array( 'element' => 'type', 'value' => '1' ),	
		),

		array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Flag', 'hotella' ),
				'param_name' => 'flag',
				'value'		 => array(
					esc_html__( 'None', 'hotella' )	=> 'none',
					esc_html__( 'Featured', 'hotella' )	=> 'Featured',
					esc_html__( 'Popular', 'hotella' )	=> 'Popular',
				),
				'description' => esc_html__( 'Enter the content Name', 'hotella'),
				'dependency'	=> array( 'element' => 'type', 'value' => '2' ),	
		),

		array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Price', 'hotella' ),
				'param_name' => 'price',
				'value'=>'$',
				'description' => esc_html__( 'Enter the price Name', 'hotella'),
			),

		array(
			"type"=>'textfield',
			"heading"=>esc_html__('Link Text', 'hotella'),
			"param_name"=> "link_text",
			"value"=>"",
			"description" => esc_html__( "Link Text", 'hotella'),	
		),

		array(
			"type"=>'textfield',
			"heading"=>esc_html__('Link URL', 'hotella'),
			"param_name"=> "link_url",
			"value"=>"",
			"description" => esc_html__( "Link URL (http://example.com)", 'hotella'),	
		),

) ) );