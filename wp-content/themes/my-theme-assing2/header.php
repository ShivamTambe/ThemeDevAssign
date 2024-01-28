<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css"> -->
    <title>
        <?php if(is_front_page()){ bloginfo('name');} else {wp_title();}?>  <?php  if(is_front_page()) { bloginfo('description'); }?>
    </title>
    <?php wp_head(); ?> <!--  function to call style for plugins -->
</head>
<body>
    <div class="header">
        <!-- <img src="<?php bloginfo('template_directory')?>/StaticAssets/home/logo.png" alt="logo"> -->
        <?php 
            $logo = get_header_image();
        ?>

        <img src="<?php echo $logo ?>" alt="logo">
        <!-- <div class="navbar">
            <div class="navbtn">Home</div>
            <div class="navbtn">About</div>
            <div class="navbtn">Services</div>
            <div class="navbtn">Blog</div>
            <div class="navbtn">Contact</div>
            <div class="navbtn search-icon"><input placeholder="Type here"/>
                <img src="<?php bloginfo('template_directory')?>/StaticAssets/home/search-icon.png" alt="">
            </div>
        </div> -->
        <?php 
            wp_nav_menu(array('
            theme_location'=>'primary-menu',
            'menu_class'=>'nav'
            ))
        ?>
    </div>