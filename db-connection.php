<?php

Class DB {
	private $host = "localhost";
	private $username = "root";
	private $password = "root";
	private $database = "mvc_auth";
	private static $instance = NULL;

	private function __construct() {

	}
	private function __clone() {}

	public static function getInstance(){
		if(!isset(slef::$instance)){
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			//self::$instance = new PDO('mysql:host=' $host. ';dbname='.$database, $username, $password, $pdo_options);
			 self::$instance = new PDO('mysql:host=localhost;dbname=mvc_auth', 'root', 'root', $pdo_options);

		}

		return self::$instance;
	}
}
?>