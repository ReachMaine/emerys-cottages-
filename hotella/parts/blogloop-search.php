<?php
$hotella_webnus_options = hotella_webnus_options(); 
$hotella_webnus_options['hotella_webnus_blog_meta_author_enable'] = isset($hotella_webnus_options['hotella_webnus_blog_meta_author_enable']) ? $hotella_webnus_options['hotella_webnus_blog_meta_author_enable'] : '' ;
$hotella_webnus_options['hotella_webnus_blog_meta_category_enable'] = isset($hotella_webnus_options['hotella_webnus_blog_meta_category_enable']) ? $hotella_webnus_options['hotella_webnus_blog_meta_category_enable'] : '' ;
$hotella_webnus_options['hotella_webnus_blog_meta_comments_enable'] = isset($hotella_webnus_options['hotella_webnus_blog_meta_comments_enable']) ? $hotella_webnus_options['hotella_webnus_blog_meta_comments_enable'] : '' ;
$hotella_webnus_options['hotella_webnus_blog_excerpt_list'] = isset($hotella_webnus_options['hotella_webnus_blog_excerpt_list']) ? $hotella_webnus_options['hotella_webnus_blog_excerpt_list'] : '' ;
?>
<article id="post-<?php the_ID(); ?>" class="blog-post"> 
	<div class="col-md-11 alpha omega">
	  <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
	  <div class="postmetadata">
		<h6 class="blog-date"> <a href="<?php the_permalink(); ?>"><?php the_time(get_option( 'date_format' )) ?></a> | </h6>
		<?php if($hotella_webnus_options['hotella_webnus_blog_meta_author_enable']) { ?>	
		<h6 class="blog-author"><strong><?php esc_html_e('by','hotella'); ?></strong> <?php the_author_posts_link(); ?> </h6>
		<?php } ?>
		<?php if($hotella_webnus_options['hotella_webnus_blog_meta_category_enable']) { ?>
		<h6 class="blog-cat"><strong><?php esc_html_e('in','hotella'); ?></strong> <?php the_category(', ') ?> </h6>
		<?php } ?>
		<?php if($hotella_webnus_options['hotella_webnus_blog_meta_comments_enable']) { ?>
		<h6 class="blog-comments"><strong> - </strong> <?php comments_number(  ); ?> </h6>
		<?php } ?>
	  </div>
	 <p>
	  <?php 
		echo hotella_webnus_excerpt(($hotella_webnus_options['hotella_webnus_blog_excerpt_list'])?$hotella_webnus_options['hotella_webnus_blog_excerpt_list']:35);
	  ?>
	  </p>
	  </div>
	<hr class="vertical-space1">
</article>