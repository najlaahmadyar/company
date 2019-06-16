<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Success_story extends Cms_controller{
    
	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "List of Stories";
		$this->data['page'] = 'database';		
        $this->load->model('success_story_model');		
	}

	public function index()
	{        		
		$s_story = $this->success_story_model->get();		
		$this->data['s_storys'] = $s_story;
		$this->load->view('cms/success_story/index', $this->data);
		
	
	}public function add_new(){
		$this->data['page_title'] = "Add New data";
		$this->data['s_story'] = $this->success_story_model->get_new();

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
			$this->assets.'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
		);

		$this->data["scripts"] = array(
			$this->assets.'plugins/summernote/dist/summernote.min.js',
			$this->assets . 'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/success_story/add-edit.php', $this->data);
	}

	public function edit($ss_id){
		$this->data['page_title'] = "Edit data";

		$this->data['s_story'] = $this->success_story_model->get($ss_id);

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
			$this->assets.'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
			$this->assets . 'plugins/summernote/dist/summernote.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/success_story/add-edit.php', $this->data);
	}

	public function save($id = null){

		$s_story = $this->success_story_model->array_from_post(array('title_dari', 'title_pashto', 'title_eng', 'desc_dari', 'desc_pashto', 'desc_eng','date'), 'ss_');
		
		$file = '';
		if(!empty($_FILES["ss_image"]["name"])){
			$target_dir = "uploads/stories_images/";
			$target_file = $target_dir . basename($_FILES["ss_image"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			$temp = explode(".", $_FILES["ss_image"]["name"]);
			$newfilename = 'ss_image_'.round(microtime(true));
			$path = $target_dir .$newfilename;
			if (move_uploaded_file($_FILES["ss_image"]["tmp_name"], $path)) {
				$file = $newfilename;		
			}

			$s_story['ss_image'] = $file;
	}
		
        
		$this->success_story_model->save($s_story, $id);
		redirect($this->url.'cms/success_story');
	}

	public function delete($p_id){
		if($p_id != null){
			$this->success_story_model->delete($p_id);
		}
		redirect($this->url.'cms/success_story');
	}



}
  