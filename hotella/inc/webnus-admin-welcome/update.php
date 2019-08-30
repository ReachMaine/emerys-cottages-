<?php
// prevent blog and latest from blog fatal error
add_action( 'wp_head', 'hotella_redirect_frontend_user_to_admin_panel' );

function hotella_redirect_frontend_user_to_admin_panel() {

	if ( get_option( 'hotella_major_update_alert' ) == 'done' ) :
		return;
	endif;
	
	if ( is_super_admin() && !is_admin() ) :

		if ( get_option( 'hotella_redirect_frontend_user_to_admin_panel' ) == 'done' ) :
			return;
		endif;

		add_option( 'hotella_redirect_frontend_user_to_admin_panel', 'done' );

		$theme_name = wp_get_theme()->get( 'Name' );
		wp_redirect( admin_url('themes.php?page=' . $theme_name . '-page#w-update-notices' ) );

	endif;

}
// delete_option( 'hotella_redirect_frontend_user_to_admin_panel' );



// Special message for admin alert
add_action( 'admin_print_scripts', 'hotella_major_update_alert', 999 );

function hotella_major_update_alert() {

	if ( get_option( 'hotella_major_update_alert' ) == 'done' ) :
		return;
	endif;

	if ( is_super_admin() && is_admin() ) :

		global $pagenow;
		if ( $pagenow == 'themes.php' && isset( $_GET['activated'] ) ) :
			return;
		endif;

		$theme_name = wp_get_theme()->get( 'Name' );
		$update_url = admin_url("themes.php?page=$theme_name-page#w-update-notices");

		echo '
		<script>
			jQuery(document).ready(function() {
				swal({
					type: "success",
					title: "Special message for admin",
					text: "hotella version 2.0 is a major update. If you have updated your theme from earlier version then click on “I updated the theme“ button  otherwise ” I am installing for first time“ click on",
					confirmButtonText: "I am installing for first time",
					cancelButtonText: "I updated the theme",
					closeOnConfirm: true,
					showCancelButton: true,
				}, function(isConfirm) {
					if ( isConfirm != true ) {
						// similar behavior as clicking on a link
						window.location.href = "' . $update_url . '";
					}
				});
			});
		</script>';

		add_option( 'hotella_major_update_alert', 'done' );

	endif; // end is_super_admin() && is_admin()

}
// delete_option( 'hotella_major_update_alert' );