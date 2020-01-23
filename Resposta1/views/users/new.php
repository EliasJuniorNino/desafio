<?php
	require('../../controllers/UserController.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" 
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
		crossorigin="anonymous">
	<title>Novo cliente</title>
</head>
<body>
	<div class="container">
		<h1>Novo Usuario</h1>
		<form method="POST" action="new.php">
			<div class="form-group">
				<label for="inputName">Nome Completo</label>
				<input type="text" class="form-control" id="inputName" name="nome">
			</div>
			<div class="form-group">
				<label for="inputCPF">CPF</label>
				<input type="number" class="form-control" id="inputCPF" name="cpf">
			</div>
			<div class="form-group">
				<label for="inputDate">Data de nascimento</label>
				<input type="date" class="form-control" id="inputDate" name="nascimento">
			</div>
			<div class="form-group">
				<label for="inputEC">Sexo</label><br>
				<input type="radio" name="sexo" value="0" checked> Masculino<br>
				<input type="radio" name="sexo" value="1"> Feminino<br>
				<input type="radio" name="sexo" value="2"> Outro
			</div>
			<div class="form-group">
				<label for="inputEC">Estado Civil</label><br>
				<input type="radio" name="estado_civil" value="0" checked> Solteiro(a)<br>
				<input type="radio" name="estado_civil" value="1"> Casado(a)<br>
			</div>
			<div class="form-group">
				<label for="inputEmail">E-mail</label>
				<input type="email" class="form-control" id="inputEmail" name="email">
			</div>
			<div class="form-group">
				<label for="inputTel">Telefone de Contato</label>
				<input type="tel" class="form-control" id="inputTel" name="telefone">
			</div>
			<div class="form-group">
				<label for="inputAddress">Endereço</label>
				<input type="text" class="form-control" id="inputAddress" name="endereco">
			</div>
			<div class="form-group">
				<label for="inputCEP">CEP</label>
				<input type="text" class="form-control" id="inputCEP" name="cep">
			</div>
			<button type="submit" class="btn btn-primary">Criar</button>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>