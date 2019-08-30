<?php include_once str_replace("\\","/",get_template_directory()).'/inc/init.php';
	class WebnusSocialWidget extends WP_Widget{
	function __construct(){
		$params = array('description'=> 'Display your social icons','name'=> 'Webnus-Social Icons');
		parent::__construct('WebnusSocialWidget', '', $params);
	}
	public function form($instance){
		extract($instance);	?>
		<p><label for="<?php echo esc_attr( $this->get_field_id('title') ) ?>"><?php esc_html_e('Title:','hotella') ?></label><input type="text" class="widefat"	id="<?php echo esc_attr( $this->get_field_id('title') ) ?>"	name="<?php echo esc_attr( $this->get_field_name('title') ) ?>"	value="<?php if( isset($title) )  echo esc_attr($title); ?>" /></p>
	<?php 
	}
	public function widget($args, $instance){
		extract($args);
		extract($instance);
		echo '' . $before_widget;
		if(!empty($title))
			echo '' . $before_title.esc_html($title).$after_title; ?>
			<div class="socialfollow">
			<?php
			$social = array();
			$hotella_webnus_options = hotella_webnus_options();
			$hotella_webnus_options['hotella_webnus_social_first'] = isset($hotella_webnus_options['hotella_webnus_social_first']) ? $hotella_webnus_options['hotella_webnus_social_first'] : '' ;
			$hotella_webnus_options['hotella_webnus_social_second'] = isset($hotella_webnus_options['hotella_webnus_social_second']) ? $hotella_webnus_options['hotella_webnus_social_second'] : '' ;
			$hotella_webnus_options['hotella_webnus_social_third'] = isset($hotella_webnus_options['hotella_webnus_social_third']) ? $hotella_webnus_options['hotella_webnus_social_third'] : '' ;
			$hotella_webnus_options['hotella_webnus_social_fourth'] = isset($hotella_webnus_options['hotella_webnus_social_fourth']) ? $hotella_webnus_options['hotella_webnus_social_fourth'] : '' ;
			$hotella_webnus_options['hotella_webnus_social_fifth'] = isset($hotella_webnus_options['hotella_webnus_social_fifth']) ? $hotella_webnus_options['hotella_webnus_social_fifth'] : '' ;
			$hotella_webnus_options['hotella_webnus_social_sixth'] = isset($hotella_webnus_options['hotella_webnus_social_sixth']) ? $hotella_webnus_options['hotella_webnus_social_sixth'] : '' ;
			$hotella_webnus_options['hotella_webnus_social_seventh'] = isset($hotella_webnus_options['hotella_webnus_social_seventh']) ? $hotella_webnus_options['hotella_webnus_social_seventh'] : '' ;
			$hotella_webnus_options['hotella_webnus_social_first_url'] = isset($hotella_webnus_options['hotella_webnus_social_first_url']) ? $hotella_webnus_options['hotella_webnus_social_first_url'] : '' ;
			$hotella_webnus_options['hotella_webnus_social_second_url'] = isset($hotella_webnus_options['hotella_webnus_social_second_url']) ? $hotella_webnus_options['hotella_webnus_social_second_url']  : '' ; 
			$hotella_webnus_options['hotella_webnus_social_third_url'] = isset($hotella_webnus_options['hotella_webnus_social_third_url']) ? $hotella_webnus_options['hotella_webnus_social_third_url'] : '' ;
			$hotella_webnus_options['hotella_webnus_social_fourth_url'] = isset($hotella_webnus_options['hotella_webnus_social_fourth_url']) ? $hotella_webnus_options['hotella_webnus_social_fourth_url'] : '' ;
			$hotella_webnus_options['hotella_webnus_social_fifth_url'] = isset($hotella_webnus_options['hotella_webnus_social_fifth_url']) ? $hotella_webnus_options['hotella_webnus_social_fifth_url'] : '' ;
			$hotella_webnus_options['hotella_webnus_social_sixth_url'] = isset($hotella_webnus_options['hotella_webnus_social_sixth_url']) ? $hotella_webnus_options['hotella_webnus_social_sixth_url'] : '' ;
			$hotella_webnus_options['hotella_webnus_social_seventh_url'] = isset($hotella_webnus_options['hotella_webnus_social_seventh_url']) ? $hotella_webnus_options['hotella_webnus_social_seventh_url'] : '' ;
			
			$social[1] = strtolower(trim($hotella_webnus_options['hotella_webnus_social_first']));
			$social[2] = strtolower(trim($hotella_webnus_options['hotella_webnus_social_second']));
			$social[3] = strtolower(trim($hotella_webnus_options['hotella_webnus_social_third']));
			$social[4] = strtolower(trim($hotella_webnus_options['hotella_webnus_social_fourth']));
			$social[5] = strtolower(trim($hotella_webnus_options['hotella_webnus_social_fifth']));
			$social[6] = strtolower(trim($hotella_webnus_options['hotella_webnus_social_sixth']));
			$social[7] = strtolower(trim($hotella_webnus_options['hotella_webnus_social_seventh']));
			$social_url = array();
			$social_url[1] = trim($hotella_webnus_options['hotella_webnus_social_first_url']);
			$social_url[2] = trim($hotella_webnus_options['hotella_webnus_social_second_url']);
			$social_url[3] = trim($hotella_webnus_options['hotella_webnus_social_third_url']);
			$social_url[4] = trim($hotella_webnus_options['hotella_webnus_social_fourth_url']);
			$social_url[5] = trim($hotella_webnus_options['hotella_webnus_social_fifth_url']);
			$social_url[6] = trim($hotella_webnus_options['hotella_webnus_social_sixth_url']);
			$social_url[7] = trim($hotella_webnus_options['hotella_webnus_social_seventh_url']);
			for ($x = 1; $x <= 7; $x++) {
				echo($social[$x] && $social_url[$x])?'<a target="_blank" href="'. $social_url[$x] .'" class="'.$social[$x].'"><i class="fa-'.$social[$x].'"></i></a>':'';
			} 
			?>
			</div>	 
		  <?php echo '' . $after_widget;
	} 
}
add_action('widgets_init','register_hotella_webnus_social_widget'); 
function register_hotella_webnus_social_widget(){
	register_widget('WebnusSocialWidget');
}