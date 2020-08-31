<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Pelanggan_m extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

    function ambil_data(){
        $query = "SELECT * FROM pelanggan";	
        return $this->db->query($query);		
    }    

}