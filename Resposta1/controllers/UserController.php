<?php
require('../../DB/connect.php');
require('../../models/User.php');

class UserController {
	private $conn = null;
	private static $instance = null;

	function __construct(){
		$this->conn = DBConnect::getConnection();
	}

	public static function getInstance(){
			return new UserController();
	}

	function index(){
		$query = 'SELECT * FROM users';
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

	function store(){
		return false;
	}

	function show(){
		
	}

	function update(){
		
	}

	function destroy(){
		
	}
}

?>