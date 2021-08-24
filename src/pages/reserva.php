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
	<link rel="stylesheet" href="../styles/pages/reserva.css">
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

	<form class="bookingSummary">
		<h3>Resumo da reserva</h3>

		<h4>Datas</h4>
		<article class="bookingDates">
			<div>
				<div class="horizontalLabel">
					<img src="../assets/data-inicio-icon.svg"/>
					<span>Retirada</span>
				</div>
				<strong>29/06/2021 às 20:00</strong>
			</div>
			<div>
				<div class="horizontalLabel">
					<img src="../assets/data-fim-icon.svg"/>
					<span>Devolução</span>
				</div>
				<strong>30/06/2021 às 20:00</strong>
			</div>
		</article>

		<h4>Selecione seu veículo</h4>
		<article class="selectVehicle">
			<!-- FOREACH PHP (LISTAR TODOS OS VEICULOS DA CATEGORIA QUE ESTÃO DISPONIVEIS) -->
			<section class="bookingVehicleCard">
				<input class="triggerSelect" type="checkbox" name="kwid" id="2">
				<label for="2" class="bookingVehicleAvailable">
					<div class="check"></div>

					<img src="../assets/kwid.png" alt="Renault Kwid" />
					<strong>Renault Kwid</strong>
				</label>
			</section>
			<section class="bookingVehicleCard">
				<input class="triggerSelect" type="checkbox" name="kwid1" id="3">
				<label for="3" class="bookingVehicleAvailable">
					<div class="check"></div>

					<img src="../assets/kwid.png" alt="Renault Kwid" />
					<strong>Renault Kwid</strong>
				</label>
			</section>
		</article>

		<h4>Subtotal</h4>
		<table class="bookingSubtotal">
			<tbody>
				<tr>
					<td>
						Quantidade de diárias:
					</td>
					<td>1</td>
				</tr>
				<tr>
					<td>
						Valor da diária:
					</td>
					<td>R$112,00</td>
				</tr>
				<tr>
					<td>
						Seguro:
					</td>
					<td>R$20,00</td>
				</tr>
				<tr>
					<td class="bookingSubtotalPrice">
						TOTAL:
					</td>
					<td class="bookingSubtotalPrice">R$132,00</td>
				</tr>
			</tbody>	
		</table>
		
		<button class="buttonSubmit bookingSubmit">RESERVAR</button>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- <script src="../controllers/bookingVehicle.js"></script> -->
</body>
</html>