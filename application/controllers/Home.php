<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Mudl_controller{

	function __Construct()
	{
		parent::__Construct();
	}

	public function index()
	{
		$this->load->view('home', $this->data);
	}

	public function contact()
	{
		$this->load->view('contact/contact', $this->data);
	}

	public function urban_sector()
	{
		$this->load->view('urban_sector/urban_sector', $this->data);
	}
}
