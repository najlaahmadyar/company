<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_announcement extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "List of All Announced Jobs";
		$this->data['page'] = 'job_ann';		
		$this->load->model('job_announcement_model');		
	}

	public function index()
	{
		$announcements = $this->job_announcement_model->get();
		$this->data['announcements'] = $announcements;
		$this->load->view('cms/job_announcement/index', $this->data);
		
	
	}
	
	public function add_new(){
		$this->data['page_title'] = "Add New Announcement";

		$this->data["styles"] = array(
			$this->assets.'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'
		);

        $this->data['announcement'] = $this->job_announcement_model->get_new();
        
		$this->load->view('cms/job_announcement/add-edit.php', $this->data);
	}

	public function edit($doc_id){
		$this->data['page_title'] = "Edit Announcemnt";	

		$this->data["styles"] = array(
			$this->assets.'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'
		);


		$this->data['announcement'] = $this->job_announcement_model->get($doc_id);
		
		$this->load->view('cms/job_announcement/add-edit.php', $this->data);
	}

	public function save($id = null){

		$announcement = $this->job_announcement_model->array_from_post(array('title','office_name', 'start_date', 'expiration_date','expiration_date', 'duty_station','edu_degree', 'field_of_study', 'exp_year', 'email'), 'ja_');
		
		$file = '';
		if(!empty($_FILES["ja_attachment"]["name"])){
			$target_dir = "uploads/job_announcement/";
			$target_file = $target_dir . basename($_FILES["ja_attachment"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			$temp = explode(".", $_FILES["ja_attachment"]["name"]);
			$newfilename = 'attachment_'.round(microtime(true)).'.'.end($temp);
			$path = $target_dir .$newfilename;
			if (move_uploaded_file($_FILES["ja_attachment"]["tmp_name"], $path)) {
                $file = $newfilename;		
			    $announcement['ja_attachment'] = $file;                
            }
    	}
		
		
		$this->job_announcement_model->save($announcement, $id);
		redirect($this->url.'cms/job_announcement');
	}

	public function delete($p_id){
		if($p_id != null){
			$this->job_announcement_model->delete($p_id);
		}
		redirect($this->url.'cms/job_announcement');
	}

}
  