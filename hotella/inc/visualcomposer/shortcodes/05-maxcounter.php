<?php

vc_map( array(
        'name' =>'Max Counter',
        'base' => 'maxcounter',
        "icon" => "icon-wpb-maxcounter",
		"description" => "MaxCounter",
        'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        'params' => array(
						array(
							'type' => 'dropdown',
							'heading' => esc_html__( 'Type', 'hotella' ),
							'param_name' => 'type',
							'value' => array(
							'Type 1'=>'1',
							'Type 2'=>'2',
							'Type 3'=>'3',
							'Type 4'=>'4',
							),
							'description' => esc_html__( 'You can choose among these pre-designed types.', 'hotella')
						),
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Count', 'hotella' ),
							'param_name' => 'count',
							'value' => '',
							'description' => esc_html__( 'Enter the number that you want to count.', 'hotella')
						),
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Prefix', 'hotella' ),
							'param_name' => 'prefix',
							'value' => '',
							'description' => esc_html__( 'Show the unit content before your counter number., Example: $', 'hotella')
						),
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Suffix', 'hotella' ),
							'param_name' => 'suffix',
							'value' => '',
							'description' => esc_html__( 'Show the unit content after your counter number., Example: %', 'hotella')
						),
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Title', 'hotella' ),
							'param_name' => 'title',
							'value' => '',
							'description' => esc_html__( 'Enter the title', 'hotella')
						),
						array(
							'type' => 'colorpicker',
							'heading' => esc_html__( 'Color', 'hotella' ),
							'param_name' => 'color',
							'value' => '',
							'description' => esc_html__( 'Please select icon color', 'hotella'),
						),
						array(
							'type' => 'iconfonts',
							'heading' => esc_html__( 'Icon', 'hotella' ),
							'param_name' => 'icon',
							'value' => '',
							'description' => esc_html__( 'Please select counter icon', 'hotella'),
						),
						
        ),
		
        
    ) );


?>