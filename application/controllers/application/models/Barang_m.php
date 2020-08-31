<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class barang_m extends CI_Model {
	
	// function __construct() {
	// 	parent::__construct();
	// }
    private $_table = "barang";

    public $idUser;
    public $tglSkg;
    public $idBarang;
    public $namaBarang;
    public $tipeBarang;
    public $harga;
    public $tglExp;

    public function rules()
    {
        return [
            ['field' => 'namaBarang',
            'label' => 'Nama Barang',
            'rules' => 'required'],

            ['field' => 'tipeBarang',
            'label' => 'Tipe Barang',
            'rules' => 'required'],
            
            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'numeric'],

            ['field' => 'tglExp',
            'label' => 'Tanggal Exp',
            'rules' => 'date']

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["idBarang" => $id])->row();
    }

//simpan input
    public function save()
    {
        $post = $this->input->post();
        $this->idBarang = uniqid();
        $this->namaBarang = $post["namaBarang"];
        $this->tipeBarang = $post["tipeBarang"];
        $this->harga = $post["harga"];
        $this->tglExp = $post["tglExp"];
        return $this->db->insert($this->_table, $this);
    }

//edit
    public function update()
    {
        $post = $this->input->post();
        //$this->idBarang = $post["idBarang"];
        $this->namaBarang = $post["namaBarang"];
        $this->tipeBarang = $post["tipeBarang"];
        $this->harga = $post["harga"];
        $this->tglExp = $post["tglExp"];
        return $this->db->update($this->_table, $this, array('idBarang' => $post['idBarang']));
    }

//delete
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("idBarang" => $id));
    }

    

}