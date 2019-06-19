<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partners extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "Partners";
		$this->data['page'] = 'partners';		
        $this->load->model('partners_model');
        
    }

    public function index()
	{
		$this->data['page_title'] = "List Of Partners";
		
		$partners = $this->partners_model->get();		
		$this->data['partners'] = $partners;
		$this->load->view('cms/partners/index', $this->data);
    }

    public function delete($po_id){
		if($po_id != null){
			$this->partners_model->delete($po_id);
		}
		redirect($this->url.'cms/partners');
    }
    
    public function add_new(){
		$this->data['page_title'] = "Add New Partner";

		$this->data['partner'] = $this->partners_model->get_new();

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/summernote/dist/summernote.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/partners/add-edit.php', $this->data);
    }
    
    public function save($id = null){

		$partner = $this->partners_model->array_from_post(array('name_dari', 'name_pashto', 'name_eng'), 'po_');
		
		$photo = '';
		if(!empty($_FILES["po_image"]["name"])){
			$target_dir = "uploads/partners_image/";
			$target_file = $target_dir . basename($_FILES["po_image"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			$temp = explode(".", $_FILES["po_image"]["name"]);
			$newfilename = 'partner_'.round(microtime(true)).'.'.end($temp);
			$path = $target_dir .$newfilename;
			if (move_uploaded_file($_FILES["po_image"]["tmp_name"], $path)) {
				$photo = $newfilename;		
				$partner['po_image'] = $photo;				
			}
		}
		
		$this->partners_model->save($partner, $id);
		redirect($this->url.'cms/partners');
	}

	public function edit($po_id){
		$this->data['page_title'] = "Edit Your Partner";

		$this->data['partner'] = $this->partners_model->get($po_id);

		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/summernote/dist/summernote.min.js',
			$this->assets .  'custom/js/project.js'
		);
		
		$this->load->view('cms/partners/add-edit.php', $this->data);
	}
}
	