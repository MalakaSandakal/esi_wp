<?php
	get_header();
?>
<div class="container contact-container">
        <div class="row">
            <div class="col-md-7 contact-container-main">
                <h2 class="contact-main-heading"><span style="color:#999999">LETS</span> TALK</h2>
                <p class="contact-main-p"><?php echo get_theme_mod('lets_talk_description')?></p>
                <ul class="contact-main-ul">
				<?php
					// Default values for 'my_repeater_setting' theme mod.
					$defaults = [
						[
							'information'   => esc_html__( 'Kirki Site', 'kirki' ),
              'link' => '#'
						],
					];

					// Theme_mod settings to check.
					$lets_talk_list_settings = get_theme_mod( 'lets_talk_details_list', $defaults );
				?>
					<?php foreach ( $lets_talk_list_settings as $lets_talk_list_setting ) : ?>
						<li><a href="<?php echo $lets_talk_list_setting['link']; ?>"><?php echo $lets_talk_list_setting['information']; ?></a></li>
					<?php endforeach; ?>
                </ul>
                <h3 class="contact-main-heading">FOLLOW US</h3>
                <ul class="contact-main-social-ul">
                  <?php
                    $defaults = [
                      [
                        'link'   => esc_html__( 'Kirki Site', 'kirki' ),
                        'icon'   => esc_html__( 'Kirki Site', 'kirki' ),
                      ],
                    ];
                    $lets_talk_social_list_settings = get_theme_mod( 'lets_talk_social_list', $defaults );
                  ?>
                	<?php foreach ( $lets_talk_social_list_settings as $lets_talk_social_list_setting ) : ?>
						        <li><a href="<?php echo $lets_talk_social_list_setting['link']?>" target="_blank"><i class="<?php echo $lets_talk_social_list_setting['icon']?>"></i></a></li>
					        <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-5 contact-container-main">
                <?php echo do_shortcode("[contact-form-7 id='231' title='Contact form 1']"); ?>
                <!-- <form action="">
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label required">Email Address</label>
                        <input type="email" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label required">Contact Number</label>
                        <input type="text" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label required">Message</label>
                    </div>                    
                    <textarea name="" id=""></textarea>
                    <div class="mt-4">
                        <button class="btn">SUBMIT</button>
                    </div>
                </form> -->
            </div>
        </div>
    </div>

    <!-- <div class="contact-main-bg-img-sec">
        <div class="shadow"></div>
        <div class="container">
            <div class="col-md-6">
                <div class="get-in-touch">
                  <div class="contact-us">
                    <h4>Get In Touch</h4>
                    <h5>Contact Us</h5>
                    <span><i class="fas fa-phone-alt"></i>(408) 353-4374</span>
                  </div>
                  <hr>
                  <div class="open-hours">
                    <h5>Open Hours</h5>
                    <span><i class="far fa-clock"></i>7:00 AM - 7:00PM</span>
                  </div>
                  <hr>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container faq-container">
      <div class="col-md-6">
        <h2>FAQ</h2>        
        <p><?php echo get_theme_mod('faq_description')?></p>        
      </div>
      <div class="col-md-12">
        <h3>General FAQs</h3>
        <div class="accordion faq-accordions" id="accordionExample">
          <?php
            $defaults = [
              [
                'question'   => null,
                'answer'   => null
              ],
            ];
            $faq_list_settings = get_theme_mod( 'faq_list', $defaults );
          ?>
          <?php foreach ( $faq_list_settings as $faq_list_setting ) : ?>
						<div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="" aria-expanded="" aria-controls="collapseOne">
                <?php echo $faq_list_setting['question']?>
              </button>
            </h2>
            <div id="" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <?php echo $faq_list_setting['answer']?>
              </div>
            </div>
          </div>
					<?php endforeach; ?>          
        </div>
        <h3>Questions you should be asking</h3>
        <div class="accordion faq-accordions faq-accordions-new" id="accordionExample2">
          <?php
            $defaults = [
              [
                'question'   => null,
                'answer'   => null
              ],
            ];
            $faq_list_2_settings = get_theme_mod( 'faq_list_2', $defaults );
          ?>
          <?php foreach ( $faq_list_2_settings as $faq_list_2_setting ) : ?>
						<div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="" aria-expanded="" aria-controls="collapseTwo">
                <?php echo $faq_list_2_setting['question']?>
              </button>
            </h2>
            <div id="" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
              <div class="accordion-body">
                <?php echo $faq_list_2_setting['answer']?>
              </div>
            </div>
          </div>
					<?php endforeach; ?>          
        </div>
      </div>
    </div>
    
    <div class="contact-details-main-sec">
      <div class="container">
        <div class="row g-5">
          <div class="col-md-6">
            <div class="floating-sec left">
              <div class="contact-icon-sec">
                <i class="fas fa-phone-alt"></i>
              </div>
              <div class="contact-details-sec">
                <h6>Call Us</h6>                
                <span><?php echo get_theme_mod('call_us_number')?></span>
              </div>
            </div>            
          </div>
          <div class="col-md-6">
            <div class="floating-sec right">
              <div class="contact-icon-sec">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="contact-details-sec">
                <h6>Email Us</h6>
                <span><?php echo get_theme_mod('email_us_mail')?></span>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </div>
        

<?php
	get_footer();