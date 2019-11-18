<?php
// Start Session
session_start();

// Config File
require_once 'config.php';

// Autoloader
function __autoload($class_name)
{
    require_once 'library/' . $class_name . '.php';
}