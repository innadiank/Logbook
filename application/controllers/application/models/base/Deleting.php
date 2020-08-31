<?php 

class Deleting extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function deleteData($table, $where)
	{
		$this->db->where($where);
		$this->db->delete($table);
		/*
		-----how to use-----
		$where = "`id` = '" . $this->input->post('id') . "'";
		$this->deleting->deleteData('paket', $where);
		*/
	}
}
?>