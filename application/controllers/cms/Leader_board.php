<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leader_board extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "Leaderboard Message";
		$this->data['page'] = 'leader_board';		
        $this->load->model('leader_board_model');
        
    }

    public function index()
	{
		$this->data['page_title'] = "Leadership Message";
		$this->data["styles"] = array(
			$this->assets.'plugins/summernote/dist/summernote.css',
		);

		$this->data["scripts"] = array(
			$this->assets . 'plugins/summernote/dist/summernote.min.js',
			$this->assets .  'custom/js/project.js'
		);
		$messages = $this->leader_board_model->get(null, true);		
		$this->data['messages'] = $messages;
		$this->load->view('cms/leader_board/edit', $this->data);
    }

    public function save($id = null){

		$messages = $this->leader_board_model->array_from_post(array('fullname_dari', 'fullname_eng', 'bio_dari', 'bio_pashto', 'bio_eng'), 'l_');
		
		$photo = '';
		if(!empty($_FILES["l_photo"]["name"])){
			$target_dir = "uploads/leader_board_image/";
			$target_file = $target_dir . basename($_FILES["l_photo"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			$temp = explode(".", $_FILES["l_photo"]["name"]);
			$newfilename = 'leader_'.round(microtime(true)).'.'.end($temp);
			$path = $target_dir .$newfilename;
			if (move_uploaded_file($_FILES["l_photo"]["tmp_name"], $path)) {
				$photo = $newfilename;		
				$messages['l_photo'] = $photo;				
			}
		}
		
		
		$this->leader_board_model->save($messages, $id);
		redirect($this->url.'cms/leader_board');
	}

	
}