<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {

	public function __construct() {
        parent::__construct();   	 
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library("session");
		$this->load->helper("url");
		$this->load->model("Log_m");
		$this->load->model("base/data");
	
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
        $this->load->view('core/log/forms-controls');
        //$this->load->view('core/xia_v');
	}

//WO
    function table_wo_json(){
        $data       = $this->Log_m->table_wo()->result_array();
        ob_start("ob_gzhandler");
        echo json_encode($data);        
    }

    function table_wo_enter_json(){
        $WONomor       = $this->input->post('WONomor');
        $data = array(
            "logWO" => $WONomor
        );
        $data=$this->Log_m->table_wo_enter($WONomor)->result();
         ob_start("ob_gzhandler");
        echo json_encode($data);        
    }

//KodeKerja
    function table_kode_kerja_json(){
        $data       = $this->Log_m->table_kode_kerja()->result_array();
        ob_start("ob_gzhandler");
        echo json_encode($data);        
    }

    function table_kode_kerja_enter_json(){
        $kdKrjID       = $this->input->post('kdKrjID');
        $data = array(
            "logKodeKerja" => $kdKrjID
        );
        $data=$this->Log_m->table_kode_kerja_enter($kdKrjID)->result();
         ob_start("ob_gzhandler");
        echo json_encode($data);        
    }

//Customer
    function table_customer_json(){
        $data       = $this->Log_m->table_customer()->result_array();
        ob_start("ob_gzhandler");
        echo json_encode($data);        
    }

    function table_customer_enter_json(){
        $custID    = $this->input->post('custID');
        $data = array(
            "logCustID" => $custID
        );
        $data=$this->Log_m->table_customer_enter($custID)->result();
         ob_start("ob_gzhandler");
        echo json_encode($data);        
    }

//Supplier
    function table_supplier_json(){
        $data       = $this->Log_m->table_supplier()->result_array();
        ob_start("ob_gzhandler");
        echo json_encode($data);        
    }

    function table_supplier_enter_json(){
        $suppID    = $this->input->post('suppID');
        $data = array(
            "logSuppID" => $suppID
        );
        $data=$this->Log_m->table_supplier_enter($suppID)->result();
         ob_start("ob_gzhandler");
        echo json_encode($data);        
    }

//Operator
    function table_operator_json(){
        $data       = $this->Log_m->table_operator()->result_array();
        ob_start("ob_gzhandler");
        echo json_encode($data);        
    }
   
    function table_operator_enter_json(){
        $pegNoReg    = $this->input->post('pegNoReg');
        $data = array(
            "logPerson" => $pegNoReg
        );
        $data=$this->Log_m->table_operator_enter($pegNoReg)->result();
         ob_start("ob_gzhandler");
        echo json_encode($data);         
    }

//FID
function penyebab(){
	
    $key=$this->input->post('key');
    $data=$this->Log_m->penyebab($key)->result_array();

   
    ob_start("ob_gzhandler");
    echo json_encode($data);             
}

function table_penyebabInternal_json(){
    $data       = $this->Log_m->internal()->result_array();
    ob_start("ob_gzhandler");
    echo json_encode($data);        
}

function table_penyebabEksternal_json(){
    $data       = $this->Log_m->eksternal()->result_array();
    ob_start("ob_gzhandler");
    echo json_encode($data);        
}


function email($logCatatan,$url)
    {
        $pesan = $logCatatan.$url;
        $this->load->library('email');
        $config = array();
        $config['charset'] = 'utf-8';
        $config['useragent'] = 'Codeigniter';
        $config['protocol'] = "smtp";
        $config['mailtype'] = "html";
        $config['smtp_host'] = "mail.kanisiusmedia.co.id"; 
        $config['smtp_port'] = "587";
        $config['smtp_timeout'] = "20";
        $config['smtp_crypto'] = "tls";
        // $config['smtp_user'] = "crm@kanisiusmedia.co.id";
        // $config['smtp_pass'] = "knsApp2020"; 
        // $config['crlf'] = "\r\n";
        // $config['newline'] = "\r\n";
        // $config['wordwrap'] = TRUE;
        //   $this->email->initialize($config);
        // $this->email->set_newline("\r\n");
        //  $this->email->from('No-Reply@kanisiusmedia.co.id', 'Logbook');
        // $this->email->to("test_app@kanisiusmedia.co.id");
        // $this->email->subject("logbook");
        $config['smtp_user'] = "Logbook@kanisiusmedia.co.id"; 
        $config['smtp_pass'] = "projectLogBook2020"; 
        $config['crlf'] = "\r\n";
        $config['newline'] = "\r\n";
        $config['wordwrap'] = TRUE;
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from('Logbook@kanisiusmedia.co.id', 'Logbook');
        $this->email->to("percetakan@kanisiusmedia.co.id");
        $this->email->subject("LogBook");
        $this->email->message($pesan);
        $this->email->send();
    }
    

//submit
    function submit(){
        $userId          = $this->input->post('userId');
        $logWO           = $this->input->post('logWO');
        $logKodeKerja    = $this->input->post('logKodeKerja');
        $mulai           = $this->input->post('mulai');
        $selesai         = $this->input->post('selesai');
        $logHasil        = $this->input->post('logHasil');
        $logFID          = $this->input->post('logFID');
        $logCustID       = $this->input->post('logCustID');
        $logSuppID       = $this->input->post('logSuppID');
        $logPerson       = $this->input->post('logPerson');
        $logCatatan      = $this->input->post('logCatatan');

        $m = date('Y-m-d H:i:s',strtotime($mulai));
        $s = date('Y-m-d H:i:s',strtotime($selesai));
        
        $data = array(
            "logUserID"      => $userId,
            "logWO"          => $logWO,
            "logKodeKerja"   => $logKodeKerja,
            "logTanggal1"    => $m,
            "logTanggal2"    => $s,
            "logHasil"       => $logHasil,
            "logFID"         => $logFID,
            "logCustID"      => $logCustID,
            "logSuppID"      => $logSuppID,
            "logPerson"      => $logPerson,
            "logCatatan"     => $logCatatan
        );
        $data=$this->Log_m->submit_input('tb_logbook',$data);
        $LogID = $this->Log_m->LogID()->row_array();
        $url = "<br> <a href='" . base_url("view/?id=$LogID[logID]")."'>Detail Log Book</a>";

        $this->email($logCatatan,$url);
      
      
    }

     
    



	
}
