<?php get_header(); ?>

<div id="content">
  <div id="post_content">
   <p>
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
