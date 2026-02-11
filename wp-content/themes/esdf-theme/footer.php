<?php
/**
 * The template for displaying the footer
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<footer class="footer">
	<div class="container">
		<div class="wrapper">
			<div class="logo">
				 <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
            <!-- LOGO -->
            <?php
            $logo = get_field('site_logo', 'option');
            if ($logo) : ?>
              <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
            <?php endif; ?>
          </a>
					<div class="text">
						<?php echo get_field('footer_description', 'option'); ?>
					</div>
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
			<div class="links">
				<h3><?php echo lang_in('Useful Links', 'روابط مفيدة'); ?></h3>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer-menu-1',
					'menu_class'     => 'footer-menu',
					'container'      => false,
				) );
				?>
			</div>
			<div class="links">
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
</footer>

<?php wp_footer(); ?>
</body>
</html>
