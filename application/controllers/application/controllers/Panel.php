<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function __construct() {
        parent::__construct();   	 
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library("session");
		$this->load->helper("url");
		$this->load->model("base/data");
    }


	public function index()
	{
		
		if($this->session->userdata("idUser"))
        {
			// redirect('panel/logout');
			redirect('dashboard');
        }
		$this->load->view('panel/login_v');
	}

	public function auth()
	{
		if($this->input->post("username") === null) exit('No direct script access allowed');
		
		$username = strtolower(base64_decode($this->input->post("username")));
	 	$password = base64_decode($this->input->post("password"));
		$password = strtoupper(sha1($password));
	
		$result = $this->data->detail(
			"user",
			"*",
			"username = '{$username}' and password = '{$password}' " 
		);
		// echo $this->db->last_query();
		
		if(sizeof($result) == 0) 
		{
			echo "0";
			return;
		}
		$result = $result[0];
		
		$data = array(
			"idUser" => $result['idUser'],
			"nama" => $result['nama'],
			"peran" => $result['peran'],
			"username" => $result['username'],
			"password" => $result['password']
			
		);
		
		// $_SESSION['idUser']=$result['idUser'];
		// $_SESSION['username']=$result['username'];
		// $_SESSION['password']=$result['password'];
		$this->load->library("session");
		$this->session->set_userdata($data,"sipuja");
		
		// echo "1";
		echo json_encode($data);
		// var_dump($data);
	}

	public function logout()
	{
		$this->load->library("session");
		$this->load->helper("url");
		
		$this->session->sess_destroy();
		redirect("panel");
	}
}
