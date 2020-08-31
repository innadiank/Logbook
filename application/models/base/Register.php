<?php 

class Register extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function input($table, $values)
	{
		if(array_key_exists(0, $values)) $this->db->insert_batch($table, $values); //batch insert
		else $this->db->insert($table, $values); //single insert
		
		//return $this->db->affected_rows();
		/*
		-------how to use-----
		$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'tanggal' => $this->input->post('date'),
					'email' => $this->input->post('email'),
					'alamat' => $this->input->post('alamat'),
					'pos' => $this->input->post('pos')
				);
		$table = 'pelanggan'
		
		$this->register->input($table, $data);
		*/
	}
	
	public function getGeneratedQuery($table, $values)
	{
		return $this->db->set($values)->get_compiled_insert($table);
	}
	
	public function manual($itemid, $groupid)
	{
		$this->db->set('itemid', $itemid);
		$this->db->set('groupid', $groupid);
		$this->db->set('postdate', date('Y-m-d H:i:s'));
		$this->db->insert('dbmitem_itemattribute');  // Produces: INSERT INTO mytable (`name`) VALUES ('{$name}')
	}
}
?>