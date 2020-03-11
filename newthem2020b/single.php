<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name');?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"></link>
</head>
<body>
  <?php get_header(); ?>
  <div class="container">
    <?php if(have_posts()) :?>
    
      <?php the_post(); ?>
      <div class="title">
        <h3><?php the_title();?></h3>
        <?php the_author();?>
        <?php the_date();?>
      </div>

      <?php if(has_post_thumbnail()) :?>
      <?php the_post_thumbnail(); ?>
      <?php else : echo "Not found"; endif; ?>

      <div class="main">
        <p><?php the_content(); ?></p>
      </div>

    <?php else: echo "not found"; endif;?>
  </div>
</body>
</html>