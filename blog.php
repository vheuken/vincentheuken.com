<?php while (have_posts()) : the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <h4>Posted on <?php the_time('F jS, Y'); ?> </h4>
<?php endwhile; ?>

