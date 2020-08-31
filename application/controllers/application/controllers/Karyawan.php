<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper("url");
		$this->load->model("base/data");
        $this->load->model("Karyawan_m");
        $this->load->library("form_validation");
        $this->load->library("session");
        if(!$this->session->userdata("idUser"))
        {
            redirect('panel');
        }
    }

//tabel
    public function index()
	{
        $id=$this->session->userdata("idUser");
     
        //$user=$this->Karyawan_m-->user($id)->row_array();
        // echo "<pre>".$this->db->last_query()."</pre>"; die();
        $data["karyawan"] = $this->Karyawan_m->getAll();
		$source = array(            
            'shang'       => "SIPUJA"
            // ,
            // 'user'        => $user
        );
        $this->load->view('core/header_v',$source);
        $this->load->view('karyawan/list');
        $this->load->view('core/footer_v');
	}

    function table_karyawan_json(){
        $data       =  $this->Karyawan_m->getAll();
        // ob_start("ob_gzhandler");
        echo json_encode($data);        
    }

//input
    public function add()
    {
        $karyawan = $this->Karyawan_m;
        $validation = $this->form_validation;
        $validation->set_rules($karyawan->rules());

        if ($validation->run()) {
            $karyawan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("karyawan/add");
    }

//edit
    public function edit($id = null)
    {
        if (!isset($id)) redirect('karyawan/edit');
       
        $karyawan = $this->Karyawan_m;
        $validation = $this->form_validation;
        $validation->set_rules($karyawan->rules());

        if ($validation->run()) {
            $karyawan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["karyawan"] = $karyawan->getById($id);
        if (!$data["karyawan"]) show_404();
        
        $this->load->view("karyawan/edit", $data);
    }

//delete
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Karyawan_m->delete($id)) {
            redirect(site_url('karyawan/list'));
        }
    }
}