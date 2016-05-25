<?php 

	/**
	* 
	*/
	class Singleton
	{
		private static $_instancia;
		private $_data;

		//no se puede instanciar la clase
		private function __construct()
		{
		}

		public static function getInstancia(){

			if(!self::$_instancia instanceof self){
				self::$_instancia = new Singleton();
			}

			return self::$_instancia;
		}

		public function __set($name,$value){
			$this->_data[$name] = $value;
		}

		public function __get($name)
		{
			if(isset($this->data[$name]))
			{
				return $this->data[$name];
			}

			return false;
		}
	}


 ?>