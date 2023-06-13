<?php

class six_keluarga extends CI_Model {

	public $table = 'six_keluarga';
	
	public function construct()
	{
		parent::__construct();
	}
	
	public function add($data)
	{	
		$data['sess_ins_user'] = $this->session->userdata['logged_in']['username'];
		$data['sess_ins_date'] = date('Y-m-d H:i:s');

		if($this->db->insert($this->table, $data))
			return true;
		else
			return false;
	}
	
	public function edit()
	{
		/*	*/
		$query = $query = $this->db->get($this->table);

        return $query;
	}

	public function get_all()
	{
		$query = $query = $this->db->get($this->table);

        return $query->result_array();
	}
	
	public function get()
	{
		$query = $query = $this->db->get($this->table);

        return $query->result_array();
	}
	
	public function get_id($id)
	{
		$query = $this->db->get_where($this->table, array('id' => $id));

        return $query->result_array();
	}
	
	public function remove($id) 
    {
		$this->db->delete($this->table, array('id' => $id));
	}

	public function soft_delete($id) 
    {
		$this->db->where('kel_id', $id);
		$this->db->update('students', $data);

		$this->db->delete($this->table, array('id' => $id));
	}
}
