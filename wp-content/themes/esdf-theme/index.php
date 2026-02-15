<?php
/**
 * Template Name: home page
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="main-content">
    <!-- START HERO SECTION  -->
    <div class="hero-section">
        <?php if (get_field('hero_select', 'option') == 'video' && get_field('hero_vedio', 'option')) : ?>
            <div class="background-video hero-background image-wrap">
                <video autoplay muted loop playsinline>
                    <source src="<?php echo esc_url(get_field('hero_vedio', 'option')); ?>" type="video/mp4">
                </video>
            </div>
        <?php elseif (get_field('hero_select', 'option') == 'image' && get_field('hero_img', 'option')) : ?>
            <div class="background-image hero-background image-wrap">
                <img src="<?php echo esc_url(get_field('hero_img', 'option')); ?>" alt="Hero Image">
            </div>
        <?php endif; ?>
        <div class="hero-content">
            <div class="container">
                <h2 data-aos="fade-up" data-aos-delay="50"><?php echo get_field('hero_title', 'option'); ?></h2>
                <h1 data-aos="fade-up" data-aos-delay="100"><?php echo get_field('hero_text', 'option'); ?></h1>
                <?php if (get_field('hero_btn_link', 'option')) : ?>
                    <a data-aos="fade-up"  href="<?php echo esc_url(get_field('hero_btn_link', 'option')); ?>" class="main-btn">
                        <?php lang_in('Take care of your feet', ' اعتن بقدمك'); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- END HERO SECTION  -->
    <!-- START ABOUT SECTION  -->
    <section class="about">
        <div class="container">
            <div class="wrapper">
                <div class="content">
                    <h2 data-aos="fade-up" data-aos-delay="50"><?php echo get_field('about_title', 'option'); ?></h2>
                    <div class="text" data-aos="fade-up" data-aos-delay="100"><?php echo get_field('about_text', 'option'); ?></div>
                    <ul class="numbers">
                        <li data-aos="fade-up" data-aos-delay="50">
                            <div class="number">15+</div>
                            <div class="text"><?php lang_in('Years of Experience', 'سنوات من الخبرة'); ?></div>
                        </li>       
                        <li data-aos="fade-up" data-aos-delay="100">
                            <div class="number">500+</div>
                            <div class="text" ><?php lang_in('Active Members', 'الاعضاء النشطين'); ?></div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="150">
                            <div class="number">16+</div>
                            <div class="text" ><?php lang_in('Annual Conferences', 'المؤتمرات السنوية'); ?></div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <div class="number">3M+</div>
                            <div class="text" ><?php lang_in('Website Visitors', 'زوار الموقع'); ?></div>
                        </li>
                    </ul>
                </div>
                <div data-aos="fade-up" data-aos-delay="250" class="image">
                    <img src="<?php echo esc_url(get_field('about_img', 'option')); ?>" alt="About Image">
                </div>
            </div>
        </div>

    </section>
    <!-- END ABOUT SECTION  -->
             <!-- START KEY AREAS SECTION  -->
    <section class="key-areas">
        <div class="container">
            <div class="section-header">
                <h2><?php echo get_field('key_areas_title', 'option'); ?></h2>
                <div class="text"><?php echo get_field('key_areas_text', 'option'); ?></div>
            </div>
            <div class="wrapper">
                <?php 
                if (have_rows('key_areas_list', 'option')):
                    while (have_rows('key_areas_list', 'option')) : the_row();
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $desc = get_sub_field('description');
                        $link = get_sub_field('link');
                        ?>
                        <div class="key-area-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon-box">
                                <?php if ($icon): ?>
                                    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                                <?php else: ?>
                                    <i class="fa-solid fa-star"></i> <!-- Fallback icon -->
                                <?php endif; ?>
                            </div>
                            <h3><?php echo esc_html($title); ?></h3>
                            <p><?php echo esc_html($desc); ?></p>
                            <a href="<?php echo esc_url($link); ?>" class="learn-more">
                                <?php lang_in('Learn More', 'اقرأ المزيد'); ?> <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    <?php endwhile;
                else: 
                    // Fallback content for visualization if no fields are set
                    $fallback_cards = [
                        ['title' => 'Take Care of Your Feet ', 'desc' => 'Conducting cutting-edge research and publishing findings in peer-reviewed journals.', 'icon' => 'fa-microscope'],
                        ['title' => 'Events', 'desc' => 'Annual national conferences bringing together healthcare professionals.', 'icon' => 'fa-chalkboard-user'],
                        ['title' => 'Educational Programs', 'desc' => 'Comprehensive training workshops and educational materials.', 'icon' => 'fa-graduation-cap'],
                        ['title' => 'Magazine', 'desc' => 'Join our community of dedicated healthcare professionals.', 'icon' => 'fa-users']
                    ];
                    foreach ($fallback_cards as $card): ?>
                        <div class="key-area-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon-box">
                                <i class="fa-solid <?php echo $card['icon']; ?>"></i>
                            </div>
                            <h3><?php echo esc_html($card['title']); ?></h3>
                            <p><?php echo esc_html($card['desc']); ?></p>
                            <a href="#" class="learn-more">
                                <?php lang_in('Learn More', 'اقرأ المزيد'); ?> <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    <?php endforeach;
                endif; 
                ?>
            </div>
        </div>

    </section>
    <!-- END KEY AREAS SECTION  --> 

    <!-- START NEWS SECTION -->
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
                    'posts_per_page' => 3,
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
            <div  data-aos="fade-up" data-aos-delay="10">
                <a href="<?php the_permalink(125); ?>" class="main-btn">
                    <?php lang_in('View All News', 'عرض جميع الأخبار'); ?> <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- END NEWS SECTION --> 
    <!-- START CONTACT SECTION  -->
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
    <!-- START CONTACT SECTION  -->
</main>
<?php get_footer(); ?>
