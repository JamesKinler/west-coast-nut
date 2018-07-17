<?php /* Template Name: News */ get_header(); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-9">
      <div class="archive_container">
        <?php
          $args = [
            'post_type' => 'post',
            'posts_per_page' => 6,
            'paged' => $paged,
          ];
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $archive_query = new WP_Query($args);
          if($archive_query->have_posts()) : while($archive_query->have_posts()) : $archive_query->the_post();
        ?>
        <div class="row">
          <div class="col-lg-6">
            <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
          </div>
          <div class="col-lg-6">
            <?php the_title('<h1 class="archive_header">','</h1>'); ?>
            <?php echo '<p class="archive_content">' . wp_trim_words(get_the_content(), 100, '...') . '</p>'; ?>
            <a class="archive_read_more" href="<?php the_permalink(); ?>">Read More</a>
          </div>
        </div>
        <hr/>
      <?php endwhile;?>
      </div>
    </div>
    <div class="col-lg-3 sidebar-archive">
      <aside>
        <?php include 'sidebar.php';?>
      </aside>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <?php if(function_exists(custom_pagination)){
            custom_pagination($archive_query->max_num_pages,'',$paged);
        }?>
      </div>
    </div>
  <?php else: ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' )?></p>
  <?php endif;?>
  </div>
</div>
<?php get_footer(); ?>
