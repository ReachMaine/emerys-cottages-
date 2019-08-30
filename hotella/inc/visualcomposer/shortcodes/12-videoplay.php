<?php

vc_map( array(
        "name" =>"Video Play Button",
        "base" => "videoplay",
		"description" => "Video Play Button",
		"icon" => "webnus_videoplay",
        "category" => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        "params" => array(
		
  			array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Video URL', 'hotella' ),
							'param_name' => 'link',
							'value' => '#',
							'description' => esc_html__( 'YouTube/Vimeo URL', 'hotella')
					),
					
             array(
				"type"=>'textfield',
				"heading"=>esc_html__('Icon Size', 'hotella'),
				"param_name"=> "size",
				"value"=>"",
				"description" => esc_html__( "Icon size in px format, Example: 80px", 'hotella')
				
			),
			array(
				"type"=>'colorpicker',
				"heading"=>esc_html__('Icon color', 'hotella'),
				"param_name"=> "color",
				"value"=>"",
				"description" => esc_html__( "Select icon color", 'hotella')
				
			),
			 array(
				"type"=>'textfield',
				"heading"=>esc_html__('Extra Class', 'hotella'),
				"param_name"=> "link_class",
				"value"=>"",
				"description" => esc_html__( "Extra Class ", 'hotella')
				
			),
           
        ),
		
        
    ) );


?>