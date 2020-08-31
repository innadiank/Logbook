<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper("url");
		$this->load->model("base/data");
        $this->load->model("Barang_m");
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
     
        //$user=$this->Barang_m-->user($id)->row_array();
        // echo "<pre>".$this->db->last_query()."</pre>"; die();
        $data["barang"] = $this->Barang_m->getAll();
		$source = array(            
            'shang'       => "SIPUJA"
            // ,
            // 'user'        => $user
        );
        $this->load->view('core/header_v',$source);
        $this->load->view('barang/list');
        $this->load->view('core/footer_v');
	}

    function table_barang_json(){
        $data       =  $this->Barang_m->getAll();
        // ob_start("ob_gzhandler");
        echo json_encode($data);        
    }
//input
    public function add()
    {
        $barang = $this->Barang_m;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("barang/add");
    }

//edit
    public function edit($id = null)
    {
        if (!isset($id)) redirect('barang/edit');
       
        $barang = $this->Barang_m;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["barang"] = $barang->getById($id);
        if (!$data["barang"]) show_404();
        
        $this->load->view("barang/edit", $data);
    }

//delete
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Barang_m->delete($id)) {
            redirect(site_url('barang/list'));
        }
    }
}