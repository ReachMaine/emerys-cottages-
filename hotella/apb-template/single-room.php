<?php get_header();
hotella_custom_roomlist_title(); ?>

<!-- Start Page Content -->
<section class="blox light awe-book-single w-animate w-start_animation">
		<div class="row-wrapper-x">
			<hr class="vertical-space3">
			<div class="container">
					<div class="col-sm-7 w-awe-gallery-sec">
						<?php do_action( 'apb_single_gallery' ); ?>
					</div>

					<div class="col-sm-5 w-awe-content-sec">
						<div class="w-awe-single-pack">
							<h4 class="pack-title"><?php esc_html_e( 'key features:', 'hotella' ) ?></h4>
							<?php hotella_layout_list_package(); ?>
						</div>
						<div class="w-awe-single-rate">
							<?php 
								include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
								$wn_rating = 'wp-postratings/wp-postratings.php';
								if ( is_plugin_active( $wn_rating ) ) {
									the_ratings();
								}
							?>
								
						</div>
						<div class="room-price">
							<p class="from-night"><?php esc_html_e( 'from', 'hotella' ) ?></p>
							<?php loop_price_single( get_post_meta( get_the_ID(), 'base_price', true ) ) ?>
						</div>
						<div class="w-awe-singel-ex"><?php 
							if ( ! has_excerpt() ) {
								echo '';
							} else { 
								the_excerpt();
							} ?>
			            </div>
					</div>
			</div>
		</div>
		<hr class="vertical-space5">
		<hr class="vertical-space1">
</section>

<section>
    <div class="container">
    	<?php
    	if( have_posts() ) : while( have_posts() ) : the_post(); the_content();
    		endwhile; endif;
    	?>
    </div>
</section>

<!-- End Webnus -->
<?php get_footer(); ?>