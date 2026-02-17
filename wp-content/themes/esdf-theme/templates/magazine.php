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
                echo $title;
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
                    $magazine_title = get_sub_field('magazine_name');
                    $k = 0;
                ?>
                    <div class="magazine-card" data-aos="fade-up" data-aos-delay="<?php echo $k; ?>">   
                        <span class="magazine-icon">
                            <i class="fa-solid fa-file-pdf"></i> 
                        </span>  
                            <?php if ($magazine_title) : ?>
                                <h3><?php echo esc_html($magazine_title); ?></h3>
                            <?php endif; ?>
                            <a href="<?php echo esc_url($magazine_file); ?>" 
                               class="download-btn" 
                               target="_blank" 
                               rel="noopener">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p class="no-magazines">
                    <?php lang_in('No magazines available at the moment.', 'لا توجد مجلات متاحة في الوقت الحالي.'); ?>
                </p>
        <?php   $k+=50; endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
