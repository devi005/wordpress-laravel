<?php
/**
 * @package Advertisement
 * @version 1.0
 */
/*
Plugin Name: Advertisement
Description: This is just a plugin
Author: Devi
Version: 1.0
*/

// Plugin to display content of the advertisement 
function display_ad(){

echo $content = "My plugin content";
return $content;
}
add_action('wp_content','display_ad');
?>