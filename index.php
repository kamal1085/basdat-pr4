<?php

/**
This main class to load all application , controller, model and view init

Prepared by Kelompok basdat - 11
Muhammad Kamal
Zetra
Handi Nastity
Ramadhan Ibnu Akbar
**/

session_start();

// set a constant that holds the project's folder path, like "/var/www/".
// DIRECTORY_SEPARATOR adds a slash to the end of the path
define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);
// set a constant that holds the project's "application" folder, like "/var/www/application".
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

// load application config (error reporting etc.)
require APP . '/config/config.php';
 

// load application class - 
require APP . '/core/application.php';
require APP . '/core/controller.php';

// start the application
$app = new Application();
