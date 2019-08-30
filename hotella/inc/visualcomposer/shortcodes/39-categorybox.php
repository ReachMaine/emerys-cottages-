<?php

$categories = array();

$categories = get_categories();

$category_slug_array = array();
$category_slug_array[] = 'Entire Categories';
foreach($categories as $category)
{
	$category_slug_array[] = $category->slug;
}
vc_map( array(
        'name' =>'Category Box',
        'base' => 'categorybox',
		"description" => "Show Categorybox, By category filter",
        "icon" => "webnus_categorybox",
        'params'=>array(
					
					
				array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Category', 'hotella' ),
						'param_name' => 'category',
						'value'=>$category_slug_array,
						'description' => esc_html__( 'Select specific category', 'hotella')
				),
				array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Title', 'hotella' ),
						'param_name' => 'title',
						'value'=> '',
						'description' => esc_html__( 'Set title', 'hotella')
				),
				array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Show title', 'hotella' ),
						'param_name' => 'show_title',
						'value'=>array('Show'=>'true','Hide'=>'false'),
						'description' => esc_html__( 'Show/Hide title', 'hotella')
				),
				array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Posts count', 'hotella' ),
						'param_name' => 'post_count',
						'value'=>'5',
						'description' => esc_html__( 'How many posts to dispaly?', 'hotella')
				),
				array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Show date', 'hotella' ),
						'param_name' => 'show_date',
						'value'=>array('Show'=>'true','Hide'=>'false'),
						'description' => esc_html__( 'Show/Hide date', 'hotella')
				),
					
				array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Show category', 'hotella' ),
						'param_name' => 'show_category',
						'value'=>array('Show'=>'true','Hide'=>'false'),
						'description' => esc_html__( 'Show/Hide category', 'hotella')
				),
				array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Show author', 'hotella' ),
						'param_name' => 'show_author',
						'value'=>array('Show'=>'true','Hide'=>'false'),
						'description' => esc_html__( 'Show/Hide author', 'hotella')
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

		),
		'category' => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        
    ) );
?>