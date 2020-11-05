<?php
	class Test_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function Alumniw($data){
			$this->db->insert('car1',$data);
		}

		
		function showone()
		{
		$result = $this->db->select('*')
			->from('car1')
			->where('ds','สุริน')
			->get();
			return $result;
		}
		
	}