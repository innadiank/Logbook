<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class karyawan_m extends CI_Model {
	
	// function __construct() {
	// 	parent::__construct();
	// }
    private $_table = "user";

    public $idUser;
    public $nama;
    public $peran;
    public $username;
    public $password;
  

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],
            
            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["idUser" => $id])->row();
    }

//simpan input
    public function save()
    {
        $post = $this->input->post();
        $this->idUser = uniqid();
        $this->nama = $post["nama"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->peran = 2;
        return $this->db->insert($this->_table, $this);
    }

//edit
    public function update()
    {
        $post = $this->input->post();
        //$this->idUser = $post["idUser"];
        $this->nama = $post["nama"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        return $this->db->update($this->_table, $this, array('idUser' => $post['idUser']));
    }

//delete
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("idUser" => $id));
    }

    

}