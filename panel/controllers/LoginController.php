<?php 

	/**
	* 
	*/
	class LoginController extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function indexAction()
		{
			if($this->isPost()){
				$_SESSION['login']=true;
				//echo "dssad";exit;
				$this->redirect(array('panel','index'));
			}
			$this->_view->display('index.twig',array(),'login');
		}
	}


 ?>