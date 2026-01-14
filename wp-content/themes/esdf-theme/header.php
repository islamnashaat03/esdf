<?php
/**
 * The Header for our theme
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

$logo_url = get_field('logo', 'option');
$contact_phone = get_field('contact_phone', 'option');
$contact_email = get_field('contact_email', 'option');
$social_links = get_field('social_links', 'option');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
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
            <?php if(get_field('google-plus', 'option')){ ?>
            <li class="google">
              <a href="<?php echo esc_url(get_field('google-plus', 'option')); ?>">
                <i class="fa-brands fa-google-plus-g"></i>
              </a>
            </li>
            <?php } ?>
            <?php if(get_field('whatsapp', 'option')){ ?>
            <li class="whatsapp">
              <a
                href="https://api.whatsapp.com/send?phone=<?php echo esc_attr(get_field('whatsapp', 'option')); ?>&text=Send20%a20%quote ">
                <i class="fa-brands fa-whatsapp"></i>
              </a>
            </li>
            <?php } ?>
            <?php if(get_field('instagram', 'option')){ ?>
            <li class="instagram">
              <a href="<?php echo esc_url(get_field('instagram', 'option')); ?>">
                <i class="fa-brands fa-instagram"></i>
              </a>
            </li>
            <?php } ?>
            <?php if(get_field('twitter', 'option')){ ?>
            <li class="twitter">
              <a href="<?php echo esc_url(get_field('twitter', 'option')); ?>">
                <i class="fa-brands fa-twitter"></i>
              </a>
            </li>
            <?php } ?>
            <?php if(get_field('telegram', 'option')){ ?>
            <li class="telegram">
              <a href="<?php echo esc_url(get_field('telegram', 'option')); ?>">
                <i class="fa-brands fa-telegram"></i>
              </a>
            </li>
            <?php } ?>
            <?php if(get_field('linkedin', 'option')){ ?>
            <li class="linkedin">
              <a href="<?php echo esc_url(get_field('linkedin', 'option')); ?>">
                <i class="fa-brands fa-linkedin-in"></i>
              </a>
            </li>
            <?php } ?>
            <?php if(get_field('facebook', 'option')){ ?>
            <li class="facebook">
              <a href="<?php echo esc_url(get_field('facebook', 'option')); ?>">
                <i class="fa-brands fa-square-facebook"></i>
              </a>
            </li>
            <?php } ?>
            <?php if(get_field('dribble', 'option')){ ?>
            <li class="dribble">
              <a href="<?php echo esc_url(get_field('dribble', 'option')); ?>">
                <i class="fa-brands fa-dribbble"></i>
              </a>
            </li>
            <?php } ?>
            <?php if(get_field('tiktok', 'option')){ ?>
            <li class="tiktok">
              <a href="<?php echo esc_url(get_field('tiktok', 'option')); ?>">
                <i class="fa-brands fa-tiktok"></i>
              </a>
            </li>
            <?php } ?>
            <?php if(get_field('youtube', 'option')){ ?>
            <li class="youtube">
              <a href="<?php echo esc_url(get_field('youtube', 'option')); ?>">
                <i class="fa-brands fa-youtube"></i>
              </a>
            </li>
            <?php } ?>
            <?php if(get_field('snapchat', 'option')){ ?>
            <li class="facebook">
              <a href="<?php echo esc_url(get_field('snapchat', 'option')); ?>">
                <i class="fa-brands fa-snapchat"></i>
              </a>
            </li>
            <?php } ?>
          </ul>
          <div class="icons">
            <div class="search-div">
              <form class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="input-wrap">
                  <input type="search" class="input-text"
                    placeholder="<?php if(ICL_LANGUAGE_CODE == 'ar'){ ?>عن ماذا تبحث؟<?php } elseif (ICL_LANGUAGE_CODE == 'en'){  ?> What are you looking for? <?php } ?>"
                    name="s">
                  <button type="submit" class="btn search-btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </div>
              </form>
            </div>
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
        </div>
      </div>
    </div>
    <div class="nav-bar wow fadeInDown">
      <div class="container">
        <nav class="nav-flex">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
            <!-- LOGO -->
            <img src="<?php echo get_field('logo', 'option'); ?>" alt="">
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
        <img src="<?php echo get_field('logo', 'option'); ?>" alt="">
      </a>
      <a class="btn close-btn">
        <i class="fa-solid fa-xmark"></i>
      </a>
    </div>
    <?php wp_nav_menu( array('theme_location' => 'main_menu', 'container' => false, 'items_wrap' => '<ul class="mobile-links">%3$s</ul>',
      ) ); ?>
  </div>
  <!-- END NAVBAR MOBILE  -->
