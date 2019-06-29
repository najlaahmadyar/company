<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advertisement extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "List of Advertisements";
		$this->data['page'] = 'advertisement';		
		$this->load->model('common_model');		
		$this->common_model->set('advertisements','ad_id');
	}

	public function index()
	{
		$this->data['page_title'] = "List Of Advertisements";

		$advertisements = $this->common_model->get();
		$this->data['advertisements'] = $advertisements;
		$this->load->view('cms/advertisements/index', $this->data);
		
	
	}
	
	public function add_new(){
		$this->data['page_title'] = "Add New advertisement";  
		$ad = new stdClass();
		$ad->ad_id = null;
		$this->data['ad'] = $ad;
		$this->load->view('cms/advertisements/add-edit.php', $this->data);
	}

	public function edit($ad_id){
		$this->data['page_title'] = "Edit advertisement";
		$this->data['ad'] = $this->common_model->get($ad_id);

		$this->load->view('cms/advertisements/add-edit.php', $this->data);
	}

	public function save($id = null){
		$file = '';
		if(!empty($_FILES["ad_image"]["name"])){
			$target_dir = "uploads/advertisement_images/";
			$target_file = $target_dir . basename($_FILES["ad_image"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			$temp = explode(".", $_FILES["ad_image"]["name"]);
			$newfilename = 'advertisement_'.round(microtime(true)).'.'.end($temp);
			$path = $target_dir .$newfilename;
			if (move_uploaded_file($_FILES["ad_image"]["tmp_name"], $path)) {
				$file = $newfilename;		
			}

			$advertisement['ad_image'] = $file;			
		
			$this->common_model->save($advertisement, $id);
			redirect($this->url.'cms/advertisement');

		}
		
	}

	public function delete($p_id){
		if($p_id != null){
			$this->common_model->delete($p_id);
		}
		redirect($this->url.'cms/advertisement');
	}

}
  