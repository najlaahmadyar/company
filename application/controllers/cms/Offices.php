<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offices extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "Offices";
		$this->data['page'] = 'about';		
		$this->load->model('office_model');		
	}

	public function index()
	{		
		$office = $this->office_model->get();		
		$this->data['offices'] = $office;
		$this->load->view('cms/office/index', $this->data);
		
	
	}
	
	public function add_new(){
		$this->data['page_title'] = "Add New Office";

		$this->data['office'] = $this->office_model->get_new();

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/summernote/dist/summernote.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/office/add-edit.php', $this->data);
	}

	public function edit($p_id){
		$this->data['page_title'] = "Edit office";

		$this->data['office'] = $this->office_model->get($p_id);

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/summernote/dist/summernote.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/office/add-edit.php', $this->data);
	}

	public function save($id = null){


        $office = $this->office_model->array_from_post(array('title_dari', 'title_pashto', 'title_eng', 'desc_dari', 'desc_pashto', 'desc_eng'), 'off_');       
		
		$this->office_model->save($office, $id);
		redirect($this->url.'cms/offices');
	}

	public function delete($off_id){
		if($off_id != null){
			$this->office_model->delete($off_id);
		}
		redirect($this->url.'cms/offices');
	}
}
  