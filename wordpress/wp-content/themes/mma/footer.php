</section> 
    <footer class="footer">
        <h2 role="heading" class="hidden">Informations du footer</h2>
        <section class="nav-footer">
            <h3 role="heading" aria-level="3" class="hidden">Navigation du footer</h3>
            <nav class="nav-footer__nav">
                <h4 role="heading" aria-level="4" class="hidden">Navigation secondaire</h4>
                <ul class="nav-footer__list">
                    <?php foreach (b_get_menu_items( 'nav-footer' ) as $navItem) : ?>
                        <a href="<?php echo $navItem->url; ?>" class="nav-footer__link"><li class="nav-footer__item <?= $navItem->icon ?>"><?php echo $navItem->label; ?></li></a>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </section>
        <section class="infos-footer">
            <h3 role="heading" aria-level="3" class="hidden">Informations de contact</h3>
            <div class="infos-footer__item">
                <p class="infos-footer__address">Rue Vaudrée, 48 4031 Angleur, BE</p>
            </div>
            <div class="infos-footer__item">
                <a href="mailto:info@csi.be" class="infos-footer__mail">info@csi.be</a>
            </div>
            <div class="infos-footer__item">
                <a href="tel:003242218888" class="infos-footer__tel">+32 (0)4 221 88 88</a>
            </div>
        </section>
        <section class="newsletter">
            <h3 role="heading" aria-level="3" class="hidden">Inscription à la newsletter</h3>

            <form action="" class="newsletter__form">
            <p class="newsletter__intro">Restez informés en vous inscrivant à notre newsletter hebdomadaire.</p>
              <fieldset>
                <div class="newsletter__container">
                  <legend class="newsletter__label">S'inscrire à la newsletter</legend>
                    <?php echo do_shortcode( '[newsletter_form form="2"]' ); ?>
                </div>   
              </fieldset>    
            </form>
            <small class="mention">Design by Pauline Viroux. 2016</small>
        </section>
        <?php wp_footer(); ?>
     </footer>
</body>
</html>