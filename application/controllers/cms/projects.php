<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "Projects";
		$this->data['page'] = 'projects';		
		$this->load->model('project_model');		
	}

	public function index()
	{
		$this->data['page_title'] = "List Of Projects";
		
		$projects = $this->project_model->get();		
		$this->data['projects'] = $projects;
		$this->load->view('cms/projects/index', $this->data);
		
	
	}
	
	public function add_new(){
		$this->data['page_title'] = "Add New Project";

		$this->data['project'] = $this->project_model->get_new();

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/summernote/dist/summernote.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/projects/add-edit.php', $this->data);
	}

	public function edit($p_id){
		$this->data['page_title'] = "Edit Project";

		$this->data['project'] = $this->project_model->get($p_id);

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/summernote/dist/summernote.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/projects/add-edit.php', $this->data);
	}

	public function save($id = null){

		$project = $this->project_model->array_from_post(array('title_dari', 'title_pashto', 'title_eng', 'desc_dari', 'desc_pashto', 'desc_eng'), 'p_');
		
		$photo = '';
		if(!empty($_FILES["p_photo"]["name"])){
			$target_dir = "uploads/projects_image/";
			$target_file = $target_dir . basename($_FILES["p_photo"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

			$temp = explode(".", $_FILES["p_photo"]["name"]);
			$newfilename = 'project_'.round(microtime(true)).'.'.end($temp);
			$path = $target_dir .$newfilename;
			if (move_uploaded_file($_FILES["p_photo"]["tmp_name"], $path)) {
				$photo = $newfilename;		
			}
		$project['p_photo'] = $photo;
	}
		
		
		$this->project_model->save($project, $id);
		redirect($this->url.'cms/projects');
	}

	public function delete($p_id){
		if($p_id != null){
			$this->project_model->delete($p_id);
		}
		redirect($this->url.'cms/projects');
	}


















}
  