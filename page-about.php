<?php
	get_header();
?>
<section>
        <div class="container about-cont-1">
            <div class="row">
                <div class="col-md-6 about-main-text-col">
                    <h1 class="about-h1"><span style="color: #999999;">We Are </span>Energy Security</h1>
                </div>
                <div class="col-md-6 about-main-img-col">
                    <img src="<?php echo get_theme_mod('we_are_ES_image')?>" alt="">
                </div>
                <div class="col-md-12">
                    <p class="about-p about-p-1"><?php echo get_theme_mod('we_are_ES_description')?></p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid dark-back">
            <div class="container">
                <div class="about-logo-sec">				
                    <img src="<?php echo get_theme_mod('vision_mission_image')?>" alt="">
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="about-dark-text-sec">
                            <h2 class="about-h2-white">our mission</h2>
                            <div class="h2-bottom">
                                <div class="h2-bottom-dark"></div>
                                <div class="h2-bottom-light"></div>
                            </div>							
                            <p class="about-p-white"><?php echo get_theme_mod('mission_description')?></p>
                        </div>
                        <div class="about-dark-text-sec">
                            <h2 class="about-h2-white ov-h2">our vision</h2>
                            <div class="h2-bottom">
                                <div class="h2-bottom-dark"></div>
                                <div class="h2-bottom-light"></div>
                            </div>
                            <p class="about-p-white"><?php echo get_theme_mod('vision_description')?></p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="about-dark-text-sec">
                            <h2 class="about-h2-white">Message from Founder</h2>
                            <div class="h2-bottom">
                                <div class="h2-bottom-dark"></div>
                                <div class="h2-bottom-light"></div>
                            </div>
                        </div>
                        <div class="founder-about">
                            <h2 class="founder-about-h2"><?php echo get_theme_mod('founder_message')?></h2>
                            <div class="founder-about-man">
                                <img src="<?php echo get_theme_mod('founder_image')?>" class="founder-about-man-img" alt="">
                                <div class="founder-about-man-det">
                                    <div class="div-100">
                                        <h3 class="founder-about-man-h2"><?php echo get_theme_mod('founder_name')?></h3>
                                        <p class="founder-about-man-p"><?php echo get_theme_mod('founder_rank')?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>

    <section>
        <div class="container about-cont-2">
            <div class="col-md-7">
                <h2>Meet The <span style="color:#999999;">E-Team?</span></h2>
                <p class="about-p about-p-2"><?php echo get_theme_mod('meet_the_e_team_description')?></p>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel about-page-carousal owl-theme owl-cr-1">
				<?php
					$defaults = [
						[
							'member_image'   => 'http://localhost/wordpress/wp-content/uploads/2022/02/21104.png',
                            'member_name'    => 'E-Team Member',
                            'member_rank'    => "E-Team Member's Rank",
						],
					];
					$e_team_settings = get_theme_mod( 'meet_the_e_team_carousal', $defaults );
				?>
				<?php foreach ($e_team_settings as $e_team_setting): ?>
					<div class="cr-1-item">
                      <div class="cr-1-img-sec">
                        <img src="<?php echo $e_team_setting['member_image']?>" class="support-man-img" alt="">
                    </div>
                        <div class="cr-1-det-sec">
                            <h3 class="cr-1-man-name"><?php echo $e_team_setting['member_name']?></h3>
                            <p class="cr-1-man-title"><?php echo $e_team_setting['member_rank']?></p>
                        </div>
                    </div>
				<?php endforeach ?>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid dark-back">
            <div class="container about-cont-3">
                <div class="col-md-7">
                    <h2 class="about-h2-white about-support-team-h2">ESI <span style="color: #999999;"> Support Team</span></h2>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel about-page-carousal owl-theme owl-cr-2">
						<?php
							$defaults = [
								[
									'esi_support_member_image'   => 'http://localhost/wordpress/wp-content/uploads/2022/02/21104.png',
                                    'esi_support_member_name'    => 'Esi Support Member',
                                    'esi_support_member_rank'    => "Esi Support Member's Rank",
								],
							];
							$esi_support_settings = get_theme_mod( 'esi_support_team_carousal', $defaults );
						?>
						<?php foreach($esi_support_settings as $esi_support_setting): ?>
							<div class="cr-2-item">
								<div class="cr-2-img-sec">
									<img src="<?php echo $esi_support_setting['esi_support_member_image']?>" class="support-man-img" alt="">
								</div>
								<div class="cr-2-det-sec">
									<h3 class="cr-2-man-name"><?php echo $esi_support_setting['esi_support_member_name']?></h3>
									<p class="cr-2-man-title"><?php echo $esi_support_setting['esi_support_member_rank']?></p>
								</div>
							</div>
						<?php endforeach?>
                    </div>
                </div>
            </div>            
        </div>
    </section>

<?php
	get_footer();