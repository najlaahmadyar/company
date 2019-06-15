<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "News";
		$this->data['page'] = 'database';		
		$this->load->model('news_model');		
	}

	public function index()
	{		
		$news = $this->news_model->get();		
		$this->data['news'] = $news;
		$this->load->view('cms/news/index', $this->data);
		
	
	}
	
	public function add_new(){
		$this->data['page_title'] = "Add New news";

		$this->data['news'] = $this->news_model->get_new();

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/summernote/dist/summernote.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/news/add-edit.php', $this->data);
	}

	public function edit($p_id){
		$this->data['page_title'] = "Edit news";

		$this->data['news'] = $this->news_model->get($p_id);

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/summernote/dist/summernote.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/news/add-edit.php', $this->data);
	}

	public function save($id = null){


        $news = $this->news_model->array_from_post(array('title_dari', 'title_pashto', 'title_eng', 'desc_dari', 'desc_pashto', 'desc_eng'), 'n_');
		
		if(!empty($_FILES["n_photo"]["name"])){
			$target_dir = "uploads/news_image/";
			$target_file = $target_dir . basename($_FILES["n_photo"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			if (move_uploaded_file($_FILES["n_photo"]["tmp_name"], $target_file)) {
				$photo = $_FILES["n_photo"]["name"];		
            }
            $news['n_photo'] = $photo;
            
		}
		
        $news['n_datetime'] = date('Y-m-d H:i:s');
        
		
		$this->news_model->save($news, $id);
		redirect($this->url.'cms/news');
	}

	public function delete($p_id){
		if($p_id != null){
			$this->news_model->delete($p_id);
		}
		redirect($this->url.'cms/news');
	}
}
  