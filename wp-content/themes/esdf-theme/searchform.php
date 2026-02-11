<?php
/**
 * The template for displaying search forms in ESDF Theme
 *
 * @package ESDF_Theme
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-wrap">
		<input type="search" class="input-text"
            placeholder="<?php echo esc_attr( lang_in('What are you looking for?', 'عن ماذا تبحث؟') ); ?>"
            value="<?php echo get_search_query(); ?>" name="s" />
		<button type="submit" class="btn search-btn">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
	</div>
</form>
