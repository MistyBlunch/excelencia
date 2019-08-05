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
    <title>Grupo Excelencia</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <!-- Libraries CSS Files -->
    <?php wp_head(); ?>
</head>



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
          <li class="nav-item">
              <a class="nav-link" href="#">Sedes</a>
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
                    <?php excellence_the_custom_logo(); ?>
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
