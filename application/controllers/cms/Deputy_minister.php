<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deputy_minister extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "Deputy Minister list";
		$this->data['page'] = 'about';		
        $this->load->model('deputy_minister_model');	
	}

	public function index()
	{		
		$deputy_minister = $this->deputy_minister_model->get();		
		$this->data['ministers'] = $deputy_minister;
		$this->load->view('cms/deputy_minister/index', $this->data);
	}
	
	public function add_new(){
		$this->data['page_title'] = "Add New Data";

		$this->data['execution'] = $this->deputy_minister_model->get_new();
		
		$this->load->view('cms/deputy_minister/add-edit.php', $this->data);
	}

	public function edit($p_id){
		$this->data['page_title'] = "Edit Data";

		$this->data['execution'] = $this->deputy_minister_model->get($p_id);
		
		$this->load->view('cms/deputy_minister/add-edit.php', $this->data);
	}

	public function save($id = null){


        $deputy_minister = $this->deputy_minister_model->array_from_post(array('name_dari', 'name_pashto', 'name_eng'), 'exe_');       
		
		$this->deputy_minister_model->save($deputy_minister, $id);
		redirect($this->url.'cms/deputy_minister');
	}

	public function delete($exe_id){
		if($exe_id != null){
			$this->deputy_minister_model->delete($exe_id);
		}
		redirect($this->url.'cms/deputy_minister');
    }   

}
  