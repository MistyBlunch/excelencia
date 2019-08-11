<?php

add_action( 'customize_register', 'excellence_customizer_settings' );
function excellence_customizer_settings($wp_customize) {

    // PERSONALIZAR

    $wp_customize->add_section( 'cd_contact' , array(
        'title'      => 'Personalización General',
        'priority'   => 20,
    ) );

    $wp_customize->add_setting( 'cd_display_area' , array(
        'default'     => true,
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'cd_display_area', array(
        'label' => 'Mostrar sección de áreas formativas',
        'section' => 'cd_contact',
        'settings' => 'cd_display_area',
        'type' => 'checkbox',
    ) );

    $wp_customize->add_setting( 'cd_display_magazine' , array(
        'default'     => true,
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'cd_display_magazine', array(
        'label' => 'Mostrar sección de revista',
        'section' => 'cd_contact',
        'settings' => 'cd_display_magazine',
        'type' => 'checkbox',
    ) );

    // Area Eventos

    $wp_customize->add_setting( 'cd_display_events' , array(
        'default'     => true,
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'cd_display_events', array(
        'label' => 'Mostrar sección de eventos',
        'section' => 'cd_contact',
        'settings' => 'cd_display_events',
        'type' => 'checkbox',
    ) );

    // Noticias

    $wp_customize->add_setting( 'cd_display_notice' , array(
        'default'     => true,
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'cd_display_notice', array(
        'label' => 'Mostrar sección de noticias',
        'section' => 'cd_contact',
        'settings' => 'cd_display_notice',
        'type' => 'checkbox',
    ) );

    // Testimonios
    $wp_customize->add_setting( 'cd_display_testimony' , array(
        'default'     => true,
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'cd_display_testimony', array(
        'label' => 'Mostrar sección de testimonios',
        'section' => 'cd_contact',
        'settings' => 'cd_display_testimony',
        'type' => 'checkbox',
    ) );


    $wp_customize->add_setting( 'cd_display_contact' , array(
        'default'     => true,
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'cd_display_contact', array(
        'label' => 'Mostrar área de contacto',
        'section' => 'cd_contact',
        'settings' => 'cd_display_contact',
        'type' => 'checkbox',
    ) );


    $wp_customize->add_setting( 'cd_text_contact' , array(
        'default'     => '',
        'transport'   => 'postMessage',
    ) );


    $wp_customize->add_control( 'cd_text_contact', array(
        'label' => 'Email de contacto',
        'section'	=> 'cd_contact',
        'type'	 => 'text',
    ) );

    $wp_customize->add_setting( 'cd_phone_contact' , array(
        'default'     => '',
        'transport'   => 'postMessage',
    ) );

    $wp_customize->add_control( 'cd_phone_contact', array(
        'label' => 'Telefono de contacto',
        'section'	=> 'cd_contact',
        'type'	 => 'text',
    ) );

    $wp_customize->add_setting( 'cd_facebook_contact' , array(
        'default'     => '',
        'transport'   => 'postMessage',
    ) );

    $wp_customize->add_control( 'cd_facebook_contact', array(
        'label' => 'URL de facebook',
        'section'	=> 'cd_contact',
        'type'	 => 'text',
    ) );

    $wp_customize->add_setting( 'cd_linkedin_contact' , array(
        'default'     => '',
        'transport'   => 'postMessage',
    ) );

    $wp_customize->add_control( 'cd_linkedin_contact', array(
        'label' => 'URL de linkedin',
        'section'	=> 'cd_contact',
        'type'	 => 'text',
    ) );

    $wp_customize->add_setting( 'cd_youtube_contact' , array(
        'default'     => '',
        'transport'   => 'postMessage',
    ) );

    $wp_customize->add_control( 'cd_youtube_contact', array(
        'label' => 'URL de Youtube',
        'section'	=> 'cd_contact',
        'type'	 => 'text',
    ) );
}