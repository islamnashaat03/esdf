<?php
/**
 * Template Name: Education
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main-content" class="education-portal">
    <div class="container">
        <header class="section-header" data-aos="fade-up">
            <h1><?php lang_in('Education Resources', 'الموارد التعليمية'); ?></h1>
            <p class="subtitle"><?php lang_in('Advance your knowledge with our specialized medical resources, expert lectures, and educational videos.', 'عزز معرفتك بمواردنا الطبية المتخصصة، ومحاضرات الخبراء، ومقاطع الفيديو التعليمية.'); ?></p>
        </header>

        <div class="wrapper">
            <?php
            $terms = get_terms( array(
                'taxonomy' => 'education-category',
                'hide_empty' => false,
            ) );

            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
                foreach ( $terms as $index => $term ) :
                    $term_image = get_field('term_image', $term);
                    $term_link = get_term_link($term);
                    $delay = ($index + 1) * 100;
                    ?>
                    <div class="education-card" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                        <div class="image-container">
                            <?php if ($term_image) : ?>
                                <img src="<?php echo esc_url($term_image['url']); ?>" alt="<?php echo esc_attr($term->name); ?>">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Placeholder">
                            <?php endif; ?>
                        </div>
                        <div class="card-content">
                            <div class="head">
                                <div class="icon-box">
                                    <i class="fa-solid fa-book-medical"></i>
                                </div>
                                <h2><?php echo esc_html($term->name); ?></h2>
                            </div>
                            <div class="description">
                                <?php echo wp_kses_post($term->description); ?>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo esc_url($term_link); ?>" class="btn-link">
                                    <?php lang_in('Browse', 'تصفح'); ?> <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
            else :
                ?>
                <p><?php lang_in('No categories found.', 'لم يتم العثور على فئات.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
