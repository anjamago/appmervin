<?php

class Views{
	public $view;
	public function loadView($view){
		if(isset($view))
			$this->view = $view;
		else
			$this->view = 'Errors';

		if(isset($this->view)){
			if(file_exists(PATCH_VIEWS.'/'.$this->view.'.php'))
				$set = 'una cadena';
				include  PATCH_VIEWS.'/'.$this->view.'.php';
		}else
			die('!!!Opps algo a pasado por favor intente de nuevo' );
	}
}
