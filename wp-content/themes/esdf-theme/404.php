<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package ESDF_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="container">
				<header class="page-header">
					<h1 class="page-title"><?php echo lang_in('Page Not Found', 'الصفحة غير موجودة'); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo lang_in('It looks like nothing was found at this location. Maybe try a search?', 'يبدو أنه لم يتم العثور على شيء في هذا الموقع. ربما تحاول البحث؟'); ?></p>
                    
                    <div class="search-404">
					    <?php get_search_form(); ?>
                    </div>
                    
                    <div class="home-btn-wrapper" style="margin-top: 20px;">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="main-btn">
                            <?php echo lang_in('Go to Homepage', 'الذهاب للرئيسية'); ?> <i class="fa-solid fa-house"></i>
                        </a>
                    </div>
				</div><!-- .page-content -->
			</div>
		</section><!-- .error-404 -->

	</main><!-- #primary -->

<?php
get_footer();
