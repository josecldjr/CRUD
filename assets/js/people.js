

//inicialização
$(document).ready(function(){
	// busca de inicialização
	getPeople({});

	// funcionalidade do botão de submit do formulário
	$('#search').submit(function(event){
		event.preventDefault();

		// armazena os campos do formulário de busca
		var search = $('#search').serializeArray();

		console.log('[app] Fazendo requisição ao servidor');
		
		getPeople(search);
		
	});

	// funcionalidade do botão de submit do formulário
	$('#create').submit(function(event){
		event.preventDefault();

		// armazena os campos do formulário de busca
		var create = $('#create').serializeArray();

		console.log('[app] Inserindo registro', create);
		
		insertPeople(create);
		
	});

	// funcionalidade do botão de submit do formulário
	$('#edit').submit(function(event){
		event.preventDefault();

		// armazena os campos do formulário de busca
		var create = $('#create').serializeArray();

		console.log('[app] Inserindo registro', create);
		
		insertPeople(create);
		
	});
 
	// funcionalidade dos botões de criar
	$('.act_create').on('click',function(){
		var idvalue = $(this).attr('idvalue');
		
		insertPeople({});
	});



});

function getPeople(filters){

	$.ajax({
		url:'api/people/list',
		type:'get',
		data:filters,
		success:function(r){
			 r = JSON.parse(r); 
			
			 // debug
			console.log('[app] Buscando pessoas, sucesso',r);			

			drawTable(r,'#content');
			$('#messages').html(' ');	
		},
		fail:function(){
			$('#messages').html(
				'<p class="alert alert-info">Falha na comunicação com o banco de dados</p>'
			);
			
			console.log('[app] Falha ao retornar pessoas');			
		}
	})

}


function drawTable(people, target){

	$(target).html(
	   '<table class="col-sm-12 card-body table table-sm table-striped table-hover table-collapsed container" >'+
		   '<thead class="col-sm-12">'+
			   '<th>#</th>'+
			   '<th>Data de Criação</th>'+
			   '<th>Nome</th>'+
			   '<th>email</th>'+
			   '<th>Telefone</th>'+
			   '<th>Celular</th>'+
			   '<th>Endereçao</th>'+
			   '<th>Tags</th>'+
			   '<th>Ações</th>'+
		   '</thead>'+
		   '<tbody id="tableContent" class="">'+
		   '</tbody>'+
	   '</table>'
	);
 


	for (var i = 0; i < people.length; i++){

		$(target + ' tbody')
			.append('<tr>')
				.append('<td>' + people[i].id + '</td>')
				.append('<td>' + people[i].creationTime + '</td>')
				.append('<td>' + people[i].name + '</td>')
				.append('<td>' + people[i].mail + '</td>')
				.append('<td>' + people[i].telephone + '</td>')
				.append('<td>' + people[i].cellphone + '</td>')
				.append('<td>' + people[i].address + '</td>')				
				.append('<td>' + people[i].tag + '</td>')
				.append('<td>' + 
						'<span class="badge badge-info 	 action-btn act_edit"   onclick="editPeople($(this).attr(\'idvalue\'));"  idvalue="' + people[i].id +'" >Editar</span>'+
						'<span class="badge badge-danger action-btn act_delete" onclick="deletePeople($(this).attr(\'idvalue\'));" idvalue="' + people[i].id +'" >Excluir</span>'
						+ '</td>')
			.append('</tr>');

	}

	console.log('[app] Imprimindo tabela',target);
	

}

function insertPeople(data){
	
	$.ajax({
		url:'api/people/create',
		data:data,
		type:'post',
		success:function(r){
			// r = JSON.parse(r);

			console.log(r);
			
			if (r == true){
				
			}
			else{
				 
				$('#messages').html('<p class="alert alert-info">Falha ao criar solicitação</p>');	
			}
			
			// atualiza a tabela
			var search = $('#search').serializeArray();
				
			getPeople(search);

			$('#messages').html(' ');
			alert('Registro adicionado');
		},
		fail:function(){
			$('#messages').html('<p class="alert alert-info">Falha ao criar solicitação</p>');
			alert('erro ao criar registro');
		}
	})
	
}

function deletePeople(id){
	
	$.ajax({
		url:'api/people/delete',
		data:{id:id},
		type:'post',
		success:function(r){
			// r = JSON.parse(r);

			console.log(r);
			
			if (r == true){
			 
			}
			else{
				$('#messages').html('<p class="alert alert-info">Falha ao criar solicitação</p>');	
			}
			
			// atualiza a tabela após a exclusão
			var search = $('#search').serializeArray();				
			getPeople(search);

			$('#messages').html('');
			alert('Registro excluído');
		},
		fail:function(){
			$('#messages').html('<p class="alert alert-info">Falha ao criar solicitação</p>');
			alert('falha ao deletar registro');
		}
	})
	
}

function editPeople(id){
	console.log('edit ', id);
	
}

function switchInsertionModal(){
	
	// reverte o estado de visibilidade da modal de inserção
	$('#insertion-modal').attr('hidden', !$('#insertion-modal').attr('hidden'))
  	
	
}

