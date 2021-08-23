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
			<h3>Unidos - Aluguel de carros</h3>
			<div>
				<?php include "../components/Forms/SearchAvailableVehiclesForm/index.php" ?>
			</div>
		</div>
	</section>

	<section class="listAvailableVehicles">
		<h3>Escolha um grupo de veículos</h3>

		<ul id="vehicles-grid-list"></ul>
		</div>
	</section>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>