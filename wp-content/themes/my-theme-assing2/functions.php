<?php


    require_once __DIR__ . '/post-types/portfolio.php';
    require_once __DIR__ . '/taxonomy/portfolio_taxonomy_category.php';
    
    register_nav_menus(
        array('primary-menu'=> 'Header Menu')
    );

    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
    register_sidebar(
        array(
            'name'=>'Sidebar Location',
            'id'=>'sidebar'
            )
    );
    add_post_type_support('page','excerpt');

    function enqueue_jquery() {
        wp_enqueue_script('jquery');
    }
    add_action('wp_enqueue_scripts', 'enqueue_jquery');
?>