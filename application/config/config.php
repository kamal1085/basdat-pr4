<?php

/**
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard errors in production
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);
 

define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', '');
define('URL_INDEX_FILE', 'index.php' . '/');

// the final URLs, constructed with the elements above
if (defined('URL_SUB_FOLDER')) {
    define('URL', URL_PROTOCOL . URL_DOMAIN . '/' . URL_SUB_FOLDER . '/');
    define('URL_WITH_INDEX_FILE', URL_PROTOCOL . URL_DOMAIN . '/' . URL_SUB_FOLDER . '/' . URL_INDEX_FILE);
} else {
    define('URL', URL_PROTOCOL . URL_DOMAIN . '/');
    define('URL_WITH_INDEX_FILE', URL_PROTOCOL . URL_DOMAIN . '/' . URL_INDEX_FILE);
}

/**
 * Configuration for: Database
 * This is the place where you define your database credentials, database type etc.
 */
define('DB_TYPE', 'pgsql');
define('DB_HOST', 'pgdevelopment.c5vulavebd4f.ap-southeast-1.rds.amazonaws.com');
define('DB_NAME', 'TOKOKEREN');
define('DB_USER', 'muhammad_kamal');
define('DB_PASS', '!23Qweasd');
