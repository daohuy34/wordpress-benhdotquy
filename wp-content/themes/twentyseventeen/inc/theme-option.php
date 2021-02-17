<?php
add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' ); 

function theme_options_init(){
 register_setting( 'sample_options', 'sample_theme_options');
} 
function theme_option($field){
	$options = get_option( 'sample_theme_options' );
	return $options[$field];
}
function theme_options_add_page() {
 add_theme_page( __( 'Thông tin', 'sampletheme' ), __( 'Thông tin', 'sampletheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}
function theme_options_do_page() {
	global $select_options;
	if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false; 
?>
<div class="wrap">
<?php screen_icon(); ?><h2>Thông tin</h2>
<form method="post" action="options.php">
<?php settings_fields( 'sample_options' ); $options = get_option( 'sample_theme_options' ); ?> 
	<table class="form-table">
		<tr valign="top">
			<th width="90px">Facebook</th>
			<td><input type="text" name="sample_theme_options[facebook]" id="sample_theme_options[facebook]" style="width: 85%" value="<?php echo $options['facebook']; ?>" ></td>
        </tr>
        <tr valign="top">
			<th width="90px">Youtube</th>
			<td><input type="text" name="sample_theme_options[youtube]" id="sample_theme_options[youtube]" style="width: 85%" value="<?php echo $options['youtube']; ?>" ></td>
        </tr>
        <tr valign="top">
			<th width="90px">Zalo</th>
			<td><input type="text" name="sample_theme_options[zalo]" id="sample_theme_options[zalo]" style="width: 85%" value="<?php echo $options['zalo']; ?>" ></td>
        </tr>
    </table>    
    <?php submit_button(); ?>
</form></div>
<?php } ?>
