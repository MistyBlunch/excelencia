<?php
/**
 *
 * Template functions and definitions
 * Date: 03/08/19
 * Time: 07:34 PM
 *
 */


if ( ! function_exists( 'excellence_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function excellence_setup() {

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'excellence-blog', 360, 270, true);

        // This theme uses wp_nav_menu() in one location.
        require_once('lib/bs4navwalker/bs4navwalker.php');

        register_nav_menus( array(
            'primary' => esc_html__( 'Menu Principal', 'excellence' ),
        ) );

        register_nav_menus( array(
            'header-left' => esc_html__( 'Header Left', 'excellence' ),
        ) );

        register_nav_menus( array(
            'header-right' => esc_html__( 'Header Right', 'excellence' ),
        ) );

        register_nav_menus( array(
            'footer-about' => esc_html__( 'Nosotros', 'excellence' ),
        ) );

        register_nav_menus( array(
            'footer-school' => esc_html__( 'Nuestras escuelas', 'excellence' ),
        ) );

        register_nav_menus( array(
            'footer-res_ods' => esc_html__( 'RES y ODS', 'excellence' ),
        ) );

        // Enable support for custom logo.
        add_theme_support( 'custom-logo' , array(
            'height'		=>45,
            'width'			=>45,
            'flex-height'	=>true,
            'flex-width'	=>true,
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'excellence_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
    }
endif;
add_action( 'after_setup_theme', 'excellence_setup' );

function excellence_scripts() {
    /* CSS Header */
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() .'/lib/bootstrap/css/bootstrap.min.css', '', 'v4.2.1');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/lib/font-awesome/css/font-awesome.min.css', '', 'v4.7.0');
    wp_enqueue_style( 'animate-css', get_template_directory_uri() .'/lib/animate/animate.min.css', '', 'v3.5.2');
    wp_enqueue_style( 'ionicons', get_template_directory_uri() .'/lib/ionicons/css/ionicons.min.css', '', 'v2.0.0');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() .'/lib/owlcarousel/assets/owl.carousel.min.css', '', 'v2.2.1');
    wp_enqueue_style( 'lightbox', get_template_directory_uri() .'/lib/lightbox/css/lightbox.min.css', '', 'v1.0.1');
    wp_enqueue_style( 'excellence-style', get_stylesheet_uri() );
    /* JS Footer */
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.bundle.min.js', array(), 'v4.2.1', true );
    wp_enqueue_script( 'easing-js', get_template_directory_uri() . '/lib/easing/easing.min.js', array(), 'v1.0.0', true );
    wp_enqueue_script( 'hoverIntent-js', get_template_directory_uri() . '/lib/superfish/hoverIntent.js', array(), 'v1.8.1', true );
    wp_enqueue_script( 'superfish-js', get_template_directory_uri() . '/lib/superfish/superfish.min.js', array(), 'v1.7.9', true );
    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/lib/wow/wow.min.js', array(), 'v1.3.0', true );
    wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array(), 'v4.0.1', true );
    wp_enqueue_script( 'counterup-js', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array(), 'v2.1.0', true );
    wp_enqueue_script( 'owlcarousel-js', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array(), 'v2.2.1', true );
    wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array(), 'v3.0.5', true );
    wp_enqueue_script( 'lightbox-js', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', array(), 'v2.10.0', true );
    wp_enqueue_script( 'touchSwipe-js', get_template_directory_uri() . '/lib/touchSwipe/jquery.touchSwipe.min.js', array(), 'v1.6.18', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), 'v1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'excellence_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

function create_taxonomies_slider() {

    $labels = array(
        'name' => 'Categoria de portada',
        'add_new_item' => 'Agregar nueva categoria de portada',
        'new_item_name' => "Nuevo tipo de categoria de portada"
    );

    $args = array(
        'labels' => $labels,
        'show_ui' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'query_var' => true
    );

    register_taxonomy('category_slider', array('slide'),$args);
}

add_action( 'init', 'create_taxonomies_slider', 0 );

/**
 * Registers the slider post type.
 */
function excellence_slider_post_type() {
    $labels = array(
        'name'               => __( 'Portadas' ),
        'singular_name'      => __( 'Portada' ),
        'add_new'            => __( 'Agregar portada' ),
        'add_new_item'       => __( 'Agregar portada' ),
        'edit_item'          => __( 'Editar portada' ),
        'new_item'           => __( 'Agregar portada' ),
        'view_item'          => __( 'Visualizar portada' ),
        'search_items'       => __( 'Buscar portada' ),
        'not_found'          => __( 'No se encontro portada' ),
        'not_found_in_trash' => __( 'No se encontro portada en la papelera' )
    );
    $supports = array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
    );
    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'slide' ),
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-images-alt2',

    );
    register_post_type( 'slide', $args );
}
add_action( 'init', 'excellence_slider_post_type' );

function create_taxonomies_events() {
    register_taxonomy(
        'category_event',
        'event_reviews',
        array(
            'labels' => array(
                'name' => 'Categoria Evento',
                'add_new_item' => 'Agregar nueva categoria de evento',
                'new_item_name' => "Nuevo tipo de categoria de evento"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'show_admin_column' => true,
        )
    );
}
add_action( 'init', 'create_taxonomies_events', 0 );

/**
 * Registers the slider post type.
 */
function excellence_events_post_type() {
    $labels = array(
        'name'               => __( 'Eventos' ),
        'singular_name'      => __( 'Evento' ),
        'add_new'            => __( 'Agregar evento' ),
        'add_new_item'       => __( 'Agregar evento' ),
        'edit_item'          => __( 'Editar evento' ),
        'new_item'           => __( 'Agregar evento' ),
        'view_item'          => __( 'Visualizar evento' ),
        'search_items'       => __( 'Buscar evento' ),
        'not_found'          => __( 'No se encontro evento' ),
        'not_found_in_trash' => __( 'No se encontro evento en la papelera' )
    );
    $supports = array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
    );
    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'event' ),
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-tickets',
        'taxonomies'          => array( 'category_event' ),
    );
    register_post_type( 'event', $args );
}
add_action( 'init', 'excellence_events_post_type' );


/**
 * Registers the slider post type.
 */
function excellence_testimony_post_type() {
    $labels = array(
        'name'               => __( 'Testimonios' ),
        'singular_name'      => __( 'Testimonio' ),
        'add_new'            => __( 'Agregar testimonio' ),
        'add_new_item'       => __( 'Agregar testimonio' ),
        'edit_item'          => __( 'Editar testimonio' ),
        'new_item'           => __( 'Agregar testimonio' ),
        'view_item'          => __( 'Visualizar testimonio' ),
        'search_items'       => __( 'Buscar testimonio' ),
        'not_found'          => __( 'No se encontro testimonio' ),
        'not_found_in_trash' => __( 'No se encontro testimonio en la papelera' )
    );
    $supports = array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
    );
    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'testimony' ),
        'has_archive'          => true,
        'menu_position'        => 30,
        'menu_icon'            => 'dashicons-video-alt3',
    );
    register_post_type( 'testimony', $args );
}
add_action( 'init', 'excellence_testimony_post_type' );

function getSlider($terms){
    $args = array(
        'post_type' => 'slide',
        'posts_per_page' => 6,
        'tax_query' => array( array(
            'taxonomy' => 'category_slider',
            'terms' => $terms,
            'field' => 'slug'
            )
        ),
        'orderby'=> 'rand'
    );
    $row = new WP_Query($args);

    $data = $row->get_posts();
    $post = null;
    $counter = 0;
    foreach ($data as $item){
        $counter++;
        $tmp['ID'] = $item->ID;
        $tmp['post_author'] = $item->post_author;
        $tmp['post_date'] = $item->post_date;
        $tmp['post_title'] = get_post_meta($item->ID,'title', true);;
        $tmp['post_description'] = $item->post_content;
        $tmp['post_name'] = $item->post_name;
        $tmp['post_type'] = $item->post_type;
        $tmp['post_url_video'] = get_post_meta($item->ID,'url_video', true);
        $tmp['post_url'] = get_post_meta($item->ID,'link_botton', true);
        $tmp['post_btn'] = get_post_meta($item->ID,'text_button', true);
        $tmp['post_url_2'] = get_post_meta($item->ID,'link_botton_2', true);
        $tmp['post_btn_2'] = get_post_meta($item->ID,'text_button_2', true);
        $tmp['post_url_3'] = get_post_meta($item->ID,'link_botton_3', true);
        $tmp['post_btn_3'] = get_post_meta($item->ID,'text_button_3', true);
        $tmp['post_subtitle'] = get_post_meta($item->ID,'subtitle', true);
        $tmp['color_text'] = get_post_meta($item->ID,'color_text', true);
        $tmp['color_button'] = get_post_meta($item->ID,'color_button', true);
        $tmp['color_button_2'] = get_post_meta($item->ID,'color_button_2', true);
        $tmp['color_button_3'] = get_post_meta($item->ID,'color_button_3', true);
        $tmp['image_movil'] = get_post_meta($item->ID,'image_movil', true);
        $thumbID = get_post_thumbnail_id($item->ID);
        $tmp['image_thumbnail'] = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
        $tmp['image_full'] = wp_get_attachment_image_src( $thumbID, 'full' );
        if($counter==1){
            $tmp['post_active'] = 'active';
        }else{
            $tmp['post_active'] = null;
        }
        $post[] = $tmp;
    }
    return  $post;
}

function getTestimony(){
    $args = array(
        'post_type' => 'testimony',
        'posts_per_page' => 6,
        'orderby'=> 'rand'
    );
    $row = new WP_Query($args);
    $data = $row->get_posts();
    $post = null;
    foreach ($data as $item){
        $tmp['ID'] = $item->ID;
        $tmp['post_author'] = $item->post_author;
        $tmp['post_date'] = $item->post_date;
        $tmp['post_title'] = $item->post_title;
        $tmp['post_content'] = $item->post_content;
        $tmp['post_type'] = $item->post_type;
        $tmp['post_description'] = get_post_meta($item->ID,'description', true);
        $thumbID = get_post_thumbnail_id($item->ID);
        $tmp['image_thumbnail'] = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
        $tmp['image_full'] = wp_get_attachment_image_src( $thumbID, 'full' );
        $tmp['url_video'] = get_post_meta($item->ID,'url_video', true);
        $post[] = $tmp;
    }
    return  $post;
}

function orderDate($a, $b){
    return strtotime($a['date_event'] - $b['date_event']);
}


function getEvents(){
    $args = array(
        'post_type' => 'event',
        'posts_per_page' => 10,
    );
    $row = new WP_Query($args);
    $data = $row->get_posts();
    $post = null;
    foreach ($data as $item){
        $tmp['ID'] = $item->ID;
        $tmp['post_author'] = $item->post_author;
        $tmp['post_date'] = $item->post_date;
        $tmp['post_title'] = $item->post_title;
        $tmp['post_content'] = $item->post_content;
        $tmp['post_type'] = $item->post_type;
        $date = new DateTime(get_post_meta($item->ID,'date_event', true));
        $tmp['event_day'] = $date->format('d');
        $tmp['event_month'] = $date->format('M');
        $tmp['event_year'] = $date->format('Y');
        $tmp['post_event_date'] = $date->format('D, d M Y');
        $tmp['date_event'] = $date->format('d-m-Y');
        $tmp['post_event_place'] = get_post_meta($item->ID,'event_place', true);
        $tmp['post_date_text'] = get_post_meta($item->ID,'date_in_text', true);
        $tmp['post_url_landing'] = get_post_meta($item->ID,'url_landing_page', true);
        $thumbID = get_post_thumbnail_id($item->ID);
        $tmp['image_thumbnail'] = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
        $tmp['image_full'] = wp_get_attachment_image_src( $thumbID, 'full' );
        $categories = get_the_terms($item->ID,['category_event']);
        $categorySlug = $categories[0]->slug;
        $tmp['category_slug'] = $categorySlug;
        $tmp['category_name'] = $categories[0]->name;
        $tmp['category_color'] = getColorCategoryEvent($categorySlug);
        $post[] = $tmp;
    }


    usort($post, function($a1, $a2) {
        $v1 = strtotime($a1['date_event']);
        $v2 = strtotime($a2['date_event']);
        return $v1 - $v2; // $v2 - $v1 to reverse direction
    });



    return  $post;
}

function getColorCategoryEvent($slug){
    $color = "#116AAF";
    switch ($slug){
        case 'gestion':
            $color = "#4e4e4e";
            break;
        case 'rrhh':
            $color = "#6a3c63";
            break;
        case 'secretarias':
            $color = "#952331";
            break;
        case 'social':
            $color = "#4a7bb4";
            break;
    }
    return $color;
}


function the_breadcrumbs() {
    $html = null;
    if (!is_front_page()) {
        $html.= '<li class="breadcrumb-item"><a href="/">Inicio</a></li>';
        if (is_category() || is_single() || is_page()) {
            if(is_category()){
                $category = get_the_category();
                $html.= '<li class="breadcrumb-item active">'.$category[0]->cat_name.'</li>';
            }else{
                $html.= get_the_category_list(' - ');
            }if(is_page()) {
                $html.= '<li class="breadcrumb-item active">'.get_the_title().'</li>';
            }if (is_single()) {
                $html.= '<li class="breadcrumb-item active">'.get_the_title().'</li>';
            }
        }
    }
    return $html;
}

add_filter( 'init', 'the_breadcrumbs' );

register_sidebar( array(
    'name'          => __( 'Widgets Escuelas', 'excellence' ),
    'id'            => 'home-school',
    'description'   => 'Areas de escuelas en la pagina principal',
    'class'         => 'box-area',
    'before_widget' => '<li id="home-%1$s" class="widget box %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="title-section">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => __( 'Widgets Revista Persona', 'excellence' ),
    'id'            => 'home-magazine',
    'description'   => 'Texto de la sección revista',
    'before_widget' => '<div id="home-%1$s" class="widget box-img %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="title-section">',
    'after_title'   => '</h3>',
) );

register_sidebar( array(
    'name'          => __( 'Widgets Revista Institución', 'excellence' ),
    'id'            => 'home-magazine-institution',
    'description'   => 'Texto de la sección revista',
    'before_widget' => '<div id="home-%1$s" class="widget box-img %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="title-section">',
    'after_title'   => '</h3>',
) );

register_sidebar( array(
    'name'          => __( 'Formulario Contacto Persona', 'excellence' ),
    'id'            => 'home-form-magazine',
    'description'   => 'Añade un formulario en la sección revista',
    'before_widget' => '<div id="home-%1$s" class="widget box-form %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="title-section">',
    'after_title'   => '</h3>',
) );

register_sidebar( array(
    'name'          => __( 'Formulario Contacto Institución', 'excellence' ),
    'id'            => 'home-form-magazine-institution',
    'description'   => 'Añade un formulario en la sección revista',
    'before_widget' => '<div id="home-%1$s" class="widget box-form %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="title-section">',
    'after_title'   => '</h3>',
) );

if ( ! function_exists( 'excellence_the_excerpt' ) ) :

    /**
     * Generate excerpt.
     *
     * @since 1.0.0
     *
     * @param int     $length Excerpt length in words.
     * @param WP_Post $post_obj WP_Post instance (Optional).
     * @return string Excerpt.
     */
    function excellence_the_excerpt( $length = 0, $post_obj = null ) {

        global $post;

        if ( is_null( $post_obj ) ) {
            $post_obj = $post;
        }

        $length = absint( $length );

        if ( 0 === $length ) {
            return;
        }

        $source_content = $post_obj->post_content;

        if ( ! empty( $post_obj->post_excerpt ) ) {
            $source_content = $post_obj->post_excerpt;
        }

        $source_content = preg_replace( '`\[[^\]]*\]`', '', $source_content );
        $trimmed_content = wp_trim_words( $source_content, $length, '&hellip;' );
        return $trimmed_content;

    }

endif;
/**
 * Include default theme options.
 */
require get_template_directory() . '/inc/customizer/default.php';
