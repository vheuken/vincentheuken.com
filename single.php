<?php get_header(); ?>

<div id="content">
  <div id="post_content">
   <p>
    <?php while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <h4>Posted on <?php the_time('F jS, Y'); ?></h4>
      <?php the_content(); ?>
      <!-- Yes, I know the date is posted twice. This is intentional -->
      <h4>Posted on <?php the_time('F jS, Y'); ?></h4>
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
