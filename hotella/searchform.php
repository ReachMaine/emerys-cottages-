<?php
	$hotella_webnus_options = hotella_webnus_options();
	$hotella_webnus_options['hotella_webnus_enable_livesearch'] = isset($hotella_webnus_options['hotella_webnus_enable_livesearch']) ? $hotella_webnus_options['hotella_webnus_enable_livesearch'] : '' ;
	$live_search = ($hotella_webnus_options['hotella_webnus_enable_livesearch'] == 1)?'live-search':'';
?>

<form role="search" action="<?php echo esc_url(home_url( '/' )); ?>" method="get" >
 <div>
   <input name="s" type="text" placeholder="<?php esc_html_e('Enter Keywords...','hotella'); ?>" class="search-side <?php echo esc_attr($live_search) ?>" >
   <input type="submit" id="searchsubmit" value="Search" class="btn" />
</div>
</form>