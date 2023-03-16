<?php

function tutorialtheme_theme_support(){
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','tutorialtheme_theme_support');

function tutorialtheme_menus(){
    $locations = array(
        'primary' => "Desktop Primary Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action("init", "tutorialtheme_menus");

function tutorialtheme_register_styles(){

    wp_enqueue_style('tutorialtheme-style', get_template_directory_uri()."/style.css", array('tutorialtheme-bootstrap'), '1.0', 'all');
    wp_enqueue_style('tutorialtheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('tutorialtheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'tutorialtheme_register_styles');

function tutorialtheme_register_scripts(){

    wp_enqueue_script('tutorialtheme-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), 'all', true);
    wp_enqueue_script('tutorialtheme-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.0', 'all', true);
    wp_enqueue_script('tutorialtheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '1.0', 'all', true);
    wp_enqueue_script('tutorialtheme-main', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', 'all', true);
}

add_action('wp_enqueue_scripts', 'tutorialtheme_register_scripts');
?>
