<?php
get_header();
$hotella_webnus_options = hotella_webnus_options();
$hotella_webnus_options['hotella_webnus_404_text'] = isset($hotella_webnus_options['hotella_webnus_404_text']) ? $hotella_webnus_options['hotella_webnus_404_text'] : '' ;
?>

<section id="hero" class="tbg1">
    <div class="blox dark dark">
      <div class="container">
        <h1 class="pnf404"><?php esc_html_e('404','hotella'); ?></h1>
        <h2 class="pnf404"><?php esc_html_e('Page Not Found','hotella'); ?></h2>
        <br>
        <div>
         <?php get_search_form(); ?>
       </div>
        <?php echo wp_kses($hotella_webnus_options['hotella_webnus_404_text'],array('a' => array('href' => array(),'title' => array()),'br' => array(),'em' => array(),'strong' => array())); ?> 
      </div>
    </div>
</section>

<?php get_footer(); ?>