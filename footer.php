<!--==========================
    Footer
  ============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Nosotros</h4>
                    <?php if ( has_nav_menu( 'footer-about' ) ) : ?>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-about',
                                'menu_class' => 'footer-about',
                                'link_before' => '<i class="ion-ios-arrow-right"></i>'
                            )
                        );
                        ?>
                    <?php endif; ?>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Nuestras escuelas</h4>
                    <?php if ( has_nav_menu( 'footer-school' ) ) : ?>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-school',
                                'menu_class' => 'footer-school',
                                'link_before' => '<i class="ion-ios-arrow-right"></i>'
                            )
                        );
                        ?>
                    <?php endif; ?>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>RSE y ODS</h4>
                    <?php if ( has_nav_menu( 'footer-res_ods' ) ) : ?>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-res_ods',
                                'menu_class' => 'footer-res-ods',
                                'link_before' => '<i class="ion-ios-arrow-right"></i>'
                            )
                        );
                        ?>
                    <?php endif; ?>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <?php if (get_theme_mod('cd_display_contact') == 1 ) { ?>
                        <h4>Contáctanos</h4>

                        <p>
                            <strong>Teléfono:</strong> <?php echo get_theme_mod('cd_phone_contact'); ?> <br>
                            <strong>Email:</strong> <?php echo get_theme_mod('cd_text_contact'); ?><br>
                        </p>

                        <div class="social-links">
                            <a target="_blank" href="<?php echo get_theme_mod('cd_facebook_contact'); ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="<?php echo get_theme_mod('cd_linkedin_contact'); ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            <a target="_blank" href="<?php echo get_theme_mod('cd_youtube_contact'); ?>" class="twitter"><i class="fa fa-youtube"></i></a>
                            <a target="_blank" href="<?php echo get_theme_mod('cd_book_claims'); ?>" class="book">
                                <img src="<?php echo get_template_directory_uri() ?>/img/libro_reclama.png" />
                            </a>
                            <a target="_blank" href="<?php echo get_theme_mod('cd_campus_virtual'); ?>" class="book">
                                <img src="<?php echo get_template_directory_uri() ?>/img/aula_virtual.png" />
                            </a>
                        </div>

                    <?php } ?>

                </div>



            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Grupo Excelencia</strong>. Derechos reservados
        </div>
        <div class="credits">
            Desarrollado por <a href="https://tunqui.pe/">Tunqui.pe</a>
        </div>
    </div>
</footer><!-- #footer -->
<!-- Modal Wathsapp -->
<?php

$phones = getWathsapp();

?>
<div class="modal fade" id="modalWathsapp" tabindex="-1" role="dialog" aria-labelledby="modalWathsappTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg id="Grupo_3232" data-name="Grupo 3232" xmlns="http://www.w3.org/2000/svg" width="25.176" height="24.996" viewBox="0 0 25.176 24.996">
                        <path id="Trazado_1125" data-name="Trazado 1125" d="M15.226,2.937,5.815,12.5l9.411,9.561L12.329,25,0,12.5,12.329,0Z" transform="translate(9.95 0)" fill="#343434"></path>
                        <path id="Trazado_1126" data-name="Trazado 1126" d="M0,2.937,9.411,12.5,0,22.06,2.9,25,15.226,12.5,2.9,0Z" transform="translate(0)" fill="#343434"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <h3>¿En qué producto estás interesado?</h3>
                <p>(Solo para consultas de información)</p>
                <?php if($phones): ?>
                <ul>
                    <?php foreach ($phones as $phone) : ?>
                        <?php if (!empty($phone['area_wathsapp']) && $phone['area_view']) : ?>
                            <li>
                                <a href="https://wa.me/<?php echo $phone['area_wathsapp'] ?>"  target="_blank" title="<?php echo $phone['area_name'] ?>"> <?php echo $phone['area_name'] ?> </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="wps-footer">
    <?php if(get_theme_mod('cd_phone_contact')) : ?>
    <a href="tel:<?php echo get_theme_mod('cd_phone_contact'); ?>" class="btn btn-primary btn-wathsapp" title="Número de teléfono">
        <img src="<?php echo get_template_directory_uri(); ?>/img/call-answer.svg" width="44px" height="44px" />
    </a>
    <?php endif; ?>
    <button title="Wathsapp" type="button" class="btn btn-primary btn-wathsapp" data-toggle="modal" data-target="#modalWathsapp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.svg" width="44px" height="44px" />
    </button>
</div>


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->
<?php wp_footer(); ?>
</body>
</html>
