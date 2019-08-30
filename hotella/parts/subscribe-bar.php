<?php
$hotella_webnus_options = hotella_webnus_options();
echo '<section class="footer-subscribe-bar"><div class="container"><div class="row">';
$type = isset($hotella_webnus_options['hotella_webnus_footer_subscribe_type']) ? $hotella_webnus_options['hotella_webnus_footer_subscribe_type'] : '' ;
$hotella_webnus_options['hotella_webnus_footer_feedburner_id'] = isset($hotella_webnus_options['hotella_webnus_footer_feedburner_id']) ? $hotella_webnus_options['hotella_webnus_footer_feedburner_id'] : '' ;
$hotella_webnus_options['hotella_webnus_footer_mailchimp_url'] = isset($hotella_webnus_options['hotella_webnus_footer_mailchimp_url']) ? $hotella_webnus_options['hotella_webnus_footer_mailchimp_url'] : '' ;
$hotella_webnus_options['hotella_webnus_footer_subscribe_text'] = isset($hotella_webnus_options['hotella_webnus_footer_subscribe_text']) ? $hotella_webnus_options['hotella_webnus_footer_subscribe_text'] : '' ;
$feedburner_id = esc_html($hotella_webnus_options['hotella_webnus_footer_feedburner_id']);
$mailchimp_url = esc_url($hotella_webnus_options['hotella_webnus_footer_mailchimp_url']);
$subscribe_text = esc_html($hotella_webnus_options['hotella_webnus_footer_subscribe_text']);
if($type =='FeedBurner'){ 
	$email_name='email';
	echo '<form class="footer-subscribe-form" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onSubmit="window.open(\'http://feedburner.google.com/fb/a/mailverify?uri='.$feedburner_id.'\', \'popupwindow\', \'scrollbars=yes,width=550,height=520\');return true"><input type="hidden" value="'.$feedburner_id.'" name="uri"/><input type="hidden" name="loc" value="en_US"/>';
}else{ 
	$email_name='MERGE0';
	echo '<form class="footer-subscribe-form" action="'.$mailchimp_url.'" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">';
}
echo '
	<div class="footer-subscribe-text col-sm-7">
		<h6>'.esc_html__("We'll send you news and offers twice a month.",'hotella').'<span></span></h6>
		<p>'.$subscribe_text.'</p>
	</div>
	<div class="col-sm-5">
		<input placeholder="'.esc_html__('Enter Your Email','hotella').'" class="footer-subscribe-email" type="text" name="'.$email_name.'"/>
		<button class="footer-subscribe-submit" type="submit">'.esc_html__('Join ','hotella').'</button>
	</div>
	</form></div></div></section>';
?>