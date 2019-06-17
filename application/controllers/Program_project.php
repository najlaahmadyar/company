<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_project extends Mudl_controller{

	function __Construct(){
		parent::__Construct();
		$this->load->model('project_model');
        $this->data['page'] = "project";

	}

	public function index()
	{
		$this->data['projects'] = $this->project_model->get();
		$this->load->view('program_project/index', $this->data);
	}

	public function single($p_id){
		$this->data['project'] = $this->project_model->get($p_id);
		$this->load->view('program_project/single', $this->data);
	}
}
