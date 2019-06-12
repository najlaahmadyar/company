<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->assets = $this->url.'assets/cms/';
		$this->upload = $this->url.'_uploads/';
		$this->data['url'] = $this->url;
		$this->data['upload'] = $this->upload;
		$this->data['assets'] = $this->assets;
		$this->load->model('project_model');
		
	}

	public function index()
	{
		$projects = $this->project_model->get();		
		$this->data['projects'] = $projects;
		$this->load->view('cms/projects/index', $this->data);
		
	
	}
 
	// public function delete($p_id){
	// 	if($p_id != null){
	// 		$this->project_model->delete($id);
	// 	}
	// 	redirect($this->url.'cms/projects');
	// }s


















}
  