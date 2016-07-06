<?php
/**
 * Template part for minimal Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Agrilloc
 */
?>

<div class="header-container__flex">
	<div class="site-branding">
		<?php agrilloc_header_logo() ?>
		<?php agrilloc_site_description(); ?>
	</div>
	<?php agrilloc_main_menu(); ?>
</div>
