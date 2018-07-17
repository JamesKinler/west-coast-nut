<?php /* Template Name: Advertise */ get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="hero_image"></div>
<div class="container-fluid why_adveritse_container">
  <div class="row">
    <div class="col-lg-9">
      <?php the_content(); ?>
    </div>
      <div class="col-lg-3 sidebar-homepage ">
        <?php include 'sidebar.php'; ?>
      </div>
    </div>
  </div>
</div>
<?php
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<?php get_footer(); ?>
