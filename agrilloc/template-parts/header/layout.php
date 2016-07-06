<?php
/**
 * Template part for default Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Agrilloc
 */
?>

<?php agrilloc_social_list( 'header' ); ?>

<div class="site-branding">
	<?php agrilloc_header_logo() ?>
	<?php agrilloc_site_description(); ?>
</div>

<?php agrilloc_main_menu(); ?>
