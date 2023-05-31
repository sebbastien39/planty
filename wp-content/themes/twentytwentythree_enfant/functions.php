<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent twentytwentythree
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    //chargement du css/theme.css du thème enfant twentytwentythree_enfant
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}


function montheme_supports()
{
    register_nav_menu('header', 'En tête du menu sb');
    register_nav_menu('footer', 'Pied de page');
}

add_action('after_setup_theme', 'montheme_supports');