<?php get_header(); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-9">
      <div class="archive_container">
        <?php
          // the start of the loop
          if(have_posts()) : while(have_posts()) : the_post();
        ?>
        <div class="row">
          <div class="col-lg-6">
            <?php the_post_thumbnail('full', ['class' => 'img-fluid']);?>
          </div>
          <div class="col-lg-6">
            <!-- <h2 class="archive_header">Preventing orchard establishment and management pitfalls with online tools</h2> -->
            <?php the_title('<h2 class="archive_header">','</h2>'); ?>
            <?php echo '<p class="archive_content">' . wp_trim_words(get_the_content(), 100, '...') . '</p>'; ?>
            <a class="archive_read_more" href="single_blog_page.html">Read More</a>
          </div>
        </div>
        <hr/>
      <?php endwhile; else: endif;?>
      </div>
    </div>
    <div class="col-lg-3 sidebar-archive">
      <aside>
        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/West_Coast_Nut_1.jpg" alt=""/>
        <img class="img-fluid save_the_date" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Walnut Calendar Save The Date.jpg" alt=""/>
        <p class="the_current_issue">
          <span>View The Current Issue</span></p>
        <iframe width="300px" height="388px" src="https://www.yumpu.com/en/embed/view/GSQVvoDAUnwutmf6" frameborder="0" allowfullscreen="true" allowtransparency="true"></iframe>
      </aside>
    </div>
    <?php the_posts_pagination( array(
    'mid_size'  => 3,
    'prev_text' => __( 'Prev', 'textdomain' ),
    'next_text' => __( 'Next', 'textdomain' ),
    ) ); ?>
  </div>
</div>
<?php get_footer(); ?>
