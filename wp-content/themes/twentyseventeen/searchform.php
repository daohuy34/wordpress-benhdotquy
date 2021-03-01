<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( twentyseventeen_unique_id( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" autocomplete="off" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( '', 'placeholder', 'twentyseventeen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/icon3-search.png"/>
</form>
