<?php
class Mudl_controller extends CI_Controller {

	protected $data = array();
	protected $url = null;
	protected $assets = null;
	protected $error = null;

	function __construct(){
		parent::__construct();
		$this->data['styles']		=		array();
		$this->data['scripts']	=		array();

		$this->url = base_url();
		$this->assets = $this->url ."assets/";
		$this->error = $this->url .'error/index';
				
		$this->data['url'] = $this->url;
		$this->data["assets"] = $this->assets;
		$this->data["uploads"] = $this->url.'uploads/';
		$this->data['page'] = null;
		$this->data['page_title'] = "";

		
		if(!isset($_SESSION['lang'])){
			$_SESSION['lang'] = "dari";
		}

		$this->load->model('leader_board_model');
		$this->data['leader'] = $this->leader_board_model->get(null, true);

		$lang = $this->session->userdata('lang');
		
        $this->lang->load('home/index', $lang);
	}

}