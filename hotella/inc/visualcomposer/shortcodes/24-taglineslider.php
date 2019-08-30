<?php

vc_map( array(
        "name" =>"Tagline Slider",
        "base" => "taglineslider",
		"description" => "Taglines for MaxSlider",
        "category" => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        "icon" => "icon-wpb-taglineslider",
        "params" => array(
						
						array(
							"type" => "textarea_html",
							"heading" => esc_html__( "Taglines", 'hotella' ),
							"param_name" => "content",
							"value" => '[tagline]We are [span]creative[/span][/tagline][tagline]We are [span]smart[/span][/tagline]',
							"description" => esc_html__( "Enter the taglines", 'hotella')
						),
						
           
        ),
		
        		'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ),
    ) );


?>