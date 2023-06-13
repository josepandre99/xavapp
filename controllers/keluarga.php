<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class keluarga extends CI_Controller {

	function __construct() {
        parent::__construct();
        // Load Database
		$this->load->database();
		
		// Load Helpers
		$this->load->helper(array('form', 'url', 'six_func_debug', 'six_func_nav', 'six_func_date'));
									
		// Load session library
		$this->load->library('session');

		// Load Models
		$this->load->model(array('six_keluarga'));
    }


	public function index()
	{
		$data['doc_title'] = 'SI Xaverius';
		$this->load->view('keluarga/indeks', $data);
	}
	
	public function daftar()
	{	
		$data['doc_title'] = 'SI Xaverius';
		$data['list_keluarga'] = $this->six_keluarga->get_all();
		$this->load->view('keluarga/daftar', $data);
	}
	
	public function tambah()
	{	
		$data['doc_title'] = 'SI Xaverius';
		$this->load->view('keluarga/tambah', $data);
	}

	public function tambah_process()
	{	
		$data_insert['kel_nama'] = $_POST['namaKeluarga'];
		$data_insert['kel_awal_masuk'] = join('-', array_reverse(explode('/', $_POST['tanggalMasuk'])));
		$data_insert['kel_no_kk'] = $_POST['noKK'];
		$data_insert['kel_kepala'] = $_POST['kepalaKeluarga'];

		$this->six_keluarga->add($data_insert);

		$data['doc_title'] = 'SI Xaverius';
		$this->load->view('keluarga/tambah', $data);
	}
	
	public function hapus()
	{	
		dump($_POST['idKeluarga']);

		die();
		$data['doc_title'] = 'SI Xaverius';
		$this->load->view('keluarga/tambah', $data);
	}
	
}
