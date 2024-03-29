<?php
vc_map( array(
	'name' =>'Webnus Blog',
	'base' => 'blog',
	"description" => "Blog Loop",
	'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ),
	"icon" => "webnus_blog",
	'params'=>array(
	
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Type", 'hotella' ),
			"param_name" => "type",
			"value" => array(
				"Large Posts"=>"1",
				"List Posts"=>"2",							
				"Grid Posts"=>"3",							
				"First Large then List"=>"4",							
				"First Large then Grid"=>"5",							
				"Masonry"=>"6",		
				"Timeline"=>"7",	
			),						
			"description" => esc_html__( "Type", 'hotella')
		),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Category', 'hotella' ),
			'param_name' => 'category',
			'value'=>$category_slug_array,
			'description' => esc_html__( 'Select specific category, leave blank to show all categories.', 'hotella')
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Post Count', 'hotella' ),
			'param_name' => 'count',
			'value' => '',
			'description' => esc_html__( 'Number of post(s) to show', 'hotella')
		),

		array(
			'heading'		=> esc_html__( 'Order By', 'hotella' ),
			'type'			=> 'dropdown',
			'param_name'	=> 'orderby',
			'value'			=> array(
				esc_html__( 'Date (Latest Posts)', 'hotella' ) => 'date',
				esc_html__( 'Popular posts: Comment Count', 'hotella' ) => 'comment_count',
				esc_html__( 'Popular posts: View Count', 'hotella' ) => 'view_count',
				esc_html__( 'Popular Posts: Social Score', 'hotella' ) => 'social_score',
			),
			'description' => esc_html__( 'If you use "Social Post Score" type, then Social Metrics Tracker plugin must be activated via Apperance > Install Plugins.', 'hotella')
		),

	)  
) );