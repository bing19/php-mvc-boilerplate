<?php

define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'mvc_boilerplate');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8');

// ========================================
// include libs
// ========================================

include APP . '/config/functions.php';

// ========================================
// options
// ========================================

$options['one']   = 'some';
$options['two']   = 'options';
$options['three'] = 'here';