import env from "../config/env.js";

const rentalStartDateElement = document.getElementById("rentalStartDate");
const rentalStartTimeElement = document.getElementById("rentalStartTime");
const rentalEndDateElement = document.getElementById("rentalEndDate");
const rentalEndTimeElement = document.getElementById("rentalEndTime");
const formElement = document.getElementById("search-available-vehicles-form");
const listVehiclesElement = document.getElementById("vehicles-grid-list");

const setMinAndMaxInputsValues = () => {};

const addListenerSubmitInButtonSubmitForm = () => {
	formElement.addEventListener("submit", handleSubmit);
};

const getInputsValues = () => {
	const inputsValuesObject = {
		dataInicio: rentalStartDateElement.value,
		horaInicio: rentalStartTimeElement.value,
		dataFim: rentalEndDateElement.value,
		horaFim: rentalEndTimeElement.value,
	};

	return inputsValuesObject;
};

const insertElementsInVehiclesList = (vehiclesAvailables) => {
	vehiclesAvailables.forEach((vehicle) => {
		let someVehiclesNameAvailables = "";

		vehicle.veiculos.forEach((vehicleName, index) => {
			someVehiclesNameAvailables =
				index === 0
					? vehicleName
					: `${someVehiclesNameAvailables} | ${vehicleName}`;
		});

		const caracteristicas = vehicle.caracteristicas
			.map((caracteristica) => "<li>" + caracteristica + "</li>")
			.join(" ");

		listVehiclesElement.innerHTML += `
			<li class="vehicleAvailableCard">
				<div>
					<div class="vehicleDetails">
						<h4>${vehicle.nome}</h4>
						<p>${someVehiclesNameAvailables} | ou similares</p>
						<hr/>
						<button class="horizontalLabel" data-bs-toggle="modal" data-bs-target="#productMoreDetails-${vehicle.id}">
							<img src="../assets/circle-plus-icon.svg" alt="Veja mais detalhes"/>
							<span>mais detalhes</span>
						</button>
					</div>
					<div class="vehicleThumbnail">
						<img src="${vehicle.thumbnail}" alt="Veículo em destaque"/>
					</div>
				</div>
				<footer>
					<button class="buttonSubmit" style="font-weight=600" type="button" id="button-select-vehicle-${vehicle.id}">SELECIONAR</button>

					<div class="formPrice">
						<span class="moeda">R$</span>
						<strong>112,00</strong>
						<span class="pricePerPeriod">/diária</span>
					</div>
				</footer>
			</li>
			<div class="modal fade" id="productMoreDetails-${vehicle.id}" tabindex="-1" aria-labelledby="productMoreDetails-${vehicle.id}" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body moreDetailsContent">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							<h5 class="modal-title">Características do grupo</h5>
							<hr/>
							<h3>${vehicle.nome}</h3>
							<p>${someVehiclesNameAvailables} | ou similares</p>
							<ul class="characteristics">
								${caracteristicas}
							</ul>
							<button type="button" class="buttonSubmit closeProductMoreDetails" data-bs-dismiss="modal">OK</button>
						</div>
					</div>
				</div>
			</div>
		`;
	});
};

const handleSubmit = async (event) => {
	event.preventDefault();

	// const allInputsValues = getInputsValues();

	// FAZER VALIDAÇÃO DE DATA E HORA

	const responseRaw = await fetch(
		`${env.baseUrl}/buscaPorVeiculosDisponiveis`,
		{
			method: "GET",
			// body: JSON.stringify(allInputsValues),
		}
	);

	const vehiclesAvailables = await responseRaw.json();

	insertElementsInVehiclesList(vehiclesAvailables);
};

const initializeController = () => {
	setMinAndMaxInputsValues();
	addListenerSubmitInButtonSubmitForm();
};

initializeController();
