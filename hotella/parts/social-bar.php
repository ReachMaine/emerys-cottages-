<section class="footer-social-bar"><div class="container"><div class="row"><ul class="footer-social-items">
	<?php
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
	
	$social = array();
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
		echo($social[$x] && $social_url[$x])?'<li><a target="_blank" href="'. $social_url[$x] .'" class="'.$social[$x].'"><i class="fa-'.$social[$x].'"></i><div><strong>'.$social[$x].'</strong><span>'.esc_html__('Join us on ','hotella').$social[$x].'</span></div></a></li>':'';
	} ?>
</ul></div></div></section>