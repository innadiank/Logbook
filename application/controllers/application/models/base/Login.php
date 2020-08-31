<?php 

class Login extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function logginIn($username, $password, $table)
	{
		$this->db->where('username', $username);
		$query = $this->db->get($table);
		$result = $query->result_array();
		if(sizeof($result) == 0)return 'Username tidak ditemukan';
		else
		{
			if($result[0]['userPass'] != $password) return 'Password salah';
			else return '';
		}
	}

	// public function logginIn($userId, $userPass, $table)
	// {
	// 	$this->db->where('userId', $userId);
	// 	$query = $this->db->get($table);
	// 	$result = $query->result_array();
	// 	if(sizeof($result) == 0)return 'Username tidak ditemukan';
	// 	else
	// 	{
	// 		if($result[0]['userPass'] != $password) return 'Password salah';
	// 		else return '';
	// 	}
	// }
}
?>