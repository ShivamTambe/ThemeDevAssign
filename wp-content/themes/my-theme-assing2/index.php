<?php
    // echo get_template_directory_uri();
    // bloginfo('template_directory');
?>

<?php 
    get_header('blog');
?>


    <div class="blog">
        <div class="blogleft">
            <div class="blogtitle">Let's Blog</div>
            <div class="line"></div>
            <div class="posts">
                <?php 
                    while(have_posts()){
                        the_post(); 
                            $image_path = wp_get_attachment_image_src(get_post_thumbnail_id(),'medium');
                        ?>
                        <div class="post">
                            <div class="ptl">22</div>
                            <div class="ptt"><?php the_title()?></div>
                        </div>
                        <div class="postbtm">
                            <img src="<?php echo $image_path[0]?>" alt="" srcset="">
                            <div class="posttxt">
                                <div class="txttop">
                                    <div class="txtl">By the harry Potter <?php echo get_the_date() ?></div>
                                    <div class="txtr">jdjjdj</div>
                                </div>
                                <div class="line"></div>
                                <div class="txtdis"><?php the_excerpt()?></div>
                                <a href="<?php the_permalink()?>">
                                    <div class="txtend">Read More</div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
            </div>
        </div>
        <?php get_sidebar()?>
    </div>

       <?php echo wp_pagenavi(); ?>
    
 <?php get_footer() ?>