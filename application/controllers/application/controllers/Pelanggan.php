<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper("url");
        $this->load->model("base/data");
        $this->load->model("base/register");
        $this->load->model("base/updating");
        $this->load->model("base/deleting");
        $this->load->model("Pelanggan_m","pelanggan");
        $this->load->library("form_validation");
        $this->load->library("session");
        if(!$this->session->userdata("idUser"))
        {
            redirect('panel');
        }
    }

    public function index()
	{
        $id=$this->session->userdata("idUser");
        // echo "<pre>".$this->db->last_query()."</pre>"; die();
		$source = array(            
            'shang'       => "SIPUJA",
            'user'        => $id
        );
        $this->load->view('core/header_v',$source);
        $this->load->view('pelanggan/list');
        $this->load->view('core/footer_v');
    }
    
    public function add()
	{
        $id=$this->session->userdata("idUser");
		$source = array(            
            'shang'       => "SIPUJA",
            'user'        => $id
        );
        $this->load->view('core/header_v',$source);
        $this->load->view('pelanggan/add_v');
        $this->load->view('core/footer_v');
    }
    
    function table_pelanggan_json(){
        /* ada 2 cara load data db nya pake yg pertama melalui model ke function ambil data atau melalui base class
            penggunaan base class data functio detail
            param 1 = from dan join *wajib isi
            param 2 = select *wajib isi
            param 3 = where
        */
        $data       =  $this->pelanggan->ambil_data()->result_array();
        // $data       =  $this->data->detail("pelanggan","*");
        ob_start("ob_gzhandler");
        echo json_encode($data);        
    }

    //submit
    function submit(){
        //function harus dipanggil dengan method post
        if($_POST){
			$this->db->trans_start();
            // $data = array
            // (   
            //     'idUser'        => $this->session->userdata("idUser"),
            //     'tglSkg'        => date("Y-m-d H:i:s"),
            //     'namaPelanggan' => "TAN",
            //     'alamat'        => "SBY",
            //     'nomorHp'       => "085799081388"
            // );

            $data = array
            (   
                'idUser'        => $this->session->userdata("idUser"),
                'tglSkg'        => date("Y-m-d H:i:s"),
                'namaPelanggan' => $this->input->post('namaPelanggan'),
                'alamat'        => $this->input->post('alamat'),
                'nomorHp'       => $this->input->post('nomorHp')
            );
            $this->register->input('pelanggan',$data);
            $this->db->trans_complete();
	        if ($this->db->trans_status() === FALSE){
	            $this->session->set_flashdata('error', $this->lang->line('return_add_department_fail'));
	        }
	        else{
	            $this->session->set_flashdata('success', $this->lang->line('return_add_department_success'));
	        }
			redirect('pelanggan');
		}else{
			redirect('pelanggan');
        }
    }

//edit
    function update()
    {
        //function harus dipanggil dengan method post
        if($_POST)
        {
            $this->db->trans_start();   //untuk memulai transaksi database. perlu untuk jika gagal transaksi db akan dibatalkan
            $ID		    	= $this->input->post('txtID');         
            $UserID			= $this->session->userdata("idUser");
            
            $data = array
            (   
                'idUser'        => $this->session->userdata("idUser"),
                'tglSkg'        => date("Y-m-d H:i:s"),
                'namaPelanggan' => $this->input->post('namaPelanggan'),
                'alamat'        => $this->input->post('alamat'),
                'nomorHp'       => $this->input->post('nomorHp')
            );
            $this->updating->update("pelanggan",$data,"ID = ".$ID); //function base model update. param1 = tabel yg diupdate, param 2 = array field yang akan diupdate, param 3 = where
            $this->db->trans_complete();    //akhiri transaksi db. jika batal semua sequence dalam trans start sampai ini akan dibatalkan dan dikembalikan seperi sebelum menjalankan function ini
            if ($this->db->trans_status() === FALSE)        // cek hasil transaksi db untuk munculkan hasil transaksi berhasil atau gagal dalam bentuk flashdata session
            {
                $this->session->set_flashdata('error', "Gagal Update");
            }
            else
            {
                $this->session->set_flashdata('success', "Sukses Update");
            }
            redirect('pelanggan');
        }
        else
        {
            redirect('pelanggan');
        }
    }

//delete
    public function delete($id)
    {   
        $this->db->trans_start();   //untuk memulai transaksi database. perlu untuk jika gagal transaksi db akan dibatalkan
        $where = "idPelanggan = '" . $id . "'";     //where yang akan dihapus
        $this->deleting->deleteData('pelanggan',$where);    //function pada base model deleting untuk mendelete. param1 = nama tabel, param2 = where yang akan didelete
        $this->db->trans_complete();                //akhiri transaksi db. jika batal semua sequence dalam trans start sampai ini akan dibatalkan dan dikembalikan seperi sebelum menjalankan function ini
        if ($this->db->trans_status() === FALSE)    // cek hasil transaksi db untuk munculkan hasil transaksi berhasil atau gagal dalam bentuk flashdata session
        {
            $this->session->set_flashdata('error', "Gagal hapus pelanggan");
        }
        else
        {
            $this->session->set_flashdata('success', "Sukses hapus pelanggan");
        }
        redirect('pelanggan');      //setelah menjalankan function berhasil atau gagal akan di redirect ke controller function utama
    }
}