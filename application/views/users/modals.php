<div id="insertion-modal" hidden>
	<form id="create" class="col-sm-10 offset-sm-1 card" id="modal-content" >

		<div class="col-sm-12 card-header">
			<h4>
				Adicionar novo registro 
					
				<span class="float-right action-btn" onclick="switchInsertionModal()">	
					<i class="material-icons">close</i>
				</span>
			</h4>
				
				
		</div>

		<div class="col-sm-12 card-body">
			<div class="col-sm-12 col-md-3 float-left">
				<span>Nome</span>
				<input class="form-control" name="name" type="text">
			</div>

			<div class="col-sm-12 col-md-3 float-left">
				<span>email</span>
				<input class="form-control" name="mail" type="text">
			</div>

			<div class="col-sm-12 col-md-3 float-left">
				<span>Tel</span>
				<input class="form-control" name="telephone" type="text">
			</div>

			<div class="col-sm-12 col-md-3 float-left">
				<span>Cel</span>
				<input class="form-control" name="cellphone" type="text">
			</div>

			<div class="col-sm-12 col-md-3 float-left">
				<span>Endereço</span>
				<input class="form-control" name="address" type="text">
			</div>

			<div class="col-sm-12 col-md-3 float-left">
				<span>Tag</span>
				<select class="form-control custom-select" name="tag" type="text">
					<option value=""></option>
					<option value="Cliente">Cliente</option>
					<option value="Funcionário">Funcionário</option>
					<option value="Outro">Outro</option>
				</select>
			</div>

			<div class="col-sm-12 col-md-3 float-left">
				<br>
				<button id="act_create" class="btn btn-sm btn-primary " onclick="console.log('asdas')">
					<i class="material-icons">add</i>
				</button>
			</div>
			
		</div>

	</div>	
</div>

