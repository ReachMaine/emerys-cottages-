<?php

vc_map( array(
        'name' =>'Double Promo',
        'base' => 'doublepromo',
		"description" => "2 text box + image",
        "icon" => "webnus_doublepromo",
        'params'=>array(
					
					
					
					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Title', 'hotella' ),
							'param_name' => 'title',
							'value'=>'',
							'description' => esc_html__( 'Enter the Title', 'hotella')
					),
					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Link Text', 'hotella' ),
							'param_name' => 'link_text',
							'value'=>'',
							'description' => esc_html__( 'Enter the link text', 'hotella')
					),
					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Link URL', 'hotella' ),
							'param_name' => 'link_link',
							'value'=>'',
							'description' => esc_html__( 'Enter the link url Example: http://domain.com', 'hotella')
					),
					array(
							'type' => 'attach_image',
							'heading' => esc_html__( 'Image', 'hotella' ),
							'param_name' => 'img',
							'value'=>'',
							'description' => esc_html__( 'Enter the image url', 'hotella')
					),
					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Image alt', 'hotella' ),
							'param_name' => 'img_alt',
							'value'=>'Alt text',
							'description' => esc_html__( 'Enter the image alt Text', 'hotella')
					),
					array(
							'type' => 'dropdown',
							'heading' => esc_html__( 'Is Last Column?', 'hotella' ),
							'param_name' => 'last',
							'value'=>array('Yes'=>'true', 'No'=> 'false'),
							'description' => esc_html__( 'Is this second promobox?', 'hotella')
					),
					array(
							'type' => 'textarea_html',
							'heading' => esc_html__( 'Content', 'hotella' ),
							'param_name' => 'text',
							'value' => '',
							'description' => esc_html__( 'Enter the Doublepromo content text', 'hotella')
					),
		),
		'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        
    ) );


?>