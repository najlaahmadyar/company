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
		$this->data["uploads"] = $this->url.'uploads';
		$this->data['page'] = null;
		$this->data['page_title'] = "";

		
		if(!isset($_SESSION['lang'])){
			$_SESSION['lang'] = "dari";
		}

		$lang = $this->session->userdata('lang');
		
        $this->lang->load('home/index', $lang);
		
		// $this->load->model('employee_model');
		// $this->load->model('common_model');

		
        // if($this->log_lib->loggedin() == true){
		// 	$this->employee_model->join('tbl_jobs', 'emp_job_id = job_id');
		// 	$this->employee_model->join('tbl_users', 'emp_user_id = user_id');
		// 	$this->data['user'] = $this->employee_model->get_by('emp_user_id = '.$_SESSION['user_id'], true, 'emp_id, emp_first_name, emp_last_name, job_title, emp_image_path, user_is_flexible');
			
		// 	$this->data['notifications'] = $this->log_lib->get_notification($_SESSION['user_id'], $_SESSION['user_role']);
		
		// 	$this->common_model->set('tbl_office_open_close_hours', "hour_id");
		// 	$time = $this->common_model->get(null,true);

		// 	$this->data['open_hour'] = $time->hour_start;
		// 	$this->data['close_hour'] = $time->hour_end;

		// }else{
		// 	redirect($this->url.'login');exit;
		// }
	}

}