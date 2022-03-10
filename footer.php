<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Energy_Security
 */

?>
<footer>
      <div class="container-fluid footer-container">
        <div class="container">
          <div class="footer-section">
            <div class="row footer-list-row">
              <div class="col-md-4">
                <img src="<?php echo get_theme_mod('footer-logo') ?>" class="footer-logo-img" alt="">
                <p class="footer-main-text"> <?php echo get_theme_mod('footer-description')?> </p>
              </div>
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-3">
                    <div class="footer-1-col">
                      <h6 class="footer-head"> PAGES
                        <hr class="footer-head-bottom">
                      </h6>
                      <ul class="footer-ul">
                      <?php
                        $defaults = [
                          [
                            'page'         => '',
                            'page_link'    => '',
                          ],
                        ];
                        $pages_lists = get_theme_mod( 'pages_lists', $defaults );
                      ?>
                      <?php foreach($pages_lists as $pages_list): ?>
                        <li class="footer-ul-li"><a href="<?php echo $pages_list['page_link']?>"><?php echo $pages_list['page']?></a></li>
                      <?php endforeach ?>
                      </ul>
                    </div>                  
                  </div>
                  <div class="col-md-5">
                    <div class="footer-2-col">
                      <h6 class="footer-head"> SERVICES
                        <hr class="footer-head-bottom">
                      </h6>
                      <ul class="footer-ul">
                      <?php
                        $defaults = [
                          [
                            'page'         => '',
                            'page_link'    => '',
                          ],
                        ];
                        $services_lists = get_theme_mod( 'services_lists', $defaults );
                      ?>
                      <?php foreach($services_lists as $services_list): ?>
                        <li class="footer-ul-li"><a href="<?php echo $services_list['page_link']?>"><?php echo $services_list['page']?></a></li>
                      <?php endforeach ?>
                      </ul>
                    </div>
                    
                  </div>
                  <div class="col-md-4">
                    <div class="footer-3-col">
                      <h6 class="footer-head"> LINKS
                        <hr class="footer-head-bottom">
                      </h6>
                      <ul class="footer-ul">
                        <?php
                          $defaults = [
                            [
                              'page'         => '',
                              'page_link'    => '',
                            ],
                          ];
                          $link_lists = get_theme_mod( 'link_lists', $defaults );
                        ?>
                        <?php foreach($link_lists as $link_list): ?>
                          <li class="footer-ul-li"><a href="<?php echo $link_list['page_link']?>"><?php echo $link_list['page']?></a></li>
                        <?php endforeach ?>                        
                      </ul>
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-last">
              <h6 class="footer-h6">Copyright © Energy Security Inc. <?php echo do_shortcode("[year]")?> - All Rights Reserved</h6>
              <div class="footer-social">
                <ul class="list-group list-group-horizontal footer-bar-ul">
                  <li class="footer-bar-li-social">
                    <a href=""><i class="fab fa-facebook-f footer-bar-social"></i></a>                    
                  </li>
                  <li class="footer-bar-li-social">
                    <a href=""><i class="fab fa-twitter footer-bar-social"></i></a>                    
                  </li>
                  <li class="footer-bar-li-social">
                    <a href=""><i class="fab fa-linkedin-in footer-bar-social"></i></a>                    
                  </li>
                  <li class="footer-bar-li-social">
                    <a href=""><i class="fab fa-youtube footer-bar-social"></i></a>                    
                  </li>
                </ul>
              </div>
              <div class="back-to-top-btn">
                <button onclick="topFunction()" class="back-to-top" id="back-to-top"><i class="fas fa-angle-up"></i></button>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </footer>


<?php wp_footer(); ?>
</body>
</html>