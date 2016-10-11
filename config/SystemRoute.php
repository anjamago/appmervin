<?php

class Route
{
	private $controllers = array();
	
	function __construct($controller)
	{
		$this->controllers = $controller;

		// llamamos al metodo  que hace el preoceso de rutas
		self::submit();

	}

	public function submit()
	{
		@$uri = isset($_GET['uri'])?$_GET['uri']:'/';

		$paths = explode('/', $uri);

		if($uri == '/'){
			$res = array_key_exists('/',$this->controllers);
			if($res !='' && $res == 1)
			{
				foreach ($this->controllers as $key => $controller) {
					if($key == '/'){
						$controlador = $controller;
					}
				}
				$this->getController('index',$controlador);

			}
		}else{
			$estado = false;

			foreach ($this->controllers as $key => $value) {

				if(trim($key,'/') == $paths[0]){
					$estado = true;
					$controller = $value;
					$metodo = '';
					if(count($paths)>0){
						$metodo = $paths[0];
					}
					$this->getController($metodo,$controller);
				}
			}
			if($estado == false){
				die('error en la ruta');
			}

		}


	}

	public function getController($metodo,$controlador)
	{
		$metodoController = '';
		if($metodo == 'index'){
			$metodoController = 'index';
		}else{
			$metodoController=$metodo;
		}
		$this->incluirController($controlador);
		if (class_exists($controlador)) {
			$classTemp= new $controlador();
			
			if(is_callable(array($classTemp,$metodoController))){
				$classTemp->$metodoController();
			}else{
				die('no exite el metodo');
			}
			
		}

	}
	public function incluirController($controlador){
		if(file_exists(PATCH_APP.'/controllers/'.$controlador.'.php')){
			include_once PATCH_APP.'/controllers/'.$controlador.'.php';
		}else{
			die('error al cargar la pagina '.$controlador);
		}
	}
}