<?php

vc_map( array(
        "name" =>"Icon Divider",
        "base" => "icon-divider",
		"description" => "Vector font icon",
        
		"icon" => "icon-wpb-wicon",
        "category" => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        "params" => array(
           
             array(
				"type"=>'colorpicker',
				"heading"=>esc_html__('Icon color', 'hotella'),
				"param_name"=> "color",
				"value"=>"",
				"description" => esc_html__( "Select icon color", 'hotella')
				
			),
			
             array(
                "type" => "iconfonts",
                "heading" => esc_html__( "Icon", 'hotella' ),
                "param_name" => "name",
                'value'=>'',
                "description" => esc_html__( "Select Icon", 'hotella')
            ),
           
        ),
		
        
    ) );


?>