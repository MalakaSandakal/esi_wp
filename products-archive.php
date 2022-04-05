<?php get_header();?>
<div class="container products-main-container">
        <div class="row">
            <h2>Products</h2>
            <div class="col-md-8">                
                <p class="home-p">The First Complete Energy Solution for Your Home. The Interactive Energy Grid™ from Energy Security™ is the first and only fully integrated residential energy solution that keeps your power and heat on. Our intelligent system is built with everything needed to seamlessly capture, store, manage, and maintain residential electric and thermal energy needs. Any energy source-solar, wind, fuel-cell, co-generation, back-up power generation, or the public grid-our system unites them. Energy Security as your trusted partner,you can rest assured your power is secure 24x7 all year.</p>
            </div>
            <div class="col-md-4 products-main-button-cont">
                <button class="btn products-main-button"><a href="">OUR TECHNOLOGY EXPLAINED</a></button>
            </div>
        </div>
        <div class="category-select">
            <h5>Select Your category</h5>
            <hr>
            <div class="categories-section">
                <div class="row g-4">
                <?php
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 10,
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        ?>
                        <div class="col-md-3">
                        <div class="single-category active" style="background-image: url('images/Rectangle 421.png');background-repeat: no-repeat;background-size: cover;background-position: center;">
                          <div class="layer-white"></div>
                          <div class="category-name">
                            <h6><?php the_title(); ?></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                          </div>   
                          <div class="green-polygon">
                            <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 14L0.47372 0.5L19.5263 0.500002L10 14Z" fill="#31C46C"/>
                            </svg>
                          </div>                        
                        </div>
                    </div>
                        <?php
                }?>
                    
                    <!-- <div class="col-md-3">
                      <div class="single-category" style="background-image: url('images/Rectangle 421.png');background-repeat: no-repeat;background-size: cover;background-position: center;">
                        <div class="layer-white"></div>
                        <div class="category-name">
                          <h6>Large/Custom Homes</h6>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>    
                        <div class="green-polygon">
                          <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 14L0.47372 0.5L19.5263 0.500002L10 14Z" fill="#31C46C"/>
                          </svg>
                        </div>                        
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="single-category" style="background-image: url('images/Rectangle 421.png');background-repeat: no-repeat;background-size: cover;background-position: center;">
                        <div class="layer-white"></div>
                        <div class="category-name">
                          <h6>Large/Custom Homes</h6>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>   
                        <div class="green-polygon">
                          <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 14L0.47372 0.5L19.5263 0.500002L10 14Z" fill="#31C46C"/>
                          </svg>
                        </div>                         
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="single-category" style="background-image: url('images/Rectangle 421.png');background-repeat: no-repeat;background-size: cover;background-position: center;">
                        <div class="layer-white"></div>
                        <div class="category-name">
                          <h6>Large/Custom Homes</h6>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="green-polygon">
                          <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 14L0.47372 0.5L19.5263 0.500002L10 14Z" fill="#31C46C"/>
                          </svg>
                        </div>                            
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="single-category" style="background-image: url('images/Rectangle 421.png');background-repeat: no-repeat;background-size: cover;background-position: center;">
                        <div class="layer-white"></div>
                        <div class="category-name">
                          <h6>Large/Custom Homes</h6>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>   
                        <div class="green-polygon">
                          <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 14L0.47372 0.5L19.5263 0.500002L10 14Z" fill="#31C46C"/>
                          </svg>
                        </div>                         
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="single-category" style="background-image: url('images/Rectangle 421.png');background-repeat: no-repeat;background-size: cover;background-position: center;">
                        <div class="layer-white"></div>
                        <div class="category-name">
                          <h6>Large/Custom Homes</h6>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>  
                        <div class="green-polygon">
                          <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 14L0.47372 0.5L19.5263 0.500002L10 14Z" fill="#31C46C"/>
                          </svg>
                        </div>                          
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="single-category" style="background-image: url('images/Rectangle 421.png');background-repeat: no-repeat;background-size: cover;background-position: center;">
                        <div class="layer-white"></div>
                        <div class="category-name">
                          <h6>Large/Custom Homes</h6>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div> 
                        <div class="green-polygon">
                          <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 14L0.47372 0.5L19.5263 0.500002L10 14Z" fill="#31C46C"/>
                          </svg>
                        </div>                           
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="single-category" style="background-image: url('images/Rectangle 421.png');background-repeat: no-repeat;background-size: cover;background-position: center;">
                        <div class="layer-white"></div>
                        <div class="category-name">
                          <h6>Large/Custom Homes</h6>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>  
                        <div class="green-polygon">
                          <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 14L0.47372 0.5L19.5263 0.500002L10 14Z" fill="#31C46C"/>
                          </svg>
                        </div>                          
                      </div>
                    </div> -->
                </div>
            </div>
        </div>        
    </div>    
    <hr>
    <div class="container">
      <div class="category-details-section">
        <div class="category-details-single">
          <div class="top-bg-section" style="background-image: url('<?php echo the_post_thumbnail_url()?>');">
            <div class="dark-bg"></div>
            <div class="title-sec">
              <div class="col-md-6">
                <h3><?php echo the_title()?></h3>
              </div>
            </div>            
          </div>
        </div>
        <div class="category-single-full-details">
          <div class="row g-3">
            <div class="col-md-6">
              <h6>Property Details:</h6>
              <ul>
                <li>7,000 sq ft home with pool, spa and hydronic heating system.</li>
                <li>Grid connected: 400Amp 240/120VAC split phase Main Service Panel</li>
                <li>Water supply: Well</li>
                <li>Whole house A/V system</li>
                <li>comprehensive security/surveillance system</li>
                <li>Microgrid supported load Panel: 200Amp 240/120VAC split phase</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h6>BAM Installed:</h6>
              <ul>
                <li>200Amp BAM expandable to 400Amp </li>
                <li>Fully integrated Main Service Panel</li>
                <li>Battery storage installed: 100kWh, expandable to 250kWh</li>
                <li>2 Nanogrids + dedicated DC microgrid control power</li>
                <li>Full function thermal grid integration</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h6>Nanogrids support: </h6>
              <ul>
                <li>Whole house A/V system controls</li>
                <li>Security and IT infrastructure (servers, routers, computers)</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h6>Thermal grid supports:</h6>
              <ul>
                <li>Domestic Hot Water</li>
                <li>Hydronic heating system</li>
                <li>Pool/Spa heating</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h6>On-site energy production systems:</h6>
              <ul>
                <li>20kW solar PV array</li>
                <li>250,000 BTU High efficiency Natural Gas Boiler</li>
                <li>High Co-efficient of Performance (CoP of 3) air sourced heat pump</li>
                <li>10kW / 56K BTU Micro-CHP system (fuel: Natural Gas)</li>
                <li>15kW emergency back-up generator (Fuel: Propane)</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h6>Electrical loads not supported by the microgrid ever:</h6>
              <ul>
                <li>Dryer</li>
                <li>Oven</li>
                <li>Electric patio heaters</li>
                <li>5,000 Watt A/V amplifier system (controls & critical components remain powered via dedicated nanogrid)</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h6>Electrical loads shed when public power is not available:</h6>
              <ul>
                <li>Pool Pump (Can be cycled as necessary even when the public power is not available)</li>
                <li>Well Pump (Can be cycled as necessary even when the public power is not available)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>




<?php
get_footer();