<?php
/* Template Name: Single Events Page */
get_header(); ?>
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container-fluid event_single_page">
  <div class="row">
    <div class="col-lg-9">
      <?php the_content(); ?>
    </div>
    <div class="col-lg-3 sidebar-homepage">
      <?php include 'sidebar.php'; ?>
    </div>
  </div>
</div>
<?php endwhile; else: ?>
<p>Sorry, no post matched your criteria.</p>
<?php endif; ?>
<?php get_footer(); ?>
