<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();   	 
        if($this->session->userdata('site_lang') == "")
        {
        	$this->lang->load('db','indonesian');
        }
        else
        {
        	$this->lang->load('db',$this->session->userdata('site_lang'));
        }
        $this->load->helper("url");
		$this->load->model("base/Data");
		$this->load->library("session");
    }

	public function index()
	{
		$this->load->view('home/index_v');
	}
}
