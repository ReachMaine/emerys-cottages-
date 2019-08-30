<?php
vc_map( array(
        'name' =>'Webnus Subscribe',
        'base' => 'subscribe',
        "icon" => "subscribe",
		"description" => "Subscribe box",
        'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        'params' => array(
						array(
							"type" => "dropdown",
							"heading" => esc_html__( "Type", 'hotella' ),
							"param_name" => "type",
							"value" => array(
								"Boxed"=>"boxed",
								"Bar"=>"bar1",
								"Flat"=>"flat",
							),
							"description" => esc_html__( "Select style type", 'hotella')
						),
						array(
								'type' => 'textfield',
								'heading' => esc_html__( 'Title', 'hotella' ),
								'param_name' => 'box_title',
								'value'=>'',
								'description' => esc_html__( 'Subscribe title', 'hotella'),
						),							
					
					    array(
							"type"=>'textarea',
							"param_name"=> "box_text",
							"heading"=>esc_html__('Subscribe Text', 'hotella'),
							"value"=>"",
							"description" => esc_html__( "Subscribe content", 'hotella')	
						),
						
						array(
							"type" => "dropdown",
							'heading' => esc_html__( 'Email Service', 'hotella' ),
							'param_name' => 'service',
							"value" => array(
								"FeedBurner"=>"FeedBurner",
								"MailChimp"=>"MailChimp",
							),
							'description' => esc_html__( 'FeedBurner or MailChimp', 'hotella')
						), 
						
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'FeedBurner ID', 'hotella' ),
							'param_name' => 'feedburner_id',
							'value'=>'',
							'description' => esc_html__( 'Feedburner ID', 'hotella'),
							"dependency" => array('element'=>'service','value'=>array('FeedBurner')),
						),	
					
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'MailChimp URL', 'hotella' ),
							'param_name' => 'mailchimp_url',
							'value'=>'',
							'description' => esc_html__( 'Mailchimp form action URL', 'hotella'),
							"dependency" => array('element'=>'service','value'=>array('MailChimp')),
						),	

						
						
					),    
		) );
?>