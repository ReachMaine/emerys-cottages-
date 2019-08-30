<?php

vc_map( array(
        'name' =>'Webnus Countdown',
        'base' => 'countdown',
        "icon" => "icon-wpb-countdown",
		"description" => "Countdown",
        'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        'params' => array(
						array(
							'type' => 'dropdown',
							'heading' => esc_html__( 'Style', 'hotella' ),
							'param_name' => 'type',
							'value' => array(
								"Modern"=>"modern",
								"Simple"=>"simple",
								"Minimal"=>"minimal",
								"Flip"=>"flip",
							),
							'description' => esc_html__( 'Select Countdown Type', 'hotella')
						),
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Date and Time', 'hotella' ),
							'param_name' => 'datetime',
							'value' => '',
							'description' => esc_html__( 'Enter date and time (11October 2016 9:00)', 'hotella'),
						),
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Finished text', 'hotella' ),
							'param_name' => 'done',
							'value' => '',
							'description' => esc_html__( 'Finished text', 'hotella')
						),
						array(
							"type"=>'colorpicker',
							"heading"=>esc_html__('Content color (leave bank for default color)', 'hotella'),
							"param_name"=> "content_color",
							"value"=>"",
							"description" => esc_html__( "Select content color", 'hotella'),
							"dependency" => array('element'=>'type','value'=>array('minimal')),
						),
						
        ),
        
    ) );