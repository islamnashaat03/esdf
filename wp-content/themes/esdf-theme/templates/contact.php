<?php
/**
 * Template Name: Contact
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main" class="site-main">
    <section class="contact-section">
        <div class="container">
            <div class="wrapper">
                <div class="contact-info">
                    <h2 data-aos="fade-right" data-aos-delay="50"><?php lang_in('Get in Touch', 'تواصل معنا'); ?></h2>
                    <p class="description" data-aos="fade-right" data-aos-delay="100">
                        <?php lang_in("Have questions about ESDF membership, conferences, or educational programs? We're here to help. Reach out to us and we'll respond as soon as possible.", "هل لديك أسئلة حول عضوية ESDF أو المؤتمرات أو البرامج التعليمية؟ نحن هنا للمساعدة. تواصل معنا وسنرد عليك في أقرب وقت ممكن."); ?>
                    </p>
                    
                    <ul class="contact-details">
                        <?php if (get_field('address', 'option')) : ?>
                            <li data-aos="fade-up" data-aos-delay="150">
                                <div class="icon-box">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="info">
                                    <h4><?php lang_in('Address', 'العنوان'); ?></h4>
                                    <p><?php echo esc_html(get_field('address', 'option')); ?></p>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if (get_field('email', 'option')) : ?>
                            <li data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="info">
                                    <h4><?php lang_in('Email', 'البريد الإلكتروني'); ?></h4>
                                    <a href="mailto:<?php echo esc_attr(get_field('email', 'option')); ?>"><?php echo esc_html(get_field('email', 'option')); ?></a>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if (get_field('phone', 'option')) : ?>
                            <li data-aos="fade-up" data-aos-delay="250">
                                <div class="icon-box">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="info">
                                    <h4><?php lang_in('Phone', 'الهاتف'); ?></h4>
                                    <a href="tel:<?php echo esc_attr(get_field('phone', 'option')); ?>"><?php echo esc_html(get_field('phone', 'option')); ?></a>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="contact-form-container" data-aos="fade-left" data-aos-delay="300">
                    <?php echo do_shortcode('[wpforms id="110"]'); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
