<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Cms_controller{

	function __Construct()
	{
		parent::__Construct();
	}

	public function index()
	{
		$this->load->view('cms/home', $this->data);
	}
}
