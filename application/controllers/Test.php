<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Test_model');
	}

	public function index()
	{
		$this->load->view('register');
    }
    
      
     public function insert(){

		$this->load->view('insert');
    }
    
    	public function insertdata(){
			$data = array(
				'Car_id' => $this->input->post("Car_id"),
				'ds' => $this->input->post("ds"),
				'outds' => $this->input->post("outds"),
				'tohuy'=> $this->input->post("tohuy"),
				'outhuy'=> $this->input->post("outhuy"),
				'terminal'=> $this->input->post("terminal"),
				'toterminal'=> $this->input->post("toterminal"),
				'note'=> $this->input->post("note")
				);
				// $this->Menu->menu_insert($data);
				$this->Test_model->Alumniw($data);
				$this->load->view('register');
				// $this->load->view('view_insert_successwithmenulink');
			  
		
        }
        
        public function table()
	{
		$result['register'] = $this->Test_model->Allbus();
		$this->load->view('find',$result);

		
	}

}