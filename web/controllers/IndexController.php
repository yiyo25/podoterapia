<?php
	
	/**
	* 
	*/
	//use Contralador;
	Class IndexController extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
			//unset($_SESSION['login']);
			//echo "dad";exit;
			// echo ($_SESSION['login']);exit;
			/*if(!isset($_SESSION['login']))
			{
				$this->redirect(array("panel","login"));
				//$this->_view->display('login.twig',array(),'login');
			}*/
		}

		function indexAction(){
			echo "aaa";
			//Database::hola();
			/*$user = new Usuario();
			/*$user->nombre = "Eduardo";
			$user->usuario = "yiyito";
			$user->pass =md5(123456);
			$user->email = "ehuapayaromero@gmail.com";
			*/
			//$user::find(6);
			//echo $user->usuario;

			/*$user->usuario = "yiyito";
			$user->nombre = "ivan huapáya romero";
			$user->email = "ivan_tlvgrone16@hotmail.com";
			$user->fecha = date("Y-m-d H:i:s");
			$user::update();
			/*echo "<pre>";
			print_r($user->data);
			echo "</pre>";*/
			/*
			foreach ($data as $key => $value) {
				echo $data[$key]->nombre;
			}*/
			//print_r( $data[0]->nombre);

			//print_r($user->getColumnas());
			//echo $user->nombre;
			//$user->getTable();
			//echo "hola desde el index";*/
			/*$ar=$user::all();
			echo "<pre>";
			print_r($ar);
			echo "</pre>";*/
			
			$this->_view->display('login.twig',array(),'index');

		}
			
	}


 ?>