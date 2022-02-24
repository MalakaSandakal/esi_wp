<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Energy_Security
 */

?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

	<!-- topbar -->
    <section class="top-bar">
      <div class="container">
        <div class="top-list">
          <div class="top-contact">
            <ul class="list-group list-group-horizontal top-bar-ul">            
              <li class="top-bar-li">
                <i class="fas fa-phone-alt top-bar-icon"></i><?php echo get_theme_mod('telephone_number')?>
              </li>
              <li class="top-bar-li">
                <i class="fas fa-envelope top-bar-icon"></i><?php echo get_theme_mod('contact_mail')?>
              </li>
              <li class="top-bar-li">
                <i class="far fa-clock top-bar-icon"></i><?php echo get_theme_mod('working_time')?>
              </li>
            </ul>
          </div>
          <div class="top-social">
            <ul class="list-group list-group-horizontal top-bar-ul">
              <?php
                $defaults = [
                  [
                    'social_link'   => esc_html__( 'Kirki Site', 'kirki' ),
                    'fa_icon' => 'fas fa-envelope',
                  ],
                ];
                $social_link_settings = get_theme_mod( 'top_bar_social_links', $defaults );
              ?>
              <?php foreach($social_link_settings as $social_link_setting):?>
                <li class="top-bar-li-social">
                  <a href="<?php echo $social_link_setting['social_link'] ?>"><i class="<?php echo $social_link_setting['fa_icon'] ?> top-bar-social"></i></a>                
                </li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- navbar -->
    <section class="nav-bar-sec">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">
              <img class="logo-img" src="<?php echo get_theme_mod('main_logo_url')?>"/>
            </a>
            <?php wp_nav_menu(array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
              'items_wrap' => '<ul id="" class="navbar-nav ms-auto mb-2 mb-lg-0">
                                  %3$s
                               </ul>'
            ))?>
          </div>
        </div>
      </nav>
    </section>

	
