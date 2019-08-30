<?php

vc_map( array(
        'name' =>'Webnus Callout',
        'base' => 'callout',
		"description" => "Call to action + button",
        "icon" => "webnus_callout",
        'params'=>array(
					
					
					
					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Title', 'hotella' ),
							'param_name' => 'title',
							'value'=>'',
							'description' => esc_html__( 'Enter the Callout title', 'hotella')
					),
					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Button Text', 'hotella' ),
							'param_name' => 'button_text',
							'value'=>'',
							'description' => esc_html__( 'Callout Button text', 'hotella')
					),
					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Button Link', 'hotella' ),
							'param_name' => 'button_link',
							'value'=>'',
							'description' => esc_html__( 'Button Link URL', 'hotella')
					),
					array(
							'type' => 'textarea',
							'heading' => esc_html__( 'Content Text', 'hotella' ),
							'param_name' => 'text',
							'value' => '',
							'description' => esc_html__( 'Enter the Callout content text', 'hotella')
					),
		),
		'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        
    ) );


?>