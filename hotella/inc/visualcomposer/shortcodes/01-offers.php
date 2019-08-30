<?php
vc_map( array(
        'name'          => esc_html__( 'Offers', 'hotella' ),
        'base'          => 'offers',
        'description'   => esc_html__( 'Offers', 'hotella' ),
        'icon'          => 'webnus-offers',
        'category'      => esc_html__( 'Webnus Shortcodes', 'hotella' ),
        'params'        => array(
            array(
                'type'              => 'attach_image',
                'heading'           => esc_html__( 'Background Image', 'hotella' ),
                'param_name'        => 'background_image',
                'value'             =>'',
                'description'       => wp_kses( __( 'Select Image for background<br>Note: If you have another Icon that not is here. You can put PNG image of that instead of these Icons.', 'hotella'), array( 'br' => array() ) )
            ),
            array(
                'type'              => 'colorpicker',
                'heading'           => esc_html__('Background Color', 'hotella'),
                'param_name'        => 'bgcolor',
                'value'             => '',
                'description'       => esc_html__( 'Select Background color', 'hotella'),
            ),
            array(
                'type'              => 'textfield',
                'heading'           => esc_html__('Subtitle', 'hotella'),
                'param_name'        => 'offers_subtitle',
                'value'             => '',
                'description'       => esc_html__( 'Please write Offer Subtitle', 'hotella'),
                'edit_field_class'  => 'vc_col-sm-6',
            ),
            array(
                'type'              => 'textfield',
                'heading'           => esc_html__('Title', 'hotella'),
                'param_name'        => 'offers_title',
                'value'             => '',
                'description'       => esc_html__( 'Please write Offer Title', 'hotella'),
                'edit_field_class'  => 'vc_col-sm-6',
            ),
            array(
                'type'              => 'textfield',
                'heading'           => esc_html__('Minimum Height', 'hotella'),
                'param_name'        => 'min_height',
                'value'             => '',
                'description'       => esc_html__( 'Please Enter Minimum Height (just write number, like: 575)', 'hotella'),
                'edit_field_class'  => 'vc_col-sm-6',
            ),
            array(
                'type'              => 'checkbox',
                'heading'           => esc_html__('Do you want the content open as default?', 'hotella'),
                'description'       => esc_html__('Please check to enable this feature. ', 'hotella'),
                'std'               => 'true',
                'param_name'        => 'open',
                'edit_field_class'  => 'vc_col-sm-6',
            ),
            array(
                'type'              => 'textarea_html',
                'heading'           => esc_html__('Content', 'hotella'),
                'param_name'        => 'offers_content',
                'value'             => '',
                'description'       => esc_html__( 'Please write Content', 'hotella'),
            ),
            array(
                'type'              => 'iconfonts',
                'heading'           => esc_html__( 'Icon', 'hotella' ),
                'param_name'        => 'icon_name',
                'value'             => '',
                'description'       => esc_html__( 'Select Icon', 'hotella'),
                'group'             => 'Icons',
            ),
        )
    )
);