<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Major_work extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "Ministry Major Works";
		$this->data['page'] = 'major_work';		
		$this->load->model('major_work_model');		
	}

	public function index()
	{		
		$works = $this->major_work_model->get();		
		$this->data['works'] = $works;
		$this->load->view('cms/major_work/index', $this->data);
		
	
	}
	
	public function add_new(){
		$this->data['page_title'] = "Add New Data";

		$this->data['work'] = $this->major_work_model->get_new();

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/summernote/dist/summernote.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/major_work/add-edit.php', $this->data);
	}

	public function edit($p_id){
		$this->data['page_title'] = "Edit Data";

		$this->data['work'] = $this->major_work_model->get($p_id);

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/summernote/dist/summernote.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/major_work/add-edit.php', $this->data);
	}

	public function save($id = null){

		$project = $this->major_work_model->array_from_post(array('title_dari', 'title_pashto', 'title_eng', 'desc_dari', 'desc_pashto', 'desc_eng'), 'mw_');
		
		$photo = '';
		if(!empty($_FILES["mw_image"]["name"])){
			$target_dir = "uploads/major_work_image/";
			$target_file = $target_dir . basename($_FILES["mw_image"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

			$temp = explode(".", $_FILES["mw_image"]["name"]);
			$newfilename = 'job_'.round(microtime(true)).'.'.end($temp);
			$path = $target_dir .$newfilename;
			if (move_uploaded_file($_FILES["mw_image"]["tmp_name"], $path)) {
				$photo = $newfilename;		
			}
		$project['mw_image'] = $photo;
	}
		
		
		$this->major_work_model->save($project, $id);
		redirect($this->url.'cms/major_work');
	}

	public function delete($p_id){
		if($p_id != null){
			$this->major_work_model->delete($p_id);
		}
		redirect($this->url.'cms/major_work');
	}


















}
  