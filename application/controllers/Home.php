<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Mudl_controller{

	function __Construct()
	{
		parent::__Construct();
        $this->data['page'] = "home";

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

	public function change_lang($lang){

		if($lang == 'dari'){
			$lang = 'dari';
		}else if( $lang == 'pashto'){
			$lang = 'pashto';
		}else{
			$lang = 'eng';
		}

		$this->session->set_userdata('lang',$lang);

		redirect($_SERVER['HTTP_REFERER']);

	}
}
