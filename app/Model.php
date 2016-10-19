<?php 
	
	//namespace App;
	/**
	* 
	*/
	class Model extends ORM
	{
		
		private  $data = array();
	    protected static $table;
	    public static $_primary_key;
	    //private $_registry;
	    //protected $_db;
	    function __construct($data = null)
	    {
	    	
	       	$this->data = $data;


	       	//$this->datos = $data;
	    
	    }

	   	public function __get($name)
	    {
	    	
	        if (array_key_exists($name, $this->data)) {
	            return $this->data[$name];
	        }
	    }

	    public function __set($name, $value)
	    {

	        $this->data[$name] = $value;
	    }
	    public  function getColumnas(){

	    	
	        return $this->data;
	    }

	}


 ?>