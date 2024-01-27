<?php 
//Template Name:Portfolio
?>

<?php 
    get_header();
?>

<?php
// Query all categories for the 'portfolio_category' taxonomy
    $portfolio_categories = get_terms(array(
        'taxonomy' => 'portfolio_category',
        'hide_empty' => false, // Set to true if you want to hide categories with no posts
    ));

    $current_category_slug = get_query_var('portfolio_category');
    // Check if a category is selected
    $show_all_posts = empty($current_category_slug);
    
    // Query the portfolio posts based on the current category
    $args = array(
        'post_type' => 'portfolio',
        'posts_per_page' => 6, // Display all posts
        'tax_query' => array(
            array(
                'taxonomy' => 'portfolio_category',
                'field' => 'slug',
                'terms' => $current_category_slug,
            ),
        ),
    );

    $portfolio_query = new WP_Query($args);

    $argss = array(
        'post_type' => 'portfolio',
        'posts_per_page' => 6,
    );
    
    $all_portfolio_query = new WP_Query($argss);

?>

<div class="portfolio">
    <div class="porttop">
        <div class="porttoptitle">Design is the soul</div>
        <div class="portbtns">
        <!-- Display the categories -->
        <?php if ($portfolio_categories && !is_wp_error($portfolio_categories)) {
            foreach ($portfolio_categories as $category) {
                if(strtolower($current_category_slug) == strtolower($category->name)){
                    echo '<div class="portbtn activebtn">';
                    $category_link = add_query_arg('portfolio_category', $category->slug, get_permalink());
                    echo '<a href="' . esc_url($category_link) . '">' . $category->name . '</a>';
                    echo '</div>';
                }else{
                    echo '<div class="portbtn">';
                    $category_link = add_query_arg('portfolio_category', $category->slug, get_permalink());
                    echo '<a href="' . esc_url($category_link) . '">' . $category->name . '</a>';
                    echo '</div>';
                }
            }
        } ?>
        </div>
    </div>
    <div class="line"></div>
    <div class="portimgs">
        <?php 
             $tmp=0;
            if ($current_category_slug!='' && $portfolio_query->have_posts()) {
                while ($portfolio_query->have_posts()) {
                    $portfolio_query->the_post();
                    // Your loop content for portfolio items
                    the_content();
                }
                $tmp=1;
                
            } else {
                if($current_category_slug ==''){
                    while ($all_portfolio_query->have_posts()) {
                        $all_portfolio_query->the_post();
                        // Your loop content for portfolio items
                        the_content();
                    }
                    $tmp=2;
                    
                }else{
                    echo 'No portfolio items found for this category.';
                }
            }
            wp_reset_postdata();
        ?>
    </div>
    <div class="pagena">
        <?php 
            if($tmp == 1){
                echo wp_pagenavi(array('query' => $portfolio_query));
            }
            if($tmp ==2){
                echo wp_pagenavi(array('query' => $all_portfolio_query));
            }
        ?>
    </div>
    <div class="line"></div>
</div>

<?php 
    get_footer();
?>
