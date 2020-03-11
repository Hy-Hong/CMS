<html <?php language_attributes(); ?>>
<head>
    <meta charset = "<?php bloginfo('charset');?>"> 
    <title> <?php bloginfo('name');?></title>
     <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <span><?php bloginfo('description'); ?></span>
    </header>
    <nav>
        <div class="nav-wrapper">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <?php wp_nav_menu(); ?>
        </ul>
        </div>
    </nav>
    <form method="get" action="<?php esc_url(home_url('/')); ?>">
        <input type="text" placeholder="search..." name="s">
    </form>
</body>