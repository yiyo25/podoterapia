<?php 


	/**
	* 
	*/
	class IndexController extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if(!isset($_SESSION['login']))
			{
				$this->redirect(array("panel","login"));
				//$this->_view->display('login.twig',array(),'login');
			}
		}

		function indexAction()
		{
			//var_dump($this->_db);exit;
			/* $admin = new Administrador();
			 $admin->nombre = "juan";
			 $admin->email = "ivan_14hr@hotmail.com";
			 $admin::create();*/
			 $this->_view->display('login.twig',array(),'index');
		}
	}

 ?>