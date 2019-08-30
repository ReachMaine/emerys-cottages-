<?php
$hotella_webnus_options = hotella_webnus_options();
$user = isset($hotella_webnus_options['hotella_webnus_footer_instagram_username']) ? $hotella_webnus_options['hotella_webnus_footer_instagram_username'] : '' ;
$acess = isset($hotella_webnus_options['hotella_webnus_footer_instagram_access']) ? $hotella_webnus_options['hotella_webnus_footer_instagram_access']  : '' ;
?>
<section class="footer-instagram-bar">
<div class="container"><div class="row">
<div class="footer-instagram-text"><h6><?php bloginfo('name') . esc_html_e(' on Instagram','hotella')?></h6></div>
</div></div>
	<div class="instagram-feed">
		<?php 
		$base_url =  "https://api.instagram.com/v1/users/search?q=". $user ."&access_token=". $acess ."&count=1&callback=?";
		$raw_content = wp_remote_get(esc_url_raw($base_url));
		if(!is_wp_error($raw_content)){
			$raw_content = $raw_content['body'];
			$json_insta = json_decode($raw_content);
			if (isset($json_insta->data[0])){
			   $id = $json_insta->data[0]->id;
			}				
			if(!empty($id)){
				$url = "https://api.instagram.com/v1/users/". $id ."/media/recent/?access_token=". $acess ."&count=8&callback=?";
				$raw_content = wp_remote_get(esc_url_raw($url));
				$output = '';
				if(!is_wp_error($raw_content)){
					$output .= '<ul>';	
					$raw_content = $raw_content['body'];
					$json_insta = json_decode($raw_content);
					if (isset($json_insta->data[0])){
					foreach($json_insta->data as $data){		
						$output .= '<li><a href="'.esc_url($data->link).'" target="_blank"><img alt="" src="'.esc_url($data->images->low_resolution->url).'"/></a></li>';	
					}
				}
					$output .= '</ul>';	
					echo '' . $output;
				}
			}
		}
		else esc_html_e('An error has occoured...','hotella');
		?>
		<div class="clear"></div>
	</div>	
</section>