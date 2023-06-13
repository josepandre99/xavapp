<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tahun_kegiatan extends CI_Controller {

    function __construct() {
        parent::__construct();
        // Load Database
		$this->load->database();
		
		// Load Helpers
		$this->load->helper(array('form', 'url', 'six_func_debug', 'six_func_nav'));
									
		// Load session library
		$this->load->library('session');

		// Load Models
		$this->load->model(array('six_tahun_kegiatan'));
    }

    public function index() 
    {
        $data['doc_title'] = 'SI Xaverius';
        $data['tahun_kegiatan'] = $this->six_tahun_kegiatan->get();

        $this->load->view('tahun_kegiatan/indeks', $data);
    }

    public function tambah() 
    {
        if (!$this->six_tahun_kegiatan->checktahun($_POST['inputTahun'])) {
            $data_insert['tahun_kegiatan'] = $_POST['inputTahun'];
            $data_insert['active'] = 0;
            
            $this->six_tahun_kegiatan->add($data_insert);
        }

        $this->indeks();
    }

    public function activate() 
    {
        $this->six_tahun_kegiatan->activate($_POST['selectedTahun']);

        $this->indeks();
    }
}
