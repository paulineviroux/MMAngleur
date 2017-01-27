<?php
/*
    Template Name: Liens utiles
*/

get_header();

?>

<body>
    <header class="headerSec">
        <a href="<?php echo get_option('home'); ?>/" title="Retour à la page d'accueil" class="headerSec__backhome"><img class="headerSec__backhomeLogo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.png"></a>
        <h1 role="heading" aria-level="1" class="headerSec__title"><?php the_title(); ?></h1>
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
    <section class="mainLinks">
        <h2 role="heading" aria-level="2" class="hidden">Contenu principal</h2>
        <div class="mainLinks__container">
            <h3 role="heading" aria-level="3" class="mainLinks__title">Quelques liens utiles :</h3>    
            <?php if(have_posts()):?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile;?>
            <?php endif;?>
        </div>

<?php get_footer();