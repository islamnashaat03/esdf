<?php
/**
 * Template Name: Magazine
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
exit;
}

get_header();
?>

<section class="magazine-section">
    <div class="container">
        <div class="section-header">
            <h2 data-aos="fade-up" data-aos-delay="50">
                <?php 
                $title = get_field('magazine_section_title', 'option');
                echo $title ? esc_html($title) : lang_in('Our Magazines', 'مجلاتنا'); 
                ?>
            </h2>
            <div class="text" data-aos="fade-up" data-aos-delay="100">
                <?php 
                $description = get_field('magazine_section_description', 'option');
                if ($description) {
                    echo wp_kses_post($description);
                }
                ?>
            </div>
        </div>
        
        <div class="wrapper">
            <?php if (have_rows('magazines', 'option')) : ?>
                <?php while (have_rows('magazines', 'option')) : the_row(); 
                    $magazine_file = get_sub_field('magazine_file');
                    $magazine_title = get_sub_field('magazine_title');
                    $magazine_cover = get_sub_field('magazine_cover');
                    $magazine_date = get_sub_field('magazine_date');
                    $magazine_description = get_sub_field('magazine_description');
                ?>
                    <div class="magazine-card" data-aos="fade-up" data-aos-delay="50">
                        <?php if ($magazine_cover) : ?>
                            <div class="magazine-cover">
                                <img src="<?php echo esc_url($magazine_cover['url']); ?>" 
                                     alt="<?php echo esc_attr($magazine_cover['alt'] ?: $magazine_title); ?>">
                                <div class="overlay">
                                    <a href="<?php echo esc_url($magazine_file); ?>" 
                                       class="download-btn" 
                                       target="_blank" 
                                       rel="noopener">
                                        <i class="fa-solid fa-download"></i>
                                        <span><?php lang_in('Download', 'تحميل'); ?></span>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <div class="magazine-content">
                            <?php if ($magazine_title) : ?>
                                <h3><?php echo esc_html($magazine_title); ?></h3>
                            <?php endif; ?>
                            
                            <?php if ($magazine_date) : ?>
                                <div class="magazine-date">
                                    <i class="fa-regular fa-calendar"></i>
                                    <span><?php echo esc_html($magazine_date); ?></span>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($magazine_description) : ?>
                                <div class="magazine-description">
                                    <?php echo wp_kses_post($magazine_description); ?>
                                </div>
                            <?php endif; ?>
                            
                            <a href="<?php echo esc_url($magazine_file); ?>" 
                               class="main-btn" 
                               target="_blank" 
                               rel="noopener">
                                <i class="fa-solid fa-file-pdf"></i>
                                <?php lang_in('View PDF', 'عرض PDF'); ?>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p class="no-magazines">
                    <?php lang_in('No magazines available at the moment.', 'لا توجد مجلات متاحة في الوقت الحالي.'); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
