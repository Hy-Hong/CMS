<html <?php language_attributes(); ?>>
<head>
    <meta charset = "<?php bloginfo('charset');?>"> 
    <title> <?php bloginfo('name');?></title>
     <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
<?php get_header(); ?>
    <div class="container">
      <?php if(have_posts()):?>
        <?php  while(have_posts()):?>
          <?php the_tags(); ?>
          <?php the_post();?> 
          <div class="title">
              <?php the_author();?>
              <?php the_date('F j, Y g:i a');?>
          </div>

          <div class="main">
            <p><?php the_excerpt();?></p>  
          </div>
          
          <?php if(has_post_thumbnail()):?>
              <div class="post_thumb">
                <?php the_post_thumbnail();?>
              </div>
          <?php else: echo "not found";endif;?>
            <a href="<?php the_permalink(); ?>"> <?php the_title();?>... </a>
          <div class="category">
          category
            <?php 
              $output = "";
              $caters = get_the_category();
              if($caters){
                foreach($caters as $cater){
                  $output = '<a href="'.get_category_link($cater->term_id).'">'.$cater->cat_name.'</a>';
                }
              }
              echo $output;
            ?>
            <!-- it is show about all author that post -->
            write of author: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
          </div>
        <?php endwhile;?>  
      <?php else: echo "the post not found"; endif?>
    </div>

</body>
</html>