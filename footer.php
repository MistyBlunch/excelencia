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

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->
<?php wp_footer(); ?>
</body>
</html>
