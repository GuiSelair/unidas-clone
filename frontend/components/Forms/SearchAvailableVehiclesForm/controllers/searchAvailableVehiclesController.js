const rentalStartDateElement = document.getElementById("rentalStartDate");
const rentalStartTimeElement = document.getElementById("rentalStartTime");
const rentalEndDateElement = document.getElementById("rentalEndDate");
const rentalEndTimeElement = document.getElementById("rentalEndTime");
const formElement = document.getElementById("search-available-vehicles-form");

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

const handleSubmit = async (event) => {
	event.preventDefault();

	const allInputsValues = getInputsValues();

	// FAZER VALIDAÇÃO DE DATA E HORA

	const responseRaw = await fetch("/backend/api/buscaPorVeiculosDisponiveis", {
		method: "POST",
		body: JSON.stringify(allInputsValues),
	});
	const vehiclesAvailables = await responseRaw.json();

	// INSERE NA LISTA DE VEICULOS OU AVISA QUE NENHUM FOI ENCONTRADO NESTA DATA
};

const initializeController = () => {
	setMinAndMaxInputsValues();
	addListenerSubmitInButtonSubmitForm();
};

initializeController();
