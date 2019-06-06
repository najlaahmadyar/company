<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Mudl_controller{

	function __Construct(){
		parent::__Construct();
	}

	public function index()
	{
		$this->load->view('home', $this->data);
	}
}
