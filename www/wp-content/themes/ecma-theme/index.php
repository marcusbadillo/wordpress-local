<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('title'); ?></title>
  </head>
  <body>
    <h1><?php bloginfo('title'); ?></h1>
    <h3><?php bloginfo('description'); ?></h3>

  <?php
    while (have_posts()) {
      # code...
      the_post();
    ?>
    <h5><?php the_date(); ?></h5>
  <a href="index.php?p=<?php the_ID(); ?>">
    <h2><?php the_title(); ?></h2>
  </a>
  <p><?php the_content(); ?></p>

    <hr>

<?php   } ?>
  </body>
</html>
