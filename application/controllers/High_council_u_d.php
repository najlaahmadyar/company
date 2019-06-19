<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class High_council_u_d extends Mudl_controller{

	function __Construct(){
		parent::__Construct();
		$this->load->model('high_council_ud_model');
    $this->data['page'] = "councils";

	}

	public function index()
	{
		$this->data['councils'] = $this->high_council_ud_model->get();
		$this->load->view('h_council_u_d/index', $this->data);
	}

	public function single($h_id){
		$this->data['councils'] = $this->high_council_ud_model->get($h_id);
		$this->load->view('h_council_u_d/single', $this->data);
	}
}

