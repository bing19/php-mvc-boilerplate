<?php

// ========================================
// functions
// ========================================

function split_url( $part = 0 ) {

    if ( !isset($_GET['url']) ) { return false; }

    $url = $_GET['url'];

    $url = trim($_GET['url'], '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);

    return $url[$part];

}