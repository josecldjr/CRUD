<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
 
	public function index()
	{
		$this->load->view('template/html_header');
		$this->load->view('template/header');
		$this->load->view('users/users_view');
		$this->load->view('users/modals'); 
		$this->load->view('template/footer');
		$this->load->view('template/html_footer');
	}

	
}
