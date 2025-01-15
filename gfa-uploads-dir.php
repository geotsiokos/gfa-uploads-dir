<?php
/**
 * Plugin Name: GFA Custom Uploads Dir
 * Description: Custom uploads directory for <a href="https://wordpress.org/plugins/groups/">Groups File Access</a> plugin
 * Author: gtsiokos
 * Author URI: https://www.netpad.gr
 * Plugin URI: https://www.netpad.gr
 * Version: 1.0.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'groups_file_access_uploads_dir', 'example_groups_file_access_uploads_dir' );
function example_groups_file_access_uploads_dir( $gfa_uploads_dir ) {
	return '/srv/www/echamicrobiology.com/current/web/app/uploads/groups-file-access';
}
