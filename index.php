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
      <?php include 'blog.php'; ?>
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

