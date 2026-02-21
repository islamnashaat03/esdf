<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<main id="main-content" class="default-page">
    <section class="single-post-content">
        <div class="container single-post-container">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                <header class="post-header">
                    <h1 data-aos="fade-up"><?php the_title(); ?></h1>
                    
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="featured-image" data-aos="fade-up" data-aos-delay="100">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    <?php endif; ?>
                </header>

                <div class="post-body" data-aos="fade-up" data-aos-delay="200">
                    <?php
                    the_content();
                    ?>
                </div>
                <?php
            endwhile; // End of the loop.
            ?>
        </div>
    </section>
</main>

<?php
get_footer();
