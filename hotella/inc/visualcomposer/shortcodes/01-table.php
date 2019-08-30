<?php
vc_map( array(
	'base'			=> 'table',
	'name'			=> 'TablePress',
	'description'	=> 'TablePress',
	'icon'			=> 'table',
	'category'		=> esc_html__( 'Webnus Shortcodes', 'hotella' ),
	'params' 		=> array(

		array(
			'heading'		=> esc_html__( 'Table ID', 'hotella' ),
			'description' 	=> wp_kses( __( '<br><span style="color: red">!important:</span> Before adding this element in your page, install TablePress Plugin via Appearance>Install plugins.<br><br>Please enter your desired table ID. <span style="text-decoration: underline; font-weight: bold;">You\'ll find table id via Admin Panel> TablePress</span>', 'hotella'), array( 'span' => array( 'style' => array() ), 'br' => array() ) ),
			'type'			=> 'textfield',
			'param_name'	=> 'id',
		),

	)
) );