<?php
/**
 * The template for displaying the Coming Soon page
 *
 * @package ESDF_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo( 'name' ); ?> | <?php _e( 'Coming Soon', 'esdf-theme' ); ?></title>
	<?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>

<div class="coming-soon-container">
	<div class="content ">
		<!-- Add Logo Here if available -->
		<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo" class="logo"> -->
		
		<h1><?php echo lang_in('Coming Soon', 'قريباً'); ?></h1>
		<p><?php echo lang_in('We are working hard to bring you something amazing.', 'نحن نعمل بجد لنقدم لكم شيئاً مميزاً.'); ?></p>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
