<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
    <title>ThemeDevAssign</title>
    <?php  wp_head()?> <!--  function to call style for plugins -->
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
    <div class="slider-btm">
        <div class="slidercontent">
            <img src="<?php bloginfo('template_directory')?>/StaticAssets/home/feature.png" alt="btmimg">
            <div class="sliderbtmcontent">
                <div class="sliderbctitle">Multimedia</div>
                <div class="sliderbcpara">This Adding addional imnofrmation to incareate iszeis the discription part of Slider btm</div>
            </div>
        </div>
        <div class="slidercontent">
            <img src="<?php bloginfo('template_directory')?>/StaticAssets/home/feature.png" alt="btmimg">
            <div class="sliderbtmcontent">
                <div class="sliderbctitle">Multimedia</div>
                <div class="sliderbcpara">This Adding addional imnofrmation to incareate iszeis the discription part of Slider btm</div>
            </div>
        </div>
        <div class="slidercontent">
            <img src="<?php bloginfo('template_directory')?>/StaticAssets/home/feature.png" alt="btmimg">
            <div class="sliderbtmcontent">
                <div class="sliderbctitle">Multimedia</div>
                <div class="sliderbcpara">This Adding addional imnofrmation to incareate iszeis the discription part of Slider btm</div>
            </div>
        </div>
    </div>