<footer class="footer">
    <!-- developer -->
    <div class="footer__developer bg-primary-500 py-1">
        <div class="container">

            <!-- row -->
            <div class="footer__developer__row d-flex jc-between ai-center clr-white-500">

                <!-- agency -->
                <div class="footer__developer__row__agency">
                    <p><small>Desenvolvido por <b><a rel="nofollow noreferrer noopener" href="<?= DEV['url']; ?>" target="_blank" class="link-white-500" title="Agência Especializada em Marketing Digital"><?= DEV['name']; ?></a></b></small>
                    </p>
                </div>
                <!-- end of agency -->

                <!-- validator -->
                <?php if (!is_404()): ?>
                    <div class="footer__developer__row__validator">
                        <?php
                        $protocols = array('http://', 'http://www.', 'https://', 'https://www.', 'www.');

                        if (is_home()) {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl'));
                        } elseif (is_single()) {
                            $urlBase = str_replace($protocols, "", get_the_permalink());
                        } else {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl')) . '/' . (get_page_uri());
                        }
                        ?>
                        <p><small><a rel="nofollow noreferrer noopener" class="d-flex jc-center ai-center link-white-500"  href="https://validator.w3.org/nu/?doc=https%3A%2F%2F<?= $urlBase; ?>%2F" target="_blank" title="Tecnologia W3C"><i class="icon-html"></i>W3C Validator </a></small></p>
                    </div>
                <?php endif; ?>
                <!-- end of validator -->
            </div>
            <!-- end of row -->

        </div>
    </div>
    <!-- end of developer -->
</footer>