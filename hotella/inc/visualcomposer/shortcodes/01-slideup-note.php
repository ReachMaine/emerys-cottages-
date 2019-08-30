<?php vc_map( array(
	"name" =>"SlideUp Note",
	"base" => "slideup",
	"description" => "SlideUp Note",
	"icon" => "slideup",
	"category" => esc_html__( 'Webnus Shortcodes', 'hotella' ),
	"params" => array(
		array(
			"type"=>'textfield',
			"heading"=>esc_html__('Title', 'hotella'),
			"param_name"=> "title",
			"value"=>"",
			"description" => esc_html__( "Note Title", 'hotella')
		),
		array(
			"type"=>'colorpicker',
			"heading"=>esc_html__('Title color (leave bank for default color)', 'hotella'),
			"param_name"=> "title_color",
			"value"=>"",
			"description" => esc_html__( "Select title background color", 'hotella')
		),
		array(
			"type"=>'textarea',
			"heading"=>esc_html__('Content', 'hotella'),
			"param_name"=> "slideup_content",
			"value"=>"",
			"description" => esc_html__( "Note Content", 'hotella')	
		),    
	),
)); ?>