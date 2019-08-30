<?php

vc_map( array(
        "name" =>"Webnus Tooltip",
        "base" => "tooltip",
		"description" => "Tooltip",
        "category" => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        "icon" => "webnus_tooltip",
        "params" => array(
						array(
							"type" => "textarea",
							"heading" => esc_html__( "Tooltip Text", 'hotella' ),
							"param_name" => "tooltiptext",
							"value" => '',
							"description" => esc_html__( "Tooltip text goes here", 'hotella')
						),
						
						array(
							'type' => "textarea_html",
							"heading" => esc_html__( 'Tooltip Content', 'hotella' ),
							"param_name" => 'tooltip_content',
							"value"=>'',
							"description" => esc_html__( "Contet Goes Here", 'hotella')
						),
						
           
        ),
		
        
    ) );


?>