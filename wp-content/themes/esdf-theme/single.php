<?php
/**
 * The template for displaying all single posts
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main" class="site-main">
    <div class="single-post-content">
        <div class="container single-post-container">
            <?php
            while ( have_posts() ) :
                the_post();
                $categories = get_the_category();
                $category_name = !empty($categories) ? $categories[0]->name : '';
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    <header class="post-header">
                        <div class="post-meta" data-aos="fade-up">
                            <?php if ($category_name) : ?>
                                <span class="category"><?php echo esc_html($category_name); ?></span>
                            <?php endif; ?>
                            <span class="date"><?php echo get_the_date('F j, Y'); ?></span>
                        </div>

                        <h1 class="entry-title" data-aos="fade-up" data-aos-delay="50"><?php the_title(); ?></h1>

                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="featured-image" data-aos="fade-up" data-aos-delay="100">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>
                    </header>

                    <div class="post-body" data-aos="fade-up" data-aos-delay="150">
                        <?php
                        the_content();

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'esdf-theme' ),
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </div>

                    <?php if ( get_edit_post_link() ) : ?>
                        <footer class="entry-footer">
                            <?php
                            edit_post_link(
                                sprintf(
                                    wp_kses(
                                        /* translators: %s: Name of current post. Only visible to screen readers */
                                        __( 'Edit <span class="screen-reader-text">%s</span>', 'esdf-theme' ),
                                        array(
                                            'span' => array(
                                                'class' => array(),
                                            ),
                                        )
                                    ),
                                    wp_kses_post( get_the_title() )
                                ),
                                '<span class="edit-link">',
                                '</span>'
                            );
                            ?>
                        </footer>
                    <?php endif; ?>

                </article>

                <div class="post-navigation" data-aos="fade-up" data-aos-delay="200">
                    <div class="nav-previous">
                        <?php previous_post_link( '%link', '<i class="fa-solid fa-arrow-left"></i> %title' ); ?>
                    </div>
                    <div class="nav-next">
                        <?php next_post_link( '%link', '%title <i class="fa-solid fa-arrow-right"></i>' ); ?>
                    </div>
                </div>

            <?php
            endwhile; // End of the loop.
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
