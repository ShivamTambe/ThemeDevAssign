<?php 
    get_header('blog');
    the_post();
?>

<div class="blog">
        <div class="blogleft">
            <div class="blogtitle">Let's Blog</div>
            <div class="line"></div>
            <div class="posts">
                <?php  $image_path = wp_get_attachment_image_src(get_post_thumbnail_id(),'medium'); ?>
                    <div class="post">
                        <div class="ptl">22</div>
                        <div class="ptt"><?php the_title()?></div>
                    </div>
                    <div class="postdetail">
                        <span>
                            <span>By</span>
                            <span class="author"><?php echo get_the_author_meta( 'display_name' ) ?></span>
                            <span>on</span>
                            <span class="date"><?php echo get_the_date()?></span>
                        </span>
                        <span><?php echo get_comments_number()?> Comments</span>
                    </div>
                    <div class="line"></div>
                    <img src="<?php echo $image_path[0]?>" width="500px" alt="">
            </div>
            <div class="postcontent">
                <?php the_content()?>
            </div>
            <div class="commentform">
                <?php comment_form(); ?>
            </div>

            <div class="commentlist">
                <?php wp_list_comments(); ?>
            </div>

        </div>
    </div>
<?php 
    get_footer();
?>