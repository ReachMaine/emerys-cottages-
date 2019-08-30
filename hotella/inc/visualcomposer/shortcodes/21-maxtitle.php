<?php
vc_map( array(
	"name" =>"Max Title",
	"base" => "maxtitle",
	"description" => "MaxTitle",
	"category" => esc_html__( 'Webnus Shortcodes', 'hotella' ),
	"icon" => "icon-wpb-maxtitle",
	"params" => array(

		array(
			"heading" => esc_html__( "Type", 'hotella' ),
			"description" => esc_html__( "Title Type", 'hotella'),
			"type" => "dropdown",
			"param_name" => "type",
			"value" => array(
				"Maxtitle 1"=>"1",
				"Maxtitle 2"=>"2",
				"Maxtitle 3"=>"3",
				"Maxtitle 4"=>"4",
				"Maxtitle 5"=>"5",
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
			'std' => '2',
		),

		array(
			"heading" => esc_html__( "Title", 'hotella' ),
			"description" => esc_html__( "Enter the title", 'hotella'),
			"type" => "textfield",
			"param_name" => "maxtitle_content",
		),

		array(
			'heading'		=> esc_html__( 'Text Color', 'hotella' ),
			'type'			=> 'colorpicker',
			'param_name'	=> 'maxtitle_color',
			'value'			=> '',
		),

	),
) );