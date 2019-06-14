<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class High_council_ubran_development extends Cms_controller{
    
	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "High Council of Urban Deveopment";
		$this->data['page'] = 'high_council';		
        $this->load->model('high_council_ud_model');		
	}

	public function index()
	{
        $this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/summernote/dist/summernote.min.js',
			$this->assets .  'custom/js/project.js'
        );
        		
		$hc_data = $this->high_council_ud_model->get();		
		$this->data['hc_datas'] = $hc_data;
		$this->load->view('cms/high_council_ub/index', $this->data);
		
	
	}public function add_new(){
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
		$this->data['page_title'] = "Add New Project";

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
			
			if (move_uploaded_file($_FILES["p_photo"]["tmp_name"], $target_file)) {
				$photo = $_FILES["p_photo"]["name"];		
			}
		}
		
		$project['p_photo'] = $photo;
		
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
  