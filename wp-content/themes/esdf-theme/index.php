<?php get_header(); ?>

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
                <h2 data-aos="fade-up" data-aos-delay="100"><?php echo get_field('hero_title', 'option'); ?></h2>
                <h1 data-aos="fade-up" data-aos-delay="200"><?php echo get_field('hero_text', 'option'); ?></h1>
                <?php if (get_field('hero_btn_link', 'option')) : ?>
                    <a data-aos="fade-up" data-aos-delay="300" href="<?php echo esc_url(get_field('hero_btn_link', 'option')); ?>" class="main-btn">
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
                    <h2 data-aos="fade-up" data-aos-delay="100"><?php echo get_field('about_title', 'option'); ?></h2>
                    <div class="text" data-aos="fade-up" data-aos-delay="200"><?php echo get_field('about_text', 'option'); ?></div>
                    <ul class="numbers">
                        <li data-aos="fade-up" data-aos-delay="100">
                            <div class="number">15+</div>
                            <div class="text"><?php lang_in('Years of Experience', 'سنوات من الخبرة'); ?></div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <div class="number">500+</div>
                            <div class="text" ><?php lang_in('Active Members', 'الاعضاء النشطين'); ?></div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300">
                            <div class="number">16+</div>
                            <div class="text" ><?php lang_in('Annual Conferences', 'المؤتمرات السنوية'); ?></div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="400">
                            <div class="number">3M+</div>
                            <div class="text" ><?php lang_in('Website Visitors', 'زوار الموقع'); ?></div>
                        </li>
                    </ul>
                </div>
                <div data-aos="fade-up" data-aos-delay="500" class="image">
                    <img src="<?php echo esc_url(get_field('about_img', 'option')); ?>" alt="About Image">
                </div>
            </div>
        </div>

    </section>
    <!-- END ABOUT SECTION  -->

<?php get_footer(); ?>
