<?php
get_header();

// -> Start Define variables

// theme options variables
$hotella_webnus_options	= hotella_webnus_options();
$enable_breadcrumbs		= isset( $hotella_webnus_options['hotella_webnus_enable_breadcrumbs'] ) ? $hotella_webnus_options['hotella_webnus_enable_breadcrumbs'] : '';

// page options variables
$show_titlebar	= rwmb_meta( 'hotella_page_title_bar_meta' );
$titlebar_fg	= rwmb_meta( 'hotella_page_title_text_color_meta' );
$titlebar_bg	= rwmb_meta( 'hotella_page_title_bg_color_meta' );
$titlebar_fs	= rwmb_meta( 'hotella_page_title_font_size_meta' );
$sidebar_pos	= rwmb_meta( 'hotella_sidebar_position_meta' );
$breadcrumb 	= rwmb_meta( 'hotella_breadcrumb_meta');

// others variables
$have_sidebar	= $sidebar_pos ? true : false;

// -> End Define variables

// headline and breadcrubs
if ( $show_titlebar ) : ?>
	<section id="headline" style="<?php if ( ! empty( $titlebar_bg ) ) echo 'background-color: ' . esc_attr($titlebar_bg) . ';'; ?>">
		<div class="container">
			<h2 style="<?php if ( ! empty( $titlebar_fg ) ) echo 'color: ' . esc_attr($titlebar_fg) . ';'; if ( ! empty( $titlebar_fs ) ) echo ' font-size: ' . $titlebar_fs . ';'; ?>"><?php the_title(); ?></h2>
		</div>
	</section>

<?php endif; ?>

<?php
if ( $enable_breadcrumbs == 1 ) { ?>
	<div class="breadcrumbs-w">
		<div class="container">
			<?php if ( 'hotella_webnus_breadcrumbs' ) hotella_webnus_breadcrumbs(); ?>
		</div>
	</div>
<?php
}else{
	if ($breadcrumb == 'yes'){ ?>
		<div class="breadcrumbs-w">
			<div class="container">
				<?php if ( 'hotella_webnus_breadcrumbs' ) hotella_webnus_breadcrumbs(); ?>
			</div>
		</div>
	<?php
	}else{
		echo '';
	}
}?>

<!-- Start Page Content -->
<section id="main-content" class="container">

	<?php if ( ( 'left' == $sidebar_pos ) || ( 'both' == $sidebar_pos ) ) { ?>
		<!-- left sidebar -->
		<aside class="col-md-3 sidebar leftside">
			<?php if ( is_active_sidebar( 'Left Sidebar' ) ) dynamic_sidebar( 'Left Sidebar' ); ?>
		</aside>
	<?php }

	if ( $have_sidebar ) { ?>
		<section class="<?php  echo ( $sidebar_pos == 'both' ) ? 'col-md-6 cntt-w' : 'col-md-9 cntt-w'; ?>">
			<article>
	<?php } ?>

	<div class="row-wrapper-x">
		<?php if ( have_posts() ) : while( have_posts() ): the_post();
			the_content();
		endwhile; endif; ?>
	</div>

	<?php
	wp_link_pages();

	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

	if ( $have_sidebar ) { ?>
			</article>
		</section>
	<?php }

	if ( ( $sidebar_pos == 'right' ) || ( $sidebar_pos == 'both' ) ) { ?>
		<aside class="col-md-3 sidebar">
			<?php if ( is_active_sidebar( 'Right Sidebar' ) ) dynamic_sidebar( 'Right Sidebar' ); ?>
		</aside>
	<?php } ?>

</section>

<?php
get_footer();