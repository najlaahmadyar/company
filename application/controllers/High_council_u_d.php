<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class High_council_u_d extends Mudl_controller{

	function __Construct(){
		parent::__Construct();
	}

	public function index()
	{
		$this->load->view('h_council_u_d/approval', $this->data);
    }
    
    public function desicions(){
		$this->load->view('h_council_u_d/desicions', $this->data);
        
    }
}
