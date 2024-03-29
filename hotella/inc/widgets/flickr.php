<?php include_once str_replace("\\","/",get_template_directory()).'/inc/init.php';
class YFlickr extends WP_Widget{
function __construct(){
		$params = array('description'=> 'Your recent photos from flickr will be displayed',	'name'=> 'Webnus-Flickr');
		parent::__construct('YFlickr', '', $params);
	}
	public function form($instance){
		extract($instance);
		?>
		<p><label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>"><?php esc_html_e('Title:','hotella') ?></label><input type="text" class="widefat"	id="<?php echo esc_attr( $this->get_field_id('title') ); ?>"	name="<?php echo esc_attr( $this->get_field_name('title') ); ?>"	value="<?php if( isset($title) )  echo esc_attr($title); ?>" /></p><p>
		<label for="<?php echo esc_attr( $this->get_field_id('flickr') ); ?>"><?php esc_html_e('Flickr Script:','hotella') ?></label><textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id('flickr') ); ?>" name="<?php echo esc_attr( $this->get_field_name('flickr') ); ?>"><?php if( isset($flickr) )  echo esc_attr($flickr); ?></textarea></p>
		<?php 
	}
	public function widget($args, $instance){
		extract($args);
		extract($instance);
		echo '' . $before_widget;
		if(!empty($title))
			echo '' . $before_title.esc_html($title).$after_title;	?>
		<div class="flickr-feed">
		<?php echo '' . $flickr ?>
		<div class="clear"></div>
		</div>	 
		<?php echo '' . $after_widget;
	} 
}
add_action('widgets_init','register_hotella_webnus_yflicker'); 
function register_hotella_webnus_yflicker(){
	register_widget('YFlickr');
}