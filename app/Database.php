<?php 

	/**
	* 
	*/
	class Database //extends PDO
	{

		/*public function __construct($host, $dbname, $user, $pass, $char) {
	        parent::__construct(
	                'mysql:host=' . $host .
	                ';dbname=' . $dbname,
	                $user, 
	                $pass, 
	                array(
	                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . $char
	                    ));
	                
	    }*/


		public static function conectar(){
	        try {
	            $cn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS,
	                array(
	                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . DB_CHAR
	                    ));
	           
	            return $cn;
	        }catch (PDOException $ex){
	            die($ex->getMessage());
	        }
	    }

	    /*
	    */

	    public static function select($sql,$array=array(),$fetchMode = PDO::FETCH_ASSOC){

	    	// preparar nuestras sentencias

	    	$sth = $this->prepare($sql);

	    	foreach ($array as $key => $value) {
	    		$sth->binValue("$key",$value);
	    	}

	    	$sth->execute();

	    	return $sth->fetchAll($fetchMode);

	    }

	    public static function hola()
	    {
	    	echo "jngf";
	    }



	}

	

 ?>