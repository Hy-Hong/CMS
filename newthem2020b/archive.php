<html <?php language_attributes(); ?>>
<head>
    <meta charset = "<?php bloginfo('charset');?>"> 
    <title> <?php bloginfo('name');?></title>
     <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>

<header>
      <h1><?php bloginfo('name'); ?></h1>
      <span><?php bloginfo('description'); ?></span>
      <div class="menu-block">
        <?php wp_nav_menu(); ?>
      </div>
</header>
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) :?>
            <?php the_post(); ?>
            <?php the_author(); ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <p>The date of post: <?php the_date('F j, Y g:i a'); ?></p>
        <?php  endwhile; ?>
    <?php else: echo "not found"; endif; ?>
</body>
</html>