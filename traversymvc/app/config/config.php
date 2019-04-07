<?php
// DB Params
$tav = 1;

if ($tav == 1) {
    define('DB_HOST', 'localhost:81');
    define('DB_USER', 'root');
    //tav machine
    define('DB_PASS', '');
    define('DB_NAME', 'exam_accounts');

    // App Root
    define('APPROOT', dirname(dirname(__FILE__)));
    // URL Root
    define('URLROOT', '_YOUR_URL_');
    // Site Name
    define('SITENAME', 'LoginMVC');
} else {
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    //tav machine
    //define('DB_PASS', 'root');
    define('DB_NAME', 'exam_accounts');

    // App Root
    define('APPROOT', dirname(dirname(__FILE__)));
    // URL Root
    define('URLROOT', '_YOUR_URL_');
    // Site Name
    define('SITENAME', 'LoginMVC');
}