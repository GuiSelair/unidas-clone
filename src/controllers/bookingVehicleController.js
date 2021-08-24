const disableAllVehicleLessSelected = () => {
	const allVehiclesAvailables = document.querySelectorAll(".triggerSelect");
	[...allVehiclesAvailables].forEach((vehicle) => {
		vehicle.addEventListener("click", (event) => {
			console.log(event.target.checked);

			[...allVehiclesAvailables].forEach((vehicleToDisable) => {
				if (event.target.checked && event.target.id !== vehicleToDisable.id) {
					vehicleToDisable.disabled = event.target.checked;
				}
			});
		});
	});
};

const toogle = (element) => {
	const check = element.checked;
	console.log(!check);
	element.checked = !check;
};

disableAllVehicleLessSelected();
