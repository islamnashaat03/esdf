<?php get_header(); ?>

<main id="main-content">
    <section class="hero-section">
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
                <h1><?php echo get_field('hero_title', 'option'); ?></h1>
                <p><?php echo get_field('hero_text', 'option'); ?></p>
                <a href="#" class="main-btn"><?php echo get_field('hero_button_text', 'option'); ?></a>
            </div>
        </div>
    </section>   
</main>

<?php get_footer(); ?>
