    <footer>
      <div class="container-fluid footer_container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <img class="img-fluid footer_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/white-wcn-logo.png" alt=""/>
            <p class="footer_company_info">West Coast Nut is the new industry hub and #1 source for reliable information from experts who specialize in the nut industry. </p>
            <h2 class="contact_us">Contact Us</h2>
            <p class="footer_phone"> <i class="fas fa-phone"><span>555-343-2322</span></i></p>
            <p class="footer_email"><i class="fas fa-envelope"> <span>jcsmarketinginc@gmail.com</span></i></p>
          </div>
          <div class="col-lg-2 col-md-6">
            <h2 class="category_title">CATEGORIES</h2>
            <?php
            $terms = get_terms( 'category' );
            echo '<ul>';
            foreach ( $terms as $term ) {
              // The $term is an object, so we don't need to specify the $taxonomy.
              $term_link = get_term_link( $term );
              // If there was an error, continue to the next term.
              if ( is_wp_error( $term_link ) ) {
                  continue;
              }
              // We successfully got a link. Print it out.
              echo '<li class="category-list"><a class="category" href="' . esc_url( $term_link ) . '">' . $term->name . ' ' . '(' . $term->count . ')' . '</a></li>';
            }

              echo '</ul>';
            ?>
          </div>
          <div class="col-lg-2 col-md-6">
            <p class="subscribe_info">Subscribe to our newsletter to receive inudstry updates</p>
            <?php echo do_shortcode('[gravityform id=12]');?>
            <!-- <form>
              <div class="form-group">
                <input class="form-control" placeholder="Name"/>
                <input class="form-control" placeholder="email"/>
                <button class="btn submit" type="button">Submit</button>
              </div>
            </form> -->
          </div>
          <div class="col-lg-4 col-md-6 footer_links">
            <p class="footer_links_title">Industry Links</p>
            <ul>
              <li><a target="_blank" href="http://www.almonds.com/">Almond Board Of CA</a></li>
              <li><a target="_blank" href="http://www.westernpistachio.org/">American Pistachio Growers</a></li>
              <li><a target="_blank" href="http://www.californiapecangrowers.org/">California Pecan Association</a></li>
              <li><a target="_blank" href="https://www.walnuts.org/">California Walnut Commission</a></li>
              <li><a target="_blank" href="https://www.usda.gov/">USDA</a></li>
              <li><a target="_blank" href="https://agprocessors.org/">Western Agricultural Processors Association</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="bottom-container text-center">
        <p>Copyright 2018 | Jcs Marketing</p>
      </div>
      <?php wp_footer(); ?>
      <script language="javascript" src="http://adservicebureau.com/aspBanners/scripts/showBannerJS.ashx?CampaignID=2820&amp;ad=asbC2820_1&amp;theBorder=0&amp;theTarget=_blank" ></script>
      <script language="javascript" src="http://adservicebureau.com/aspBanners/scripts/showBannerJS.ashx?CampaignID=2821&amp;ad=asbC2821_1&amp;theBorder=0&amp;theTarget=_blank" ></script>

    </footer>
  </body>
</html>
