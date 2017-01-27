<?php
/*
    Template Name: Homepage
*/

get_header();

?>

<body>
    <header class="header">
        <a href="<?php echo get_option('home'); ?>/" title="Retour à la page d'accueil" class="header__backhome"><img class="header__backhomeLogo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.png"></a>
        <div class="banner">
            <h1 role="heading" aria-level="1" class="banner__title">Centre de Santé Intégré d’Angleur</h1>
            <span class="banner__span">Pour une santé accessible</span>
        </div>
        <nav class="main-nav">
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
    <section class="main">
        <h2 role="heading" aria-level="2" class="hidden">Contenu principal</h2>
        
            <div class="presentation">
            <?php if(have_posts()):?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php echo get_field('intro'); ?>
            <?php endwhile;?>
            <?php endif;?>
            </div>
        
        <div class="infos">
            <div class="contact">
                <div class="contact__container">
                    <h3 role="heading" aria-level="3" class="contact__title">Nous contacter</h3>
                    <p class="contact__address">Rue Vaudrée, 48 4031 Angleur, BE</p>
                    <a class="contact__phone" href="tel:+3242218888">+32 (0)4 221 88 88</a>
                    <a class="contact__mail" href="mailto:info@csi.be">info@csi.be</a>    
                </div>
            </div>
            <div class="timetable">
                <div class="timetable__container">
                    <h3 role="heading" aria-level="3" class="timetable__title">Nos horaires</h3>
                    <?php if(have_posts()):?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php echo get_field('timetable'); ?>
                    <?php endwhile;?>
                    <?php endif;?>
                </div>
            </div>
        </div>

<?php get_footer();