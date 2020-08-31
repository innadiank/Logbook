<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper("url");
		$this->load->model("base/data");
        $this->load->model("Log_m");
		$this->load->library("session");
        if(!$this->session->userdata("idUser"))
        {
            redirect('panel');
        }
    }

	public function index()
	{
        $id=$this->session->userdata("idUser");
     
        $user=$this->Log_m->user($id)->row_array();
        // echo "<pre>".$this->db->last_query()."</pre>"; die();
    
		$source = array(            
            'shang'       => "SIPUJA",
            'user'        => $user
        );
        $this->load->view('core/header_v',$source);
        $this->load->view('core/dashboard_v');
        $this->load->view('core/footer_v');
	}

    function table_log_json(){
        $username     = $this->session->userdata("username");
       // $data       = $this->Log_m->table_log($username)->result_array();
        // ob_start("ob_gzhandler");
        // echo json_encode($data);        
    }
}
