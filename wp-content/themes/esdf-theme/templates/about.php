<?php
/**
 * Template Name: About
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main" class="site-main">
	<div class="custom-page about-page">
		<!-- START ABOUT SECTION  -->
		<section class="about">
			<div class="container">
				<div class="wrapper">
					<div class="content">
						<h2><?php echo get_field('about_title', 'option'); ?></h2>
                        <div class="text"><?php echo get_field('about_text', 'option'); ?></div>
                    </div>
                    <div class="image">
                        <img src="<?php echo esc_url(get_field('about_img', 'option')); ?>" alt="About Image">
                    </div>
                </div>
            </div>
		</section>
		<!-- END ABOUT SECTION  -->

        <!-- START VISION & MISSION SECTION -->
        <section class="vision-mission">
            <div class="container">
                <div class="wrapper">
                    <!-- Vision -->
                    <div class="vm-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <h3><?php echo get_field('vision_title', 'option') ? get_field('vision_title', 'option') : 'Our Vision'; ?></h3>
                        <p><?php echo get_field('vision_text', 'option') ? get_field('vision_text', 'option') : 'To be the leading authority in diabetic foot care in Egypt and the region, recognized for excellence in prevention, treatment, research, and education.'; ?></p>
                    </div>
                    <!-- Mission -->
                    <div class="vm-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <i class="fa-solid fa-bullseye"></i> <!-- Fallback if no icon field -->
                        </div>
                        <h3><?php echo get_field('mission_title', 'option') ? get_field('mission_title', 'option') : 'Our Mission'; ?></h3>
                        <p><?php echo get_field('mission_text', 'option') ? get_field('mission_text', 'option') : 'To improve the quality of healthcare services and care provided to diabetic patients, protecting their feet from disease complications.'; ?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END VISION & MISSION SECTION -->

        <!-- START OBJECTIVES SECTION -->
        <section class="objectives">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2><?php echo get_field('objectives_title', 'option') ? get_field('objectives_title', 'option') : 'Our Objectives'; ?></h2>
                    <div class="text"><?php echo get_field('objectives_desc', 'option') ? get_field('objectives_desc', 'option') : 'ESDF is committed to achieving excellence in diabetic foot care through these key objectives'; ?></div>
                </div>
                <div class="wrapper">
                    <?php 
                    if( have_rows('objectives_list', 'option') ):
                        while( have_rows('objectives_list', 'option') ): the_row();
                            $title = get_sub_field('title');
                            $text = get_sub_field('text');
                            $icon_class = get_sub_field('icon_class'); // Expecting class like 'fa-shield-halved'
                            ?>
                            <div class="objective-card" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon-box">
                                    <i class="fa-solid <?php echo $icon_class ? esc_attr($icon_class) : 'fa-check'; ?>"></i>
                                </div>
                                <div class="content">
                                    <h3><?php echo esc_html($title); ?></h3>
                                    <p><?php echo esc_html($text); ?></p>
                                </div>
                            </div>
                        <?php endwhile;
                    else:
                        // Fallback Content
                        $objectives = [
                            ['title' => 'Prevention & Early Detection', 'text' => 'Promote early detection of diabetic foot complications.', 'icon' => 'fa-shield-halved'],
                            ['title' => 'Education & Awareness', 'text' => 'Provide comprehensive educational programs for healthcare professionals.', 'icon' => 'fa-book-open'],
                            ['title' => 'Research & Innovation', 'text' => 'Conduct and support scientific research to advance knowledge.', 'icon' => 'fa-microscope'],
                            ['title' => 'Professional Development', 'text' => 'Offer training workshops and continuing education opportunities.', 'icon' => 'fa-user-doctor'],
                            ['title' => 'Clinical Excellence', 'text' => 'Establish and promote best practices and clinical guidelines.', 'icon' => 'fa-hospital'],
                            ['title' => 'Collaboration & Networking', 'text' => 'Foster collaboration among healthcare professionals.', 'icon' => 'fa-globe']
                        ];
                        foreach($objectives as $obj): ?>
                            <div class="objective-card" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon-box">
                                    <i class="fa-solid <?php echo $obj['icon']; ?>"></i>
                                </div>
                                <div class="content">
                                    <h3><?php echo esc_html($obj['title']); ?></h3>
                                    <p><?php echo esc_html($obj['text']); ?></p>
                                </div>
                            </div>
                        <?php endforeach;
                    endif; ?>
                </div>
            </div>
        </section>
        <!-- END OBJECTIVES SECTION -->

        <!-- START BOARD OF MEMBERS SECTION -->
        <section class="board-members">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2><?php echo get_field('board_title', 'option') ? get_field('board_title', 'option') : 'Board of Directors'; ?></h2>
                    <div class="text"><?php echo get_field('board_desc', 'option') ? get_field('board_desc', 'option') : 'Our distinguished board members bring decades of experience in diabetic foot care and medical research'; ?></div>
                </div>
                <div class="wrapper">
                    <?php 
                    if( have_rows('board_members', 'option') ):
                        while( have_rows('board_members', 'option') ): the_row();
                            $name = get_sub_field('name');
                            $role = get_sub_field('role');
                            $specialty = get_sub_field('specialty');
                            $image = get_sub_field('image');
                            ?>
                            <div class="member-card" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    <?php if($image): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($name); ?>">
                                    <?php else: ?>
                                        <i class="fa-solid fa-user"></i>
                                    <?php endif; ?>
                                </div>
                                <h3><?php echo esc_html($name); ?></h3>
                                <span class="role"><?php echo esc_html($role); ?></span>
                                <span class="specialty"><?php echo esc_html($specialty); ?></span>
                            </div>
                        <?php endwhile;
                    else:
                        // Fallback Content
                        $board = [
                            ['name' => 'Prof. Ahmed Hassan', 'role' => 'President', 'specialty' => 'Endocrinology'],
                            ['name' => 'Dr. Fatima El-Sayed', 'role' => 'Vice President', 'specialty' => 'Vascular Surgery'],
                            ['name' => 'Dr. Mohamed Ibrahim', 'role' => 'Secretary General', 'specialty' => 'Diabetology'],
                            ['name' => 'Dr. Laila Mahmoud', 'role' => 'Treasurer', 'specialty' => 'Internal Medicine'],
                            ['name' => 'Prof. Khaled Abdel-Rahman', 'role' => 'Board Member', 'specialty' => 'Orthopedic Surgery'],
                            ['name' => 'Dr. Nadia Farouk', 'role' => 'Board Member', 'specialty' => 'Podiatry']
                        ];
                        foreach($board as $member): ?>
                            <div class="member-card" data-aos="fade-up" data-aos-delay="100">
                                <div class="member-img">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                <h3><?php echo esc_html($member['name']); ?></h3>
                                <span class="role"><?php echo esc_html($member['role']); ?></span>
                                <span class="specialty"><?php echo esc_html($member['specialty']); ?></span>
                            </div>
                        <?php endforeach;
                    endif; ?>
                </div>
            </div>
        </section>
        <!-- END BOARD OF MEMBERS SECTION -->

	</div>
</main>

<?php get_footer(); ?>
