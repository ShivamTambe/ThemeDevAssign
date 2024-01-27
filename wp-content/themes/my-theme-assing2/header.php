<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
    <title>
        <?php if(is_front_page()){ bloginfo('name');} else {wp_title();}?>  <?php  if(is_front_page()) { bloginfo('description'); }?>
    </title>
    <?php  wp_head()?> <!--  function to call style for plugins -->
</head>
<style>
    .portfolio{
        width: 920px;
        display: flex;
        margin: 20px auto;
        flex-direction: column;
        gap: 20px;
    }
    .porttop{
        display: flex;
        justify-content: space-between;
    }
    .portbtns{
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }
    .portbtn{
        border: 1px solid black;
        background-color: red;
        color: white;
        padding: 5px 2px;
        border-radius: 2px;
    }
    .portbtn a{
        color: white;
        text-decoration: none;
    }
    .portimgs {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }
    .portbtn:nth-child(3n+1) {
        clear: left;
    }
    .pagena{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .wp-pagenavi {
        padding-left: 0vw !important;
    }
    .activebtn{
        background-color: green;
    }
    .portfoliocontent{
        position: absolute;
        height: 500px;
        width: 500px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: none;
        border: 1px solid green;
    }


        /* SiderBar right css */

    .sideimg{
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* Three items per row */
        gap: 5px; /* Adjust the gap between items as needed */
    }
    .popularposts{
        margin-top: 20px;
    }
</style>
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