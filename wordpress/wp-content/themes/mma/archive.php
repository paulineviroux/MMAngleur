<?php
/*
    Template Name: Archive
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
    <section class="mainSheets">
        <h2 role="heading" aria-level="2" class="hidden">Contenu principal</h2>
        <?php $posts = new WP_Query( ['post_type' => 'post'] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post(); ?>
            <div class="mainSheets__container">
                <img src="<?php the_field( 'small_image' ); ?>" alt="" class="mainSheets__img">
                <h3 role="heading" aria-level="3" class="mainSheets__title"><?php the_title(); ?></h3>
                <?php the_field( 'small_description' ); ?>
                <a href="<?php the_permalink(); ?>" class="maintSheets__link" title="Lire la suite de la fiche">Lire la suite...</a>
            </div>  
        <?php endwhile; endif; ?> 
<?php get_footer();