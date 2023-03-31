<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"/>
  <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900"/>
  <title>West Coast Nut</title>
  <?php wp_head();?>
</head>
<body>
  <header>
    <div class="container-fluid leadboard-nav">
      <div class="row">
        <div class="col-lg-5 col-md-12">
          <img class="img-fluid logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/white-wcn-logo.png" alt=""/></div>
        <div class="col-lg-6 col-md-12">
          <?php echo do_shortcode('[top_ad]');?></div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mynav">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toogle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- <div class="collapse navbar-collapse" id="navbarContent"> -->
        <?php
            wp_nav_menu( array(
                'menu' => 'Main Nav',
                'theme_location'	=> 'primary menu',
                'depth'				=> 3, // 1 = with dropdowns, 0 = no dropdowns.
              'container'			=> 'div',
              'container_class'	=> 'collapse navbar-collapse',
              'container_id'		=> 'navbarContent',
              'menu_class'		=> 'navbar-nav mr-auto',
                'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
                'walker'			=> new WP_Bootstrap_Navwalker()
            ));
          ?>
        <div class="justify-content-end ">
          <ul class="navbar-nav flex-row">
            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"> <i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      <!-- </div> -->
    </nav>
  </header>
