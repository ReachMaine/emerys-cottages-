<?php
vc_map( array(
        'name' =>'Post From Blog',
        'base' => 'postblog',
        "icon" => "webnus_postfromblog",
		"description" => "Single Post",
        'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        'params' => array(
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Post ID', 'hotella' ),
							'param_name' => 'post',
							'value'=>'',
							'description' => esc_html__( 'Pick up the ID & fallow this instruction: admin panel > posts > ID column.', 'hotella')
						), 
					),    
		) );
?>