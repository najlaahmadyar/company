<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends Cms_controller{
    
	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "List of Reports";
		$this->data['page'] = 'database';		
        $this->load->model('report_model');		
	}

	public function index()
	{        		
		$report = $this->report_model->get();		
		$this->data['reports'] = $report;
		$this->load->view('cms/reports/index', $this->data);
		
	
	}public function add_new(){
		$this->data['page_title'] = "Add New data";
		$this->data['report'] = $this->report_model->get_new();

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
			$this->assets.'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
		);

		$this->data["scripts"] = array(
			$this->assets.'plugins/summernote/dist/summernote.min.js',
			$this->assets . 'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/reports/add-edit.php', $this->data);
	}

	public function edit($p_id){
		$this->data['page_title'] = "Edit data";

		$this->data['report'] = $this->report_model->get($p_id);

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
			$this->assets.'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
			$this->assets . 'plugins/summernote/dist/summernote.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/reports/add-edit.php', $this->data);
	}

	public function save($id = null){

		$report = $this->report_model->array_from_post(array('title_dari', 'title_pashto', 'title_eng', 'desc_dari', 'desc_pashto', 'desc_eng','date'), 'rep_');
		
		$file = '';
		if(!empty($_FILES["rep_image"]["name"])){
			$target_dir = "uploads/report_images/";
			$target_file = $target_dir . basename($_FILES["rep_image"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			$temp = explode(".", $_FILES["rep_image"]["name"]);
			$newfilename = 'report_'.round(microtime(true)).'.'.end($temp);
			$path = $target_dir .$newfilename;
			if (move_uploaded_file($_FILES["rep_image"]["tmp_name"], $path)) {
				$file = $newfilename;		
			}

			$report['rep_image'] = $file;
	}
		
        
		$this->report_model->save($report, $id);
		redirect($this->url.'cms/report');
	}

	public function delete($p_id){
		if($p_id != null){
			$this->report_model->delete($p_id);
		}
		redirect($this->url.'cms/report');
	}



}
  