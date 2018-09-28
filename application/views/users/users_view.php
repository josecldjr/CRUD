
<!-- filters  -->
<div class="col-sm-12 card">

	<form id="search" class="col-sm-12 row filters-menu p-10">	
		
		<div class="col-sm-12 ">
			<h4>Pesquisar</h4>	
		</div>

		<div class="col-sm-12 col-md-3 ">
			<span>Nome</span>
			<input class="form-control" name="name" type="text" >
		</div>

		<div class="col-sm-12 col-md-3 ">
			<span>email</span>
			<input class="form-control" name="mail" type="text">
		</div>

		<div class="col-sm-12 col-md-3 ">
			<span>Tel</span>
			<input class="form-control" name="tel" type="text">
		</div>

		<div class="col-sm-12 col-md-3 ">
			<span>Cel</span>
			<input class="form-control" name="cel" type="text">
		</div>

		<div class="col-sm-12 col-md-3 ">
			<span>Endereço</span>
			<input class="form-control" name="address" type="text">
		</div>

		<div class="col-sm-12 col-md-3 ">
			<span>Tag</span>
			<select class="form-control custom-select" name="tag" type="text">
				<option value=""></option>
				<option value="Cliente">Cliente</option>
				<option value="Funcionário">Funcionário</option>
					<option value="Outro">Outro</option>
			</select>
		</div>

		<div class="col-sm-12 col-md-3 ">
			<br>
		 	<button class="btn btn-primary btn-sm" title="Pesquisar">
			 	<i class="material-icons">search</i>		 
			</button>
		</div>

	</form>

	<div class="col-sm-12  card">

		<div class="card-header row">
			<h4 class="float-left">Pessoas</h4>

			<div class="col-sm-12 float-right">
				<button type="button" class="btn btn-sm btn-primary" onclick="switchInsertionModal()" title="Adicionar pessoa"> 
					<i class="material-icons">person_add</i>
				</button>
			</div>
		</div>

		<div id="messages">

		</div>

		<div id="content" class="container">
			<table class="col-sm-12 card-body table table-sm table-striped table-hover table-collapsed container" >
				<thead class="col-sm-12">
					<th>#</th>
					<th>Data de Criação</th>
					<th>Nome</th>
					<th>email</th>
					<th>Telefone</th>
					<th>Celular</th>
					<th>Endereço</th>
					<th>Tags</th>
					<th>Ações</th>
				</thead>
				<tbody class="">
					 
				</tbody>
			</table>
		</div>
		
		

	</div>

	<script src="<?= base_url('assets/js/people.js') ?>"></script>
	<script>

	

		// drawTable( people,'content');

	 


		 
	</script>
	
</div>
