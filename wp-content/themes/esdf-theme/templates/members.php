<?php
/**
 * Template Name: Members
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

    <!-- START BOARD OF MEMBERS SECTION -->
	<main id="main" class="site-main">
			<div class="custom-page about-page">
				<!-- START BOARD OF MEMBERS SECTION -->
					<section class="board-members">
						<div class="container">
							<div class="section-header" data-aos="fade-up">
								<h2><?php echo get_field('board_title') ?: (get_field('board_title', 'option') ?: 'Board of Members'); ?></h2>
								<div class="text">
									<?php echo get_field('board_desc') ?: (get_field('board_desc', 'option') ?: 'Board of Members'); ?></div>
							</div>
							<div class="wrapper">
								<?php 
										$t = 0; // Initialize counter outside the loop
										if( have_rows('about_page_group', 'option') ):
											while( have_rows('about_page_group', 'option') ): the_row();
												// Inside the group, we check for the repeater WITHOUT 'option'
												if( have_rows('board_members') ):
														while( have_rows('board_members') ): the_row();
																$image = get_sub_field('member_image');
																$name = get_sub_field('member_name');
																$role = get_sub_field('member_role');
																$specialty = get_sub_field('member_specialty');
																?>
								<div class="member-card" data-aos="fade-up" data-aos-delay="<?php echo $t; ?>">
									<div class="member-img">
										<?php if($image): 
																// Handle different ACF image return formats
																if(is_array($image)) {
																		// Image Array format
																		$image_url = esc_url($image['url']);
																		$image_alt = esc_attr($image['alt']);
																} elseif(is_numeric($image)) {
																		// Image ID format
																		$image_url = esc_url(wp_get_attachment_image_url($image, 'full'));
																		$image_alt = esc_attr(get_post_meta($image, '_wp_attachment_image_alt', true));
																} else {
																		// Image URL format
																		$image_url = esc_url($image);
																		$image_alt = '';
																}
														?>
										<img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
										<?php else: ?>
										<i class="fa-solid fa-user"></i>
										<?php endif; ?>
									</div>
									<h3><?php echo esc_html($name); ?></h3>
									<span class="role"><?php echo esc_html($role); ?></span>
									<span class="specialty"><?php echo esc_html($specialty); ?></span>
								</div>
								<?php 
														$t += 50; // Increment after each member
														endwhile; 
												endif; 
											endwhile; // Close the group loop
										endif; ?>
							</div>
						</div>
					</section>
				<!-- END BOARD OF MEMBERS SECTION -->
			</div>
	</main>
<?php get_footer(); ?>
