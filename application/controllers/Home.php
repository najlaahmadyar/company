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
        $this->data['page'] = "contact";

		$this->load->view('contact/contact', $this->data);
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

	public function login(){
		$this->load->view('login', $this->data);
	}

	public function user_login(){		

		$username = $this->input->post("username");
		$password = $this->user_model->hash($this->input->post("password"));

		$where = array("username" => $username, "password" => $password);
		$user = $this->user_model->get_by($where, true);

		if(count($user)){
			$this->log_lib->login($user);
			redirect($this->url.'cms/home');

		}else{
			redirect($this->url ."home/login?msg=fail");
		}
	}

	public function logout(){
		if($this->log_lib->loggedin()){

			$this->log_lib->logout();
			redirect($this->url .'home/login');
		}
	}
}
