 <?php
/******************/
/**  Single Post
/******************/
get_header();

$hotella_webnus_options = hotella_webnus_options();
$hotella_webnus_options['hotella_webnus_blog_singlepost_sidebar'] = isset($hotella_webnus_options['hotella_webnus_blog_singlepost_sidebar']) ? $hotella_webnus_options['hotella_webnus_blog_singlepost_sidebar'] : '' ;
$hotella_webnus_options['hotella_webnus_blog_sinlge_featuredimage_enable'] = isset($hotella_webnus_options['hotella_webnus_blog_sinlge_featuredimage_enable']) ? $hotella_webnus_options['hotella_webnus_blog_sinlge_featuredimage_enable'] : '' ;
$hotella_webnus_options['hotella_webnus_blog_meta_gravatar_enable'] = isset($hotella_webnus_options['hotella_webnus_blog_meta_gravatar_enable']) ? $hotella_webnus_options['hotella_webnus_blog_meta_gravatar_enable'] : '' ;
$hotella_webnus_options['hotella_webnus_blog_meta_author_enable'] = isset($hotella_webnus_options['hotella_webnus_blog_meta_author_enable']) ? $hotella_webnus_options['hotella_webnus_blog_meta_author_enable'] : '' ;
$hotella_webnus_options['hotella_webnus_blog_meta_category_enable'] = isset($hotella_webnus_options['hotella_webnus_blog_meta_category_enable']) ? $hotella_webnus_options['hotella_webnus_blog_meta_category_enable'] : '' ;
$hotella_webnus_options['hotella_webnus_blog_meta_comments_enable'] = isset($hotella_webnus_options['hotella_webnus_blog_meta_comments_enable']) ? $hotella_webnus_options['hotella_webnus_blog_meta_comments_enable'] : '' ;
$hotella_webnus_options['hotella_webnus_blog_meta_views_enable'] = isset($hotella_webnus_options['hotella_webnus_blog_meta_views_enable']) ? $hotella_webnus_options['hotella_webnus_blog_meta_views_enable'] : '' ;
$hotella_webnus_options['hotella_webnus_blog_social_share'] = isset($hotella_webnus_options['hotella_webnus_blog_social_share']) ? $hotella_webnus_options['hotella_webnus_blog_social_share'] : '' ;
$hotella_webnus_options['hotella_webnus_blog_single_authorbox_enable'] = isset($hotella_webnus_options['hotella_webnus_blog_single_authorbox_enable']) ?  $hotella_webnus_options['hotella_webnus_blog_single_authorbox_enable'] : '' ;
$hotella_webnus_options['hotella_webnus_recommended_posts'] = isset($hotella_webnus_options['hotella_webnus_recommended_posts']) ? $hotella_webnus_options['hotella_webnus_recommended_posts'] : '' ;

//PostShow1
$post_meta = rwmb_meta( 'hotella_blogpost_meta' );
if(!empty($post_meta)){
	if($post_meta=="postshow1" && $thumbnail_id = get_post_thumbnail_id()){
		$background = wp_get_attachment_image_src( $thumbnail_id, 'full' ); ?>
		<div class="postshow1" style="background-image: url(<?php echo esc_url($background[0]); ?> );">
			<div class="postshow-overlay"></div>
			<div class="container"><h1 class="post-title-ps1"><?php the_title() ?></h1></div>
		</div>
<?php }
}
?>


<section class="container page-content" >
<hr class="vertical-space2">
<?php if( 'left' == $hotella_webnus_options['hotella_webnus_blog_singlepost_sidebar'] ){ ?>
	<aside class="col-md-3 sidebar leftside">
		<?php if( is_active_sidebar( 'Left Sidebar' ) ) dynamic_sidebar( 'Left Sidebar' ); ?>
	</aside>
<?php } ?>
<section class="<?php echo ( 'none' == $hotella_webnus_options['hotella_webnus_blog_singlepost_sidebar']  )?'col-md-12':'col-md-9 cntt-w'?>">
<?php if( have_posts() ): while( have_posts() ): the_post();  ?>
<article class="blog-single-post">
<?php
hotella_webnus_setViews(get_the_ID());
$post_format = get_post_format(get_the_ID());
$content = get_the_content(); ?>
<div class="post-trait-w"> <?php
if(!isset($background)) { ?>
<h1><?php the_title() ?></h1> <?php }
if(  $hotella_webnus_options['hotella_webnus_blog_sinlge_featuredimage_enable'] && !isset($background) ){
$meta_video = rwmb_meta( 'hotella_featured_video_meta' );
if( 'video'  == $post_format || 'audio'  == $post_format){
$pattern = '\\[' . '(\\[?)' . "(video|audio)" . '(?![\\w-])' . '(' . '[^\\]\\/]*' . '(?:' . '\\/(?!\\])' . '[^\\]\\/]*' . ')*?' . ')' . '(?:' . '(\\/)' . '\\]' . '|' . '\\]' . '(?:' . '(' . '[^\\[]*+' . '(?:' . '\\[(?!\\/\\2\\])' . '[^\\[]*+' . ')*+' . ')' . '\\[\\/\\2\\]' . ')?' . ')' . '(\\]?)';
preg_match('/'.$pattern.'/s', $post->post_content, $matches);
if( (is_array($matches)) && (isset($matches[3])) && ( ($matches[2] == 'video') || ('audio'  == $post_format)) && (isset($matches[2]))){
$video = $matches[0];
echo do_shortcode($video);
$content = preg_replace('/'.$pattern.'/s', '', $content);
}else
if( (!empty( $meta_video )) ){
echo do_shortcode($meta_video);}
}else
if( 'gallery'  == $post_format)	{
$pattern = '\\[' . '(\\[?)' . "(gallery)" . '(?![\\w-])' . '(' . '[^\\]\\/]*' . '(?:' . '\\/(?!\\])' . '[^\\]\\/]*' . ')*?' . ')' . '(?:' . '(\\/)' . '\\]' . '|' . '\\]' . '(?:' . '(' . '[^\\[]*+' . '(?:' . '\\[(?!\\/\\2\\])' . '[^\\[]*+' . ')*+' . ')' . '\\[\\/\\2\\]' . ')?' . ')' . '(\\]?)';
preg_match('/'.$pattern.'/s', $post->post_content, $matches);
if( (is_array($matches)) && (isset($matches[3])) && ($matches[2] == 'gallery') && (isset($matches[2]))){
$atts = shortcode_parse_atts($matches[3]);
$ids = $gallery_type = '';
if(isset($atts['ids'])){
$ids = $atts['ids'];}
if(isset($atts['hotella_webnus_gallery_type'])){
$gallery_type = $atts['hotella_webnus_gallery_type'];}
echo do_shortcode('[vc_gallery img_size= "full" type="flexslider_fade" interval="3" images="'.$ids.'" onclick="link_image" custom_links_target="_self"]');
$content = preg_replace('/'.$pattern.'/s', '', $content);}
}else
if( (!empty( $meta_video )) ){
echo do_shortcode($meta_video);
}else
get_the_image( array( 'meta_key' => array( 'Full', 'Full' ), 'size' => 'Full', 'link_to_post' => false, ) ); }
?>
</div>
<div <?php post_class('post'); ?>>
<div class="au-avatar-box">
<?php if($hotella_webnus_options['hotella_webnus_blog_meta_gravatar_enable']){ ?>
<div class="au-avatar"><?php echo get_avatar( get_the_author_meta( 'user_email' ), 90 ); ?></div>
<?php } ?>
<?php if($hotella_webnus_options['hotella_webnus_blog_meta_author_enable']){ ?>
<h6 class="blog-author"><strong><?php esc_html_e('by','hotella'); ?></strong> <?php the_author_posts_link(); ?> </h6>
<?php } ?>
</div>

<div class="postmetadata">
	<h6 class="blog-date"> <?php the_time( get_option( 'date_format' ) ); ?></h6>
	<?php if($hotella_webnus_options['hotella_webnus_blog_meta_category_enable']){ ?>
		<h6 class="blog-cat"><strong><?php esc_html_e('in','hotella'); ?></strong> <?php the_category(', ') ?> </h6>
	<?php } ?>
	<?php if($hotella_webnus_options['hotella_webnus_blog_meta_comments_enable']){ ?>
		<h6 class="blog-comments"> <?php comments_number(  ); ?> </h6>
	<?php } ?>
	<?php if($hotella_webnus_options['hotella_webnus_blog_meta_views_enable']){ ?>
		<h6 class="blog-views"> <i class="fa-eye"></i><span><?php echo hotella_webnus_getViews(get_the_ID()); ?></span> </h6>
	<?php } ?>
</div>

<?php
if( 'quote' == $post_format  ) echo '<blockquote>';
echo apply_filters('the_content',$content);
if( 'quote' == $post_format  ) echo '</blockquote>';
?>

	<?php
		$defaults = array(
			'before'           => '<div class="next-prev-posts">' . esc_html__( 'Pages:', 'hotella' ),
			'after'            => '</div>',
			'link_before'      => '<span class="current-page-num">',
			'link_after'       => '</span>',
			'next_or_number'   => 'number',
			'separator'        => ' ',
			'nextpagelink'     => esc_html__( 'Next page', 'hotella' ),
			'previouspagelink' => esc_html__( 'Previous page', 'hotella' ),
			'pagelink'         => '%',
			'echo'             => 1,
		);
		wp_link_pages( $defaults );
	?>


<?php if($hotella_webnus_options['hotella_webnus_blog_social_share']) {
	$dashed_title =  sanitize_title_with_dashes ( get_the_title() );
	$dashed_blog_info_name =  sanitize_title_with_dashes ( get_bloginfo( 'name' ) );?>
	<div class="post-sharing"><div class="blog-social">
		<span>Share</span>
		<a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php echo esc_html( $dashed_title ); ?>" target="blank"><i class="fa-facebook"></i></a>
		<a class="google" href="https://plusone.google.com/_/+1/confirm?hl=en-US&amp;url=<?php the_permalink(); ?>" target="_blank"><i class="fa-google"></i></a>
		<a class="twitter" href="https://twitter.com/intent/tweet?original_referer=<?php the_permalink(); ?>&amp;text=<?php echo esc_html( $dashed_title ); ?>&amp;tw_p=tweetbutton&amp;url=<?php the_permalink(); ?><?php echo isset( $twitter_user ) ? '&amp;via='.$twitter_user : ''; ?>" target="_blank"><i class="fa-twitter"></i></a>
		<a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php echo esc_html( $dashed_title ); ?>&amp;source=<?php echo esc_html( $dashed_blog_info_name ); ?>"><i class="fa-linkedin"></i></a>
		<a class="email" href="mailto:?subject=<?php echo esc_html( $dashed_title ); ?>&amp;body=<?php the_permalink(); ?>"><i class="fa-envelope"></i></a>
	</div></div>
<?php } ?>

<br class="clear">
<?php the_tags( '<div class="post-tags"><i class="fa-tags"></i>', '', '</div>' ); ?><!-- End Tags -->

<?php if( $hotella_webnus_options['hotella_webnus_blog_single_authorbox_enable'] && get_the_author_meta( 'description' ) ) { ?>
	<div class="about-author-sec">
		<?php echo get_avatar( get_the_author_meta( 'user_email' ), 90 ); ?>
		<h5><?php the_author_posts_link(); ?></h5>
		<p><?php echo get_the_author_meta( 'description' ); ?></p>
	</div>
<?php  } ?>


<?php if($hotella_webnus_options['hotella_webnus_recommended_posts']) {
	$tags = wp_get_post_tags($post->ID);
	$tag_ids = array();
	foreach($tags as $individual_tag)
	$tag_ids[] = $individual_tag->term_id;
	$cats = wp_get_post_categories($post->ID);
	$post_ids = array();
	$post_ids[] = $post->ID;
	$args = array(
		'post__not_in' => $post_ids,
		'showposts' => 3,
		'tax_query' => array(
			'relation' => 'OR',
			array(
				'taxonomy' => 'post_tag',
				'field' => 'id',
				'terms' => $tag_ids,
			),
			array(
				'taxonomy' => 'category',
				'field' => 'cat_ID',
				'terms' => $cats,
			),
		)
	);
	$my_query = new wp_query($args);
	if($my_query->have_posts()){
		echo '<div class="container rec-posts"><div class="col-md-12"><h3 class="rec-title">'. esc_html__('Recommended Posts','hotella') .'</h3></div>';
		while ($my_query->have_posts()){
			$my_query->the_post();
			$post_ids[] = $post->ID;
?>
			<div class="col-md-4 col-sm-4"><article class="rec-post">
				<figure><?php get_the_image( array( 'meta_key' => array( 'thumbnail', 'thumbnail' ), 'size' => 'hotella_webnus_blog2_thumb' ) ); ?></figure>
				<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				<p><?php the_time(get_option( 'date_format' )) ?> </p>
			</article></div>
		<?php }
		echo '</div>';
	}
	else
		echo '<div class="container rec-posts"><div class="col-md-12"><h3 class="rec-title">'. esc_html__('Recent Posts','hotella') .'</h3></div>';
wp_reset_postdata();

$rel_count = $my_query->found_posts;
if ($rel_count < 3){
$rec_count = 3 - $rel_count;
$args = array(
		'post__not_in' => $post_ids,
		'showposts' => $rec_count,
		);
$rec_query = new wp_query($args);
	if($rec_query->have_posts()){
		while ($rec_query->have_posts()){
		$rec_query->the_post();
?>
			<div class="col-md-4 col-sm-4"><article class="rec-post">
				<figure><?php get_the_image( array( 'meta_key' => array( 'thumbnail', 'thumbnail' ), 'size' => 'hotella_webnus_blog2_thumb' ) ); ?></figure>
				<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				<p><?php the_time(get_option( 'date_format' )) ?> </p>
			</article></div>
		<?php }
		echo '</div>';
	}
	wp_reset_postdata();
}
}
?>

</div>
</article>
<?php
endwhile;
endif;
comments_template(); ?>
</section>
<!-- end-main-conten -->

<?php if($hotella_webnus_options['hotella_webnus_blog_singlepost_sidebar'] == 'right' ){ ?>
	<aside class="col-md-3 sidebar">
		<?php if( is_active_sidebar( 'Right Sidebar' ) ) dynamic_sidebar( 'Right Sidebar' ); ?>
	</aside>
<?php } ?>
<div class="white-space"></div>
</section>
<?php
get_footer();
?>