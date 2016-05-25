<?php 
	
	ini_set("display_errors", 1);
	define("DEFAULT_LAYOUT","default");
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT_PANEL", realpath(dirname(__FILE__)) . DS );

	require_once ROOT_PANEL . 'config'.DS.'config.php';
	require_once "../vendor/autoload.php";
	
	try {
		session_start();
		Bootstrap::run(new Request(),"panel");
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	
	


 ?>