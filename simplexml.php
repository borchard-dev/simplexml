/*
Plugin Name: simplexml
Plugin URI: https://blakeborchard.com/wp-plugins
Description: simple php script to take information from xml doc at x place and shit it out.
Version: 0.0.1
Author: borchdev
Author URI: https://blakeborchard.com
License: GPLv2 or later
Text Domain: borchard
*/


<?php
$xml=simplexml_load_file("https://steamcommunity.com/gid/41109792/memberslistxml/?xml=1") || die("Error: Cannot create object");
print_r($xml);
?>
