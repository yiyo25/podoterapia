<?php 

	/**
	* 
	*/
	//require_once ROOT. 'vendor/twig/lib/twig/'
	class View 
	{
		private $_twig;
		private $_controller;
		function __construct(Request $peticion)
		{
			$this->_controller = $peticion->getControlador();
			
			$path_cache ='';
			$app= array();
			
			if(TIPO_PROYECT==='PANEL')
			{
				$path_view = PANEL_PATH_VIEW;
				$path_cache = PANEL_PATH_VIEW_CACHE;
				$app['twig']=array(
								'title' => 'Panel | adminitrador',
								'PATH_VIEW' =>"http://".$_SERVER['SERVER_NAME']."/panel/views/layout/default/"
						);
				

			}elseif(TIPO_PROYECT === 'WEB')
			{
				$path_cache = WEB_PATH_VIEW_CACHE;
				$path_view = WEB_PATH_VIEW;
				$app['twig']=array(
								'title' => 'Podoterapia',
								'PATH_VIEW' =>"http://".$_SERVER['SERVER_NAME']."/web/views/layout/default/"
						);
			}
			
			$loader = new Twig_Loader_Filesystem($path_view);
			$this->_twig = new Twig_Environment($loader, array(
			    'cache' => $path_cache,
			    'auto_reload' => true
			));

			$this->_twig->addGlobal("app",$app['twig']);
		}

		public function display($template,$param=array(),$controller='')
		{
			if($controller=='')
			{
				$loadTemplate = $this->_controller . DS .$template;	
			}else{
				$loadTemplate = $controller.DS.$template;
			}
			
			return $this->_twig->display($loadTemplate,$param);
		}

	}


 ?>