<?php
/**
 * Template Name: Education
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main-content" class="education-portal">
    <div class="container">
        <header class="section-header" data-aos="fade-up">
            <h1><?php lang_in('Education Resources', 'الموارد التعليمية'); ?></h1>
            <p class="subtitle"><?php lang_in('Advance your knowledge with our specialized medical resources, expert lectures, and educational videos.', 'عزز معرفتك بمواردنا الطبية المتخصصة، ومحاضرات الخبراء، ومقاطع الفيديو التعليمية.'); ?></p>
        </header>

        <div class="wrapper">
            <!-- Educational Videos Card -->
            <div class="education-card" data-aos="fade-right" data-aos-delay="100">
                <div class="image-container">
                    <?php 
                    // Use a placeholder or a specific image if available
                    $video_img = get_template_directory_uri() . '/assets/images/education-videos.jpg'; 
                    ?>
                    <img src="<?php echo esc_url($video_img); ?>" alt="Educational Videos">
                </div>
                <div class="card-content">
                    <div class="icon-box">
                        <i class="fa-solid fa-play"></i>
                    </div>
                    <h2><?php lang_in('Educational Videos', 'فيديوهات تعليمية'); ?></h2>
                    <p class="description">
                        <?php lang_in('Access our comprehensive video library featuring expert lectures, clinical demonstrations, surgical techniques, and patient education materials on diabetic foot care and prevention.', 'يمكنك الوصول إلى مكتبة الفيديو الشاملة الخاصة بنا والتي تضم محاضرات الخبراء، والعروض التوضيحية السريرية، والتقنيات الجراحية، والمواد التثقيفية للمرضى حول العناية بالقدم السكري والوقاية منها.'); ?>
                    </p>
                    <ul class="features">
                        <li><?php lang_in('Clinical procedure demonstrations', 'العروض التوضيحية للإجراءات السريرية'); ?></li>
                        <li><?php lang_in('Expert panel discussions', 'مناقشات لجنة الخبراء'); ?></li>
                        <li><?php lang_in('Patient care tutorials', 'دروس رعاية المرضى'); ?></li>
                        <li><?php lang_in('Surgical technique recordings', 'تسجيلات التقنيات الجراحية'); ?></li>
                        <li><?php lang_in('Conference session replays', 'إعادة جلسات المؤتمر'); ?></li>
                    </ul>
                    <div class="card-footer">
                        <?php 
                        $video_link = get_term_link('videos', 'education_category'); 
                        if (is_wp_error($video_link)) $video_link = '#';
                        ?>
                        <a href="<?php echo esc_url($video_link); ?>" class="btn-link">
                            <?php lang_in('Browse Videos', 'تصفح الفيديوهات'); ?> <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Lectures & Presentations Card -->
            <div class="education-card" data-aos="fade-left" data-aos-delay="200">
                <div class="image-container">
                    <?php 
                    $lecture_img = get_template_directory_uri() . '/assets/images/lectures.jpg'; 
                    ?>
                    <img src="<?php echo esc_url($lecture_img); ?>" alt="Lectures & Presentations">
                </div>
                <div class="card-content">
                    <div class="icon-box">
                        <i class="fa-solid fa-desktop"></i>
                    </div>
                    <h2><?php lang_in('Lectures & Presentations', 'المحاضرات والعروض التقديمية'); ?></h2>
                    <p class="description">
                        <?php lang_in('Explore a rich collection of scientific lectures and presentations from leading diabetic foot specialists, covering the latest research findings, treatment protocols, and clinical guidelines.', 'استكشف مجموعة غنية من المحاضرات والعروض التقديمية العلمية من كبار المتخصصين في القدم السكري، والتي تغطي أحدث نتائج الأبحاث، وبروتوكولات العلاج، والمبادئ التوجيهية السريرية.'); ?>
                    </p>
                    <ul class="features">
                        <li><?php lang_in('Keynote presentations archive', 'أرشيف العروض التقديمية الرئيسية'); ?></li>
                        <li><?php lang_in('Research findings summaries', 'ملخصات نتائج الأبحاث'); ?></li>
                        <li><?php lang_in('Treatment protocol lectures', 'محاضرات بروتوكول العلاج'); ?></li>
                        <li><?php lang_in('Case study presentations', 'عروض دراسة الحالة'); ?></li>
                        <li><?php lang_in('International speaker sessions', 'جلسات المتحدثين الدوليين'); ?></li>
                    </ul>
                    <div class="card-footer">
                        <?php 
                        $lecture_link = get_term_link('lectures', 'education_category'); 
                        if (is_wp_error($lecture_link)) $lecture_link = '#';
                        ?>
                        <a href="<?php echo esc_url($lecture_link); ?>" class="btn-link">
                            <?php lang_in('View Lectures', 'عرض المحاضرات'); ?> <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
