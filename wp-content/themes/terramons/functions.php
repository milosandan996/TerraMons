<?php
   // function terra_scripts(){
   // wp_enqueue_script('jQuery', get_template_directory_uri().'/frontend/js/jquery.min.js',array(), 'v3.4.1.', true);
   // wp_enqueue_script('Bootstrap Bundle', get_template_directory_uri().'/frontend/js/bootstrap.bundle.min.js',array('jQuery'), 'v3.4.1.', true);
   // wp_enqueue_script('Font Awesome', 'https://kit.fontawesome.com/af4151337a.js',array(), 'v3.4.1.', true);
   // wp_enqueue_script('Main',get_template_directory_uri().'/frontend/js/main.js' ,array('jQuery'), 'v1.0', true);
    
   // }

//add_action('wp_enqueue_scripts','terra_scripts');


function terra_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_image_size('gallery', 250, 137, true);
}

add_action('after_setup_theme', 'terra_support');

function terra_menus() {

    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'main-men' => 'Main Menu 2',
        'eng-menu' => 'Eng Menu',
        'eng-men' => 'Eng Menu 2'
    ));
}

add_action('init', 'terra_menus');

function terra_sidebar_support() {

    register_sidebar(array(
        'id' => 'main-sidebar',
        'name' => __('Main Sidebar'),
        'description' => __('Page sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget mb-4 p-4 bg-light %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'terra_sidebar_support');
?>