<?php get_header(); ?>

<div id="content">
  <div id="about">
    <p>
      This is just some filler!<br>
      Lorem ipsum etc<br>
    </p>
  </div>

  <div id="blog">
    <p>
      <?php while (have_posts()) : the_post(); ?>
	  <h1><?php the_title(); ?></h1>
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

