<?php

function get_svg_contents($filename) {
  return file_get_contents(get_template_directory_uri() . $filename);
};

?>

<html>

<head>
  <title><?php echo get_bloginfo('name') ?></title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
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
      <a class="image_link" href="mailto:me@vincentheuken.com">
	<?php echo get_svg_contents("/icons/mail.svg"); ?>
      </a>
    </span>

    <span class="rrssb-icon">
      <a class="image_link" href="https://github.com/vheuken">
	<?php echo get_svg_contents("/icons/github.svg"); ?>
      </a>
    </span>

    <span class="rrssb-icon">
      <a class="image_link" href="https://www.linkedin.com/pub/vincent-heuken/26/453/366">
	<?php echo get_svg_contents("/icons/linkedin.svg"); ?>
      </a>
    </span>
  </div>
</div>

<hr>
