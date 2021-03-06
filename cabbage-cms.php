<?php
/*
Plugin Name: CabbageCMS
Plugin URI: https://github.com/jsoningram/cabbagecms
Description: Custom settings for More Cabbage CMS
Version: 1.1.1
Author: Jason Ingram
Author URI: http://morecabbage.com
License: GPL2
*/

include_once '_/inc/cabbagecms-settings.php';
include_once '_/inc/analyticstracking.php';
include_once '_/inc/email.php';
include_once '_/inc/googleplus.php';
include_once '_/inc/gravityforms-goodies.php';
include_once '_/inc/pinterest.php';
include_once '_/inc/social.php';
include_once '_/inc/contact-fields.php';
include_once '_/inc/browser-body-class.php';
include_once '_/inc/helper-functions.php';

function cabbagecms_settings_link($links) { // Add settings link on plugin page
    
    global $cabbagecms_options_page;
    $settings_link = '<a href="' . $cabbagecms_options_page . '">Settings</a>'; 
    array_unshift($links, $settings_link); 
    return $links; 
}
 
$plugin = plugin_basename(__FILE__); 

add_filter("plugin_action_links_$plugin", 'cabbagecms_settings_link' );

function cabbagecms_plugin_updater() { // enable updates from Github - https://github.com/jkudish/WordPress-GitHub-Plugin-Updater

	include_once 'updater.php';

	define( 'WP_GITHUB_FORCE_UPDATE', true );

	if ( is_admin() ) { // note the use of is_admin() to double check that this is happening in the admin

		$config = array(
			'slug' => plugin_basename( __FILE__ ),
			'proper_folder_name' => 'cabbagecms',
			'api_url' => 'https://api.github.com/repos/jsoningram/cabbagecms',
			'raw_url' => 'https://raw.github.com/jsoningram/cabbagecms/master',
			'github_url' => 'https://github.com/jsoningram/cabbagecms',
			'zip_url' => 'https://github.com/jsoningram/cabbagecms/archive/master.zip',
			'sslverify' => true,
			'requires' => '3.9',
			'tested' => '3.9',
			'readme' => 'README.md',
			'access_token' => '',
		);

		new WP_GitHub_Updater( $config );

	}

}

add_action( 'init', 'cabbagecms_plugin_updater' );