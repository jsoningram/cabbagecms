<?php
/*
Plugin Name: CabbageCMS
Plugin URI: https://bitbucket.org/jsoningram/cabbagecms
Description: Custom settings for More Cabbage CMS
Version: 2.2.2
Author: Jason Ingram
Author URI: http://morecabbage.com
*/

include '_/inc/cabbagecms-settings.php';
include '_/inc/analyticstracking.php';
include '_/inc/email.php';
include '_/inc/googleplus.php';
include '_/inc/gravityforms-goodies.php';
include '_/inc/pinterest.php';
include '_/inc/social.php';
include '_/inc/contact-fields.php';

function cabbagecms_settings_link($links) { // Add settings link on plugin page
    
    global $cabbagecms_options_page;
    $settings_link = '<a href="' . $cabbagecms_options_page . '">Settings</a>'; 
    array_unshift($links, $settings_link); 
    return $links; 
}
 
$plugin = plugin_basename(__FILE__); 

add_filter("plugin_action_links_$plugin", 'cabbagecms_settings_link' );

/*
function cabbagecms_git_updater() { // connect git plugin updates
    
    if ( is_admin() && !class_exists( 'GPU_Controller' ) ) {
        require_once dirname( __FILE__ ) . '/git-plugin-updates/git-plugin-updates.php';
        add_action( 'plugins_loaded', 'GPU_Controller::get_instance', 20 );
    }
}

add_action( 'plugins_loaded', 'cabbagecms_git_updater' );
*/

function cabbagecms_git_updater()
{
header('Content-Type: text/plain');
echo "is_admin, and class_exists( 'GPU_Controller' )\n";
var_dump(is_admin(), class_exists( 'GPU_Controller' ));
if ( is_admin() && !class_exists( 'GPU_Controller' ) )
{
echo "path and if file exists\n";
var_dump(dirname( __FILE__ ) . '/git-plugin-updates/git-plugin-updates.php', file_exists(dirname( __FILE__ ) . '/git-plugin-updates/git-plugin-updates.php'));

require_once dirname( __FILE__ ) . '/git-plugin-updates/git-plugin-updates.php';
add_action( 'plugins_loaded', 'GPU_Controller::get_instance', 20 );
}
die("\n\nend verbosity");
}
