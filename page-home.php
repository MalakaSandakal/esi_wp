<?php
	get_header();
?>
<section>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item carousel-item-cr-1 active">
                <div class="main-cr-shadow"></div>
                <div class="container">
                    <div class="col-md-8">
                        <div class="main-carousal-text">
                            <h1 class="home-h1"><?php echo get_theme_mod('slider_heading_1')?>
                            </h1>
                            <h5 class="home-main-h5"> <?php echo get_theme_mod('slider_sub_heading_1')?> </h5>
                            <div class="col-md-8">
                                <button class="btn play-btn-main-cr">
                                    <div class="play-btn-icon">
                                        <i class="fas fa-play"></i>
                                    </div>
                                </button>
                                <br>
                                <button class="btn ask-pro"><i class="fas fa-phone-alt main-cr-icon"></i> ASK A PRO
                                </button>
                            </div>
                        </div>
                    </div>
                </div>                
                <img src="<?php echo get_theme_mod('slider_image_1')?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item carousel-item-cr-1">
                <div class="main-cr-shadow"></div>
                <div class="container">
                    <div class="col-md-8">
                        <div class="main-carousal-text">
                            <h1 class="home-h1"><?php echo get_theme_mod('slider_heading_2')?>
                            </h1>
                            <h5 class="home-main-h5"> <?php echo get_theme_mod('slider_sub_heading_2')?></h5>
                            <div class="col-md-8">
                                <button class="btn play-btn-main-cr">
                                    <div class="play-btn-icon">
                                        <i class="fas fa-play"></i>
                                    </div>
                                </button>
                                <br>
                                <button class="btn ask-pro">
                                    <i class="fas fa-phone-alt main-cr-icon"></i> ASK A PRO </button>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="<?php echo get_theme_mod('slider_image_2')?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item carousel-item-cr-1">
                <div class="main-cr-shadow"></div>
                <div class="container">
                    <div class="col-md-8">
                        <div class="main-carousal-text">
                            <h1 class="home-h1"><?php echo get_theme_mod('slider_heading_3')?>
                            </h1>
                            <h5 class="home-main-h5">  <?php echo get_theme_mod('slider_sub_heading_3')?></h5>
                            <div class="col-md-8">
                                <button class="btn play-btn-main-cr">
                                    <div class="play-btn-icon">
                                        <i class="fas fa-play"></i>
                                    </div>
                                </button>
                                <br>
                                <button class="btn ask-pro">
                                    <i class="fas fa-phone-alt main-cr-icon"></i> ASK A PRO </button>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="<?php echo get_theme_mod('slider_image_3')?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item carousel-item-cr-1">
                <div class="main-cr-shadow"></div>
                <div class="container">
                    <div class="col-md-8">
                        <div class="main-carousal-text">
                            <h1 class="home-h1"><?php echo get_theme_mod('slider_heading_4')?>
                            </h1>
                            <h5 class="home-main-h5">  <?php echo get_theme_mod('slider_sub_heading_4')?> </h5>
                            <div class="col-md-8">
                                <button class="btn play-btn-main-cr">
                                    <div class="play-btn-icon">
                                        <i class="fas fa-play"></i>
                                    </div>
                                </button>
                                <br>
                                <button class="btn ask-pro">
                                    <i class="fas fa-phone-alt main-cr-icon"></i> ASK A PRO </button>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="<?php echo get_theme_mod('slider_image_4')?>" class="d-block w-100" alt="...">
            </div>

            <div class="container main-cr-indicator-cont">
                <div class="carousel-indicators carousel-indicators-home">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <i class="fas fa-chevron-left home-main-carousal-icon"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <i class="fas fa-chevron-right home-main-carousal-icon"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section class="home-second-sec">
    <div class="container">
        <div class="row gx-4">
            <div class="col-md-3">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1">
                    <div class="home-main-card">
                        <h3 class="home-main-card-h3"><?php echo get_theme_mod('box_heading_1') ?></h3>
                        <p class="home-main-card-p"><?php echo get_theme_mod('box_description_1')?></p>
                    </div>
                </button>
            </div>
            <div class="col-md-3">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2">
                    <div class="home-main-card">
                        <h3 class="home-main-card-h3"><?php echo get_theme_mod('box_heading_2') ?></h3>
                        <p class="home-main-card-p"><?php echo get_theme_mod('box_description_2')?></p>
                    </div>
                </button>
            </div>
            <div class="col-md-3">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3">
                    <div class="home-main-card">
                        <h3 class="home-main-card-h3"><?php echo get_theme_mod('box_heading_3') ?></h3>
                        <p class="home-main-card-p"><?php echo get_theme_mod('box_description_3')?></p>
                    </div>
                </button>
            </div>
            <div class="col-md-3">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4">
                    <div class="home-main-card">
                        <h3 class="home-main-card-h3"><?php echo get_theme_mod('box_heading_4') ?></h3>
                        <p class="home-main-card-p"><?php echo get_theme_mod('box_description_4')?></p>
                    </div>
                </button>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row wwd-row">
        <div class="col-md-7 wwd-text-col">
            <h2>Who We <span style="color:#999999;">Are</span>
            </h2>
            <p class="home-p"><?php echo get_theme_mod('who_we_are_description')?></p>
            <a href="<?php echo get_theme_mod('meet_the_team_url') ?>">
                <button class="btn wwd-btn">
                    <i class="fas fa-angle-double-right read-more-icon"></i> MEET THE TEAM
                </button>
            </a>
        </div>
        <div class="col-md-5 wwd-icon-col">
            <i class="fas fa-question-circle wwd-icon"></i>
        </div>
    </div>
</div>
<div class="container-fluid dark-back">
    <div class="container">
        <div class="row ceuy-row">
            <div class="col-md-12 ceuy-text-col">
                <h2 class="white-head">What We Do <span style="color:#999999;">differently</span>
                </h2>
                <div class="topic-underline-two-clrs">
                    <div class="light-green-underline"></div>
                    <div class="dark-green-underline"></div>
                </div>
            </div>
        </div>
        <div class="row wwdd-img-row">
            <div class="col-md-12 text-center wwdd-img-col">
                <img src="<?php echo get_theme_mod('what_we_do_section_image')?>" alt="">
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-carousel-wwdd owl-theme">
                    <?php
                $defaults = [
                  [
                    'title' => esc_html__( 'Lorem Ipsum is simply dummy text', 'kirki' ),
                    'description'  => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,',
                  ],
                ]; 
                $wwdd_cr_settings = get_theme_mod('what_we_do_section_carousal_item', $defaults);
              ?>

                    <?php foreach ($wwdd_cr_settings as $wwdd_cr_setting) : ?>
                    <div class="item">
                        <h4><?php echo $wwdd_cr_setting['title'] ?> ​</h4>
                        <p><?php echo $wwdd_cr_setting['description'] ?> </p>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row carousal-2-row">
        <div class="col-12 cr-2-left-col">
            <div id="carouselExampleIndicators-2" class="carousel carousel-2 slide arousel-2-def-height"
                data-bs-ride="carousel">
                <div class="carousel-inner carousel-2-def-height">
                <?php
                  $defaults = [
                    [
                        'product_image'              => 'https://kirki.org/',
                        'product_title'              => esc_html__( 'Kirki Site', 'kirki' ),
                        'product_description'        => esc_html__( 'Kirki Site', 'kirki' ),
                        'how_it_works_url'           =>'https://kirki.org/',
                        'read_more_url'              =>'https://kirki.org/',
                        'product_specifications_url' => 'https://kirki.org/',
                        'ask_a_pro_url'              => 'https://kirki.org/',  
                    ],
                  ];

                  $product_settings = get_theme_mod( 'product_settings', $defaults );
                ?>
                <?php foreach ( $product_settings as $product_setting ) : ?>
                  <div class="carousel-item cr-partners">
                        <div class="row">
                            <div class="col-6 col-6-left">
                                <div class="img-sec">
                                    <img src="<?php echo $product_setting['product_image']?>" class="d-block c2-images" alt="...">
                                </div>
                                <button class="btn btn-cr-2-more">How It Works</button>
                            </div>
                            <div class="col-6  col-6-right">
                                <div class="right-sec">
                                    <h2><?php echo $product_setting['product_title']?></h2>
                                    <div class="topic-underline-two-clrs">
                                        <div class="light-green-underline"></div>
                                        <div class="dark-green-underline"></div>
                                    </div>
                                    <p class="home-p"><?php echo $product_setting['product_description']?><a class="btn" href="<?php echo $product_setting['read_more_url']?>"><b>Read More</b></a>
                                    </p>
                                    <div class="inline-btn-sec">
                                        
                                            <button class="btn wwd-btn os-btn"><a href="<?php echo $product_setting['product_specifications_url']?>"> Product Specifications </a><img src="<?php echo get_template_directory_uri().'/images/Vector (4).png' ?>" alt="" class="download-icon"></button>                                        
                                        
                                            <button class="btn wwd-btn os-btn ms-auto"> <a href="<?php echo $product_setting['ask_a_pro_url']?>">Ask A Pro </a> <img src="<?php echo get_template_directory_uri().'/images/speech 1.png' ?>" alt="" class="download-icon"></button>
                                                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php endforeach; ?>
                    <div class="col-md-12 cr2-indicators-full">
                        <div class="col-md-6 cr2-indicators-half">
                            <div class="c2-btn-sec">
                                <div class="carousel-indicators carousel-2-indicators partners-carousal-indicator-sec">
                                    <button type="button" class="cr-2-ind-btn active" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" class="cr-2-ind-btn" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" class="cr-2-ind-btn" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" class="cr-2-ind-btn" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                            </div>
                            <img src="<?php echo get_template_directory_uri().'/images/Line 31.png' ?>" class="line-img" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- <div class="col-6 cr-2-right-col">
          <div class="right-sec">
            <h2>Products</h2>
            <div class="topic-underline-two-clrs">
              <div class="light-green-underline"></div>
              <div class="dark-green-underline"></div>
            </div>
            <p class="home-p">Our custom Energy Security App allows you to monitor and control your system from the palm of your hand. You can see in real-time how your system is functioning and make desired adjustments. Diving deeper into the app, you’re able to view all systems (electrical and thermal) connected to the Interactive Energy Grid (IEG) dynamically and historically. This gives you an interactive experience to look at your energy as you’ve never seen it before.<a class="btn"><b>Read More</b></a>
            </p>
            <div class="inline-btn-sec">
              <button class="btn wwd-btn os-btn"> Product Specifications <img src="images/Vector (4).png" alt="" class="download-icon"></button>
              <button class="btn wwd-btn os-btn ms-auto"> Ask A Pro <img src="images/speech 1.png" alt="" class="download-icon"></button>
            </div>
          </div>   
          <img src="images/Line 31.png" class="line-img" alt="">     
        </div> -->
    </div>
</div>

<!-- <div class="carousal-2">
      <div class="container cr-2-container">
        <div class="row">
          <div class="col-md-7 cr-2-col">
            <div id="carouselExampleIndicators-2" class="carousel carousel-2 slide arousel-2-def-height" data-bs-ride="carousel">
              <div class="carousel-inner carousel-2-def-height">
                <div class="carousel-item carousel-item-1 active">
                  <img src="images/unnamed (1).jpg" class="d-block w-100 c2-images" alt="...">
                </div>
                <div class="carousel-item carousel-item-2">
                  <img src="images/unnamed (1).jpg" class="d-block w-100 c2-images" alt="...">
                </div>
                <div class="carousel-item carousel-item-3">
                  <img src="images/unnamed (1).jpg" class="d-block w-100 c2-images" alt="...">
                </div>
              </div>
            </div>
            <div class="c2-btn-sec">
              <div class="carousel-indicators carousel-2-indicators">
                <button type="button" class="cr-2-ind-btn active" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" class="cr-2-ind-btn" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" class="cr-2-ind-btn" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <button class="btn c2-btn prev-btn-cr2" type="button" data-bs-target="#carouselExampleIndicators-2" data-bs-slide="prev">
                <i class="fas fa-angle-double-left prev-btn-icon-c2 c2-btn-icon"></i> previous </button>
              <button class="btn c2-btn next-btn-cr2" type="button" data-bs-target="#carouselExampleIndicators-2" data-bs-slide="next"> next <i class="fas fa-angle-double-right next-btn-icon-c2 c2-btn-icon"></i>
              </button>
            </div>
          </div>
          <div class="col-md-5 pitp-text">
            <h2 class="white-head pitp-h2">Power In The Palm Of Your <span style="color:#253745">Hands</span>
            </h2>
            <p class="home-p-white">Our custom Energy Security App allows you to monitor and control your system from the palm of your hand. You can see in real-time how your system is functioning and make desired adjustments. Diving deeper into the app, you’re able to view all systems (electrical and thermal) connected to the Interactive Energy Grid (IEG) dynamically and historically. This gives you an interactive experience to look at your energy as you’ve never seen it before. </p>
            <button class="btn wwd-btn wwd-btn-dark"> Read more <i class="fas fa-chevron-circle-right read-more-dark-icon"></i>
            </button>
          </div>
        </div>
      </div>
    </div> -->
<div class="container our-service-sec">
    <div class="row">
        <div class="col-md-6">
            <h2>Our <span style="color:#999999;">Services</span>
            </h2>
            <p class="home-p"><?php echo get_theme_mod('our_service_description')?> </p>
            <a href="<?php echo get_theme_mod('our_service_readmore_url') ?>">
                <button class="btn wwd-btn os-btn"> Read More </button>
            </a>
        </div>
        <div class="col-md-6 our-service-sec-img">
            <img src="<?php echo get_theme_mod('our_service_image')?>" alt="">
        </div>
    </div>
</div>
<div class="customer-testimonial-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-7 ">
                <h2 class="white-head">Customer <span style="color: #999999;">Testimonials</span>
                </h2>
                <div class="topic-underline-two-clrs">
                    <div class="light-green-underline"></div>
                    <div class="dark-green-underline"></div>
                </div>
                <p class="home-p-white"><?php echo get_theme_mod('customer_testimonials_description')?></p>
            </div>
            <!-- <div class="col-md-5">
            <div class="home-badge">
              <img src="images/Vector 1.png" class="left-vector" alt="">
              <img src="images/Vector 2.png" class="right-vector" alt="">
              <img src="images/image 6.png" class="logo-img" alt="">
              <p class="review-badge-text">Reviews 33,467</p>
              <img src="images/image 5.png" class="stars-img" alt="">
            </div>
          </div> -->
        </div>
        <div class="row g-4 testomonials-card-row">
            <?php
            $defaults = [
              [
                'preview_image'   => esc_html__( 'Kirki Site', 'kirki' ),
                'profile_image'   => esc_html__( 'Kirki Site', 'kirki' ), 
                'customer_name'   => esc_html__( 'Kirki Site', 'kirki' ),                      
                'customer_feeling'   => esc_html__( 'Kirki Site', 'kirki' ),  
                'customer_comment'   => esc_html__( 'Kirki Site', 'kirki' ),    
              ],
            ];
            $testimonials_settings = get_theme_mod( 'testimonial_setting', $defaults );
          ?>
            <?php foreach ($testimonials_settings as $testimonials_setting) :?>
            <div class="col-4">
                <div class="item item-test" id="id-123">
                    <div class="card-owl">
                        <div class="card-content">
                            <div class="row g-2">
                                <div class="col-12 test-card-holder">
                                    <img class="card-img" src="<?php echo $testimonials_setting['preview_image']?>"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="person-sec">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="avatar-sec">
                                        <img src="<?php echo $testimonials_setting['profile_image']?>"
                                            class="avatar-image" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-10 person-details-sec">
                                    <h4 class="person-name-home"><?php echo $testimonials_setting['customer_name']?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-ul">
                            <ul>
                                <li>35kW Whole House Power Back-up</li>
                                <li>12kW Mission Critical UPS System </li>
                                <li>Client since 2012</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="item">
                                        <div class="card-owl">
                                            <div class="card-content">
                                                <div class="row g-2">
                                                    <div class="col-12">
                                                        <div class="owl-carousel owl-theme testimonial-owl">
                                                            <div class="item"><img class="card-img"
                                                                    src="images/image 58 (1).png" alt="" /></div>
                                                            <div class="item"><img class="card-img"
                                                                    src="images/image 58 (1).png" alt="" /></div>
                                                            <div class="item"><img class="card-img"
                                                                    src="images/image 58 (1).png" alt="" /></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="person-sec">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="avatar-sec">
                                                            <img src="<?php echo $testimonials_setting['profile_image']?>" class="avatar-image"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <img src="images/image 5.png" alt="" />
                                                        <h4 class="person-name-home"><?php echo $testimonials_setting['customer_name']?></h4>
                                                        <p class="person-comment-home"><?php echo $testimonials_setting['customer_feeling']?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5>Project Scope:</h5>
                                            <div class="test-modal-ul">
                                                <ul>
                                                    <li>35kW Whole House Power Back-up </li>
                                                    <li>12kW Mission Critical UPS System</li>
                                                    <li>Client since 2012</li>
                                                </ul>
                                            </div>
                                            <p class="modal-person-text">
                                              <?php echo $testimonials_setting['customer_comment']?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
</div>
<div class="container cwww-conatiner partners-sec">
    <div class="col-md-6">
        <h2>Partners</h2>
        <div class="topic-underline-two-clrs">
            <div class="light-green-underline"></div>
            <div class="dark-green-underline"></div>
        </div>
        <p class="home-p"><?php echo get_theme_mod('partners_description')?></p>
        <a href="<?php echo get_theme_mod('become_a_partner_URL')?>">          
          <button class="btn wwd-btn os-btn"><img src="<?php echo get_template_directory_uri().'/images/Group.png' ?>" alt="" class="handshake"> Become A Partner
          </button>
        </a>
    </div>
    <div class="col-md-12">
        <div class="owl-carousel owl-carousel-home-partners owl-theme">
          <?php
            $defaults = [
              [
                'image' => esc_html__( 'Kirki Site', 'kirki' ),
              ],
            ];

            $partner_carousal_settings = get_theme_mod( 'partners_images', $defaults );
          ?>
          <?php foreach ($partner_carousal_settings as $partner_carousal_setting) :?>
            <div class="item">
                <div class="company-block"><img src="<?php echo $partner_carousal_setting['image']?>" alt=""></div>
            </div>
          <?php endforeach ?>
        </div>
    </div>
</div>
<div class="container-fluid news-container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2 class="white-head">News <span style="color: #999999;">&</span> Blogs</h2>
                <div class="topic-underline-two-clrs">
                    <div class="light-green-underline"></div>
                    <div class="dark-green-underline"></div>
                </div>
                <p class="news-text"><?php echo get_theme_mod('news_&_blog_description') ?></p>
            </div>
            <div class="col-md-5 news-read-more">
                <button class="btn wwd-btn wwd-btn-white"> Read more <i
                        class="fas fa-angle-double-right read-more-icon read-more-icon-white"></i>
                </button>
            </div>
        </div>
        <div class="row gx-4 news-row">
          <?php
            $defaults = [
              [
                'news_title'   => esc_html__( 'Kirki Site', 'kirki' ),
                'news_background'    => 'https://kirki.org/',
              ],
            ];
            $newsblogsettings = get_theme_mod( 'news_&_blog_settings', $defaults );
          ?>
          <?php foreach($newsblogsettings as $newsblogsetting):?>
            <div class="col-md-4">
              <div class="news-block news-block-1" style="background-image: url('<?php echo $newsblogsetting['news_background'] ?>');">
                <div class="news-block-filter"></div>
                <h3 class="news-h3"><?php echo $newsblogsetting['news_title'] ?></h3>
              </div>
            </div>
          <?php endforeach ?>          
        </div>
    </div>
</div>
<div class="container">
    <div class="row subscribe-row">
        <div class="col-md-6">
            <i class="fas fa-envelope-open-text subscribe-icon"></i>
        </div>
        <div class="col-md-6 subscribe-col">
            <h2>Latest Industry <span style="color: #999999;">Updates</span>
            </h2>
            <p class="home-com subscribe-text"><?php echo get_theme_mod('subscribe_description')?></p>
            <form class="subscribe-form">
                <div class="input-group mb-3 sub-input-group">
                    <input type="email" class="form-control sub-input" placeholder="Your Email Address Here"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    <i class="fas fa-envelope input-envelope"></i>
                </div>
                <button type="submit" class="btn subscribe-btn">Subscribe Now</button>
            </form>
        </div>
    </div>
</div>
</div>


<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content get-quote-modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Get Quote</h5>
            <button type="button" class="btn-close get-quote-btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body get-quote-modal-body">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label get-quote-label">First Name</label>
                <input type="text" class="form-control get-quote-input" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label get-quote-label">Email Address</label>
                <input type="email" class="form-control get-quote-input" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label get-quote-label">Contact Number</label>
                <input type="number" class="form-control get-quote-input" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label get-quote-label">Select Product</label>
                <select class="form-select get-quote-input get-quote-selector" aria-label="Default select example">
                  <option selected>- Select Product -</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label get-quote-label">Your Message</label>
                <br>
                <textarea class="get-quote-input get-quote-textarea" name="" id=""></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer get-quote-modal-footer">
            <button type="button" class="btn modal-footer-btn modal-footer-btn-submit">Submit</button>
            <button type="button" class="btn modal-footer-btn modal-footer-btn-close" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div> -->
<!--  -->
<?php
	get_footer();