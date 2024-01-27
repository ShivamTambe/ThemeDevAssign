<?php
/*
Template Name: Posts Archive
*/
?>

<?php
get_header();
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php _e('Posts Archive', 'textdomain'); ?></h1>
            </header>

            <?php
            // Start the Loop.
            while (have_posts()) :
                the_post();

                // Include the content template.
                get_template_part('content', get_post_format());

            endwhile;

            // Previous/next page navigation.
            the_posts_pagination(array(
                'prev_text'          => __('Previous page', 'textdomain'),
                'next_text'          => __('Next page', 'textdomain'),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'textdomain') . ' </span>',
            ));

        else :
            // If no content, include the "No posts found" template.
            get_template_part('content', 'none');

        endif;
        ?>

    </main><!-- .site-main -->
</section><!-- .content-area -->

<?php
get_footer();
?>
