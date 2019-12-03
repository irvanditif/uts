<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        $this->load->model("log_model");
        $this->load->library("form_validation");
        
    }

	public function index()
	{
		$this->load->view("template/header");
        $this->load->view("template/sidebar");
        $data["log"] = $this->log_model->tampil_data();
		$this->load->view("log/list",$data);
		$this->load->view("template/footer");
    }

}