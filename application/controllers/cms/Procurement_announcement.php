<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procurement_announcement extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "List of All Procurement Announcement";
		$this->data['page'] = 'pro_ann';		
		$this->load->model('procurement_announcement_model');		
	}

	public function index()
	{
		$announcements = $this->procurement_announcement_model->get();
		$this->data['announcements'] = $announcements;
		$this->load->view('cms/procurement_announcement/index', $this->data);
		
	
	}
	
	public function add_new(){
		$this->data['page_title'] = "Add New Announcement";

		$this->data["styles"] = array(
			$this->assets.'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'
		);

		$this->data['announcement'] = $this->procurement_announcement_model->get_new();
        
		$this->load->view('cms/procurement_announcement/add-edit.php', $this->data);
	}

	public function edit($doc_id){
		$this->data['page_title'] = "Edit Announcemnt";	

		$this->data["styles"] = array(
			$this->assets.'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'
		);


		$this->data['announcement'] = $this->procurement_announcement_model->get($doc_id);
		
		$this->load->view('cms/procurement_announcement/add-edit.php', $this->data);
	}

	public function save($id = null){

		$announcement = $this->procurement_announcement_model->array_from_post(array('subject', 'start_date', 'end_date', 'email','phone'), 'pa_');
		
		$file = '';
		if(!empty($_FILES["pa_attachment"]["name"])){
			$target_dir = "uploads/procurement_announcement/";
			$target_file = $target_dir . basename($_FILES["pa_attachment"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			$temp = explode(".", $_FILES["pa_attachment"]["name"]);
			$newfilename = 'attachment_'.round(microtime(true)).'.'.end($temp);
			$path = $target_dir .$newfilename;
			if (move_uploaded_file($_FILES["pa_attachment"]["tmp_name"], $path)) {
                $file = $newfilename;		
			    $announcement['pa_attachment'] = $file;                
            }
		}
		
		if(!empty($_FILES["pa_bidding_doc"]["name"])){
			$target_dir = "uploads/procurement_announcement/";
			$target_file = $target_dir . basename($_FILES["pa_bidding_doc"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			$temp = explode(".", $_FILES["pa_bidding_doc"]["name"]);
			$newfilename = 'bidding_document_'.round(microtime(true)).'.'.end($temp);
			$path = $target_dir .$newfilename;
			if (move_uploaded_file($_FILES["pa_bidding_doc"]["tmp_name"], $path)) {
                $file = $newfilename;		
			    $announcement['pa_bidding_doc'] = $file;                
            }
    	}
		
		
		$this->procurement_announcement_model->save($announcement, $id);
		redirect($this->url.'cms/procurement_announcement');
	}

	public function delete($p_id){
		if($p_id != null){
			$this->procurement_announcement_model->delete($p_id);
		}
		redirect($this->url.'cms/procurement_announcement');
	}

}
  