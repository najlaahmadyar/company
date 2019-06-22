<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presidency extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "Presidencies List";
		$this->data['page'] = 'about';		
        $this->load->model('presidency_model');	
        $this->load->model('deputy_minister_model');	
	}
   

    public function index(){       
        $this->common_model->join('executions', 'pr_exe_id = exe_id');
        $presidencies = $this->presidency_model->get();		
		$this->data['presidencies'] = $presidencies;
		$this->load->view('cms/presidency/index', $this->data);
    }

    public function add_new(){
		$this->data['page_title'] = "Presedency Lists";

        $this->data['executions'] = $this->deputy_minister_model->get();
        $this->data['presidency'] = $this->presidency_model->get_new();

        $this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
			$this->assets.'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
		);

		$this->data["scripts"] = array(
			$this->assets.'plugins/summernote/dist/summernote.min.js',
			$this->assets . 'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
			$this->assets .  'custom/js/project.js'
		);

		$this->load->view('cms/presidency/add-edit', $this->data);        
    }

	public function edit($p_id){
		$this->data['page_title'] = "Edit Data";

        $this->data['presidency'] = $this->presidency_model->get($p_id);
		$this->data['executions'] = $this->deputy_minister_model->get();  
		 
		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
			$this->assets.'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
		);

		$this->data["scripts"] = array(
			$this->assets.'plugins/summernote/dist/summernote.min.js',
			$this->assets . 'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/presidency/add-edit', $this->data);
	}

    public function save($id = null){
        
        $pre = $this->presidency_model->array_from_post(array('title_dari', 'title_pashto', 'title_eng', 'desc_dari', 'desc_pashto', 'desc_eng','exe_id'), 'pr_');       
		
        $this->presidency_model->save($pre, $id);
        
		redirect($this->url.'cms/presidency');
    }
    
	public function delete($pr_id){
		if($pr_id != null){
			$this->presidency_model->delete($pr_id);
		}
		redirect($this->url.'cms/presidency');
    }
    

}
  