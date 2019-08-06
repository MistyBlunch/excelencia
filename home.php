<?php

//Template Name: Home Personas

get_header();
$sliders = getSlider();
$testimony = getTestimony();
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
            <div class="carousel-background">
                <img src="<?php echo $item['image_full'][0] ?>" alt="<?php echo $item['post_title'] ?>">
            </div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="subtitle"><?php echo $item['post_subtitle']; ?></h2>
                <h1 class="title"><?php echo $item['post_title']; ?></h1>
                <div class="description">
                    <p><?php echo $item['post_description']; ?></p>
                </div>
                <a href="<?php echo $item['post_url'] ?>" class="btn-get-started scrollto">
                    <?php
                    if($item['post_btn']!=''){
                        echo $item['post_btn'];
                    } else {
                        echo 'Más información';
                    }
                    ?>
                </a>
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

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="text-center">
          <h1 class="section-title">Áreas formativas</h1>
          <h2 class="section-subtitle">Cursos, diplomados y congresos</h2>
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

    <!--==========================
      Services Section
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
                    <h3>Solicita tu revista Excelencia ¡Es gratis!</h3>
                      <form>
                        <div class="form-group">
                          <input type="text" class="form-control" id="name"  placeholder="Nombres y apellidos">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="email" placeholder="Correo electrónico">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="wathsapp" placeholder="Celular o Wathsapp">
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="autorize">
                          <label class="form-check-label" for="autorize">Autorizo a Excelencia para enviarme los boletines de la revista virtual.</label>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Solicitar la revista excelencia</button>
                      </form>
                  </div>
                </div>
              </div>
            </div>
            
  
          </div>
  
        </div>
      </section><!-- #services -->

      <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Nuestros próximos eventos</h3>
        </header>

        <ul class="owl-carousel clients-carousel">
          <li class="event-list">
            <div class="event">
                <div class="date">
                  <div class="day">01</div>
                  <div class="month">
                    Ago
                  </div>
                </div>
                <div class="title">
                  <h3>VI Congreso de trabajo social en Salud - Lima</h3>
                </div>
                <div class="more">
                  <a href="#">Más información</a>
                </div>
            </div>
          </li>
          <li class="event-list">
            <div class="event">
                <div class="date">
                  <div class="day">15</div>
                  <div class="month">
                    Set
                  </div>
                </div>
                <div class="title">
                  <h3>VI Congreso de trabajo social en Salud - Lima</h3>
                </div>
                <div class="more">
                  <a href="#">Más información</a>
                </div>
            </div>
          </li>
          <li class="event-list">
            <div class="event">
                <div class="date">
                  <div class="day">25</div>
                  <div class="month">
                    Oct
                  </div>
                </div>
                <div class="title">
                  <h3>VI Congreso de trabajo social en Salud - Lima</h3>
                </div>
                <div class="more">
                  <a href="#">Más información</a>
                </div>
            </div>
          </li>
          <li class="event-list">
            <div class="event">
                <div class="date">
                  <div class="day">21</div>
                  <div class="month">
                    Nov
                  </div>
                </div>
                <div class="title">
                  <h3>VI Congreso de trabajo social en Salud - Lima</h3>
                </div>
                <div class="more">
                  <a href="#">Más información</a>
                </div>
            </div>
          </li>
          <li class="event-list">
            <div class="event">
                <div class="date">
                  <div class="day">21</div>
                  <div class="month">
                    Nov
                  </div>
                </div>
                <div class="title">
                  <h3>VI Congreso de trabajo social en Salud - Lima</h3>
                </div>
                <div class="more">
                  <a href="#">Más información</a>
                </div>
            </div>
          </li>
        </ul>

      </div>
    </section><!-- #clients -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Noticias</h3>
        </header>

        <div class="row about-cols">

            <?php
            $args = array (

                'posts_per_page' =>6,
                'post_type' => 'post',
                'post_status' => 'publish',
                'paged' => 1,
            );

            $loop = new WP_Query($args);
            if ( $loop->have_posts() ) :
            $i=-1;
            while ($loop->have_posts()) : $loop->the_post(); $i++;?>

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                  <div class="velo"></div>
                  <img src="<?php echo the_post_thumbnail_url(array(360, 270)) ?>" alt="" class="img-fluid">
              </div>
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
    </section><!-- #about -->

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
                <div id="video-<?php echo $item['ID'] ?>" class="video-item" data-toggle="modal" data-target="#modal-video-<?php echo $item['ID'] ?>">
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
      <?php foreach ($testimony as $item){ ?>
        <div class="modal fade" id="modal-video-<?php echo $item['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-label-<?php echo $item['ID'] ?>" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modal-label-<?php echo $item['ID'] ?>"><?php echo $item['post_title'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="embed-responsive embed-responsive-16by9">
                  <?php echo $item['post_content'] ?>
                  </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

    <!--==========================
      Team Section
    ============================-->
    <!-- <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->

   
  </main>

<?php  get_footer(); ?>
