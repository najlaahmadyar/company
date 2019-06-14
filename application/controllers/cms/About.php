<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "About Ministry";
		$this->data['page'] = 'about';		
        $this->load->model('common_model');	
        $this->common_model->set('about_ministry', 'a_id');	
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
        		
		$about = $this->common_model->get(null, true);		
		$this->data['about'] = $about;
		$this->load->view('cms/about_us/about_ministry', $this->data);
		
	
	}

	public function save($id = null){

		$about = $this->common_model->array_from_post(array('title_dari', 'title_pashto', 'title_eng', 'text_dari', 'text_pashto', 'text_eng'), 'a_');
	
		$this->common_model->save($about, $id);
		redirect($this->url.'cms/about');
	}

}
  