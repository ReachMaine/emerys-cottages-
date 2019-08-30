<?php

vc_map( array(
        'name' =>'Webnus Link',
        'base' => 'link',
		"description" => "Learn more link",
        'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        "icon" => "webnus_link",
		'params'=>array(
            array(
                'type'              => 'dropdown',
                'heading'           => esc_html__( 'Type', 'hotella' ),
                'param_name'        => 'type',
                'value'             => array(
                    'Simple'    => '1',
                    'Toggle'    => '2',
                ),
                'description'       => esc_html__( 'You can choose among these pre-designed types.', 'hotella')
            ),
			array(
					'type'         => 'textfield',
					'heading'      => esc_html__( 'Link URL', 'hotella' ),
					'param_name'   => 'url',
					'value'        => '#',
					'description'  => esc_html__( 'Link URL, Example: http://domain.com', 'hotella')
			),
			array(
					'type'         => 'textfield',
					'heading'      => esc_html__( 'Link Text', 'hotella' ),
					'param_name'   => 'content',
					'value'        => 'Link Text',
					'description'  => esc_html__( 'Link Text (Content)', 'hotella')
			),
		)

    ) );


?>