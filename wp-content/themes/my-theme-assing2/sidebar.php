<?php 
    $portfolio_data = array(
        'post_type' => 'portfolio',
        'posts_per_page' => 6, // Display all posts
    );

    $portfolio_query = new WP_Query($portfolio_data);
?>
<div class="blogright">
    <div>
        <h1>Portfolio</h1>
        <div class="line"></div>
        <div class="sideimg">
            <?php 
                while ($portfolio_query->have_posts()) {
                    $portfolio_query->the_post(); ?>
                    <div class="post-content" data-post-id="<?php the_ID(); ?>"   data-image-path="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>">
                        <?php the_content(); ?>
                    </div>
                <?php }
        ?>
        </div>
    </div>
    <div class="popularposts">
        <h1>Portfolio</h1>
        <div class="line"></div>
        <?php 
                while ($portfolio_query->have_posts()){ ?>
                    <div class="popupost">
                        <div class="posticon">
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" alt="">
                                <div class="ppcontent">
                                    <div class="ppt"><?php the_title()?></div>
                                    <div>by<span class="authorn"> <?php the_author() ?></span> on <span class="date"><?php the_date()?></span></div>
                                </div>
                        </div>
                    </div>
            <?php    $portfolio_query->the_post(); ?>
                    <div class="post-content" data-post-id="<?php the_ID(); ?>"   data-image-path="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>">
                        <?php the_content(); ?>
                    </div>
                <?php }
        ?>
        <!-- <div class="popupost">
            <div class="posticon">
                    <img src="" alt="">
                    <div class="ppcontent">
                        <div class="ppt"></div>
                        <div>by<span class="authorn"> </span>on <span class="date"></span></div>
                    </div>
            </div>
        </div> -->
    </div>






    <!-- <?php dynamic_sidebar('sidebar');?> -->
</div>