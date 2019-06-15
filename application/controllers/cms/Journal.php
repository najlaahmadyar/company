<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journal extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "List of Journals";
		$this->data['page'] = 'database';		
		$this->load->model('journal_model');		
	}

	public function index()
	{		
		$this->journal_model->join('journal_category','jc_id = j_category');
		$journals = $this->journal_model->get();
		$this->data['journals'] = $journals;
		$this->load->view('cms/journal/index', $this->data);
		
	
	}
	
	public function add_new(){
		$this->data['page_title'] = "Add New journal";
		$this->data["styles"] = array(
			$this->assets.'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'
		);
		$this->data['category'] = $this->journal_model->journal_category();		

        $this->data['journal'] = $this->journal_model->get_new();
        
		$this->load->view('cms/journal/add-edit.php', $this->data);
	}

	public function edit($j_id){
		$this->data['page_title'] = "Edit journal";
		$this->data["styles"] = array(
			$this->assets.'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'
		);
		$this->data['category'] = $this->journal_model->journal_category();		

		$this->data['journal'] = $this->journal_model->get($j_id);
		
		$this->load->view('cms/journal/add-edit.php', $this->data);
	}

	public function save($id = null){

		$journal = $this->journal_model->array_from_post(array('date', 'category'), 'j_');
		
		$file = '';
		if(!empty($_FILES["j_file"]["name"])){
			$target_dir = "uploads/journals/";
			$target_file = $target_dir . basename($_FILES["j_file"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			if (move_uploaded_file($_FILES["j_file"]["tmp_name"], $target_file)) {
				$file = $_FILES["j_file"]["name"];		
			}
			$journal['j_file'] = $file;

		}
		
		
		$this->journal_model->save($journal, $id);
		redirect($this->url.'cms/journal');
	}

	public function delete($p_id){
		if($p_id != null){
			$this->journal_model->delete($p_id);
		}
		redirect($this->url.'cms/journal');
	}

}
  