<?php 
	
	//namespace App;
	/**
	* 
	*/
	class Model extends ORM
	{
		
		private static $data = array();
	    protected static $table;
	    public static $_primary_key;
	    private $_registry;
	    protected $_db;
	    function __construct($data = null)
	    {
	       	self::$data = $data;
	    
	    }

	   	public function __get($name)
	    {
	        if (array_key_exists($name, self::$data)) {
	            return self::$data[$name];
	        }
	    }

	    public function __set($name, $value)
	    {
	        self::$data[$name] = $value;
	    }

	    public static function getColumnas(){
	        return self::$data;
	    }

	}


 ?>