<?php

// Logged in users AJAX requests
add_action("wp_ajax_ajax_function", "function_name");

// Logged out users AJAX requests
add_action("wp_ajax_nopriv_ajax_function", "function_name");

function function_name()
{
    if( ! wp_verify_nonce( $_REQUEST['nonce'], $_REQUEST['action'])) die ('Busted!');
}
