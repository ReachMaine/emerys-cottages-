<?php
vc_map(array(
	'name'		  => esc_html__( 'Portfolio Carousel', 'hotella' ),
	'base'		  => 'portfolio-carousel',
	'description' => esc_html__( 'Portfolio Carousel Element', 'hotella' ),
	'icon'		  => 'portfolio-carousel',
	'category'	  => esc_html__( 'Webnus Shortcodes', 'hotella' ),       
	'params'	  => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'hotella' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Recent Works', 'hotella' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Carousel Count', 'hotella' ),
			'param_name' => 'carousel_count',
			'value' => '10',
			'description' => esc_html__( 'Default: 10', 'hotella'),
		),

	)
));