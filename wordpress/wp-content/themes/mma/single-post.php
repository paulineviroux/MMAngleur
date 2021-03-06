<?php
/*
    Template Name: Single Article
*/

get_header();

?>

<body>
    <header class="headerSec">
        <a href="<?php echo get_option('home'); ?>/" title="Retour à la page d'accueil" class="headerSec__backhome"><img class="headerSec__backhomeLogo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.png"></a>
        <h1 role="heading" aria-level="1" class="headerSec__title">Fiches techniques</h1>
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
    <section class="textTemplate">
        <h2 role="heading" aria-level="2" class="hidden">Contenu principal</h2>
        <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <h3 role="heading" aria-level="3" class="textTemplate__subtitleBis"><?php the_title(); ?></h3>
            <img class="textTemplate__img" src="<?php the_field( 'img' ); ?>" alt="">
            <p class="textTemplate__description"><?php the_field( 'description' ); ?></p>
            <div class="textTemplate__container">
                <?php if( have_rows( 'container' ) ): ?>
                    <?php while ( have_rows( 'container' ) ) : the_row(); ?>
                    <div class="textTemplate__container">
                        <h3 role="heading" aria-level="3" class="textTemplate__title"><?php the_sub_field( 'title' ) ;?></h3>
                        <?php the_sub_field( 'text' ) ;?>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        <?php endwhile; endif; ?> 
        <a href="<?php bloginfo('url'); ?>/fiches/" class="textTemplate__back">Retour aux fiches</a>
        <p class="textTemplate__next"><?php next_post_link( '%link', 'Article suivant '); ?><p>
        
<?php get_footer();