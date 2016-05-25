<?php

	/**
	* 
	*/
	//namespace Contralador;
	class Controller
	{
		protected $_view ;
		protected $_DB;
		public function __construct()
		{
			//$singleton = new Singleton::getInstancia();
			//$this->_db = $singleton->_db;
			$this->_view = new View(new Request());
		}


	 	public function isPost()
    	{
	        return ($_SERVER['REQUEST_METHOD'] == 'POST');
	    }

	    public function isGet()
	    {
	        return ($_SERVER['REQUEST_METHOD'] == 'GET');
	    }



	    function redirect($page,$domain='')
	    {
	    	$varpage='';
	    	if(is_array($page))
	    	{
	    		$varpage = implode('/', $page);
	    	}else{
	    		$varpage = $page;
	    	}

	    	if($domain=='')
	    	{
	    		$domain = SERVER_NAME;
	    	}
	    
	    	header("location: " . "http://".$domain.$varpage.".html");
	    	exit;
	    }
	}

 ?>