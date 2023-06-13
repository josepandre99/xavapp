<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Indeks extends CI_Controller {

	public function index()
	{
		// Load Database
		$this->load->database();
		// Load Helpers
		$this->load->helper(array(	'form', 'url', 'six_func_debug', 
									'six_func_nav'));
		// Load session library
		$this->load->library('session');

		// Load Models
		
		$data['doc_title'] = 'Administrasi JABU';
		$this->load->view('view_indeks', $data);
	}

}

