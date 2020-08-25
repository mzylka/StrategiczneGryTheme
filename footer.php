</main>

<footer class="footer u-padding-top-big">
    <div class="footer__content container">
        <div class="footer__links">
            <div class="footer__links-box">
                <a class="footer__link" href="https://www.facebook.com/StrategiczneGry/" target="_blank"><svg class="footer__link-svg footer__link-svg--facebook"><use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-facebook2"></use></svg></a>
                <a class="footer__link" href="https://discord.gg/hmrfBpa" target="_blank"><svg class="footer__link-svg footer__link-svg--discord"><use xlink:href="<?php echo get_template_directory_uri(); ?>/images/sprite.svg#icon-discord"></use></svg></a>
            </div>
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