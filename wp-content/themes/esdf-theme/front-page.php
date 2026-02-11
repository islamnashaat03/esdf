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
		<h2>الجمعية المصرية للقدم السكري</h2>	
	</div>	
</div>

<?php wp_footer(); ?>
</body>

<style>
    .coming-soon-container {
           background: #000;
    height: 100%;
    display: flex;
    height: 100vh;
    align-items: center;
    justify-content: center;
    text-align: center
    }
    .coming-soon-container .content {
        text-align: center;
    }
    .coming-soon-container .content h2 {
        font-size: 6rem;
        margin-bottom: 1rem;
        color: #fff;
    }
</style>
</html>
