<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class anggota extends CI_Controller {

	function __construct() {
        parent::__construct();
        // Load Database
		$this->load->database();
		
		// Load Helpers
		$this->load->helper(array('form', 'url', 'six_func_debug', 'six_func_nav'));
									
		// Load session library
		$this->load->library('session');

		// Load Models
		$this->load->model(array('six_anggota', 'six_keluarga','six_tahun_kegiatan'));
    }


	public function index()
	{
		$data['doc_title'] = 'SI Xaverius';
		$this->load->view('anggota/indeks', $data);
	}
	
	public function daftar()
	{	
		$data['doc_title'] = 'SI Xaverius';
		$this->load->view('anggota/daftar', $data);
	}
	
	public function tambah()
	{		
		$data['doc_title'] = 'SI Xaverius';

		$data['list_tahun_kegiatan'] = $this->six_tahun_kegiatan->get();
		$data['list_keluarga'] = $this->six_keluarga->get_all();

		// dump($data);
		// die();
		$this->load->view('anggota/tambah', $data);
	}
	
	public function tambah_process()
	{		
		$data['doc_title'] = 'SI Xaverius';
		$this->load->view('anggota/tambah', $data);
	}
	
}
