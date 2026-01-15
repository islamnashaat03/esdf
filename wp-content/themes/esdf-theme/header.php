<?php
/**
 * The Header for our theme
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="overlay overlay-all"></div>
    <!-- SCROLL TO TOP  -->
    <span class="up"><i class="fa-solid fa-arrow-up"></i></span>

    <!-- START UPPER BAR  -->
    <div class="fixed-nav fixed">
      <div class="upper-bar">
        <div class="container">
          <div class="wrapper">
            <ul class="social-links">
              <?php if ( have_rows( 'social_accounts', 'option' ) ) : ?>
                <?php while ( have_rows( 'social_accounts', 'option' ) ) : the_row(); ?>
                  <li class="social-link">
                    <a href="<?php echo esc_url( get_sub_field( 'social_link' ) ); ?>" target="_blank" rel="noopener">
                      <i class="<?php echo esc_attr( get_sub_field( 'social_icon' ) ); ?>"></i>
                    </a>
                  </li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
            <div class="icons">
              <div class="search-div">
                <form class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <div class="input-wrap">
                    <input type="search" class="input-text"
                      placeholder="<?php echo esc_attr( ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE === 'ar' ) ? 'عن ماذا تبحث؟' : 'What are you looking for?' ); ?>"
                      name="s" value="<?php echo get_search_query(); ?>">
                    <button type="submit" class="btn search-btn">
                      <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                  </div>
                </form>
              </div>
              <?php if ( defined( 'ICL_LANGUAGE_CODE' ) ) : ?>
                <a class="languages" href="<?php echo esc_url( ICL_LANGUAGE_CODE === 'ar' ? '?lang=en' : '?lang=ar' ); ?>">
                  <?php echo ICL_LANGUAGE_CODE === 'ar' ? 'En' : 'Ar'; ?>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="nav-bar wow fadeInDown">
        <div class="container">
          <nav class="nav-flex">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
              <!-- LOGO -->
              <img src="<?php echo get_field('site_logo', 'option'); ?>" alt="">
            </a>
            <?php wp_nav_menu( array('theme_location' => 'main_menu', 'container' => false, 'items_wrap' => '<ul class="navbar-links">%3$s</ul>',
                    ) ); ?>
            <div class="icons">
              <a class="languages"
                href="<?php if(ICL_LANGUAGE_CODE == 'ar'){ echo '?lang=en'; } elseif(ICL_LANGUAGE_CODE == 'en'){ echo '?lang=ar'; } ?>">
                <?php
                  if(ICL_LANGUAGE_CODE == 'ar'){
                      ?>
                En
                <?php
                  } elseif (ICL_LANGUAGE_CODE == 'en'){
                      ?>
                Ar
                <?php
                  }
                  ?>
              </a>

            </div>
            <a class="toggle-btn menu-btn" type="button">
              <span class="bar bar--1"></span>
              <span class="bar bar--2"></span>
              <span class="bar bar--3"></span>
            </a>
          </nav>
        </div>
      </div>
    </div>

    <!-- END MOBILE  -->
    <div class="navbar-mobile">
      <div class="nav-flex">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
          <!-- LOGO -->
          <img src="<?php echo get_field('site_logo', 'option'); ?>" alt="">
        </a>
        <a class="btn close-btn">
          <i class="fa-solid fa-xmark"></i>
        </a>
      </div>
      <?php wp_nav_menu( array('theme_location' => 'main_menu', 'container' => false, 'items_wrap' => '<ul class="mobile-links">%3$s</ul>',
        ) ); ?>
    </div>
  <!-- END NAVBAR MOBILE  -->
