<?php 

	/**
	* 
	*/
	class Bootstrap
	{
		
		public static function run(Request $peticion,$panel='')
		{
			//$panel = $peticion->getPanel();
			$controller = $peticion->getControlador().'Controller';
			$metodo = $peticion->getMetodo().'Action';
			$args = $peticion->getArgs();
			//echo $controller;
			if($panel){
				//echo "a";Exit;
				$rutaControlador = ROOT_PANEL . 'controllers' . DS .$controller.'.php';
			}else{
				$rutaControlador = WEB_PATH . 'controllers' . DS .$controller.'.php';
			}
			
			//echo $rutaControlador;
			if(is_readable($rutaControlador)){

				require_once $rutaControlador;

				$controlador = new $controller;

				if(is_callable(array($controlador,$metodo))){
					$metodo = $peticion->getMetodo().'Action';
				}else{
					$metodo = 'indexAction';
				}

				if(isset($args)){
					call_user_func_array(array($controlador,$metodo), $args);
				}else{
					call_user_func(array($controlador,$metodo));
				}
			}else{
				throw new Exception('No encontrado');
				
			}
		}
	}


 ?>