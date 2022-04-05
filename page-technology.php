<?php
	get_header();
?>
<div class="technology-start">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 left-side-custom-padding">
                        <h2>
                            Technology
                        </h2>
                        <span class="sub-title-lasi"><?php echo get_theme_mod('interactive-flexible-title')?></span>
                        <p>
                        <?php echo get_theme_mod('interactive-flexible-description')?>
                        </p>
                        <span class="green-bold">
                            <?php echo get_theme_mod('interactive-energy-grid-title')?>
                        </span>
                        <span class="user-33">
                            Use Power How You Want It And When You Want It, More Efficiently.
                        </span>
                        <p>
                        <?php echo get_theme_mod('interactive-energy-grid-description')?>
                        
                           
                        </p>
                        <a href="<?php echo get_theme_mod('ieg_link')?>" class="link-to-ieg">
                            Interactive Energy Grid™ (IEG™)
                        </a>
                    </div>
                    <div class="col-md-5  right-side-info-lasi">
                        <a href="<?php echo get_site_url().'/products'?>" class="gree-bg-link">
                            Products we offer
                        </a>
                        <img src="<?php echo get_theme_mod('page_main_gif')?>" alt=""> 
                        <!-- <img src="<?php echo get_template_directory_uri() ."/images/test02.gif";?>" alt=""> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="full-size-dark-tech">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>
                            Flexible System Design
                        </h2>
                        <p>
                            The Interactive Energy Grid (IEG) system is…
                        </p>
                        <ul>
                            <?php
                                $defaults = [
                                    [
                                        'list_item'    => '',
                                    ],
                                ];
                                $settings = get_theme_mod( 'flexible_system_design_list', $defaults );
                            ?>
                            <?php foreach ( $settings as $setting ) : ?>
                                <li>
                                    <?php echo $setting['list_item']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container faq-container lasindu-customfaq">
            <h2>Unrivaled System Features</h2>
            <div class="col-md-12">
                <div class="accordion technology-accordions" id="accordionExample">
                    <div class="accordion-item">
                        <?php
                            $defaults = [
                                [
                                    'title'   => '',
                                    'description'   => '',
                                ],
                            ];
                            $settings = get_theme_mod( 'usf_list', $defaults );
                        ?>
                        <?php foreach ( $settings as $setting ) : ?>
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <?php echo $setting['title']; ?>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php echo $setting['description']; ?>
                                    <!-- Unique to ESI's design is an integrated Main Service Panel (MSP) and switchgear delivering the complete electrical distribution infrastructure from source to subpanel. -->
                                </div>
                            </div>
                        <?php endforeach; ?>                      
                    </div>
                </div>
            </div>
        </div>


<?php
	get_footer();