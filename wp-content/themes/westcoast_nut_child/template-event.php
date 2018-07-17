<?php /* Template Name: Events */ get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="container-fluid event_archive_container">
  <div class="row">
    <div class="col-lg-9 event_archive_info">
      <?php the_content(); ?>
    </div>
    <div class="col-lg-3">
      <?php include 'sidebar.php';?>
    </div>
  </div>
</div>
<?php endwhile; else:?>
<p>Sorry, no posts matched your criteria. </p>
<?php endif; ?>
<?php get_footer(); ?>
