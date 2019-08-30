<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/awebooking/loop/description.php.
 *
 * @author 		Awethemes
 * @package 	AweBooking/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $room_type;

if ( ! $room_type->get_description() ) {
	return;
}

// webnus
global $post, $room_type;

// Room description
$room_desc_attributes 	= ! empty( $room_type['attributes']['short_description'] ) ? $room_type['attributes']['short_description'] : '' ;
$room_desc_instance 	= ! empty( $room_type['instance']->post_excerpt ) ? $room_type['instance']->post_excerpt : '' ;
$room_descriptions 		= ! empty( $room_desc_attributes )	? $room_desc_attributes : $room_desc_instance ;
$room_descriptions 		= ! empty( $room_descriptions ) 	? $room_descriptions : '' ;

?>
<div class="awebooking-loop-room-type__desc">
	<?php //webnus print wp_trim_words( $room_type->get_description(), 25, '...' ); // WPCS: xss ok. ?>
	
	<!-- Short description room bed image -->
	<?php if ( !empty( $room_descriptions ) ) { ?>

		<h4 class="pack-title">
			<?php _e( 'key features:', 'hotella' )?>
		</h4>
		
		<div class="awe-short-description"> 
			
			<?php echo $room_descriptions; ?>

		</div> <?php

	} ?>
	<!-- Packages -->
	<div class="awebooking-room-type__tabs">
		<?php
			/**
			 * awebooking/after_single_room_type_summary hook.
			 *
			 * @hooked awebooking_output_room_type_data_tabs - 10
			 */
			do_action( 'awebooking/after_single_room_type_summary' );
		?>
	</div>
</div>
