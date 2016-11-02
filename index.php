<?php 

	ini_set("display_errors", 1);
	define("DEFAULT_LAYOUT","default");
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", realpath(dirname(__FILE__)) . DS);
	define("SERVER_NAME","www.podoterapia.devel/");
	
	
	try {
		require_once ROOT . 'web/config/config.php';
		require_once "vendor/autoload.php";

		/***************** Intancia unica de clase******************/

		session_start();
		$singleton =  Singleton::getInstancia();
		$singleton->_request = new Request();
		$singleton->_db = new Database();

		Bootstrap::run($singleton->_request);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	



 ?>