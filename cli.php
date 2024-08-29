#!/usr/bin/php
<?php
 
if (isset($_SERVER['REMOTE_ADDR'])) {
    die('Command Line Only!');
}
 
set_time_limit(0);
 
// Get the CLI arguments
$path = isset($argv[1]) ? $argv[1] : '';
$_SERVER['REQUEST_URI'] = $_SERVER['PATH_INFO'] = $path;
 
// Include the main index.php file
require dirname(__FILE__) . '/public/index.php';
 