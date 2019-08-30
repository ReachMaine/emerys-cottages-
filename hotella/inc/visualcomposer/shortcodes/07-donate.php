<?php
$cf7 = get_posts( 'post_type="wpcf7_contact_form"&numberposts=-1' );
	$contact_forms = array();
	if ( $cf7 ) {
		foreach ( $cf7 as $cform ) {
			$contact_forms[ $cform->post_title ] = $cform->ID;
		}
	} else {
		$contact_forms[ esc_html__( 'No contact forms found', 'hotella' ) ] = 0;
	}

vc_map( array(
        "name" =>"Donate Button",
        "base" => "donate",
        "description" => "Donate Button",
        "category" => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        "icon" => "webnus_button",
        "params" => array(
						array(
						"type" => "textarea",
						"heading" => esc_html__( "Content", 'hotella' ),
						"param_name" => "donate_content",
						"value"=>'',
						"description" => esc_html__( "Button Text Content", 'hotella')
						),
												
						array(
							'type' => 'dropdown',
							'heading' => esc_html__( 'Select contact form', 'hotella' ),
							'param_name' => 'id',
							'value' => $contact_forms,
							'description' => esc_html__( 'Choose previously created contact form from the drop down list.', 'hotella' )
						),

						array(
						"type" => "dropdown",
						"heading" => esc_html__( "Color", 'hotella' ),
						"param_name" => "color",
						"value" => array(
							"Green"=>"green",
							"Red"=>"red",
							"Blue"=>"blue",
							"Gray"=>"gray",
							"Dark gray"=>"dark-gray",
							"Cherry"=>"cherry",
							"Orchid"=>"orchid",
							"Pink"=>"pink",
							"Orange"=>"orange",
							"Teal"=>"teal",
							"SkyBlue"=>"skyblue",
							"Jade"=>"jade",
							"White"=>"white",
							"Black"=>"black",
						),
						"description" => esc_html__( "Button Color", 'hotella')
						),
												
						array(
						"type" => "dropdown",
						"heading" => esc_html__( "Size", 'hotella' ),
						"param_name" => "size",
						"value" => array(
							"Small"=>"small",
							"Medium"=>"medium",
							"Large"=>"large",
							
						),
						"description" => esc_html__( "Button Size", 'hotella')
						),

						array(
						"type" => "dropdown",
						"heading" => esc_html__( "Bordered?", 'hotella' ),
						"param_name" => "border",
						"value"=>array('Normal'=>'false','Bordered'=>'true'),
						"description" => esc_html__( "Is button bordered?", 'hotella')
						),
						array(
						"type" => "iconfonts",
						"heading" => esc_html__( "Icon", 'hotella' ),
						"param_name" => "icon",
						"value"=>'',
						"description" => esc_html__( "Select Button Icon", 'hotella')
						),
				
        ),
		
        
    ) );


?>