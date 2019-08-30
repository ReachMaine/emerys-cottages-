<?php

vc_map( array(
        "name" =>"Webnus Alert",
        "base" => "alert",
		"description" => "Alert box",
        "category" => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        "icon" => "webnus_alert",
        "params" => array(
						array(
							"type" => "dropdown",
							"heading" => esc_html__( "Type", 'hotella' ),
							"param_name" => "type",
							"value" => array(
								"Info"=>"info",
								"Success"=>"success",
								"Warning"=>"warning",
								"Danger"=>"danger",
								
						),
						"description" => esc_html__( "Alert Type", 'hotella')
						),
						array(
							"type" => "checkbox",
							"heading" => esc_html__( "Has Close?", 'hotella' ),
							"param_name" => "close",
							"value" => array('Yes please'=>'true'),
							"description" => esc_html__( "Has Close Button?", 'hotella')
						),
						array(
							"type" => "textarea_html",
							"heading" => esc_html__( "Alert Content", 'hotella' ),
							"param_name" => "content",
							"value"=>"Content goes here",
							"description" => esc_html__( "Contet Goes Here", 'hotella')
						),
						
           
        ),
		
        
    ) );


?>