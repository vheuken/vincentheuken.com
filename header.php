<html>

<head>
  <title><?php echo get_bloginfo('name') ?></title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href=<?php echo get_template_directory_uri() . "/css/rrssb.css"; ?>>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.ba-hashchange.min.js"></script>
  <script type="text/javascript" src=<?php echo get_template_directory_uri() . "/script.js"; ?>></script>
</head>

<body>

<div id="header">
  <div id="title">
    <?php echo get_bloginfo('name') ?>
  </div>

  <div id="subtitle">
    <?php echo get_bloginfo('description') ?>
  </div>

  <div id="social_buttons">
    <span class="rrssb-icon">
      <?php echo file_get_contents(get_template_directory_uri() . "/icons/mail.svg"); ?>
    </span>

    <span class="rrssb-icon">
      <?php echo file_get_contents(get_template_directory_uri() . "/icons/github.svg"); ?>
    </span>

    <span class="rrssb-icon">
      <?php echo file_get_contents(get_template_directory_uri() . "/icons/linkedin.svg"); ?>
    </span>
  </div>
</div>

<hr>
