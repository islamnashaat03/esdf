<?php
/**
 * The template for displaying the footer
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$logo_url = get_field('logo', 'option');
$about_text = get_field('footer_about_text', 'option');
$copyright_text = get_field('footer_copyright', 'option');
$social_links = get_field('social_links', 'option');
?>

<footer id="colophon" class="site-footer">
	<div class="footer-widgets">
		<div class="container">
			<div class="footer-row">
				<!-- Col 1: Logo & About -->
				<div class="footer-col col-about">
					<?php if($logo_url): ?>
						<div class="footer-logo">
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>">
							</a>
						</div>
					<?php endif; ?>
					<?php if($about_text): ?>
						<p class="about-text"><?php echo nl2br(esc_html($about_text)); ?></p>
					<?php endif; ?>
					
					<?php if( $social_links ): ?>
						<div class="footer-social">
							<?php foreach( $social_links as $link ): ?>
								<a href="<?php echo esc_url($link['url']); ?>" target="_blank" rel="noopener noreferrer">
									<i class="<?php echo esc_attr($link['icon_class']); ?>"></i>
								</a>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>

				<!-- Col 2: Useful Links (Menu 1) -->
				<div class="footer-col col-links">
					<h3><?php echo lang_in('Useful Links', 'روابط مفيدة'); ?></h3>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu-1',
						'menu_class'     => 'footer-menu',
						'container'      => false,
					) );
					?>
				</div>

				<!-- Col 3: Contact / More Links (Menu 2) -->
				<div class="footer-col col-contact">
					<h3><?php echo lang_in('Important Links', 'روابط هامة'); ?></h3>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu-2',
						'menu_class'     => 'footer-menu',
						'container'      => false,
					) );
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="site-info">
		<div class="container">
			<div class="copyright">
				<?php 
				if($copyright_text) {
					echo esc_html($copyright_text);
				} else {
					echo '&copy; ' . date('Y') . ' ' . esc_html(get_bloginfo('name')) . '. ' . lang_in('All Rights Reserved.', 'جميع الحقوق محفوظة.');
				}
				?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
