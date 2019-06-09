<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_project extends Mudl_controller{

	function __Construct(){
		parent::__Construct();
	}

	public function index()
	{
		$this->load->view('program_project/min_prog_proj', $this->data);
	}

	public function sector_p_p(){
		$this->load->view('program_project/sector_p_p', $this->data);		
	}
}
