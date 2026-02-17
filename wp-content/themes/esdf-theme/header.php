<?php
/**
 * The Header for our theme
 *
 * @package ESDF_Theme
 */

if (!defined('ABSPATH')) {
  exit;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="overlay overlay-all"></div>
  <!-- SCROLL TO TOP  -->
  <span class="up"><i class="fa-solid fa-arrow-up"></i></span>

  <!-- START UPPER BAR  -->
  <header class="fixed-nav">
    <div class="upper-bar">
      <div class="container">
        <div class="wrapper">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
            <!-- LOGO -->
            <?php
            $logo = get_field('site_logo', 'option');
            if ($logo) : ?>
              <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
            <?php endif; ?>
          </a>
          <div class="icons">
              <ul class="social-links">
                <?php if ( have_rows('social_accounts', 'option') ) : ?>
                  <?php while ( have_rows('social_accounts', 'option') ) : the_row(); 
                    $icon =  get_sub_field('social_icon');
                    $link =  get_sub_field('social_link');
                  ?>
                    <?php if ( $icon && $link ) : ?>
                      <li class="social-link">
                        <a href="<?php echo esc_url( $link ); ?>" target="_blank" rel="noopener">
                          <span class="dashicons <?php echo esc_attr( $icon ); ?>"></span>
                        </a>
                      </li>
                    <?php endif; ?>
                  <?php endwhile; ?>
                <?php endif; ?>
              </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="nav-bar">
      <div class="container">
        <nav class="nav-flex">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
            <!-- LOGO -->
            <?php
            $logo = get_field('site_logo', 'option');
            if ($logo) : ?>
              <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
            <?php endif; ?>
          </a>
          <?php wp_nav_menu(array(
            'theme_location' => 'main_menu',
            'container' => false,
            'items_wrap' => '<ul class="navbar-links">%3$s</ul>',
          )); ?>
          <div class="icons">
            <?php 
            $current_lang = defined('ICL_LANGUAGE_CODE') ? ICL_LANGUAGE_CODE : 'en';
            $target_lang = ($current_lang === 'ar') ? 'en' : 'ar';
            $lang_text = ($current_lang === 'ar') ? 'En' : 'Ar';
            // Use query parameter as requested by user ("lang=en")
            $lang_url = add_query_arg('lang', $target_lang); 
            ?>
            <a class="languages" href="<?php echo esc_url($lang_url); ?>">
              <?php echo esc_html($lang_text); ?>
            </a>
          </div>
          <div class="search-div">
            <form class="search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
              <div class="input-wrap">
                <input type="search" class="input-text"
                  placeholder="<?php echo esc_attr((defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE === 'ar') ? 'عن ماذا تبحث؟' : 'What are you looking for?'); ?>"
                  name="s" value="<?php echo get_search_query(); ?>">
                <button type="submit" class="btn search-btn">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button>
              </div>
            </form>
            <a class="search-close-btn">
              <i class="fa-solid fa-xmark"></i>
            </a>
          </div>
          <button class="search-open-btn main-btn">
            <span><?php echo lang_in('search', 'بحث'); ?></span>
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
          <a class="toggle-btn menu-btn" type="button">
            <span class="bar bar--1"></span>
            <span class="bar bar--2"></span>
            <span class="bar bar--3"></span>
          </a>
        </nav>
      </div>
    </div>
  </header> 

  <!-- END MOBILE  -->
  <div class="navbar-mobile">
    <div class="nav-flex">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
        <!-- LOGO -->
        <?php
        $logo = get_field('site_logo', 'option');
        if ($logo) : ?>
          <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
        <?php endif; ?>
      </a>
      <a class="btn navbar-close-btn">
        <i class="fa-solid fa-xmark"></i>
      </a>
    </div>
    <?php wp_nav_menu(array(
      'theme_location' => 'main_menu',
      'container' => false,
      'items_wrap' => '<ul class="mobile-links">%3$s</ul>',
    )); ?>
  </div>
  <!-- END NAVBAR MOBILE  -->