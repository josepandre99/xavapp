<?php

class six_kepengurusan extends CI_Model {

	public $table = 'six_kepengurusan';
	
	public function construct()
	{
		parent::__construct();
	}
	
	public function add($data)
	{	
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

        return $query;
	}
	
	public function get()
	{
		$query = $query = $this->db->get($this->table);

        return $query;
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
}
