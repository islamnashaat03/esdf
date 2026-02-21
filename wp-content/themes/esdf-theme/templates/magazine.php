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
            <?php 
            $magazines = get_field('magazines', 'option');
            if ($magazines) :
                $magazines = array_reverse($magazines);
                foreach ($magazines as $index => $magazine) :
                    $magazine_file = $magazine['magazine_file'];
                    $magazine_title = $magazine['magazine_name'];
                    $k = ($index + 1) * 50;
            ?>
                    <div class="magazine-card" data-aos="fade-up" data-aos-delay="<?php echo $k; ?>">   
                        <div class="magazine-content">
                            <span class="magazine-icon">
                                <i class="fa-solid fa-file-pdf"></i> 
                                </span>  
                            <?php if ($magazine_title) : ?>
                                <h3><?php echo esc_html($magazine_title); ?></h3>
                            <?php endif; ?>
                        </div>
                        <a href="<?php echo esc_url($magazine_file); ?>" 
                            class="download-btn" 
                            target="_blank" 
                            rel="noopener">
                            <i class="fa-regular fa-eye"></i>
                        </a>
                        <a href="<?php echo esc_url($magazine_file); ?>" 
                            class="link-overlay" 
                            target="_blank" 
                            rel="noopener">
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="no-magazines">
                    <?php lang_in('No magazines available at the moment.', 'لا توجد مجلات متاحة في الوقت الحالي.'); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
