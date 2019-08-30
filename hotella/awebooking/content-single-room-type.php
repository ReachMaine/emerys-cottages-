<?php
/**
 * The template for displaying room_type content in the single-room_type.php template
 *
 * This template can be overridden by copying it to yourtheme/awebooking/content-single-room_type.php.
 *
 * @author 		Awethemes
 * @package 	AweBooking/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: xss ok.
	return;
}

// webnus
global $post, $room_type;

// Room description
$room_desc_attributes 	= ! empty( $room_type['attributes']['short_description'] ) ? $room_type['attributes']['short_description'] : '' ;
$room_desc_instance 	= ! empty( $room_type['instance']->post_excerpt ) ? $room_type['instance']->post_excerpt : '' ;
$room_descriptions 		= ! empty( $room_desc_attributes )	? $room_desc_attributes : $room_desc_instance ;
$room_descriptions 		= ! empty( $room_descriptions ) 	? $room_descriptions : '' ;
$room_excerpt			= rwmb_meta( 'hotella_room_excerpt');

// Room Amenities
$amenities = wp_get_post_terms( get_the_ID(), 'hotel_amenity' );

?>


<div id="room-type-<?php the_ID(); ?>" <?php post_class( 'awebooking-room-type' ); ?>>
	<div class="awebooking-room-type__wrapper">
		<section class="blox light awe-book-single w-animate w-start_animation">
			<div class="row-wrapper-x">
				<div class="container">
					<!-- webnus just add col-md-7 -->
					<div class="col-md-7">
						<!-- <div class="awebooking-room-type__header"> -->
							<?php
								// webnus remove awebooking_template_single_title();
								// webnus remove awebooking_template_single_price();
								// webnus remove awebooking_template_single_price();
							?>
						<!-- </div> -->

						<div class="awebooking-room-type__media">

							<?php
								/**
								 * awebooking/before_single_room_type_summary hook.
								 *
								 * @hooked awebooking_show_room_type_images - 20
								 */
								do_action( 'awebooking/before_single_room_type_summary' );
							?>
						</div>

					</div>
					<!-- webnus add col-md 5 and inner content -->
					<div class="col-md-5 w-awe-content-sec">

						<div class="packages-wrap">
							
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

							<!-- price -->
							<?php awebooking_template_single_price(); ?>

							<!-- Room rating -->
							<div class="w-awe-single-rate">

								<?php 
									include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
									$wn_rating = 'wp-postratings/wp-postratings.php';
									if ( is_plugin_active( $wn_rating ) ) {
										the_ratings();
									} ?>

							</div>
							<div class="w-awe-singel-ex">
								<p>
									<?php echo $room_excerpt; ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr class="vertical-space5">
			<hr class="vertical-space1">
		</section>
			<div class="awebooking-room-type__check-form summary entry-summary">

				<?php
					/**
					 * awebooking/single_room_type_summary hook.
					 *
					 * @hooked awebooking_template_single_title - 5
					 * @hooked awebooking_template_single_price - 10
					 * @hooked awebooking_template_single_form - 15
					 */
					// webnus
					//do_action( 'awebooking/single_room_type_summary' );
					
				?>

			</div><!-- .summary -->
		</div>
		<?php the_content(); ?>
	</div>
	
	<!-- webnus remove .awebooking-room-type__tabs -->

</div><!-- #room-type-<?php the_ID(); ?> -->

<?php do_action( 'awebooking/after_single_room_type' ); ?>
