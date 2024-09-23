<?php

// Function to enqueue the style and scripts
function mytheme_enqueue_styles(){

    // Enqueue the main stylesheet style.css for the theme
    wp_enqueue_style("mytheme-style", get_stylesheet_uri(), array(), "1.0");

    // Enqueue a custom JavaScript file from the theme's assets folder (main.js)
    wp_enqueue_script("mytheme-script", get_template_directory_uri() . "/assets/js/main.js", array(), "1.0", true);
}

// Hooking the "mytheme_enqueue_styles" function to the "wp_enqueue_scripts", which loads the scripts and styles
add_action("wp_enqueue_scripts", "mytheme_enqueue_styles");

// Function to set up theme features
function mytheme_setup(){

    add_theme_support('post-thumbnails');
    
    // Registering the navigation menu "Primary Menu",
    register_nav_menus(array(
        "primary" => __("Primary Menu", "mytheme"), // "primary" is the menu location, "Primary Menu" is its display name 
    ));
}

// Hooking the "mytheme_setup" function to "after_setup_theme" which is triggered when the theme is initialised.
add_action("after_setup_theme", "mytheme_setup");
?>