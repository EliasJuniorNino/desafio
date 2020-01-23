<?php

class DBConnect {
	private $dsn = 'mysql:host=localhost;dbname=desafio';
	private $user = 'root';
	private $pass = '';
	private $pdo = '';
	private static $inst = null;

	function __construct(){
		$this->pdo = new PDO($this->dsn, $this->user, $this->pass);
	}

	static function getConnection(){
		return (new DBConnect())->pdo;
	}
}

?>
