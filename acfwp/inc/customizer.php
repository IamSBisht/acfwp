<?php
function rdvis_customize_register( $wp_customize ) {
    
    //adding section in wordpress customizer   
    $wp_customize->add_section('header_social_icon_section', array(
        'title'          => 'Header Information'
    ));

    //adding setting for header social icons

    // Icon 01

    $wp_customize->add_setting('social_icon_fa_setting01', array(
        'default'        => $default,
    ));

    $wp_customize->add_control('social_icon_fa_setting01', array(
        'label'   => '01 Social Icon Name',
        'section' => 'header_social_icon_section',
        'type'    => 'select',
        'choices' => array(
          'Facebook' => __( 'Facebook' ),
          'Twitter' => __( 'Twitter' ),
          'Instagram' => __( 'Instagram' ),
          'Dribbble' => __( 'Dribbble' ),
          'Pinterest' => __( 'Pinterest' ),
          'Youtube' => __( 'Youtube' ),
          'Linkedin' => __( 'Linkedin' ),
        ),
    ));

    $wp_customize->add_setting('social_icon_url_setting01', array(
        'default'        => "#",
    ));

    $wp_customize->add_control('social_icon_url_setting01', array(
        'label'   => '01 Social Icon URL',
        'section' => 'header_social_icon_section',
        'type'    => 'text',
    ));

    // Icon 02

    $wp_customize->add_setting('social_icon_fa_setting02', array(
        'default'        => $default,
    ));

    $wp_customize->add_control('social_icon_fa_setting02', array(
        'label'   => '02 Social Icon Name',
        'section' => 'header_social_icon_section',
        'type'    => 'select',
        'choices' => array(
          'Facebook' => __( 'Facebook' ),
          'Twitter' => __( 'Twitter' ),
          'Instagram' => __( 'Instagram' ),
          'Dribbble' => __( 'Dribbble' ),
          'Pinterest' => __( 'Pinterest' ),
          'Youtube' => __( 'Youtube' ),
          'Linkedin' => __( 'Linkedin' ),
        ),
    ));

    $wp_customize->add_setting('social_icon_url_setting02', array(
        'default'        => "#",
    ));

    $wp_customize->add_control('social_icon_url_setting02', array(
        'label'   => '02 Social Icon URL',
        'section' => 'header_social_icon_section',
        'type'    => 'text',
    ));

    // Icon 03

    $wp_customize->add_setting('social_icon_fa_setting03', array(
        'default'        => $default,
    ));

    $wp_customize->add_control('social_icon_fa_setting03', array(
        'label'   => '03 Social Icon Name',
        'section' => 'header_social_icon_section',
        'type'    => 'select',
        'choices' => array(
          'Facebook' => __( 'Facebook' ),
          'Twitter' => __( 'Twitter' ),
          'Instagram' => __( 'Instagram' ),
          'Dribbble' => __( 'Dribbble' ),
          'Pinterest' => __( 'Pinterest' ),
          'Youtube' => __( 'Youtube' ),
          'Linkedin' => __( 'Linkedin' ),
        ),
    ));

    $wp_customize->add_setting('social_icon_url_setting03', array(
        'default'        => "#",
    ));

    $wp_customize->add_control('social_icon_url_setting03', array(
        'label'   => '03 Social Icon URL',
        'section' => 'header_social_icon_section',
        'type'    => 'text',
    ));

    // Icon 04

    $wp_customize->add_setting('social_icon_fa_setting04', array(
        'default'        => $default,
    ));

    $wp_customize->add_control('social_icon_fa_setting04', array(
        'label'   => '04 Social Icon Name',
        'section' => 'header_social_icon_section',
        'type'    => 'select',
        'choices' => array(
          'Facebook' => __( 'Facebook' ),
          'Twitter' => __( 'Twitter' ),
          'Instagram' => __( 'Instagram' ),
          'Dribbble' => __( 'Dribbble' ),
          'Pinterest' => __( 'Pinterest' ),
          'Youtube' => __( 'Youtube' ),
          'Linkedin' => __( 'Linkedin' ),
        ),
    ));

    $wp_customize->add_setting('social_icon_url_setting04', array(
        'default'        => "#",
    ));

    $wp_customize->add_control('social_icon_url_setting04', array(
        'label'   => '04 Social Icon URL',
        'section' => 'header_social_icon_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('addressInHeader', array(
        'default'        => $default,
    ));

    $wp_customize->add_control('addressInHeader', array(
        'label'   => 'Address',
        'section' => 'header_social_icon_section',
        'type'    => 'textarea',
    ));

         
}

add_action( 'customize_register', 'rdvis_customize_register' );