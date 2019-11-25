<?php

require 'core/bootstrap.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '':
    case '/' :
        require 'controllers/index-controller.php';
        break;
}