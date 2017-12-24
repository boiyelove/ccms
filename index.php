<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
// Start Session
session_start();

// Include Config
require('config.php');


foreach (glob("classes/*") as $filename) {
  require $filename;
}

foreach (glob("controllers/*") as $filename) {
  require $filename;
}

foreach (glob("models/*") as $filename) {
  require $filename;
}

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}