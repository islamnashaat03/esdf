<?php
/**
 * Template Name: About
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main" class="site-main">
	<div class="custom-page about-page">
		<!-- START ABOUT SECTION  -->
		<section class="about">
			<div class="container">
				<div class="wrapper">
					<div class="content">
						<h2><?php echo get_field('about_title', 'option'); ?></h2>
                    <div class="text"><?php echo get_field('about_text', 'option'); ?></div>
                </div>
                <div class="image">
                    <img src="<?php echo esc_url(get_field('about_img', 'option')); ?>" alt="About Image">
                </div>
            </div>
        </div>

		</section>
		<!-- END ABOUT SECTION  -->
		 <section class="objective">
			<div class="container">
				<h2>
					<?php echo get_field('objective_title', 'option'); ?>
				</h2>
				<div class="text">
					<?php echo get_field('objective_text', 'option'); ?>
				</div>
			</div>
		 </section>
	</div>
</main>

<?php get_footer(); ?>
