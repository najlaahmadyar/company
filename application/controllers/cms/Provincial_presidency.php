<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provincial_presidency extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "Provincial Presidency";
		$this->data['page'] = 'about';		
        $this->load->model('common_model');	
        $this->common_model->set('provicial_presidency', 'pp_id');	
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
        		
		$pp_data = $this->common_model->get(null, true);		
		$this->data['pp_data'] = $pp_data;
		$this->load->view('cms/about_us/provincial_presidency', $this->data);
		
	
	}

	public function save($id = null){

		$pp_data = $this->common_model->array_from_post(array('title_dari', 'title_pashto', 'title_eng', 'desc_dari', 'desc_pashto', 'desc_eng'), 'pp_');
	
		$this->common_model->save($pp_data, $id);
		redirect($this->url.'cms/provincial_presidency');
	}

}
  