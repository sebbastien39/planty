<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head(); ?>
    </head>
<body>


<header>
        <!-- Ajout du logo -->
        <?php  if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); }  ?>

    <nav>   
            <label class="burger-lab" for="toggle">☰</label>
            <input type="checkbox" id="toggle">    
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>       
    </nav>

</header>

<div id="container">
    <main id="content" role="main">