<?php 

class Updating extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	//tipe parameter yang digunakan
	public function update($table, $values, $where, $streamField = null)
	{
		$this->db->where($where);
		
		if(array_key_exists(0, $values)) //the $values would be array of array
		{
			if($streamField != null)
			$this->db->update_batch($table, $values, $streamField); //batch update
		}
		else $this->db->update($table, $values); //single update
	}
	public function manual($groupid, $itemid)
	{
		$this->db->set('groupid', $groupid);
		$this->db->set('postdate', date('Y-m-d H:i:s'));
		$this->db->where('itemid', $itemid);
		$this->db->update('nvt..dbmitem_itemattribute');
	}
}
?>