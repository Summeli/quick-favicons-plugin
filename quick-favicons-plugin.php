<?php
/*
* Plugin Name: Quick Favicon Plugin
* Version: 1.0
* Author: Antti Pohjola
* Description: Adding favicon into your wordpress site. This plugin is best used with
*/
function add_my_favicon() {
    $favicon_path = plugins_url( '/favicons/', __FILE__ );    

    echo '<link rel="apple-touch-icon" sizes="57x57" href="' . $favicon_path . 'apple-icon-57x57.png">´+´';
    echo '<link rel="apple-touch-icon" sizes="60x60" href="' . $favicon_path . 'apple-icon-60x60.png">';
    echo '<link rel="apple-touch-icon" sizes="72x72" href="' . $favicon_path . 'apple-icon-72x72.png">';
    echo '<link rel="apple-touch-icon" sizes="76x76" href="' . $favicon_path . 'apple-icon-76x76.png">';
    echo '<link rel="apple-touch-icon" sizes="114x114" href="' . $favicon_path . 'apple-icon-114x114.png">';
    echo '<link rel="apple-touch-icon" sizes="120x120" href="' . $favicon_path . 'apple-icon-120x120.png">';
    echo '<link rel="apple-touch-icon" sizes="144x144" href="' . $favicon_path . 'apple-icon-144x144.png">';
    echo '<link rel="apple-touch-icon" sizes="152x152" href="' . $favicon_path . 'apple-icon-152x152.png">';
    echo '<link rel="apple-touch-icon" sizes="180x180" href="' . $favicon_path . 'apple-icon-180x180.png">';
    echo '<link rel="icon" type="image/png" sizes="192x192"  href="' . $favicon_path . 'android-icon-192x192.png">';
    echo '<link rel="icon" type="image/png" sizes="32x32" href="' . $favicon_path . 'favicon-32x32.png">';
    echo '<link rel="icon" type="image/png" sizes="96x96" href="' . $favicon_path . 'favicon-96x96.png">';
    echo '<link rel="icon" type="image/png" sizes="16x16" href="' . $favicon_path . 'favicon-16x16.png">';
    echo '<link rel="manifest" href="' . $favicon_path . 'manifest.json">';
}
add_action( 'wp_head', 'add_my_favicon' ); //front end
add_action( 'admin_head', 'add_my_favicon'); //admin end
?>
