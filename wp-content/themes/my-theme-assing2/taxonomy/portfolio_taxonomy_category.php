<?php 
// Register custom taxonomy
function create_portfolio_taxonomy() {
    $labels = array(
        'name'              => _x('Portfolio Categories', 'taxonomy general name', 'your-text-domain'),
        'singular_name'     => _x('Portfolio Category', 'taxonomy singular name', 'your-text-domain'),
        'search_items'      => __('Search Portfolio Categories', 'your-text-domain'),
        'all_items'         => __('All Portfolio Categories', 'your-text-domain'),
        'parent_item'       => __('Parent Portfolio Category', 'your-text-domain'),
        'parent_item_colon' => __('Parent Portfolio Category:', 'your-text-domain'),
        'edit_item'         => __('Edit Portfolio Category', 'your-text-domain'),
        'update_item'       => __('Update Portfolio Category', 'your-text-domain'),
        'add_new_item'      => __('Add New Portfolio Category', 'your-text-domain'),
        'new_item_name'     => __('New Portfolio Category Name', 'your-text-domain'),
        'menu_name'         => __('Portfolio Categories', 'your-text-domain'),
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'portfolio-category'),
        'show_in_rest'       => true,
    );

    register_taxonomy('portfolio_category', 'portfolio', $args);
}


add_action('init', 'create_portfolio_taxonomy');
?>

