<?php
vc_map( array(
	'name'			=> esc_html__( 'Buy Process', 'hotella' ),
	'base'			=> 'buy_process',
	'description'	=> esc_html__( 'Buy Process', 'hotella' ),
	'icon'			=> 'buy_process',
	'category'		=> esc_html__( 'Webnus Shortcodes', 'hotella' ),
	'params'		=> array(
		array(
			'heading'		=> esc_html__( 'Process Item', 'hotella' ),
			'description'	=> esc_html__( 'If you want this element cover whole page width, please add it inside of a full row. For this purpose, click on edit button of the row and set Select Row Type on Full Width Row.', 'hotella' ),
			'type'			=> 'param_group',
			'param_name'	=> 'process_item',
			'params'		=> array(

				array(
					'heading'		=> esc_html__( 'Process Title', 'hotella' ),
					'type'			=> 'textfield',
					'param_name'	=> 'process_title',
					'value'			=> '',
					'admin_label'	=> true,
				),

				array(
					'heading'		=> esc_html__( 'Process Content', 'hotella' ),
					'type'			=> 'textarea',
					'param_name'	=> 'process_content',
					'value'			=> '',
				),

				array(
					'type'			=> 'iconpicker',
					'heading'		=> esc_html__( 'Icon', 'hotella' ),
					'param_name'	=> 'icon_fontawesome',
					'value'			=> 'fa fa-adjust',
					'settings'		=> array(
						'emptyIcon'		=> false,
						'iconsPerPage'	=> 4000,
					),
					'description'	=> esc_html__( 'Select icon from library.', 'hotella' ),
				),

				array(
					'heading'		=> esc_html__( 'Line number ( or text )', 'hotella' ),
					'type'			=> 'textfield',
					'param_name'	=> 'line_flag',
					'value'			=> '',
				),

				array(
					'heading'		=> esc_html__( 'Porcess style', 'hotella' ),
					'type'			=> 'dropdown',
					'param_name'	=> 'process_style',
					'value'			=> array(
						esc_html__( 'Default Porcess', 'hotella' )	 => 'default',
						esc_html__( 'Featured Porcess', 'hotella' ) => 'featured',
					),
					'admin_label'	=> true,
				),

			),
		),
		
		array(
			'heading'		=> esc_html__( 'Background Color', 'hotella' ),
			'type'			=> 'colorpicker',
			'param_name'	=> 'bg_color',
			'value'			=> '',
			'description'	=> esc_html__( 'Select custom background color', 'hotella' ),
		),
) ) );