<?php

//Template Name: Home Personas

get_header();
$sliders = getSlider('home');
$testimony = getTestimony();
$events = getEvents();
?>
<!--==========================
  Intro Section
============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <?php foreach ($sliders as $item){ ?>
          <div id="slider-<?php echo $item['ID'] ?>" class="carousel-item <?php echo $item['post_active'] ?>">
              <?php if(!$item['post_url_video']) {?>
              <div class="carousel-background">
                <img src="<?php echo $item['image_full'][0] ?>" alt="<?php echo $item['post_title'] ?>">
            </div>
              <?php } else { ?>
              <div class="carousel-video">
                  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                      <source src="<?php echo $item['post_url_video'] ?>" type="video/mp4">
                  </video>
              </div>
              <?php } ?>

            <div class="carousel-container">
                <div class="container">
                    <div class="carousel-content">
                        <h2 class="subtitle"><?php echo $item['post_subtitle']; ?></h2>
                        <h1 class="title"><?php echo $item['post_title']; ?></h1>
                        <div class="description">
                            <p><?php echo $item['post_description']; ?></p>
                        </div>
                        <div class="link-action">
                            <a href="<?php echo $item['post_url'] ?>" class="btn-get-started scrollto">
                                <?php
                                if($item['post_btn']!=''){
                                    echo $item['post_btn'];
                                } else {
                                    echo 'Más Información';
                                }
                                ?>
                            </a>

                            <?php if($item['post_url_2']!=''){ ?>
                            <a href="<?php echo $item['post_url_2'] ?>" class="btn-get-started_2 scrollto">
                                <?php
                                if($item['post_btn_2']!=''){
                                    echo $item['post_btn_2'];
                                } else {
                                    echo 'Más Información';
                                }
                                ?>
                            </a>
                            <?php } ?>

                            <?php if($item['post_url_3']!=''){ ?>

                            <a href="<?php echo $item['post_url_3'] ?>" class="btn-get-started_3 scrollto">
                                <?php
                                if($item['post_btn_3']!=''){
                                    echo $item['post_btn_3'];
                                } else {
                                    echo 'Más Información';
                                }
                                ?>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
          </div>
          <?php } ?>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

      <?php if (get_theme_mod('cd_display_area') == 1 ) { ?>
    <!--==========================
      Areas Formativas
    ============================-->
    <section id="featured-services" class="wow fadeInUp">
        <header class="section-header">
            <h3>Áreas formativas</h3>
        </header>
      <div class="text-center">
          <h4 class="section-subtitle">Cursos, diplomados y congresos</h4>
      </div>
      
      <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <ul class="areas">
                    <?php if ( is_active_sidebar('home-school') ) : ?>
                        <?php dynamic_sidebar('home-school'); ?>
                    <?php endif; ?>
                </ul>

            </div>

        </div>
      </div>
    </section><!-- #featured-services -->
      <?php } ?>

      <?php if (get_theme_mod('cd_display_magazine') == 1 ) { ?>
    <!--==========================
      Area de revista
    ============================-->
    <section id="services">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <div class="magazine">
                  <?php if ( is_active_sidebar('home-magazine') ) : ?>
                      <?php dynamic_sidebar('home-magazine'); ?>
                  <?php endif; ?>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <div class="box-form">
                <div class="card">
                  <div class="card-body">
                      <?php if ( is_active_sidebar('home-form-magazine') ) : ?>
                          <?php dynamic_sidebar('home-form-magazine'); ?>
                      <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- #services -->

      <?php } ?>

      <?php if (get_theme_mod('cd_display_events') == 1 ) { ?>

      <!--==========================
      Area de Eventos
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Nuestros próximos eventos</h3>
        </header>

        <ul class="owl-carousel clients-carousel">
          <?php foreach ($events as $item){ ?>
          <li class="event-list">
            <div class="event">
                <div class="date">
                  <div class="day" style="background-color: <?php echo $item['category_color'].'bd'; ?>"><?php echo $item['event_day']; ?></div>
                  <div class="month" style="background-color: <?php echo $item['category_color']; ?>">
                    <?php echo $item['event_month']; ?>
                  </div>
                </div>
                <div class="title">
                  <h3><?php echo $item['post_title'] ?></h3>
                </div>
                <div class="more">
                  <a href="<?php echo $item['post_url_landing'] ?>" target="_blank">Más información</a>
                </div>
            </div>
          </li>
          <?php } ?>
        </ul>

      </div>
    </section><!-- #clients -->

      <?php } ?>

      <?php if (get_theme_mod('cd_display_notice') == 1 ) { ?>
    <!--==========================
      Area de Noticias
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Noticias</h3>
        </header>

          <!-- Noticias tipo BCP -->

          <div class="list-notice wow fadeInUp">
              <div class="row">
          <?php
              $args = array (

                  'posts_per_page' =>6,
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'paged' => 1,
                  'category_name' => 'notices'
              );

              $loop = new WP_Query($args);
              if ( $loop->have_posts() ) :
                while ($loop->have_posts()) : $loop->the_post();
              ?>
                  <div class="box-type-1 col-sm-4">

                        <div class="box-notice bcp-box-1" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
                            <div class="image"></div>
                            <div class="description">
                                <h2 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                <?php
                                $excerpt = excellence_the_excerpt( 20 );
                                echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                            </div>
                        </div>

                  </div>

              <?php endwhile; wp_reset_postdata(); endif; ?>

              </div>
          </div>

          <!-- Fin de bloque -->

      </div>
    </section><!-- #notice -->
      <?php } ?>
      <?php if (get_theme_mod('cd_display_publications') == 1 ) { ?>
     <!--==========================
          Area de Publicaciones
        ============================-->
      <section id="about">
          <div class="container">

              <header class="section-header">
                  <h3>Publicaciones</h3>
              </header>

              <!-- Noticias tipo BCP -->

              <div class="list-notice wow fadeInUp">
                  <div class="row">
                      <?php
                      $args = array (

                          'posts_per_page' =>6,
                          'post_type' => 'post',
                          'post_status' => 'publish',
                          'paged' => 1,
                          'category_name' => 'publications'
                      );

                      $loop = new WP_Query($args);
                      if ( $loop->have_posts() ) :

                          while ($loop->have_posts()) : $loop->the_post();

                              ?>
                              <div class="box-type-2 col-sm-6">

                                  <div class="box-notice bcp-box-2" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
                                      <div class="image"></div>
                                      <div class="description">
                                          <h2 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                          <?php
                                          $excerpt = excellence_the_excerpt( 20 );
                                          echo wp_kses_post( wpautop( $excerpt ) );
                                          ?>
                                      </div>
                                  </div>

                              </div>

                          <?php endwhile; wp_reset_postdata(); endif; ?>

                  </div>
              </div>

              <!-- Fin de bloque -->

          </div>
      </section><!-- #publications -->
    <?php } ?>

      <?php if (get_theme_mod('cd_display_testimony') == 1 ) { ?>
    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonios de nuestros clientes</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">
            <?php foreach ($testimony as $item){ ?>
              <div class="testimonial-item">
                <div id="video-<?php echo $item['ID'] ?>" class="video-item" data-title="<?php echo $item['post_title'] ?> - <?php echo $item['post_description'] ?>"
                     data-toggle="modal" data-src="<?php echo $item['url_video'] ?>"
                     data-target="#modal-video">
                  <div class="video">
                    <div class="velo"></div>
                      <img src="<?php echo $item['image_full'][0] ?>" class="img-fluid" alt="<?php echo $item['post_title'] ?>">
                    <i class="fa fa-play" aria-hidden="true"></i>
                  </div>
                  <div class="video-content">
                    <p class="name"><?php echo $item['post_title'] ?></p>
                    <p class="description"><?php echo $item['post_description'] ?></p>
                  </div>
                </div>
              </div>
            <?php } ?>

        </div>

      </div>
    </section><!-- #testimonials -->

        <div class="modal fade modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modal-label"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                  </div>
              </div>
            </div>
          </div>
        </div>


      <?php }?>


   
  </main>

<?php  get_footer(); ?>
