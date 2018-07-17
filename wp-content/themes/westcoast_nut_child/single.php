<?php get_header(); ?>
<div class="container-fluid single_page_blog_post">
  <div class="row">
    <div class="col-lg-9">
      <div class="row">
        <?php ?>
        <div class="col-lg-12">
          <?php while(have_posts()) : the_post(); ?>
          <?php the_title('<h1 class="single_blog_header">','</h1>'); ?>
          <?php the_post_thumbnail('full', ['class' => 'img-fluid blog_header_img']); ?>
          <div class="blog_content">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 sidebar-archive">
      <aside>
        <?php include 'sidebar.php';?>
        <!-- <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/West_Coast_Nut_1.jpg" alt=""/>
        <img class="img-fluid save_the_date" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Walnut Calendar Save The Date.jpg" alt=""/>
        <p class="the_current_issue"> <span>View The Current Issue</span></p>
        <iframe width="300px" height="388px" src="https://www.yumpu.com/en/embed/view/GSQVvoDAUnwutmf6" frameborder="0" allowfullscreen="true" allowtransparency="true"></iframe> -->
      </aside>
    </div>
  </div>
  <div class="row related_post">
    <div class="col-lg-12">
      <h2> <span>Related Posts</span></h2>
      <div class="row">
        <?php $related = get_posts([
          'category__in' => wp_get_post_categories($post->ID),
          'numberposts' => 4,
          'post__not)in' => [
            $post->ID,
          ],
        ]);
        if($related) foreach($related as $post){
          setup_postdata($post);
        ?>
        <div class="col-lg-3">
          <?php the_post_thumbnail('full', ['class' => 'img-fluid']);?>
          <?php the_title('<p>','</p>'); ?>
          <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
