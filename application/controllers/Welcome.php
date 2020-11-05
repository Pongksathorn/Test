<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		function __construct(){
        parent::__construct();
        $this->load->model('Test_model');
    }
	public function index()
	{
		$this->load->view('register');
	}

	public function show()
	{
		$data['query'] = $this->Test_model->showone();
		$this->load->view('show',$data);
	}
}
