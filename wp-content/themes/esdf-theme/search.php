<?php
/**
 * The template for displaying search results pages
 *
 * @package ESDF_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

        <section class="search-results-section">
            <div class="container">
                <?php if ( have_posts() ) : ?>

                    <header class="page-header">
                        <h1 class="page-title">
                            <?php
                            /* translators: %s: search query. */
                            printf( esc_html( lang_in('Search Results for: %s', 'نتائج البحث عن: %s') ), '<span>' . get_search_query() . '</span>' );
                            ?>
                        </h1>
                    </header><!-- .page-header -->

                    <div class="search-list">
                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();
                            ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('search-item'); ?>>
                                <header class="entry-header">
                                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                                </header><!-- .entry-header --> 

                                <div class="entry-summary">
                                    <?php the_excerpt(); ?>
                                </div><!-- .entry-summary -->
                                
                                <div class="read-more">
                                    <a href="<?php the_permalink(); ?>" class="more-link">
                                        <?php echo lang_in('Read More', 'اقرأ المزيد'); ?> <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </article><!-- #post-<?php the_ID(); ?> -->
                            <?php
                        endwhile;

                        the_posts_navigation();
                        ?>
                    </div>

                <?php else : ?>

                    <section class="no-results not-found">
                        <header class="page-header">
                            <h1 class="page-title"><?php echo lang_in('Nothing Found', 'لم يتم العثور على شيء'); ?></h1>
                        </header><!-- .page-header -->

                        <div class="page-content">
                            <p><?php echo lang_in('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'عذراً، لم يطابق بحثك أي نتائج. يرجى المحاولة مرة أخرى بكلمات مفتاحية مختلفة.'); ?></p>
                            <?php get_search_form(); ?>
                        </div><!-- .page-content -->
                    </section><!-- .no-results -->

                <?php endif; ?>
            </div>
        </section>

	</main><!-- #primary -->

<?php
get_footer();
