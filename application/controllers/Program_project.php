<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_project extends Mudl_controller{

	function __Construct(){
		parent::__Construct();
		$this->load->model('project_model');
        $this->data['page'] = "project";

	}

	public function index()
	{
		$this->data['projects'] = $this->project_model->get();
		$this->load->view('program_project/index', $this->data);
	}

	public function single($p_id){
		$this->data['project'] = $this->project_model->get($p_id);
		$this->load->view('program_project/single', $this->data);
	}

	public function get_project(){
		$p_id = $this->input->get('proj_id');
		$proj = $this->project_model->get($p_id);
		$lang = $_SESSION['lang'];

		$title = 'p_title_'.$lang;
		$desc = 'p_desc_'.$lang;

		$project["title"] = $proj->$title;
		$project["desc"] = html_entity_decode($proj->$desc);
		$project["image"] = $proj->p_photo;

		echo json_encode($project);
	}
}
