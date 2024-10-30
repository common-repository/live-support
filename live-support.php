<?php
/* 
Plugin Name: Live Support
Plugin URI: http://designerdady.com
Description: This plugins embed call button to your site.
Author: Jacquish
Version: 1.0
Author URI: http://designerdady.com
*/

/*  Copyright 2012  LiveSupport  (email : brabojonny@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function get_cts_bnt(){
	$cts_api_key 			= get_option('cts_api_key');
	if (!empty($cts_api_key)){ ?>	
<div id="calltosupport_btn">
<a href="http://calltosupport.com/client/initialize.php?indentifier=<?php echo $cts_api_key; ?>" onclick='window.open("http://calltosupport.com/client/initialize.php?indentifier=<?php echo $cts_api_key; ?>", "myWindow", "status = 0, height = 530, width = 420, resizable = 0"); return false;'>
<img src="https://calltosupport.com/client/get_button.php?indentifier=<?php echo $cts_api_key; ?>" alt="Call" title="Call" />
</a>
</div>
	<?php
    }	
}
wp_register_style( 'cts_style', plugins_url('css/live-support.css', __FILE__) );
wp_enqueue_style( 'cts_style' );
add_action('wp_footer', 'get_cts_bnt');
include('plugin_interface.php');
?>