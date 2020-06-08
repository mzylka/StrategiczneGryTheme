</main>

<footer class="footer u-padding-top-big">
    <div class="footer__content container">
        <div class="footer__links">
            <a href="https://www.facebook.com/StrategiczneGry/"><svg class="footer__fb"><use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-facebook2"></use></svg></a>
        </div>
        <div class="footer__menu">
            <nav class=footer__navigation role="navigation">
                <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer',
                                'menu_class'     => 'footer__navigation-menu',
                            )
                        );
                ?>
            </nav>
        </div>
        <div class="footer__copyright">© Copyright strategicznegry.pl. All rights reservred.</div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>