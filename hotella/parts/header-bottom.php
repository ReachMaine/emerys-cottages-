<?php
// Theme options reqire
$hotella_webnus_options = hotella_webnus_options();

// Header Bottom
$header_bottom = isset( $hotella_webnus_options['hotella_webnus_header_bottom'] ) ? $hotella_webnus_options['hotella_webnus_header_bottom'] : '' ;
if ( $header_bottom ) {

	// -> Start define variables

	// Social bar
	$social_media		= isset( $hotella_webnus_options['hotella_webnus_header_bottom_social_bar'] ) ? $hotella_webnus_options['hotella_webnus_header_bottom_social_bar'] : '';
	$language_bar		= isset( $hotella_webnus_options['hotella_webnus_header_bottom_languages'] ) ? $hotella_webnus_options['hotella_webnus_header_bottom_languages'] : '';

	// Languages name URL
	$first_lang			= isset( $hotella_webnus_options['hotella_webnus_lang_first'] ) ? $hotella_webnus_options['hotella_webnus_lang_first'] : '';
	$second_lang		= isset( $hotella_webnus_options['hotella_webnus_lang_second'] ) ? $hotella_webnus_options['hotella_webnus_lang_second'] : '';
	$third_lang			= isset( $hotella_webnus_options['hotella_webnus_lang_third'] ) ? $hotella_webnus_options['hotella_webnus_lang_third'] : '';
	$fourth_lang		= isset( $hotella_webnus_options['hotella_webnus_lang_fourth'] ) ? $hotella_webnus_options['hotella_webnus_lang_fourth'] : '';
	$first_lang_url		= isset( $hotella_webnus_options['hotella_webnus_language_first_url'] ) ? $hotella_webnus_options['hotella_webnus_language_first_url'] : '';
	$second_lang_url	= isset( $hotella_webnus_options['hotella_webnus_language_second_url'] ) ? $hotella_webnus_options['hotella_webnus_language_second_url'] : '';
	$third_lang_url		= isset( $hotella_webnus_options['hotella_webnus_language_third_url'] ) ? $hotella_webnus_options['hotella_webnus_language_third_url'] : '';
	$fourth_lang_url	= isset( $hotella_webnus_options['hotella_webnus_language_fourth_url'] ) ? $hotella_webnus_options['hotella_webnus_language_fourth_url'] : '';

	// Languages name
	$first_language		= $first_lang && $first_lang_url ? '<a href ="' . $first_lang_url . '"> ' . $first_lang . ' </a>' : '';
	$second_language	= $second_lang && $second_lang_url ? '<a href ="' . $second_lang_url . '"> ' . $second_lang . ' </a>' : '';
	$third_language		= $third_lang && $third_lang_url ? '<a href ="' . $third_lang_url . '"> ' . $third_lang . ' </a>' : '';
	$fourth_language	= $fourth_lang && $fourth_lang_url ? '<a href ="' . $fourth_lang_url . '"> ' . $fourth_lang . ' </a>' : '';

	$languages = array(
		$first_language,
		$second_language,
		$third_language,
		$fourth_language,
	);
	// -> End define variables
	?>

	<div class="w-header-bottom">

		<?php if ( $social_media ) { ?>
			<div class="whb-left-sect">
				<div class="socialfollow">
				<?php get_template_part( 'parts/social'); ?>
				</div>
			</div>
		<?php }

		if ( $language_bar ) { ?>
			<div class="whb-right-sect">
				<div class="w-lagn-bar">
				<?php foreach ($languages as $value) {
					echo '' . $value;
				} ?>
				</div>
			</div>
		<?php } ?>

	</div>
<?php }