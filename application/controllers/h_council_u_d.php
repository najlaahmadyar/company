<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class h_council_u_d extends Mudl_controller{

	function __Construct(){
		parent::__Construct();
	}

	public function index()
	{
		$this->load->view('h_council_u_d/index', $this->data);
    }
}
