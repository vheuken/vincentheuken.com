<html>

<head>
  <title>Test Title!</title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<div id="header">
  <div id="title">
    <?php echo get_bloginfo('name') ?>
  </div>

  <div id="subtitle">
    <?php echo get_bloginfo('description') ?>
  </div>
</div>

<?php get_sidebar(); ?>
