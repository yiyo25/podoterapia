<?php 

	/**
	* 
	*/
	class ORM extends Database
	{
		protected static $cnx;
		//protected static $table;
		private static $primary_key;
		function __construct()
		{
			//self::$primary_key= $this->_primary_key;	
			self::getConexion();

			//echo self::$primary_key;
		}

		public static function getConexion(){
        	self::$cnx = Database::conectar();
	    }

	    public static function getDesconectar(){
	        self::$cnx = null;
	    }
		public  function create()
		{
			
			 $values =  $this->getColumnas();
			 
			//print_r($values);exit;
	        $filtered = null; // una variable que va almacenar las columnas
	        foreach ($values as $key => $value) {
	        	//echo $value;
	            // separa si es id - sino lo agrega al array
	            if ($value !== null && !is_integer($key) && $value !== '' && strpos($key, 'obj_') === false && $key !== 'id') {
	                if ($value === false) {
	                    $value = 0;
	                }
	                $filtered[$key] = $value;
	                //echo $key." - ".$value;
	            }
	            //echo $key."";
	        }
	        //exit;
	        $columns = array_keys($filtered); // obteniendo las columnas
	        //echo json_encode($columns);exit;

            $params = join(", :", $columns);
            $params = ":".$params;
            $columns = join(", ", $columns);
            $query = "INSERT INTO " . static ::$table . " ($columns) VALUES ($params)";
	
	        //echo $query;exit;
	        //preparamos la consulta
	        self::getConexion();
	        $res = self::$cnx->prepare($query);
	        foreach ($filtered as $key => &$val) {//cargamos todos los valores de los parametros
	            $res->bindParam(":".$key, $val);
	        }
	        //realizamos una respuesta
	        if($res->execute()){
	            //self::$id = self::$cnx->lastInsertId();
	            self::getDesconectar();
	            return true;
	        }else{
	        	echo "error al insertar dato";
	            return false;
	        }
		}

		public  function update(){
			// guardamos las columnas 
			$values = $this->getColumnas();
			$id = $values[0];
			$filtered = null;
			/*echo "<pre>";
			print_r($values);
			echo "</pre>";*/
			foreach ($values as $key => $value) {
				// separa si es id - sino lo agrega al array
				if ($value !== null && !is_integer($key) && $value !== '' && strpos($key, 'obj_') === false && $key !== 'id') {
	                if ($value === false) {
	                    $value = 0;
	                }
	                $filtered[$key] = $value;
	                //echo $key." - ".$value;
	            }
			}

			$columns = array_keys($filtered);

			$params = '';
			foreach ($columns as $columna) {
				$params .= $columna." = :".$columna.",";
			}

			$params =  trim($params,",");
	        $query = "UPDATE " . static ::$table . " SET $params WHERE id =" . $id;
	        self::getConexion();
	        $res = self::$cnx->prepare($query);
	        foreach ($filtered as $key => &$val) {//cargamos todos los valores de los parametros
	            $res->bindParam(":".$key, $val);
	        }
	        //realizamos una respuesta
	        if($res->execute()){
	            //self::$id = self::$cnx->lastInsertId();
	            self::getDesconectar();
	            return true;
	        }else{
	        	echo "error al actualizar dato";
	            return false;
	        }
		}

		public static function delete()
		{
			$values = static::getColumnas();
			$id = $values[0];
			
		}

		public static function all(){
	        $query = "SELECT * FROM ". static::$table ;
	        //echo $query;
	        $class= get_called_class();
	        self::getConexion();
	        $res = self::$cnx->prepare($query);
	        //$res->setFetchMode( PDO::FETCH_CLASS, $class);
	        $res->execute();
	        //$filas = $res->fetch();
	        //echo count($filas);
	        $arr = array();

	        foreach($res as $row){
	        	
	            $objs= new $class($row);
	            array_push($arr,$objs);
	        }
	        //self::getDesconectar();
	        return $arr;
	    }

	    public static function where($columna,$valor){
	        $query = "SELECT * FROM ". static::$table ." WHERE ".$columna." = :".$columna;
	        //echo $query;exit;
	        $class = get_called_class();
	        //echo $class;exit;
	        self::getConexion();
	        $res = self::$cnx->prepare($query);
	        $res->bindParam(":".$columna,$valor);
	        //$res->setFetchMode( PDO::FETCH_CLASS, $class);
	        $res->execute();
	        $arr = array();

	        foreach($res as $row){
	        	
	            $objs= new $class($row);
	            array_push($arr,$objs);
	        }
	        //self::getDesconectar();
	        return $arr;
	    }

	    public static function find($id){
	        //echo get_called_class();
	        $resultado = self::where(static::$_primary_key,$id);
	        //print_r($resultado);exit;
	        if(count($resultado)){
	            return $resultado[0];
	        }else{
	            return [];
	        }
	    }



		/*public static function getTable()
		{
			echo static ::$table;
		}*/
	}


 ?>