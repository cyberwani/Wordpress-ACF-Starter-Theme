<?php

// Logged in users AJAX requests
add_action("wp_ajax_ajax_function", "function_name");

// Logged out users AJAX requests
add_action("wp_ajax_nopriv_ajax_function", "function_name");

function function_name()
{
    if( ! wp_verify_nonce( $_REQUEST['themenonce'], 'theme-nonce')) die ('Busted!');

    // Echo results and data here
    // If we are doing anything manipulates data like a post, edits something or whatever
    // Please make sure you check the current user has permission
    // Using current_user_can("permission_name_here")

    die(); // Always have this at the end of your AJAX request receiving functions
}
