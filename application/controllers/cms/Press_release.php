<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Press_release extends Cms_controller{
    
	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "Press Release";
		$this->data['page'] = 'database';		
        $this->load->model('press_release_model');		
	}

	public function index()
	{
		$press_release = $this->press_release_model->get();		
		$this->data['press_releases'] = $press_release;
		$this->load->view('cms/press_release/index', $this->data);
		
	
	}public function add_new(){
		$this->data['page_title'] = "Add New data";
		$this->data['press_release'] = $this->press_release_model->get_new();

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
			$this->assets.'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
		);

		$this->data["scripts"] = array(
			$this->assets.'plugins/summernote/dist/summernote.min.js',
			$this->assets . 'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/press_release/add-edit.php', $this->data);
	}

	public function edit($p_id){
		$this->data['page_title'] = "Edit data";

		$this->data['press_release'] = $this->press_release_model->get($p_id);

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
			$this->assets.'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
			$this->assets . 'plugins/summernote/dist/summernote.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/press_release/add-edit.php', $this->data);
	}

	public function save($id = null){

		$hh_data = $this->press_release_model->array_from_post(array('title_dari', 'title_pashto', 'title_eng','date'), 'pr_');
		
		$file = '';
		if(!empty($_FILES["pr_file"]["name"])){
			$target_dir = "uploads/press_release/";
			$target_file = $target_dir . basename($_FILES["pr_file"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			if (move_uploaded_file($_FILES["pr_file"]["tmp_name"], $target_file)) {
				$file = $_FILES["pr_file"]["name"];		
			}
			$hh_data['pr_file'] = $file;
	}
		
        
		$this->press_release_model->save($hh_data, $id);
		redirect($this->url.'cms/press_release');
	}

	public function delete($p_id){
		if($p_id != null){
			$this->press_release_model->delete($p_id);
		}
		redirect($this->url.'cms/press_release');
	}



}
  