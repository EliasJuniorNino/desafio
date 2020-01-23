<?php

class User {
	public $cpf = "";
	public $password = "";
	public $email = "";
	public $nome = "";
	public $nascimento = "";
	public $sexo = "";
	public $estadoCivil = "";
	public $telefone = "";
	public $endereco = "";
	public $cep = "";

	function __construct($data){
		$this->nome = "Elias";
	}
}

?>