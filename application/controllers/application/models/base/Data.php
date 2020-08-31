<?php 

class Data extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	//tipe parameter yang digunakan
	//1 param: nama tabel
	//2 param: nama table, field yang diselect
	//3 param: nama table, field yang diselect, where clause
	//4 param: nama table, field yang diselect, limit, start
	//5 param: nama table, field yang diselect, where clause, limit, start
	public function detail($param = null)
	{
		//$this->db->distinct();
		$var = func_get_args();
		if(sizeof($var) == 1)
		{
			return $this->db->get($var[0])->result_array();
		}
		else if(sizeof($var) == 2)
		{
			$this->db->select($var[1]);
			return $this->db->get($var[0])->result_array();
		}
		else if(sizeof($var) == 3)
		{
			$this->db->select($var[1]);
			$this->db->where($var[2]);
			return $this->db->get($var[0])->result_array();
		}
		else if (sizeof($var) == 4)
		{
			$this->db->select($var[1]);
			$this->db->limit($var[2], $var[3]);
			return $this->db->get($var[0])->result_array();
		}
		else if (sizeof($var) == 5)
		{
			$this->db->select($var[1]);
			$this->db->where($var[2]);
			$this->db->limit($var[3], $var[4]);
			return $this->db->get($var[0])->result_array();
		}
		/*
		-----how to use-----
		$table = array(0 => 'pelanggan pe', 1 => 'paket pa', 2 => 'pelanggan_paket pp');
		
		$field = array(0 => 'pa.nama as nama', 1 => 'pa.harga as harga', 2 => 'pa.id as id');
		
		$where = "`pp`.`username` = `pe`.`username` and `pa`.`id` = `pp`.`id` and  `pe`.`username` =  '" . $nama[$i]['username'] . "'";
		
		if every variable consist only 1 clause, no need to use an array
		*/
	}
	
	public function setDistinct()
	{
		$this->db->distinct();
	}
	
	public function order($field, $order)
	{
		$this->db->order_by($field, $order);
	}
	
	public function group($fields)
	{
		$this->db->group_by($field);
	}
}
?>