<form id="search-available-vehicles-form">
	<div class="date-time-input-container">
		<label for="rentalStartDate">Data e Hora de Retirada</label>
		<div>
			<div class="date-input">
				<input 
					type="date"
					name="rentalStartDate" 
					id="rentalStartDate" 
					placeholder="Escolha uma data"
					pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"
					max="2022-03-01"
					
				/>
			</div>
			<div class="time-input">
				<input 
					type="time" 
					name="rentalStartTime" 
					id="rentalStartTime"
					min="09:00"
					max="18:00"
					
				/>
			</div>
		</div>
	</div>
	<div class="date-time-input-container">
		<label for="rentalEndDate">Data e Hora de Devolução</label>
		<div>
			<div class="date-input">
				<input 
					type="date"
					name="rentalEndDate" 
					id="rentalEndDate" 
					placeholder="Escolha uma data"
					pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"
					max="2022-03-01"
					
				/>
			</div>
			<div class="time-input">
				<input 
					type="time" 
					name="rentalEndTime" 
					id="rentalEndTime"
					min="09:00"
					max="18:00"
					
				/>
			</div>
		</div>
	</div>
	<button 
		type="submit" 
		class="buttonSubmit search"
	>
		PESQUISAR
	</button>
</form>

<script type="module" src="../controllers/searchAvailableVehiclesController.js"></script>