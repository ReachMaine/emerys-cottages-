<?php
// Add menu
function webnus_admin_page() {
	$webnus_theme = wp_get_theme();
	$theme_name = $webnus_theme->get( 'Name' );
	$page_title = $theme_name.' page';
	$menu_title = $theme_name;
	$capability = 'edit_theme_options';
	$menu_slug  = $theme_name.'-page';
	$function	= 'webnus_welcome';
	add_theme_page($page_title, $menu_title, $capability, $menu_slug, $function);
}
add_action('admin_menu', 'webnus_admin_page');

// Redirect to welcome page
global $pagenow;
if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) {
	$webnus_theme = wp_get_theme();
	$theme_name = $webnus_theme->get( 'Name' );
	wp_redirect(admin_url("themes.php?page=$theme_name-page"));
}

// Content
function webnus_welcome(){
	$webnus_theme = wp_get_theme();
	$theme_version = $webnus_theme->get( 'Version' );
	$theme_name = $webnus_theme->get( 'Name' );
	$mem_limit = ini_get('memory_limit');
	$mem_limit_byte = wp_convert_hr_to_bytes($mem_limit);
	$upload_max_filesize = ini_get('upload_max_filesize');
	$upload_max_filesize_byte = wp_convert_hr_to_bytes($upload_max_filesize);
	$post_max_size = ini_get('post_max_size');
	$post_max_size_byte = wp_convert_hr_to_bytes($post_max_size);
	$mem_limit_byte_boolean = ($mem_limit_byte < 268435456);
	$upload_max_filesize_byte_boolean = ($upload_max_filesize_byte < 67108864);
	$post_max_size_byte_boolean = ($post_max_size_byte < 67108864);
	$execution_time = ini_get('max_execution_time');
	$execution_time_boolean = ($execution_time < 300);
	$input_vars = ini_get('max_input_vars');
	$input_vars_boolean = ($input_vars < 2000);
	$input_time = ini_get('max_input_time');
	$input_time_boolean = ($input_time < 1000);
	// $change_log = get_template_directory().'/Change_log.txt';
	$theme_name_lowercase = strtolower($theme_name).'_webnus_theme_options';
	$theme_option_address = admin_url("themes.php?page=$theme_name_lowercase");

	$keyses = array(
    'a' => array(
        'href' => array(),
        'title' => array(),
		'target' => array(),
    ),
    'br' => array(),
    'em' => array(),
    'strong' => array(),
	'code' => array(
		'class' => array(),
	),
	'p' => array(
		'class' => array(),
	),
	);
	ob_start();
	?>
	<div id="webnus-dashboard" class="wrap about-wrap">
		<div class="welcome-head w-clearfix">
			<div class="w-row">
				<div class="w-col-sm-10">
					<h1> <?php echo esc_html__('Welcome to','hotella') .' '.$theme_name.'!'; ?> </h1>
					<div class="w-welcome">
						<p><?php echo esc_html( $theme_name ) . ' ' . esc_html__('is now installed and ready to use! Get ready to build something beautiful.','hotella') ?></p>
					</div>
				</div>
				<div class="w-col-sm-2">
					<img src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" />
					<span class="w-theme-version"><?php echo esc_html__('Version','hotella'); ?> <?php echo '' . $theme_version; ?></span>
				</div>
			</div>
		</div>
		<div class="welcome-content w-clearfix">
			<div class="w-row">
				<div class="w-col-sm-12">
					<h3> <?php echo esc_html__('To use the theme in best way, we suggest importing the demo first. please read below steps To install Theme and  import Dummy data:','hotella'); ?> </h3>
				</div>
			</div>
			<div class="w-row">
				<div class="w-col-sm-6">
					<div class="w-box plugin">
						<div class="w-box-head">
							<span> 1 </span> <?php echo esc_html__('Install Plugins','hotella'); ?>
						</div>
						<div class="w-box-content">
							<?php esc_html_e('These are plugins we include or offer for design integration with Hotella. Webnus Core, Webnus Gallery, WP PageNavi, Visual Composer and Contact Form 7 are required plugins to use Hotella. To install All plugins, click on "Install Plugins" button.' , 'hotella'); ?>
							<div class="w-system-info">
								<span> <?php esc_html_e('Visual Composer','hotella'); ?> </span>
								<?php
								if(!is_plugin_active('js_composer/js_composer.php')){ ?>
									<i class="w-icon w-icon-red ti-close"></i> <span class="w-current"> <?php esc_html_e('Not Active','hotella') ?> </span>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php esc_html_e('Active','hotella') ?></span>
								<?php } ?>
							</div>
							<div class="w-system-info">
								<span> <?php esc_html_e('Webnus Core','hotella'); ?> </span>
								<?php
								if(!is_plugin_active('webnus-core/webnus-core.php')){ ?>
									<i class="w-icon w-icon-red ti-close"></i> <span class="w-current"> <?php esc_html_e('Not Active','hotella') ?></span>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php esc_html_e('Active','hotella') ?></span>
								<?php } ?>
							</div>
							<div class="w-system-info">
								<span> <?php echo esc_html__('Webnus Gallery','hotella'); ?> </span>
								<?php
								if(!is_plugin_active('webnus-gallery/webnus-gallery.php')){ ?>
									<i class="w-icon w-icon-red ti-close"></i> <span class="w-current"> <?php esc_html_e('Not Active','hotella') ?></span>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php esc_html_e('Active','hotella') ?></span>
								<?php } ?>
							</div>
							<div class="w-system-info">
								<span> <?php echo esc_html__('WP PageNavi','hotella'); ?> </span>
								<?php
								if(!is_plugin_active('wp-pagenavi/wp-pagenavi.php')){ ?>
									<i class="w-icon w-icon-red ti-close"></i> <span class="w-current"> <?php esc_html_e('Not Active','hotella')?></span>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php esc_html_e('Active','hotella')?></span>
								<?php } ?>
							</div>
							<div class="w-system-info">
								<span> <?php echo esc_html__('Contact Form 7','hotella'); ?> </span>
								<?php
								if(!is_plugin_active('contact-form-7/wp-contact-form-7.php')){ ?>
									<i class="w-icon w-icon-red ti-close"></i> <span class="w-current"> <?php esc_html_e('Not Active','hotella')?></span>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php esc_html_e('Active','hotella')?></span>
								<?php } ?>
							</div>
							<div class="w-system-info">
								<span> <?php echo esc_html__('Revolution Slider','hotella'); ?> </span>
								<?php
								if(!is_plugin_active('revslider/revslider.php')){ ?>
									<i class="w-icon w-icon-red ti-close"></i> <span class="w-current"> <?php esc_html_e('Not Active','hotella')?></span>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php esc_html_e('Active','hotella')?></span>
								<?php } ?>
							</div>
							<div class="w-button">
								<a href="<?php echo admin_url("themes.php?page=tgmpa-install-plugins") ?>" target="_blank"><?php esc_html_e('Install Plugins','hotella'); ?></a>
							</div>
						</div>
					</div>
				</div>
				<div class="w-col-sm-6">
					<div class="w-box">
						<div class="w-box-head">
							<span> 2 </span> <?php esc_html_e('Import Dummy','hotella'); ?>
						</div>
						<div class="w-box-content">
							<?php esc_html_e('When you install a demo it provides pages, images, theme options, posts, slider, widgets and etc. IMPORTANT: before installing a demo you need to install and activate included plugins. Please check below status to see if your server meets all essential requirements for a successful import.','hotella') ?>
							<div class="w-system-info">
								<span> <?php esc_html_e('WP Memory Limit','hotella'); ?> </span>
								<?php
								$wp_memory_limit = WP_MEMORY_LIMIT;
								$wp_memory_limit_value = preg_replace("/[^0-9]/", '', $wp_memory_limit);
								if( $wp_memory_limit_value < 256 ){ ?>
									<i class="w-icon w-icon-red ti-close"></i> <span class="w-current"> <?php echo esc_html__('Currently:','hotella').' '.$wp_memory_limit ?> </span>
									<span class="w-min"> <?php esc_html_e('(min:256M)','hotella') ?> </span>
									<label class="hero button" for="wp-memory-limit"> <?php esc_html('How to fix it','hotella') ?> </label>
									<aside class="lightbox">
										<input type="checkbox" class="state" id="wp-memory-limit" />
										<article class="content">
											<header class="header">
												<label class="button" for="wp-memory-limit"><i class="ti-close"></i></label>
											</header>
											<main class="main">
												<p class="red"> <?php esc_html_e( 'We recommend setting memory to at least 256MB. Please define memory limit in wp-config.php file. you can read below link for more information:' , 'hotella' ) ?></p>
												<a href="https://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP" target="_blank"> <?php esc_html_e( 'Increasing Wp Memory Limit' , 'hotella' ) ?> </a>
											</main>
										</article>
										<label class="backdrop" for="wp-memory-limit"></label>
									</aside>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php echo esc_html__('Currently:','hotella').' '.$wp_memory_limit; ?> </span>
								<?php } ?>
							</div>
							<div class="w-system-info">
								<span> <?php esc_html_e('Upload Max. Filesize','hotella') ?> </span>
								<?php
								if($upload_max_filesize_byte_boolean){ ?>
									<i class="w-icon w-icon-red ti-close"></i> <span class="w-current"> <?php echo esc_html__('Currently:','hotella').' '.$upload_max_filesize; ?> </span>
									<span class="w-min"> <?php esc_html_e('(min:64M)','hotella') ?> </span>
									<label class="hero button" for="php-upload-size"> <?php esc_html_e('How to fix it','hotella') ?> </label>
									<aside class="lightbox">
										<input type="checkbox" class="state" id="php-upload-size" />
										<article class="content">
											<header class="header">
												<label class="button" for="php-upload-size"><i class="ti-close"></i></label>
											</header>
											<main class="main">
												<p class="red"> <?php esc_html_e( 'We recommend setting Upload Max. Filesize to at least 64MB. you can read below link for more information:' , 'hotella' ) ?></p>
												<a href="https://premium.wpmudev.org/blog/increase-memory-limit/?ench=b&utm_expid=3606929-78.ZpdulKKETQ6NTaUGxBaTgQ.1&utm_referrer=https%3A%2F%2Fpremium.wpmudev.org%2Fblog%2F%3Fench%3Db%26s%3Dmemory_limit" target="_blank"> <?php esc_html_e( 'Increasing Upload Max. Filesize' , 'hotella' ) ?></a><br>
											</main>
										</article>
										<label class="backdrop" for="php-upload-size"></label>
									</aside>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php echo esc_html__('Currently:','hotella').' '.$upload_max_filesize; ?> </span>
								<?php } ?>
							</div>
							<div class="w-system-info">
								<span> <?php esc_html_e('Max. Post Size','hotella') ?> </span>
								<?php
								if($post_max_size_byte_boolean){ ?>
									<i class="w-icon w-icon-red ti-close"></i> <span class="w-current"> <?php echo esc_html__('Currently:','hotella').' '.$post_max_size; ?> </span>
									<span class="w-min"> <?php esc_html_e('(min:64M)','hotella') ?> </span>
									<label class="hero button" for="php-post-upload-size"> <?php esc_html_e('How to fix it','hotella') ?> </label>
									<aside class="lightbox">
										<input type="checkbox" class="state" id="php-post-upload-size" />
										<article class="content">
											<header class="header">
												<label class="button" for="php-post-upload-size"><i class="ti-close"></i></label>
											</header>
											<main class="main">
												<p class="red"> <?php esc_html_e( 'We recommend setting Max. Post Size to at least 64MB. you can read below link for more information:' , 'hotella' ) ?> </p>
												<a href="https://premium.wpmudev.org/blog/increase-memory-limit/?ench=b&utm_expid=3606929-78.ZpdulKKETQ6NTaUGxBaTgQ.1&utm_referrer=https%3A%2F%2Fpremium.wpmudev.org%2Fblog%2F%3Fench%3Db%26s%3Dmemory_limit" target="_blank">Increasing Max. Post Size</a><br>
											</main>
										</article>
										<label class="backdrop" for="php-post-upload-size"></label>
									</aside>
								<?php }else{ ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php echo esc_html__('Currently:','hotella').' '.$post_max_size; ?> </span>
								<?php } ?>
							</div>
							<div class="w-system-info">
								<span> <?php esc_html_e('Max. Execution Time','hotella'); ?> </span>
								<?php
								if($execution_time_boolean){ ?>
									<i class="w-icon w-icon-red ti-close"></i>
									<span class="w-current"> <?php echo esc_html('Currently:','hotella').' '.$execution_time; ?> </span>
									<span class="w-min"> <?php esc_html_e('(min:300)','hotella') ?> </span>
									<label class="hero button" for="execution-time"> <?php esc_html_e('How to fix it','hotella') ?> </label>
									<aside class="lightbox">
										<input type="checkbox" class="state" id="execution-time" />
										<article class="content">
											<header class="header">
												<label class="button" for="execution-time"><i class="ti-close"></i></label>
											</header>
											<main class="main">
												<p class="red"> <?php esc_html_e( 'We recommend setting max execution time to at least 300. you can read below link for more information:' , 'hotella' ) ?> </p>
												<a href="http://codex.wordpress.org/Common_WordPress_Errors#Maximum_execution_time_exceeded" target="_blank"> <?php esc_html_e( 'Increasing Max. Execution Time' , 'hotella' ) ?> </a>
											</main>
										</article>
										<label class="backdrop" for="execution-time"></label>
									</aside>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php echo esc_html__('Currently:','hotella').' '.$execution_time; ?> </span>
								<?php } ?>
							</div>
							<div class="w-system-info">
								<span> <?php esc_html_e('PHP Max. Input Vars','hotella') ?> </span>
								<?php
								if($input_vars_boolean){ ?>
									<i class="w-icon w-icon-red ti-close"></i>
									<span class="w-current"> <?php echo esc_html__('Currently:','hotella').' '.$input_vars; ?> </span>
									<span class="w-min"> <?php esc_html_e('(min:2000)','hotella') ?> </span>
									<label class="hero button" for="input-variables"><?php esc_html_e('How to fix it','hotella') ?> </label>
									<aside class="lightbox">
										<input type="checkbox" class="state" id="input-variables" />
										<article class="content">
											<header class="header">
												<label class="button" for="input-variables"><i class="ti-close"></i></label>
											</header>
											<main class="main">
												<p class="red"> <?php esc_html_e( 'We recommend setting max execution time to at least 300. you can read below link for more information:' , 'hotella' ) ?></p>
												<a href="http://codex.wordpress.org/Common_WordPress_Errors#Maximum_execution_time_exceeded" target="_blank"> <?php esc_html_e( 'Increasing PHP Max. Input Vars' , 'hotella' ) ?> </a>
											</main>
										</article>
										<label class="backdrop" for="input-variables"></label>
									</aside>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php echo esc_html__('Currently:','hotella').' '.$input_vars; ?> </span>
								<?php } ?>
							</div>
							<div class="w-system-info">
								<span> <?php esc_html_e('PHP Max. Input Time','hotella') ?> </span>
								<?php
								if($input_time_boolean){ ?>
									<i class="w-icon w-icon-red ti-close"></i> <span class="w-current"> <?php echo esc_html__('Currently:','hotella').' '.$input_time; ?> </span>
									<span class="w-min"> <?php esc_html_e('(min:1000)','hotella') ?></span>
									<label class="hero button" for="php-input-time"> <?php esc_html('How to fix it','hotella') ?></label>
									<aside class="lightbox">
										<input type="checkbox" class="state" id="php-input-time" />
										<article class="content">
											<header class="header">
												<label class="button" for="php-input-time"><i class="ti-close"></i></label>
											</header>
											<main class="main">
												<p class="red"> <?php esc_html_e('It may not work with some shared hosts in which case you would have to ask your hosting service provider for support.' , 'hotella' ) ?> </p>
												<strong> <?php esc_html_e('1- Create or Edit an existing PHP.INI file' , 'hotella' ) ?> </strong><br>
												<?php esc_html_e('In most cases if you are on a shared host, you will not see a php.ini file in your directory. If you do not see one, then create a file called php.ini and upload it in the root folder. In that file add the following code:' , 'hotella' ) ?><br>
												<code class="red"> <?php esc_html_e('max_input_time' , 'hotella' ) ?> = 1000 </code><br><br>
												<strong> <?php esc_html_e('2- htaccess Method' , 'hotella' ) ?></strong><br>
												<?php esc_html_e('Some people have tried using the htaccess method where by modifying the .htaccess file in the root directory, you can increase the Max. Input Time in WordPress. Open or create the .htaccess file in the root folder and add the following code:' , 'hotella' ) ?><br>
												<code class="red"> <?php esc_html_e('php_value max_input_time' , 'hotella' ) ?> 1000</code><br>
											</main>
										</article>
										<label class="backdrop" for="php-input-time"></label>
									</aside>
								<?php } else { ?>
									<i class="w-icon w-icon-green ti-check"></i> <span class="w-current"> <?php echo esc_html__('Currently:','hotella').' '.$input_time; ?> </span>
								<?php }	?>
							</div>
							<div class="w-button">
								<a href="<?php echo '' . $theme_option_address; ?>" target="_blank"><?php esc_html_e('Import Dummy','hotella'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="welcome-content w-clearfix extra">
			<div class="w-row">
				<div class="w-col-sm-6">
					<div class="w-box doc">
						<div class="w-box-head">
							<?php esc_html_e('Documentation','hotella'); ?>
						</div>
						<div class="w-box-content">
							<p>
							<?php esc_html_e('Our documentation is simple and functional wit full details and cover all essential aspects from beginning to the most advanced parts.' , 'hotella'); ?>
							</p>
							<div class="w-button">
								<a href="http://webnus.biz/documentation/hotella/" target="_blank"><?php esc_html_e('DOCUMENTATION','hotella'); ?></a>
							</div>
						</div>
					</div>
				</div>
				<div class="w-col-sm-6">
					<div class="w-box support">
						<div class="w-box-head">
							<?php esc_html_e('Support Forum','hotella'); ?>
						</div>
						<div class="w-box-content">
							<p>
							<?php esc_html_e('Webnus is elite and trusted author with high percentage of satisfied user. If you have any issues please don’t hesitate to contact us, we will reply as soon as possible.' , 'hotella'); ?>
							</p>
							<div class="w-button">
								<a href="https://webnus.ticksy.com/" target="_blank"><?php esc_html_e('OPEN A TICKET','hotella'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="w-update-notices" class="w-row">
				<div class="w-col-sm-12">
					<br><br><br>
					<h3><?php echo esc_html__( 'Updates Notices:', 'hotella' ); ?></h3>
					<div class="w-box change-log">
						<div class="w-box-head">
							<?php echo esc_html__( 'Updating Hotella from earlier versions to version 1.2.0', 'hotella' ); ?>
						</div>
						<div class="w-box-content">
							<p><?php esc_html_e( 'In Hotella version 1.2.0, because of issues in currency and final calculation we did compatible the theme with Awebooking plugin version 3.x , we recommend this update to all users but maybe there are some users who prefer to keep working with old version of Awebooking which is 2.x so we announce that theme is compatible with both versions of the plugin and there is no need to be worry in this regard and these users can avoid the new update. Users who desire to update to version 3.x must consider some facts, all your data related to this plugin after updating to version 3.x will be removed such as rooms, bookings and etc. You’ll need to install plugin again and enter your rooms. Please follow these steps:', 'hotella' ); ?></p>
							<ol>
								<li><?php esc_html_e( 'Delete old plugin: Go to plugins and delete Awebooking and Aweicon.', 'hotella' ); ?></li>
								<li><?php esc_html_e( 'Re-install Awebooking plugin: Go to Appearance > Install plugins and install it.', 'hotella' ); ?></li>
								<li><?php esc_html_e( 'Go back to Appearance > Install Plugins and install Awebooking add-ons.', 'hotella' ); ?></li>
								<li><?php esc_html_e( 'in version 2.x you could add icons to your packages by Aweicon plugin, to do it in new version you need to install "WP Simple Iconfont" plugin via Appearance > Install Plugins.', 'hotella' ); ?></li>
								<li><?php esc_html_e( 'Awebooking Shortcodes : In some pages we used awebooking 2.x shortcodes. You should replace them with new shortcodes. You can find new shortcodes in this URL http://docs.awethemes.com/awebooking/free-awebooking/shortcodes/', 'hotella' ); ?></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<div class="w-row">
				<div class="w-col-sm-12">
					<div class="w-box change-log">
						<div class="w-box-head">
							<?php esc_html_e('Changelog (Updates)','hotella'); ?>
						</div>
						<div class="w-box-content">
							<?php include_once get_template_directory() . '/Change_log.php'; ?>
							<pre><?php echo '' . $change_log; ?></pre>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
$out = ob_get_contents();
ob_end_clean();
echo '' . $out;
}

