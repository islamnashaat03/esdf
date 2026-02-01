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
                <h2><?php echo get_field('hero_title', 'option'); ?></h2>
                <h1><?php echo get_field('hero_text', 'option'); ?></h1>
                <?php if (get_field('hero_btn_link', 'option')) : ?>
                    <a href="<?php echo esc_url(get_field('hero_btn_link', 'option')); ?>" class="main-btn">
                        <?php lang_in('Join Us', 'انضم الينا'); ?>
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
                    <h2><?php echo get_field('about_title', 'option'); ?></h2>
                    <div><?php echo get_field('about_text', 'option'); ?></div>
                </div>
                <div class="image">
                    <img src="<?php echo esc_url(get_field('about_img', 'option')); ?>" alt="About Image">
                </div>
            </div>
        </div>

    </section>
    <!-- END ABOUT SECTION  -->

<?php get_footer(); ?>
