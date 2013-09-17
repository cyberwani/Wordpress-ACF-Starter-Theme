<?php

function my_acf_options_page_settings( $settings )
{
    $settings['title'] = 'Theme Options';

    return $settings;
}

add_filter('acf/options_page/settings', 'my_acf_options_page_settings');

if( function_exists('acf_add_options_sub_page') )
{
    acf_add_options_sub_page( 'Sub Options Page #1' );
    acf_add_options_sub_page( 'Sub Options Page #2' );
}

/*
 *To use premium addons in your theme, uncomment one or more of the following lines
 * Make sure you have copied over the appropriate files into the below folders before
 * uncommenting or you will amass a million errors
*/

add_action('acf/register_fields', 'my_register_fields');

//include_once 'addons/acf-options-page/acf-options-page.php';

function my_register_fields()
{
    //include_once('addons/acf-flexible-content/flexible-content.php');
    //include_once('addons/acf-repeater/repeater.php');
}

// Paste in your register field groups code here
