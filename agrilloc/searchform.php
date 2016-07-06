<?php
/**
 * The template for displaying search form.
 *
 * @package Agrilloc
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'agrilloc' ) ?></span>
		<input type="search" class="search-form__field"
			placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'agrilloc' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label', 'agrilloc' ) ?>" />
	</label>
	<button type="submit" class="search-form__submit btn btn-primary"><i class="material-icons">search</i></button>
</form>