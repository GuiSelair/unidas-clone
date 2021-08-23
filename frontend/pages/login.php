<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Unidos - Aluguel de carros</title>
	<link rel="stylesheet" href="../styles/global.css">
	<link rel="stylesheet" href="../components/Header/styles.css">
	<link rel="stylesheet" href="../styles/pages/login.css">
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</head>
<body>
	<?php include "../components/Header/index.php" ?>
	<section class="linkToRegisterWrapper">
		<div>
			<h3>Ainda não tem uma conta? </h3>
			<a href="./cadastro.php" class="buttonSubmit linkToRegister">CRIE SUA CONTA</a>
		</div>
	</section>
	<section class="loginContent">
		<h3>Faça seu login</h3>
		<form method="POST">
			<label for="login-cpf">CPF</label>
			<input class="input" type="text" name="cpf" id="login-cpf">

			<label for="login-password">SENHA</label>
			<input class="input" type="password" name="senha" id="login-password">

			<div class="">
				<i class="iconify" data-icon="akar-icons:circle-alert" style="color: #ff5050;"></i>
				<span id="error-description"></span>
			</div>

			<button class="buttonSubmit" type="submit">ENTRAR</button>
		</form>
	</section>


</body>
</html>