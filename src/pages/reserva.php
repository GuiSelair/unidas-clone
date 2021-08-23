<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Unidos - Aluguel de carros</title>
	<link rel="stylesheet" href="../styles/global.css">
	<link rel="stylesheet" href="../components/Header/styles.css">
	<link rel="stylesheet" href="../components/Forms/SearchAvailableVehiclesForm/styles.css">
	<link rel="stylesheet" href="../styles/pages/home.css">
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
</head>
<body>
	<?php include "../components/Header/index.php" ?>
	<section class="searchAvailableVehiclesWrapper">
		<div>
			<h3>Alugue um carro</h3>
			<div>
				<?php include "../components/Forms/SearchAvailableVehiclesForm/index.php" ?>
			</div>
		</div>
	</section>

	<section class="listAvailableVehicles">
		<h3>Resumo da reserva</h3>

		<article>
			<h4>Datas</h4>
			<div>
				<img src="../assets/data-inicio-icon.svg"/>
				<span>Retirada</span>
				<strong>29/06/2021 às 20:00</strong>
			</div>
			<div>
				<img src="../assets/data-fim-icon.svg"/>
				<span>Devolução</span>
				<strong>30/06/2021 às 20:00</strong>
			</div>
		</article>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>