/*
Plugin Name: simplexml
Plugin URI: https://blakeborchard.com/wp-plugins
Description: simple xml script to take information from x place and shit it out
Version: 0.0.1
Author: borchdev
Author URI: https://blakeborchard.com
License: GPLv2 or later
Text Domain: borchard
*/


<?php
$xml=simplexml_load_file("https://steamcommunity.com/gid/41109792/memberslistxml/?xml=1") or die("Error: Cannot create object");
print_r($xml);
?>
