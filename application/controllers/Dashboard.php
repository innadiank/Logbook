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
        if(!$this->session->userdata("userId"))
        {
            redirect('panel');
        }
    }

	public function index()
	{
        $id2=$this->session->userdata("userId");
     
        $user=$this->Log_m->user($id2)->row_array();
        // echo "<pre>".$this->db->last_query()."</pre>"; die();
    
		$source = array(            
            'shang'       => "PT Kanisius",
            'user'        => $user
        );
        $this->load->view('core/shang_v',$source);
        $this->load->view('core/log/list_v');
        $this->load->view('core/xia_v');
	}

    function table_log_json(){
        $UserID     = $this->session->userdata("userId");
        $data       = $this->Log_m->table_log($UserID)->result_array();
        // ob_start("ob_gzhandler");
        echo json_encode($data);        
    }
}
