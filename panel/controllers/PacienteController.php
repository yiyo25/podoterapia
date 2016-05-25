<?php 

	/**
	* 
	*/
	class PacienteController extends Controller
	{		
		
		function __construct()
		{
			parent::__construct();
		}

		function indexAction()
		{
			$this->_view->display('index.twig',array());
		}

		function insertarAction()
		{

			$this->_view->display("insertar.twig",array());
		}

		function editAction()
		{

		}
	}




 ?>