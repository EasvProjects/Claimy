<?php include_once '../src/config/init.php';

$template = new Template('templates/dashboard.php');

$template->title = 'Dashboard';

echo $template;
