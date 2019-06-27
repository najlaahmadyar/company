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
		$this->load->model('common_model');

		$this->load->model('leader_board_model');
		$this->data['leader'] = $this->leader_board_model->get(null, true);
		
		$this->load->model('partners_model');
		$this->data['partners'] = $this->partners_model->get();

		$this->db->limit(4);
		$this->load->model('news_model');
		$this->data['news'] = $this->news_model->get();

		$this->common_model->set('connection_links', 'l_id');
		$this->data['link'] = $this->common_model->get(null,true);
		
		$this->load->model('office_model');
		$this->data['offices'] = $this->office_model->get();

		$this->load->model('deputy_minister_model');
		$this->data['executions'] = $this->deputy_minister_model->get();

		$this->db->limit(6);
		$this->load->model('report_model');
		$this->data['reports'] = $this->report_model->get();

		$this->db->limit(5);
		$this->load->model('job_announcement_model');
		$this->data['job_anns'] = $this->job_announcement_model->get();

		$this->db->limit(5);
		$this->load->model('procurement_announcement_model');
		$this->data['pro_anns'] = $this->procurement_announcement_model->get();


		$lang = $this->session->userdata('lang');
		
        $this->lang->load('home/index', $lang);
	}

}