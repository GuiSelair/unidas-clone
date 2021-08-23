<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Unidos - Aluguel de carros</title>
	<link rel="stylesheet" href="../styles/global.css">
	<link rel="stylesheet" href="../components/Header/styles.css">
	<link rel="stylesheet" href="../styles/pages/cadastro.css">
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</head>
<body>
	<?php include "../components/Header/index.php" ?>
	<section class="linkToLoginWrapper">
		<div>
			<h3>Já tem uma conta? </h3>
			<a href="./login.php" class="buttonSubmit linkToLogin">FAÇA O LOGIN</a>
		</div>
	</section>
	<section class="registerContent">
		<h3>Complete seus dados pessoais</h3>
		<form method="POST">
			<label for="cadastro-cpf">CPF</label>
			<input class="input" type="text" name="cpf" id="cadastro-cpf">

			<label for="cadastro-fullname">NOME COMPLETO</label>
			<input class="input" type="text" name="nomeCompleto" id="cadastro-fullname">

			<label for="cadastro-password">SENHA</label>
			<input class="input" type="password" name="senha" id="cadastro-password">

			<span>* Todos os campos são obrigatórios</span>

			<div class="">
				<i class="iconify" data-icon="akar-icons:circle-alert" style="color: #ff5050;"></i>
				<span id="error-description"></span>
			</div>

			<button class="buttonSubmit" type="submit">CADASTRAR</button>
		</form>
	</section>


</body>
</html>