<?php /* Template Name: Home Page */get_header();?>
<body>
  <div class="row no-gutters">
    <div class="col-lg-6 col-md-12">
      <?php
        $args =[
          'post_type' => 'post',
          'posts_per_page' => 1,
          'post_status' => 'publish',
          'category_name' => 'processing',
          'order' => 'DESC',
          'orderby' => 'date',

        ];
        $processing_query = new WP_Query($args);
      ?>
      <div class="main_cover_image">
        <?php if($processing_query->have_posts()) : while($processing_query->have_posts()) : $processing_query->the_post();?>
        <?php the_post_thumbnail('full', ['class' => 'img-fluid main-image-height']); ?>
        <div class="overlay"></div>
        <div class="main-container-header">
          <p class="category-type"> <span>processing</span></p>
          <?php the_title('<h1 class="category-title">','</h1>');?>
          <a href="<?php the_permalink();?>">Read More</a>
        </div>
      <?php endwhile;endif;?>

      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="row no-gutters">
        <div class="col-lg-6 col-md-6">
          <?php
            $args = [
              'post_type' => 'post',
              'posts_per_page' => 1,
              'post_status' => 'publish',
              'category_name' => 'irriagation',
              'order' => 'DESC',
              'orderby' => 'date',
            ];
            $irriagation_query = new WP_Query($args);
          ?>
          <div class="sub-container">
            <?php if($irriagation_query->have_posts()) : while($irriagation_query->have_posts()) : $irriagation_query->the_post();?>
            <?php the_post_thumbnail('full', ['class' => 'img-fluid img-height']);?>
            <div class="overlay"></div>
            <div class="sub-container-header">
              <p class="first-sub-category"> <span>irriagation</span></p>
              <?php the_title('<h1 class="sub-category-title">','</h1>'); ?>
              <a href="<?php the_permalink();?>">Read More</a>
            </div>
            <?php endwhile;endif;?>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <?php
            $args = [
              'post_type' => 'post',
              'posts_per_page' => 1,
              'post_status' => 'publish',
              'category_name' => 'pest',
              'order' => 'DESC',
              'orderby' => 'date',
            ];
            $pest_query = new WP_Query($args);
          ?>
          <div class="sub-container">
            <?php if($pest_query->have_posts()) : while($pest_query->have_posts()) : $pest_query->the_post(); ?>
            <?php the_post_thumbnail('full', ['class' => 'img-fluid img-height']);?>
            <div class="overlay"></div>
            <div class="sub-container-header">
              <p class="second-sub-category"> <span>pest</span></p>
              <?php the_title('<h1 class="sub-category-title">','</h1>'); ?>
              <a href="<?php the_permalink();?>">Read More</a>
            </div>
          <?php endwhile;endif;?>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <?php

          $args = [
            'post_type' => 'post',
            'posts_per_page' => 1,
            'post_status' => 'publish',
            'category_name' => 'new tech',
            'order' => 'DESC',
            'orderby' => 'date',
          ];
          $new_tech = new WP_Query($args);
          ?>
          <div class="sub-container">
            <?php if($new_tech->have_posts()) : while($new_tech->have_posts()) : $new_tech->the_post(); ?>
            <?php the_post_thumbnail('full', ['class' => 'img-fluid img-height']); ?>
            <div class="overlay"></div>
            <div class="sub-container-header">
              <p class="third-sub-category"> <span>new tech</span></p>
              <?php the_title('<h1 class="sub-category-title">','</h1>'); ?>
              <a href="<?php the_permalink();?>">Read More</a>
            </div>
            <?php endwhile;endif;?>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <?php
            $args = [
              'post_type' => 'post',
              'posts_per_page' => 1,
              'post_status' => 'publish',
              'category_name' => 'disease',
              'order' => 'DESC',
              'orderby' => 'date',
            ];
            $disease = new WP_Query($args);
          ?>
          <div class="sub-container">
            <?php if($disease->have_posts()) : while($disease->have_posts()) : $disease->the_post();?>
              <?php the_post_thumbnail('full', ['class' => 'img-fluid img-height']);?>
            <div class="overlay"></div>
            <div class="sub-container-header">
              <p class="forth-sub-category"> <span>disease</span></p>
              <?php the_title('<h1 class="sub-category-title">','</h1>'); ?>
              <a href="<?php the_permalink();?>">Read More</a>
            </div>
          </div>
          <?php endwhile;endif;?>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid tabs">
    <div class="row">
      <div class="col-lg-9 col-md-12">
        <nav>
          <div class="nav nav-tabs" role="tablist" id="nav-tab"><a class="nav-item nav-link active" data-toggle="tab" href="#nav-home" role="tab" aria-control="nav-home" aria-selected="true" id="nav-home-tab">New Tech</a><a class="nav-item nav-link" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" id="nav-profile-tab">Processing</a><a class="nav-item nav-link" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false" id="nav-contact-tab">Irriagation</a><a class="nav-item nav-link" data-toggle="tab" href="#nav-pest" role="tab" aria-controls="nav-pest" aria-selected="false" id="nav-pest-tab">Pest</a><a class="nav-item nav-link" data-toggle="tab" href="#nav-disease" role="tab" aria-controls="nav-disease" aria-selected="false" id="nav-disease-tab">Disease</a></div>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab" id="nav-home">
              <div>
                <div class="row">
                  <div class="col-lg-6 col-md-12">
                    <?php
                    $args = [
                      'post_type' => 'post',
                      'posts_per_page' => 6,
                      'post_status' => 'publish',
                      'category_name' => 'new tech'
                    ];
                    $new_tech_tab = new WP_Query($args);
                    ?>
                    <?php
                    $i = 0;
                    if($new_tech_tab->have_posts()) : while($new_tech_tab->have_posts()) : $new_tech_tab->the_post();
                    if($i == 0){
                    ?>
                    <?php the_post_thumbnail('full', ['class' => 'img-fluid main-tab-image']);?>
                    <?php the_title('<h2 class="main-tab-header">', '</h2>');?>
                    <p class="main-tab-content"><?php the_excerpt(); ?></p>
                    <a class="main-tab-link" href="<?php the_permalink();?>">Read More</a>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="row">
                    <?php }else{ ?>
                      <a href="<?php the_permalink();?>"></a>
                      <div class="sub-tab-container">
                        <a href="<?php the_permalink(); ?>">
                          <div class="row">
                            <div class="col-lg-4 col-md-12">
                              <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                            </div>
                            <div class="col-lg-7 col-md-12">
                              <?php the_title('<h2 class="sub-tab-header">', '</h2>');?>
                              <?php echo '<p class="content-tab">' . wp_trim_words(get_the_content(), 10, '...') . '</br>' . '<span class="read_more_sub">' . 'Read More' . '</span>' . '</p>'; ?>

                            </div>
                          </div>
                        </a>
                      </div>
                    <?php }$i++;?>
                    <?php endwhile;endif;?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" role="tabpanel" aria-labelledby="nav-profile-tab" id="nav-profile">
              <div>
                <div class="row">
                  <div class="col-lg-6 col-md-12">
                    <?php
                      $args = [
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'post_status' => 'publish',
                        'category_name' => 'processing',
                      ];
                      $processing_tab_query = new WP_Query($args);
                    ?>
                    <?php
                    $i = 0;
                    if($processing_tab_query->have_posts()) : while($processing_tab_query->have_posts()) : $processing_tab_query->the_post();
                    if($i == 0){
                    ?>
                    <?php the_post_thumbnail('full', ['class' => 'img-fluid main-tab-image']); ?>
                    <?php the_title('<h2 class="main-tab-header">','</h2>');?>
                    <p class="main-tab-content"><?php the_excerpt();?></p>
                    <a href="<?php the_permalink();?>" class="main-tab-link">Read More</a>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="row">
                    <?php }else{ ?>
                      <div class="sub-tab-container">
                        <a href="<?php the_permalink(); ?>">
                          <div class="row">
                            <div class="col-lg-4 col-md-12">
                              <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                            </div>
                            <div class="col-lg-7 col-md-12">
                              <?php the_title('<h2 class="sub-tab-header">','</h2>'); ?>
                            </div>
                          </div>
                        </a>
                      </div>
                        <?php }$i++; ?>
                        <?php endwhile;endif;?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" role="tabpanel" aria-labelledby="nav-contact-tab" id="nav-contact">
              <div>
                <div class="row">
                  <div class="col-lg-6 col-md-12">
                    <?php
                      $args = [
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'post_status' => 'publish',
                        'category_name' => 'irriagation'
                      ];
                      $irriagation_tab = new WP_Query($args);
                    ?>
                    <?php
                    $i = 0;
                    if($irriagation_tab->have_posts()) : while($irriagation_tab->have_posts()) : $irriagation_tab->the_post();
                    if($i == 0){
                    ?>
                    <?php the_post_thumbnail('full', ['class' => 'img-fluid main-tab-image']); ?>
                    <?php the_title('<h2 class="main-tab-header">','</h2>'); ?>
                    <p class="main-tab-content"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="main-tab-link">Read More</a>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="row">
                    <?php }else{ ?>
                      <div class="sub-tab-container">
                        <a href="<?php the_permalink(); ?>">
                          <div class="row">
                            <div class="col-lg-4 col-md-12">
                              <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                            </div>
                            <div class="col-lg-7 col-md-12">
                              <?php the_title('<h2 class="sub-tab-header">','</h2>'); ?>
                            </div>
                          </div>
                        </a>
                      </div>
                    <?php }$i++; ?>
                      <?php endwhile;endif;?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" role="tabpanel" aria-labelledby="nav-pest-tab" id="nav-pest">
              <div>
                <div class="row">
                  <div class="col-lg-6 col-md-12">
                    <?php $args = [
                      'post_type' => 'post',
                      'posts_per_page' => 6,
                      'post_status' => 'publish',
                      'category_name' => 'pest',
                    ];
                    $i = 0;
                    $pest_tab = new WP_Query($args);
                    ?>
                    <?php
                    if($pest_tab->have_posts()) : while($pest_tab->have_posts()) : $pest_tab->the_post();
                    if($i == 0){
                    ?>
                    <?php the_post_thumbnail('full', ['class' => 'img-fluid main-tab-image']); ?>
                    <?php the_title('<h2 class="main-tab-header">','</h2>'); ?>
                    <p class="main-tab-content"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="main-tab-link">Read More</a>

                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="row">
                    <?php }else{ ?>
                      <div class="sub-tab-container">
                        <a href="<?php the_permalink(); ?>">
                          <div class="row">
                            <div class="col-lg-4 col-md-12">
                              <?php the_post_thumbnail('full', ['class' => 'img-fluid']);?>
                            </div>
                            <div class="col-lg-7 col-md-12">
                              <?php the_title('<h2 class="sub-tab-header">','</h2>'); ?>
                            </div>
                          </div>
                        </a>
                      </div>
                    <?php }$i++; ?>
                      <?php endwhile;endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" role="tabpanel" aria-labelledby="nav-disease-tab" id="nav-disease">
              <div>
                <div class="row">
                  <div class="col-lg-6 col-md-12">
                    <?php
                      $args = [
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'post_status' => 'publish',
                        'category_name' => 'disease'
                      ];
                      $disease_tab_query = new WP_Query($args);
                    ?>
                    <?php
                    $i = 0;
                    if($disease_tab_query->have_posts()) : while($disease_tab_query->have_posts()) : $disease_tab_query->the_post(); ?>
                    <?php if($i == 0){?>
                    <?php the_post_thumbnail('full', ['class' => 'img-fluid main-tab-image']); ?>
                    <?php the_title('<h2 class="main-tab-header">','</h2>'); ?>
                    <p class="main-tab-content"><?php the_excerpt();?></p>
                    <a href="<?php the_permalink(); ?>" class="main-tab-link">Read More</a>

                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="row">
                    <?php }else{ ?>
                      <div class="sub-tab-container">
                        <div class="row">
                          <div class="col-lg-4 col-md-12">
                            <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                          </div>
                          <div class="col-lg-7 col-md-12">
                            <?php the_title('<h2 class="sub-tab-header">','</h2>'); ?>
                          </div>
                        </div>
                      </div>
                    <?php }$i++;?>
                      <?php endwhile;endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <div class="sidebar-homepage col-lg-3 col-md-12">
        <?php include 'sidebar.php'?>
      </div>
    </div>
  </div>
  <section class="want-to-advertise text-center">
    <h1>Want To Advertise With Us Find Out How</h1><a href="#">More Info</a>
    <button class="btn my_modal_button" type="button" data-toggle="modal" data-target="#exampleModal">Request A Media Kit</button>
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="exampleModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/img/West Coast Nut Logo.png" alt="West Coast Nut Logo">
            <!-- <h1 class="modal-title" id="exampleModalLabel"></h1> -->
            <button class="close" type="button" data-dismiss="modal" area-label="close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <?php echo do_shortcode('[gravityform id=3]');?>
          </div>
          <div class="modal-footer">
            <button class="btn my_modal_button" type="button" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sponsors">
    <h2>2017 Sponsors</h2>
    <?php echo do_shortcode('[carousel]');?>
  </section>
  <!-- <section class="sponsors">
    <h2>2017 Sponsors</h2>
    <div class="container">
      <div class="carousel slide" id="carouselExample" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
          <div class="carousel-item col-md-3 active"><img class="img-fluid mx-auto d-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/brand1.png" alt="slide 1"/></div>
          <div class="carousel-item col-md-3"><img class="img-fluid mx-auto d-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/brand2.png" alt="slide 2"/></div>
          <div class="carousel-item col-md-3"><img class="img-fluid mx-auto d-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/brand3.png" alt="slide 3"/></div>
          <div class="carousel-item col-md-3"><img class="img-fluid mx-auto d-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/brand4.png" alt="slide 4"/></div>
          <div class="carousel-item col-md-3"><img class="img-fluid mx-auto d-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/brand5.png" alt="slide 5"/></div>
          <div class="carousel-item col-md-3"><img class="img-fluid mx-auto d-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/brand6.png" alt="slide 6"/></div>
          <div class="carousel-item col-md-3"><img class="img-fluid mx-auto d-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/brand1.png" alt="slide 7"/></div>
          <div class="carousel-item col-md-3"><img class="img-fluid mx-auto d-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/brand2.png" alt="slide 8"/></div>
        </div>
      </div>
    </div>
  </section> -->
</body>
<?php get_footer();?>
