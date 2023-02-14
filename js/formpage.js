	var addNewBtn = document.querySelector('#addMemberBtn')
	var addingWrapper = document.querySelector('#addingWrapper')
	var addingContent = `
		<div class="d-flex align-items-center gap-1 justify-content-between">
			<div style="width: 90%">
				<div class="mb-3">
					<div class="form-floating mb-2">
						<input type="text" class="form-control" name="name1" id="name1" placeholder="Name">
						<label for="memberID">Name</label>
					</div>
					<div class="form-floating">
						<select class="form-select" name="relation" id="relation"onchange="onSelectChange(this)">
							<option value="" disabled selected>Relation</option>
							<option value="Father">Father</option>
							<option value="Mother">Mother</option>
							<option value="Sister">Sister</option>
							<option value="Brother">Brother</option>
							<option value="Wife">Wife</option>
							<option value="Husband">Husband</option>
							<option value="Friend">Friend</option>
						</select>
						<label for="relation">Person Type</label>
					</div>
				</div>
			</div>
			<div>
				<button type="button" id="removeMemberBtn" onclick="rmfun(this)" class="btn btn-danger">-</button>
			</div>
		</div>
	`
	function addNewInnerRow(){
		document.querySelector('#addingWrapper').innerHTML += `
			<div class="d-flex align-items-center gap-1 justify-content-between">
				<div style="width: 90%">
					<div class="mb-3">
						<div class="form-floating mb-2">
							<input type="text" class="form-control" name="name1" id="name1" placeholder="Name">
							<label for="memberID">Name</label>
						</div>
						<div class="form-floating">
							<select class="form-select" name="relation" id="relation"onchange="onSelectChange(this)">
								<option value="" disabled selected>Relation</option>
								<option value="Father">Father</option>
								<option value="Mother">Mother</option>
								<option value="Sister">Sister</option>
								<option value="Brother">Brother</option>
								<option value="Wife">Wife</option>
								<option value="Husband">Husband</option>
								<option value="Friend">Friend</option>
							</select>
							<label for="relation">Person Type</label>
						</div>
					</div>
				</div>
				<div class="align-items-center d-flex flex-column justify-content-between">
					<button type="button" id="addMemberBtn" onclick="addfun(this)" class="btn btn-primary mb-1">+</button>
					<button type="button" id="removeMemberBtn" onclick="rmfun(this)" class="btn btn-danger">-</button>
				</div>
			</div>
		`
	}

	const personType = document.querySelector('#personType');
	const kidsType = document.querySelector('#kidsType');

	personType.addEventListener('change', (ev) => {
		console.log(ev.target.value);
	})

	// addNewBtn.addEventListener('click', (event) => {
	// 	addNewInnerRow()
	// })

	kidsType.addEventListener('change', (ev) => {
		console.log(ev.target.value);
		console.log(personType.value);
		let kT =  ev.target.value
		let pT =  personType.value
		if(kT == "With Kids" && pT == 'Single'){
			addNewInnerRow();
		}else if(kT == 'No Kids'){
			addingWrapper.innerHTML = null;
		}

	})



function rmfun(event) {
	event.parentNode.parentNode.remove();
}
function addfun(event) {
	addNewInnerRow();
}


