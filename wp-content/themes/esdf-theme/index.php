<?php get_header(); ?>

<main id="main-content">
    <section class="hero-section">
        <?php if (get_field('hero_select', 'option') == 'video' && get_field('hero_vedio', 'option')) : ?>
            <div class="background-video hero-background">
                <video autoplay muted loop playsinline>
                    <source src="<?php echo esc_url(get_field('hero_vedio', 'option')); ?>" type="video/mp4">
                </video>
            </div>
        <?php elseif (get_field('hero_select', 'option') == 'image' && get_field('hero_img', 'option')) : ?>
            <div class="background-image hero-background">
                <img src="<?php echo esc_url(get_field('hero_img', 'option')); ?>" alt="Hero Image">
            </div>
        <?php endif; ?>
    </section>   
</main>

<?php get_footer(); ?>
