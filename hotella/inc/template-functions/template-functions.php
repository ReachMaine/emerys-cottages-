<?php
function hotella_webnus_topbar(){
    $hotella_webnus_options = hotella_webnus_options();
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    $elements_topbar_left = $hotella_webnus_options['topbar_elements']['left'];
    $elements_topbar_right = $hotella_webnus_options['topbar_elements']['right'];
    $hotella_webnus_options['hotella_webnus_topbar_button_link'] = isset($hotella_webnus_options['hotella_webnus_topbar_button_link']) ? $hotella_webnus_options['hotella_webnus_topbar_button_link'] : '';
    $hotella_webnus_options['hotella_webnus_topbar_login'] = isset($hotella_webnus_options['hotella_webnus_topbar_login']) ? $hotella_webnus_options['hotella_webnus_topbar_login'] : '' ;
    $hotella_webnus_options['hotella_webnus_topbar_address'] = isset($hotella_webnus_options['hotella_webnus_topbar_address']) ? $hotella_webnus_options['hotella_webnus_topbar_address'] : '' ;
    $hotella_webnus_options['hotella_webnus_topbar_email'] = isset($hotella_webnus_options['hotella_webnus_topbar_email']) ? $hotella_webnus_options['hotella_webnus_topbar_email'] : '' ;
    $hotella_webnus_options['hotella_webnus_topbar_phone'] = isset($hotella_webnus_options['hotella_webnus_topbar_phone']) ? $hotella_webnus_options['hotella_webnus_topbar_phone'] : '' ;
    $hotella_webnus_options['hotella_webnus_header_menu_type'] = isset($hotella_webnus_options['hotella_webnus_header_menu_type']) ? $hotella_webnus_options['hotella_webnus_header_menu_type'] : '' ;
    $hotella_webnus_options['hotella_webnus_topbar_text'] = isset($hotella_webnus_options['hotella_webnus_topbar_text']) ? $hotella_webnus_options['hotella_webnus_topbar_text'] : '' ;

    if ( ! function_exists( 'topbar_button' ) ){
        function topbar_button(){
            $hotella_webnus_options = hotella_webnus_options();
            echo '<a href="' . esc_url_raw( $hotella_webnus_options['hotella_webnus_topbar_button_link'] ) . '" class="topbar-btn">' . $hotella_webnus_options['hotella_webnus_topbar_button_text'] . '</a>';
        }
    }

    if ( ! function_exists( 'topbar_search' ) ){
        function topbar_search(){
          echo '<div id="top-search-form">
                    <a href="javascript:void(0)" class="top-search-form-icon"><i id="top-searchbox-icon" class="fa-search"></i></a>
                        <div id="top-search-form-box" class="top-search-form-box">
                            <form action="'.esc_url(home_url( '/' )).'" method="get">
                                <input type="text" class="top-search-text-box" id="top-search-box" name="s">
                            </form>
                        </div>
                </div>';
        }
    }

    if ( ! function_exists( 'topbar_social' ) ){
        function topbar_social(){
            echo '<div class="socialfollow">';
            get_template_part('parts/social' );
            echo '</div>';
        }
    }

    if ( ! function_exists( 'topbar_login' ) ){
        function topbar_login(){
            $hotella_webnus_options = hotella_webnus_options();
            $color_skin_class = ( isset( $hotella_webnus_options['hotella_webnus_custom_color_skin'] ) || isset( $hotella_webnus_options['hotella_webnus_color_skin'] ) && $hotella_webnus_options['hotella_webnus_color_skin'] != 'e3e3e3' ) ? 'colorskin-custom' : '' ;
            $login_text = $hotella_webnus_options['hotella_webnus_topbar_login_text'];
            if ( is_user_logged_in() ) {
                global $user_identity;
                $login_text = esc_html__('Welcome ','hotella') . esc_html($user_identity);
            }
            $login_class =(is_plugin_active('user-pro/index.php'))? 'popup-login':'inlinelb';
            echo '<a href="#w-login" class="' . $login_class . ' topbar-login" target="_self">'.esc_html($login_text).'</a>
            <div style="display:none"><div id="w-login" class="w-login ' . $color_skin_class . '">';
                if ( function_exists('hotella_webnus_login') ) {
                    hotella_webnus_login();
                }
                echo '</div></div>';
        }
    }

    if ( ! function_exists( 'topbar_lang' ) ){
        function topbar_lang(){
            if (is_plugin_active('polylang/polylang.php' )){
                echo '<div class="polylang-flags">';
                pll_the_languages(array('dropdown'=>1));
                echo '</div>';
            }else{
                do_action('wpml_add_language_selector');
            }
        }
    }

    if ( ! function_exists( 'topbar_contact' ) ){
        function topbar_contact(){
            echo'<a class="inlinelb topbar-contact" href="#w-contact" target="_self">'.esc_html__('CONTACT','hotella').'</a>';
        }
    }

    if ( ! function_exists( 'topbar_address' ) ){
        function topbar_address(){
            $hotella_webnus_options = hotella_webnus_options();
            if( $hotella_webnus_options['hotella_webnus_topbar_address'] )
                echo '<h6><i class="sl-location-pin"></i>' . $hotella_webnus_options['hotella_webnus_topbar_address'] .'</h6>';
        }
    }

    if ( ! function_exists( 'topbar_email' ) ){
        function topbar_email(){
            $hotella_webnus_options = hotella_webnus_options();
            if( $hotella_webnus_options['hotella_webnus_topbar_email'] )
                echo '<h6><i class="sl-envelope-open"></i><a href="mailto:'. $hotella_webnus_options['hotella_webnus_topbar_email'] .'"></a>'. $hotella_webnus_options['hotella_webnus_topbar_email'] .'</h6>';
        }
    }

    if ( ! function_exists( 'topbar_phone' ) ){
        function topbar_phone(){
            $hotella_webnus_options = hotella_webnus_options();
            if( $hotella_webnus_options['hotella_webnus_topbar_phone'] )
                echo '<h6><i class="fa-fax"></i><a href="tel:'. $hotella_webnus_options['hotella_webnus_topbar_phone'] .'"></a>'. $hotella_webnus_options['hotella_webnus_topbar_phone'] .'</h6>';
        }
    }

    if ( ! function_exists( 'topbar_menu' ) ){
        function topbar_menu(){
            $hotella_webnus_options = hotella_webnus_options();
            if ( has_nav_menu('header-top-menu') ){
                if($hotella_webnus_options['hotella_webnus_header_menu_type']==0){
                    $menuParameters = array('theme_location' => 'header-top-menu','container' => 'false','menu_id' => 'nav','depth' => '5','items_wrap' => '<ul id="%1$s">%3$s</ul>',);
                }else{
                    $menuParameters = array('theme_location' => 'header-top-menu','container' => 'false', 'depth' => '1', 'echo'  => false,);
                }
                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
            }
        }
    }

    if ( ! function_exists( 'topbar_text' ) ){
        function topbar_text(){
            $hotella_webnus_options = hotella_webnus_options();
            echo '<div class="top-custom-text">' .wp_kses( $hotella_webnus_options['hotella_webnus_topbar_text'], hotella_kayses() ) . '</div>' ;
        }
    }

    if( $hotella_webnus_options['topbar_elements']['left'] ){
        echo '<div class="top-links lftflot">';
        foreach ($elements_topbar_left as $key=>$value) {

            switch($key) {

                case 'button': topbar_button();
                break;

                case 'search': topbar_search();
                break;

                case 'social': topbar_social();
                break;

                case 'login': topbar_login();
                break;

                case 'language': topbar_lang();
                break;

                case 'contact': topbar_contact();
                break;

                case 'address': topbar_address();
                break;

                case 'email': topbar_email();
                break;

                case 'phone': topbar_phone();
                break;

                case 'menu': topbar_menu();
                break;

                case 'text': topbar_text();
                break;

                }

        }
        echo '</div>';
    }

    if( $hotella_webnus_options['topbar_elements']['right'] ){
        echo '<div class="top-links rgtflot">';
        foreach ($elements_topbar_right as $key=>$value) {

            switch($key) {

                case 'button': topbar_button();
                break;

                case 'search': topbar_search();
                break;

                case 'social': topbar_social();
                break;

                case 'login': topbar_login();
                break;

                case 'language': topbar_lang();
                break;

                case 'contact': topbar_contact();
                break;

                case 'address': topbar_address();
                break;

                case 'email': topbar_email();
                break;

                case 'phone': topbar_phone();
                break;

                case 'menu': topbar_menu();
                break;

                case 'text': topbar_text();
                break;

            }

        }
        echo '</div>';
    }



}