<?php
vc_map( array(
	"name" =>"Webnus Button",
	"base" => "button",
	"description" => "Button shortcode",
	"category" => esc_html__( 'Webnus Shortcodes', 'hotella' ),
	"icon" => "webnus_button",
	"params" => array(
			array(
			"type" => "dropdown",
			"heading" => esc_html__( "Shape", 'hotella' ),
			"param_name" => "shape",
			"value" => array(
				"Default"=>"",
				"Square"=>"square",
				"Rounded"=>"rounded",
				),
			"description" => esc_html__( "Button Type", 'hotella')
			),
			
			array(
			"type" => "textarea",
			"heading" => esc_html__( "Content", 'hotella' ),
			"param_name" => "btn_content",
			"value"=>'',
			"description" => esc_html__( "Button Text Content", 'hotella')
			),
			
			array(
			"type" => "textfield",
			"heading" => esc_html__( "URL", 'hotella' ),
			"param_name" => "url",
			"value"=>'#',
			"description" => esc_html__( "Button URL Link", 'hotella')
			),
									
			array(
			"type" => "dropdown",
			"heading" => esc_html__( "Target", 'hotella' ),
			"param_name" => "target",
			"description" => esc_html__( "Button URL Target", 'hotella'),
			"value" => array(
				"Self"=>"_self",
				"Blank"=>"_blank",
				"Parent"=>"_parent",
				"Top"=>"_top",
				),
			),
			
			array(
			"type" => "dropdown",
			"heading" => esc_html__( "Color", 'hotella' ),
			"param_name" => "color",
			"description" => esc_html__( "Button Color", 'hotella'),
			"value" => array(
				"Default"=>"theme-skin",
				"Green"=>"green",
				"Gold"=>"gold",
				"Red"=>"red",
				"Blue"=>"blue",
				"Gray"=>"gray",
				"Dark gray"=>"dark-gray",
				"Cherry"=>"cherry",
				"Orchid"=>"orchid",
				"Pink"=>"pink",
				"Orange"=>"orange",
				"Teal"=>"teal",
				"SkyBlue"=>"skyblue",
				"Jade"=>"jade",
				"White"=>"white",
				"Black"=>"black",
				),
			),
									
			array(
			"type" => "dropdown",
			"heading" => esc_html__( "Size", 'hotella' ),
			"param_name" => "size",
			"description" => esc_html__( "Button Size", 'hotella'),
			"value" => array(
				"Small"=>"small",
				"Medium"=>"medium",
				"Large"=>"large",	
				),
			),

			array(
			"type" => "dropdown",
			"heading" => esc_html__( "Font Weight", 'hotella' ),
			"param_name" => "f_weight",
			"description" => esc_html__( "Please select your desired font weight", 'hotella'),
			"value" => array(
				"Bold"=>"bold",
				"Thin"=>"thin",
				),
			),

			array(
			"type" => "dropdown",
			"heading" => esc_html__( "Bordered?", 'hotella' ),
			"param_name" => "border",
			"value"=>array('Normal'=>'false','Bordered'=>'true'),
			"description" => esc_html__( "Is button bordered?", 'hotella')
			),
			
			array(
			"type" => "iconfonts",
			"heading" => esc_html__( "Icon", 'hotella' ),
			"param_name" => "icon",
			"value"=>'',
			"description" => esc_html__( "Select Button Icon", 'hotella')
			),	
	),
));
?>