<?php
vc_map( array(
	"name" =>"Subtitle",
	"base" => "subtitle",
	"description" => "SubTitle",
	"category" => esc_html__( 'Webnus Shortcodes', 'hotella' ),
	"icon" => "webnus_subtitle1",
	"params" => array(

		array(
			"heading" => esc_html__( "Type", 'hotella' ),
			"description" => esc_html__( "Title Type", 'hotella'),
			"type" => "dropdown",
			"param_name" => "type",
			"value" => array(
				"Subtitle 1"=>"1",
				"Subtitle 2"=>"2",
				"Subtitle 3"=>"3",									
				"Subtitle 4"=>"4",
				"Subtitle 5"=>"5",
			),
		),

		array(
			"heading" => esc_html__( "Heading", 'hotella' ),
			"description" => wp_kses( __( "Just for SEO<br>Note: it doesn\'t change the size of the max title in the page.", 'hotella'), array( 'br' => array() ) ),
			"type" => "dropdown",
			"param_name" => "heading",
			"value" => array(
				"h1"=>"1",
				"h2"=>"2",
				"h3"=>"3",
				"h4"=>"4",
				"h5"=>"5",
				"h6"=>"6",
			),
			'std' => '4',
		),

		array(
			"heading" => esc_html__( "Title", 'hotella' ),
			"description" => esc_html__( "Enter the title", 'hotella'),
			"type" => "textarea",
			"param_name" => "subtitle_content",
			"value" => array('Title'),
		),

		array(
			'heading'		=> esc_html__( 'Text Color', 'hotella' ),
			'type'			=> 'colorpicker',
			'param_name'	=> 'subtitle_color',
			'value'			=> '',
		),

		array(
			'heading'		=> esc_html__( 'Border Color', 'hotella' ),
			'type'			=> 'colorpicker',
			'param_name'	=> 'border_color',
			'value'			=> '',
		),

	),
) );