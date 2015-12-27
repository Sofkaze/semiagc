<?php 

    $db_username = 'root';
    $db_passowrd = 'amikom!123';
    $db_name     = 'grabber';
    $db_host     = 'localhost';
    $connecDB    =  mysqli_connect($db_host, $db_username, $db_passowrd, $db_name) or die($message);
	$baseurl 	 = "http://" . $_SERVER['SERVER_NAME']."/";
	$dirname 	 = 'RISETGRABBER';
	define('__ROOT__', dirname(dirname($dirname))); 