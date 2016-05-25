<?php 

	/**
	* 
	*/
	class Request
	{

		private $_controlador;
		private $_metodo;
		private $_argumentos;			
		private $_panel;
		public function __construct()
		{
			
			if(isset($_GET['url'])){

				$url = filter_input(INPUT_GET, 'url',FILTER_SANITIZE_URL);
				$url = explode('/', $url);
				$url = array_filter($url);	
							
		        if(isset($url[0]) && $url[0]!='')
		        {
		        	$name_controlador=$this->limpiar_var($url[0]);
		        }else{
		        	$name_controlador='index';
		        }

		        $this->_controlador=ucfirst(strtolower($name_controlador));

		        if(isset($url[1]))
		        {
		        	$this->_metodo=$this->limpiar_var($url[1]);
		        }else{
		        	$this->_metodo = "index";
		        }

		        if ($this->_metodo != "" && count($url) > 2) {
		            for ($i = 2; $i < count($url); $i++) {
		                if ($url[$i] != "") {
		                    $avar = explode(".", urldecode($url[$i])); /* removemos el .html */
		                    $avar = str_replace("'", "", $avar);
		                    $this->_argumentos[] = $avar[0];
		                }
		            }
	        	}
			}

			if(!$this->_controlador)
			{
				$this->_controlador = "Index";
			}

			if(!($this->_metodo))
			{
				$this->_metodo = "index";
			}
			
			if(!isset($this->_argumentos)){

				$this->_argumentos = array();
			}
		}

		public function getPanel()
		{
			return $this->_panel;
		}

		public function getControlador()
	    {
	        return $this->_controlador;
	    }
	    
	    public function getMetodo()
	    {
	        return $this->_metodo;
	    }
	    
	    public function getArgs()
	    {
	        return $this->_argumentos;
	    }

	    function limpiar_var($var) {
	        //echo urldecode($var)."<br>";
	        $avar = explode(".", urldecode($var));
	        $avar = str_replace("-", "", $avar);
	        $avar = str_replace("'", "", $avar);
	        return addslashes($this->limpiarCadenaGP($avar[0]));
    	}

	    function limpiarCadenaGP($valor) {
	        //echo $valor."<br>";
	        $codes = array("script", "java", "applet", "iframe", "object", "<", ">", ";", "'", "%", "style", "<form>", "SELECT", "COPY", "DELETE", "DROP", "DUMP", " OR ", "LIKE", "--", "\\", "^");
	        $valor = str_ireplace($codes, "", $valor);
	        return $valor;
    	}
	}


 ?>