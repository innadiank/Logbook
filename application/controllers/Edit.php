<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

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

        $id=$this->input->get('id');
        $keterangan = $data['logBook']=$this->Log_m->editData($id)->row_array();
        $data['vuser']=$this->Log_m->vuser($id)->row_array();
        $data['customer']=$this->Log_m->editCust($id)->row_array();
        $data['supplier']=$this->Log_m->editSupp($id)->row_array();

        $ket = substr($keterangan ["logFID"], 0,1);
        $data["ket"]=$this->Log_m->penyebab($ket);
        $id2=$this->session->userdata("userId");
     
        $user=$this->Log_m->user($id2)->row_array();
        // echo "<pre>".$this->db->last_query()."</pre>"; die();
    
		$source = array(            
            'shang'       => "PT Kanisius",
            'user'        => $user
        );
        $this->load->view('core/shang_v',$source);
        $this->load->view('core/log/forms-edit',$data);
        //$this->load->view('core/xia_v');
    }
    
    function penyebab(){
	
        $key=$this->input->post('key');
        $data=$this->Log_m->penyebab($key)->result_array();
    
       
        ob_start("ob_gzhandler");
        echo json_encode($data);    
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
    


    function submit(){
        
        $logID           = $this->input->post('logID');
        $logWO           = $this->input->post('logWO');
        $logKodeKerja    = $this->input->post('logKodeKerja');
        $logTanggal1     = $this->input->post('logTanggal1');
        $logTanggal2     = $this->input->post('logTanggal2');
        $logHasil        = $this->input->post('logHasil');
        $logFID          = $this->input->post('logFID');
        $logCustID       = $this->input->post('logCustID');
        $logSuppID       = $this->input->post('logSuppID');
        $logPerson       = $this->input->post('logPerson');
        $logCatatan      = $this->input->post('logCatatan');
        $userId          = $this->input->post('userId');

        $m = date('Y-m-d H:i:s',strtotime($logTanggal1));
        $s = date('Y-m-d H:i:s',strtotime($logTanggal2));
        
        $data = array(
           
            "logWO"         => $logWO,
            "logKodeKerja"  => $logKodeKerja,
            "logTanggal1"   => $m,
            "logTanggal2"   => $s,
            "logHasil"      => $logHasil,
            "logFID"        => $logFID,
            "logCustID"     => $logCustID,
            "logSuppID"     => $logSuppID,
            "logPerson"     => $logPerson,
            "logCatatan"    => $logCatatan,
            "logUserID"     => $userId
        );

        $where = array(
            "logID" => $logID
        );

      $this->Log_m->submit_edit('tb_logbook',$data,$where);
       $LogID = $this->Log_m->LogID()->row_array();
      $url = "<br> <a href='" . base_url("view/?id=$logID")."'>Detail Log Book</a>";

      $this->email($logCatatan,$url);
    }

	
}
