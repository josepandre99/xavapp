<?php

class Login extends CI_Model {

	public $table = 'login';
	
	//constructor
	
	public function construct()
	{
		parent::__construct();
	}
	
	public function select_all_users()
	{

		$this->db->from($this->table);
		$this->db->order_by("user_id", "asc");

		$q = $this->db->get(); 
		
		if($q->num_rows())
			return $q->result_array();
		else
			return false;
	}

	// Read data using username and password
	public function login_process($data) 
	{
		$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) 
			return true;
		else 
			return false;
		
	}

	// Read data from database to show data in admin page
	public function read_user_info($username) 
	{
		$condition = "username =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function tambah($data)
	{
		
		if($this->db->insert($this->table, $data))
			return true;
		else
			return false;
	}

	public function hapus_user($id)
	{
		$res = $this->db->delete($this->table, array('user_id' => $id));

		if($res)
			return true;
		else
			return false;
	}

	public function select_by_id ($id)
	{
		$this->db->where('user_id', $id);
		$q = $this->db->get($this->table);
		$hasil = $q->row_array();

		if (isset($hasil))	
			return $hasil;
		else
			return false;
	}

	public function ubah_user($data)
	{
		$this->db->where('user_id', $data['user_id']);

		if($this->db->update($this->table, $data))
			return true;
		else
			return false;
	}


}
