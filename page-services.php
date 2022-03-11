<?php
	get_header();
?>
<section>
      <div class="container service-cont-1">
        <div class="row">
          <div class="col-md-6 service-main-text-col">
            <h1 class="service-h">OUR <span style="color: #999999;">SERVICES</span>
            </h1>
            <p class="service-p service-p-1"><?php echo get_theme_mod('services_main_description') ?></p>
          </div>
          <div class="col-md-6 service-main-img-col">
            <img src="<?php echo get_theme_mod('services_main_image') ?>" alt="">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container service-cont-2">
        <div class="row g-4">
          <div class="col-md-3">
            <div class="card service-card">
              <div class="card-icon-sec">
                <img src="<?php echo get_theme_mod('project_planing_icon')?>" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title service-card-title"><?php echo get_theme_mod('project_planing_title')?> </h5>
                <p class="card-text service-card-text"><?php echo get_theme_mod('project_planing_description')?></p>
              </div>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="card service-card">
              <div class="card-icon-sec">
                <img src="<?php echo get_theme_mod('design_&_engineering_icon')?>" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title service-card-title"><?php echo get_theme_mod('design_&_engineering_title')?></h5>
                <p class="card-text service-card-text"><?php echo get_theme_mod('design_&_engineering_description')?></p>
              </div>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="card service-card">
              <div class="card-icon-sec">
                <img src="<?php echo get_theme_mod('project_implementation_icon')?>" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title service-card-title"><?php echo get_theme_mod('project_implementation_title')?></h5>
                <p class="card-text service-card-text"><?php echo get_theme_mod('project_implementation_description')?></p>
              </div>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="card service-card">
              <div class="card-icon-sec">
                <img src="<?php echo get_theme_mod('post_project_support_icon')?>" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title service-card-title"><?php echo get_theme_mod('post_project_support_title')?></h5>
                <p class="card-text service-card-text"><?php echo get_theme_mod('post_project_support_description')?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <hr>
      <div class="container service-cont-3">
        <div class="row">
          <div class="col-md-7 service-sub-text-col">
            <h2 class="service-h2 service-support-team-h2">Project <span style="color: #999999;"> Planning</span>
            </h2>
            <p class="service-p service-p-2"><?php echo get_theme_mod('project_planning_description')?></p>
          </div>
        </div>
        <div class="service-desc-sec">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="main-services-tab" data-bs-toggle="tab" data-bs-target="#main-services" type="button" role="tab" aria-controls="main-services" aria-selected="true"><h3 class="service-desc-sec-head">Main Services</h3></button>
              <div class="polygon-down">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#EDEDED" class="bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
              </div>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="work-flow-tab" data-bs-toggle="tab" data-bs-target="#work-flow" type="button" role="tab" aria-controls="work-flow" aria-selected="false"><h3 class="service-desc-sec-head">Work Flow</h3></button>
              <div class="polygon-down">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#EDEDED" class="bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
              </div>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="team-tab" data-bs-toggle="tab" data-bs-target="#team" type="button" role="tab" aria-controls="team" aria-selected="false"><h3 class="service-desc-sec-head">ESI Team</h3></button>
              <div class="polygon-down">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#EDEDED" class="bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
              </div>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="main-services" role="tabpanel" aria-labelledby="main-services-tab">
              <div class="services-desc-sec-main">
                <div class="services-desc-sec-title col-md-4">
                  <h4><?php echo get_theme_mod('pp_main_services_heading')?></h4>
                </div>
                <div class="topic-underline"></div>
                <div class="row g-4">
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                        <h3><?php echo get_theme_mod('pp_main_services_box_1_heading')?></h3>
                        <span>ESI's E-Team:</span>
                        <?php
                          $defaults = [
                            ['item'   => esc_html__( 'Kirki Site', 'kirki' ),],
                          ];
                          $box_1_lists = get_theme_mod( 'pp_main_services_box_1_list', $defaults );
                        ?>
                        <?php foreach($box_1_lists as $box_1_list):?>
                          <p><?php echo $box_1_list['item']?></p>
                        <?php endforeach?>
                      </div>
                    </div>
                  </div>
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                      <h3><?php echo get_theme_mod('pp_main_services_box_2_heading')?></h3>
                        <span>ESI's E-Team:</span>
                        <?php
                          $defaults = [
                            ['item'   => esc_html__( 'Kirki Site', 'kirki' ),],
                          ];
                          $box_2_lists = get_theme_mod( 'pp_main_services_box_2_list', $defaults );
                        ?>
                        <?php foreach($box_2_lists as $box_2_list):?>
                          <p><?php echo $box_2_list['item']?></p>
                        <?php endforeach?>
                      </div>
                    </div>
                  </div>
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                      <h3><?php echo get_theme_mod('pp_main_services_box_3_heading')?></h3>
                        <span>ESI's E-Team:</span>
                        <?php $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                          $box_3_lists = get_theme_mod( 'pp_main_services_box_3_list', $defaults );
                        ?>
                        <?php foreach($box_3_lists as $box_3_list):?>
                          <p><?php echo $box_3_list['item']?></p>
                        <?php endforeach?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="work-flow" role="tabpanel" aria-labelledby="work-flow-tab">
              <div class="services-desc-sec-main">
                <div class="services-desc-sec-title col-md-8">
                  <h4><?php echo get_theme_mod('pp_workflow_heading')?></h4>
                </div>
                <div class="topic-underline"></div>
                <div class="row image-row g-4">
                  <div class="col" style="background: #253745;">
                    <img src="<?php echo get_theme_mod('pp_workflow_image')?>" class="w-100" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">
              <div class="services-desc-sec-main">
                <div class="services-desc-sec-title col-md-6">
                  <h4><?php echo get_theme_mod('pp_esi_heading')?></h4>
                </div>
                <div class="topic-underline"></div>
                <div class="row esi-tem-row g-4">
                  <div class="col-4 col">
                    <div class="card">
                      <div class="card-body">
                        <div class="round-sec" style="background-image:url('<?php echo get_theme_mod('pp_esi_box_1_image')?>');">
                        </div>
                        <div class="det-sec">
                          <h4><?php echo get_theme_mod('pp_esi_box_1_heading')?></h4>
                          <div class="title-underline-green"></div>
                          <ul>
                            <?php $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                              $box_1_lists_esi = get_theme_mod( 'pp_esi_box_1_list', $defaults );
                            ?>
                            <?php foreach($box_1_lists_esi as $box_1_list_esi):?>
                              <li><?php echo $box_1_list_esi['item']?></li>
                            <?php endforeach?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 col">
                    <div class="card">
                      <div class="card-body">
                      <div class="round-sec" style="background-image:url('<?php echo get_theme_mod('pp_esi_box_2_image')?>');">
                        </div>
                        <div class="det-sec">
                          <h4><?php echo get_theme_mod('pp_esi_box_2_heading')?></h4>
                          <div class="title-underline-green"></div>
                          <ul>
                            <?php $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                              $box_2_lists_esi = get_theme_mod( 'pp_esi_box_2_list', $defaults );
                            ?>
                            <?php foreach($box_2_lists_esi as $box_2_list_esi):?>
                              <li><?php echo $box_2_list_esi['item']?></li>
                            <?php endforeach?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 col">
                    <div class="card">
                      <div class="card-body">
                      <div class="round-sec" style="background-image:url('<?php echo get_theme_mod('pp_esi_box_3_image')?>');"></div>
                        <div class="det-sec">
                          <h4><?php echo get_theme_mod('pp_esi_box_3_heading')?></h4>
                          <div class="title-underline-green"></div>
                          <ul>
                            <?php $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                              $box_3_lists_esi = get_theme_mod( 'pp_esi_box_3_list', $defaults );
                            ?>
                            <?php foreach($box_3_lists_esi as $box_3_list_esi):?>
                              <li><?php echo $box_3_list_esi['item']?></li>
                            <?php endforeach?>
                          </ul>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
      <hr>
      <div class="container service-cont-3">
        <div class="row">
          <div class="col-md-8 service-sub-text-col">
            <h2 class="service-h2 service-support-team-h2">Design & <span style="color: #999999;"> Engineering</span>
            </h2>
            <p class="service-p service-p-2"><?php echo get_theme_mod('design_engineering_description')?></p>
          </div>
        </div>
        <div class="service-desc-sec">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="main-services-tab" data-bs-toggle="tab" data-bs-target="#main-services-2" type="button" role="tab" aria-controls="main-services-2" aria-selected="true"><h3 class="service-desc-sec-head">Main Services</h3></button>
              <div class="polygon-down">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#EDEDED" class="bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
              </div>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="work-flow-tab" data-bs-toggle="tab" data-bs-target="#work-flow-2" type="button" role="tab" aria-controls="work-flow-2" aria-selected="false"><h3 class="service-desc-sec-head">Work Flow</h3></button>
              <div class="polygon-down">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#EDEDED" class="bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
              </div>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="team-tab" data-bs-toggle="tab" data-bs-target="#team-2" type="button" role="tab" aria-controls="team-2" aria-selected="false"><h3 class="service-desc-sec-head">ESI Team</h3></button>
              <div class="polygon-down">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#EDEDED" class="bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
              </div>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="main-services-2" role="tabpanel" aria-labelledby="main-services-2-tab">
              <div class="services-desc-sec-main">
                <div class="services-desc-sec-title col-md-4">
                  <h4><?php echo get_theme_mod('design_engineering_main_services_heading')?></h4>
                </div>
                <div class="topic-underline"></div>
                <div class="row g-4">
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                        <h3><?php echo get_theme_mod('design_engineering_main_services_box_1_heading')?></h3>
                        <span>ESI's E-Team:</span>
                        <?php $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                          $box_1_lists = get_theme_mod( 'design_engineering_main_services_box_1_list', $defaults );
                        ?>
                        <?php foreach($box_1_lists as $box_1_list):?>
                          <p><?php echo $box_1_list['item']?></p>
                        <?php endforeach?>
                      </div>
                    </div>
                  </div>
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                        <h3><?php echo get_theme_mod('design_engineering_main_services_box_2_heading')?></h3>
                        <span>ESI's E-Team:</span>
                        <?php $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                          $box_2_lists = get_theme_mod( 'design_engineering_main_services_box_2_list', $defaults );
                        ?>
                        <?php foreach($box_2_lists as $box_2_list):?>
                          <p><?php echo $box_2_list['item']?></p>
                        <?php endforeach?>
                      </div>
                    </div>
                  </div>
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                      <h3><?php echo get_theme_mod('design_engineering_main_services_box_3_heading')?></h3>
                        <span>ESI's E-Team:</span>
                        <?php $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                          $box_3_lists = get_theme_mod( 'design_engineering_main_services_box_3_list', $defaults );
                        ?>
                        <?php foreach($box_3_lists as $box_3_list):?>
                          <p><?php echo $box_3_list['item']?></p>
                        <?php endforeach?>
                      </div>
                    </div>
                  </div>
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                      <h3><?php echo get_theme_mod('design_engineering_main_services_box_4_heading')?></h3>
                        <span>ESI's E-Team:</span>
                        <?php $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                          $box_4_lists = get_theme_mod( 'design_engineering_main_services_box_4_list', $defaults );
                        ?>
                        <?php foreach($box_4_lists as $box_4_list):?>
                          <p><?php echo $box_4_list['item']?></p>
                        <?php endforeach?>
                      </div>
                    </div>
                  </div>
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                      <h3><?php echo get_theme_mod('design_engineering_main_services_box_5_heading')?></h3>
                        <span>ESI's E-Team:</span>
                        <?php $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                          $box_5_lists = get_theme_mod( 'design_engineering_main_services_box_5_list', $defaults );
                        ?>
                        <?php foreach($box_5_lists as $box_5_list):?>
                          <p><?php echo $box_5_list['item']?></p>
                        <?php endforeach?>
                      </div>
                    </div>
                  </div>
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                      <h3><?php echo get_theme_mod('design_engineering_main_services_box_6_heading')?></h3>
                        <span>ESI's E-Team:</span>
                        <?php $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                          $box_6_lists = get_theme_mod( 'design_engineering_main_services_box_6_list', $defaults );
                        ?>
                        <?php foreach($box_6_lists as $box_6_list):?>
                          <p><?php echo $box_6_list['item']?></p>
                        <?php endforeach?>
                      </div>
                    </div>
                  </div>
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                      <h3><?php echo get_theme_mod('design_engineering_main_services_box_7_heading')?></h3>
                        <span>ESI's E-Team:</span>
                        <?php $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                          $box_7_lists = get_theme_mod( 'design_engineering_main_services_box_7_list', $defaults );
                        ?>
                        <?php foreach($box_7_lists as $box_7_list):?>
                          <p><?php echo $box_7_list['item']?></p>
                        <?php endforeach?>
                      </div>
                    </div>
                  </div>
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                      <h3><?php echo get_theme_mod('design_engineering_main_services_box_8_heading')?></h3>
                        <span>ESI's E-Team:</span>
                        <?php $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                          $box_8_lists = get_theme_mod( 'design_engineering_main_services_box_8_list', $defaults );
                        ?>
                        <?php foreach($box_8_lists as $box_8_list):?>
                          <p><?php echo $box_8_list['item']?></p>
                        <?php endforeach?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="work-flow-2" role="tabpanel" aria-labelledby="work-flow-2-tab">
              <div class="services-desc-sec-main">
                <div class="services-desc-sec-title col-md-8">
                  <h4><?php echo get_theme_mod('design_engineering_workflow_heading')?></h4>
                </div>
                <div class="topic-underline"></div>
                <div class="row image-row g-4">
                  <div class="col" style="background: #253745;">
                    <img src="<?php echo get_theme_mod('design_engineering_workflow_image')?>" class="w-100" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="team-2" role="tabpanel" aria-labelledby="team-2-tab">
              <div class="services-desc-sec-main">
                <div class="services-desc-sec-title col-md-6">
                  <h4><?php echo get_theme_mod('design_engineering_esi_heading')?></h4>
                </div>
                <div class="topic-underline"></div>
                <div class="row esi-tem-row g-4">
                  <div class="col-4 col">
                    <div class="card">
                      <div class="card-body">
                        <div class="round-sec" style="background-image:url('<?php echo get_theme_mod("design_engineering_esi_box_1_image"); ?>');"></div>
                          <div class="det-sec">
                            <h4><?php echo get_theme_mod("design_engineering_esi_box_1_heading"); ?></h4>
                            <div class="title-underline-green"></div>
                            <ul>
                              <?php $defaults = [["item" => esc_html__("Kirki Site", "kirki")],];
                              $box_10_lists_esi = get_theme_mod("design_engineering_esi_box_1_list",$defaults);
                              ?>
                              <?php foreach ($box_10_lists_esi as $box_10_list_esi): ?>
                                <li><?php echo $box_10_list_esi["item"]; ?></li>
                              <?php endforeach; ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  <div class="col-4 col">
                    <div class="card">
                      <div class="card-body">
                        <div class="round-sec" style="background-image:url('<?php echo get_theme_mod("design_engineering_esi_box_2_image"); ?>');"></div>
                          <div class="det-sec">
                            <h4><?php echo get_theme_mod("design_engineering_esi_box_1_heading"); ?></h4>
                            <div class="title-underline-green"></div>
                            <ul>
                              <?php $defaults = [["item" => esc_html__("Kirki Site", "kirki")],];
                              $box_11_lists_esi = get_theme_mod("design_engineering_esi_box_2_list",$defaults);
                              ?>
                              <?php foreach ($box_11_lists_esi as $box_11_list_esi): ?>
                                <li><?php echo $box_11_list_esi["item"]; ?></li>
                              <?php endforeach; ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  <div class="col-4 col">
                    <div class="card">
                      <div class="card-body">
                        <div class="round-sec" style="background-image:url('<?php echo get_theme_mod("design_engineering_esi_box_3_image"); ?>');"></div>
                          <div class="det-sec">
                            <h4><?php echo get_theme_mod("design_engineering_esi_box_3_heading"); ?></h4>
                            <div class="title-underline-green"></div>
                            <ul>
                              <?php $defaults = [["item" => esc_html__("Kirki Site", "kirki")],];
                              $box_13_lists_esi = get_theme_mod("design_engineering_esi_box_3_list",$defaults);
                              ?>
                              <?php foreach ($box_13_lists_esi as $box_13_list_esi): ?>
                                <li><?php echo $box_13_list_esi["item"]; ?></li>
                              <?php endforeach; ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
      <hr>
      <div class="container service-cont-3">
        <div class="row">
          <div class="col-md-8 service-sub-text-col">
            <h2 class="service-h2 service-support-team-h2">Project <span style="color: #999999;">Implementation</span>
            </h2>
            <p class="service-p service-p-2"><?php echo get_theme_mod('pi_description')?></p>
          </div>
        </div>
        <div class="service-desc-sec">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="main-services-tab" data-bs-toggle="tab" data-bs-target="#main-services-3" type="button" role="tab" aria-controls="main-services-3" aria-selected="true"><h3 class="service-desc-sec-head">Main Services</h3></button>
              <div class="polygon-down">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#EDEDED" class="bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
              </div>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="work-flow-tab" data-bs-toggle="tab" data-bs-target="#work-flow-3" type="button" role="tab" aria-controls="work-flow-3" aria-selected="false"><h3 class="service-desc-sec-head">Work Flow</h3></button>
              <div class="polygon-down">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#EDEDED" class="bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
              </div>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="team-tab" data-bs-toggle="tab" data-bs-target="#team-3" type="button" role="tab" aria-controls="team-3" aria-selected="false"><h3 class="service-desc-sec-head">ESI Team</h3></button>
              <div class="polygon-down">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#EDEDED" class="bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
              </div>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="main-services-3" role="tabpanel" aria-labelledby="main-services-3-tab">
              <div class="services-desc-sec-main">
                <div class="services-desc-sec-title col-md-4">
                  <h4><?php echo get_theme_mod('pi_main_services_heading')?></h4>
                </div>
                <div class="topic-underline"></div>
                <div class="row g-4">
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                        <h3><?php echo get_theme_mod('pi_main_services_box_1_heading')?></h3>
                        <span>ESI's E-Team:</span>
                        <?php
                          $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                          $pi_main_services_box_1_lists = get_theme_mod( 'pi_main_services_box_1_list', $defaults );
                        ?>
                        <?php foreach ($pi_main_services_box_1_lists as $pi_main_services_box_1_list): ?>
                          <p><?php echo $pi_main_services_box_1_list["item"]; ?></p>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                        <h3><?php echo get_theme_mod('pi_main_services_box_2_heading')?></h3>
                        <span>ESI's E-Team:</span>
                        <?php
                          $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                          $pi_main_services_box_2_lists = get_theme_mod( 'pi_main_services_box_2_list', $defaults );
                        ?>
                        <?php foreach ($pi_main_services_box_2_lists as $pi_main_services_box_2_list): ?>
                          <p><?php echo $pi_main_services_box_2_list["item"]; ?></p>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                        <h3><?php echo get_theme_mod('pi_main_services_box_3_heading')?></h3>
                        <span>ESI's E-Team:</span>
                        <?php
                          $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                          $pi_main_services_box_3_lists = get_theme_mod( 'pi_main_services_box_3_list', $defaults );
                        ?>
                        <?php foreach ($pi_main_services_box_3_lists as $pi_main_services_box_3_list): ?>
                          <p><?php echo $pi_main_services_box_3_list["item"]; ?></p>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="work-flow-3" role="tabpanel" aria-labelledby="work-flow-3-tab">
              <div class="services-desc-sec-main">
                <div class="services-desc-sec-title col-md-8">
                  <h4><?php echo get_theme_mod('pi_workflow_heading')?></h4>
                </div>
                <div class="topic-underline"></div>
                <div class="row image-row g-4">
                  <div class="col" style="background: #253745;">
                    <img src="<?php echo get_theme_mod('pi_workflow_image')?>" class="w-100" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="team-3" role="tabpanel" aria-labelledby="team-3-tab">
              <div class="services-desc-sec-main">
                <div class="services-desc-sec-title col-md-6">
                  <h4><?php echo get_theme_mod('pi_esi_heading')?></h4>
                </div>
                <div class="topic-underline"></div>
                <div class="row esi-tem-row g-4">
                  <div class="col-4 col">
                    <div class="card">
                      <div class="card-body">
                        <div class="round-sec" style="background-image:url('<?php echo get_theme_mod("pi_esi_box_1_image"); ?>');">
                        </div>
                        <div class="det-sec">
                          <h4><?php echo get_theme_mod('pi_esi_box_1_heading')?></h4>
                          <div class="title-underline-green"></div>
                          <ul>
                              <?php $defaults = [["item" => esc_html__("Kirki Site", "kirki")],];
                              $box_20_lists_esi = get_theme_mod("pi_esi_box_1_list",$defaults);
                              ?>
                              <?php foreach ($box_20_lists_esi as $box_20_list_esi): ?>
                                <li><?php echo $box_20_list_esi["item"]; ?></li>
                              <?php endforeach; ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 col">
                    <div class="card">
                      <div class="card-body">
                        <div class="round-sec" style="background-image:url('<?php echo get_theme_mod("pi_esi_box_2_image"); ?>');">
                        </div>
                        <div class="det-sec">
                          <h4><?php echo get_theme_mod('pi_esi_box_2_heading')?></h4>
                          <div class="title-underline-green"></div>
                          <ul>
                              <?php $defaults = [["item" => esc_html__("Kirki Site", "kirki")],];
                              $box_21_lists_esi = get_theme_mod("pi_esi_box_2_list",$defaults);
                              ?>
                              <?php foreach ($box_21_lists_esi as $box_21_list_esi): ?>
                                <li><?php echo $box_21_list_esi["item"]; ?></li>
                              <?php endforeach; ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 col">
                    <div class="card">
                      <div class="card-body">
                        <div class="round-sec" style="background-image:url('<?php echo get_theme_mod("pi_esi_box_3_image"); ?>');">
                        </div>
                        <div class="det-sec">
                          <h4><?php echo get_theme_mod('pi_esi_box_3_heading')?></h4>
                          <div class="title-underline-green"></div>
                          <ul>
                              <?php $defaults = [["item" => esc_html__("Kirki Site", "kirki")],];
                              $box_22_lists_esi = get_theme_mod("pi_esi_box_3_list",$defaults);
                              ?>
                              <?php foreach ($box_22_lists_esi as $box_22_list_esi): ?>
                                <li><?php echo $box_22_list_esi["item"]; ?></li>
                              <?php endforeach; ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 col">
                    <div class="card">
                      <div class="card-body">
                        <div class="round-sec" style="background-image:url('<?php echo get_theme_mod("pi_esi_box_4_image"); ?>');">
                        </div>
                        <div class="det-sec">
                          <h4><?php echo get_theme_mod('pi_esi_box_4_heading')?></h4>
                          <div class="title-underline-green"></div>
                          <ul>
                              <?php $defaults = [["item" => esc_html__("Kirki Site", "kirki")],];
                              $box_23_lists_esi = get_theme_mod("pi_esi_box_4_list",$defaults);
                              ?>
                              <?php foreach ($box_23_lists_esi as $box_23_list_esi): ?>
                                <li><?php echo $box_23_list_esi["item"]; ?></li>
                              <?php endforeach; ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
      <hr>
      <div class="container service-cont-3">
        <div class="row">
          <div class="col-md-11 service-sub-text-col">
            <h2 class="service-h2 service-support-team-h2">Post-Project <span style="color: #999999;">Support</span>
            </h2>
            <p class="service-p service-p-2"><?php echo get_theme_mod('pps_description')?></p>
          </div>
        </div>
        <div class="service-desc-sec">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="main-services-tab" data-bs-toggle="tab" data-bs-target="#main-services-4" type="button" role="tab" aria-controls="main-services-4" aria-selected="true"><h3 class="service-desc-sec-head">Main Services</h3></button>
              <div class="polygon-down">              
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#EDEDED" class="bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
              </div>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="work-flow-tab" data-bs-toggle="tab" data-bs-target="#work-flow-4" type="button" role="tab" aria-controls="work-flow-4" aria-selected="false"><h3 class="service-desc-sec-head">Work Flow</h3></button>
              <div class="polygon-down">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#EDEDED" class="bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
              </div>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="team-tab" data-bs-toggle="tab" data-bs-target="#team-4" type="button" role="tab" aria-controls="team-4" aria-selected="false"><h3 class="service-desc-sec-head">ESI Team</h3></button>
              <div class="polygon-down">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#EDEDED" class="bi bi-chevron-down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
              </div>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="main-services-4" role="tabpanel" aria-labelledby="main-services-4-tab">
              <div class="services-desc-sec-main">
                <div class="services-desc-sec-title col-md-4">
                  <h4><?php echo get_theme_mod('pps_main_services_heading')?></h4>
                </div>
                <div class="topic-underline"></div>
                <div class="row g-4">
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                        <h3><?php echo get_theme_mod('pps_main_services_box_1_heading')?></h3>
                        <?php
                          $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                          $pi_main_services_box_100_lists = get_theme_mod( 'pps_main_services_box_1_list', $defaults );
                        ?>
                        <?php foreach ($pi_main_services_box_100_lists as $pi_main_services_box_100_list): ?>
                          <p><?php echo $pi_main_services_box_100_list["item"]; ?></p>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                        <h3><?php echo get_theme_mod('pps_main_services_box_2_heading')?></h3>
                        <?php
                          $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                          $pi_main_services_box_101_lists = get_theme_mod( 'pps_main_services_box_2_list', $defaults );
                        ?>
                        <?php foreach ($pi_main_services_box_101_lists as $pi_main_services_box_101_list): ?>
                          <p><?php echo $pi_main_services_box_101_list["item"]; ?></p>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                  <div class=" col-4">
                    <div class="card">
                      <div class="card-body">
                        <h3><?php echo get_theme_mod('pps_main_services_box_3_heading')?></h3>
                        <?php
                          $defaults = [['item'   => esc_html__( 'Kirki Site', 'kirki' ),],];
                          $pi_main_services_box_102_lists = get_theme_mod( 'pps_main_services_box_3_list', $defaults );
                        ?>
                        <?php foreach ($pi_main_services_box_102_lists as $pi_main_services_box_102_list): ?>
                          <p><?php echo $pi_main_services_box_102_list["item"]; ?></p>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="work-flow-4" role="tabpanel" aria-labelledby="work-flow-4-tab">
              <div class="services-desc-sec-main">
                <div class="services-desc-sec-title col-md-8">
                  <h4><?php echo get_theme_mod('pps_workflow_heading')?></h4>
                </div>
                <div class="topic-underline"></div>
                <div class="row image-row g-4">
                  <div class="col" style="background: #253745;">
                    <img src="<?php echo get_theme_mod('pps_workflow_image')?>" class="w-100" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="team-4" role="tabpanel" aria-labelledby="team-4-tab">
              <div class="services-desc-sec-main">
                <div class="services-desc-sec-title col-md-6">
                  <h4><?php echo get_theme_mod('pps_esi_heading')?></h4>
                </div>
                <div class="topic-underline"></div>
                <div class="row esi-tem-row g-4">
                  <div class="col-4 col">
                    <div class="card">
                      <div class="card-body">                      
                        <div class="round-sec" style="background-image:url('<?php echo get_theme_mod("pps_esi_box_1_image"); ?>');"></div>
                        <div class="det-sec">
                          <h4><?php echo get_theme_mod('pps_esi_box_1_heading')?></h4>
                          <div class="title-underline-green"></div>
                          <ul>
                            <li>Project Coordinator</li>
                            <li>Support Staff</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 col">
                    <div class="card">
                      <div class="card-body">                      
                        <div class="round-sec" style="background-image:url('<?php echo get_theme_mod("pps_esi_box_2_image"); ?>');"></div>
                        <div class="det-sec">
                          <h4><?php echo get_theme_mod('pps_esi_box_2_heading')?></h4>
                          <div class="title-underline-green"></div>
                          <ul>
                            <li>Project Coordinator</li>
                            <li>Support Staff</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>

<?php
	get_footer();