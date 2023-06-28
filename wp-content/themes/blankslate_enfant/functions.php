<?php

    // Action qui permet de charger des scripts dans notre thème
    add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
    function theme_enqueue_styles(){
        // Chargement du style.css du thème parent blankslate
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
        // Chargement du theme.css du thème enfant blakslate_enfant planty
        wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

/* logo */

function themename_custom_logo_setup() { 
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ), );
    add_theme_support( 'custom-logo', $defaults ); 
} 
 add_action( 'after_setup_theme', 'themename_custom_logo_setup' ); 


/**
* Add a custom link to the end of a specific menu that uses the wp_nav_menu() function
* Ajouter un lien personnalisé à la fin d'un menu spécifique qui utilise la fonction wp_nav_menu()
*/

add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
function add_admin_link($items, $args){
    if( $args->theme_location == 'main-menu' && is_user_logged_in() ){
        $items = $items . '<li class="menu menu-item admin"><a title="Admin" href="'. admin_url() .'"><span itemprop="name">Admin</span></a></li>';
    }
    return $items;
}

/* Enlève les paragraphes que CF7 génères */
add_filter('wpcf7_autop_or_not', '__return_false');