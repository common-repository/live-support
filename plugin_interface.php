<?php
add_action('admin_menu', 'cts_create_menu');

function cts_create_menu() {
	add_options_page('Live Support', 'Live Support', 'administrator', __FILE__, 'cts_settings_page');
	add_action('admin_init', 'register_ctssettings');
}

function register_ctssettings() {
	register_setting('cts-settings-group', 'cts_api_key');
}

function cts_settings_page() {
	$cts_api_key 			= get_option('cts_api_key');
?>

<div class="wrap">
<h2>Call To Support</h2>

    <form method="post" action="options.php">
	<?php settings_fields( 'cts-settings-group' ); ?>
	<table class="form-table">
        <tr valign="top">
            <th scope="row">API Key</th>
            <td>
               <input name="cts_api_key" style="width:300px;"  value="<?php echo $cts_api_key; ?>" type="text" /><br/>
               <p>You can get API key from <a target="_blank" href="http://calltosupport.com">CallToSupport</a> account dashboard.<br/>You can also <a target="_blank" href="http://calltosupport.com/register.html">register</a> to get the API key, if you don't have account.</p>
            </td>
        </tr>
        
    </table>
    
    <p class="submit">
    <input type="submit" name="submit-bpu" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>
</form>
</div>
<?php } ?>