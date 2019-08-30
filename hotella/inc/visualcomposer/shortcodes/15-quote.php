<?php

vc_map( array(
        'name' =>'Webnus Quote',
        'base' => 'quote',
		"description" => "Quote",
        "icon" => "webnus_quote",
        'params'=>array(
					
					
					
					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Name', 'hotella' ),
							'param_name' => 'name',
							'value'=>'',
							'description' => esc_html__( 'Enter the Name', 'hotella')
					),
					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Name Subtitle', 'hotella' ),
							'param_name' => 'name_sub',
							'value'=>'',
							'description' => esc_html__( 'Enter the Name Subtitle', 'hotella')
					),
					
					
					
					array(
							'type' => 'textarea',
							'heading' => esc_html__( 'Content', 'hotella' ),
							'param_name' => 'text',
							'value' => '',
							'description' => esc_html__( 'Enter the Quote of the Week content text', 'hotella')
					),
		),
		'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        
    ) );


?>