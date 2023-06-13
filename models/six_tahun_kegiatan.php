<?php

class six_tahun_kegiatan extends CI_Model {

	public $table = 'six_tahun_kegiatan';
	
	public function construct()
	{
		parent::__construct();
		// Load session library
		$this->load->library('session');
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

	public function get()
	{
		$query = "
			SELECT * FROM ".$this->table." ORDER BY tahun_id DESC
		";
		
		$q = $this->db->query($query);
		
		if($q->num_rows())
		{
			$hasil = array($q->num_rows());
			
			foreach ($q->result_array() as $key) {
				$hasil[$key['tahun_id']] = $key;
			}

			return $hasil;
		}
		else
			return false;
	}
	
	public function get_active()
	{
		$query = "
			SELECT * FROM ".$this->table." WHERE active = 1
		";
		
		$q = $this->db->query($query);
		
		if($q->num_rows())
			return $q->result_array();
		else
			return false;
	}
	
	public function get_by_id($id)
	{
		$query = "
			SELECT * FROM ".$this->table." WHERE tahun_kegiatan = '".$id."'
		";
		
		$q = $this->db->query($query);
		
		if($q->num_rows())
			return $q->result_array();
		else
			return false;
	}
	
	public function checktahun($tahun)
	{
		$this->db->where('tahun_kegiatan', $tahun);
		$q = $this->db->get($this->table);
		
		$hasil = $q->row_array();

		if (isset($hasil))	
			return $hasil;
		else
			return false;
	}
	
	public function activate($id)
	{
		$this->db->set('active', '0', FALSE);
		$this->db->update($this->table);

		$data = array(
			'active' => '1',
			'sess_mod_user' => $this->session->userdata['logged_in']['username'],
			'sess_mod_date' => date('Y-m-d H:i:s'),
		);

		$this->db->where('tahun_id', $id);
		$q = $this->db->update($this->table, $data);
		
		return $q;
	}
	
	public function remove($id) 
    {
		$res = $this->db->delete($this->table, array('tahun_id' => $id));

		if($res)
			return true;
		else
			return false;
	}
}
