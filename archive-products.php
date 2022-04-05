<?php get_header(); ?>
<div class="container products-main-container">
    <div class="row">
        <h2>Products</h2>
        <div class="col-md-8">
            <p class="home-p">
            Energy Security’s BAM™ Microgrids provide unparalleled reliability and flexibility. Engineered to bridge the gap between residential electric only systems and commercial multi-source electric and thermal systems. ESI’s BAM™ Microgrids designed to be flexible and scalable to meet the unique needs of your project using the latest mission critical data center/Telco grade technology to reliably deliver “blinkless” power in a compact package. Built-in redundancy, uninterrupted power, and ease of service make ESI’s BAM™ Microgrids the choice of discriminating clients.   
            </br></br>
            When it absolutely, positively has to be ON, choose Energy Security’s BAM™ Microgrids. Whether your project is on or off grid, Energy Security can provide a system to meet your needs.    
        </p>
        </div>
        <div class="col-md-4 products-main-button-cont">
            <button class="btn products-main-button"><a href="<?php echo get_site_url().'/technology'?>">OUR TECHNOLOGY EXPLAINED</a></button>
        </div>
    </div>
    <div class="category-select">
        <h5>Select Your category</h5>
        <hr>
        <div class="categories-section">
            <div class="row g-3">
                <?php
                $args = [
                    "post_type" => "products",
                    "posts_per_page" => 8,
                    "orderby" => "date",
                    "order" => "ASC",
                ];
                $loop = new WP_Query($args);
                while ($loop->have_posts()) {
                    $loop->the_post(); ?>
                <div class="col-md-3">
                    <div class="single-category" id="<?php echo the_permalink(); ?>" rel="<?php echo the_ID(); ?>">
                        <div class="bg-img-sec"
                            style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');background-repeat: no-repeat;background-size: cover;background-position: center;">
                            <div class="layer-white"></div>
                            <div class="category-name">
                                <h6><?php the_title(); ?></h6>
                                <?php if (has_excerpt()): ?>
                                <p><?php echo the_excerpt(); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="green-polygon">
                            <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 14L0.47372 0.5L19.5263 0.500002L10 14Z" fill="#31C46C" />
                            </svg>
                        </div>
                    </div>
                </div><?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<hr class="no-margin-hr">
<div>    
    <div class="category-single-full-details" id="<?php echo get_template_directory_uri() ."/images/preloader.gif";?>">
        <div class="spinner" style="width:100vw;height: 1000px;text-align:center">
            <div class="spinner-gif text-center">
                <img src=" <?php echo get_template_directory_uri() .
                    "/images/preloader.gif"; ?>" alt="">               
            </div>
        </div>
    </div>
</div>
<div class="category-1-slider-sec cat-slider-sec display">
    <div class="slider-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="battery-sec" id="nano-bam">
                        <div class="battery-images">
                            <div class="display-inline-flex text-center">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon display-sec" id="battery-1" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-1" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-1" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-1" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-1" alt="">
                            </div>
                        </div>
                        <div class="battery-capacity" id="">
                            <div class="capacity">
                                <h5>Minimum Battery capacity</h5>
                                <p class="battery-capacity-1" id="battery-capacity">25KWH</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="top-det-slider">
                        <div class="slider-top-sec first sec-1-slider-top-sec-1 active">
                            <h5>NANO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-1-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec second sec-1-slider-top-sec-2">
                            <h5>MICRO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-2-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec third sec-1-slider-top-sec-3">
                            <h5>MINI BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-3-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fourth sec-1-slider-top-sec-4">
                            <h5>BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-4-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fifth sec-1-slider-top-sec-5">
                            <h5>MEGA BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-5-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="slider">
                        <label class="slider-bar-label" for="">Products</label>
                        <input type="range" min="0" max="4" step="1" value="0" id="custom-slider-bar-1"
                            class="styled-slider slider-progress">
                    </div>
                    <div class="bottom-det-slider">
                        <div class="slider-bottom-sec">
                            <div class="nano-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>NANO BAM</h6>
                            </div>
                            <div class="micro-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MICRO BAM</h6>
                            </div>
                            <div class="mini-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MINI BAM</h6>
                            </div>
                            <div class="bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>BAM</h6>
                            </div>
                            <div class="mega-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MEGA BAM</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-description">
        <div class="container bam-button-container" id="bam-button-container-1">
            <div class="row">
                <div class="col tab-sec-1 sec-1-col-1-bam-button active">
                    <div class="bam-single-button">
                        <h6>NANO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>15 - 60 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-1 sec-1-col-2-bam-button">
                    <div class="bam-single-button">
                        <h6>MICRO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>60 - 150 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-1 sec-1-col-3-bam-button">
                    <div class="bam-single-button">
                        <h6>MINI BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>125 - 200 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-1 sec-1-col-4-bam-button">
                    <div class="bam-single-button">
                        <h6>BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>200 - 400 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-1 sec-1-col-5-bam-button">
                    <div class="bam-single-button">
                        <h6>MEGA BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>400+ AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="nano-bam-1 bam-specs active">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-1-nano-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-1-nano-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-1-nano-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-1-nano-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-1-nano-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-1-nano-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">NANO BAM <span class="bam-heading">SPECS 1</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="micro-bam-1 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-1-micro-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-1-micro-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-1-micro-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-1-micro-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-1-micro-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-1-micro-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MICRO BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mini-bam-1 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-1-mini-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-1-mini-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-1-mini-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-1-mini-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-1-mini-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-1-mini-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MINI BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-1 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-1-mega-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-1-mega-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-1-mega-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-1-mega-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-1-mega-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-1-mega-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mega-bam-1 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-1-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-1-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-1-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-1-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-1-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-1-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MEGA BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="category-2-slider-sec cat-slider-sec">
    <div class="slider-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="battery-sec" id="nano-bam">
                        <div class="battery-images">
                            <div class="display-inline-flex text-center">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon display-sec" id="battery-2" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-2" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-2" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-2" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-2" alt="">
                            </div>
                        </div>
                        <div class="battery-capacity" id="">
                            <div class="capacity">
                                <h5>Minimum Battery capacity</h5>
                                <p class="battery-capacity-2" id="battery-capacity">25KWH</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="top-det-slider">
                        <div class="slider-top-sec first sec-2-slider-top-sec-1 active">
                            <h5>NANO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-1-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec second sec-2-slider-top-sec-2">
                            <h5>MICRO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-2-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec third sec-2-slider-top-sec-3">
                            <h5>MINI BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-3-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fourth sec-2-slider-top-sec-4">
                            <h5>BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-4-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fifth sec-2-slider-top-sec-5">
                            <h5>MEGA BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-5-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="slider">
                        <label class="slider-bar-label" for="">Products</label>
                        <input type="range" min="0" max="4" step="1" value="0" id="custom-slider-bar-2"
                            class="styled-slider slider-progress">
                    </div>
                    <div class="bottom-det-slider">
                        <div class="slider-bottom-sec">
                            <div class="nano-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>NANO BAM</h6>
                            </div>
                            <div class="micro-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MICRO BAM</h6>
                            </div>
                            <div class="mini-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MINI BAM</h6>
                            </div>
                            <div class="bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>BAM</h6>
                            </div>
                            <div class="mega-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MEGA BAM</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-description">
        <div class="container bam-button-container" id="bam-button-container-2">
            <div class="row">
                <div class="col tab-sec-2 sec-2-col-1-bam-button active">
                    <div class="bam-single-button">
                        <h6>NANO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>15 - 60 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-2 sec-2-col-2-bam-button">
                    <div class="bam-single-button">
                        <h6>MICRO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>60 - 150 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-2 sec-2-col-3-bam-button">
                    <div class="bam-single-button">
                        <h6>MINI BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>125 - 200 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-2 sec-2-col-4-bam-button">
                    <div class="bam-single-button">
                        <h6>BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>200 - 400 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-2 sec-2-col-5-bam-button">
                    <div class="bam-single-button">
                        <h6>MEGA BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>400+ AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="nano-bam-2 bam-specs active">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-2-nano-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-2-nano-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-2-nano-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-2-nano-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-2-nano-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-2-nano-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">NANO BAM <span class="bam-heading">SPECS 2</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="micro-bam-2 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-2-micro-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-2-micro-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-2-micro-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-2-micro-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-2-micro-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-2-micro-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MICRO BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mini-bam-2 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-2-mini-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-2-mini-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-2-mini-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-2-mini-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-2-mini-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-2-mini-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MINI BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-2 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-2-mega-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-2-mega-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-2-mega-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-2-mega-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-2-mega-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-2-mega-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mega-bam-2 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-2-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-2-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-2-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-2-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-2-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-2-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MEGA BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="category-3-slider-sec cat-slider-sec">
    <div class="slider-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="battery-sec" id="nano-bam">
                        <div class="battery-images">
                            <div class="display-inline-flex text-center">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon display-sec" id="battery-3" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-3" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-3" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-3" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-3" alt="">
                            </div>
                        </div>
                        <div class="battery-capacity" id="">
                            <div class="capacity">
                                <h5>Minimum Battery capacity</h5>
                                <p class="battery-capacity-3" id="battery-capacity">25KWH</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="top-det-slider">
                        <div class="slider-top-sec first sec-3-slider-top-sec-1 active">
                            <h5>NANO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-1-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec second sec-3-slider-top-sec-2">
                            <h5>MICRO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-3-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec third sec-3-slider-top-sec-3">
                            <h5>MINI BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-3-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fourth sec-3-slider-top-sec-4">
                            <h5>BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-4-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fifth sec-3-slider-top-sec-5">
                            <h5>MEGA BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-5-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="slider">
                        <label class="slider-bar-label" for="">Products</label>
                        <input type="range" min="0" max="4" step="1" value="0" id="custom-slider-bar-3"
                            class="styled-slider slider-progress">
                    </div>
                    <div class="bottom-det-slider">
                        <div class="slider-bottom-sec">
                            <div class="nano-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>NANO BAM</h6>
                            </div>
                            <div class="micro-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MICRO BAM</h6>
                            </div>
                            <div class="mini-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MINI BAM</h6>
                            </div>
                            <div class="bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>BAM</h6>
                            </div>
                            <div class="mega-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MEGA BAM</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-description">
        <div class="container bam-button-container" id="bam-button-container-3">
            <div class="row">
                <div class="col tab-sec-3 sec-3-col-1-bam-button active">
                    <div class="bam-single-button">
                        <h6>NANO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>15 - 60 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-3 sec-3-col-2-bam-button">
                    <div class="bam-single-button">
                        <h6>MICRO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>60 - 150 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-3 sec-3-col-3-bam-button">
                    <div class="bam-single-button">
                        <h6>MINI BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>125 - 200 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-3 sec-3-col-4-bam-button">
                    <div class="bam-single-button">
                        <h6>BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>200 - 400 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-3 sec-3-col-5-bam-button">
                    <div class="bam-single-button">
                        <h6>MEGA BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>400+ AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="nano-bam-3 bam-specs active">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-3-nano-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-3-nano-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-3-nano-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-3-nano-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-3-nano-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-3-nano-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">NANO BAM <span class="bam-heading">SPECS 3</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="micro-bam-3 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-3-micro-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-3-micro-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-3-micro-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-3-micro-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-3-micro-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-3-micro-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MICRO BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mini-bam-3 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-3-mini-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-3-mini-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-3-mini-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-3-mini-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-3-mini-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-3-mini-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MINI BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-3 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-3-mega-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-3-mega-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-3-mega-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-3-mega-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-3-mega-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-3-mega-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mega-bam-3 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-3-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-3-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-3-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-3-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-3-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-3-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MEGA BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="category-4-slider-sec cat-slider-sec">
    <div class="slider-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="battery-sec" id="nano-bam">
                        <div class="battery-images">
                            <div class="display-inline-flex text-center">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon display-sec" id="battery-4" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-4" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-4" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-4" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-4" alt="">
                            </div>
                        </div>
                        <div class="battery-capacity" id="">
                            <div class="capacity">
                                <h5>Minimum Battery capacity</h5>
                                <p class="battery-capacity-4" id="battery-capacity">25KWH</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="top-det-slider">
                        <div class="slider-top-sec first sec-4-slider-top-sec-1 active">
                            <h5>NANO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-1-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec second sec-4-slider-top-sec-2">
                            <h5>MICRO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-4-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec third sec-4-slider-top-sec-3">
                            <h5>MINI BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-4-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fourth sec-4-slider-top-sec-4">
                            <h5>BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-4-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fifth sec-4-slider-top-sec-5">
                            <h5>MEGA BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-5-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="slider">
                        <label class="slider-bar-label" for="">Products</label>
                        <input type="range" min="0" max="4" step="1" value="0" id="custom-slider-bar-4"
                            class="styled-slider slider-progress">
                    </div>
                    <div class="bottom-det-slider">
                        <div class="slider-bottom-sec">
                            <div class="nano-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>NANO BAM</h6>
                            </div>
                            <div class="micro-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MICRO BAM</h6>
                            </div>
                            <div class="mini-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MINI BAM</h6>
                            </div>
                            <div class="bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>BAM</h6>
                            </div>
                            <div class="mega-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MEGA BAM</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-description">
        <div class="container bam-button-container" id="bam-button-container-4">
            <div class="row">
                <div class="col tab-sec-4 sec-4-col-1-bam-button active">
                    <div class="bam-single-button">
                        <h6>NANO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>15 - 60 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-4 sec-4-col-2-bam-button">
                    <div class="bam-single-button">
                        <h6>MICRO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>60 - 150 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-4 sec-4-col-3-bam-button">
                    <div class="bam-single-button">
                        <h6>MINI BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>125 - 200 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-4 sec-4-col-4-bam-button">
                    <div class="bam-single-button">
                        <h6>BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>200 - 400 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-4 sec-4-col-5-bam-button">
                    <div class="bam-single-button">
                        <h6>MEGA BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>400+ AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="nano-bam-4 bam-specs active">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-4-nano-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-4-nano-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-4-nano-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-4-nano-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-4-nano-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-4-nano-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">NANO BAM <span class="bam-heading">SPECS 4</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="micro-bam-4 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-4-micro-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-4-micro-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-4-micro-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-4-micro-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-4-micro-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-4-micro-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MICRO BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mini-bam-4 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-4-mini-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-4-mini-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-4-mini-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-4-mini-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-4-mini-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-4-mini-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MINI BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-4 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-4-mega-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-4-mega-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-4-mega-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-4-mega-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-4-mega-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-4-mega-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mega-bam-4 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-4-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-4-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-4-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-4-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-4-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-4-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MEGA BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="category-5-slider-sec cat-slider-sec">
    <div class="slider-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="battery-sec" id="nano-bam">
                        <div class="battery-images">
                            <div class="display-inline-flex text-center">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon display-sec" id="battery-5" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-5" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-5" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-5" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-5" alt="">
                            </div>
                        </div>
                        <div class="battery-capacity" id="">
                            <div class="capacity">
                                <h5>Minimum Battery capacity</h5>
                                <p class="battery-capacity-5" id="battery-capacity">25KWH</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="top-det-slider">
                        <div class="slider-top-sec first sec-5-slider-top-sec-1 active">
                            <h5>NANO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-1-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec second sec-5-slider-top-sec-2">
                            <h5>MICRO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-5-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec third sec-5-slider-top-sec-3">
                            <h5>MINI BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-5-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fourth sec-5-slider-top-sec-4">
                            <h5>BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-5-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fifth sec-5-slider-top-sec-5">
                            <h5>MEGA BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-5-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="slider">
                        <label class="slider-bar-label" for="">Products</label>
                        <input type="range" min="0" max="4" step="1" value="0" id="custom-slider-bar-5"
                            class="styled-slider slider-progress">
                    </div>
                    <div class="bottom-det-slider">
                        <div class="slider-bottom-sec">
                            <div class="nano-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>NANO BAM</h6>
                            </div>
                            <div class="micro-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MICRO BAM</h6>
                            </div>
                            <div class="mini-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MINI BAM</h6>
                            </div>
                            <div class="bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>BAM</h6>
                            </div>
                            <div class="mega-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MEGA BAM</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-description">
        <div class="container bam-button-container" id="bam-button-container-5">
            <div class="row">
                <div class="col tab-sec-5 sec-5-col-1-bam-button active">
                    <div class="bam-single-button">
                        <h6>NANO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>15 - 60 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-5 sec-5-col-2-bam-button">
                    <div class="bam-single-button">
                        <h6>MICRO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>60 - 150 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-5 sec-5-col-3-bam-button">
                    <div class="bam-single-button">
                        <h6>MINI BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>125 - 200 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-5 sec-5-col-4-bam-button">
                    <div class="bam-single-button">
                        <h6>BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>200 - 400 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-5 sec-5-col-5-bam-button">
                    <div class="bam-single-button">
                        <h6>MEGA BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>400+ AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="nano-bam-5 bam-specs active">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-5-nano-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-5-nano-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-5-nano-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-5-nano-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-5-nano-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-5-nano-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">NANO BAM <span class="bam-heading">SPECS 5</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="micro-bam-5 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-5-micro-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-5-micro-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-5-micro-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-5-micro-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-5-micro-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-5-micro-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MICRO BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mini-bam-5 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-5-mini-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-5-mini-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-5-mini-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-5-mini-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-5-mini-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-5-mini-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MINI BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-5 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-5-mega-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-5-mega-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-5-mega-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-5-mega-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-5-mega-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-5-mega-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mega-bam-5 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-5-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-5-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-5-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-5-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-5-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-5-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MEGA BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="category-6-slider-sec cat-slider-sec">
    <div class="slider-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="battery-sec" id="nano-bam">
                        <div class="battery-images">
                            <div class="display-inline-flex text-center">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon display-sec" id="battery-6" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-6" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-6" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-6" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-6" alt="">
                            </div>
                        </div>
                        <div class="battery-capacity" id="">
                            <div class="capacity">
                                <h5>Minimum Battery capacity</h5>
                                <p class="battery-capacity-6" id="battery-capacity">25KWH</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="top-det-slider">
                        <div class="slider-top-sec first sec-6-slider-top-sec-1 active">
                            <h5>NANO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-1-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec second sec-6-slider-top-sec-2">
                            <h5>MICRO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-6-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec third sec-6-slider-top-sec-3">
                            <h5>MINI BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-6-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fourth sec-6-slider-top-sec-4">
                            <h5>BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-6-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fifth sec-6-slider-top-sec-5">
                            <h5>MEGA BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-6-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="slider">
                        <label class="slider-bar-label" for="">Products</label>
                        <input type="range" min="0" max="4" step="1" value="0" id="custom-slider-bar-6"
                            class="styled-slider slider-progress">
                    </div>
                    <div class="bottom-det-slider">
                        <div class="slider-bottom-sec">
                            <div class="nano-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>NANO BAM</h6>
                            </div>
                            <div class="micro-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MICRO BAM</h6>
                            </div>
                            <div class="mini-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MINI BAM</h6>
                            </div>
                            <div class="bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>BAM</h6>
                            </div>
                            <div class="mega-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MEGA BAM</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-description">
        <div class="container bam-button-container" id="bam-button-container-6">
            <div class="row">
                <div class="col tab-sec-6 sec-6-col-1-bam-button active">
                    <div class="bam-single-button">
                        <h6>NANO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>15 - 60 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-6 sec-6-col-2-bam-button">
                    <div class="bam-single-button">
                        <h6>MICRO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>60 - 150 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-6 sec-6-col-3-bam-button">
                    <div class="bam-single-button">
                        <h6>MINI BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>125 - 200 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-6 sec-6-col-4-bam-button">
                    <div class="bam-single-button">
                        <h6>BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>200 - 400 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-6 sec-6-col-5-bam-button">
                    <div class="bam-single-button">
                        <h6>MEGA BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>400+ AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="nano-bam-6 bam-specs active">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-6-nano-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-6-nano-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-6-nano-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-6-nano-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-6-nano-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-6-nano-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">NANO BAM <span class="bam-heading">SPECS 6</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="micro-bam-6 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-6-micro-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-6-micro-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-6-micro-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-6-micro-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-6-micro-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-6-micro-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MICRO BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mini-bam-6 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-6-mini-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-6-mini-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-6-mini-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-6-mini-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-6-mini-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-6-mini-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MINI BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-6 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-6-mega-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-6-mega-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-6-mega-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-6-mega-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-6-mega-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-6-mega-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mega-bam-6 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-6-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-6-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-6-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-6-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-6-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-6-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MEGA BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="category-7-slider-sec cat-slider-sec">
    <div class="slider-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="battery-sec" id="nano-bam">
                        <div class="battery-images">
                            <div class="display-inline-flex text-center">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon display-sec" id="battery-7" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-7" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-7" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-7" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-7" alt="">
                            </div>
                        </div>
                        <div class="battery-capacity" id="">
                            <div class="capacity">
                                <h5>Minimum Battery capacity</h5>
                                <p class="battery-capacity-7" id="battery-capacity">25KWH</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="top-det-slider">
                        <div class="slider-top-sec first sec-7-slider-top-sec-1 active">
                            <h5>NANO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-1-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec second sec-7-slider-top-sec-2">
                            <h5>MICRO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-7-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec third sec-7-slider-top-sec-3">
                            <h5>MINI BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-7-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fourth sec-7-slider-top-sec-4">
                            <h5>BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-7-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fifth sec-7-slider-top-sec-5">
                            <h5>MEGA BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-7-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="slider">
                        <label class="slider-bar-label" for="">Products</label>
                        <input type="range" min="0" max="4" step="1" value="0" id="custom-slider-bar-7"
                            class="styled-slider slider-progress">
                    </div>
                    <div class="bottom-det-slider">
                        <div class="slider-bottom-sec">
                            <div class="nano-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>NANO BAM</h6>
                            </div>
                            <div class="micro-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MICRO BAM</h6>
                            </div>
                            <div class="mini-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MINI BAM</h6>
                            </div>
                            <div class="bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>BAM</h6>
                            </div>
                            <div class="mega-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MEGA BAM</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-description">
        <div class="container bam-button-container" id="bam-button-container-7">
            <div class="row">
                <div class="col tab-sec-7 sec-7-col-1-bam-button active">
                    <div class="bam-single-button">
                        <h6>NANO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>15 - 60 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-7 sec-7-col-2-bam-button">
                    <div class="bam-single-button">
                        <h6>MICRO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>60 - 150 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-7 sec-7-col-3-bam-button">
                    <div class="bam-single-button">
                        <h6>MINI BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>125 - 200 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-7 sec-7-col-4-bam-button">
                    <div class="bam-single-button">
                        <h6>BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>200 - 400 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-7 sec-7-col-5-bam-button">
                    <div class="bam-single-button">
                        <h6>MEGA BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>400+ AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="nano-bam-7 bam-specs active">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-7-nano-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-7-nano-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-7-nano-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-7-nano-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-7-nano-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-7-nano-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">NANO BAM <span class="bam-heading">SPECS 7</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="micro-bam-7 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-7-micro-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-7-micro-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-7-micro-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-7-micro-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-7-micro-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-7-micro-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MICRO BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mini-bam-7 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-7-mini-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-7-mini-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-7-mini-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-7-mini-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-7-mini-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-7-mini-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MINI BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-7 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-7-mega-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-7-mega-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-7-mega-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-7-mega-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-7-mega-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-7-mega-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mega-bam-7 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-7-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-7-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-7-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-7-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-7-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-7-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MEGA BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="category-8-slider-sec cat-slider-sec">
    <div class="slider-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="battery-sec" id="nano-bam">
                        <div class="battery-images">
                            <div class="display-inline-flex text-center">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon display-sec" id="battery-8" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-8" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-8" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-8" alt="">
                                <img src="<?php echo get_template_directory_uri().'/images/image_81-removebg-preview.png'?>"
                                    class="battery-icon" id="battery-8" alt="">
                            </div>
                        </div>
                        <div class="battery-capacity" id="">
                            <div class="capacity">
                                <h5>Minimum Battery capacity</h5>
                                <p class="battery-capacity-8" id="battery-capacity">25KWH</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="top-det-slider">
                        <div class="slider-top-sec first sec-8-slider-top-sec-1 active">
                            <h5>NANO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-1-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec second sec-8-slider-top-sec-2">
                            <h5>MICRO BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-8-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec third sec-8-slider-top-sec-3">
                            <h5>MINI BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-8-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fourth sec-8-slider-top-sec-4">
                            <h5>BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-8-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                        <div class="slider-top-sec fifth sec-8-slider-top-sec-5">
                            <h5>MEGA BAM</h5>
                            <div class="slider-top-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>PANEL SIZE</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXXXXXX+ AMP</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>OUTPUT</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">XXKW OR HIGHER</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>BASE CAPACITY</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="black">100KWH - 250KWH</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-top-details-polygon slider-8-polygon">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 15L0.339746 -1.63133e-06L17.6603 -1.17124e-07L9 15Z" fill="#EDEDED" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="slider">
                        <label class="slider-bar-label" for="">Products</label>
                        <input type="range" min="0" max="4" step="1" value="0" id="custom-slider-bar-8"
                            class="styled-slider slider-progress">
                    </div>
                    <div class="bottom-det-slider">
                        <div class="slider-bottom-sec">
                            <div class="nano-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>NANO BAM</h6>
                            </div>
                            <div class="micro-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MICRO BAM</h6>
                            </div>
                            <div class="mini-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MINI BAM</h6>
                            </div>
                            <div class="bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>BAM</h6>
                            </div>
                            <div class="mega-bam slider-name">
                                <div class="brick-grey">

                                </div>
                                <h6>MEGA BAM</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-description">
        <div class="container bam-button-container" id="bam-button-container-8">
            <div class="row">
                <div class="col tab-sec-8 sec-8-col-1-bam-button active">
                    <div class="bam-single-button">
                        <h6>NANO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>15 - 60 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-8 sec-8-col-2-bam-button">
                    <div class="bam-single-button">
                        <h6>MICRO BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>60 - 150 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-8 sec-8-col-3-bam-button">
                    <div class="bam-single-button">
                        <h6>MINI BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>125 - 200 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-8 sec-8-col-4-bam-button">
                    <div class="bam-single-button">
                        <h6>BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>200 - 400 AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
                <div class="col tab-sec-8 sec-8-col-5-bam-button">
                    <div class="bam-single-button">
                        <h6>MEGA BAM</h6>
                        <div class="tablet-shp-grey">
                            <p>400+ AMP</p>
                        </div>
                    </div>
                    <div class="polygon-black">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 16L0.339746 0.25L17.6603 0.250002L9 16Z" fill="#253745" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="nano-bam-8 bam-specs active">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-8-nano-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-8-nano-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-8-nano-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-8-nano-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-8-nano-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-8-nano-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">NANO BAM <span class="bam-heading">SPECS 8</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="micro-bam-8 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-8-micro-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-8-micro-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-8-micro-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-8-micro-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-8-micro-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-8-micro-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MICRO BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mini-bam-8 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-8-mini-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-8-mini-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-8-mini-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-8-mini-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-8-mini-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-8-mini-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MINI BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bam-8 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-8-mega-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-8-mega-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-8-mega-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-8-mega-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-8-mega-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-8-mega-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">BAM <span class="bam-heading">SPECS</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mega-bam-8 bam-specs">
        <div class="container">
            <div class="row g-5 spec-row">
                <div class="col-md-4 spec-row-col-4">
                    <div id="cat-8-bam-carousal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri() .
                                    "/images/nano-bam-1-cr-img-1.png"; ?>"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-control-prev-products-page" type="button"
                            data-bs-target="#cat-8-bam-carousal" data-bs-slide="prev">
                            <i class="fas fa-chevron-left products-slider-button"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next carousel-control-next-products-page" type="button"
                            data-bs-target="#cat-8-bam-carousal" data-bs-slide="next">
                            <i class="fas fa-chevron-right products-slider-button"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <div class="carousel-indicators carousel-indicators-products-page-carousal">
                            <button type="button" data-bs-target="#cat-8-bam-carousal" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cat-8-bam-carousal" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cat-8-bam-carousal" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="spec-h3">MEGA BAM <span class="bam-heading">SPECS 8</span></h3>
                    <hr class="spec-underline">
                    <p class="spec-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    <p class="spec-p">standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                    <div class="specs-button-grid">
                        <div class="row g-3">
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>PANEL</h6>
                                        <p>400+ Amp</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Output </h6>
                                        <p>96kW or higher</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>BESS Capacity</h6>
                                        <p>200kWh - 500kWh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Hours BESS</h6>
                                        <p>40 - 100 Hours</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Outputs</h6>
                                        <p class="font-13">Tri UPS + Micro-Grid Internal control UPS</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>System Size </h6>
                                        <p class="font-13">72"W x 30"D x 90" H(Three Cabinets)</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Battery Cabinets</h6>
                                        <p>1 - 5</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 button-single">
                                <div class="button-single-inner">
                                    <div class="div-in">
                                        <h6>Application</h6>
                                        <p class="font-13">On/Off Grid Large Residence</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="btn product-spec-download-btn" href="<?php echo get_template_directory_uri().'/ESI Matrix.zip'?>" download="ESI Matrix.zip">Product Specifications<i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="custom-requirements-section">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>custom requirements?</h2>
                    <p>The Client Solution team is happy to review your project. Complete the project profile form</p>
                </div>
                <div class="col-md-6 button-col">
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#requirementModal">
                        Project Profile Form
                    </button>
                </div>
            </div>
        </div>        
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="requirementModal" tabindex="-1" aria-labelledby="requirementModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content requirements-modal-content">
      <div class="modal-header">
        <div class="requirement-modal-image-section">
            <img src="<?php echo get_template_directory_uri() ."/images/Group 42.png" ?>" alt="">            
            <hr>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="">Project Name/Location:</label>
                        <input type="text">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Email:</label>
                        <input type="email">
                    </div>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="">Building #1 Size:</label>
                            <input type="text">
                        </div>
                        <div class="col-md-4">
                            <label for="">Building #2 Size:</label>
                            <input type="text">
                        </div>
                        <div class="col-md-4">
                            <label for="">Building #3 Size:</label>
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 custom-width-col-2">
                    <div class="form-group mb-3">
                        <label for="" class="main-label">Project Type:</label>
                        <div class="grey-underline-modal-title"></div>
                        <div class="row g-4">
                            <div class="col-md-6 mobile-mt-2">
                                <div class="form-check">
                                    <label class="form-check-label" for="flexCheckChecked-1">
                                        New Construction
                                    </label>
                                    <input class="form-check-input form-check-right-padding" type="checkbox" value="" id="flexCheckChecked-1">
                                </div>
                            </div>
                            <div class="col-md-6 mobile-mt-2">
                                <div class="form-check">
                                    <label class="form-check-label form-check-left-padding" for="flexCheckChecked-99">
                                    Retrofit/ Renovation
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-99">
                                </div>
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="form-check">
                                    <label class="form-check-label" for="flexCheckChecked-2">
                                    Residential
                                    </label>
                                    <input class="form-check-input form-check-right-padding" type="checkbox" value="" id="flexCheckChecked-2">
                                </div>
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="form-check">
                                    <label class="form-check-label form-check-left-padding" for="flexCheckChecked-3">
                                    Commercial
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-3">
                                </div>
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="form-check">
                                    <label class="form-check-label" for="flexCheckChecked-4">
                                    Off Grid
                                    </label>
                                    <input class="form-check-input form-check-right-padding" type="checkbox" value="" id="flexCheckChecked-4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="main-label">Utility Service:</label>
                        <div class="grey-underline-modal-title"></div>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-small">
                                        Main Service Amps:
                                    </label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-small">
                                        Voltage/ Current:
                                    </label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="font-small">
                                        Qty. Sub Panels:
                                    </label>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 mt-0 pt-15">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Single Phase
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-5">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <label class="form-check-label" for="flexCheckChecked">
                                    Three Phase
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-6">
                                </div>
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-check">
                                    <label class="form-check-label" for="flexCheckChecked">
                                    Electric
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-7">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-check">
                                    <label class="form-check-label" for="flexCheckChecked">
                                    Gas
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-8">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-check">
                                    <label class="form-check-label" for="flexCheckChecked">
                                    Propane
                                    </label>
                                    <input class="form-check-input form-check-right-padding" type="checkbox" value="" id="flexCheckChecked-9">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 bg-creamy">
                <div class="col-md-6">
                    <label for="" class="main-label">Distributed Energy Resources Desired</label>
                    <div class="grey-underline-modal-title"></div>
                    <div class="row g-4">
                        <div class="col-md-12 w-75">
                            <div class="form-check">
                                <label class="form-check-label" for="flexCheckChecked">
                                Battery Energy Storage System (BESS)
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-11">
                            </div>
                        </div>
                        <div class="col-md-12 w-75 mt-2">
                            <div class="form-check">
                                <label class="form-check-label" for="flexCheckChecked">
                                Power Monitored Sub Panels
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-12">
                            </div>
                        </div>
                        <div class="col-md-6 w-30 mt-2">
                            <div class="form-check">
                                <label class="form-check-label" for="flexCheckChecked">
                                Solar Panels 
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-13">
                            </div>
                        </div>
                        <div class="col-md-6 w-30 mt-2">
                            <div class="form-check">
                                <label class="form-check-label" for="flexCheckChecked">
                                Generator
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-14">
                            </div>
                        </div>
                        <div class="col-md-12 w-75 mt-2">
                            <div class="form-check">
                                <label class="form-check-label" for="flexCheckChecked">
                                Combined Heat/Power (CHP)
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-15">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="" class="main-label">Major Electrical Loads</label>
                    <div class="grey-underline-modal-title"></div>
                    <div class="row g-3">
                        <div class="col-md-3 mt-2">
                            <h5>Heat</h5>                            
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check">
                                <label class="form-check-label pl  form-check-left-padding" for="flexCheckChecked">
                                Gas
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-16">
                            </div>
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check">
                                <label class="form-check-label pl" for="flexCheckChecked">
                                Electric
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-17">
                            </div>   
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check">
                                <label class="form-check-label pl" for="flexCheckChecked">
                                AC
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-18">
                            </div>   
                        </div>
                        <div class="col-md-3 mt-2">
                            <h5>
                            Water Heater</h5>
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check">
                                <label class="form-check-label pl form-check-left-padding" for="flexCheckChecked">
                                Gas
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-19">
                            </div>
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check">
                                <label class="form-check-label pl" for="flexCheckChecked">
                                Electric
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-20">
                            </div>   
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check">
                                <label class="form-check-label pl" for="flexCheckChecked">
                                Freezer
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-21">
                            </div>   
                        </div>
                        <div class="col-md-3 mt-2">
                            <h5>Pool Heat</h5>                           
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check">
                                <label class="form-check-label pl form-check-left-padding" for="flexCheckChecked">
                                Gas
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-22">
                            </div>
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check">
                                <label class="form-check-label pl" for="flexCheckChecked">
                                Electric
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-23">
                            </div>   
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check">
                                <label class="form-check-label pl" for="flexCheckChecked">
                                Sauna
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-24">
                            </div>   
                        </div>
                        <div class="col-md-3 mt-2">
                            <h5>Spa Heat</h5>                           
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check">
                                <label class="form-check-label pl form-check-left-padding" for="flexCheckChecked">
                                Gas
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-25">
                            </div>
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check">
                                <label class="form-check-label pl" for="flexCheckChecked">
                                Electric
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-26">
                            </div>   
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check">
                                <label class="form-check-label pl" for="flexCheckChecked">
                                Boiler
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-27">
                            </div>   
                        </div>
                        <div class="col-md-3 mt-2">
                            <h5>Pumps</h5>                           
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check">
                                <label class="form-check-label pl form-check-left-padding" for="flexCheckChecked">
                                Pool
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-28">
                            </div>
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check">
                                <label class="form-check-label pl" for="flexCheckChecked">
                                Sump
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-29">
                            </div>   
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check">
                                <label class="form-check-label pl" for="flexCheckChecked">
                                Well
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-30">
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pad-column">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for=""><h5 class="mb-25">Heating System Type</h5></label>
                            <div class="row g-3">
                                <div class="col-md-4 mb-0">
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexCheckChecked">
                                        Hydronic
                                        </label>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-31">
                                    </div>  
                                </div>
                                <div class="col-md-4 mb-0">
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexCheckChecked">
                                        Forced Air
                                        </label>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked-32">
                                    </div>  
                                </div>
                                <div class="col-md-4 mb-0">
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexCheckChecked">
                                        Split
                                        </label>
                                        <input class="form-check-input form-check-right-padding" type="checkbox" value="" id="flexCheckChecked-33">
                                    </div>  
                                </div>
                                <div class="col-md-6 mt-2">
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexCheckChecked">
                                        Radiant Electric
                                        </label>
                                        <input class="form-check-input form-check-right-padding" type="checkbox" value="" id="flexCheckChecked-34">
                                    </div>  
                                </div>
                                <div class="col-md-6 mt-2">
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexCheckChecked">
                                        Heat Pump
                                        </label>
                                        <input class="form-check-input form-check-right-padding" type="checkbox" value="" id="flexCheckChecked-35">
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for=""><h5>EV Charger</h5></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for=""><h5>Qty</h5></label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for=""><h5>Other Loads:</h5></label>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="text-center mt-35">
                    <label for="" class="main-label">Desired System</label>
                </div>                
                <hr>
                <div class="col-md-12 pad-column mt-35">
                    <div class="form-check display-block">
                        <label class="form-check-label" for="flexCheckChecked">
                        <h5 class="pl">I want to power my entire house as usual during a power outage for:</h5> 
                        </label>
                        <input class="form-check-input left-input" type="checkbox" value="" id="flexCheckChecked-40">
                    </div> 
                    <div class="row g-4 pad-column-2 mt-25">
                        <div class="col-md-4">
                            <div class="form-check display-block">
                                <label class="form-check-label pl" for="flexCheckChecked"> 2-6 Hours </label>
                                <input class="form-check-input left-input" type="checkbox" value="" id="flexCheckChecked-41">
                            </div> 
                        </div>
                        <div class="col-md-4">
                            <div class="form-check display-block">
                                <label class="form-check-label pl" for="flexCheckChecked">6-12 Hours</label>
                                <input class="form-check-input left-input" type="checkbox" value="" id="flexCheckChecked-42">
                            </div>                                
                        </div>
                        <div class="col-md-4">
                            <div class="form-check display-block">
                                <label class="form-check-label pl" for="flexCheckChecked">12+ Hours</label>
                                <input class="form-check-input left-input" type="checkbox" value="" id="flexCheckChecked-43">
                            </div>                                  
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pad-column mt-25">
                    <div class="form-check display-block">
                        <label class="form-check-label" for="flexCheckChecked">
                        <h5 class="pl"> I want to power only essential parts of my home during a power outage for:</h5>
                        </label>
                        <input class="form-check-input left-input" type="checkbox" value="" id="flexCheckChecked-44">
                    </div> 
                    <div class="row g-4 pad-column-2 mt-25">
                        <div class="col-md-4">
                            <div class="form-check display-block">
                                <label class="form-check-label pl" for="flexCheckChecked"> 2-6 Hours </label>
                                <input class="form-check-input left-input" type="checkbox" value="" id="flexCheckChecked-45">
                            </div> 
                        </div>
                        <div class="col-md-4">
                            <div class="form-check display-block">
                                <label class="form-check-label pl" for="flexCheckChecked">6-12 Hours</label>
                                <input class="form-check-input left-input" type="checkbox" value="" id="flexCheckChecked-46">
                            </div>                                
                        </div>
                        <div class="col-md-4">
                            <div class="form-check display-block">
                                <label class="form-check-label pl" for="flexCheckChecked">12+ Hours</label>
                                <input class="form-check-input left-input" type="checkbox" value="" id="flexCheckChecked-47">
                            </div>                                  
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pad-column mt-25">
                    <div class="form-check display-block">
                        <label class="form-check-label" for="flexCheckChecked">
                         <h5 class="pl"> I want to maximize the use of on-site renewable energy sources as much as possible</h5>  
                        </label>
                        <input class="form-check-input left-input" type="checkbox" value="" id="flexCheckChecked-48">
                    </div> 
                </div>
            </div>
            <div class="col-md-12 requirement-bottom-textarea">
                <label for="" class="main-label">Energy Security, Inc Power Profile Survey<br><small>What else should we consider that you want incorporated into your Energy Security System?</small></label>
                <textarea name="" id="" cols="" rows="4"></textarea>
            </div>
          </form>        
      </div>
      <div class="modal-footer">
        <div class="custom-padding-modal">
            <button type="button" class="btn requirements-modal-cancel" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn requirements-modal-submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer();
