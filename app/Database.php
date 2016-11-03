<?php 

	/**
	* 
	*/
	class Database //extends PDO
	{
		private $cn;
		private static $instancia;
		private function __construct() {
	         try {
	            $this->cn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS,
	                array(
	                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . DB_CHAR
	                    ));
	           
	           
	        }catch (PDOException $ex){
	            die($ex->getMessage());
	        }       
	    }


		public static function conectar(){
	        /*try {
	            $cn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS,
	                array(
	                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . DB_CHAR
	                    ));
	           
	            return $cn;
	        }catch (PDOException $ex){
	            die($ex->getMessage());
	        }*/

	        if (!isset(self::$instancia)) {
	            $miclase = __CLASS__;
	            self::$instancia = new $miclase;
	        } 
	        return self::$instancia;
	    }

	    /*
	    */

	    public  function selected($sql="",$array=array(),$fetchMode = PDO::FETCH_ASSOC){

	    	// preparar nuestras sentencias

	    	$sth = $this->prepare($sql);

	    	foreach ($array as $key => $value) {
	    		$sth->binValue("$key",$value);
	    	}

	    	$sth->execute();

	    	return $sth->fetchAll($fetchMode);

	    	//echo "sdfdsf";

	    }

	    /*function prepare($sql)
	    {
	    	return $this->cn->prepare($sql);
	    }*/

	    public static function hola()
	    {
	    	echo "jngf";
	    }



	}

	

 ?>