<?php

vc_map( array(
        'name' =>'Webnus Line',
        'base' => 'line',
		"description" => "Horizonal line",
        'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        "icon" => "webnus_line",
        'params' => array(
						array(
							'type' => 'dropdown',
							'heading' => esc_html__( 'Line Type', 'hotella' ),
							'param_name' => 'type',
							'value' => array(
											'Line'=>'1',
											'Thick Line'=>'2',
											
																
										),
							'description' => esc_html__( 'Select the Line type', 'hotella')
						),
						
						
           
        ),
		
        
    ) );


?>