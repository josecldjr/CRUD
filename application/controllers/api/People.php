<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		// biblioteca de validação de formulários
		$this->load->library('form_validation');
		$this->load->helper('form');	
		// model para gerenciamento de pessoas
		$this->load->model('people_model','peoplemodel');  
		
		
	}
 
	public function index()
	{
		
	 
    }
    
    public function List( ){

		// leitura de filtros via get
		$filters = [
			'name' 		=> $this->input->get('name'),
			'mail'		=> $this->input->get('mail'),
			'telephone' => $this->input->get('telephone'),
			'cellphone' => $this->input->get('cellphone'),
			'address'	=> $this->input->get('address')
			
		];

		// armazenamento de coneteúdo que será passado para a view
        $data['content'] = $this->peoplemodel->list($filters);
		
		// chama a view  que converte o resultado de content para JSON
        $this->load->view('api/export_json', $data);

	}
	
	public function create(){
		
		$people = [];

		// faz a leitura dos inputs 

			if ( $this->input->post('name') != ''){
				$people['name'] = $this->input->post('name');
			}
			else{
				$people['name'] = '';
			}

			if ( $this->input->post('mail') != ''){
				$people['mail'] = $this->input->post('mail');
			}	
			else{
				$people['mail'] = '';
			}

			if ( $this->input->post('telephone') != ''){
				$people['telephone'] = $this->input->post('telephone');
			}
			else{
				$people['telephone'] = '';
			}
			
			if ( $this->input->post('cellphone') != ''){
				$people['cellphone'] = $this->input->post('cellphone');
			}
			else{
				$people['cellphone'] = '';
			}
			
			if ( $this->input->post('address') != ''){
				$people['address'] = $this->input->post('address');
			}
			else{
				$people['address'] = '';
			}
			
			if ( $this->input->post('tag') != ''){
				$people['tag'] = $this->input->post('tag');
			}
			else{
				$people['tag'] = '';
			}
			
		// faz o insert no banco de dados
		$data['content'] = $this->peoplemodel->create($people);
			
		
		// chama a view  que converte o resultado de content para JSON
		$this->load->view('api/export_json', $data);
		
	}

	public function delete(){

		$id = $this->input->post('id');

		// armazenamento de coneteúdo que será passado para a view
        $data['content'] = $this->peoplemodel->delete($id);
		
		// chama a view  que converte o resultado de content para JSON
        $this->load->view('api/export_json', $data);


	}
}
