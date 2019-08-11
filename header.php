<?php
/**
 * The template for displaying the header
 *
 *
 * @package WordPress
 * @subpackage Excelencia
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700,800&display=swap" rel="stylesheet">
    <!-- Libraries CSS Files -->
    <?php wp_head(); ?>
</head>

<style type="text/css">
    <?php

     $colorTextSection = get_theme_mod('cd_section_text_color') ? get_theme_mod('cd_section_text_color') : '#952331';
     $bgTestimonySection = get_theme_mod('cd_testimony_color_bg') ? get_theme_mod('cd_testimony_color_bg') : '#952331';
     $textTestimonySection = get_theme_mod('cd_testimony_color_text') ? get_theme_mod('cd_testimony_color_text') : '#FFFFFF';
     $bgFooter = get_theme_mod('cd_footer_color_bg') ? get_theme_mod('cd_footer_color_bg') : '#3e3838';
     $textFooter = get_theme_mod('cd_footer_color_text') ? get_theme_mod('cd_footer_color_text') : '#FFFFFF';
     $bgNotice = get_theme_mod('cd_notice_color_bg') ? get_theme_mod('cd_notice_color_bg') : '#6b3c62';
     $bgMenu = get_theme_mod('cd_menu_color') ? get_theme_mod('cd_menu_color') : '#000000';
     ?>
    .section-header h3{
        color: <?php echo $colorTextSection; ?>;
    }
    .section-bg{
        background: <?php echo $bgTestimonySection; ?>;
    }
    .section-bg .section-header h3{
        color: <?php echo $textTestimonySection; ?>;
    }
    #footer .footer-top {
        background: <?php echo $bgFooter; ?>;
    }
    #footer .footer-top .footer-links ul a {
        color: <?php echo $textFooter; ?>;
    }
    #footer .footer-top h4{
        color: <?php echo $textFooter; ?>;
    }
    #footer{
        color: <?php echo $textFooter; ?>;
    }
    #about .about-col .velo{
        background: <?php echo $bgNotice; ?>;
    }
    .header .menu-top{
        background: <?php echo $bgMenu; ?>cc;
    }
    .header.no-fixed .menu-top{
        background-color: <?php echo $bgMenu; ?>;
    }
    .navbar-nav .dropdown-menu{
        background-color: <?php echo $bgMenu; ?>;
    }
    .page-title h2{
        color: <?php echo $colorTextSection; ?>;
    }
</style>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <!--==========================
    Header
    ============================-->
<?php if ( is_front_page()) : ?>
    <header id="header" class="header">
<?php else : ?>
    <header id="header" class="header no-fixed">
<?php endif; ?>
    <nav class="navbar navbar-expand-md navbar-top">
      <ul class="navbar-nav d-none d-md-flex">
          <li class="nav-item active">
              <a class="nav-link" href="#">Personas</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Instituciones</a>
          </li>
      </ul>
      <ul class="navbar-nav ml-md-auto d-none d-md-flex">
          <li class="nav-item">
              <a class="nav-link" href="#">Publicaciones</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Noticias</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Bolsa de trabajo</a>
          </li>
      </ul>
    </nav>
    <div class="menu-top">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-dark">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php excellence_the_custom_logo();  ?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                    <?php
                    wp_nav_menu(
                        array(
                            'menu'            => 'primary',
                            'theme_location'  => 'primary',
                            'container'       => 'div',
                            'container_id'    => 'bs4navbar',
                            'container_class' => 'collapse navbar-collapse',
                            'menu_id'         => false,
                            'menu_class'      => 'navbar-nav mr-auto',
                            'depth'           => 2,
                            'fallback_cb'     => 'bs4navwalker::fallback',
                            'walker'          => new bs4navwalker()
                        )
                    );
                    ?>

                <?php endif; ?>


            </nav>

          </div>
    </div>
  </header><!-- #header -->
