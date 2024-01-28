<?php
    function enqueue_custom_styles() {
        // Enqueue the main stylesheet
        wp_enqueue_style('custom-style', get_stylesheet_uri(), array(), '1.0', 'all');
    }
    
    // Hook the function to the 'wp_enqueue_scripts' action
    add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
    

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

    function init_for_adding_attributes() {
        register_rest_field(
            'post',
            'count_view',
            array(
                'get_callback'    => 'get_count_view_meta',
                'update_callback' => null,
                'schema'          => null,
            )
        );
    }
    
    function get_count_view_meta($object, $field_name, $request) {
        return get_post_meta($object['id'], $field_name, true);
    }


    add_action('rest_api_init', 'init_for_adding_attributes');

    // Function to update count view by one
    function update_count_view() {
        $post_id = get_the_ID();

        // Get the current count
        $current_count = get_post_meta($post_id, 'count_view', true);

        // If the count is not set, default to 0
        $count = $current_count !== '' ? intval($current_count) + 1 : 0;

        // Update the count
        update_post_meta($post_id, 'count_view', $count);
    }

    // Hook the function to run when a single post is viewed
    add_action('wp', 'update_count_view');
?>