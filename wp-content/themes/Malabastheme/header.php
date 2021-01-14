<!DOCTYPE html>
<html <?php get_language_attributes();?>>
<head>
    <meta charset="<?php bloginfo("charset");?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Header</title>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
      <?php wp_body_open() ?>

    
    <header class="site__header">
        <a class="site__header__logo" href="<?php echo home_url( '/' ); ?>">DEV RESTAURANT</a>
        <?php wp_nav_menu( array( 
         'theme_location' => 'main',
         "container" => "ul",
         'menu_class' => 'site__header__menu', ) ); ?>
    </header>
       