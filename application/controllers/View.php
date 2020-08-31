<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

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
        //$data=$this->input->get("id");
        $id=$this->input->get('id');
       // $data['logBook']=$this->Log_m->editData($id)->row_array();
        $keterangan = $data['logBook']=$this->Log_m->viewData($id)->row_array();
        $data['vuser']=$this->Log_m->vuser($id)->row_array();
        // echo $this->db->last_query();
        $data['catatan'] = $this->Log_m->detailData($id);
        $data['customer']=$this->Log_m->editCust($id)->row_array();
        $data['supplier']=$this->Log_m->editSupp($id)->row_array();


        $id2=$this->session->userdata("userId");
     
        $user=$this->Log_m->user($id2)->row_array();
        // echo "<pre>".$this->db->last_query()."</pre>"; die();
    
		$source = array(            
            'shang'       => "PT Kanisius",
            'user'        => $user
        );
        $this->load->view('core/shang_v',$source);
        $this->load->view('core/log/forms-detail',$data);
       // $this->load->view('core/xia_v');
	}

    public function detail($UserID){
        $data=$this->Log_m->detail_table($UserID);
        echo json_encode($data);        
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

    function send(){
        
        $logID           = $this->input->post('logID');
        $logTanggal1     = $this->input->post('logTanggal1');
        $userId          = $this->input->post('userId');
        $fuKeterangan    = $this->input->post('fuKeterangan');
        
        $data = array(
           
            "fuLogID"         => $logID,
            "fuTanggal"       => $logTanggal1,
            "fuUserID"        => $userId,
            "fuKeterangan"    => $fuKeterangan
        );

      $this->Log_m->send('tb_logbook_fu',$data);
      
    }

    function close(){
        
        $logID           = $this->input->post('logID');
        
        $data = array(
           
            "LogID"         => $logID
        );

        $data1 = array(
            "LogStatus"     => 'CLOSE'
        );
      $this->Log_m->close('tb_logbook',$data1,$data);
      
    }



	
    

	
}

