    <section class="news-section">
        <div class="container">
            <div class="section-header">
                <h2 data-aos="fade-up" data-aos-delay="50"><?php echo get_field('news_section_title', 'option'); ?></h2>
                <div class="text" data-aos="fade-up" data-aos-delay="100">
                    <?php echo get_field('news_section_text', 'option'); ?>
                </div>
            </div>
            <div class="wrapper">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $news_query = new WP_Query($args);

                if ($news_query->have_posts()) :
                    while ($news_query->have_posts()) : $news_query->the_post();
                        $categories = get_the_category();
                        $category_name = !empty($categories) ? $categories[0]->name : '';
                        ?>
                        <div class="news-card" data-aos="fade-up" data-aos-delay="50">
                            <div class="image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium_large'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <?php if ($category_name) : ?>
                                        <span class="category-label"><?php echo esc_html($category_name); ?></span>
                                    <?php else : ?>
                                        <span></span> <!-- Spacer if no category -->
                                    <?php endif; ?>
                                    <span class="date"><?php echo get_the_date('F j, Y'); ?></span>
                                </div>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <p class="no-news"><?php lang_in('No news available at the moment.', 'لا توجد أخبار متاحة في الوقت الحالي.'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>