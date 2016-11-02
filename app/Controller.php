<?php

	/**
	* 
	*/
	//namespace Contralador;
	class Controller
	{
		protected $_view ;
		private $_registry;
    	protected $_db;
		public function __construct()
		{
			$this->_registry = Singleton::getInstancia();
			$this->_db = $this->_registry->_db;
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