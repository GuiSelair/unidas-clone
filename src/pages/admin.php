<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Unidos - Aluguel de carros</title>
	<link rel="stylesheet" href="../styles/global.css">
	<link rel="stylesheet" href="../components/Header/styles.css">
	<link rel="stylesheet" href="../styles/pages/admin.css">
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</head>
<body>
	<?php include "../components/Header/index.php" ?>
	<section class="adminButtonsWrapper">
		<div>
			<h3>Painel admnistrativo </h3>
			<p>Cadastros</p>
			<div class="horizontalLabel adminButtons">
				<button type="button" class="buttonSubmit">Cadastrar modelo</button>
				<button type="button" class="buttonSubmit">Cadastrar veículos</button>
			</div>
		</div>
	</section>

	<section class="adminList">
		<h3>Listagem de todos veículos alugados</h3>
		
		<table>
			<thead>
				<tr>
					<th>Cliente</th>
					<th>Modelo</th>
					<th>Placa</th>
					<th>Retirada</th>
					<th>Devolução</th>
					<th>Valor Total</th>
					<th>Encerrar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Guilherme Selair</td>
					<td>Fiat Mobi</td>
					<td>ACD-495</td>
					<td>29/06/2021 às 20:00</td>
					<td>30/06/2021 às 20:00</td>
					<td class="price">R$132,00</td>
					<td>
						<button type="button" class="buttonSubmit">ENCERRAR</button>
					</td>
				</tr>
				<tr>
					<td>Guilherme Selair</td>
					<td>Fiat Mobi</td>
					<td>ACD-495</td>
					<td>29/06/2021 às 20:00</td>
					<td>30/06/2021 às 20:00</td>
					<td class="price">R$132,00</td>
					<td>
						<button type="button" class="buttonSubmit">ENCERRAR</button>
					</td>
				</tr>
				<tr>
					<td>Guilherme Selair</td>
					<td>Fiat Mobi</td>
					<td>ACD-495</td>
					<td>29/06/2021 às 20:00</td>
					<td>30/06/2021 às 20:00</td>
					<td class="price">R$132,00</td>
					<td>
						<button type="button" class="buttonSubmit">ENCERRAR</button>
					</td>
				</tr>
				<tr>
					<td>Guilherme Selair</td>
					<td>Fiat Mobi</td>
					<td>ACD-495</td>
					<td>29/06/2021 às 20:00</td>
					<td>30/06/2021 às 20:00</td>
					<td class="price">R$132,00</td>
					<td>
						<button type="button" class="buttonSubmit">ENCERRAR</button>
					</td>
				</tr>
				<tr>
					<td>Guilherme Selair</td>
					<td>Fiat Mobi</td>
					<td>ACD-495</td>
					<td>29/06/2021 às 20:00</td>
					<td>30/06/2021 às 20:00</td>
					<td class="price">R$132,00</td>
					<td>
						<button type="button" class="buttonSubmit bookingClose">ENCERRAR</button>
					</td>
				</tr>
			</tbody>
		</table>
	</section>

</body>
</html>