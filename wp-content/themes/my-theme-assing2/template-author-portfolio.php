<?php
/*
Template Name: Portfolio Author Archive
*/
get_header();
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <h1>All Portfolio Posts</h1>

        <?php 
            $authors = get_users(array('who' => 'authors'));

            // Display author dropdown
            echo '<label for="author-dropdown">Select an Author:</label>';
            echo '<select id="author-dropdown" name="author-dropdown">';
            echo '<option value=""><a href="www.google.com">All authors</a></option>';
            foreach ($authors as $author) {
                echo '<option value="' . esc_attr($author->ID) . '">' . esc_html($author->display_name) . '</option>';
            }
            echo '</select>';
        ?>
        <?php
        // Query all portfolio posts
        $args = array(
            'post_type' => 'portfolio', // Change to your custom post type
            'posts_per_page' => 3,
        );
        
        $query = new WP_Query($args);
        
        if ($query->have_posts()) :
            // Start the Loop
            while ($query->have_posts()) : $query->the_post();
                // Include the content template
                //get_template_part('content', 'portfolio'); // Assuming your content template is 'content-portfolio.php'
                the_content();
            endwhile;
            // End the Loop

            // Reset Post Data
            wp_reset_postdata();

        else :
            // If no posts found
            echo '<p>No portfolio posts found.</p>';

        endif;
        ?>

    </main><!-- .site-main -->
</section><!-- .content-area -->

<?php
get_footer();
?>
