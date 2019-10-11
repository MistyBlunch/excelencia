<?php

add_action( 'customize_register', 'excellence_customizer_settings' );
function excellence_customizer_settings($wp_customize) {

    // PERSONALIZAR

    $wp_customize->add_section( 'cd_contact' , array(
        'title'      => 'Personalización General',
        'priority'   => 20,
    ) );


    // Color Texto Secciones
    $wp_customize->add_setting( 'cd_section_text_color',
        array(
            'default' => '#952331',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control( 'cd_section_text_color',
        array(
            'label' => __( 'Color de texto de secciones y titulo' ),
            'description' => esc_html__( 'Elige color de texto para las secciones y titulo' ),
            'section' => 'cd_contact',
            'priority' => 10, // Optional. Order priority to load the control. Default: 10
            'type' => 'color',
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        )
    );


    // Color FONDO MENU
    $wp_customize->add_setting( 'cd_menu_color',
        array(
            'default' => '#000000',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control( 'cd_menu_color',
        array(
            'label' => __( 'Color de fondo de menu' ),
            'description' => esc_html__( 'Elige color para el fondo del menu' ),
            'section' => 'cd_contact',
            'priority' => 10, // Optional. Order priority to load the control. Default: 10
            'type' => 'color',
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        )
    );

    $wp_customize->add_setting( 'cd_display_arrow' , array(
        'default'     => true,
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'cd_display_arrow', array(
        'label' => 'Mostrar flechas del Slider',
        'section' => 'cd_contact',
        'settings' => 'cd_display_arrow',
        'type' => 'checkbox',
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

    // Color Noticias
    $wp_customize->add_setting( 'cd_notice_color_bg',
        array(
            'default' => '#6b3c62',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control( 'cd_notice_color_bg',
        array(
            'label' => __( 'Color de fondo' ),
            'description' => esc_html__( 'Elige color de fondo de las noticias' ),
            'section' => 'cd_contact',
            'priority' => 10, // Optional. Order priority to load the control. Default: 10
            'type' => 'color',
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        )
    );

    // Publications

    $wp_customize->add_setting( 'cd_display_publications' , array(
        'default'     => true,
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'cd_display_publications', array(
        'label' => 'Mostrar sección de publicaciones',
        'section' => 'cd_contact',
        'settings' => 'cd_display_publications',
        'type' => 'checkbox',
    ) );

    // Color Publications
    $wp_customize->add_setting( 'cd_publications_color_bg',
        array(
            'default' => '#6b3c62',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control( 'cd_publications_color_bg',
        array(
            'label' => __( 'Color de fondo' ),
            'description' => esc_html__( 'Elige color de fondo de Publicaciones' ),
            'section' => 'cd_contact',
            'priority' => 10, // Optional. Order priority to load the control. Default: 10
            'type' => 'color',
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        )
    );

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

    // Color Testimonio
    $wp_customize->add_setting( 'cd_testimony_color_bg',
        array(
            'default' => '#952331',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control( 'cd_testimony_color_bg',
        array(
            'label' => __( 'Color de fondo' ),
            'description' => esc_html__( 'Elige color de fondo del area de testimonio' ),
            'section' => 'cd_contact',
            'priority' => 10, // Optional. Order priority to load the control. Default: 10
            'type' => 'color',
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        )
    );

    // Color Testimonio
    $wp_customize->add_setting( 'cd_testimony_color_text',
        array(
            'default' => '#FFFFFF',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control( 'cd_testimony_color_text',
        array(
            'label' => __( 'Color de texto' ),
            'description' => esc_html__( 'Elige color de texto del area de testimonio' ),
            'section' => 'cd_contact',
            'priority' => 10, // Optional. Order priority to load the control. Default: 10
            'type' => 'color',
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        )
    );

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

    $wp_customize->add_setting( 'cd_country' , array(
        'default'     => '',
        'transport'   => 'postMessage',
    ) );

    $wp_customize->add_control( 'cd_country', array(
        'label' => 'URL de imagen pais',
        'section'	=> 'cd_contact',
        'type'	 => 'text',
    ) );

    $wp_customize->add_setting( 'cd_campus_virtual' , array(
        'default'     => '',
        'transport'   => 'postMessage',
    ) );

    $wp_customize->add_control( 'cd_campus_virtual', array(
        'label' => 'URL Campus Virtual',
        'section'	=> 'cd_contact',
        'type'	 => 'text',
    ) );

    $wp_customize->add_setting( 'cd_book_claims' , array(
        'default'     => '',
        'transport'   => 'postMessage',
    ) );

    $wp_customize->add_control( 'cd_book_claims', array(
        'label' => 'URL Libro Reclamaciones',
        'section'	=> 'cd_contact',
        'type'	 => 'text',
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

    // Color Footer

    $wp_customize->add_setting( 'cd_footer_color_bg',
        array(
            'default' => '#3e3838',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control( 'cd_footer_color_bg',
        array(
            'label' => __( 'Color de fondo footer' ),
            'description' => esc_html__( 'Elige color de fondo del area del footer' ),
            'section' => 'cd_contact',
            'priority' => 10, // Optional. Order priority to load the control. Default: 10
            'type' => 'color',
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        )
    );


    $wp_customize->add_setting( 'cd_footer_color_text',
        array(
            'default' => '#FFFFFF',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control( 'cd_footer_color_text',
        array(
            'label' => __( 'Color de texto footer' ),
            'description' => esc_html__( 'Elige color de texto del area del footer' ),
            'section' => 'cd_contact',
            'priority' => 10, // Optional. Order priority to load the control. Default: 10
            'type' => 'color',
            'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
        )
    );
}