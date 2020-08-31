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
		
		if($this->session->userdata("userId"))
        {
            redirect('dashboard');
        }
		$this->load->view('panel/login_v');
	}

	public function auth()
	{
		if($this->input->post("userId") === null) exit('No direct script access allowed');
		
		$username = strtolower(base64_decode($this->input->post("userId")));
	 	$password = base64_decode($this->input->post("userPass"));
		$password = strtoupper(md5($password));
	
		$result = $this->data->detail(
			"tb_user",
			"*",
			"userId = '{$username}' and userPass = '{$password}' and userStatus = 'Y' " 
		);
		//  echo $this->db->last_query();
		
		if(sizeof($result) == 0) 
		{
			echo "0";
			return;
		}
		$result = $result[0];
		
		$data = array(
			"userId" => $result['userId'],
			// "pegNama" => $result['pegNama'],
			"userPass" => $result['userPass'],
			"userGudangId" => $result['userGudangId'],
			"userStatus" => $result['userStatus'],
			"userKasId" => $result['userKasId'],
			"userPOSCustId" => $result['userPOSCustId'],
			"userPopFaktur" => $result['userPopFaktur'],
			"userPopKRC" => $result['userPopKRC']
			
		);
		
		$_SESSION['userId']=$result['userId'];
		// $_SESSION['pegNama']=$result['pegNama'];
		$_SESSION['userPass']=$result['userPass'];
		$this->load->library("session");
		$this->session->set_userdata($data,"nirwana");
		
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
