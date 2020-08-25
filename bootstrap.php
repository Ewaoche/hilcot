<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

//Initialize the Config File
if(file_exists(DOT . '/config.php')){
	include(__DIR__ . '/config.php');
	require __DIR__ . '/vendor/autoload.php';

	$Route = new Apps\Route;
	$Session = new Apps\Session;
	$Core = new Apps\Core;
    $Template = new Apps\Template;

}else{
	die('config.php not found!');
}

