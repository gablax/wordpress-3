<!doctype html>
<html>
    <head>
        <meta name="charset" content="<?php bloginfo('charset'); ?> ">
        <meta name ="viewport" content="width-device-width, initial-scale=1.0">
        <meta name ="keywords" content="css, HTML, Php">
        <title>title</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="header">
           <h1><a href="http://localhost/wordpress/">My Logo </a></h1>
           <div class="varia_nav"> <?php wp_nav_menu(); ?> </div>
            
        </div>