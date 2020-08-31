<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

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
        // $data       = $this->Log_m->report()->result_array();
        $this->load->view('core/log/forms-report');
        // $this->load->view('core/xia_v');
	}

    function report_json(){
        $data       = $this->Log_m->report()->result_array();
        // ob_start("ob_gzhandler");
        echo json_encode($data);        
    }

    //FID
    function penyebab(){
        
        $key=$this->input->post('key');
        $data='';
        if(!$key==''){
        $data=$this->Log_m->penyebab($key)->result_array();
    }
    
        ob_start("ob_gzhandler");
        echo json_encode($data);             
    }

    function search(){
        
       
        $logTanggal1     = $this->input->post('logTanggal1');
        $logTanggal2     = $this->input->post('logTanggal2');
        $logFID          = $this->input->post('logFID');
        $ket             = $this->input->post('ket');

        $m = date('Y-m-d H:i:s',strtotime($logTanggal1));
        $s = date('Y-m-d H:i:s',strtotime($logTanggal2));
        
        $data=$this->Log_m->search_report($m,$s,$ket,$logFID);
        // ob_start("ob_gzhandler");
        echo json_encode($data);    
      
    }

}
