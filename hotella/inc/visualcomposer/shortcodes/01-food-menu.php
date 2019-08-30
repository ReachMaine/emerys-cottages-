<?php
vc_map(array(
	'name'		  => esc_html__( 'Food Menu', 'hotella' ),
	'base'		  => 'food_menu',
	'description' => esc_html__( 'Create Your Food Menu', 'hotella' ),
	'icon'		  => 'food_menu',
	'category'	  => esc_html__( 'Webnus Shortcodes', 'hotella' ),
	'params'	  => array(

		array(
			'heading'	  => esc_html__( 'Type', 'hotella' ),
			'description' => esc_html__( 'You can choose among these pre-designed types.', 'hotella'),
			'type'		  => 'dropdown',
			'param_name'  => 'type',
			'value'		  => array(
				esc_html__( 'Type 1', 'hotella' ) => '1',
				esc_html__( 'Type 2', 'hotella' ) => '2',
				esc_html__( 'Type 3', 'hotella' ) => '3',
				esc_html__( 'Type 4', 'hotella' ) => '4',
			),
		),

		array(
			'heading'	 => esc_html__( 'Food Menu Image', 'hotella' ),
			'type'		 => 'attach_image',
			'param_name' => 'img',
			'dependency' => array( 'element' => 'type', 'value' => array( '1', '3', '4' ) ),
		),

		array(
			'heading'	  => esc_html__( 'Title', 'hotella' ),
			'description' => esc_html__( 'Food Menu Title', 'hotella'),
			'type'		  => 'textfield',
			'param_name'  => 'title',
			'dependency'  => array( 'element' => 'type', 'value' => array( '1', '3', '4' ) ),
		),

		array(
			'heading'		=> esc_html__( 'Price', 'hotella' ),
			'description'	=> esc_html__( 'Food Menu Price', 'hotella'),
			'type'			=> 'textfield',
			'param_name'	=> 'price',
			'value'			=> '$10',
			'dependency' 	=> array( 'element' => 'type', 'value' => array( '1', '3', '4' ) ),
		),

		array(
			'heading'	  => esc_html__( 'Description', 'hotella' ),
			'description' => esc_html__( 'Food Menu Description', 'hotella'),
			'type'		  => 'textfield',
			'param_name'  => 'description',
			'dependency'  => array( 'element' => 'type', 'value' => array( '3', '4' ) ),
		),

		array(
			'heading'		=> esc_html__( 'Ingredients', 'hotella' ),
			'description'	=> esc_html__( 'Enter Ingredients.', 'hotella' ),
			'type'			=> 'param_group',
			'param_name'	=> 'ingredients',
			'params' => array(
				array(
					'heading'		=> esc_html__( 'Ingredient', 'hotella' ),
					'type'			=> 'textfield',
					'param_name'	=> 'ingredient',
					'admin_label'	=> true,
				),
			),
			'dependency' => array( 'element' => 'type', 'value' => '1' ),
		),

		// start type 2
		array(
			'heading'		=> esc_html__( 'Food Items', 'hotella' ),
			'description'	=> esc_html__( 'Enter Title, Price and Description. ', 'hotella' ),
			'type'			=> 'param_group',
			'param_name'	=> 'food_menu2',
			'params' => array(
				array(
					'heading'	  => esc_html__( 'Title', 'hotella' ),
					'description' => esc_html__( 'Food Menu Title', 'hotella'),
					'type'		  => 'textfield',
					'param_name'  => 'title',
					'admin_label' => true,
				),
				array(
					'heading'	  => esc_html__( 'Price', 'hotella' ),
					'description' => esc_html__( 'Food Menu Price', 'hotella'),
					'type'		  => 'textfield',
					'param_name'  => 'price',
					'value'		  => '$10',
					'admin_label' => true,
				),
				array(
					'heading'	  => esc_html__( 'Description', 'hotella' ),
					'description' => esc_html__( 'Food Menu Description', 'hotella'),
					'type'		  => 'textfield',
					'param_name'  => 'description',
					'value'		  => 'Soup / Lemon / Garlic',
				),
				array(
					'heading'		=> esc_html__( 'Food Item Style', 'hotella' ),
					'type'			=> 'dropdown',
					'param_name'	=> 'food_style',
					'value'			=> array(
						esc_html__( 'Default Food Item', 'hotella' )	=> 'default',
						esc_html__( 'Featured Food Item', 'hotella' )	=> 'featured-w2',
					),
					'admin_label' => true,
				),
				array(
					'heading'	  => esc_html__( 'Featured Text', 'hotella' ),
					'type'		  => 'textfield',
					'param_name'  => 'featured_text',
					'value'		  => 'Recommended',
					'dependency'  => array( 'element' => 'food_style', 'value' => 'featured-w2' ),
				),
			),
			'dependency' => array( 'element' => 'type', 'value' => '2' ),
		),
		// end type 2

	)
));