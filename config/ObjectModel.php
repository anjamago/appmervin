<?php

class ObjetModel {
	
	private $user;
	private $pass;
	private $database;
	private $host;
	private $set;
	private $conexion;

	public function __construct($user = null,$pass = null,$database = null, $host = null,$set = null , $devModel = false){
		
			$this->user = $devModel == false ?_DB_USER_:$user;
			$this->pass = $devModel == false ?_DB_PASS_:$pass ;
			$this->database =$devModel == false ? _DB_DATABASE_:$database;
			$this->host = $devModel == false ?_DB_HOST_:$host;
			$this->set = $devModel == false ?_DB_SET_:$set;

			$this->conexion = mysql_connect($this->user,$this->pass,$this->host);
			mysql_select_db($databse);
			mysql_set_charset($set);
		
	}
}