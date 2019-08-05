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
                    <h4>Nuestas escuelas</h4>
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
                    <h4>Contáctanos</h4>
                    <p>
                        <strong>Teléfono:</strong> +1 480-0178<br>
                        <strong>Email:</strong> informes@grupoexcelencia.org<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

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
