<!DOCTYPE html>
<html <?php get_language_attributes();?>>
<head>
    <meta charset="<?php bloginfo("charset");?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php wp_title('', true, '' ); ?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
      <?php wp_body_open() ?>

    <header class="site-header">
        <a class="site-header__logo" href="<?php echo home_url( '/' ); ?>">DEV RESTAURANT</a>
        <div class="site-header__menu-btn">
            <p>Menu  <img src="<?= get_template_directory_uri(); ?>/assets/svg/bullet-list-67.svg" alt=""></p>
        </div>
        <div class="site-header__dropdown">
            <?php
                wp_nav_menu( array( 
                    'theme_location' => 'main',
                    "container" => "ul",
                    'menu_class' => 'site__header__menu', )
                );
            ?>
        </div>
        
        
    </header>