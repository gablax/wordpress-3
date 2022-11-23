<html>
    <head>
        <meta name="charset" content="<?php bloginfo('charset'); ?> ">
        <meta name ="viewport" content="width-divecie-width, initial-scale=1.0">
        <meta name ="keywords" content="css, HTML, Php">
        <titl>title</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="header">
            <h1><a href="<?php echo home_url(); ?>"> <?php bloginfo("name"); ?>  </a> </h1>
            <h5> <?php bloginfo("description"); ?>  </h5>
        </div>