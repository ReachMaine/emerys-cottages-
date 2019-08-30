<?php
vc_map( array(
    "name" =>"Webnus Icon",
    "base" => "icon",
	"description" => "Vector font icon",
    
	"icon" => "webnus_icon",
    "category" => esc_html__( 'Webnus Shortcodes', 'hotella' ),
    "params" => array(
       
         array(
			"type"=>'textfield',
			"heading"=>esc_html__('Icon Size', 'hotella'),
			"param_name"=> "size",
			"value"=>"",
			"description" => esc_html__( "Icon size in px format, Example: 16px", 'hotella')
			
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
			"heading"=>esc_html__('Icon Link URL', 'hotella'),
			"param_name"=> "link",
			"value"=>"",
			"description" => esc_html__( "Icon link URL http:// ", 'hotella')
			
		),
		array(
			"type"=>'textfield',
			"heading"=>esc_html__('Icon Link Class', 'hotella'),
			"param_name"=> "link_class",
			"value"=>"",
			"description" => esc_html__( "Icon link Class ", 'hotella')
			
		),
		array(
			"type" => "colorpicker",
			"heading" => esc_html__( "Custom background color", "hotella" ),
			"param_name" => "bg_color",
			"value"=>"",
			"description" => esc_html__( "Select background color", 'hotella')
		),
		array(
			"type"=>'textfield',
			"heading"=>esc_html__('Padding', 'hotella'),
			"param_name"=> "padding",
			"value"=>"",
			"description" => esc_html__( "Example: 20px", 'hotella')
		),
		array(
			"type"=>'textfield',
			"heading"=>esc_html__('Border Radius', 'hotella'),
			"param_name"=> "border_radius",
			"value"=>"",
			"description" => esc_html__( "Border Radius, Example: 8px or 50%", 'hotella')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Extra class name', 'hotella' ),
			'param_name' => 'el_class',
			'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'hotella' ),
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