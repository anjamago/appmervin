<?php
/**
* 
*/

class Welcome extends Views{
	

	public function index(){
		//parent::view = 'Home';
		return parent::loadView('Home');
		
	}

	public function login()
	{
		parent::loadView('Login');
	}
}