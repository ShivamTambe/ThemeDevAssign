<?php get_header() ?>
    <h1> Welcome to <?php the_title() ?></h1>
    <div class="thumbnail">
        <?php the_post_thumbnail('large')?>
    </div>
    <div class="the_content">
        <?php  the_content()?>
    </div>
<?php get_footer() ?>