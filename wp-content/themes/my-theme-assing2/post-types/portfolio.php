<?php 
    function create_portfolio_post_type() {
        $labels = array(
            'name'               => _x('Portfolio', 'post type general name', 'your-text-domain'),
            'singular_name'      => _x('Portfolio Item', 'post type singular name', 'your-text-domain'),
            'menu_name'          => _x('Portfolio', 'admin menu', 'your-text-domain'),
            'name_admin_bar'     => _x('Portfolio Item', 'add new on admin bar', 'your-text-domain'),
            'add_new'            => _x('Add New', 'portfolio item', 'your-text-domain'),
            'add_new_item'       => __('Add New Portfolio Item', 'your-text-domain'),
            'new_item'           => __('New Portfolio Item', 'your-text-domain'),
            'edit_item'          => __('Edit Portfolio Item', 'your-text-domain'),
            'view_item'          => __('View Portfolio Item', 'your-text-domain'),
            'all_items'          => __('All Portfolio Items', 'your-text-domain'),
            'search_items'       => __('Search Portfolio Items', 'your-text-domain'),
            'parent_item_colon'  => __('Parent Portfolio Items:', 'your-text-domain'),
            'not_found'          => __('No portfolio items found.', 'your-text-domain'),
            'not_found_in_trash' => __('No portfolio items found in Trash.', 'your-text-domain')
        );
    
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'portfolio'),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
            'taxonomies'         => array(),
            'show_in_rest'       => true, // Enables block editor (Gutenberg)

            'show_in_rest'        => true, // Enable REST API
        );
    
        register_post_type('portfolio', $args);
    }
    
    add_action('init', 'create_portfolio_post_type');
    
?>