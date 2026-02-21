<?php
/**
 * The template for displaying education taxonomy archives
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$current_term = get_queried_object();
?>

<main id="main-content" class="education-archive">
    <div class="container">
        <header class="section-header" data-aos="fade-up">
            <h1><?php echo esc_html($current_term->name); ?></h1>
            <?php if ($current_term->description) : ?>
                <div class="subtitle"><?php echo wp_kses_post($current_term->description); ?></div>
            <?php endif; ?>
        </header>

        <div class="education-grid">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="education-archive-item" data-aos="fade-up">
                        <div class="thumb">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('medium_large'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Placeholder">
                            <?php endif; ?>
                        </div>
                        <div class="content">
                            <h3><?php the_title(); ?></h3>
                            <a href="<?php the_permalink(); ?>" class="btn">
                                <?php lang_in('View Details', 'عرض التفاصيل'); ?> <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php lang_in('No posts found in this category.', 'لم يتم العثور على منشورات في هذه الفئة.'); ?></p>
            <?php endif; ?>
        </div>
        
        <div class="pagination-container">
            <?php the_posts_pagination(); ?>
        </div>
    </div>
</main>

<?php
get_footer();
