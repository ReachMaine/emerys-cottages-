<?php class WebnusAboutWidget extends WP_Widget{
	function __construct(){
		$params = array('description'=> 'Webnus About Widget','name'=> 'Webnus-About');
		parent::__construct('WebnusAboutWidget', '', $params);
	}
	public function form($instance){
		extract($instance);	?>
		<p><label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>"><?php esc_html_e('Title:','hotella'); ?></label><input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" value="<?php if( isset($title) )  echo esc_attr($title); ?>"	/></p>
		<p><label for="<?php echo esc_attr( $this->get_field_id('Name') ); ?>"><?php esc_html_e('Name:','hotella'); ?></label><input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('name') ); ?>" name="<?php echo esc_attr( $this->get_field_name('name') ); ?>" value="<?php if( isset($name) )  echo esc_attr($name); ?>" /></p>
		<p><label for="<?php echo esc_attr( $this->get_field_id('imageurl') ); ?>"><?php esc_html_e('Image URL:','hotella'); ?></label><input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id('imageurl') ); ?>" name="<?php echo esc_attr( $this->get_field_name('imageurl') ); ?>" value="<?php if( isset($imageurl) )  echo esc_attr($imageurl); ?>" /></p>
		<p><label for="<?php echo esc_attr( $this->get_field_id('description') ); ?>"><?php esc_html_e('Description:','hotella'); ?></label><textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id('description') ); ?>" name="<?php echo esc_attr( $this->get_field_name('description') ); ?>"><?php if( isset($description) )  echo esc_attr($description); ?></textarea></p>
		<?php 
	}
	public function widget($args, $instance){
		extract($args);
		extract($instance);
		echo '' . $before_widget;
		if(!empty($title))
			echo '' . $before_title.esc_html($title).$after_title;
		?>
		<div class="webnus-about">
		<?php 
		if(!empty($imageurl))
			echo '<img alt="" src="'.$imageurl.'" />';
		if(!empty($name))
			echo '<h4>'.$name.'</h4>';
		if(!empty($description))
			echo '<p>'.$description.'</p>';
		?>
		<div class="clear"></div>
		</div>	 
		<?php echo '' . $after_widget;
	} 
}
add_action('widgets_init','register_hotella_webnus_about_widget'); 
function register_hotella_webnus_about_widget(){
	register_widget('WebnusAboutWidget');
}