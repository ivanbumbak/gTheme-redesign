        <footer class="site-footer">
            <div class="footer-wrapper">
                <!-- Section half footer -->
                <section class="footer-half">
                    <img src="<?php bloginfo('template_url'); ?>/img/footer-logo.png" alt="Logo">

                    <div class="footer-info">
                        <h1>Šibenik</h1>
                        <p><i class="fal fa-clock"></i>Pon-pet: 8:00 - 15:00 &bull; Subotom: 8:00 - 12:00</p>
                        <p><i class="fal fa-map-marker-alt"></i>Novo naselje 28 Bilice, 22000 Šibenik, Hrvatska</p>
                        <p><i class="fal fa-phone-alt"></i>Tel: +385 (0)22 336 634 &bull; Fax: +385 (0)22 331 333</p>
                        <p><i class="fal fa-envelope"></i>gambi@si.t-com.hr</p>
                        <p><i class="fal fa-info"></i>OIB: 22418618872 &bull; IBAN: HR7223900011199009367</p>
                    </div>
                </section>

                <!-- Section half footer -->
                <section class="footer-half">
                    <div id="map"></div>
                </section>
            </div>
        </footer>

        <div class="footer-cc">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | Sva prava pridržana.</p>

            <div id="social-icons">
                <a href="https://www.facebook.com/gambidoo" title="Facebook page" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" title="Instagram page" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <?php wp_footer(); ?>

        <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_fvo1MpSXnvxd9uSnHuV-szUzneljZ7o&callback=mapLocation"></script>
    </body>
</html>