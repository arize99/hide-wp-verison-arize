<?php
/*
Plugin Name: Hide WP Version
Plugin URI: https://github.com/arize99/hide-wp-version
Description: Hide the version your WordPress to increase security. Hackers like fruits hanging low on the tree branch, so make it more difficult for them by removing your version info.
Author: Arize
Author URI: http://hidira.com/arize
Version: 1.0
*/

function remove_version_info() {
     return '';
}
add_filter('the_generator', 'remove_version_info');
?>
