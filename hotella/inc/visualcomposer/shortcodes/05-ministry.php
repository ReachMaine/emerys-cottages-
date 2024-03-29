<?php
vc_map( array(
        'name' =>'Webnus Ministry',
        'base' => 'ministry',
		'description' => 'Introduce Ministries',
		'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ), 
        'icon' => 'ministry',
        'params'=>array(

        	array(
					"type" => "dropdown",
					"heading" => esc_html__( "Type", 'hotella' ),
					"param_name" => "type",
					"value" => array(
						"Type 1"=>"1",
						"Type 2"=>"2",						
				),
				"description" => esc_html__( "Select style type", 'hotella')
			),		
		
			array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Ministry Name', 'hotella' ),
					'param_name' => 'ministry_name',
					'value'=>'',
					'description' => esc_html__( 'Ministry name', 'hotella')
			),		
			array(
					'type' => 'attach_image',
					'heading' => esc_html__( 'Ministry Image', 'hotella' ),
					'param_name' => 'ministry_img',
					'value'=>'',
					'description' => esc_html__( 'Ministry image', 'hotella')
			),
			array(
					"type"=>'colorpicker',
					"heading"=>esc_html__('Main color (leave bank for default color)', 'hotella'),
					"param_name"=> "color",
					"value"=>"",
					"dependency" => array('element'=>'type','value'=>array('1')),
					"description" => esc_html__( "Select title color", 'hotella')
			),
			array(
					'type' => 'textarea',
					'heading' => esc_html__( 'Ministry Description Text', 'hotella' ),
					'param_name' => 'text',
					'value'=>'',
					'description' => esc_html__( 'Ministry description text', 'hotella')
			),
			array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Ministry Director Name', 'hotella' ),
					'param_name' => 'director_name',
					'value'=>'',
					"dependency" => array('element'=>'type','value'=>array('1')),
					'description' => esc_html__( 'Ministry director name', 'hotella')
			),
			array(
					'type' => 'attach_image',
					'heading' => esc_html__( 'Ministry Director Image', 'hotella' ),
					'param_name' => 'director_img',
					'value'=>'',
					"dependency" => array('element'=>'type','value'=>array('1')),
					'description' => esc_html__( 'Ministry director image', 'hotella')
			),
			array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Ministry Link URL', 'hotella' ),
					'param_name' => 'link',
					'value'=>'',
					'description' => esc_html__( 'Ministry link url', 'hotella')
			),
		),
    ) );
?>