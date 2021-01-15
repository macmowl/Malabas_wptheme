<?php
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Définir la taille des images mises en avant
set_post_thumbnail_size( 2000, 400, true );

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

    wp_enqueue_script( 
        'javascript', 
        'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', 
        array(), 
        '1.0', 
        true
    );
    
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'malabas',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );

    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'malabas reset', 
        get_template_directory_uri() . '/css/reset.css',
        array(), 
        '1.0'
    );

    wp_enqueue_style( 
        'malabas main', 
        get_template_directory_uri() . '/css/main.css',
        array(), 
        '1.0'
    );
    //Déclarer dashicon du menu 
    wp_enqueue_style( 'dashicons' );

    wp_enqueue_style( 
        'malabas frontpage', 
        get_template_directory_uri() . '/css/front-page.css',
        array(), 
        '1.0'
    );

    wp_enqueue_style( 
        'malabas single', 
        get_template_directory_uri() . '/css/single.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'malabas_register_assets' );


function malabas_register_post_types() {

    //Custom post type Restaurant
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
        'menu_icon'     => 'dashicons-admin-home',
    );

    register_post_type( 'restaurants', $args );

}
add_action( 'init', 'malabas_register_post_types' );

//Menu 
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
));

// Change dashboard Articles to Recipes
function malabas_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Recipes';
        $labels->singular_name = 'Recipe';
        $labels->add_new = 'Add recipe';
        $labels->add_new_item = 'Add recipe';
        $labels->edit_item = 'Edit recipe';
        $labels->new_item = 'Recipe';
        $labels->view_item = 'View recipe';
        $labels->search_items = 'Search Recipes';
        $labels->not_found = 'No recipe found';
        $labels->not_found_in_trash = 'No recipe found in Trash';
        $labels->all_items = 'All Recipes';
        $labels->menu_name = 'Recipes';
        $labels->menu_icon = 'dashicons-carrot';
        $labels->name_admin_bar = 'Recipes';
}
add_action( 'init', 'malabas_change_post_object' );

//Delete comments menu
function malabas_remove_menu_pages() {
	remove_menu_page( 'tools.php' );
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'malabas_remove_menu_pages' );

// Add image size
add_image_size( 'square_menu', 256, 256, false);

// Disable Gutenberg editor
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");
function disable_gutenberg_editor()
{
return false;
}

// Disable content editor from frontpage
add_action('admin_head', 'remove_content_editor');

function remove_content_editor()
{
    if((int) get_option('page_on_front')==get_the_ID(2))
    {
        remove_post_type_support('page', 'editor');
    }
}

// What is that line? 
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
	