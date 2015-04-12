<?php get_header(); ?>

<div id="content">
  <div id="post_content">
   <p>
    <?php while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <h4>Posted on <?php the_time('F jS, Y'); ?></h4>
      <?php the_content(); ?>
      <!-- Yes, I know the date is posted twice. This is intentional -->

      <a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nd/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/">Creative Commons Attribution-NoDerivatives 4.0 International License</a>.
    <?php endwhile; ?>
   </p>
  </div>

  <div id="contact">
    <p>
      <?php echo get_page_by_title('Contact')->post_content; ?>
    </p>
  </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
