<?php
/**
 * Template Name: Home Page
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// ACF Fields (From Theme Settings / Options Page)
$hero_slides = get_field('hero_slider', 'option');
$about = get_field('about_section', 'option');
$partners = get_field('partners_logos', 'option');
?>

<main id="main" class="site-main">

	<!-- Hero Section -->
	<?php if($hero_slides): ?>
		<section class="hero-section">
			<?php foreach($hero_slides as $slide): ?>
				<div class="hero-slide" style="background-image: url('<?php echo esc_url($slide['image']); ?>');">
					<div class="overlay"></div>
					<div class="container hero-content">
						<?php if($slide['title']): ?>
							<h2 class="hero-title"><?php echo esc_html($slide['title']); ?></h2>
						<?php endif; ?>
						<?php if($slide['subtitle']): ?>
							<p class="hero-subtitle"><?php echo nl2br(esc_html($slide['subtitle'])); ?></p>
						<?php endif; ?>
						<?php if($slide['button_text'] && $slide['button_link']): ?>
							<a href="<?php echo esc_url($slide['button_link']); ?>" class="btn btn-primary"><?php echo esc_html($slide['button_text']); ?></a>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</section>
	<?php endif; ?>

	<!-- About Section -->
	<?php if($about): ?>
		<section class="about-section">
			<div class="container">
				<div class="about-row">
					<div class="about-content">
						<?php if($about['title']): ?>
							<h2 class="section-title"><?php echo esc_html($about['title']); ?></h2>
						<?php endif; ?>
						<div class="about-text">
							<?php echo $about['content']; ?>
						</div>
					</div>
					<?php if($about['image']): ?>
						<div class="about-image">
							<img src="<?php echo esc_url($about['image']); ?>" alt="<?php echo esc_attr($about['title']); ?>">
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- Latest News Section -->
	<section class="news-section">
		<div class="container">
			<h2 class="section-title text-center"><?php echo lang_in('Latest News', 'أحدث الأخبار'); ?></h2>
			<div class="news-grid">
				<?php
				$news_query = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => 3,
					'ignore_sticky_posts' => 1,
				));

				if($news_query->have_posts()) :
					while($news_query->have_posts()) : $news_query->the_post();
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('news-card'); ?>>
							<?php if(has_post_thumbnail()): ?>
								<div class="news-thumbnail">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('medium_large'); ?>
									</a>
								</div>
							<?php endif; ?>
							<div class="news-content">
								<div class="news-meta">
									<span class="news-date"><?php echo get_the_date(); ?></span>
								</div>
								<h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<div class="news-excerpt">
									<?php the_excerpt(); ?>
								</div>
								<a href="<?php the_permalink(); ?>" class="btn-link"><?php echo lang_in('Read More', 'اقرأ المزيد'); ?> &rarr;</a>
							</div>
						</article>
						<?php
					endwhile;
					wp_reset_postdata();
				else :
					echo '<p>' . lang_in('No news found.', 'لا توجد أخبار.') . '</p>';
				endif;
				?>
			</div>
		</div>
	</section>

	<!-- Partners Section -->
	<?php if($partners): ?>
		<section class="partners-section">
			<div class="container">
				<h2 class="section-title text-center"><?php echo lang_in('Our Partners', 'شركاؤنا'); ?></h2>
				<div class="partners-grid">
					<?php foreach($partners as $partner): ?>
						<div class="partner-item">
							<?php if($partner['url']): ?>
								<a href="<?php echo esc_url($partner['url']); ?>" target="_blank" rel="noopener noreferrer">
							<?php endif; ?>
								<img src="<?php echo esc_url($partner['logo']); ?>" alt="Partner">
							<?php if($partner['url']): ?>
								</a>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

</main>

<?php get_footer(); ?>
