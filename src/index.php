<?php include_once '../src/config/init.php';

$template = new Template('templates/frontpage.php');

// We define variables we want to push to our frontpage-template
$template->title = 'This is a test 2 title';
$template->content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

//We display the template
echo $template;