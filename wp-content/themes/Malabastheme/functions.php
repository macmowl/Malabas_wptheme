<?php
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function malabas_register_assets() {
    
    // Déclarer jQuery
    wp_deregister_script( 'jquery' ); // On annule l'inscription du jQuery de WP
    wp_enqueue_script( // On déclare une version plus moderne
        'jquery', 
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
        false, 
        '3.3.1', 
        true 
    );
    
    // Déclarer le JS
	wp_enqueue_script( 
        'javascript', 
        get_template_directory_uri() . '/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
    
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'css',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );

    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'css', 
        get_template_directory_uri() . '/css/main.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'malabas_register_assets' );

register_nav_menus( array(
    'main'      => 'Menu principal',
    'footer'    => 'Bas de page',
) );

function malabas_register_post_types() {

    //Custom post type portfolio
    $labels = array(
        'name'          => 'Restaurants',
        'all_items'     => 'All restaurants', //affiché dans le sous-menu
        'singular_name' => 'Restaurant',
        'add_new_item'  => 'Add restaurant',
        'edit_item'     => 'Edit resautrant',
        'menu_name'     => 'Restaurants'
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'show_in_rest'  => true,
        'has_archive'   => true,
        'supports'      => array( 'title', 'editor', 'thumbnail' ),
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-carrot',
    );

    register_post_type( 'restaurants', $args );

}
add_action( 'init', 'malabas_register_post_types' );