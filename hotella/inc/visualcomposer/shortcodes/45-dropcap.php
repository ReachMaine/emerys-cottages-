<?php

vc_map( array(
        'name' =>'Webnus Dropcap',
        'base' => 'dropcap',
		"description" => "Dropcap",
        'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ),
         "icon" => "webnus_dropcap",
        'params' => array(
						array(
							'type' => 'dropdown',
							'heading' => esc_html__( 'Dropcap Type', 'hotella' ),
							'param_name' => 'type',
							'value' => array(
											'Dropcap 1'=>'1',
											'Dropcap 2'=>'2',
											'Dropcap 3'=>'3',
											
							
										),
							'description' => esc_html__( 'Specify the Dropcap type', 'hotella')
						),
						
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Dropcap Character', 'hotella' ),
							'param_name' => 'dropcap_content',
							'value' => '',
							'description' => esc_html__( 'Specify the Dropcap Text', 'hotella')
						),
						
           
        ),
		
        
    ) );


?>