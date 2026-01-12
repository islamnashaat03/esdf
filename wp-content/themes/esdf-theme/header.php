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

<header id="masthead" class="site-header">
	<!-- Top Bar -->
	<div class="top-bar">
		<div class="container">
			<div class="top-bar-left">
				<?php if($contact_phone): ?>
					<span class="contact-item"><i class="fa fa-phone"></i> <?php echo esc_html($contact_phone); ?></span>
				<?php endif; ?>
				<?php if($contact_email): ?>
					<span class="contact-item"><i class="fa fa-envelope"></i> <a href="mailto:<?php echo esc_attr($contact_email); ?>"><?php echo esc_html($contact_email); ?></a></span>
				<?php endif; ?>
			</div>
			<div class="top-bar-right">
				<?php if( $social_links ): ?>
					<div class="social-icons">
						<?php foreach( $social_links as $link ): ?>
							<a href="<?php echo esc_url($link['url']); ?>" target="_blank" rel="noopener noreferrer">
								<i class="<?php echo esc_attr($link['icon_class']); ?>"></i>
							</a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- Main Header -->
	<div class="main-header">
		<div class="container header-container">
			<div class="site-branding">
				<?php if($logo_url): ?>
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>" class="custom-logo">
					</a>
				<?php else: ?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php endif; ?>
			</div>
			
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<i class="fa fa-bars"></i>
				</button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'main_menu',
					'menu_id'        => 'primary-menu',
					'container'      => false,
					'menu_class'     => 'nav-menu',
				) );
				?>
			</nav>
		</div>
	</div>
</header>
