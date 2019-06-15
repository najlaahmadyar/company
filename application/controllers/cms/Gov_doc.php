<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gov_doc extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "List of Documents";
		$this->data['page'] = 'document';		
		$this->load->model('document_model');		
	}

	public function index()
	{
		$this->data['page_title'] = "List Of documents";
		
		$this->document_model->join('document_category','cat_id = doc_cat_id');
		$documents = $this->document_model->get();
		$this->data['documents'] = $documents;
		$this->load->view('cms/gov_document/index', $this->data);
		
	
	}
	
	public function add_new(){
		$this->data['page_title'] = "Add New document";
		$this->data['category'] = $this->document_model->document_category();		

        $this->data['document'] = $this->document_model->get_new();
        
		$this->load->view('cms/gov_document/add-edit.php', $this->data);
	}

	public function edit($doc_id){
		$this->data['page_title'] = "Edit document";
		$this->data['category'] = $this->document_model->document_category();		

		$this->data['document'] = $this->document_model->get($doc_id);
		
		$this->load->view('cms/gov_document/add-edit.php', $this->data);
	}

	public function save($id = null){

		$document = $this->document_model->array_from_post(array('title_dari', 'title_pashto','cat_id', 'title_eng'), 'doc_');
		
		$file = '';
		if(!empty($_FILES["doc_file"]["name"])){
			$target_dir = "uploads/document_files/";
			$target_file = $target_dir . basename($_FILES["doc_file"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			if (move_uploaded_file($_FILES["doc_file"]["tmp_name"], $target_file)) {
				$file = $_FILES["doc_file"]["name"];		
			}
			$document['doc_file'] = $file;

		}
		
		
		$this->document_model->save($document, $id);
		redirect($this->url.'cms/gov_doc');
	}

	public function delete($p_id){
		if($p_id != null){
			$this->document_model->delete($p_id);
		}
		redirect($this->url.'cms/gov_doc');
	}

}
  