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
                <!-- START VISION & MISSION SECTION -->
        <section class="vision-mission">
            <div class="container">
                <div class="wrapper">
                    <!-- Vision -->
                    <div class="vm-card" data-aos="fade-up" data-aos-delay="50">
                        <div class="icon-box">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <h3><?php echo get_field('vision_title', 'option') ? get_field('vision_title', 'option') : 'Our Vision'; ?></h3>
                        <p><?php echo get_field('vision_text', 'option') ? get_field('vision_text', 'option') : 'To be the leading authority in diabetic foot care in Egypt and the region, recognized for excellence in prevention, treatment, research, and education.'; ?></p>
                    </div>
                    <!-- Mission -->
                    <div class="vm-card" data-aos="fade-up" data-aos-delay="100">
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

        <!-- START OBJECTIVES SECTION -->
        <section class="objectives">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2><?php echo get_field('objective_title') ? get_field('objective_title') : (get_field('objective_title', 'option') ?: 'Our Objectives'); ?></h2>
                    <div class="text"><?php echo get_field('objective_description') ? get_field('objective_description') : (get_field('objective_description', 'option') ?: 'ESDF is committed to achieving excellence in diabetic foot care through these key objectives'); ?></div>
                </div>
                <div class="wrapper">
                    <?php 
                    $i = 50;
                    $has_group = have_rows('about_page_group');
                    
                    if( $has_group ):
                        while( have_rows('about_page_group') ): the_row();
                            if( have_rows('objectives_list') ):
                                while( have_rows('objectives_list') ): the_row();
                                    $title = get_sub_field('objectives_list_title');
                                    $text = get_sub_field('objectives_list_text');
                                    $icon_class = get_sub_field('objectives_list_icon_class'); 
                                    ?>
                                    <div class="objective-card" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>">
                                        <div class="icon-box">
                                            <i class="<?php echo $icon_class ? esc_attr($icon_class) : 'fa-check'; ?>"></i>
                                        </div>
                                        <div class="content">
                                            <h3><?php echo esc_html($title); ?></h3>
                                            <p><?php echo esc_html($text); ?></p>
                                        </div>
                                    </div>
                                    <?php $i += 50; ?>
                                <?php endwhile;
                            endif;
                        endwhile;
                    elseif( have_rows('objectives_list') ): // Fallback for direct page fields (no group)
                         while( have_rows('objectives_list') ): the_row();
                            $title = get_sub_field('objectives_list_title');
                            $text = get_sub_field('objectives_list_text');
                            $icon_class = get_sub_field('objectives_list_icon_class'); 
                            ?>
                            <div class="objective-card" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>">
                                <div class="icon-box">
                                    <i class="<?php echo $icon_class ? esc_attr($icon_class) : 'fa-check'; ?>"></i>
                                </div>
                                <div class="content">
                                    <h3><?php echo esc_html($title); ?></h3>
                                    <p><?php echo esc_html($text); ?></p>
                                </div>
                            </div>
                            <?php $i += 50; ?>
                        <?php endwhile;
                    elseif( have_rows('objectives_list', 'option') ):
                         while( have_rows('objectives_list', 'option') ): the_row();
                            $title = get_sub_field('objectives_list_title');
                            $text = get_sub_field('objectives_list_text');
                            $icon_class = get_sub_field('objectives_list_icon_class'); 
                            ?>
                            <div class="objective-card" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>">
                                <div class="icon-box">
                                    <i class="<?php echo $icon_class ? esc_attr($icon_class) : 'fa-check'; ?>"></i>
                                </div>
                                <div class="content">
                                    <h3><?php echo esc_html($title); ?></h3>
                                    <p><?php echo esc_html($text); ?></p>
                                </div>
                            </div>
                            <?php $i += 50; ?>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </section>
        <!-- END OBJECTIVES SECTION -->

        <!-- START BOARD OF MEMBERS SECTION -->
        <section class="board-members">
            <div class="container">
                <?php 
                $board_title = get_field('board_title') ?: get_field('board_title', 'option');
                $board_desc = get_field('board_desc') ?: get_field('board_desc', 'option');
                if($board_title): ?>
                <div class="section-header" data-aos="fade-up">
                    <h2><?php echo esc_html($board_title); ?></h2>
                    <div class="text"><?php echo esc_html($board_desc); ?></div>
                </div>
                <?php endif; ?>
                <div class="wrapper">
                    <?php 
                    $j = 50;
                    // Reimplements group logic similarly
                    if( have_rows('about_page_group') ):
                        while( have_rows('about_page_group') ): the_row();
                             if( have_rows('board_members') ):
                                while( have_rows('board_members') ): the_row();
                                    $name = get_sub_field('member_name');
                                    $role = get_sub_field('member_role');
                                    $specialty = get_sub_field('member_specialty');
                                    $image = get_sub_field('member_image');
                                    ?>
                                    <div class="member-card" data-aos="fade-up" data-aos-delay="<?php echo $j; ?>">
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
                                    <?php $j += 50; ?>
                                <?php endwhile;
                            endif;
                        endwhile;
                    elseif( have_rows('board_members') ):
                        while( have_rows('board_members') ): the_row();
                            $name = get_sub_field('member_name');
                            $role = get_sub_field('member_role');
                            $specialty = get_sub_field('member_specialty');
                            $image = get_sub_field('member_image');
                            ?>
                            <div class="member-card" data-aos="fade-up" data-aos-delay="<?php echo $j; ?>">
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
                            <?php $j += 50; ?>
                        <?php endwhile;
                    elseif( have_rows('board_members', 'option') ):
                        while( have_rows('board_members', 'option') ): the_row();
                            $name = get_sub_field('member_name');
                            $role = get_sub_field('member_role');
                            $specialty = get_sub_field('member_specialty');
                            $image = get_sub_field('member_image');
                            ?>
                            <div class="member-card" data-aos="fade-up" data-aos-delay="<?php echo $j; ?>">
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
                            <?php $j += 50; ?>
                        <?php endwhile;
                    endif; ?>   
                </div>
            </div>
        </section>
        <!-- END BOARD OF MEMBERS SECTION -->

	</div>
</main>

<?php get_footer(); ?>
