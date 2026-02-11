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
		<h2>
			ESDF
		</h2>
		<h2>
الجمعية المصرية للقدم السكري</h2>	
	</div>	
</div>

<?php wp_footer(); ?>
</body>
</html>
