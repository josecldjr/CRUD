<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class people_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
    
    public function list ($filters, $format = 'json'){

		// construção da query
		$this->db->where('deleted = 0');// (apenas elementos que não foram deletados por exclusão lógica)
		$this->db->select('id,creationTime, name, mail, telephone, cellphone, address, tag'); 
		$this->db->from('tb_people');

		//filtros 
			if ( isset($filters['name']) ){
				$this->db->where('name like',	'%'.$filters['name'].'%' );
			}

			if ( isset($filters['mail']) ){
				$this->db->where('mail like',	'%'.$filters['mail'].'%' );
			}

			if ( isset($filters['telephone']) ){
				$this->db->where('telephone like',	'%'.$filters['telephone'].'%' );
			}

			if ( isset($filters['cellphone']) ){
				$this->db->where('cellphone like',	'%'.$filters['cellphone'].'%');
			}

			if ( isset($filters['address']) ){
				$this->db->where('address like',	'%'.$filters['address'].'%' );
			}

			
		// retorno
			
			// armazena o resultado em uma variável
			$result = $this->db->get()->result();	
			
			// retorna o resultado
			return $result;
	}
		
	public function create($people){
 
			 
		$return = $this->db->insert('tb_people', $people);

		return $return;
	}

	public function delete($id){

		$this->db->set('deleted', 1);
		$this->db->where('id', $id);
		$this->db->update('tb_people');
	}

}
