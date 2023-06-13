<?php

class Login_role extends CI_Model {

	public $table = 'login_role';
	
	//constructor
	public function construct()
	{
		parent::__construct();
	}
	
	
	public function select($where)
	{

		$this->db->from($this->table);
		if($where != '')
			$this->db->where($where);
		$this->db->order_by("role_id", "asc");

		$q = $this->db->get(); 
		
		if($q->num_rows())
		{
			$hasil = array($q->num_rows());
			
			foreach ($q->result_array() as $key) {
				$hasil[$key['role_id']] = $key;
			}

			return $hasil;
		}
		else
			return false;
		
	}



}

