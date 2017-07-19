<?php
/*
    Template Name: Contact
*/

get_header();

?>

<body>
    <header class="headerSec">
        <a href="<?php echo get_option('home'); ?>/" title="Retour à la page d'accueil" class="headerSec__backhome"><img class="headerSec__backhomeLogo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.png"></a>
        <h1 role="heading" aria-level="1" class="headerSec__title"><?php the_title(); ?></h1>
        <nav role="nav" class="main-nav">
            <h2 role="heading" aria-level="2" class="hidden">Navigation principale</h2>
            <input id="toggle-secondNav" class="main-nav__input" type="checkbox">
            <span></span>
            <span></span>
            <span></span>
            <ul class="main-nav__list">
                <?php foreach (b_get_menu_items( 'main-nav' ) as $navItem) : ?>
                    <li class="main-nav__item <?= $navItem->icon ?>"><a href="<?php echo $navItem->url; ?>" class="main-nav__link"><?php echo $navItem->label; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    <section class="mainContact">
        <h2 role="heading" aria-level="2" class="hidden">Contenu principal</h2>
        <section class="cardDoctor">  
            <h3 role="heading" aria-level="3" class="cardDoctor__title">Thérapeutes et horaires</h3>
            <?php $posts = new WP_Query( ['post_type' => 'project'] ); if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post(); ?>
                <div class="cardDoctor__container">
                    <img src="<?php the_field( 'img' ); ?>" alt="Portrait du médecin <?php the_title(); ?> " class="cardDoctor__img">
                    <h4 class="cardDoctor__name"><?php the_title(); ?></h4>
                    <?php the_field('specialisation'); ?>
                    <?php the_field('timetable'); ?>
                </div>
            <?php endwhile; endif; ?>
        </section>
        <section class="contactUs">
            <h3 role="heading" aria-level="3" class="contactUs__title">Contactez-nous</h3>
            <p class="contactUs__intro">Pour toutes questions supplémentaires, candidatures spontannées, demande de partenariat ou autre, n’hésitez pas à nous contacter via notre formulaire ou directement à l’adresse suivante : <a class="contactUs__mail" href="mailto:info@csi.be">info@csi.be</a></p>
            <div class="contactForm">
                <?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' ); ?>
            </div>
        </section>
        <section class="contactInfos">
            <h3 role="heading" aria-level="3" class="contactInfos__title">Retrouvez-nous</h3>
            <img class="contactInfos__map" src="<?php echo get_template_directory_uri(); ?>/assets/images/map.jpg" alt="">
            <div class="contactInfos__container">
                <a href="https://goo.gl/maps/VkfpbbpZysz" class="contactInfos__link">Voir le plan <span class="contactInfos__icon"></span></a>
                <div class="contactInfos__addressContainer">
                    <p class="contactInfos__address">Rue Vaudrée, 48 4031 Angleur, BE</p>
                </div>
                <div class="contactInfos__infoContainer">
                    <a class="contactInfos__mail" href="mailto:info@csi.be">info@csi.be</a>
                    <a class="contactInfos__tel" href="tel:+3242218888">+32 (0)4 221 88 88</a>
                </div>
                
            </div>
        </section>

<?php get_footer();